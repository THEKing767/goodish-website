<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Load Composer's autoloader
    require 'vendor/autoload.php';

    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );
        $name = $_POST['name'];
        $email = $_POST['email'];
        $email2 = $_POST['email2'];
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'testtest122344566@gmail.com';                     // SMTP username
        $mail->Password   = 'end11223344556';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('noreply@belogicus.com', 'BeLogicus');
        $mail->addAddress($email, $name);     // Add a recipient
        $mail->addAddress($email2);               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // Attachments
        ////$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = '[BeLogicus] Art Competition Registration';
        $mail->Body    = '<center><p style="color: #111;">'.$name.'has registered for the <b>BeLogicus</b> Art Compitetion.<br><br><br><br><br><br><br><br><br><br><br><br><b>BeLogicus</b> is a NGO that aims to help our community, both internationaly and localy. If you want to vist out website click <a style="color: #111"href="https://testtesttest7.herokuapp.com/index.php">here.</a></p></center>';
        $mail->AltBody = $name.' has registered for the BeLogice Art Compitetion.';

        $mail->send();
        $Ms = true;
        $Mse = false;
    } catch(Exception $e) {
        $Mse = true;
        $Ms = true;
    }
?>