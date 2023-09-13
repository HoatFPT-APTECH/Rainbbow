
<div class="container">
    <h2>Thêm phim mới</h2>
    <form action="xuly.php" method="POST">
      <div class="form-group">
        <label for="name">Tên phim:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$Movie->Name}}" readonly>
      </div>
      <div class="form-group">
        <label for="date">Ngày chiếu:</label>
        <input type="date" class="form-control" id="date" name="date">
      </div>
      <div class="form-group">
        <label for="trailer">Link trailer:</label>
        <input type="text" class="form-control" id="trailer" name="trailer">
      </div>
      <div class="form-group">
        <label for="price">Giá:</label>
        <input type="text" class="form-control" id="price" name="price">
      </div>
      <div class="form-group">
        <label for="description">Mô tả:</label>
        <textarea class="form-control" id="description" name="description"></textarea>
      </div>
      <div class="form-group">
        <label for="category">Thể loại phim :</label>
        <select name="MovieCategory_Id" class="form-select" aria-label="Default select example">
   
          </select>
      </div>
      <div class="form-group">
        <label for="director">Đạo diễn ID:</label>
        <input type="text" class="form-control" id="director" name="director">
      </div>
      <div class="form-group">
        <label for="producer">Nhà sản xuất ID:</label>
        <input type="text" class="form-control" id="producer" name="producer">
      </div>
      <button type="submit" class="btn btn-primary">Thêm phim</button>
    </form>
  </div>