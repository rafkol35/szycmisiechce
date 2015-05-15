art/choosedesign

<?php
$imgprop = array (
		'src' => 'resources/images/page/young/gotochoosecolor.png',
		'alt' => '',
		'class' => 'gotoRight footeritem'
);
echo anchor('art/setsizes',img($imgprop));

$imgprop = array (
		'src' => 'resources/images/page/young/gotosetsizes.png',
		'alt' => '',
		'class' => 'gotoLeft footeritem'
);
echo anchor('art/choosecolor',img($imgprop));