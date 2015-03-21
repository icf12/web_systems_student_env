<?php

abstract class AbstractField{

    private $label = null;//надпись рядом с полем
    private $name = null;//имя поля
    private $value = null;//значение поля
    private $errors = array();//массив ошибок поля
    private $require = false;//маркер обязательности

    public function __construct($label, $name, $new_req_marker = false, $value = null){//конструктор поля
        $this->label($label);
        $this->name($name);
        $this->value($value);
        $this->required($new_req_marker);
    }

    public function label($new_label = null){//установить и вернуть label
        if(!is_null($new_label)){
            $this->label = $new_label;
        }
        return $this->label;
    }

    public function name($new_name = null){//установить и вернуть name
        if(!is_null($new_name)){
            $this->name = $new_name;
        }
        return $this->name;
    }

    public function value($new_value = null){//установить и вернуть value
        if(!is_null($new_value)){
            $this->value = $new_value;
        }
        return $this->value;
    }

     public function required($new_value=null){//работа с маркером обязательности
        $new_value = (bool)$new_value;//приведение к bool
        if(!is_null($new_value)) {
            $this->require = $new_value;//переписать require если пришел аргумант
        }
        return $this->require;//вернуть require
    }

    public function validate(){//проверка поля на валидность 
    	if($this->require){
    	if($this->value == ''){
    		$error_collection = new Errors();
                array_push($this->errors, $error_collection->emptyError());
                return;
    	}
    }

        $this->errors = $this->customValidation();
     }

    abstract protected function customValidation();//проверкап конкретного поля

    public function getErrors(){//вернуть ошибки поля
        return $this->errors;
    }

    abstract public function render();//нарисовать поле

}
