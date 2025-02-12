<div class="product">
        <div class="product-avatar">
            <img src="<?= BASE_URL ?><?= htmlspecialchars($data['IMG']) ?>" alt="">
        </div>
        <div class="product-info">
            <div class="product-item">
                <h1><?php echo $data["tenSP"] ?></h1>
            </div>
            <div class="product-item">
                <h2>Mô tả</h2>
                <p><?= htmlspecialchars($data['info']) ?></p>
            </div>
            <div class="product-item">
                <h2>Giá sản phẩm</h2>
                <p><?= htmlspecialchars($data['giaSP']) ?></p>
            </div>
            <div class="product-item">
                <h2>Số lượng</h2>
                <p><?= htmlspecialchars($data['soLuong']) ?></p>
            </div>
            <div class="product-item">
                <button type="button">Buy now</button>
                <button type="button">Add to cart</button>
            </div>
        </div>
</div>