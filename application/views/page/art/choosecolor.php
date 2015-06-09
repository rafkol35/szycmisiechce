<?php
$imgprop = array (
		'src' => 'resources/images/page/art/gotochoosedesign.png',
		'alt' => '',
		'class' => 'gotoRight footeritem'
);
echo anchor('art/choosedesign',img($imgprop));
?>
<div id="youngContent">
	<div id="youngleftColumn">
		<?php 
		$imgprop = array (
			'src' => 'resources/images/content/art/choosecolor/base.png',
			'alt' => '',
			'id' =>	'youngChooseTypeFullView',
			'class' => 'chooseTypeFullView'
		);
		echo img($imgprop);
		?>
		
		<div id="youngChoosenDressDesc">
		Fasonem tej spódnicy jest tak zwany półklosz.
		</div>
	</div>
	<div id="youngRightColumn">
		<div id="artChooseColorDesc">
			Kiedy najedziesz kursorem na miniaturkę wzoru, zobaczysz jego powiększenie. Przeciągnij nadruk na zdjęcie, aby zobaczyć jak prezentuje się na spódnicy. 
		</div>
		<div id="artChooseColorPalette">
		div.artChooseColorSample
		div.artChooseColorSampleDesc
		<?php 
			$colors = array();
			$colorsDescs = array('Różowa bawełna');
			
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
