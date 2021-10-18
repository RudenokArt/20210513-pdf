
 //  $(function(){
 //   $('input[name="date_from"],input[name="date_to"]').daterangepicker({
 //     singleDatePicker: true,
 //     autoApply: true,
 //   });
 // });
$('input[name="date_from"],input[name="date_to"]').datepicker({
    dateFormat: "dd/mm/yy",
    changeYear: true,
  });