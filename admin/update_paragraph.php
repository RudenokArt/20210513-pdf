<?php $current_paragraph = Paragraph::get_paragraph($_GET['update_paragraph']); ?>


<div class="wrapper">
  <div class="container">
    <p class="h2">Редактирование параграфа</p>
    <form action="../core/paragraph.php" method="post">
      <div class="row">
        <div class="col-sm-3 wrapper">
          <input value="<?php echo $current_paragraph['paragraph_number'] ?>"
          type="text" name="paragraph_number" class="form-control" >
        </div>
        <div class="col-sm-9 wrapper">
          <button value="<?php echo $current_paragraph['id'] ?>" 
            name="update_paragraph" title="Сохранить" class="btn btn-outline-success">
           <i class="fa fa-floppy-o" aria-hidden="true"></i>
         </button>
         <a href="?page=<?php echo $current_paragraph['paragraph_type'] ?>"
           class="btn btn-outline-danger" title="Отмена">
           <i class="fa fa-times" aria-hidden="true"></i>
         </a>
         <input value="<?php echo $current_paragraph['paragraph_type'] ?>"
         type="hidden" name="paragraph_type" >
       </div>
     </div>
     <div class="row">
      <div class="col-sm-12 wrapper">
        <textarea  class="paragraph_text form-control"name="paragraph_text" rows="5"><?php echo $current_paragraph['paragraph_text'] ?></textarea>
      </div>
    </div>
  </form>
</div>
</div>
