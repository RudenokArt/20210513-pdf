 <?php 
 if ($_POST['contract_title']) {
  Paragraph::update_contract_title();
}
?>
<form action="" method="post">
 <div class="container pt-5">
   <div class="row">
    <div class="col-12 h5">Название договора:</div>
  </div>
  <div class="row">
    <div class="col-11">
      <input value="<?php echo Paragraph::get_contract_title();?>" 
      name="contract_title" type="text" class="form-control">
    </div>
    <div class="col-1">
     <button class="btn btn-outline-info">
      <i class="fa fa-floppy-o" aria-hidden="true"></i>
    </button> 
  </div>
</div>
</div>
</form>

<script src="https://cdn.ckeditor.com/4.18.0/basic/ckeditor.js"></script>
<div class="container pt-5">
  <div class="row">
    <div class="col">
     <p class="h5">Реквизиты договора</p>
     <p>Текст не должен содержать кавычки!</p>
   </div>
 </div>
 <div class="row">
  <div class="col-11">
   <textarea name="editor1"></textarea>
 </div>
 <div class="col-1">
   <form action="../core/contacts.php" method="post" id="contacts_pdf">
    <input type="hidden" name="contacts_pdf">
  </form>
  <button class="btn btn-outline-info">
    <i class="fa fa-floppy-o" aria-hidden="true"></i>
  </button>
</div>
</div>
</div>

<script>
  CKEDITOR.replace( 'editor1', {height: 500} );
  setTimeout(function () {
    document.getElementsByTagName("iframe")[0].contentDocument
    .getElementsByTagName("body")[0].innerHTML = "<?php echo Contacts::$contacts_pdf;?>";
  }, 1000);
  $('button').click(function() {
    var text = document.getElementsByTagName("iframe")[0]
    .contentDocument.getElementsByTagName("body")[0].innerHTML;
    $('input[name="contacts_pdf"]').prop('value', text);
    $('#contacts_pdf')[0].submit();
  });
</script>