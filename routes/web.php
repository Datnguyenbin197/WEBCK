    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\BookController;
    use App\Http\Controllers\BorrowController;
    use Illuminate\Routing\RouteParameterBinder;


    Route::get('/', [BookController::class, 'getBook']);

    //addBook
    Route::get('/addBook', function () {
        return view('addBook');
    });
    //thêm
    Route::post('/addBook', [BookController::class, 'storeBook'])->name('addBook');
    //xoá
    Route::delete('/deleteBook/{IDB}', [BookController::class, 'deleteBook'])->name('deleteBook');
    //sửa
    Route::get('/editBook/{IDB}', [BookController::class, 'editBook'])->name('editBook');
    Route::post('/updateBook/{IDB}', [BookController::class, 'updateBook'])->name('updateBook');
    
    //muonBook
    Route::get('/muonBook', [BorrowController::class, 'getIDB'])->name('getBorrow');
    Route::post('/addBorrow', [BorrowController::class, 'addBorrow'])->name('borrow.add');

      
    
    //LS
    Route::get( '/LS', [BorrowController::class, 'getBorrow'])->name('getBorrow');
    //search
    Route::get('/search', [BookController::class, 'searchBook'])->name('searchBook');

    Route::get('/timtraBook', function () {
        return view('timtraBook');
    });
    Route::post('/timtraBook', [BorrowController::class, 'findBorrow'])->name('findBorrow');

    Route::post('/borrow/update', [BorrowController::class, 'updateBorrow'])->name('borrow.update');

    Route::get('/LS', [BorrowController::class, 'getBorrow'])->name('borrow.list');

    // Route hiển thị trang trả sách (traBook)
    Route::get('/traBook/{Masv}', [BorrowController::class, 'editBorrow'])->name('borrow.edit');

// Route xử lý cập nhật trả sách
    Route::post('/traBook/update', [BorrowController::class, 'updateBorrow'])->name('borrow.update');




    


   