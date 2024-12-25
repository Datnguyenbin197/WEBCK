<?php
namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Lấy tất cả sách và hiển thị lên view
    public function getBook()
    {
        $books = Book::all();
        return view('index', compact('books'));
    }
    
    // Thêm sách vào cơ sở dữ liệu
    public function storeBook(Request $request)
    {
        // Tạo bản ghi mới và lưu vào cơ sở dữ liệu
        $book = new Book();
        $book->IDB = $request->IDB;
        $book->NameB = $request->NameB;
        $book->NameTG = $request->NameTG;
        $book->KE = $request->Ke;
        $book->TANG = $request->Tang;
        $book->save(); // Lưu vào cơ sở dữ liệu

        // Quay lại trang danh sách sách sau khi lưu thành công
        return redirect('/')->with('success', 'Sách đã được thêm thành công!');
    }

    // Xóa sách theo ID
    public function deleteBook($IDB)
    {
        // Tìm sách theo IDB
        $book = Book::find($IDB);

        // Nếu sách tồn tại, xóa nó
        if ($book) {
            $book->delete();
            return redirect('/')->with('success', 'Sách đã được xóa thành công!');
        }
    }

        public function searchBook(Request $request)
    {
        $query = $request->input('query'); // Lấy giá trị từ input "query"

        // Tìm kiếm sách theo tên
        $books = Book::where('NameB', 'LIKE', "%{$query}%")->get();

        // Trả về view kèm theo danh sách sách tìm được
        return view('search', compact('books', 'query'));
    }

    public function editBook($IDB) {
        $book =Book::find($IDB);
        if ($book) {
            return view('update', compact('book'));
        }
    }
    
    public function updateBook(Request $request, $IDB)
{
    // Lấy sách cần sửa theo IDB
    $book = Book::find($IDB);

    // Nếu sách tồn tại, cập nhật thông tin
    if ($book) {
        $book->NameB = $request->NameB;
        $book->NameTG = $request->NameTG;
        $book->KE = $request->Ke;
        $book->TANG = $request->Tang;
        $book->save(); // Lưu lại thông tin

        return redirect('/')->with('success', 'Thông tin sách đã được cập nhật!');
    }

    // Nếu không tìm thấy sách, quay lại với thông báo lỗi
    return redirect('/')->with('error', 'Không tìm thấy sách để sửa!');
}
}