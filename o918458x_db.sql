-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 04 2022 г., 01:22
-- Версия сервера: 5.6.47
-- Версия PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `o918458x_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `camp_contacts`
--

CREATE TABLE `camp_contacts` (
  `id` int(8) NOT NULL,
  `name` varchar(250) NOT NULL,
  `value` text NOT NULL,
  `icon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `camp_contacts`
--

INSERT INTO `camp_contacts` (`id`, `name`, `value`, `icon`) VALUES
(1, 'main-site-url', 'https://семейныйлагерь.рф/', ''),
(2, 'phone', '+79184517137 ', ''),
(5, 'social', 'https://www.instagram.com/familyclub7p/', 'instagram'),
(6, 'social', 'https://vk.com/lager7', 'vk'),
(7, 'social', 'https://tlgg.ru/@Yulia_Pladas', 'telegram'),
(8, 'tag-title', 'Семейный лагерь на море', ''),
(9, 'email', 'Lager7putei@gmail.com', ''),
(10, 'contacts_pdf', '<p><strong>Индивидуальный предприниматель Пладас<br>Юлия Владимировна</strong> <br></p><p>ОГРНИП 321237500016519, <br></p><p>ИНН: 434592130436<br>Дата рождения: 20.07.1987 г.р<br>Паспорт: 3311 091887, выдан ОУФМС России по Кировской<br>области в Нововятском районе города Кирова, 15 августа 2011<br>года<br>Адрес регистрации: Краснодарский край, Северский район,<br>станица Григорьевская, территория Здравое, дом 3<br>Электронная почта: lager7putei@gmail.com<br>Телефон: 89184517137<br>Банковские реквизиты:<br>Расчетный счет: 4080 2810 3000 0181 5612<br>Банк: АО ТИНЬКОФФ БАНК<br>ИНН банка: 7710140679<br>БИК банка: 044525974<br></p>', ''),
(11, 'supplement_1', 'N', ''),
(12, 'supplement_2', 'Y', ''),
(13, 'supplement_3', 'Y', ''),
(15, 'password', 'pass1', '');

-- --------------------------------------------------------

--
-- Структура таблицы `camp_dates`
--

CREATE TABLE `camp_dates` (
  `id` int(8) NOT NULL,
  `date_from` varchar(256) NOT NULL,
  `date_to` varchar(256) NOT NULL,
  `season` varchar(256) NOT NULL,
  `camp` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `camp_dates`
--

INSERT INTO `camp_dates` (`id`, `date_from`, `date_to`, `season`, `camp`) VALUES
(17, '09/04/2022', '17/02/2022', 'spring', 'Дагестан (тур, поездки)'),
(19, '07/05/2022', '10/05/2022', 'spring', 'Калужская обл. (Юхнов)'),
(20, '15/06/2022', '24/06/2022', 'summer', 'Дагестан (п.Инчхе)'),
(21, '25/06/2022', '04/07/2022', 'summer', 'Дагестан (п.Инчхе)'),
(22, '05/07/2022', '14/07/2022', 'summer', 'Дагестан (п.Инчхе)'),
(23, '27/06/2022', '06/07/2022', 'summer', 'Крым (Зеленогорье)'),
(24, '07/07/2022', '16/07/2022', 'summer', 'Крым (Зеленогорье)'),
(25, '17/07/2022', '24/07/2022', 'summer', 'Крым (Зеленогорье)'),
(26, '24/07/2022', '31/07/2022', 'summer', 'Крым (Зеленогорье)'),
(27, '17/07/2022', '31/07/2022', 'summer', 'Крым (Зеленогорье)'),
(28, '20/08/2022', '30/08/2022', 'summer', 'Крым (Зеленогорье)'),
(29, '16/07/2022', '25/07/2022', 'summer', 'Абхазия'),
(31, '11/07/2022', '16/07/2022', 'summer', 'Крым (поход)'),
(32, '18/07/2022', '23/07/2022', 'summer', 'Крым (поход)'),
(33, '19/02/2022', '25/02/2022', 'winter', 'Архыз'),
(34, '25/02/2022', '03/03/2022', 'winter', 'Архыз');

-- --------------------------------------------------------

--
-- Структура таблицы `camp_paragraph`
--

CREATE TABLE `camp_paragraph` (
  `id` int(8) NOT NULL,
  `paragraph_type` varchar(50) NOT NULL,
  `paragraph_number` int(8) NOT NULL,
  `paragraph_text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `camp_paragraph`
--

INSERT INTO `camp_paragraph` (`id`, `paragraph_type`, `paragraph_number`, `paragraph_text`) VALUES
(6, 'contract', 3, 'Индивидуальный предприниматель Пладас Юлия Владимировна (ОГРНИП 321237500016519), именуемая в дальнейшем <b>“Исполнитель”</b>, и гражданин РФ [[fio]], именуемый в дальнейшем <b>“Заказчик”</b>, совместно именуемые <b>“Стороны”</b>, заключили настоящий договор оказания услуг по организации семейного спортивного досуга (Далее – “Договор”) о нижеследующем:\r\n        '),
(7, 'contract', 4, '<h3>Термины и определения</h3>'),
(8, 'contract', 5, '<b>“Программа семейного спортивного досуга” (Также – “Программа”) </b> – комплекс спортивных мероприятий, проводимых Исполнителем для организации семейного спортивного досуга Заказчика и членов его семьи, в формате совместного времяпровождения родителей с детьми. Содержание комплекса спортивных мероприятий, включенных в Программу семейного спортивного досуга, размещено в открытом доступе в сети “Интернет” по адресу: https://семейныйлагерь.рф/, а также описано в Приложении №2 к Договору.    '),
(9, 'contract', 6, '<b>“Члены семьи заказчика”</b> - граждане, указанные в п. 1.2 Договора, принимающие участие в Программе семейного спортивного досуга.'),
(10, 'contract', 7, '<b>“Объект размещения”</b> – гостиница, отель, комплекс апартаментов, санаторий, дом отдыха и т. д., в которых временно проживают Заказчик и Члены семьи заказчика в период Участия в программе семейного спортивного досуга (в период оказания услуг по Договору). '),
(11, 'contract', 8, '<h3>1 Предмет договора</h3>'),
(12, 'contract', 9, '1.1. Исполнитель обязуется оказать, а Заказчик принять и оплатить, на условиях, предусмотренных Договором следующие услуги:'),
(13, 'contract', 110, '1.1.1. Организация семейного спортивного досуга Заказчика и Членов семьи заказчика, по Программе семейного спортивного досуга, в месте, указанном в п. 1.3, и в сроки, указанные в п. 1.4. Договора.'),
(14, 'contract', 120, '1.2. Услуги оказываются Исполнителем в отношении следующих лиц, принимающих участие в Программе семейного спортивного досуга:\r\n[[members]]'),
(15, 'contract', 130, '1.3 Место заключения договора: Краснодарский край, Северский район, ст.Григорьевская.\r\n\r\nМесто оказания услуг: [[place]]'),
(16, 'contract', 140, '1.4 Сроки оказания услуг: Дата начала Программы: [[begin]] Дата окончания Программы: [[end]]'),
(17, 'contract', 150, '1.5 Исполнитель оказывает Заказчику информационную поддержку в организации проживания в Объекте размещения в месте оказания услуг, а именно: предоставляет информацию о возможных вариантах размещения в Объектах размещения, а также безвозмездно, оказывает Заказчику помощь при бронировании Объекта размещения.  Организацию питания и проезда к месту оказания услуг Заказчика и Членов семьи заказчика, Заказчик осуществляет своими силами.'),
(18, 'contract', 160, '<h3>2. Стоимость услуг и порядок расчетов</h3>'),
(19, 'contract', 170, '2.1. Стоимость услуг по Договору составляет: [[amount]]'),
(20, 'contract', 180, '2.2.Оплата производится в полном объеме не позднее чем за 3 суток до даты начала оказания услуг, в соответствии с п. 1.4 Договора на расчетный счет Исполнителя, по реквизитам указанным в п. 9 Договора.'),
(21, 'contract', 190, '<h3>3. Обеспечение исполнения обязательств Заказчика</h3>'),
(22, 'contract', 200, 'Обеспечение не обязательств не предусмотрено'),
(23, 'contract', 210, '<h3>4. Порядок сдачи-приемки услуг</h3>'),
(24, 'contract', 220, '4.1. По окончании оказания услуг Исполнитель направляет Заказчику электронный образ Акта оказанных услуг, содержащий образ печати и подписи Исполнителя, по электронной почте, на адрес электронной почты Заказчика, указанный в п. 9 Договора.'),
(25, 'contract', 230, '4.2. Заказчик, в течение 3 (трех) рабочих дней с даты получения Акта оказанных услуг, обязуется распечатать и подписать Акт оказанных услуг или направить Исполнителю мотивированный отказ в его подписании. '),
(26, 'contract', 240, '4.3.Если в указанный в п. 4.2 Договора срок Заказчик не направит подписанный Акт, или не представит мотивированного отказа от подписания Акта, услуги считаются полностью принятыми Заказчиком, без каких-либо претензий по качеству.'),
(27, 'contract', 250, '<h3>5. Права и обязанности Сторон</h3>'),
(28, 'contract', 260, '<b>Исполнитель вправе:</b>'),
(29, 'contract', 270, '5.1. Получить с Заказчика оплату услуг по Договору в сумме и в сроки, в соответствии с п. 2 Договора'),
(30, 'contract', 280, '5.2. Заменить отдельные мероприятия, включенные в Программу семейного спортивного досуга, но не более 40% от содержания Программы.'),
(31, 'contract', 290, '5.3. Отказать Заказчику в оказании услуг, при нарушении Заказчиком положений п. 2 Договора;'),
(32, 'contract', 300, '5.4 Привлекать к оказанию услуг по Договору третьих лиц, без предварительного согласования с Заказчиком. За действия привлеченных к исполнению Договора третьих лиц Исполнитель отвечает перед Заказчиком.'),
(33, 'contract', 310, '5.5 Осуществлять фото- и видеосъемку мероприятий Программы семейного спортивного досуга с целью дальнейшего использования фото- и видеоматериалов в рекламных целях и для размещения на сайтах в сети “Интернет”, а также в социальных сетях.'),
(34, 'contract', 320, '5.6 Досрочно прекратить оказание услуг и расторгнуть Договор, на основании п. 7.2 Договора.'),
(35, 'contract', 330, '<b>Исполнитель обязан:</b>'),
(36, 'contract', 340, 'Организовать Программу семейного спортивного досуга, в соответствии с содержанием комплекса спортивных мероприятий, включенных в Программу семейного спортивного досуга, размещённого в открытом доступе в сети “Интернет” по адресу: https://семейныйлагерь.рф, а также в соответствии с Приложением №2 к Договору.'),
(37, 'contract', 350, '5.8 Незамедлительно известить Заказчика о любых изменениях, способных повлиять на надлежащее исполнение Договора.'),
(38, 'contract', 360, '5.9 Получив доступ к персональным данным Заказчика и Членов семьи Заказчика, не раскрывать третьим лицам и не распространять персональные данные Заказчика и Членов семьи заказчика, кроме случаев, когда Заказчик дал согласие на распространение персональных данных, и когда раскрытие персональных данных необходимо, в целях надлежащего исполнения услуг по Договору'),
(39, 'contract', 370, '<b>Заказчик вправе:</b>'),
(40, 'contract', 380, '5.10  Получать услуги в соответствии с условиями Договора'),
(41, 'contract', 390, '5.11 Получать всю необходимую и достоверную информацию об Исполнителе и оказываемых им услугах'),
(42, 'contract', 400, '5.12 Изменить количество участников Программы семейного спортивного отдыха, при уведомлении Исполнителя не менее, чем за 5 дней до даты и времени начала Программы спортивного досуга. Увеличение количества участников Программы производится только при наличии свободных мест для участия в Программе.'),
(43, 'contract', 410, '<b>Заказчик обязан:'),
(44, 'contract', 420, '5.13 Принимать оказываемые Исполнителем по Договору услуги.'),
(45, 'contract', 440, '5.14 Оплачивать услуги Исполнителя, в размере и в сроки, предусмотренные п. 2 Договора.'),
(46, 'contract', 450, '5.15 Своими силами, совместно с Членами семьи заказчика прибыть к месту оказания услуг в дату начала Программы семейного спортивного досуга (дату начала оказания услуг по Договору)'),
(47, 'contract', 460, '5.16 Соблюдать Правила участия в Программе (Приложение № 1 к Договору);'),
(48, 'contract', 470, '5.17 Бережно относиться к имуществу Исполнителя и возмещать ущерб, причиненный имуществу Исполнителя, в полном объеме.'),
(49, 'contract', 480, '5.18 Незамедлительно извещать Исполнителя о любых изменениях, способных повлиять на надлежащее исполнение условий Договора.'),
(50, 'contract', 490, '5.19 Самостоятельно нести ответственность за жизнедеятельность, здоровье и безопасность себя и Членов семьи заказчика, как во время мероприятий, предусмотренных Программой спортивного досуга, так и в свободное время.'),
(51, 'contract', 500, '5.20 Своими силами организовать проезд к месту оказания услуг, а также оплатить свое проживание и проживание Членов семьи заказчика в Объекте размещения и все сопутствующие расходы, в том числе питание'),
(52, 'contract', 510, '<h3>6. Ответственность Сторон.</h3>'),
(53, 'contract', 610, '6.1 Исполнитель несет установленную законом и Договором ответственность за объем и качество предоставляемых услуг по Договору.'),
(54, 'contract', 620, '6.2 Заказчик несет установленную законом и Договором ответственность за своевременность и полноту оплаты услуг по Договору.'),
(55, 'contract', 630, '6.3 Исполнитель не несет ответственности за:'),
(56, 'contract', 640, '6.3.1 Действия и/или бездействия, являющиеся прямым или косвенным результатом действий/бездействий третьих лиц;'),
(57, 'contract', 650, '6.3.2 Непредумышленный вред здоровью, причиненный Заказчику или Членам семьи заказчика действиями Исполнителя, вследствие несообщения Заказчиком о наличии у него или Членов семьи заказчика медицинских противопоказаний для участия в Программе семейного спортивного досуга.'),
(58, 'contract', 660, '6.3.3 Травмы, полученные Заказчиком или Членами семьи заказчика, явившиеся результатом любых самостоятельных действий Заказчика, Членов семьи заказчика, либо действий третьих лиц.'),
(59, 'contract', 670, '6.4 Исполнитель не несет ответственности за сохранность личного имущества, багажа и документов Заказчика и Членов семьи заказчика, в течение всего периода оказания услуг, если они не сдавались на хранение, с оформлением соответствующих актов приема-передачи.'),
(61, 'contract', 680, '6.6 Заказчик самостоятельно несет ответственность за жизнедеятельность, здоровье и безопасность свою и Членов семьи заказчика, как во время мероприятий, предусмотренных Программой семейного спортивного досуга, так и в иное время.'),
(62, 'contract', 690, '6.7 Заказчик несет полную материальную ответственность за порчу оборудования и имущества Исполнителя и возмещает весь материальный ущерб в полном объеме.'),
(63, 'contract', 700, '6.8. В случае невозможности оказания услуг по Договору, в связи с введением государственными органами в месте оказания услуг карантина, режима повышенной готовности и иных мероприятий, связанных с недопущением распространения заболеваний, в том числе коронавирусной инфекции, оплата услуг по Договору, возвращается Заказчику, за вычетом фактически понесенных Исполнителем расходов в размере 3000 (трех тысяч) рублей.'),
(64, 'contract', 710, '6.9 Стороны освобождаются от ответственности за неисполнение или ненадлежащее исполнение обязательств по Договору при возникновении непреодолимых препятствий, под которыми в том числе понимаются: стихийные бедствия, массовые беспорядки, запретительные действия властей, изменения законодательства и иные форс-мажорные обстоятельства. Стороны обязаны уведомить друг друга посредством отправки электронного письма о существовании форс-мажорных обстоятельств в течение 2 (двух) календарных дней с момента их наступления.'),
(65, 'contract', 720, '<h3>7. Изменение и расторжение Договора</h3>'),
(66, 'contract', 730, '7.1 По соглашению Сторон Договор может быть изменен или расторгнут. Все изменения к Договору оформляются путем подписания Сторонами дополнительных соглашений.'),
(67, 'contract', 740, '7.2 Исполнитель вправе досрочно прекратить предоставление услуг и расторгнуть Договор в одностороннем внесудебном порядке, уведомив об этом Заказчика по электронной почте, указанной в п. 9 Договора, в случае:'),
(68, 'contract', 750, '- нарушения Заказчиком и Членами семьи заказчика, правил пребывания в Объекте размещения;'),
(69, 'contract', 760, '- умышленной порчи и разрушения имущества Исполнителя или Объекта размещения;'),
(70, 'contract', 770, '-систематического нарушения Правил участия в Программе семейного спортивного отдыха (Приложение №1 к Договору);'),
(71, 'contract', 780, '7.3 В случае досрочного расторжения договора на основании п. 7.2 Договора, стоимость не оказанных Заказчику и Членам семьи заказчика услуг, предусмотренных Программой семейного спортивного досуга, возврату не подлежит.'),
(72, 'contract', 790, '7.4. Заказчик вправе в одностороннем порядке отказаться от услуг Исполнителя по Договору в любое время, направив письменное уведомление Исполнителю по электронной почте. В случае отказа Заказчика от исполнения Договора Исполнитель обязуется произвести возврат Заказчику оплаченных по Договору денежных средств за вычетом фактически понесенных им расходов.'),
(73, 'contract', 800, '7.5. При досрочном расторжении Договора по инициативе Заказчика, суммы денежных средств, подлежащих возврату Заказчику, устанавливаются в следующих размерах.'),
(74, 'contract', 810, '7.5.1 При отказе от исполнения Договора более чем за 45 дней до начала программы– возврату подлежит 100% оплаты суммы по Договору.\r\n'),
(75, 'contract', 820, '7.5.2 При отказе от исполнения Договора в срок от 45 до 21 дня до начала программы– возврату подлежит 50% оплаты суммы по Договору.'),
(76, 'contract', 830, '7.5.3 При отказе от исполнения Договора от 21 дня до даты начала программы – возврату подлежит 25% оплаты по Договору.'),
(77, 'contract', 850, '7.6. При досрочном завершении заказчиком Программы семейного спортивного досуга, без уважительной причины (за исключением смерти или внезапного тяжелого заболевания близких родственников (жены, мужа, детей, матери, отца), показаний к экстренному лечению, серьезного обострения заболевания с госпитализацией) стоимость услуг за оставшиеся дни не Заказчику не возвращается.'),
(78, 'contract', 860, '7.7. При расторжении Договора по инициативе Исполнителя, Исполнитель обязуется произвести возврат Заказчику 100% оплаченных по Договору денежных средств и фактически понесенных им расходов.'),
(79, 'contract', 870, '<h3>Прочие условия.</h3>'),
(80, 'contract', 880, '8.1 Заказчик подтверждает, что ни Заказчик, ни Члены семьи заказчика, в том числе его несовершеннолетние дети, не имеют медицинских противопоказаний для участия в Программе семейного спортивного досуга, и полностью принимает на себя ответственность за состояние своего здоровья и состояние здоровья Членов семьи заказчика.'),
(81, 'contract', 890, '8.2 Заказчик дает согласие на осуществление Исполнителем в течении срока оказания услуг фото- и видеосъемки, и последующее использование фото- и видеоматериалов в рекламных целях, в том числе на размещение фото- и видеоматериалов на сайтах Исполнителя в сети “Интернет” и в социальных сетях.'),
(82, 'contract', 900, '8.3 Договор вступает в силу с даты его заключения и действует до окончания Программы семейного спортивного досуга, в соответствии с п. 1.4 Договора, а в части исполнения Сторонами обязательств – до полного их исполнения.'),
(83, 'contract', 910, '8.4 Все споры и разногласия Стороны будут пытаться решить путем переговоров. В случае невозможности разрешить споры и разногласия путем переговоров они подлежат рассмотрению в Прикубанском районном суде г. Краснодара либо, а при цене иска менее 100 000 (ста тысяч) рублей в участке мирового судьи №43 Прикубанского внутригородского округа г. Краснодара.'),
(84, 'contract', 920, '8.5 При изменении у одной из Сторон адресов или реквизитов, указанных в п. 9 Договора, такая Сторона обязана уведомить другую Сторону по электронной почте в течение 2 (двух) календарных дней с момента наступления таких изменений. В случае несоблюдения настоящего требования, все отрицательные последствия, связанные с отсутствием у другой стороны надлежащей информации, несет сторона, не осуществившая соответствующее уведомление.'),
(85, 'contract', 930, '8.6 Заказчик дает свое согласие на обработку и использование персональных данных, указанных в п. 9 Договора, а также на получение звонков, СМС – сообщений, e-mail и почтовых писем, электронных сообщений от Исполнителя и лиц, привлекаемых Исполнителем для выполнения своих обязательств по Договору в соответствии с п. 4.7 Договора. К договору прилагается (Приложение № 3) согласие Заказчика на обработку его персональных данных и персональных данных Членов семьи заказчика.'),
(86, 'contract', 930, '8.7 Стороны придают юридическую силу электронному документообороту, осуществляемому путём отправки Договора, дополнительных соглашений, заявлений, претензий и иных документов, по электронной почте, на адреса электронной почты Сторон, указанные в п. 9 Договора. При этом Стороны пришли к соглашению, что обмен оригиналами направляемых по электронной почте документов не требуется.'),
(87, 'contract', 940, '8.8 Исполнитель направляет Заказчику электронный образ Договора, содержащий образ печати и подписи Исполнителя, по электронной почте, на адрес электронной почты Заказчика, указанный в п. 9 Договора.  <b>Стороны признают, что перечисление Заказчиком Исполнителю обеспечительного платежа либо любого другого платежа по Договору (его части), является акцептом и подтверждением заключения Сторонами настоящего Договора, а так же подтверждает ознакомление и согласие Заказчика с Правилами участия в программе семейного спортивного отдыха (Приложение №1 к Договору), Содержанием программы семейного спортивного отдыха (Приложение №2 к Договору), Согласием на обработку персональных данных (Приложение №3 к Договору). Стороны договорились, что подписание Договора и обмен его подписанными бумажными копиями не требуется.</b>'),
(88, 'supplement_1', 10, '<h3>Правила участия в Программе семейного спортивного досуга</h3>'),
(89, 'supplement_1', 20, '1. При наличии у Заказчика и/или Членов семьи заказчика, признаков острого респираторного, хронического, инфекционного и/или кожного заболевания – уведомить организаторов Программы семейного спортивного досуга и не ставить под угрозу здоровье окружающих людей;'),
(90, 'supplement_1', 30, '2. Соблюдать общепринятые нормы поведения, вести себя уважительно по отношению к другим участникам Программы, к организаторам Программы, не допускать действий, создающих опасность для окружающих;'),
(91, 'supplement_1', 40, '3. Разъяснить нормы поведения несовершеннолетним детям;'),
(92, 'supplement_1', 50, '4. Представлять организаторам Программы своих гостей, не являющихся участниками Программы, оплачивать услуги, оказываемые этим лицам, проинформировать указанных лиц о том, что на них распространяются настоящие Правила;'),
(93, 'supplement_1', 60, '5. Снимать верхнюю одежду, использовать сменную обувь в помещениях для занятий;'),
(94, 'supplement_1', 70, '6.Соблюдать правила личной гигиены, не использовать резкие парфюмерные запахи;'),
(98, 'supplement_1', 80, 'Посещать групповые мероприятия согласно расписанию, индивидуальные по графику, согласованному с организатором Программы.'),
(99, 'supplement_2', 10, '<h3>Содержание Программы семейного спортивного досуга</h3>'),
(100, 'supplement_2', 20, '<b>День заезда:</b>'),
(101, 'supplement_2', 30, '16:00 общий сбор у столовой'),
(102, 'supplement_2', 40, '20:00-21:00 вечернее мероприятие'),
(103, 'supplement_2', 50, '<b>Каждый полный день:</b>'),
(104, 'supplement_2', 60, '6:30-8:00 утренняя практика'),
(105, 'supplement_2', 70, '8:00-8:30 зарядка'),
(106, 'supplement_2', 80, '10:30-11:30 спортивные игры на пляже'),
(107, 'supplement_2', 90, '14:30-16:00 дневная практика'),
(108, 'supplement_2', 100, '17:00-18:00 спорт час по возрастным группам'),
(109, 'supplement_2', 110, '20:00-21:00 вечернее мероприятие'),
(110, 'supplement_2', 120, '<b>День выезда:</b>'),
(111, 'supplement_2', 130, '6:30-8:00 утренняя практика'),
(112, 'supplement_2', 140, '8:00-8:30 зарядка'),
(113, 'supplement_2', 150, 'Время может меняться в зависимости от погодных условий и по согласованию в общем чате с участниками заезда.'),
(114, 'supplement_2', 160, 'Наполнение программы так же может изменяться в зависимости от возраста собравшейся группы, пожеланий участников, погодных условий.'),
(115, 'supplement_3', 10, '<h3>Согласие на обработку персональных данных</h3>'),
(116, 'supplement_3', 20, 'Я, [[fio]], предоставляя ИП Пладас Юлии Владимировне (ОГРНИП 321237500016519)  свои персональные данные, а так же персональные данные членов моей семьи, в том числе своих несовершеннолетних детей, настоящим добровольно даю свое согласие ИП Пладас Юлии Владимировне на обработку указанных персональных данных и раскрытие их в необходимом объеме третьим лицам с целью исполнения обязательств по Договору оказания услуг по организации спортивного семейного досуга от [[contract_date]] г.(Далее – “Договор”)'),
(117, 'supplement_3', 30, 'В перечень предоставляемых мной персональных данных включается вся информация, переданная мной ИП Пладас Юлии Владимировне, включая но не ограничиваясь: фамилия, имя, отчество; дата рождения; место рождения; государство рождения; гражданство; пол; семейное положение; для несовершеннолетних: фамилия, имя, отчество, адрес и гражданство опекуна/законного представителя; домашний адрес; сведения о регистрации; номер телефона; адрес электронной почты; паспортные данные: серия, номер, кем выдан, дата выдачи; данные внутреннего паспорта; данные свидетельства о рождении; данные о документе на пребывание в РФ;'),
(118, 'supplement_3', 40, 'Срок действия согласия - 1 (Один) год. Согласие может быть отозвано путем направления письменного уведомления на электронный адрес ИП Пладас Юлии Владимировны, указанный в Договоре.  Если согласие не было отозвано в указанный срок, срок действия согласия автоматически продлевается до момента его отзыва.\r\nВ случае отзыва указанного согласия, ИП Пладас Юлия Владимировна обязуется прекратить обработку не позднее 30 (тридцати) дней с даты получения такого требования.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `camp_contacts`
--
ALTER TABLE `camp_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `camp_dates`
--
ALTER TABLE `camp_dates`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `camp_paragraph`
--
ALTER TABLE `camp_paragraph`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `camp_contacts`
--
ALTER TABLE `camp_contacts`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `camp_dates`
--
ALTER TABLE `camp_dates`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `camp_paragraph`
--
ALTER TABLE `camp_paragraph`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
