<?php header('Content-type: text/html; charset=utf-8');



// ========== GLOBALS ==========

$selectedDatesArr=[
  ['date_from'=>'15/06/2021','date_to'=>'25/06/2021',
  'place'=>'Крым Николаевка','program'=>true],
  ['date_from'=>'27/06/2021','date_to'=>'07/07/2021',
  'place'=>'Крым Зеленогорье','program'=>false],
  ['date_from'=>'09/07/2021','date_to'=>'19/07/21','place'=>
  'Крым Зеленогорье','programm'=>1],
  ['date_from'=>'21/07/2021','date_to'=>'31/07/2021',
  'place'=>'Крым Зеленогорье','program'=>false],
  ['date_from'=>'03/08/2021','date_to'=>'13/08/2021',
  'place'=>'Дагестан, Инчхе','program'=>false],
  ['date_from'=>'14/08/2021','date_to'=>'24/08/2021',
  'place'=>'Дагестан, Инчхе','program'=>false],
  ['date_from'=>'16/08/2021','date_to'=>'26/08/2021',
  'place'=>'Краснодарский край, За Родину','program'=>false],
];

$program_arr=[0,];

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

foreach ($_POST as $key => $value) {
  echo $key.'=';
  echo $value.'<br>';
}


use Dompdf\Dompdf;

if (isset($_POST['contract']) and $_POST['contract']=='true') {
  $data=$_POST;
  var_dump(contractFormGet());
  include_once 'amount_in_words.php';
  if (!contractFormGet()) {
    include_once 'contract.php';
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
  //echo $html;
  echo '<br><br><a href="contract.pdf" download="download">Скачать договор</a>';
  echo '<br><br><i class="fa fa-cloud-download" aria-hidden="true"></i>
  <a href="index.php">На главную</a>';

}else { include_once 'layout.php'; }


// ========== FUNCTIONS ==========

function programArr(){
  global $program_arr;
  $str=json_encode($program_arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
  return $str;
}

function getMembers(){
  global $data;
  $str='';
  $nameArr=[];
  $dateArr=[];
  $i=1;
  foreach ($data as $key => $value) {
    $name=explode('_', $key);
    if ($name[0]=='member' and $name[1]=='fio') {
      array_push($nameArr, $value);
      $i++;
    }
  }
  foreach ($data as $key => $value) {
    $date=explode('_', $key);
    if ($date[0]=='member' and $date[1]=='birstday') {
      array_push($dateArr, $value);
      $i++;
    }
  }
  for ($i=0; $i < sizeof($nameArr); $i++) { 
    $str=$str.'<p>1.2.'.($i+1).'. ФИО: '.$nameArr[$i].
    ' Дата рождения: '.$dateArr[$i].'</p>';
  }
  return $str;
}

function getPackage(){
  global $data;
  $package=explode('||', $data['selectedDates']);
  return $package;
}

function contractFormGet(){
  global $data;
  global $selectedDatesArr;
  global $program_arr;
  $arr=explode('||', $data['selectedDates']);
  $flag=false;
  foreach ($program_arr as $key => $value) {
    if($selectedDatesArr[$value]['date_from']==$arr[0] and
      $selectedDatesArr[$value]['date_to']==$arr[1] and
      $selectedDatesArr[$value]['place']==$arr[2])
    {
      $flag=true;
    }
  }
  return $flag;
}




?>