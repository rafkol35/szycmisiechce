young/setsizes 

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
