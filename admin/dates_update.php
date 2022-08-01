<?php $item_date = \Core\Dates::get_item($_GET['dates_update']); ?>

<div class="container wrapper">
  <div class="row">
    <div class="page_title col-sm-10">
      Редактирование элемента:
    </div>
    <div class="col-sm-2">
      <a href="index.php" title="отмена">
        <button class="btn btn-outline-danger">
          <i class="fa fa-times" aria-hidden="true"></i>
        </button>
      </a>
    </div>
  </div>
</div>
<div class="wrapper">
  <div class="container">
    <form action="../core/dates.php" method="post">
      <div class="row">
        <div class="col-sm-4 wrapper">
          <input type="text" value="<?php echo $item_date['date_from'] ?>" 
          name="date_from" class="form-control" placeholder="Дата с">
        </div>
        <div class="col-sm-4 wrapper">
          <input type="text"  value="<?php echo $item_date['date_to'] ?>"
          name="date_to" class="form-control" placeholder="Дата по">
        </div>
        <div class="col-sm-4 wrapper">
          <select name="season" class="form-control">
            <?php set_season_option('spring','Весна'); ?>
            <?php set_season_option('summer','Лето'); ?>
            <?php set_season_option('outumn','Осень'); ?>
            <?php set_season_option('winter','Зима'); ?>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 wrapper">
          <input type="text" name="camp"  value="<?php echo $item_date['camp'] ?>"
          class="form-control" placeholder="Заезд (место нахождения, лагерь)">
        </div>
        <div class="col-sm-4 wrapper">
          <button name="date_update"  value="<?php echo $item_date['id'];?>" 
            title="редактировать" class="btn btn-outline-success">
            <i class="fa fa-check" aria-hidden="true"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>


<?php 
function set_season_option($season,$season_ru){ 
  global $item_date;?>
  <?php if ($season == $item_date['season']): ?>
    <option value="<?php echo $season; ?>" selected>
      <?php echo $season_ru ?>
    </option>
    <?php else: ?>
      <option value="<?php echo $season; ?>">
      <?php echo $season_ru ?>
    </option>
  <?php endif ?>

  <?php } ?>