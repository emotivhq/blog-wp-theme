jQuery(function() {
 jQuery('.expand-footer').click(function() {
	jQuery('.more-footer').fadeIn(200);
	jQuery(this).animate({ 'opacity': '0' });
 });
});