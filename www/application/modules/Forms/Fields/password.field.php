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
        if(count($this->getErrors()) > 0) {
           $errors = implode("<br/>", $this->getErrors());
           $label = "<font color='red'>$label</font>";
           $errors = "<br>$errors";
        }
        $field = "<br>$label<br><input type='password' name='$name' value='$value'/>$errors";
        return $field;
    }

}