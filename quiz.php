<div class="quiz_title-1">
  <p>Регистрация и подписание договора</p>
  <!-- <p>ЭТАП 1/2</p> -->
</div>
<!-- <div class="quiz_title-2">
  <p>Дагестан</p>
  <p>Инчхе</p>
</div> -->
<div class="quiz_title-3">
  <div class="quiz_container">
    <div>
     <p>Заполнение займет 5 мин.</p>
     <p>Подготовьте свой паспорт.</p>
   </div>
 </div>
</div>


<form id="quiz_form" action="index.php" method="post">
  <input type="hidden" name="contract" value="true">
  <div class="quiz_container">

    <div class="quiz_step">
      <div class="quiz_step-item">
        <div class="quiz_step-item_title">
          Выбранные даты:
        </div>
        <input type="hidden" name="roomArr" value="<?php echo roomArr();?>" >
        <?php dates_show_season ('spring', 'ВЕСНА') ?>
        <?php dates_show_season ('summer', 'ЛЕТО') ?>
        <?php dates_show_season ('outumn', 'ОСЕНЬ') ?>
        <?php dates_show_season ('winter', 'ЗИМА') ?>
     </div>
   </div>

   <?php function dates_show_season ($season,$season_ru) { ?>
    <?php global $selectedDatesArr; ?>
     <?php if (dates_check_season($season)): ?>
          <div class="quiz_step-item_content"><?php echo $season_ru ?>:</div>
          <?php foreach ($selectedDatesArr as $key => $value) {?>
            <?php if ($value['season'] == $season): ?>
              <div class="quiz_step-item_content">
                <label class="checkbox_label">
                  <div class="checkbox_wrapper">
                   <i class="fa fa-check" aria-hidden="true"></i>
                   <input name="selectedDates" class="selectedDates" type="radio"
                   value="<?php echo $value['date_from'].'||'.$value['date_to'].
                   '||'.$value['camp'].'||'.$value['camp'] ?>"  > 
                 </div>
                 <div>
                   <?php echo $value['date_from'].'-'.$value['date_to'].' '.$value['camp'] ?>
                 </div>
               </label>
             </div>
           <?php endif ?>
         <?php   }  ?>
       <?php endif ?>
   <?php }  ?>



   <div class="quiz_step">
    <div class="quiz_step-item">
      <div class="quiz_step-item_title">
        Ваше ФИО:
      </div>
      <div class="quiz_step-item_content">
        <div class="input_wrapper">
          <input type="text" name="fio">
        </div>
      </div>
    </div>

    <div class="quiz_step-item">
      <div class="quiz_step-item_title">
        Дата рождения:
      </div>
      <div class="quiz_step-item_content">
        <div class="input_wrapper">
          <input type="text" name="birstday" class="date">
        </div>
      </div>
    </div>

    <div class="quiz_step-item">
      <div class="quiz_step-item_title">
        Адрес регистрации:
      </div>
      <div class="quiz_step-item_content">
        <div class="input_wrapper">
          <input type="text" name="adress">
        </div>
      </div>
    </div>

    <div class="quiz_step-item">
      <div class="quiz_step-item_title">
        Ваша эл.почта:
      </div>
      <div class="quiz_step-item_content">
        <div class="input_wrapper">
          <input type="text" name="email">
        </div>
      </div>
    </div>
    <div class="quiz_step-item">
      <div class="quiz_step-item_title">
        Ваш телефон:
      </div>
      <div class="quiz_step-item_content">
        <div class="input_wrapper">
          <input type="text" name="phone">
        </div>
      </div>
    </div>
  </div>

  <div class="quiz_step">
    <div class="quiz_step-item">
      <div class="quiz_step-item_title">
        Серия и номер вашего паспорта:
      </div>
      <div class="quiz_step-item_content">
        <div class="input_wrapper">
          <input type="text" name="passport">
        </div>
      </div>
    </div>
    <div class="quiz_step-item">

      <div class="quiz_step-item_title">
        Стоимость программы:
      </div>
      <div class="quiz_step-item_content">
        Сумму укажите из Расчета, который вам прислали ранее:
      </div>
      <div class="quiz_step-item_content">
        <div class="input_wrapper">
          <input type="text" name="amount">
        </div>
      </div>

      <!-- <div class="quiz_step-item_title">
        Стоимость проживания:
      </div>
      <div class="quiz_step-item_content">
        Сумму укажите из Расчета, который вам прислали ранее:
      </div>
      <div class="quiz_step-item_content">
        <div class="input_wrapper">
          <input type="text" name="amount_room">
        </div>
      </div>

      <div class="quiz_step-item_title">
        Дата заключения договора:
      </div> -->
      <div class="quiz_step-item_content" style="display: none;" value="0">
        <div class="input_wrapper">
          <input type="text" name="contract_date" class="date">
        </div>
      </div>

    </div>
  </div>

  <div class="quiz_step">
    <?php for ($i=1; $i <= 3; $i++) { ?>
      <div class="quiz_step-item">
        <div class="quiz_step-item_title">
          ФИО <?php echo $i ?>-го отдыхающего:
        </div>
        <div class="quiz_step-item_conten">
          <div class="input_wrapper">
            <input type="text" name="member_fio_<?php echo $i; ?> ">
          </div>
        </div>
      </div>
      <div class="quiz_step-item">
        <div class="quiz_step-item_title">
          Дата рождения <?php echo $i ?>-го отдыхающего:
        </div>
        <div class="quiz_step-item_conten">
          <div class="input_wrapper">
            <input type="text" name="member_birstday_<?php echo $i ?>" class="date">
          </div>
        </div>
      </div>
    <?php  }  ?>
  </div>

  <div class="quiz_step">
    <?php for ($i=4; $i <= 6; $i++) { ?>
      <div class="quiz_step-item">
        <div class="quiz_step-item_title">
          ФИО <?php echo $i ?>-го отдыхающего:
        </div>
        <div class="quiz_step-item_conten">
          <div class="input_wrapper">
            <input type="text" name="member_fio_<?php echo $i; ?> ">
          </div>
        </div>
      </div>
      <div class="quiz_step-item">
        <div class="quiz_step-item_title">
          Дата рождения <?php echo $i ?>-го отдыхающего:
        </div>
        <div class="quiz_step-item_conten">
          <div class="input_wrapper">
            <input type="text" name="member_birstday_<?php echo $i ?>" class="date">
          </div>
        </div>
      </div>
    <?php  }  ?>
  </div>

<!-- <div class="quiz_step">
  <div class="quiz_step-item">
    <div class="quiz_step-item_title">
      Мне удобнее получать сообщения от вас через:
    </div>
    <?php //foreach ($selectedMessageOptionArr as $key => $value) {?>
      <div class="quiz_step-item_content">
        <label class="checkbox_label">
          <div class="checkbox_wrapper">
           <i class="fa fa-check" aria-hidden="true"></i>
           <input name="selectedMessanger"
           value="<?php// echo $value ?>" type="radio" > 
         </div>
         <div>
           <?php //echo $value ?>
         </div>
       </label>
     </div>
   <?php //  }  ?>
 </div>
</div> -->

</div>
</form>

<div class="warning_wrapper">
  <div class="warning">
    Заполните корректно обязательные поля!
  </div>
</div>


<div class="button_block">
  <div class="button_block-item">
    <button name="button_back">
      <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
      Back
    </button>
  </div>
  <div class="button_block-item" id="step_counter"></div>
  <div class="button_block-item">
    <div class="graph_wrapper">
      <div class="graph" id="segment">
        <div class="graph_2"></div>
        <div class="graph_1"></div>
      </div>
      <div class="graph" id="graph_overlay">
        <div class="graph_1"></div>
        <div class="graph_2"></div>
      </div>
    </div>
  </div>
  <div class="button_block-item">
    <button name="button_next">
      Next
      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    </button>
  </div>
  <div class="button_block-item">
    <button name="button_send">
      ВЫСЛАТЬ
    </button>
  </div>
  
  
</div>
