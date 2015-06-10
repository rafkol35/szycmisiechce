<?php
$imgprop = array (
		'src' => 'resources/images/page/young/gotoorder.png',
		'alt' => '',
		'class' => 'gotoRight footeritem'
);
echo anchor('art/order',img($imgprop));

$imgprop = array (
		'src' => 'resources/images/page/art/backtochoosedesign.png',
		'alt' => '',
		'class' => 'gotoLeft footeritem'
);
echo anchor('art/choosedesign',img($imgprop));
?>

<div id="youngContent">
	<div id="youngleftColumn" style="margin-left: 103px; height: 520px;">
		
		<canvas id="canvasMain" style="" width="360" height="480"></canvas>
		<canvas id="canvasMask" style="position: absolute;" width="360" height="480"></canvas>
		<canvas id="canvasPattern" style="position: absolute;" width="360" height="480"></canvas>
		<div id="youngChoosenDressDesc" style="">
			
		</div>
	</div>
	<div id="youngRightColumn" style="width: 420px; height: 480px; background-color: inherit;">
		<div id="youngChooseColorDesc">
			Zanim podasz  swoje wymiary, zapoznaj się ze wskazówkami w zakładce Jak kupować.
		</div>
		
		<div id="youngSetSizesContainer">
			<div class="youngSetSizesItem">
				<input class="setSizeTextControl" type="text" /> obwód talii w cm
			</div>
			<div class="youngSetSizesItem">
				<input class="setSizeTextControl" type="text" /> długość spódnicy w cm
			</div>
		</div>
	</div>
	<div style="clear: both;">
</div>
