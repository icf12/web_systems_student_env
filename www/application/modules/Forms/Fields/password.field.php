<?php

Class PasswordField extends AbstractField{

    protected function customValidation(){//временная реализация
        $str = $this->value();
        if(strlen($str) < 6)
        {
           $errors = new Errors();
           return array($errors->incorrectLengthError());
        }
        return array();
    }

    public function render(){//временная реализация

        $label = $this->label();
        $name = $this->name();
        $value = $this->value();
        $field = "<br>$label<br><input type='password' name='$name' value='$value'/>";
        $a=$this->getErrors();
        $b;
        foreach($a as $value){
            $b.=$value;
        }
        if(count($this->getErrors())>0){
           $field = str_replace("$label", "<font color='red'>$label</font>", $field);
           $field .= "<br>$b";

        }        
        return $field;
    }

}