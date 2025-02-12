<?php 
class News extends Controller{
    public function default(){
        echo "Default";
    }

    public function sayHi(){
        $products = $this->models("productModel");
        $as=  $products->showProducts();
        $this->views("newsViews",$as);
    }
}
?>