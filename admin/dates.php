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
            <option>Весна</option>
            <option>Лето</option>
            <option>Осень</option>
            <option>Зима</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 wrapper">
          <input type="text" name="camp" class="form-control" placeholder="Наименование">
        </div>
        <div class="col-sm-4 wrapper">
          <button name="add_new_camp" class="btn btn-outline-primary">
           <i class="fa fa-check" aria-hidden="true"></i>
           Добавить 
         </button>
       </div>
     </div>
   </form>
 </div>
</div>

<pre>
  <?php print_r(\Core\Dates::get_list()) ?>
</pre>