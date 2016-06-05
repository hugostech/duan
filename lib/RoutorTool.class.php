<?php

/**
 * Created by PhpStorm.
 * User: Hugo
 * Date: 5/06/16
 * Time: 1:33 PM
 */
class RoutorTool
{
    protected function blind($controller,$functionName){
        $this->controller = new $controller();
        $this->controller->$functionName(self::packData());
        return true;
    }

    protected function packData(){

        return $_POST;
    }
}