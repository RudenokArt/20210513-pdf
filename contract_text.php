<?php 
$foot='</body></html>';
$head='
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
*,body,div,p,span,b,td,th,h2,img{
  margin:0;
  padding:0;
  line-height:1em;
  font-family:Arial, Helvetica, sans-serif;
  font-size:14px;
}
body{
  padding:50px;
}
.center_text{
  text-align:center;
}
.right_top{
  text-align:right;
}
.date_talbe{
  width:100%;
  text-align:center;
}
table{
  border-collapse:collapse;
  width:100%;
  padding:10px;
}
.td_boreder{
  vertical-align: top !important;
  line-height:1em;
  border:1px solid black;
  padding:5px;
}
h3{
  padding-top:10px;
  padding-bottom:5px;
}
p{
  text-indent: 50px;
  margin:0;
}
</style>';

$html='
'.$head.'
<title>Document</title>
</head>
<body>
<div class="center_text">
<b>ДОГОВОР <br>
оказания услуг по организации семейного спортивного досуга</b>
</div>
<table class="date_talbe">
<tr>
<td>г. Краснодар</td>
<td>'.
date('d:m:Y').' г.
</td>
</tr>
</table>
'.get_contract_text($data)[0].'
<div>
<div class="center_text">
<h3>9. Адреса и реквизиты Сторон</h3>
</div>
<table>
<tr>
<td class="td_boreder">
<b>Исполнитель: </b>
'.Contacts::$contacts_pdf.'
<br><br><br><br>
<img src="img/stamp.png" alt="печать" height="100">
<img src="img/signature.png" alt="подпись"  height="100">
<br>(печать, подпись)
</td>
<td class="td_boreder">
<b>Заказчик</b><br>
<b>ФИО: '.$data['fio'].'</b><br>
Дата рождения: '.$data['birstday'].' <br>
Паспорт: '.$data['passport'].' <br>
Адрес регистрации: '.$data['adress'].' <br>
Электронная почта: '.$data['email'].' <br>
Телефон: '.$data['phone'].'<br><br><br>
______________________ (подпись, расшифровка)
</td>
</table>
</div>
'.$foot;

$pdf_supplement_number = 0;
if (Contacts::$supplement_status['supplement_1']=='Y') {
  $pdf_supplement_number++;
}
$html1=$head.'
<div class="right_top">
Приложение № '.$pdf_supplement_number.' <br>
к Договору оказания услуг по организации <br>
семейного спортивного досуга <br>
от '.
date('d:m:Y')
.' г.<br>
</div>
<br><br><br><br><br><br><br>
'.get_contract_text($data)[1].'
<br><br><br>
<p><b>С правилами ознакомил:</b></p>
<br><br>
<p>
  <img src="img/stamp.png" alt="печать" height="100">
  <img src="img/signature.png" alt="подпись"  height="100">
  <br>Исполнитель (печать, подпись)'.
date('d:m:Y')
.' г.</p>
<br><br><br>
<p><b>С правилами ознакомлен:</b></p>
<p>Заказчик _________________________________________(подпись, расшифровка)
<br><br>« ____»  _____________ 2021 г.</p>
'.$foot;

if (Contacts::$supplement_status['supplement_2']=='Y') {
  $pdf_supplement_number++;
}
$html2=$head.'
<div class="right_top">
Приложение № '.$pdf_supplement_number.' <br>
к Договору оказания услуг по организации <br>
семейного спортивного досуга <br>
от '.
date('d:m:Y')
.' г.<br>
</div>
<br><br><br><br><br><br><br>
'.get_contract_text($data)[2].'
<br><br><br>
<p><b>С содержанием Программы семейного спортивного досуга ознакомил:</b></p>
<br><br>
<p>
  <img src="img/stamp.png" alt="печать" height="100">
  <img src="img/signature.png" alt="подпись"  height="100">
  <br>Исполнитель (печать, подпись)'.
  date('d:m:Y')
  .' г.</p>
<br><br><br>
<p><b>С содержанием Программы семейного спортивного досуга ознакомлен и согласен:</b></p>
<p>Заказчик _________________________________________(подпись, расшифровка)
<br><br>« ____»  _____________ 2021 г.</p>
'.$foot;

if (Contacts::$supplement_status['supplement_3']=='Y') {
  $pdf_supplement_number++;
}
$html3=$head.'
<div class="right_top">
Приложение № '.$pdf_supplement_number.' <br>
к Договору оказания услуг по организации <br>
семейного спортивного досуга <br>
от '.
date('d:m:Y')
.' г.<br>
</div>
<br><br><br><br><br><br><br>
'.get_contract_text($data)[3].'
<br><br><br>
<p>Заказчик _________________________________________(подпись, расшифровка)
<br><br>« ____»  _____________ 2021 г.</p>


<div class="center_text">
<h3></h3>
</div>
'.$foot;?>

















