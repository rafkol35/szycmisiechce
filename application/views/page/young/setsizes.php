young/setsizes 

<?php
$imgprop = array (
		'src' => 'resources/images/page/young/gotochoosecolor.png',
		'alt' => '',
		'class' => 'gotoRight footeritem'
);
echo anchor('young/order',img($imgprop));

$imgprop = array (
		'src' => 'resources/images/page/young/gotosetsizes.png',
		'alt' => '',
		'class' => 'gotoLeft footeritem'
);
echo anchor('young/choosecolor',img($imgprop));
