<?php

Class Authorization extends AbstractForm{

    protected function create(){//построение формы
        $loginIndex = 'login';
        $this->fields[$loginIndex] = new TextField("Ваш логин", $loginIndex);
    }

    protected function customValidation(){//проверка конкретной формы
        return Array();
    }

    protected function submit(){//выполнение формы

    }

    protected function render(){//нарисовать форму
    //временная реализация

        $header = $this->header();
        $method = $this->method();
        $action = $this->action();
        $form = "<h1>$header</h1><form method='$method' action='$action'>";
        foreach ($this->fields as $field) {
            $form .= $field->render();
        }
        echo $form . "</form>";
    }


}