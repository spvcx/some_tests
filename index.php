<?php
interface Product {
    public function getName();
}
class Factory {
    protected $firstProduct;
    protected $secondProduct;

    public function getFirstProduct() {
        if(!$this->firstProduct) {
            $this->firstProduct = new FirstProduct();
        }
        return $this->firstProduct;
    }

    public function getSecondProduct() {
        if(!$this->secondProduct) {
            $this->secondProduct = new SecondProduct();
        }
        return $this->secondProduct;
    }

}

class FirstProduct implements Product {
    public function getName(){
        return "First Product Name";
    }
}
class SecondProduct implements Product {
    public function getName(){
        return "Second Product Name";
    }
}

$factory = new Factory();
print_r($factory->getFirstProduct()->getName());
print_R($factory->getSecondProduct()->getName());
?>