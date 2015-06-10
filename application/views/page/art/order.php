<?php
$imgprop = array (
		'src' => 'resources/images/page/art/backtosetsizes.png',
		'alt' => '',
		'class' => 'gotoLeft footeritem'
);
echo anchor('art/setsizes',img($imgprop));
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
			<div>Obwód w talii: 0 cm</div>
			<div>Długość spódnicy: 0 cm</div>
		</div>
		
		<div id="youngSetSizesContainer" style="">
			
			<div>Wartość: 0 zł</div>
			<div>Koszt przesyłki: 0 zł</div>
			<div>Do zapłaty: 0 zł</div>
			<br />
			<div>Dane zamawiającego:</div>			
			<div class="orderItem">
				<input class="orderTextControl" type="text" /> 
				<div class="orderItemDesc">Imię i nazwisko</div>
			</div>
			<div class="orderItem">
				<input class="orderTextControl" type="text" />
				<div class="orderItemDesc">Kod pocztowy i miejscowość</div>
			</div>
			<div class="orderItem">
				<input class="orderTextControl" type="text" />
				<div class="orderItemDesc">Ulica i numer domu</div>
			</div>
			<div class="orderItem">
				<input class="orderTextControl" type="text" />
				<div class="orderItemDesc">Telefon</div>
			</div>
			<div class="orderItem">
				<input class="orderTextControl" type="text" /> 
				<div class="orderItemDesc">Email</div>
			</div>
			
			<div class="youngSetSizesItem">
				<input class="orderButtonControl" type="button" value="Zamawiam" />
			</div>
		</div>
	</div>
	<div style="clear: both;">
</div>
