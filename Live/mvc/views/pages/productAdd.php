<form id="update-form" action="<?= BASE_URL ?>/productManager/addProduct" method="post" enctype="multipart/form-data">
        <div class="update-item">
            <label for="inputMSP" class="update-form_label">Mã sản phẩm</label>
            <input class="update-form_input" type="text" id="inputMSP" name="inputMSP" placeholder="Nhập mã sản phẩm">
        </div>

        <div class="update-item">
            <label for="inputName" class="update-form_label">Tên Sản phẩm</label>
            <input class="update-form_input" type="text" id="inputName" name="inputName" placeholder="Nhập tên sản phẩm">
        </div>

        <div class="update-item">
            <label for="inputPrice" class="update-form_label">Giá</label>
            <input class="update-form_input" type="text" id="inputPrice" name="inputPrice" placeholder="Nhập giá">
        </div>

        <div class="update-item">
            <label for="inputQuatity" class="update-form_label">Số lượng</label>
            <input class="update-form_input" type="text" id="inputQuatity" name="inputQuatity" placeholder="Nhập số lượng">
        </div>

        <div class="update-item">
            <label for="inputInfo" class="update-form_label">Mô tả</label>
            <textarea class="update-form_input" id="update-form_input" name="inputInfo" rows="3" placeholder="Nhập mô tả"></textarea>
        </div>

        <div class="update-item">
            <div class="update-form_img">
                <h3 class="name">Thêm ảnh</h3>
                <input class="update-form_file" type="file" name="inputImg" id="update-form_file" accept="image/*" onchange="showImg(event)">
                <img id="preview" src="" alt="" sizes="" srcset="">
                <p id="placeholder">Nhấn để tải ảnh</p>
            </div>
        </div>
        
        <div class="update-item">
            <button type="submit" class="update-btn">Thêm sản phẩm</button>
          </div>
    </form>
    <script>
        function showImg(event){
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.getElementById('preview');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                    document.getElementById('placeholder').style.display = 'none';
                }
                reader.readAsDataURL(file);
            }
        }
</script>
