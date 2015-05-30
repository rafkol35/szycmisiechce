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
	echo anchor('common/jakkupowac',img($imgprop));

	$imgprop['src'] = "resources/images/page/regulamin.png";
	echo anchor('common/regulamin',img($imgprop));
	
	$imgprop['src'] = "resources/images/page/kontakt.png";
	echo anchor('common/kontakt',img($imgprop));
	
	$imgprop['src'] = "resources/images/page/facebook.png";
	echo anchor('common/facebook',img($imgprop));
?>
</div>
</body>
</html>