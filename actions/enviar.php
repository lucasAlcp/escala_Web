<?php 
    //conexão DB
    require_once 'connect.php';

    //inicia sessao
    session_start();

    include "PHPMailer-master/PHPMailerAutoload.php"; 

    //Clear
    function clear($input){
        global $connect;
        //sql
        $var = mysqli_escape_string($connect, $input);
        //xss
        $var = htmlspecialchars($var);
        return $var;
    }

    if(isset($_POST['btn-enviar'])):
        
        $nome = clear($_POST['nome']);
        $email = clear($_POST['email']);
        $tel = clear($_POST['tel']);
        $msg = clear($_POST['msg']);
        
        $sql = "INSERT INTO contatos (nome, email, telefone, mensagem) VALUES ('$nome', '$email', '$tel', '$msg')";
        if(mysqli_query($connect, $sql)):
            //ENVIAR O EMAIL
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPDebug = 2;
            $mail->Host = 'smtp.escalaweb.com.br';
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = 'teste@escalaweb.com.br';
            $mail->Password = '3sd54f';
            $mail->setFrom('teste@escalaweb.com.br', 'Escala');
            $mail->addReplyTo('teste@escalaweb.com.br', 'Escala');
            $mail->addAddress($email, $nome);
            $mail->Subject = 'Novo Contato';
            $mail->Body = $msg;
            if (!$mail->send()) {
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'The email message was sent.';
            }
        
           header('location: ../index.php');
        else:
            echo "ERRO ao cadastrar";
        endif; 
        
    endif;
?>