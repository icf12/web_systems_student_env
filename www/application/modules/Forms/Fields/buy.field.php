<?php

Class BuyField extends AbstractField{

    protected function customValidation(){//временная реализация
        return Array();
    }

    public function render(){//временная реализация

        $label = $this->label();
        $name = $this->name();
        $value = $this->value();
        $field = "<br>$label<br><input type='submit' name='$buy' value='купить билет'>";

        return $field;
    }

}