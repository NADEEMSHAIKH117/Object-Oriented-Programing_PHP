<?php
class Addition
{
    function __call($fn, $arg)
    {
        if ($fn == "add") {
            $c = count($arg);

            switch ($c) {
                case 2:
                    echo "Addition is " . $arg[0] + $arg[1]."\n";
                    break;
                case 3:
                    echo "Addition is " . $arg[0] + $arg[1]+$arg[2]."\n";
                    break;
                default:
                    echo "No match found";
                    break;
            }
        }
    }
}
$obj = new Addition();
$obj->add(5,6);
$obj->add(5,6,4);
