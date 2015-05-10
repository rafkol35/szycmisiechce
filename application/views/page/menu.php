<div id="menu">
<?php 
	echo img("resources/images/page/zmienlinie.png");
	switch( $what )
	{
		case 'young':
			echo anchor('art',img("resources/images/page/art.png"));
			echo anchor('exclusive',img("resources/images/page/exclusive.png"));
			break;
			
		case 'art':
			echo anchor('young',img("resources/images/page/young.png"));
			echo anchor('exclusive',img("resources/images/page/exclusive.png"));
			break;
			
		case 'exclusive':
			echo anchor('art',img("resources/images/page/art.png")).'<br />';
			echo anchor('young',img("resources/images/page/young.png"));
			break;
	}
?>
</div>
