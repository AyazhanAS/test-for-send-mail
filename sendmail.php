<?php
if ($_POST['capcha']!=56) {
    header('location:index.php');
    exit;
}

if ($_POST['subject']==1) {
    $subject = 'вопрос по уроку';
}elseif ($_POST['subject']==2) {
    $subject = 'благодарность';
}elseif ($_POST['subject']==3) {
    $subject = 'жалоба';
}elseif ($_POST['subject']==4) {
    $subject = 'личный вопрос';
}else{
    $subject = 'благодарность';
}

$to = 'ayazhan_91@list.ru';
$from = trim($_POST['email']);

$message = htmlspecialchars($_POST['message']);
$message = urldecode($message);
$message = trim($message);


$headers = "From: $from"."\r\n".
"Reply-To: $from"."\r\n".
"X-Mailer: PHP/".phpversion();

if (mail($to, $from, $message, $headers)) {
    echo 'сообщение отправлено';
}else {
    echo 'сообщение не отправлено';
}


?>