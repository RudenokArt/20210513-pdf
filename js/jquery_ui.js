$('input[name="phone"]').mask("8(999)999-99-99");

$(document).ready(function(){   
  $('input[name="email"]').inputmask("email");
});

$('input[name="adult_quantity"]').mask("9");
$('input[name="children_quantity"]').mask("9");

$('.date').mask('99/99/9999');

$( function() {
  $('.date').datepicker({
    dateFormat: "dd-mm-yy",
    changeYear: true,
  });
} );

$( function() {
  $('input[name="contract_date"]').datepicker(
    "setDate", "+0d",{
    dateFormat: "dd-mm-yy",
      defaultDate: +1,
      gotoCurrent: true,
  });
} );

$('input[name="amount"],input[name="amount_programm"]').mask('9?999999');

