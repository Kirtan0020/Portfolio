<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = nl2br(htmlspecialchars($_POST['message']));

    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'prajapatikirtan00@gmail.com';
        $mail->Password   = 'xqsj saui heto mykf'; // Use your app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Send to yourself
        $mail->setFrom('prajapatikirtan00@gmail.com', 'Portfolio Contact');
        $mail->addAddress('prajapatikirtan00@gmail.com', 'Kirtan');
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Message';
        $mail->Body    = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Message:</strong><br>{$message}</p>
        ";
        $mail->send();

        // Send confirmation to user
    
     
        $mail->clearAddresses();
        $mail->addAddress($email, $name);
        $mail->AddEmbeddedImage('Image/006.jpg', 'profilePic');
        $mail->Subject = 'Thank You for Contacting Me';
        $mail->Body = "
        <html>
          <body style='background-color: #f3f4f6; font-family: Arial, sans-serif; padding: 40px;'>
            <div style='max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);'>
        
              <h2 style='color: #2563EB; font-size: 24px; font-weight: 600; margin-bottom: 20px;'>Thanks for Reaching Out!</h2>
              <p style='font-size: 16px;'>Hi {$name},</p>
              <p style='font-size: 16px;'>I really appreciate you contacting me through my portfolio. Here's a summary of your message:</p>
              <p style='font-size: 16px;'><strong>Your Message:</strong><br>{$message}</p>
              <p style='font-size: 16px;'>I'll get back to you as soon as possible.</p>
              <p style='font-size: 16px;'>Best regards,<br> Kirtan</p>
        
              <div style='margin-top: 40px; display: flex; align-items: center;'>
               <img src='cid:profilePic' alt='profile picture' style='width: 64px; height: 64px; border-radius: 50%;'>
                <div style='margin-left: 16px;'>
                  <h2 style='font-size: 18px; font-weight: bold; margin: 0;'>Kirtan Prajapati</h2>
                  <span style='color: #6b7280;'>CSE (AIMI) Student</span>
                </div>
              </div>
        
              <ul style='margin-top: 20px; padding-left: 0; list-style: none; font-size: 15px; color: #374151;'>
                <li style='margin-bottom: 8px;'>📞 +91 8799540046</li>
                <li style='margin-bottom: 8px;'>🌐 www.kirtanprajapati.com</li>
                <li style='margin-bottom: 8px;'>✉️ <a href='mailto:prajapatikirtan00@gmail.com' style='color: #2563EB;'>prajapatikirtan00@gmail.com</a></li>
              </ul>
        
              <div style='margin-top: 16px;'>
                <a href='https://www.linkedin.com/in/prajapati-kirtan/' style='margin-right: 10px; text-decoration: none; color: #6b7280;'>LinkedIn</a>
                <a href='https://github.com/Kirtan0020' style='text-decoration: none; color: #6b7280;'>GitHub</a>
              </div>
        
              <hr style='margin-top: 30px; margin-bottom: 10px; border: none; border-top: 1px solid #e5e7eb;'>
              <p style='text-align: center; font-size: 12px; color: #9ca3af;'>
                Designed & Built with ❤️ by <strong style='color: #2563EB;'>Kirtan Prajapati</strong><br>
                <em>“Code is poetry, and I write my story line by line.”</em>
              </p>
            </div>
          </body>
        </html>
        ";
        $mail->isHTML(true);
        $mail->send();

    
        http_response_code(200);
        echo "Success";
    } catch (Exception $e) {
        http_response_code(500);
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
?>
