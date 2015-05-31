<?php
$imgprop = array (
		'src' => 'resources/images/page/young/gotosetsizes.png',
		'alt' => '',
		'class' => 'gotoRight footeritem'
);
echo anchor('young/setsizes',img($imgprop));

$imgprop = array (
		'src' => 'resources/images/page/young/gotosetsizes.png',
		'alt' => '',
		'class' => 'gotoLeft footeritem'
);
echo anchor('young/choosetype',img($imgprop));

?>

<div id="youngContent">

	<div id="youngleftColumn">
		<canvas id="canvasmain" style="" width="360" height="480"></canvas>
		<canvas id="canvasmask" style="position: absolute;" width="360" height="480"></canvas>
		<div id="youngChooseColorFoBC">PRZÓD / TYŁ</div>
	</div>
	
	<div id="youngRightColumn">
		
		<div id="youngChooseColorDesc">
			Spódnica jest uszyta z 8 pionowych pasów dzianiny i paska w talii. Wybierz kolor każdego z tych elementów, przeciągając na niego barwę 
			z próbnika. Aby wybrać kolory pasów znajdujących się z tyłu spódnicy, kliknij przycisk TYŁ pod zdjęciem.
		</div>
		
		<div id="youngChooseColorPalette">
			<?php 
			$colorSamples = array(
					"ffffff","b9b8b7","111111","ffcc00","7accc8","fe707f",
					"959595","a2b7c7","7da7d8","fdc689","00a99d","ed145a");
			for( $i = 0 ; $i < count($colorSamples) ; ++$i ){
				echo '<div class="youngChooseColorSample" style="background-color: #'.$colorSamples[$i].'"></div>';
			}
			?>
<!-- 			<div style="clear: both;></div>	 -->
		</div>
		
	</div>
	
</div>

<div id="color" style="text-align: center; clear: both;">color</div>
