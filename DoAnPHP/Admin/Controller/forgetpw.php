
<?php
$act = 'forgetpw';
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'forgetpw':
        include "./View/forgetpw.php";
        break;
    case 'forgetpw_action':
        if (isset($_POST['submit_email'])) {
            $_SESSION['email'] = array();
            $email = $_POST['email'];
            $adminlogin = new dangnhap();
            $kqemail = $adminlogin->getEmail($email);
            if ($kqemail != false) {
                $code = random_int(1, 100);
                // echo $code;
                $item = array(
                    'code' => $code,
                    'email' => $email,
                );
                $_SESSION['email'][] = $item;
                // gửi mail
                $mail = new PHPMailer();
                $mail->CharSet = 'utf-8';
                $mail->IsSMTP();                                //Sets Mailer to send message using SMTP
                $mail->SMTPAuth = true;                            //Sets SMTP authentication. Utilizes the Username and Password variables
                $mail->Username = 'buicongminh1672004@gmail.com';                    //Sets SMTP username
                $mail->Password = 'uyxgsszipxahsmzm'; //Phplytest20@php					//Sets SMTP password
                $mail->SMTPSecure = 'tls';                            //Sets connection prefix. Options are "", "ssl" or "tls"
                $mail->Host = 'smtp.gmail.com';        //Sets the SMTP hosts of your Email hosting, this for Godaddy
                $mail->Port = "587";                                //Sets the default SMTP server port
                $mail->From = 'buicongminh1672004@gmail.com';                    //Sets the From email address for the message
                $mail->FromName = 'Cong minh';                //Sets the From name of the message
                $mail->AddAddress($email, 'reciever_name');        //Adds a "To" address
                //$mail->AddCC($_POST["email"], $_POST["name"]);	//Adds a "Cc" address
                $mail->Subject = 'Reset Password';                //Sets the Subject of the message
                $mail->IsHTML(true);                            //Sets message type to HTML				
                $mail->Body = 'Cấp lại mã code ' . $code . '';                //An HTML or plain text message body
                if ($mail->Send())                                //Send an Email. Return true on success or false on error
                {
                    echo '<script>alert("Check your email and click on the link sent to your email");</script>';
                    include "./View/resetpw.php";
                } else {
                    echo "Mail Error - > " . $mail->ErrorInfo;
                    include './View/forgetpw.php';
                }
            } else {
                echo '<script>alert("Địa chỉ mail không tồn tại");</script>';
                include './View/forgetpw.php';
            }
        }
        break;
        case 'resetpw':
            if (isset($_SESSION['email'])) {
                $codenew = $_POST['password'];
    
                foreach($_SESSION['email'] as $key=>$item) {
    
                    if ($item['code']  == $codenew) {
                        $emailold = $item['email'];
                        $passnew = md5($codenew);
                        $adminlogin = new dangnhap();
                        $adminlogin->updateEmail($emailold, $passnew);
                        echo '<script> alert("Đổi mật khẩu thành công !!");</script>';
                    } else {
                        echo '<script> alert("Vui lòng kiểm tra lại mã code !!");</script>';
                    }
                }
            }
            include "./View/adminlogin.php";
            break;
}