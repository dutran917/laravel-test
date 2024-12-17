<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact');
    }

    // Xử lý dữ liệu gửi lên
    public function submitForm(Request $request)
    {
        // Validate dữ liệu
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Lưu dữ liệu hoặc gửi email ở đây
        // Ví dụ: lưu vào database hoặc gửi email
        Log::info('Form Data', ['name' => $request->name, 'email' => $request->email, 'message' => $request->message]);
        return back()->with('success', 'Message sent successfully!');
    }
}
