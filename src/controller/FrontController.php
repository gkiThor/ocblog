<?php

namespace App\src\controller;

use App\config\Parameter;
use Exception;

class FrontController extends Controller
{
    public function home()
    {
        $articles = $this->articleDAO->getArticles();
        return $this->view->render('frontend/home', [
           'articles' => $articles
        ]);
    }

    public function listes()
    {
        $articles = $this->articleDAO->getArticles();
        return $this->view->render('frontend/listes',[
            'articles' => $articles]);
    }

    public function contact($objet, $contenu, $destinataire)
    {
        $mail = $this->phpmailer;

        //$mail = new PHPMailer(true);
        try {
            /* DONNEES SERVEUR */
            #####################
            $mail->setLanguage('fr', '../PHPMailer/language/');   // pour avoir les messages d'erreur en FR
            $mail->SMTPDebug = 0;            // en production (sinon "2")
            // $mail->SMTPDebug = 2;            // décommenter en mode débug
            $mail->isSMTP();                                                            // envoi avec le SMTP du serveur
            $mail->Host       = 'smtp du serveur';                            // serveur SMTP
            $mail->SMTPAuth   = true;                                            // le serveur SMTP nécessite une authentification ("false" sinon)
            $mail->Username   = 'ne-pas-repondre@mon_domaine.fr';     // login SMTP
            $mail->Password   = '**********';                                                // Mot de passe SMTP
            //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     // encodage des données TLS (ou juste 'tls') > "Aucun chiffrement des données"; sinon PHPMailer::ENCRYPTION_SMTPS (ou juste 'ssl')
            $mail->Port       = 587;                                                               // port TCP (ou 25, ou 465...)
        
            /* DONNEES DESTINATAIRES */
            ##########################
            $mail->setFrom('ne-pas-repondre@mon_domaine.fr', 'No-Reply');  //adresse de l'expéditeur (pas d'accents)
            $mail->addAddress($destinataire, 'Clients de Mon_Domaine');        // Adresse du destinataire (le nom est facultatif)
            // $mail->addReplyTo('moi@mon_domaine.fr', 'son nom');     // réponse à un autre que l'expéditeur (le nom est facultatif)
            // $mail->addCC('cc@example.com');            // Cc (copie) : autant d'adresse que souhaité = Cc (le nom est facultatif)
            // $mail->addBCC('bcc@example.com');          // Cci (Copie cachée) :  : autant d'adresse que souhaité = Cci (le nom est facultatif)
        
            /* PIECES JOINTES */
            ##########################
            // $mail->addAttachment('../dossier/fichier.zip');         // Pièces jointes en gardant le nom du fichier sur le serveur
            // $mail->addAttachment('../dossier/fichier.zip', 'nouveau_nom.zip');    // Ou : pièce jointe + nouveau nom
        
            /* CONTENU DE L'EMAIL*/
            ##########################
            $mail->isHTML(true);                                      // email au format HTML
            $mail->Subject = utf8_decode($objet);      // Objet du message (éviter les accents là, sauf si utf8_encode)
            $mail->Body    = $contenu;          // corps du message en HTML - Mettre des slashes si apostrophes
            $mail->AltBody = 'Contenu au format texte pour les clients e-mails qiui ne le supportent pas'; // ajout facultatif de texte sans balises HTML (format texte)
        
            $mail->send();
            echo 'Message envoyé.';
          
          }
          // si le try ne marche pas > exception ici
          catch (Exception $e) {
            echo "Le Message n'a pas été envoyé. Mailer Error: {$mail->ErrorInfo}"; // Affiche l'erreur concernée le cas échéant
          }  
        return $this->view->render('frontend/contact');
    }

    public function article($articleId)
    {
        $article = $this->articleDAO->getArticle($articleId);
        $comments = $this->commentDAO->getCommentsFromArticle($articleId);
        return $this->view->render('frontend/single', [
            'article' => $article,
            'comments' => $comments
        ]);
    }

    public function addComment(Parameter $post, $articleId)
    {
        if($post->get('submit')) {
            $errors = $this->validation->validate($post, 'Comment');
            if(!$errors) {
                $this->commentDAO->addComment($post, $articleId);
                $this->session->set('add_comment', 'Le nouveau commentaire a bien été ajouté');
                header('Location: ../public/index.php');
            }
            $article = $this->articleDAO->getArticle($articleId);
            $comments = $this->commentDAO->getCommentsFromArticle($articleId);
            return $this->view->render('frontend/single', [
                'article' => $article,
                'comments' => $comments,
                'post' => $post,
                'errors' => $errors
            ]);
        }
    }

    public function flagComment($commentId)
    {
        $this->commentDAO->flagComment($commentId);
        $this->session->set('flag_comment', 'Le commentaire a bien été signalé');
        header('Location: ../public/index.php');
    }

    public function register(Parameter $post)
    {
        if($post->get('submit')) {
            $errors = $this->validation->validate($post, 'User');
            if($this->userDAO->checkUser($post)) {
                $errors['pseudo'] = $this->userDAO->checkUser($post);
            }
            if(!$errors) {
                $this->userDAO->register($post);
                $this->session->set('register', 'Votre inscription a bien été effectuée');
                header('Location: ../public/index.php');
            }
            return $this->view->render('frontend/register', [
                'post' => $post,
                'errors' => $errors
            ]);

        }
        return $this->view->render('frontend/register');
    }

    public function login(Parameter $post)
    {
        if($post->get('submit')) {
            $result = $this->userDAO->login($post);
            if($result && $result['isPasswordValid']) {
                $this->session->set('login', 'Content de vous revoir');
                $this->session->set('id', $result['result']['id']);
                $this->session->set('role', $result['result']['name']);
                $this->session->set('pseudo', $post->get('pseudo'));
                header('Location: ../public/index.php');
            }
            else {
                $this->session->set('error_login', 'Le pseudo ou le mot de passe sont incorrects');
                return $this->view->render('frontend/login', [
                    'post'=> $post
                ]);
            }
        }
        return $this->view->render('frontend/login');
    }
}
