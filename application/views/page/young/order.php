<?php
$imgprop = array (
		'src' => 'resources/images/page/young/backtosetsizes.png',
		'alt' => '',
		'class' => 'gotoLeft footeritem'
);
echo anchor('young/setsizes',img($imgprop));
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
	
</div>

<div id="color" style="text-align: center; clear: both; margin-bottom: 50px;"></div>
