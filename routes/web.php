<?php

use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\EnvioAnexoController;
use App\Http\Controllers\Web\ProducaoMedicaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::redirect('/','dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
  Route::get('/dashboard', fn () => Inertia::render('Dashboard'))
    ->name('dashboard');

  Route::get('/envioProducaoMedica', [ProducaoMedicaController::class,'index'])->name('envioProducaoMedica.index');
  Route::get('/producaoMedica', [ProducaoMedicaController::class,'searchAll'])->name('envioProducaoMedica.searchAll');
  Route::post('/envioProducaoMedica/sendMail', [ProducaoMedicaController::class,'sendEmail'])->name('envioProducaoMedica.sendMail');
  
  Route::get('/envioAnexo/all', [EnvioAnexoController::class,'searchAll'])->name('envioAnexo.searchAll');
  Route::get('/envioAnexo', [EnvioAnexoController::class,'index'])->name('envioAnexo.index');
  Route::post('/envioAnexo/sendAnexoMail', [EnvioAnexoController::class,'sendAnexoEmail'])->name('envioAnexo.sendAnexoMail');

  // ROTAS DE TESTE PARA GERAR PDF
  //Route::get('/geraPdf', [PdfController::class, 'generatePdfProducao'])->name('pdf.generate');
  Route::get('/geraPdf2', [PdfController::class, 'generatePdfExtratoImposto'])->name('pdf.generate');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
