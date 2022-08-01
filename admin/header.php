<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- JQUERY -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" 
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
  integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
  crossorigin="anonymous">
  <script 
  src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" 
  integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" 
  crossorigin="anonymous"></script>
  <!-- FONT AWESSOME -->
  <script src="https://use.fontawesome.com/e8a42d7e14.js"></script>
  <!-- MASKEDINPUT -->
  <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
  <!-- ========= -->
  <link rel="stylesheet" href="../css/admin.css">
  <title>Document</title>
</head>
<body>
  <div class="top_menu wrapper"> 
    <div class="container">
      <ul class="nav nav-tabs bg-light">
        <li class="nav-item">
          <a class="nav-link <?php 
          if ($_GET['page']=='dates' or !isset($_GET['page'])): ?>
            <?php echo 'active'; ?>
            <?php endif ?>" href="?page=dates">
            Управление <br> датами 
          </a>
        </li>
        <li class="nav-item">
          <a  class="nav-link <?php 
          if ($_GET['page']=='contract'): ?>
            <?php echo 'active'; ?>
            <?php endif ?>" href="?page=contract">
            Текст <br> договора 
          </a>
        </li>
        <li class="nav-item">
          <a  class="nav-link <?php 
          if ($_GET['page']=='supplement_1'): ?>
            <?php echo 'active'; ?>
            <?php endif ?>" href="?page=supplement_1">
            Текст <br> приложения 1 
          </a>
        </li>
        <li class="nav-item">
          <a  class="nav-link <?php 
          if ($_GET['page']=='supplement_2'): ?>
            <?php echo 'active'; ?>
            <?php endif ?>" href="?page=supplement_2">
            Текст <br> приложения 2 
          </a>
        </li>
         <li class="nav-item">
          <a  class="nav-link <?php 
          if ($_GET['page']=='supplement_3'): ?>
            <?php echo 'active'; ?>
            <?php endif ?>" href="?page=supplement_3">
            Текст <br> приложения 3 
          </a>
        </li>
        <li class="nav-item">
          <a  class="nav-link <?php 
          if ($_GET['page']=='contacts_pdf'): ?>
            <?php echo 'active'; ?>
            <?php endif ?>" href="?page=contacts_pdf">
            Реквизиты <br> договора 
          </a>
        </li>
        <li class="nav-item">
          <a  class="nav-link <?php 
          if ($_GET['page']=='contacts'): ?>
            <?php echo 'active'; ?>
            <?php endif ?>" href="?page=contacts">
            Реквизиты <br> на сайте  
          </a>
        </li>
        <li class="nav-item p-3">
         <form action="../core/contacts.php" method="post">
            <button class="btn btn-outline-info" name="log_out" value="Y">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
          </button>
         </form>
        </li>
      </ul>
    </div>
  </div>

  <?php if (isset($_GET['page']) && $_GET['page']=='contract'): ?>
    <div class="wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p>[[contract_date]] - дата заключения контракта</p>
        <p>[[fio]] - Заказчик</p>
        <p>[[members]] - список лиц, принимающих участие в Программе</p>
        <p>[[place]] - Место оказания услуг</p>
        <p>[[begin]] - Дата начала Программы</p>
        <p>[[end]] - Дата окончания Программы</p>
        <p>[[amount]] - Стоимость услуг по Договору</p>
      </div>
    </div>
  </div>
</div>
  <?php endif ?>
