$(function() {
 $('.expand-footer').click(function() {
	$('.more-footer').fadeIn(200);
	$(this).animate({ 'opacity': '0' });
 });
});