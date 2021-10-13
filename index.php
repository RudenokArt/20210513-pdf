<?php header('Content-type: text/html; charset=utf-8');
include_once 'core/database.php';
include_once 'core/functions.php';


// ========== GLOBALS ==========

$selectedDatesArr=[
  // ['date_from'=>'15/06/2021','date_to'=>'25/06/2021',
  // 'place'=>'Крым Николаевка','room'=>true],
  // ['date_from'=>'27/06/2021','date_to'=>'07/07/2021',
  // 'place'=>'Крым Зеленогорье','room'=>false],
  // ['date_from'=>'09/07/2021','date_to'=>'19/07/21','place'=>
  // 'Крым Зеленогорье','room'=>1],
  // ['date_from'=>'21/07/2021','date_to'=>'31/07/2021',
  // 'place'=>'Крым Зеленогорье','room'=>false],
  // ['date_from'=>'03/08/2021','date_to'=>'13/08/2021', 'place'=>'Дагестан, Инчхе','room'=>false],
  // ['date_from'=>'14/08/2021','date_to'=>'24/08/2021','place'=>'Дагестан, Инчхе','room'=>false],
  // ['date_from'=>'16/08/2021','date_to'=>'26/08/2021','place'=>'Краснодарский край, За Родину','room'=>false],
  ['date_from'=>'02/10/2021','date_to'=>'09/10/2021','place'=>'Дагестан, Инчхе','room'=>false],
  ['date_from'=>'23/10/2021','date_to'=>'30/10/2021','place'=>'Дагестан, Инчхе','room'=>false],
  ['date_from'=>'31/10/2021','date_to'=>'07/11/2021','place'=>'Дагестан, Инчхе','room'=>false],
  // ['date_from'=>'02/01/2022','date_to'=>'09/01/2022','place'=>'Дагестан, Инчхе','room'=>false],
  ['date_from'=>'31/12/2021','date_to'=>'02/01/2022','place'=>'Калужская область, Юхнов','room'=>false],
  ['date_from'=>'02/01/2022','date_to'=>'09/01/2022','place'=>'Калужская область, Юхнов','room'=>false],  
];

$selectedDatesArr=dates_get_list();

$room_arr=[];

$selectedRoomCategoryArr=[
  'Мансарда (5 этаж)',
  'Эконом (без балкона и без вида на море)',
  'Стандарт (без балкона и боковым видом на море)',
  'Стандарт (с балконом и видом на море)',
  'Полулюкс',
  'Люкс (2 комнатный)',
  'Доп.кровать ребёнку',
  'Доп.кровать взрослому',
  'Детская кровать (детям до 6 лет БЕСПЛАТНО)'
];

$selectedMessageOptionArr=[
  'Whatsapp',
  'Viber',
  'Telegram',
  'Email',
];



use Dompdf\Dompdf;

if (isset($_POST['contract']) and $_POST['contract']=='true') {
  $data=$_POST;
  include_once 'amount_in_words.php';
  if (!contractFormGet()) {
    include_once 'contract_text.php';
  }else{
    include_once 'contract_2.php';
  }
  include_once __DIR__ . '/dompdf/autoload.inc.php';
  $dompdf = new Dompdf();
  $dompdf->loadHtml($html, 'UTF-8');
  $dompdf->setPaper('A4', 'portrait');
  $dompdf->render();
  $pdf = $dompdf->output(); 
  file_put_contents(__DIR__ . '/contract.pdf', $pdf); 
  $dompdf1 = new Dompdf();
  $dompdf1->loadHtml($html1, 'UTF-8');
  $dompdf1->setPaper('A4', 'portrait');
  $dompdf1->render();
  $pdf1 = $dompdf1->output(); 
  file_put_contents(__DIR__ . '/supplement.pdf', $pdf1);
  include_once 'php_mail/index.php';
}else { include_once 'layout.php'; }


?>
