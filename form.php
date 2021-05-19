<?php
   function check($field){
        if($field != ''){
            return 1;
        }
        return 0;
    }

    function ner($ugugdul){
        switch($ugugdul){
            case '1':
                return 'Билгүүн: 99859899';
            break;
            case '2':
                return 'Нандин-Эрдэнэ: 99054866';
            break;
            case '3':
                return 'Гэр: 77297071';
            break;
            default:
                return 'Нэр сонгоогүй байна.';
            break;
        }
        return 'No result';
    }
    if(isset($_POST['name'])){
        $number=ner($_POST['name']);
        if(check($number)){
            echo $number;
        }
    }
?>