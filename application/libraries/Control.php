<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TestClassA {
    function test()
    {
        return 3;
    }
}

class Control
{
    public function toHtml()
    {
        echo '<b>Control::toHtml</b>';
    }
}

class IntControl extends Control
{
    function __construct()
    {
        
    }
    
    public function toHtml()
    {
        ?>

<?php
        echo '<input type="text" onchange="intControlValueChanged()" />';
        //echo '<b>IntControl::toHtml</b>';
    }
}

?>
