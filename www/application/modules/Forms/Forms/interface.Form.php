<?php

Class UserInterface extends AbstractForm{

    protected function create(){//построение формы
        $this->header("Личный");
        $this->method("POST");
        $this->action("/inter");
    }

    protected function customValidation(){//проверка конкретной формы
        return Array();
    }

    protected function submit(){//выполнение формы

    }

    


}