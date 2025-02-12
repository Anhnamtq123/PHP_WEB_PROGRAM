<div class="col col-1">
    <div class="container">
        <ul class="shelf">
            <?php $products = $data ?>
                <?php foreach ($products as $product): ?>
                    <li class="col box">
                        <div class="box-item">
                            <a class="item" href="http://localhost/Live/home/showProduct/<?php echo $product['maSP'] ?>">
                                <div class="item-avatar">
                                    <img src="<?= BASE_URL ?><?= htmlspecialchars($product['IMG']) ?>" alt="">
                                </div>
                                <div class="item-info">
                                    <p class="item-name"><?= htmlspecialchars($product['tenSP']) ?></p>
                                </div>
                            </a>
                        </div>
                    </li>
                <?php endforeach ?>
        </ul>
    </div>
</div>