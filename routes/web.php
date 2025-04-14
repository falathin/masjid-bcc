<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ArticleController,
    KasMasjidController,
    JadwalJumatController,
    ContactController,
    ProductController
};

// start Untuk route non admin dan gak login dibawah

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/berita', function () {
    return view('news');
})->name('news');

Route::get('/qna', function () {
    return view('contact');
})->name('contact');

Route::get('/tentang', [KasMasjidController::class, 'show'])->name('about');

Route::get('/bumm', function () {
    return view('bumm');
})->name('bumm');

Route::get('/galery', function () {
    return view('galery');
})->name('galery');

Route::get('/pesantren', function () {
    return view('pesantren');
})->name('pesantren');

Route::get('/qurban', function () {
    return view('qurban');
})->name('qurban');

Route::get('/ikatan', function () {
    return view('ikatan');
})->name('ikatan');

Route::get('/berita', [ArticleController::class, 'frontIndex'])->name('news');
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// end Untuk route non admin dan blum login dibawah

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // start Untuk route Admin dibawah

    Route::get('/admin-home', function () {
        return view('admin.dashboard');
    })->name('admin.home');

    Route::resource('admin/article', ArticleController::class)->names('admin.article');

    Route::resource('admin/kas', KasMasjidController::class)->names([
        'index'   => 'admin.kas.index',
        'create'  => 'admin.kas.create',
        'store'   => 'admin.kas.store',
        'edit'    => 'admin.kas.edit',
        'update'  => 'admin.kas.update',
        'destroy' => 'admin.kas.destroy',
    ])->parameters([
        'kas' => 'kasMasjid'
    ]);

    Route::resource('admin/jadwal', JadwalJumatController::class)->names([
        'index'   => 'admin.jadwal.index',
        'create'  => 'admin.jadwal.create',
        'store'   => 'admin.jadwal.store',
        'edit'    => 'admin.jadwal.edit',
        'update'  => 'admin.jadwal.update',
        'destroy' => 'admin.jadwal.destroy',
        'show'    => 'admin.jadwal.show',
    ]);

    // Admin: lihat daftar pesan (Notifikasi QnA)
    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('admin.contacts.index');

    // Admin: form untuk menjawab pesan
    Route::get('/admin/contacts/{contact}/answer', [ContactController::class, 'answerForm'])->name('admin.contacts.answerForm');

    // Admin: kirim jawaban ke email guest
    Route::post('/admin/contacts/{contact}/answer', [ContactController::class, 'sendAnswer'])->name('admin.contacts.sendAnswer');

    // Admin: hapus pesan
    Route::delete('/admin/contacts/{contact}', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');

    Route::prefix('admin')->name('admin.')->group(function () {
        // Route untuk produk (CRUD)
        Route::resource('products', ProductController::class);
    });
    // end Untuk route Admin dibawah
});


require __DIR__ . '/auth.php';
