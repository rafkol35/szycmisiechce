art/setsizes

<?php
$imgprop = array (
		'src' => 'resources/images/page/young/gotoorder.png',
		'alt' => '',
		'class' => 'gotoRight footeritem'
);
echo anchor('art/order',img($imgprop));

$imgprop = array (
		'src' => 'resources/images/page/young/backtochoosedesign.png',
		'alt' => '',
		'class' => 'gotoLeft footeritem'
);
echo anchor('art/choosedesign',img($imgprop));