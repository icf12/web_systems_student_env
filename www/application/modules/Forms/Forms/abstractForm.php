<?php

abstract Class AbstractForm{


    private $errors = Array();//ошибки
    protected $header = null;//заголовок формы
    protected $fields = Array();//поля формы

    private $firstOpen = true;//индикатор 1 открытия

    private $method = null;//метод формы
    private $action = null;//действие формы

    public function method($new_method = null){//установить и вернуть method
        if(!is_null($new_method)){
            $this->method = $new_method;
        }
        return $this->method;
    }

    public function action($action = null){//установить и вернуть action
        if(!is_null($action)){
            $this->action = $action;
        }
        return $this->action;
    }

    public function header($header = null){//установка заголовкак формы
        if(!is_null($header)){
            $this->header = $header;
        }
        return $this->header;
    }

    public function __construct(){
        $this->create();
    }

    abstract protected function create();//построение формы

    protected function validation(){//общая проверка формы
        foreach($this->fields as $field){//пробегаем по всем полям формы
            $field->validate();//проверяем их
            array_merge($this->errors, $field->getErrors());//и накапливаем ошибки
        }
        array_merge($this->errors, $this->customValidation());
    }

    abstract protected function customValidation();//проверка конкретной фррмы

    public function getErrors(){//вернуть ошибки формы
        return $this->errors;
    }

    abstract protected function render();//нарисовать форму

    public function process(){//выполнение формы
        $this->getFormValues();
        if($this->firstOpen){//если открываешь в первый раз, то просто вывестина экран
            $this->render();
            return;
        }
        $this->validation();//иначе продолжить выполнение process
        if(count($this->getErrors())==0){
            $this->submit();
            return;
        }
        $this->render();

    }

    private function getFormValues(){//считать поля с формы
        $values = $_POST;
        if(count($values) !== 0){//если POST пустой значит форма открыта в первый раз
            $this->firstOpen = false;
        }
        foreach($this->fields as $index=>$field){
            $field->value($values[$index]);
        }
    }

    abstract protected function submit();//подтверждение формы

}