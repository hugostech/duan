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
    /**
     *grab the view tier
     */
    private function GetView($file){
        global $config;
        $master = file_get_contents('view/'.$config['master_page']);
        $file = file_get_contents('view/'.$file.'.html');
//        $data = $master;
        $data = preg_replace('/@{!!.*?content.*?!!}/',$file,$master);



        return $data;
    }
    /*
     * data inject in the view tier
     * */
    private function DataInjection($page,$data){
        $result = $page;
        if(!empty($data)){
            if(is_array($data)){
                foreach($data as $key=>$value){

                }
            }else{
                throw new Exception('data format error');
            }
        }else{
            $result = preg_replace('/@{{.*?}}/','',$page);
        }
        return $result;
    }
    /*
     * output html*/
    public function push($page){
        echo $page;

    }

    /*
     * */
    public function view($file,$data = null){
        $page = self::GetView($file);
        $page = self::DataInjection($page,$data);
        self::push($page);
    }
}