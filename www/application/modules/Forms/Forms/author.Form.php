<?php

Class Authorization extends AbstractForm{

    protected function create(){//построение формы
        $loginIndex = 'login';
        $this->fields[$loginIndex] = new TextField("Ваш логин", $loginIndex, true);
        $passwordIndex = 'password';
        $this->fields[$passwordIndex] = new PasswordField("Ваш пароль", $passwordIndex, true);
        $submitdIndex = 'auth';
        $this->fields[$submitdIndex] = new SubmitField("", $submitIndex);
    }

    protected function customValidation(){//проверка конкретной формы
        return Array();
    }

    protected function submit(){//выполнение формы

    }

    


}