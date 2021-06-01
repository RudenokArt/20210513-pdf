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
<td>'.$data['contract_date'].' г.</td>
</tr>
</table>
<p>Индивидуальный предприниматель Пладас Юлия Владимировна (ОГРНИП 321237500016519), именуемая в дальнейшем <b>“Исполнитель”</b>, и гражданин РФ '.$data['fio'].', именуемый в дальнейшем <b>“Заказчик”</b>, совместно именуемые <b>“Стороны”</b>, заключили настоящий договор оказания услуг по организации семейного спортивного досуга (Далее – “Договор”) о нижеследующем:
</p>
<div class="center_text">
<h3>Термины и определения</h3>
</div>
<p><b>“Программа семейного спортивного досуга” (Также – “Программа”) </b> – комплекс спортивных мероприятий, проводимых Исполнителем для организации семейного спортивного досуга Заказчика и членов его семьи, в формате совместного времяпровождения родителей с детьми. Содержание комплекса спортивных мероприятий, включенных в Программу семейного спортивного досуга, размещено в открытом доступе в сети “Интернет” по адресу: https://семейныйлагерь.рф/, а также описано в Приложении №2 к Договору.    
</p>
<p><b>“Члены семьи заказчика”</b> - граждане, указанные в п. 1.2 Договора, принимающие участие в Программе семейного спортивного досуга.
</p>
<p><b>“Объект размещения”</b> – гостиница, отель, комплекс апартаментов, санаторий, дом отдыха и т. д., в которых временно проживают Заказчик и Члены семьи заказчика в период Участия в программе семейного спортивного досуга (в период оказания услуг по Договору). 
</p>
<div class="center_text">
<h3>1 Предмет договора</h3>
</div>
<p>1.1. Исполнитель обязуется оказать, а Заказчик принять и оплатить, на условиях, предусмотренных Договором следующие услуги: </p>
<p>1.1.1. Организация семейного спортивного досуга Заказчика и Членов семьи заказчика, по Программе семейного спортивного досуга, в месте, указанном в п. 1.3, и в сроки, указанные в п. 1.4. Договора.</p>
<p>1.2. Услуги оказываются Исполнителем в отношении следующих лиц, принимающих участие в Программе семейного спортивного досуга:</p>
'.getMembers().'
<p>1.3 Место оказания услуг: '.getPackage()[2].' </p>
<p>1.4 Сроки оказания услуг: Дата начала Программы: '.getPackage()[0].' Дата окончания Программы: '.getPackage()[1].'</p>
<p>1.5 Исполнитель оказывает Заказчику информационную поддержку в организации проживания в Объекте размещения в месте оказания услуг, а именно: предоставляет информацию о возможных вариантах размещения в Объектах размещения, а также безвозмездно, оказывает Заказчику помощь при бронировании Объекта размещения.  Организацию питания и проезда к месту оказания услуг Заказчика и Членов семьи заказчика, Заказчик осуществляет своими силами.</p>
<div class="center_text">
<h3>2. Стоимость услуг и порядок расчетов</h3>
</div>
<p>2.1. Стоимость услуг по Договору составляет: '.$data['amount'].
'('.num2str($data['amount']).')</p>
<p>2.2.Оплата производится в полном объеме не позднее чем за 21 сутки до даты начала оказания услуг, в соответствии с п. 1.4 Договора на расчетный счет Исполнителя, по реквизитам указанным в п. 9 Договора. </p>
<div class="center_text">
<h3>3. Обеспечение исполнения обязательств Заказчика</h3>
</div>
<p>3.1. При заключении Договора, Заказчик обязуется внести Исполнителю обеспечительный платеж в размере 15 000 (Пятнадцать тысяч) рублей, для обеспечения своевременной и надлежащей оплаты услуг, на основании п. 2 Договора. </p>
<p>3.2. Моментом внесения обеспечительного платежа признается поступление соответствующих денежных средств на расчетный счет Исполнителя, при этом в соответствующих платежных документах должны быть указаны: назначение платежа: <i>“Обеспечительный платеж по Договору от _____”</i>. В случае оплаты обеспечительного платежа частями (несколькими платежами), моментом внесения обеспечительного платежа признается поступление на расчетный счет Исполнителя последней части суммы обеспечительного платежа.</p>
<p>3.3. Обеспечительный платеж, не является платежом по Договору, выполняет исключительно обеспечительную функцию, и по соглашению сторон гарантирует Исполнителю надлежащее исполнение обязательства, предусмотренного п. 2 Договора.</p>
<p>3.4. Исполнитель вправе зачесть обеспечительный платеж, внесенный Заказчиком, либо соответствующую часть суммы обеспечительного платежа (если обязательства по оплате услуг будут исполнены не в полном объеме), в счет оплаты услуг Исполнителя по договору. Зачет производится в случае, если срок оплаты услуг Исполнителя, в соответствии с п. 2 Договора, нарушен Заказчиком более чем на 1 (одни) сутки. При этом согласия Заказчика на соответствующий зачет не требуется.</p>
<p>3.5.В случае исполнения Заказчиком обязательств по оплате услуг Исполнителя в полном объеме, в соответствии с п. 2 Договора, сумма обеспечительного платежа подлежит возврату Заказчику, путем перечисления по реквизитам, указанным Заказчиком, или наличными денежными средствами, в течение 5 (Пяти) календарных дней, с момента поступления суммы оплаты услуг в соответствии с п. 2 Договора на расчетный счет Исполнителя.</p>
<div class="center_text">
<h3>4. Порядок сдачи-приемки услуг</h3>
</div>
<p>4.1. По окончании оказания услуг Исполнитель направляет Заказчику электронный образ Акта оказанных услуг, содержащий образ печати и подписи Исполнителя, по электронной почте, на адрес электронной почты Заказчика, указанный в п. 9 Договора.  </p>
<p>4.2. Заказчик, в течение 3 (трех) рабочих дней с даты получения Акта оказанных услуг, обязуется распечатать и подписать Акт оказанных услуг или направить Исполнителю мотивированный отказ в его подписании. </p>
<p>4.3.Если в указанный в п. 4.2 Договора срок Заказчик не направит подписанный Акт, или не представит мотивированного отказа от подписания Акта, услуги считаются полностью принятыми Заказчиком, без каких-либо претензий по качеству.</p>
<div class="center_text">
<h3>5. Права и обязанности Сторон</h3>
</div>
<p><b>Исполнитель вправе:</b></p>
<p>5.1. Получить с Заказчика оплату услуг по Договору в сумме и в сроки, в соответствии с п. 2 Договора</p>
<p>5.2. Заменить отдельные мероприятия, включенные в Программу семейного спортивного досуга, но не более 40% от содержания Программы. </p>
<p>5.3. Отказать Заказчику в оказании услуг, при нарушении Заказчиком положений п. 2 Договора;</p>
<p>5.4 Привлекать к оказанию услуг по Договору третьих лиц, без предварительного согласования с Заказчиком. За действия привлеченных к исполнению Договора третьих лиц Исполнитель отвечает перед Заказчиком. </p>
<p>5.5 Осуществлять фото- и видеосъемку мероприятий Программы семейного спортивного досуга с целью дальнейшего использования фото- и видеоматериалов в рекламных целях и для размещения на сайтах в сети “Интернет”, а также в социальных сетях.</p>
<p>5.6 Досрочно прекратить оказание услуг и расторгнуть Договор, на основании п. 7.2 Договора.
</p>
<p><b>Исполнитель обязан:</b></p>
<p>5.7 Организовать Программу семейного спортивного досуга, в соответствии с содержанием комплекса спортивных мероприятий, включенных в Программу семейного спортивного досуга, размещённого в открытом доступе в сети “Интернет” по адресу: https://семейныйлагерь.рф, а также в соответствии с Приложением №2 к Договору.</p>
<p>5.8 Незамедлительно известить Заказчика о любых изменениях, способных повлиять на надлежащее исполнение Договора.</p>
<p>5.9 Получив доступ к персональным данным Заказчика и Членов семьи Заказчика, не раскрывать третьим лицам и не распространять персональные данные Заказчика и Членов семьи заказчика, кроме случаев, когда Заказчик дал согласие на распространение персональных данных, и когда раскрытие персональных данных необходимо, в целях надлежащего исполнения услуг по Договору</p>
<p><b>Заказчик вправе:</b></p>
<p>5.10  Получать услуги в соответствии с условиями Договора</p>
<p>5.11 Получать всю необходимую и достоверную информацию об Исполнителе и оказываемых им услугах</p>
<p>5.12 Изменить количество участников Программы семейного спортивного отдыха, при уведомлении Исполнителя не менее, чем за 5 дней до даты и времени начала Программы спортивного досуга. Увеличение количества участников Программы производится только при наличии свободных мест для участия в Программе.</p>
<p><b>Заказчик обязан:</b></p>
<p>5.13 Принимать оказываемые Исполнителем по Договору услуги.</p>
<p>5.14 Оплачивать услуги Исполнителя, в размере и в сроки, предусмотренные п. 2 Договора.</p>
<p>5.15 Своими силами, совместно с Членами семьи заказчика прибыть к месту оказания услуг в дату начала Программы семейного спортивного досуга (дату начала оказания услуг по Договору)</p>
<p>5.16 Соблюдать Правила участия в Программе (Приложение № 1 к Договору);</p>
<p>5.17 Бережно относиться к имуществу Исполнителя и возмещать ущерб, причиненный имуществу Исполнителя, в полном объеме.</p>
<p>5.18 Незамедлительно извещать Исполнителя о любых изменениях, способных повлиять на надлежащее исполнение условий Договора.</p>
<p>5.19 Самостоятельно нести ответственность за жизнедеятельность, здоровье и безопасность себя и Членов семьи заказчика, как во время мероприятий, предусмотренных Программой спортивного досуга, так и в свободное время.</p>
<p>5.20 Своими силами организовать проезд к месту оказания услуг, а также оплатить свое проживание и проживание Членов семьи заказчика в Объекте размещения и все сопутствующие расходы, в том числе питание</p>
<div class="center_text">
<h3>6. Ответственность Сторон.</h3>
</div>
<p>6.1 Исполнитель несет установленную законом и Договором ответственность за объем и качество предоставляемых услуг по Договору.</p>
<p>6.2 Заказчик несет установленную законом и Договором ответственность за своевременность и полноту оплаты услуг по Договору.</p>
<p>6.3 Исполнитель не несет ответственности за: </p>
<p>6.3.1 Действия и/или бездействия, являющиеся прямым или косвенным результатом действий/бездействий третьих лиц;</p>
<p>6.3.2 Непредумышленный вред здоровью, причиненный Заказчику или Членам семьи заказчика действиями Исполнителя, вследствие несообщения Заказчиком о наличии у него или Членов семьи заказчика медицинских противопоказаний для участия в Программе семейного спортивного досуга.</p>
<p>6.3.3 Травмы, полученные Заказчиком или Членами семьи заказчика, явившиеся результатом любых самостоятельных действий Заказчика, Членов семьи заказчика, либо действий третьих лиц.</p>
<p>6.4 Исполнитель не несет ответственности за сохранность личного имущества, багажа и документов Заказчика и Членов семьи заказчика, в течение всего периода оказания услуг, если они не сдавались на хранение, с оформлением соответствующих актов приема-передачи.</p>
<p>6.5. Исполнитель не несет ответственности в случаях невозможности получения Заказчиком и Членами семьи заказчика полного объема услуг, право на получение которых установлено Договором, по причинам, не зависящим от Исполнителя, в случае нарушения Заказчиком и Членами семьи заказчика условий Договора и Правил участия в программе семейного спортивного досуга (Приложение №1 к Договору)</p>
<p>6.6 Заказчик самостоятельно несет ответственность за жизнедеятельность, здоровье и безопасность свою и Членов семьи заказчика, как во время мероприятий, предусмотренных Программой семейного спортивного досуга, так и в иное время.</p>
<p>6.7 Заказчик несет полную материальную ответственность за порчу оборудования и имущества Исполнителя и возмещает весь материальный ущерб в полном объеме.</p>
<p>6.8. В случае невозможности оказания услуг по Договору, в связи с введением государственными органами в месте оказания услуг карантина, режима повышенной готовности и иных мероприятий, связанных с недопущением распространения заболеваний, в том числе коронавирусной инфекции, оплата услуг по Договору, возвращается Заказчику, за вычетом фактически понесенных Исполнителем расходов в размере 3000 (трех тысяч) рублей. </p>
<p>6.9 Стороны освобождаются от ответственности за неисполнение или ненадлежащее исполнение обязательств по Договору при возникновении непреодолимых препятствий, под которыми в том числе понимаются: стихийные бедствия, массовые беспорядки, запретительные действия властей, изменения законодательства и иные форс-мажорные обстоятельства. Стороны обязаны уведомить друг друга посредством отправки электронного письма о существовании форс-мажорных обстоятельств в течение 2 (двух) календарных дней с момента их наступления.</p>
<div class="center_text">
<h3>7. Изменение и расторжение Договора</h3>
</div>
<p>7.1 По соглашению Сторон Договор может быть изменен или расторгнут. Все изменения к Договору оформляются путем подписания Сторонами дополнительных соглашений.</p>
<p>7.2 Исполнитель вправе досрочно прекратить предоставление услуг и расторгнуть Договор в одностороннем внесудебном порядке, уведомив об этом Заказчика по электронной почте, указанной в п. 9 Договора, в случае:</p>
<p>- нарушения Заказчиком и Членами семьи заказчика, правил пребывания в Объекте размещения;</p>
<p>- умышленной порчи и разрушения имущества Исполнителя или Объекта размещения;</p>
<p>-систематического нарушения Правил участия в Программе семейного спортивного отдыха (Приложение №1 к Договору);</p>
<p>7.3 В случае досрочного расторжения договора на основании п. 7.2 Договора, стоимость не оказанных Заказчику и Членам семьи заказчика услуг, предусмотренных Программой семейного спортивного досуга, возврату не подлежит.</p>
<p>7.4. Заказчик вправе в одностороннем порядке отказаться от услуг Исполнителя по Договору в любое время, направив письменное уведомление Исполнителю по электронной почте. В случае отказа Заказчика от исполнения Договора Исполнитель обязуется произвести возврат Заказчику оплаченных по Договору денежных средств за вычетом фактически понесенных им расходов.</p>
<p>7.5. При досрочном расторжении Договора по инициативе Заказчика, суммы денежных средств, подлежащих возврату Заказчику, устанавливаются в следующих размерах. </p>
<p>7.5.1 При отказе от исполнения Договора более чем за 45 дней до начала программы– возврату подлежит 100% оплаты суммы по Договору.</p>
<p>7.5.2 При отказе от исполнения Договора в срок от 45 до 21 дня до начала программы– возврату подлежит 50% оплаты суммы по Договору.</p>
<p>7.5.3 При отказе от исполнения Договора от 21 дня до даты начала программы – возврату подлежит 25% оплаты по Договору.</p>
<p>7.6. При досрочном завершении заказчиком Программы семейного спортивного досуга, без уважительной причины (за исключением смерти или внезапного тяжелого заболевания близких родственников (жены, мужа, детей, матери, отца), показаний к экстренному лечению, серьезного обострения заболевания с госпитализацией) стоимость услуг за оставшиеся дни не Заказчику не возвращается.</p>
<p>7.7. При расторжении Договора по инициативе Исполнителя, Исполнитель обязуется произвести возврат Заказчику 100% оплаченных по Договору денежных средств и фактически понесенных им расходов.</p>
<div class="center_text">
<h3>Прочие условия.</h3>
</div>
<p>8.1 Заказчик подтверждает, что ни Заказчик, ни Члены семьи заказчика, в том числе его несовершеннолетние дети, не имеют медицинских противопоказаний для участия в Программе семейного спортивного досуга, и полностью принимает на себя ответственность за состояние своего здоровья и состояние здоровья Членов семьи заказчика.</p>
<p>8.2 Заказчик дает согласие на осуществление Исполнителем в течении срока оказания услуг фото- и видеосъемки, и последующее использование фото- и видеоматериалов в рекламных целях, в том числе на размещение фото- и видеоматериалов на сайтах Исполнителя в сети “Интернет” и в социальных сетях.</p>
<p>8.3 Договор вступает в силу с даты его заключения и действует до окончания Программы семейного спортивного досуга, в соответствии с п. 1.4 Договора, а в части исполнения Сторонами обязательств – до полного их исполнения.</p>
<p>8.4 Все споры и разногласия Стороны будут пытаться решить путем переговоров. В случае невозможности разрешить споры и разногласия путем переговоров они подлежат рассмотрению в Прикубанском районном суде г. Краснодара либо, а при цене иска менее 100 000 (ста тысяч) рублей в участке мирового судьи №43 Прикубанского внутригородского округа г. Краснодара.</p>
<p>8.5 При изменении у одной из Сторон адресов или реквизитов, указанных в п. 9 Договора, такая Сторона обязана уведомить другую Сторону по электронной почте в течение 2 (двух) календарных дней с момента наступления таких изменений. В случае несоблюдения настоящего требования, все отрицательные последствия, связанные с отсутствием у другой стороны надлежащей информации, несет сторона, не осуществившая соответствующее уведомление. </p>
<p>8.6 Заказчик дает свое согласие на обработку и использование персональных данных, указанных в п. 9 Договора, а также на получение звонков, СМС – сообщений, e-mail и почтовых писем, электронных сообщений от Исполнителя и лиц, привлекаемых Исполнителем для выполнения своих обязательств по Договору в соответствии с п. 4.7 Договора. К договору прилагается (Приложение № 3) согласие Заказчика на обработку его персональных данных и персональных данных Членов семьи заказчика.</p>
<p>8.7 Стороны придают юридическую силу электронному документообороту, осуществляемому путём отправки Договора, дополнительных соглашений, заявлений, претензий и иных документов, по электронной почте, на адреса электронной почты Сторон, указанные в п. 9 Договора. При этом Стороны пришли к соглашению, что обмен оригиналами направляемых по электронной почте документов не требуется.</p>
<p>8.8 Исполнитель направляет Заказчику электронный образ Договора, содержащий образ печати и подписи Исполнителя, по электронной почте, на адрес электронной почты Заказчика, указанный в п. 9 Договора.  <b>Стороны признают, что перечисление Заказчиком Исполнителю обеспечительного платежа по Договору (его части), является акцептом и подтверждением заключения Сторонами настоящего Договора, а так же подтверждает ознакомление и согласие Заказчика с Правилами участия в программе семейного спортивного отдыха (Приложение №1 к Договору), Содержанием программы семейного спортивного отдыха (Приложение №2 к Договору), Согласием на обработку персональных данных (Приложение №3 к Договору). Стороны договорились, что подписание Договора и обмен его подписанными бумажными копиями не требуется.</b></p>
<div>
<div class="center_text">
<h3>9. Адреса и реквизиты Сторон</h3>
</div>
<table>
<tr>
<td class="td_boreder">
<b>Исполнитель: </b>
<b>Индивидуальный предприниматель Пладас Юлия Владимировна </b>
ОГРНИП 321237500016519, ИНН: 434592130436 <br>
Дата рождения: 20.07.1987 г.р <br>
Паспорт: 3311 091887, выдан ОУФМС России по Кировской области в Нововятском районе города Кирова, 15 августа 2011 года <br>
Адрес регистрации: Краснодарский край, Северский район, станица Григорьевская, территория Здравое, дом 3<br>
Электронная почта: lager7putei@gmail.com<br>
Телефон: 89184517137<br>
Банковские реквизиты:<br>
Расчетный счет: 4080 2810 3000 0181 5612<br>
Банк: АО "ТИНЬКОФФ БАНК"<br>
ИНН банка: 7710140679<br>
БИК банка: 044525974<br><br><br><br>
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

$html1=$head.'
<div class="right_top">
Приложение № 1 <br>
к Договору оказания услуг по организации <br>
семейного спортивного досуга <br>
от '.$data['contract_date'].' г.<br>
</div>
<br><br><br><br><br><br><br>
<div class="center_text">
<h3>Правила участия в Программе семейного спортивного досуга</h3>
</div>
<p>Заказчик обязуется:</p>
<p>1. При наличии у Заказчика и/или Членов семьи заказчика, признаков острого респираторного, хронического, инфекционного и/или кожного заболевания – уведомить организаторов Программы семейного спортивного досуга и не ставить под угрозу здоровье окружающих людей;</p>
<p>2. Соблюдать общепринятые нормы поведения, вести себя уважительно по отношению к другим участникам Программы, к организаторам Программы, не допускать действий, создающих опасность для окружающих; </p>
<p>3. Разъяснить нормы поведения несовершеннолетним детям;</p>
<p>4. Представлять организаторам Программы своих гостей, не являющихся участниками Программы, оплачивать услуги, оказываемые этим лицам, проинформировать указанных лиц о том, что на них распространяются настоящие Правила;</p>
<p>5. Снимать верхнюю одежду, использовать сменную обувь в помещениях для занятий;</p>
<p>6.Соблюдать правила личной гигиены, не использовать резкие парфюмерные запахи;</p>
<p>Посещать групповые мероприятия согласно расписанию, индивидуальные по графику, согласованному с организатором Программы. </p>
<br><br><br>
<p><b>С правилами ознакомил:</b></p>
<br><br>
<p>Исполнитель 
  <img src="img/stamp.png" alt="печать" height="100">
  <img src="img/signature.png" alt="подпись"  height="100">(печать, подпись)
'.$data['contract_date'].' г.</p>
<br><br><br>
<p><b>С правилами ознакомлен:</b></p>
<p>Заказчик _________________________________________(подпись, расшифровка)
<br><br>« ____»  _____________ 2021 г.</p>

<div class="right_top">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
Приложение № 2 <br>
к Договору оказания услуг по организации <br>
семейного спортивного досуга <br>
от '.$data['contract_date'].' г.<br>
</div>
<br><br><br><br><br><br><br>
<div class="center_text">
<h3>Содержание Программы семейного спортивного досуга</h3>
</div>
<p><b>День заезда:</b></p>
<p>16:00 общий сбор у столовой</p>
<p>20:00-21:00 вечернее мероприятие</p>
<br><br>
<b>Каждый полный день:</b>
<p>6:30-8:00 утренняя практика</p>
<p>8:00-8:30 зарядка</p>
<p>10:30-11:30 спортивные игры на пляже</p>
<p>14:30-16:00 дневная практика</p>
<p>17:00-18:00 спорт час по возрастным группам</p>
<p>20:00-21:00 вечернее мероприятие</p>
<br><br>
<p><b>День выезда:</b></p>
<p>6:30-8:00 утренняя практика</p>
<p>8:00-8:30 зарядка</p>
<br><br>
<p>Время может меняться в зависимости от погодных условий и по согласованию в общем чате с участниками заезда.</p>
<p>Наполнение программы так же может изменяться в зависимости от возраста собравшейся группы, пожеланий участников, погодных условий.</p>
<br><br><br>
<p><b>С содержанием Программы семейного спортивного досуга ознакомил:</b></p>
<br><br>
<p>Исполнитель 
  <img src="img/stamp.png" alt="печать" height="100">
  <img src="img/signature.png" alt="подпись"  height="100">(печать, подпись)
'.$data['contract_date'].' г.</p>
<br><br><br>
<p><b>С содержанием Программы семейного спортивного досуга ознакомлен и согласен:</b></p>
<p>Заказчик _________________________________________(подпись, расшифровка)
<br><br>« ____»  _____________ 2021 г.</p>

<div class="right_top">
<br><br><br><br><br><br><br><br><br>
Приложение № 3 <br>
к Договору оказания услуг по организации <br>
семейного спортивного досуга <br>
от '.$data['contract_date'].' г.<br>
</div>
<br><br><br><br><br><br><br>
<div class="center_text">
<h3>Согласие на обработку персональных данных</h3>
</div>
<P>Я, '.$data['fio'].', предоставляя ИП Пладас Юлии Владимировне (ОГРНИП 321237500016519)  свои персональные данные, а так же персональные данные членов моей семьи, в том числе своих несовершеннолетних детей, настоящим добровольно даю свое согласие ИП Пладас Юлии Владимировне на обработку указанных персональных данных и раскрытие их в необходимом объеме третьим лицам с целью исполнения обязательств по Договору оказания услуг по организации спортивного семейного досуга от '.$data['contract_date'].' г.(Далее – “Договор”)</P>
<P>В перечень предоставляемых мной персональных данных включается вся информация, переданная мной ИП Пладас Юлии Владимировне, включая но не ограничиваясь: фамилия, имя, отчество; дата рождения; место рождения; государство рождения; гражданство; пол; семейное положение; для несовершеннолетних: фамилия, имя, отчество, адрес и гражданство опекуна/законного представителя; домашний адрес; сведения о регистрации; номер телефона; адрес электронной почты; паспортные данные: серия, номер, кем выдан, дата выдачи; данные внутреннего паспорта; данные свидетельства о рождении; данные о документе на пребывание в РФ; </P>
<P>Срок действия согласия - 1 (Один) год. Согласие может быть отозвано путем направления письменного уведомления на электронный адрес ИП Пладас Юлии Владимировны, указанный в Договоре.  Если согласие не было отозвано в указанный срок, срок действия согласия автоматически продлевается до момента его отзыва.
В случае отзыва указанного согласия, ИП Пладас Юлия Владимировна обязуется прекратить обработку не позднее 30 (тридцати) дней с даты получения такого требования.</P>
<br><br><br>
<p>Заказчик _________________________________________(подпись, расшифровка)
<br><br>« ____»  _____________ 2021 г.</p>


<div class="center_text">
<h3></h3>
</div>
'.$foot;?>

















