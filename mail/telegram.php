<?php

$name = $_POST['user_name'];
$subject = $_POST['user_subject'];
$email = $_POST['user_email'];
$msg = $_POST['user_message'];
$token = "5030633785:AAHVXWGV1A6QLsV3O3vkLd0ncr6gBeZmb_k";
$chat_id = "-663674302";
$arr = array(
  'Имя пользователя: ' => $name,
  'Тема: ' => $subject,
  'Email' => $email,
  'Сообщение:' => $msg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram && $sendToTelegram2) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>