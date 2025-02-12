<?php 
if (!isset($_SESSION["username"])) {
    header("Location: http://localhost/Live/login");
    exit();
}

class Home extends Controller{
    
    public function default(){
        $product = $this->models("productModel");
        $this->views("homeView",$product->showProducts());
    } 
    
    public function showProduct($param){
        $data = $this->models("productModel");
        $product = $data->showProduct($param);        
        $product["page"]="showProduct";
        $this->views("homeView",$product);
    }

}
?>