<?php
   namespace email;
 
   class Cs{
			   public function sentemail($to,$subject,$body){
							//引入类
							//Vendor('PHPMailer.PHPMailerAutoload');
						       include('PHPMailer/PHPMailerAutoload.php');			
							//实例化类
							$mail = new \PHPMailer;

							$mail->isSMTP();                                      // Set mailer to use SMTP
							$mail->Host = 'smtp.partner.outlook.cn';  // Specify main and backup SMTP servers
							$mail->SMTPAuth = true;                               // Enable SMTP authentication
							
							
							$mail->CharSet = 'UTF-8';  //设置邮件内容的编码
							

							//发件邮箱
							$mail->Username = 'newcase@advance-medical.com.cn';                 // SMTP username
							$mail->Password = 'Advance2016';                           // SMTP password
						        
                                                        $mail->Port=587;
							$mail->setFrom('newcase@advance-medical.com.cn', '汇医服务');
									
							//发送邮件地址
							if($to == 1){
								$mail->addAddress('zqk1980@hotmail.com');    //1 等于在申请发送邮件
							 }                     
							 					
							$mail->addReplyTo('newcase@advance-medical.com.cn', 'advance-medical');
					
							$mail->isHTML(true);                                  // Set email format to HTML

							$mail->Subject = $subject;
							$mail->Body    = $body;
							$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

							if(!$mail->send()) {
								echo false;
							} else {
								echo true;
							}
			}
			

    public function activeEmail($to,$subject,$body){
       
							//引入类
							//Vendor('PHPMailer.PHPMailerAutoload');
						       include('PHPMailer/PHPMailerAutoload.php');			
							//实例化类
							$mail = new \PHPMailer;

							$mail->isSMTP();                                      // Set mailer to use SMTP
							$mail->Host = 'smtp.partner.outlook.cn';  // Specify main and backup SMTP servers
							$mail->SMTPAuth = true;                               // Enable SMTP authentication
							
							
							$mail->CharSet = 'UTF-8';  //设置邮件内容的编码
							

							//发件邮箱
							$mail->Username = 'newcase@advance-medical.com.cn';                 // SMTP username
							$mail->Password = 'Kona7309';                           // SMTP password
						       
                                                        $mail->Port=587;
							$mail->setFrom('newcase@advance-medical.com.cn', '汇医服务');
					                
							//发送邮件地址
							if($to){
								$mail->addAddress($to);    //1 等于在申请发送邮件
							 }                     
							 					
							$mail->addReplyTo('newcase@advance-medical.com.cn', 'advance-medical');
					
							$mail->isHTML(true);                                  // Set email format to HTML

							$mail->Subject = $subject;
							$mail->Body    = $body;
							$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                                                      
							$mail->send();
                                                        
							
			}
			
   }



?>