<div class="wrapper">
  <div class="container">
    <form action="../core/paragraph.php" method="post">
      <div class="row">
        <div class="col-sm-3 wrapper">
          <input type="text" name="paragraph_number" 
          class="form-control" placeholder="№ пункта договора">
        </div>
        <div class="col-sm-9 wrapper">
          <button name="add_new_paragraph" class="btn btn-outline-primary">
           <i class="fa fa-check" aria-hidden="true"></i>
           Добавить пункт договора
         </button>
         <input type="text" name="paragraph_type" value="contract">
       </div>
     </div>
     <div class="row">
      <div class="col-sm-12 wrapper">
        <textarea name="paragraph_text" rows="5" class="paragraph_text form-control">Текст пункта договора
        </textarea>
      </div>
    </div>
  </form>
</div>
</div>

<pre>
  <?php print_r($_POST); ?>
</pre>