<?php
$locVersionTest = $_SERVER["DOCUMENT_ROOT"]  . '/forn_php/Config/Control/(Control)versionTest.php';
$locTrue  = $_SERVER["DOCUMENT_ROOT"]  . '/forn_php/Error/View/(View)true.php';

require $locVersionTest;

$locError7 = $_SERVER["DOCUMENT_ROOT"]  . '/forn_php/Error/View/(View)error7.php';


      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;
      require $_SERVER["DOCUMENT_ROOT"]  . '/forn_php/Composer/vendor/phpmailer/phpmailer/src/Exception.php';
      require $_SERVER["DOCUMENT_ROOT"]  . '/forn_php/Composer/vendor/phpmailer/phpmailer/src/PHPMailer.php';
      require $_SERVER["DOCUMENT_ROOT"]  . '/forn_php/Composer/vendor/phpmailer/phpmailer/src/SMTP.php';
      require $_SERVER["DOCUMENT_ROOT"]  . '/forn_php/Composer/vendor/autoload.php';


if( !empty($data->name) && !empty($data->phoneNb) && !empty($data->location) && !empty($data->calendDate)
	&& !empty($data->description) && !empty($data->txtMsg) && !empty($data->price) ){

            $name = htmlspecialchars($data->name);
            $phoneNb = htmlspecialchars($data->phoneNb);
            $location = htmlspecialchars($data->location);
            $calendDate = htmlspecialchars($data->calendDate);
            $description = htmlspecialchars($data->description);
            $txtMsg = $data->txtMsg;
            $price = htmlspecialchars($data->price);


      $locCodeException =  $_SERVER["DOCUMENT_ROOT"]  . '/forn_php/Error/View/(View)codeException.php';
      
      //$emailRegExp = "/[a-zA-Z0-9]+@(g|hot)mail.com/";

      
      $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->Mailer = "smtp";
      $mail->CharSet = 'UTF-8';  
      $mail->SMTPDebug  = 0;  
      $mail->SMTPAuth   = TRUE;
      $mail->SMTPSecure = "tls";
      $mail->Port       = 587;
      $mail->Host       = "smtp.gmail.com";
      $mail->Username   = "denymanqoushi@gmail.com";
      $mail->Password   = "mafipassword";

      $mail->IsHTML(true);
      $mail->AddAddress("denymanqoushi@gmail.com");
      $mail->SetFrom($mail->Username);
      //$mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
      //$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
      $mail->Subject = "Talabye";
      $content = "<table bgcolor = '#FFFF8E'><tr style='color: #FFA000'><td><div style='color:#D35400'>Name:</div> 
                    $name 
                    <br><div style='color:#D35400'>PhoneNumber:</div>
                    $phoneNb
                    <br><div style='color:#D35400'>Location:</div>
                    $location
                    <br><div style='color:#D35400'>Date To Receive Delivery:</div>
                    $calendDate
                    <br><div style='color:#D35400'>Description:</div>
                    $description
                    <br><div style='color:#D35400'>Price:</div>
                    $price
                    <br>
                    </td></tr><tr bgcolor = '#B7950B'><td style='color: white'>
                    $txtMsg
                    </td></tr></table>";
      
      $mail->MsgHTML($content); 
      if($mail->Send()) {
        //echo "Email sent successfully";
        require $locTrue;
      } else {
        echo "Error while sending Email.";
        //var_dump($mail);
      }
}else require $locError7;
?>