@extends('layouts.app')

@section('content')
    <h1>Chi tiết sản phẩm</h1>
    <p><strong>Tên sản phẩm:</strong> {{ $product->name }}</p>
    <p><strong>Mô tả:</strong> {{ $product->description }}</p>
    <p><strong>Giá:</strong> {{ $product->price }}</p>
    <p><strong>Số lượng:</strong> {{ $product->quantity }}</p>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
@endsection
