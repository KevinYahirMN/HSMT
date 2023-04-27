<?php
class AnswerControl{

    private $answered;
    private $lack;
    private $temp;

    function check($answered, $lack, $temp, $get){
        if($answered + $lack == 89){
            $this->add($answered, $lack, $temp, $get);
        }else{
            //$this->modify($answered, $lack, $temp, $get);
        }
    }

    private function add($answered, $lack, $temp, $get){
        $answered++;
        $lack--;
        array_push($temp, $get);
        $this->answered = $answered;
        $this->lack = $lack;
        $this->$temp = $temp;
    }

    /*
    private function modify($answered, $lack, $temp, $get){
        if($c == 0){
            $get = $_POST["Q"];
            $temp[0] = $get;
            $_SESSION["answer"] = $temp;
            $c++;
        }else{
            $c--;
        }
        $_SESSION["counter"] = $c;
    }
*/
}
?>