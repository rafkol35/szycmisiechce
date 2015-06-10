<?php
$imgprop = array (
		'src' => 'resources/images/page/art/gotosetsizes.png',
		'alt' => '',
		'class' => 'gotoRight footeritem'
);
echo anchor('art/setsizes',img($imgprop));

$imgprop = array (
		'src' => 'resources/images/page/art/backtochoosecolor.png',
		'alt' => '',
		'class' => 'gotoLeft footeritem'
);
echo anchor('art/choosecolor',img($imgprop));
?>

<div id="youngContent">
	<div id="youngleftColumn" style="margin-left: 103px; height: 520px;">
		
		<canvas id="canvasMain" style="" width="360" height="480"></canvas>
		<canvas id="canvasMask" style="position: absolute;" width="360" height="480"></canvas>
		<canvas id="canvasPattern" style="position: absolute;" width="360" height="480"></canvas>
		<div id="youngChoosenDressDesc" style="">
			Fasonem tej spódnicy jest tak zwany półklosz.
		</div>
	</div>
	<div id="youngRightColumn" style="width: 420px; height: 480px; background-color: inherit;">
		<div id="artChooseColorDesc" style="background-color: inherit; height: 100px;">
			Kiedy najedziesz kursorem na miniaturkę wzoru, zobaczysz jego powiększenie. Przeciągnij nadruk na zdjęcie, aby zobaczyć jak prezentuje się na spódnicy. 		 
		</div>
		<div id="youngChooseTypeMiniScreen" style="width: 370px; height: 380px;">
			<?php 
			$imgprop['class'] = 'artChoosePatternMiniView';
			$patterns = array('desen_1.png','desen_2.png','desen_3.png','desen_4.png',
					'desen_1.png','desen_2.png','desen_3.png','desen_4.png',
					'desen_1.png','desen_2.png','desen_3.png','desen_4.png');
			for( $i = 0 ; $i < count($patterns) ; ++$i ){
				//echo '<div class="youngChooseTypeMiniCont">';
				$imgprop['id'] = 'pattern_'.$i;
				$imgprop['src'] = 'resources/images/content/art/choosepattern/'.$patterns[$i];
				echo img($imgprop);
				//echo '<div class="youndChooseTypeMiniDesc">'.$dressTypes[$i].'</div>';
				//echo '</div>';
			}
			?>
		</div>
	</div>
	<div style="clear: both;">
</div>
