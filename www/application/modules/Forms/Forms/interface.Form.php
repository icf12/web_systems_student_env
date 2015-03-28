<?php

Class UserInterface extends AbstractForm{

    protected function create(){//построение формы
        $dateIndex = 'date';
        $this->fields[$dateIndex] = new DateField("Дата экскурсии", $dateIndex);
        $typeIndex = 'type';
        $this->fields[$typeIndex] = new TypeField("Тип", $typeIndex);
        $buyIndex = 'buy';
        $this->fields[$buydIndex] = new BuyField("", $buyIndex);
        $giftsIndex = 'gifts';
        $this->fields[$giftsIndex] = new GiftsField("", $giftsIndex);
        $this->method("POST");
        $this->action("/inter");
    }

    protected function customValidation(){//проверка конкретной формы
        return Array();
    }

    protected function submit(){//выполнение формы

    }

    


}