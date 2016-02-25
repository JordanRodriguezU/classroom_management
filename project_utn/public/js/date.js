$('.datepicker').pickadate({
	selectMonths: true,
	selectYears: 15
});
$(document).ready(function() {
	$('input#input_text, textarea#textarea1').characterCounter();
});
