<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo sản phẩm mới</title>
</head>
<body>
    <h1>Tạo sản phẩm mới</h1>

    <!-- Form tạo sản phẩm mới -->
    <form action="{{ route('products.store') }}" method="POST">
        @csrf <!-- CSRF protection -->
        <div>
            <label for="name">Tên sản phẩm</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="price">Giá sản phẩm</label>
            <input type="number" id="price" name="price" required>
        </div>
        <div>
            <button type="submit">Lưu sản phẩm</button>
        </div>
    </form>

    <!-- Link quay lại danh sách sản phẩm -->
    <a href="{{ route('products.index') }}">Quay lại danh sách sản phẩm</a>
</body>
</html>
