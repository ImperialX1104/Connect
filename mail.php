<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    include($_SERVER['DOCUMENT_ROOT'].'/'.'smtp/PHPMailerAutoload.php');
    $mail=new PHPMailer(true);
    $mail->SMTPDebug=0;
    $mail->isSMTP();                                      
    $mail->Host = 'smtp.gmail.com';  
    $mail->Port = 587;                                    
    $mail->SMTPSecure = 'tls';                            
    $mail->SMTPAuth = true;                               
    $mail->Username = 'navneetbaid03@gmail.com';  //client mailid              
    $mail->Password = '';         //client password                 
    
    $mail->SetFrom('12nitinsaini@gmail.com'); //client mail from where mail is sent
    $mail->addAddress('12nitinsaini@gmail.com');   // client mail where mail is received                                                  
    $mail->addReplyTo($email, $name); // Set the Reply-To header
    $mail->isHTML(true);                              
    
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->SMTPOptions=array('ssl'=>array(
        'verify_peer'=>false,
        'verify_peer_name'=>false,
        'allow_self_signed'=>false
    ));
    
    // Try to send the email
    if ($mail->send()) {
        $response = array(
            "status" => "success",
            "message" => "Message sent successfully."
        );
    } else {
        $response = array(
            "status" => "error",
            "message" => "Sorry, an error occurred. Please try again later."
        );
    }

    header("Content-Type: application/json");
    echo json_encode($response);
}
?>
