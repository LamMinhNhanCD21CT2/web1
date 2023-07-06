<?php
    $act="forgetps";
    if(isset($_GET['act']))
    {
        $act = $_GET['act'];
    }
    switch($act)
    {
        case 'forgetps':
            include"./View/forgetpassword.php";
            break;
        case 'forgetps_action':
            //chuyển qua mail
            if(isset($_POST['submit_email']))
            {
                // echo "Hello";
                $email=$_POST['email'];
                $_SESSION['email']=array();
                //kiểm tra email có tồn tại trong database
                $usr= new user();
                $checkemail=$usr->getEmail($email);
                if($checkemail !=false)
                {
                    //tạo code ngẫ nhiên
                    $code = random_int(10,1000);
                    //tạo đối tượng
                    $item = array(
                        'id'=> $code,
                        'email'=>$email,
                    );
                    $_SESSION['email'][]=$item;
                    //tiến hành gửi mail đi
                    $mail = new PHPMailer;
                    $mail->IsSMTP();								//Sets Mailer to send message using SMTP
                    $mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
                    $mail->Port = 587;								//Sets the default SMTP server port
                    $mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
                    $mail->Username = 'lamnhan681@gmail.com';					//Sets SMTP username
                    $mail->Password = 'viwmarwojrlbkyjp';//Phplytest20@php					//Sets SMTP password
                    $mail->SMTPSecure = 'tls';							//Sets connection prefix. Options are "", "ssl" or "tls"
                    $mail->From = 'lamnhan681@gmail.com';					//Sets the From email address for the message
                    $mail->FromName = 'Nhan';				//Sets the From name of the message
                    $mail->AddAddress($email,"Reset Password");		//Adds a "To" address
                    //$mail->AddCC($_POST["email"], $_POST["name"]);	//Adds a "Cc" address
                    $mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
                    $mail->IsHTML(true);							//Sets message type to HTML				
                    $mail->Subject = "Reset password";				//Sets the Subject of the message
                    $mail->Body = "Cấp mã code ".$code;				//An HTML or plain text message body
                    if($mail->Send())
                    {					
                        echo '<script> alert("Check Your Email and Click on the 
                        link sent to your email");</script>';
                        include "./View/resetpw.php";
                    }
                    else
                    {
                        echo "Mail Error ->".$mail->ErrorInfo;
                        include "./View/forgetpassword.php";
                    }
                }
                else
                {
                    echo '<script>alert("Địa chỉ mail không tồn tại");</script>';
                    include "./View/forgetpassword.php";
                }
            }
            break;
        case 'resetps':
            if(isset($_POST['submit_password']))
            {
                $codeold = $_POST['password'];
                foreach($_SESSION['email'] as $key=>$item)
                {
                    if($item['id']==$codeold)
                    {
                        $passnew=md5($codeold);
                        $emailold=$item['email'];
                        //Viết phương thức update
                        $usr = new user();
                        $usr->UpdateEmail($emailold,$passnew);
                    }
                }
                include "./View/login.php";
            }
            break;
    }
    ?>