<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quản lý sản phẩm</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

	<div class="container mt-4">
		<h2>Danh sách sản phẩm</h2>
		<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#productModal">Thêm sản phẩm</button>

		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tên sản phẩm</th>
					<th>Giá</th>
					<th>Số lượng</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $product)
					<tr>
						<td>{{ $product->id }}</td>
						<td>{{ $product->name }}</td>
						<td>{{ $product->price }}</td>
						<td>{{ $product->quantity }}</td>
						<td>
							<a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Sửa</a>
							<form action="{{ route('products.destroy', $product->id) }}" method="POST"
								style="display:inline-block;">
								<!-- @csrf -->
								{{ csrf_field() }}
								<button class="btn btn-danger btn-sm" type="submit">Xóa</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<!-- Modal Thêm/Sửa Sản phẩm -->
	<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="productModalLabel">Thêm sản phẩm mới</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form action="{{ route('products.store') }}" method="POST">
					<!-- @csrf -->
					{{ csrf_field() }}
					<div class="modal-body">
						<div class="mb-3">
							<label for="name" class="form-label">Tên sản phẩm</label>
							<input type="text" class="form-control" id="name" name="name" required>
						</div>
						<div class="mb-3">
							<label for="description" class="form-label">Mô tả</label>
							<textarea class="form-control" id="description" name="description" required></textarea>
						</div>
						<div class="mb-3">
							<label for="price" class="form-label">Giá</label>
							<input type="number" class="form-control" id="price" name="price" required>
						</div>
						<div class="mb-3">
							<label for="quantity" class="form-label">Số lượng</label>
							<input type="number" class="form-control" id="quantity" name="quantity" required>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
						<button type="submit" class="btn btn-primary">Lưu sản phẩm</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>