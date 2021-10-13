<?php $current_paragraph = Paragraph::get_paragraph($_GET['delete_paragraph']); ?>
<div class="wrapper">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-4">
        <p class="h2">Удалить абзац?</p>
      </div>
    </div>
  </div>
</div>
<div class="wrapper">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-2">
        <form action="../core/paragraph.php" method="post">
          <input type="hidden" name="paragraph_type" value="<?php echo $_GET['page'] ?>">
          <button value="<?php echo $current_paragraph['id'] ?>" 
            name="delete_paragraph" title="Удалить" class="btn btn-outline-success">
            <i class="fa fa-check" aria-hidden="true"></i>
          </button>
        </form>
      </div>
      <div class="col-2">
        <a href="?page=<?php echo $current_paragraph['paragraph_type'] ?>"
         class="btn btn-outline-danger" title="Отмена">
         <i class="fa fa-times" aria-hidden="true"></i>
       </a>
     </div>
   </div>
 </div>
</div>
