<?php

abstract Class AbstractField{


    private $errors = array();//ошибки
    private $header = null;//заголовок формы
    private $fields = Array();//поля формы


    public function header($header){//установка заголовкак формы
        $this->header = $header;
    }

    public function __construct(){
        $this->create();
    }

    abstract protected function create();//построение формы

    protected function validation(){//общая проверка формы
        foreach($this->fields as $field){//пробегаем по всем полям формы
            $field->validate();//проверяем их
            array_push($errors, $field->getErrors());//и накапливаем ошибки
        }
        array_merge($errors, $this->customValidation());
    }

    abstract protected function customValidation();//проверка конкретной фррмы

    public function getErrors(){//вернуть ошибки формы
        return $this->errors;
    }

    abstract protected function render();//нарисовать форму

    public function process(){//выполнение формы
        $this->getFormValues();
        $this->validation();
        if(count($this->getErrors())==0){
            $this->submit();
        }
        else{
            $this->render();
        }

    }

    private function getFormValues(){//считать поля с формы
        $values = $_POST;
        foreach($this->fields as $index=>$field){
            $field->value($values[$index]);
        }
    }

    abstract protected function submit();//подтверждение формы

}