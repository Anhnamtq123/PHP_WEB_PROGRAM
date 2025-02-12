# PHP_WEB_PROGRAM
## 📌 Giới thiệu
Dự án **PHP_WEB_PROGRAM** là một hệ thống quản lý bán hàng được phát triển theo mô hình **MVC (Model-View-Controller)**. Hệ thống giúp quản lý khách hàng, sản phẩm, đơn hàng, tồn kho và theo dõi doanh số một cách hiệu quả.

## 🚀 Tính năng chính
- **Quản lý sản phẩm**: Thêm mới, cập nhật thông tin và xóa sản phẩm.
- **Quản lý đơn hàng**: Tạo, cập nhật trạng thái và theo dõi đơn hàng.
- **Quản lý tồn kho**: Kiểm soát số lượng sản phẩm trong kho.

## 🛠️ Công nghệ sử dụng

- **Backend**: ngôn ngữ lập trình PHP
- **Frontend**: HTML,CSS,Javascript
- **Database**: MySQL

## 📂 Cấu trúc thư mục

```
📦 Live
├── 📂 mvc
│   ├── 📂 modes            # Định nghĩa các mô hình dữ liệu
│   ├── 📂 views            # Giao diện người dùng
│   ├── 📂 controllers      # Điều khiển logic ứng dụng
│   └── 📜 bridge.php       # Cầu nối giữa 3 folder MVC
│   
│   ├── 📂 routes           # Định nghĩa các API endpoint
│   ├── 📂 config
├── 📂 Public           # Cấu hình hệ thống
│   ├── 📂 img         # file ảnh
│   └── 📂 css         
├── 📜 README.md         # Tài liệu hướng dẫn
├── 📜 config.php        # Đặt đường dẫn gốc dự án
├── 📜 index.php         # File chạy
└── 📜 .htaccess         # Lấy tất cả dữ liệu trên URL chuyển về index.php
```

## Sản phẩm đang trong quá trình hoàn thiện
Một số chức năng có thể chưa sử dụng được



