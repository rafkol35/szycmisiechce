<div id="menu">
<?php 
	$imgprop = array (
			'src' => 'resources/images/page/art.png',
			'alt' => '',
			'class' => 'footeritem'
	);
	
	echo img("resources/images/page/zmienlinie.png");
	switch( $what )
	{
		case 'young':
			$imgprop['src'] = 'resources/images/page/art.png';
			echo anchor('art',img($imgprop));
			$imgprop['src'] = 'resources/images/page/exclusive.png';
			echo anchor('exclusive',img($imgprop));
			break;
			
		case 'art':
			$imgprop['src'] = 'resources/images/page/young.png';
			echo anchor('young',img($imgprop));
			$imgprop['src'] = 'resources/images/page/exclusive.png';
			echo anchor('exclusive',img($imgprop));
			break;
			
		case 'exclusive':
			$imgprop['src'] = 'resources/images/page/art.png';
			echo anchor('art',img($imgprop)).'<br />';
			$imgprop['src'] = 'resources/images/page/young.png';
			echo anchor('young',img($imgprop));
			break;
			
		default:
			$imgprop['src'] = 'resources/images/page/young.png';
			echo anchor('young',img($imgprop)).'<br />';
			$imgprop['src'] = 'resources/images/page/art.png';
			echo anchor('art',img($imgprop));
			$imgprop['src'] = 'resources/images/page/exclusive.png';
			echo anchor('exclusive',img($imgprop));
			break;
	}
?>
</div>
