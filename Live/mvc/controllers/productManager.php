<?php
class productManager extends Controller
{

    public function default(){
        $data = $this->models("productModel");
        $products = $data->showProducts();
        $this->views("productManageView",$products);
    } 
    
    public function formUpdate($maSP){
        $data = $this->models("productModel");
        $product = $data->showProduct($maSP);
        $product["page"]= "productUpdate";
        $this->views("productManageView",$product);
    }

    public function formAdd(){
        $this->views("productManageView",[
            "page"=>"productAdd",
        ]);
    }
    
    public function updateProduct(){
        $target_dir = "/public/img/";
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["inputImg"]))
        {
            $product = [
                "tenSP" => $_POST["inputName"],
                "maSP1" => $_SESSION["maSP"],
                "maSP2" => $_POST["inputMSP"],
                "giaSP"=> $_POST["inputPrice"],
                "info"=> $_POST["inputInfo"],
                "soLuong"=> $_POST["inputQuatity"],
                "IMG"=> $target_dir.basename($_FILES["inputImg"]["name"])
            ];
        }
        $data = $this->models("productModel");
        $data->updateProduct($product);
        header("Location: http://localhost/Live/productManager"); 
        
    }

    public function addProduct()
    {
        $target_dir = "/public/img/";
        if(isset($_FILES["inputImg"]) && basename($_FILES["inputImg"]["name"])=="")
        {
            $IMG = $target_dir."default.jpg";
        }
        else
        {
            $IMG = $target_dir.basename($_FILES["inputImg"]["name"]);
        }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["inputImg"]))
        {
            $product = [
                "tenSP" => $_POST["inputName"],
                "maSP" => $_POST["inputMSP"],
                "giaSP"=> $_POST["inputPrice"],
                "info"=> $_POST["inputInfo"],
                "soLuong"=> $_POST["inputQuatity"],
                "IMG"=> $IMG
            ];
        }
        $data = $this->models("productModel");
        $data->addProduct($product);
        header("Location: http://localhost/Live/productManager");
    }

    public function delProduct($maSP)
    {
        $data = $this->models("productModel");
        $data->delProduct($maSP);
        header("Location: http://localhost/Live/productManager");
    }
}
?>