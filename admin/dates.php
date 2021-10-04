<div class="wrapper">
  <div class="container">
    <form action="../core/dates.php" method="post">
      <div class="row">
        <div class="col-sm-4 wrapper">
          <input type="text" name="date_from" class="form-control" placeholder="Дата с">
        </div>
        <div class="col-sm-4 wrapper">
          <input type="text" name="date_to" class="form-control" placeholder="Дата по">
        </div>
        <div class="col-sm-4 wrapper">
          <select name="season" class="form-control">
            <option value="spring">Весна</option>
            <option value="summer">Лето</option>
            <option value="outumn">Осень</option>
            <option value="winter">Зима</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 wrapper">
          <input type="text" name="camp" class="form-control" 
          placeholder="Заезд (место нахождения, лагерь)">
        </div>
        <div class="col-sm-4 wrapper">
          <button name="add_new_date" class="btn btn-outline-primary">
           <i class="fa fa-check" aria-hidden="true"></i>
           Добавить заезд
         </button>
       </div>
     </div>
   </form>
 </div>
</div>

<div class="wrapper"></div>
<div class="container wrapper">
  <table class="table">
    <?php show_season('spring', 'Весна'); ?>
    <?php show_season('summer', 'Лето'); ?>
    <?php show_season('outumn', 'Осень'); ?>
    <?php show_season('winter', 'Зима'); ?>
  </table>
  <hr>
</div>

<?php function get_table_tr ($value) { 
  ?>
  <td><?php echo $value['date_from'];?></td>
  <td><?php echo $value['date_to'];?></td>
  <td><?php echo $value['camp'];?></td>
  <td>
    <form action="../core/dates.php" method="post">
      <button value="<?php echo $value['id'] ?>" name="date_delete"
       class="btn btn-outline-danger" title="удалить" >
       <i class="fa fa-trash" aria-hidden="true"></i>
     </button>
   </form>
 </td>
 <td>
  <form action="" method="get">
    <button value="<?php echo $value['id'] ?>"  title="редактировать"
     name="dates_update"class="btn btn-outline-success">
     <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
   </button>
 </form>
</td>
<?php } ?>

<?php 
function show_season ($season,$season_ru) { ?>
 <?php if (\Core\Dates::check_season($season)): ?>
  <tr><th colspan="5"><?php echo $season_ru;?></th></tr>
<?php endif ?>
<?php foreach (\Core\Dates::get_list() as $key => $value): ?>
  <?php if ( $value['season']==$season): ?>
    <tr><?php get_table_tr($value); ?></tr>
  <?php endif ?>
<?php endforeach ?>
<?php } ?>
