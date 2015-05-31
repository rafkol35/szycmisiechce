young choosecolor

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

<div>

<canvas id="canvasmain" style="position: absolute;" width="360" height="480"></canvas>
<canvas id="canvasmask" style="position: absolute;" width="360" height="480"></canvas>

</div>

<div id="color" style="text-align: center">color</div>
