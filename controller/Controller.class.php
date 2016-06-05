<?php

/**
 * Created by PhpStorm.
 * User: Hugo
 * Date: 25/05/16
 * Time: 11:43 PM
 */
require 'env.php';

class Controller
{
    /*
     * blind view and data*/
    public function view($file, $data = null)
    {
        $page = self::GetView($file);
        $page = self::DataInjection($page, $data);
        self::push($page);
    }

    /*
     * redirect to another page*/
    public function redirect($parameter){
        $base = "index.php?route=$parameter";
        header('Location:'.$base);
    }


    /*
     * mail function*/
    public function mailto($data){
        mail($data['to'],$data['subject'],$data['content'],$data['header']);
    }

    /*
     * data inject in the view tier
     * */

    /**
     *grab the view tier
     */
    private function GetView($file)
    {
        global $config;
        $master = file_get_contents('view/' . $config['master_page']);
        $file = file_get_contents('view/' . $file . '.html');
//        $data = $master;
        $data = preg_replace('/@{!!.*?content.*?!!}/', $file, $master);


        return $data;
    }

    /*
     * output html*/

    private function DataInjection($page, $data)
    {
        $result = $page;
        if (!empty($data)) {
            if (is_array($data)) {
                foreach ($data as $key => $value) {

                }
            } else {
                throw new Exception('data format error');
            }
        } else {
            $result = preg_replace('/@{{.*?}}/', '', $page);
        }
        return $result;
    }

    /*
     * */

    private function push($page)
    {
        echo $page;

    }


}