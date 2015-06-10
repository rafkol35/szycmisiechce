</div>
<div class="push"></div>
</div>
<div class="footer">
<?php 
	$imgprop = array (
		'src' => 'resources/images/page/jakkupowac.png',
		'alt' => '',
		'class' => 'footeritem'
	);
	echo anchor('common/howtobuy',img($imgprop));

	$imgprop['src'] = "resources/images/page/regulamin.png";
	echo anchor('common/rules',img($imgprop));
	
	$imgprop['src'] = "resources/images/page/kontakt.png";
	echo anchor('common/contact',img($imgprop));
	
	$imgprop['src'] = "resources/images/page/facebook.png";
	echo anchor('common/facebook',img($imgprop));
?>
</div>
</body>
</html>