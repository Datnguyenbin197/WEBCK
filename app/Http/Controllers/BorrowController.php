<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\Book;
use App\Models\Stu;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function getBorrow()
    {
        // Tải trước dữ liệu sinh viên liên quan từ mô hình Stu
        $borrows = Borrow::with('student')->get();
        return view('LS', compact('borrows'));
    }

    public function getIDB()
    {
        // Lấy danh sách sách từ bảng books
        $books = Book::all();
        return view('muonBook', compact('books'));
    }


    public function addBorrow(Request $request)
    {
        // Kiểm tra dữ liệu đầu vào
        $request->validate([
            'Masv' => 'required',
            'Tensv' => 'required',
            'class' => 'required',
            'SDT' => 'required',
            'IDB' => 'required',
            'dateM' => 'required|date',
        ]);

        // Tạo mới sinh viên trong bảng students
        $student = new Stu();
        $student->Masv = $request->Masv;
        $student->Tensv = $request->Tensv;
        $student->class = $request->class;
        $student->SDT = $request->SDT; // Truyền giá trị SDT
        $student->save();

        // Lưu thông tin mượn sách vào bảng borrows
        $borrow = new Borrow();
        $borrow->Masv = $student->Masv; // Liên kết bằng Masv vừa lưu
        $borrow->IDB = $request->IDB;
        $borrow->dateM = $request->dateM;
        $borrow->traB = 1;
        $borrow->save();

        return redirect('/LS')->with('success', 'Thông tin mượn sách đã được lưu thành công!');
    }

    public function findBorrow(Request $request)
    {
        $Masv = $request->Masv; // Lấy mã sinh viên từ form
        $borrows = Borrow::where('Masv', $Masv)->where('traB', 1)->get(); // Tìm các sách chưa trả

        if ($borrows->isNotEmpty()) {
            // Nếu tìm thấy bản ghi, give data to traBook view
            return view('traBook', compact('borrows', 'Masv'));
        } else {
            // Nếu không tìm thấy, quay lại trang tìm kiếm với thông báo lỗi
            return redirect()->back()->with('error', 'Không tìm thấy thông tin mượn sách cho sinh viên này!');
        }
    }

    public function editBorrow($Masv)
    {
        // Lấy danh sách sách mượn chưa trả của sinh viên
        $borrows = Borrow::with('book') // Include thông tin sách
            ->where('Masv', $Masv)
            ->where('traB', 1) // Chỉ lấy sách chưa trả
            ->get();

        if ($borrows->isEmpty()) {
            return redirect()->back()->with('error', 'Không tìm thấy sách mượn chưa trả của sinh viên này.');
        }

        return view('traBook', [
            'Masv' => $Masv,
            'borrows' => $borrows,
        ]);
    }

    public function updateBorrow(Request $request)
    {
        $validatedData = $request->validate([
            'Masv' => 'required',
            'dateT' => 'required|date',
        ]);

        $updated = Borrow::where('Masv', $validatedData['Masv'])
            ->where('traB', 1)
            ->update([
                'dateT' => $validatedData['dateT'],
                'traB' => 0,
            ]);

        if ($updated) {
            return redirect()->route('borrow.list')->with('success', 'Sách đã được trả thành công.');
        } else {
            return response()->json([
                'error' => 'Không tìm thấy bản ghi mượn sách phù hợp để cập nhật.',
            ], 404);
        }
    }
}