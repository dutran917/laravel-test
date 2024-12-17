<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sửa sản phẩm</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container mt-4">
		<h2>Sửa sản phẩm</h2>
		<form action="{{ route('products.update', $product->id) }}" method="PUT">
			@csrf
			@method('PUT')
			<div class="mb-3">
				<label for="name" class="form-label">Tên sản phẩm</label>
				<input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
			</div>
			<div class="mb-3">
				<label for="description" class="form-label">Mô tả</label>
				<textarea class="form-control" id="description" name="description" required>{{ $product->description }}</textarea>
			</div>
			<div class="mb-3">
				<label for="price" class="form-label">Giá</label>
				<input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
			</div>
			<div class="mb-3">
				<label for="quantity" class="form-label">Số lượng</label>
				<input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}" required>
			</div>
			<button type="submit" class="btn btn-primary">Lưu thay đổi</button>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
