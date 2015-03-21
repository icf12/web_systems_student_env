<?php

Class TextField extends AbstractField{

    protected function customValidation(){//временная реализация
        return Array();
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
        $field = "<br>$label<br><input type='text' name='$name' value='$value'>$errors";
        return $field;
    }

}