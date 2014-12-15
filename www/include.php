<?php
class AutoInclude{
    public function autoinclude() {

    }
    private function includFund ($collection) {
        foreach($collection as $value){
            include_once $value;
        }
    }
}
