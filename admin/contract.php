<div class="wrapper">
  <div class="container">
    <form action="../core/contacts.php" method="post">
      <?php if ($_GET['page'] == 'supplement_1' or 
        $_GET['page'] == 'supplement_2' or 
        $_GET['page'] == 'supplement_3'): ?>
        <?php if (Contacts::$supplement_status[$_GET['page']]=='Y'): ?>
          <div class="row">
            <div class="col">
              <input type="hidden" 
              name="supplement_number" 
              value="<?php echo $_GET['page'] ?>">
              <input type="hidden" name="supplement_value" value="N">
              <button class="btn btn-outline-success" name="supplement_status">
               <i class="fa fa-toggle-on" aria-hidden="true"></i> 
               Отправлять на почту
             </button>
           </div>
         </div>
       <?php else: ?>
        <div class="row">
          <div class="col">
            <input type="hidden" 
              name="supplement_number" 
              value="<?php echo $_GET['page'] ?>">
              <input type="hidden" name="supplement_value" value="Y">
           <button class="btn btn-outline-danger"  name="supplement_status">
             <i class="fa fa-toggle-off" aria-hidden="true"></i>
             Отправлять на почту
           </button>
         </div>
       </div>
     <?php endif ?>
   <?php endif ?>

 </form>
 <form action="../core/paragraph.php" method="post">
  <div class="row">
    <div class="col-sm-3 wrapper">
      <input type="text" name="paragraph_number" 
      class="form-control" placeholder="порядковый №">
    </div>
    <div class="col-sm-9 wrapper">
      <button name="add_new_paragraph" class="btn btn-outline-primary">
       <i class="fa fa-check" aria-hidden="true"></i>
       Добавить абзац
     </button>
     <input type="hidden" name="paragraph_type" value="<?php echo $_GET['page'] ?>">
   </div>
 </div>
 <div class="row">
  <div class="col-sm-12 wrapper">
    Текст абзаца: 
    <textarea name="paragraph_text" rows="5" class="paragraph_text form-control"></textarea>
  </div>
</div>
</form>
</div>
</div>
<div class="wrapper">
  <div class="container">
    <table>
      <?php foreach (Paragraph::get_list($_GET['page']) as $key => $value): ?>
        <tr>
          <th class="paragraph_number">
            <?php echo $value['paragraph_number']; ?>
          </th>
          <td>
            <?php echo $value['paragraph_text']; ?>
          </td>
          <td>
            <form action="" method="get">
              <input type="hidden" name="page" value="<?php echo $_GET['page'] ?>">
              <button value="<?php echo $value['id']; ?>" class="btn btn-outline-success"
                title="редактировать" name="update_paragraph">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
              </button>
            </form>
          </td>
          <td>
            <form action="" method="get">
              <input type="hidden" name="paragraph_type" value="<?php echo $_GET['page'] ?>">
              <input type="hidden" name="page" value="<?php echo $_GET['page'] ?>">
              <button value="<?php echo $value['id']; ?>" class="btn btn-outline-danger"
                title="редактировать" name="delete_paragraph">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
              </button>
            </form>
          </td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>
</div>

