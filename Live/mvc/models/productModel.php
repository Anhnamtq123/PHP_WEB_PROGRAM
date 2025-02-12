<?php 
class productModel extends DB{
    public  function showProducts()
    {
        // Truy vấn lấy tất cả sản phẩm
        $sql = "SELECT * FROM sanpham";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        // Lấy dữ liệu dưới dạng mảng kết hợp
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        /*
        foreach ($products as $product) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($product['maSP']) . "</td>";
            echo "<td>" . htmlspecialchars($product['tenSP']) . "</td>";
            echo "<td>" . htmlspecialchars($product['giaSP']) . " VNĐ</td>";
            echo "</tr>";
        }
            */
        return $products;
    }

    public  function showProduct($maSP)
    {
        // Truy vấn lấy sản phẩm có mã sản phẩm
        $sql = "SELECT * FROM sanpham WHERE maSP = :maSP";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':maSP', $maSP, PDO::PARAM_STR);
        $stmt->execute();
        // Lấy dữ liệu dưới dạng mảng kết hợp
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        return $product;
    }

    public  function updateProduct($data)
    {
        // Truy vấn Update sản phẩm
        $sql = "UPDATE sanpham SET maSP = :maSP, tenSP = :tenSP,giaSP=:giaSP,info=:info,soLuong=:soLuong,IMG=:IMG WHERE maSP = :maSP";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':maSP', $data["maSP2"], PDO::PARAM_STR);
        $stmt->bindParam(':tenSP', $data["tenSP"], PDO::PARAM_STR);
        $stmt->bindParam(':giaSP', $data["giaSP"], PDO::PARAM_INT);
        $stmt->bindParam(':info', $data["info"], PDO::PARAM_STR);
        $stmt->bindParam(':soLuong', $data["soLuong"], PDO::PARAM_INT);
        $stmt->bindParam(':IMG', $data["IMG"], PDO::PARAM_STR);
        $stmt->execute();

    }

    public  function addProduct($data)
    {
        // Truy vấn Update sản phẩm
        $sql = "INSERT INTO sanpham (maSP,tenSP,giaSP,soLuong,info,IMG) VALUES (:maSP,:tenSP,:giaSP,:soLuong,:info,:IMG)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':maSP', $data["maSP"], PDO::PARAM_STR);
        $stmt->bindParam(':tenSP', $data["tenSP"], PDO::PARAM_STR);
        $stmt->bindParam(':giaSP', $data["giaSP"], PDO::PARAM_INT);
        $stmt->bindParam(':info', $data["info"], PDO::PARAM_STR);
        $stmt->bindParam(':soLuong', $data["soLuong"], PDO::PARAM_INT);
        $stmt->bindParam(':IMG', $data["IMG"], PDO::PARAM_STR);
        $stmt->execute();

            // echo "Đăng nhập thành công";
    }

    public function delProduct($maSP)
    {
        // Truy vấn Delete sản phẩm
        $sql = "DELETE FROM sanpham WHERE maSP=:maSP";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':maSP', $maSP, PDO::PARAM_STR);
        $stmt->execute();
    }

}
?>
