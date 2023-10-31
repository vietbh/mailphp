<?php 

function GuiMail(){   
    require "PHPMailer/src/PHPMailer.php"; 
    require "PHPMailer/src/SMTP.php"; 
    require 'PHPMailer/src/Exception.php'; 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
    try {
        $email = trim(strip_tags($_POST['email']));
        $title_email =  'Test xem có nhận được thư mời ko';
        $mail->SMTPDebug = 2; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'nambuihoang805@gmail.com'; // SMTP username
        $mail->Password = 'mtog bsmz soyt wnlb';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('nambuihoang805@gmail.com', 'V-Coperation' ); 
        $mail->addAddress($email, 'Vjr'); //mail và tên người nhận  
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = mb_strtoupper( $title_email );
        // $noidungthu = "
        //     <h3>Thư liên hệ từ khách hàng</h3>
        //     <p> Email khách hàng: <br>{$_POST['email']} </p>
        //     <p> Nội dung liên hệ: <br>{$_POST['noidunglienhe']} </p>
        // ";
        $noidungthu = file_get_contents("noidungthulienhe.txt");
        $noidungthu = str_replace(
            [ '{email}' , '{noidung}'], 
            [$_POST['email'], $_POST['noidunglienhe']]
            , $noidungthu);
        $mail->Body = $noidungthu;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        echo 'Đã gửi mail xong';
    } catch (Exception $e) {
        echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
    }
 }//function GuiMail
 if (isset($_POST['btn'])){
    GuiMail();
    header("location:thongbao.php");
 }//if
 ?>