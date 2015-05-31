<script type="text/javascript">
function menuready() {
	$('.footeritem').animate({opacity: 1.0}, 0);
	
	$('.footeritem').mouseover(function() {
    	$(this).stop();
        $(this).animate({opacity: 0.75}, 100);
    });
    $('.footeritem').mouseout(function() {
    	$(this).stop();
        $(this).animate({opacity: 1.0}, 350);
    });
}
$(document).ready(function() {
    menuready();
});
</script>
