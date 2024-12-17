<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    //
    public function index()
    {
        // Lấy tất cả sản phẩm của người dùng hiện tại
        $products = Product::where('user_id', Auth::id())->get(); // Lấy sản phẩm của user đang đăng nhập
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validate dữ liệu
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        // Lưu sản phẩm vào CSDL
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'user_id' => auth()->id() ?? 1,  // Giả sử mỗi sản phẩm sẽ thuộc về một user
        ]);

        // Điều hướng về trang danh sách sản phẩm
        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
        ]);

        $product->update($validated);
        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được cập nhật.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được xóa.');
    }
}
