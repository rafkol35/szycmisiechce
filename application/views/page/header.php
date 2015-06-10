<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Szyć mi się chce!- <?php echo $title; ?></title>

<!--         <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'> -->
<!--         <link href='http://fonts.googleapis.com/css?family=Capriola&subset=latin,latin-ext' rel='stylesheet' type='text/css'> -->
<!--         <link href='http://fonts.googleapis.com/css?family=Exo+2&subset=latin,latin-ext' rel='stylesheet' type='text/css'> -->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
        
        <?php 
        echo script_tag('resources/scripts/jquery-1.11.2.min.js');        
        echo link_tag('resources/styles/page.css');
        
        echo script_tag('resources/scripts/jquery.jscrollpane.min.js');
        echo script_tag('resources/scripts/jquery.mousewheel.js');
        echo link_tag('resources/styles/jquery.jscrollpane.css');
        
        ?>
        
        <script type="text/javascript">
            $(function(){
                $('.scrollpane').jScrollPane({
                     autoReinitialise: true,
                     hideFocus: true
                });
            });
        </script>
        
        <?php
        if(isset($csss)) foreach ( $csss as $css )echo '<link rel="Stylesheet" type="text/css" href="'.base_url()."files/".$css."\" />\n";
        if(isset($jscripts)) foreach ( $jscripts as $js )echo '<script type="text/javascript" src="'.base_url()."resources/scripts/".$js."\"></script>\n";
        if(isset($includeJSs)) foreach ( $includeJSs as $ijs ) include './resources/scripts/includes/'.$ijs;
        ?>
        
    </head>
<body>
	<div class="wrapper">

		<div id="header">
		<div id="headlogo">
        <?php 
        	echo img("resources/images/page/logo.png");
        ?>
        </div>
        