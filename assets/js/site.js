function printWindow(){
	window.print()
}

$('#print_label').click(function(){
	printWindow();
});

/*$(function() {
    $('.datetime').datetimepicker({
      language: 'en',
	  format: 'dd/MM/yyyy hh:mm'
    });
  });
  
  
$(function() {
    $('#datetimepicker').datetimepicker({
      language: 'en',
	  format: 'dd/MM/yyyy hh:mm'
    });
  });
  
*/

$('#tabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})



$(function() {
    $('#newcall #customer_call_ref').focus();
  });
  

  