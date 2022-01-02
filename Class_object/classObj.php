<?php
class Color{

    public $name;
    
    function set_name($name){
        $this->name = $name;
    } 
    function get_name(){
        return $this->name;
    }
}
$red = new Color();
$red->set_name('red');
echo $red->get_name();
?>