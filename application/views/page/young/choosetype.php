<?php

$imgprop = array (
		'src' => 'resources/images/page/young/gotochoosecolor.png',
		'alt' => '',
		'class' => 'gotoRight footeritem'
);
echo anchor('young/choosecolor',img($imgprop));
?>

<div id="youngContent">
	<div id="youngleftColumn">
		<?php 
		$imgprop = array (
			'src' => 'resources/images/content/young/choosetype/type04.png',
			'alt' => '',
			'id' =>	'youngChooseTypeFullView',
			'class' => 'chooseTypeFullView'
		);
		echo img($imgprop);
		?>
		
		<div id="youngChoosenDressDesc">
		Spódnica z efektownej dzianiny piankowej uszyta z pionowych pasów materiału, których kolory możesz wybrać
		</div>
	</div>
	<div id="youngRightColumn">
		<div id="youngChooseTypeMiniScreen">
			<?php 
			$imgprop['class'] = 'youngChooseTypeMiniView';
			$dressTypes = array("type01.png","type02.png","type03.png","type04.png","type05.png","type01.png","type02.png","type03.png","type04.png","type05.png");
			for( $i = 0 ; $i < count($dressTypes) ; ++$i ){
				echo '<div class="youngChooseTypeMiniCont">';
				$imgprop['id'] = 'dressType'.$i;
				$imgprop['src'] = 'resources/images/content/young/choosetype/'.$dressTypes[$i];
				echo img($imgprop);
				echo '<div class="youndChooseTypeMiniDesc">'.$dressTypes[$i].'</div>';
				echo '</div>';
			}
			?>
		</div>
	</div>
	<div style="clear: both;">
</div>
