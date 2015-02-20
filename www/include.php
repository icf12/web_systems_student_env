<?php
class AutoInclude{

    public function autoinclude() {
        $this->includFund(glob("application/core/*.php"));
        $this->includFund(glob("application/modules/*/*.php"));
    }

    private function includFund ($collection) {
        foreach($collection as $value){
            include_once $value;
        }
    }
}
