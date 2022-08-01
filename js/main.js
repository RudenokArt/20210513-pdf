

// ========== GLOBALS =========

var quiz={
  step:0,
  arr:$('.quiz_step'),
};



// ========== ACTIONS =========

checkboxChecked();
quizStep();
$('.warning').hide();

// ========== LISTENERS =========

$('input[type="radio"]').change(checkboxChecked);

$('button[name="button_next"]').click(function () {
  if (quiz.step<quiz.arr.length-1) { 
    if (validateForm()) {
      $('.warning').hide();
      quiz.step=quiz.step+1;
      quizStep();
    } else{
      $('.warning').show();
    }    
  }
});

$('button[name="button_back"]').click(function () {
  if (quiz.step>0) {
    quiz.step=quiz.step-1;
    quizStep();
  }
});

$('button[name="button_send"]').click(function(){
  document.getElementById('quiz_form').submit();
});

// ========== FUNCTIONS =========

function checkboxChecked () {
  var collection=$('input[type="radio"]');
  for (var i = 0; i < collection.length; i++) {
    if (collection[i].checked) {
      $(collection[i]).siblings('i').fadeIn();
    } else{
      $(collection[i]).siblings('i').fadeOut();
    }
  }
  roomArr();
}

function roomArr () {
  var str=$('input[name="roomArr"]').prop('value');
  var arr=JSON.parse(str);
  var radio=$('input[name="selectedDates"]');
  for (var i = 0; i < arr.length; i++) {
    if (radio[i].checked==false){
      $('input[name="amount_room"]').prop('disabled',true);
      $('input[name="amount_room"]').prop('value','0');
    } else {
      $('input[name="amount_room"]').prop('disabled',false);
      $('input[name="amount_room"]').prop('value','');
    }
  }
}

function quizStep(){
  $(quiz.arr).css({'display':'none'});
  $(quiz.arr[quiz.step]).fadeIn();
  $('#step_counter').html((quiz.step+1)+'/'+quiz.arr.length);
  hideButton();
  graphDrow();
}

function hideButton () {
  if (quiz.step==0) {
    $('button[name="button_back"]').hide();
  } else {
    $('button[name="button_back"]').show();
  }
  if (quiz.step==quiz.arr.length-1) {
    $('button[name="button_send"]').show();
    $('button[name="button_next"]').hide();
  } else {
    $('button[name="button_send"]').hide();
    $('button[name="button_next"]').show();
  }
}

function graphDrow () {
  var segment = 360 / quiz.arr.length * (quiz.step+1);
  $('#segment').css({'transform':'rotate('+segment+'deg)'});
  if (segment>180) {
    $('#graph_overlay').css({'transform':'rotate(180deg)'});
    $('#graph_overlay .graph_1').css({'background':'white'});
  }else{
    $('#graph_overlay').css({'transform':'rotate(0deg)'});
    $('#graph_overlay .graph_1').css({'background':'#ffe100'});
  }
}

function checkBoxValidate(arr){
  var flag=false;
  for (var i = 0; i < arr.length; i++) {
    if (arr[i].checked) {flag=true};
  }
  return flag;
}
function inputValidate (arr) {
  var flag=true;
  for (var i = 0; i < arr.length; i++) 
  {
    if($('input[name="'+arr[i]+'"').prop('value')=='')  {
      flag=false;
      $('input[name="'+arr[i]+'"').css({'border':'1px solid red'});
    } 
    else {
      $('input[name="'+arr[i]+'"').css({'border':'1px solid black'});  
    }
  }
  return flag;
}

function validateForm () {
  var flag = false;
  if (quiz.step==0)  {
    if( //checkBoxValidate($('.selectedRoomCategory')) && 
      checkBoxValidate($('.selectedDates')))
    { 
      flag=true; 
    } 
    if (!checkBoxValidate($('.selectedDates'))) 
    {
      $('.quiz_step-item')[0].style.border='1px solid red';   
    }
    else
    {
      $('.quiz_step-item')[0].style.border='none';     
    }
  }
  if (quiz.step==1) {  
    if (inputValidate(['fio','email','phone','birstday','adress'])) {
      flag=true;
    }
  }
  if (quiz.step==2) {  
    if (inputValidate(['passport','amount',])) {
      flag=true;
    }
  }
  if (quiz.step==3) {  
    flag=true;
  }
  if (quiz.step==4) { 
    if (inputValidate(['children_birstday_1'])) {
      flag=true;
    }
  }
  return flag;
}


