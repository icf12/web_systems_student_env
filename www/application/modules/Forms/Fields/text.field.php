<?php

Class TextField extends AbstractField{

    protected function customValidation(){//временная реализация
        return Array();
    }

    public function render(){//временная реализация

        $label = $this->label();
        $name = $this->name();
        $value = $this->value();
        $field = "<br>$label<br><input type='text' name='$name' value='$value'>";
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