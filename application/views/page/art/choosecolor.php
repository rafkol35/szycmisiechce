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
		
		<canvas id="canvasMain" style="" width="360" height="480"></canvas>
		<canvas id="canvasMask" style="position: absolute;" width="360" height="480"></canvas>
		
		<div id="youngChoosenDressDesc">
			Fasonem tej spódnicy jest tak zwany półklosz.
		</div>
	</div>
	<div id="youngRightColumn">
		<div id="artChooseColorDesc">
			Kiedy najedziesz kursorem na miniaturkę wzoru, zobaczysz jego powiększenie. Przeciągnij nadruk na zdjęcie, aby zobaczyć jak prezentuje się na spódnicy. 
		</div>
		<div id="artChooseColorPalette">
		<?php 
			$colors = array('f5989d','7accc8','ffcc00','111111','448cca','ffffff','598527');
			$colorsDescs = array('Różowa bawełna','Turkusowy tiul','Żółta wiskoza','Czarna tafta','Niebieski jeans','Biały len','Zielona bawełna');
			
			//$imgprop['class'] = 'youngChooseTypeMiniView';
			//$dressTypes = array("type01.png","type02.png","type03.png","type04.png","type05.png","type01.png","type02.png","type03.png","type04.png","type05.png");
			
			for( $i = 0 ; $i < count($colors) ; ++$i ){
				echo '<div class="artChooseColorSampleContainer">';
				echo '<div id="artChooseColorSample_'.$i.'" class="artChooseColorSample" style="background-color: #'.$colors[$i].'">';
				echo '<div id="artChooseColorSampleBig_'.$i.'" class="artChooseColorSampleBig" style="background-color: #'.$colors[$i].'"></div>';
				echo '</div>';
				//$imgprop['id'] = 'dressType'.$i;
				//$imgprop['src'] = 'resources/images/content/young/choosetype/'.$dressTypes[$i];
				//echo img($imgprop);
				echo '<div id="artChooseColorSampleDesc_'.$i.'" class="artChooseColorSampleDesc">'.$colorsDescs[$i].'</div>';
				echo '</div>';
				echo '<div class="artChooseColorSampleSpacer"></div>';
			}
			?>
		</div>
	</div>
	<div style="clear: both;"></div>
</div>
