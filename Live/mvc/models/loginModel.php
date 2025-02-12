<?php

class loginModel extends DB
{
    function checkUser($inputUsername,$inputPassword)
    {
        // Truy vấn kiểm tra người dùng
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':username', $inputUsername, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Kiểm tra thông tin đăng nhập
        if ($user && $inputPassword == $user['password']) {
            $_SESSION["username"] = $user["username"];
            // header("Location: http://localhost/Live/home"); // Chuyển hướng sau khi đăng nhập thành công
            return true;
        } else {
            return false;
        }
    }
}
?>