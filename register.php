<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('phpmailer/class.phpmailer.php');

function smtpmailer($data) {
    try {
        $mail = new PHPMailer(true);
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->CharSet = "UTF-8";
        $mail->Host = $data->email_host;
        $mail->FromName = $data->from_name;
        $mail->Port = intval($data->email_port);
        $mail->Username = $data->username;
        $mail->Password = $data->password;
        $mail->SetFrom($data->from_email, $data->from_name);
        $mail->Subject = $data->subject;
        $mail->Body = $data->body;
        $mail->IsHTML(true);
        $mail->AddAddress($data->to);
		$mail->AddCC(trim($data->cc_emails), 'CSKH');
		
		$image = $data->attactment;
		$data = base64_decode(str_replace(" ","+",substr($image, strpos($image,","))));
		
		$mail->AddStringAttachment($data, 'signature.png', 'base64', 'image/png');
        if (!$mail->Send()) {
            return false;
        } else {
            return true;
        }
    } catch (Exception $ex) {
        return false;
    }
}

//send for customer

$name=$_REQUEST['name'];
$phone=$_REQUEST['phone'];
$birthDate=$_REQUEST['birthDate'];
$cmtnd=$_REQUEST['cmtnd'];
$cmtnd_date=$_REQUEST['cmtnd_date'];
$cmtnd_place=$_REQUEST['cmtnd_place'];
$company=$_REQUEST['company'];
$facebook=$_REQUEST['facebook'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
$signature=$_REQUEST['signature'];
$htdt=$_REQUEST['htdt'];
$thanh_toan=$_REQUEST['thanh_toan'];

$class=$_REQUEST['lop'];

$ht = "Đào tạo trực tiếp";
if(intval($htdt) == 2){
	$ht="Đào tạo trực tuyến";
}else if(intval($htdt) == 3){
	$ht="Đào tạo 1-1";
}
$tt = "Tiền mặt";
if(intval($thanh_toan) == 2){
	$tt="Chuyển khoản";
}

$random_get = substr(number_format(time() * rand(), 0, '', ''), 0, 13);
	
$cus_subject ="[HIKOREAN] Thông báo đăng ký hợp đồng khóa học tiếng Hàn";


$cus_content = '<p>Gửi anh/chị <span style = "text-transform: uppercase;font-weight:both">' . $name . ', </span></p>';
$cus_content .= '<p>Anh/chị đã đăng ký thành công khóa học tiếng hàn.</p>';
$cus_content .= '<p>Mã hợp đồng là  <span style = "text-transform: uppercase;font-weight:both">' . $random_get . ', </span></p>.';
$cus_content .= '<p>Nội dung: </p>';
$cus_content .= "<p>Họ và tên: {$name}</p>";
$cus_content .= "<p>Số điện thoại: {$phone}</p>";
$cus_content .= "<p>Ngày sinh: {$birthDate}</p>";
$cus_content .= "<p>Số CMND / CCCD : {$cmtnd}, cấp ngày {$cmtnd_date} tại {$cmtnd_place}</p>";
$cus_content .= "<p>Trường học/ nơi công tác: {$company}</p>";
$cus_content .= "<p>Facebook/ Zalo: {$facebook}</p>";
$cus_content .= "<p>Email: {$email}</p>";
$cus_content .= "<p>Các lớp học đăng ký: {$class}</p>";
$cus_content .= "<p>Nội dung ghi chú: {$message}</p>";
$cus_content .= "<p>Hình thức đào tạo: {$ht}</p>";
$cus_content .= "<p>Hình thức thanh toán: {$tt}</p>";

$cus_content .= "<p>Trân trọng cảm ơn!</p>";
$cus_content .= "<p><strong>CÔNG TY TNHH ĐÀO TẠO VÀ PHÁT TRIỂN NHÂN LỰC HIKOREAN</strong></p>";
//$cus_content .= "<img src='{$signature}' />";
$mail = new stdClass();
$mail->username = "cskh.hikorean@gmail.com";
$mail->password = "tcewvyoykoejdugs";
$mail->from_name = "[HIKOREAN]";
$mail->from_email = "cskh.hikorean@gmail.com";
$mail->subject = $cus_subject;
$mail->body = $cus_content;
$mail->to = $email;
$mail->cc_emails = "hikoreanno1@gmail.com";
$mail->email_host = "smtp.gmail.com";
$mail->email_port = 465;
$mail->attactment = $signature;

$isSent = smtpmailer($mail);
?>