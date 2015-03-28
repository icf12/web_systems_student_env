<?php

Class TypeField extends AbstractField{

    protected function customValidation(){//временная реализация
        return Array();
    }

    public function render(){//временная реализация

        $label = $this->label();
        $name = $this->name();
        $value = $this->value();
        $field = "<br>$label<br><input type='radio' name='type' value='standard'> обычная
                                <input type='radio' name='type' value='VIP'> VIP";

        return $field;
    }

}