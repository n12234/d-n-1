<?php 
function yeu_thich(){
    if(!empty($_COOKIE['user'])){
        $user= json_decode($_COOKIE['user'],true);
        $yeu_thich=select_list_yeu_thich($user['id']);
        print_r($yeu_thich);
        view('/page/yeu_thich',['yeu_thich'=>$yeu_thich]);
    }else{
        view('/page/home');
    }
}

?>