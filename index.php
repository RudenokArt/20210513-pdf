<?php header('Content-type: text/html; charset=utf-8');
$site_public_page = 'Y';
include_once 'core/database.php';
include_once 'core/functions.php';
include_once 'core/contacts.php';
include_once 'core/helpers.php';


// ========== GLOBALS ==========
$selectedDatesArr=[];
$selectedDatesArr=dates_get_list();
$room_arr=[];




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
  file_put_contents(__DIR__ . '/supplement_F.pdf', $pdf1);

  $dompdf2 = new Dompdf();
  $dompdf2->loadHtml($html2, 'UTF-8');
  $dompdf2->setPaper('A4', 'portrait');
  $dompdf2->render();
  $pdf2 = $dompdf2->output(); 
  file_put_contents(__DIR__ . '/supplement_S.pdf', $pdf2);

  $dompdf3 = new Dompdf();
  $dompdf3->loadHtml($html3, 'UTF-8');
  $dompdf3->setPaper('A4', 'portrait');
  $dompdf3->render();
  $pdf3 = $dompdf3->output(); 
  file_put_contents(__DIR__ . '/supplement_T.pdf', $pdf3);

  include_once 'php_mail/index.php';
}else { include_once 'layout.php'; }


?>
