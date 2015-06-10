<?php
$imgprop = array (
		'src' => 'resources/images/page/young/gotoorder.png',
		'alt' => '',
		'class' => 'gotoRight footeritem'
);
echo anchor('young/order',img($imgprop));

$imgprop = array (
		'src' => 'resources/images/page/young/backtochoosecolor.png',
		'alt' => '',
		'class' => 'gotoLeft footeritem'
);
echo anchor('young/choosecolor',img($imgprop));
?>

<div id="youngContent">

<div id="youngleftColumn">
<canvas id="canvasMain" style="" width="360" height="480"></canvas>
<?php
for( $i = 1 ; $i <= 5 ; ++$i ){
	echo '<canvas id="canvasMask0_'.$i.'" style="position: absolute;" width="360" height="480"></canvas>';
}
for( $i = 1 ; $i <= 4 ; ++$i ){
	echo '<canvas id="canvasMask1_'.$i.'" style="position: absolute;" width="360" height="480"></canvas>';
}
?>
		
		<div id="youngChooseColorFoBC">
			<div id="chooseFront" class="youngChooseColorFoBCItem">PRZÓD </div>
			<div class="youngChooseColorFoBCItemSlash">&nbsp;/&nbsp;</div> 
			<div id="chooseBack" class="youngChooseColorFoBCItem"> TYŁ</div></div>
	</div>
	
	<div id="youngRightColumn">
		
		<div id="youngChooseColorDesc">
			Zanim podasz  swoje wymiary, zapoznaj się ze wskazówkami w zakładce Jak kupować.
		</div>
		
		<div id="youngSetSizesContainer">
			<div class="youngSetSizesItem">
				<input class="setSizeTextControl" type="text" /> obwód tali w cm
			</div>
			<div class="youngSetSizesItem">
				<input class="setSizeTextControl" type="text" /> długość spódnicy w cm
			</div>
		</div>
	</div>
	
</div>

<div id="color" style="text-align: center; clear: both; margin-bottom: 50px;"></div>
