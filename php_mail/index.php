<?php
/**
 * Отправка почты через PHP (SMTP)
 * Сделано в Live-code.ru
 * Автор: Mowshon
 * Дата: 11.11.11
 */

// Подключаем SMTP класс для работы с почтой
include_once('km_smtp_class.php');

// Конфигурационный массив
$SenderConfig = array(
 "SMTP_server"   =>  "smtp.yandex.ru",
 "SMTP_port"     =>  "465",
 "SMTP_email"    =>  "Yuliapladas@yandex.ru",
 "SMTP_pass"     =>  "33067477Las94",
 "SMTP_type"     =>  "ssl"
);

// Email получателя/Получателей
// Lager7putei@gmail.com
$Receiver = Contacts::$admin_mail;
// Тема сообщения
$Subject = "Договор оказания услуг";

// Текст сообщения (в HTML)
// $Text = "Привет!<br />
// Сообщение отправлено из скрипта <strong>Mowshon</strong><br />
// Сайт: http://live-code.ru";

$Text = $data['fio'].' - '.$data['selectedDates'].'<br>
Договор с приложениями в прикрепленных файлах.' ;

// Вложение в письме - адрес к файлу
$Attachment = 'contract.pdf';
$Attachment1='supplement_F.pdf';
$Attachment2='supplement_S.pdf';
$Attachment3='supplement_T.pdf';

/* $mail = new KM_Mailer(сервер, порт, пользователь, пароль, тип); */
/* Тип может быть: null, tls или ssl */
$mail = new KM_Mailer($SenderConfig['SMTP_server'], $SenderConfig['SMTP_port'], $SenderConfig['SMTP_email'], $SenderConfig['SMTP_pass'], $SenderConfig['SMTP_type']);
if($mail->isLogin) {// Прикрепить файл
   if($Attachment) {$mail->addAttachment($Attachment);}
   if (Contacts::$supplement_status['supplement_1']=='Y') {
      if($Attachment2) {$mail->addAttachment($Attachment1);}
   }
   if (Contacts::$supplement_status['supplement_2']=='Y') {
      if($Attachment2) {$mail->addAttachment($Attachment2);}
   }
   if (Contacts::$supplement_status['supplement_3']=='Y') {
      if($Attachment2) {$mail->addAttachment($Attachment3);}
   }

    // Добавить ещё получателей
   $mail->addRecipient($data['email']);
    // $mail->addRecipient('user@yandex.ru');

   /* $mail->send(От, Для, Тема, Текст, Заголовок = опционально) */
   $SendMail = $mail->send($SenderConfig['SMTP_email'], $Receiver, $Subject, $Text);

    // Очищаем список получателей
   $mail->clearRecipients();
   $mail->clearCC();
   $mail->clearBCC();
   $mail->clearAttachments();
}
else {
 echo "Возникла ошибка во время подключения к SMTP-серверу<br />";
}
Helpers::alertMessage('<p>Сообщение отправлено Администратору.</p>
 <p>Договор с приложениями отправлен на почту указанную в заявке.</p>');
echo '<meta http-equiv="refresh" content="5; url=https://семейныйлагерь.рф/" />'
?>