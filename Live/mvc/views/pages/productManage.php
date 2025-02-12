<div class="content">
<div class="add-btn">
    <a href="http://localhost/Live/productManager/formAdd">Thêm sản phẩm</a>
  </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">giá</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col"></th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
  <?php 
  $products = $data;
  $i = 1;
  foreach ($products as $product): 
  ?>
    <tr>
      <?php echo "<th scope='row'>$i</th>" ; $i++;?>
      <td><?= htmlspecialchars($product['tenSP']) ?></td>
      <td><?= number_format(htmlspecialchars($product['giaSP']), 0, ',', '.') ?> VNĐ</td>
      <td><?= htmlspecialchars($product['soLuong']) ?></td>
      <td><img src="<?= BASE_URL ?><?= htmlspecialchars($product['IMG']) ?>" alt="" sizes="30px" srcset=""></td>
      <td><a href="http://localhost/Live/productManager/formUpdate/<?= htmlspecialchars($product['maSP']) ?>">Update</a></td>
      <td><a href="http://localhost/Live/productManager/delProduct/<?= htmlspecialchars($product['maSP']) ?>">Delete</a></td>
    </tr>
  <?php endforeach ?>
  </tbody>
</table>
</div>
