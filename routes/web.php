<?php
 use Illuminate\Support\Facades\Route;

 use App\Http\Controllers\MultiStepFormController;


Route::get('/', function () {
    return view('welcome');
});






 Route::get('/form/step1', [MultiStepFormController::class, 'showStep1'])->name('form.step1');
Route::post('/form/step1', [MultiStepFormController::class, 'postStep1']);

Route::get('/form/step2', [MultiStepFormController::class, 'showStep2'])->name('form.step2');
Route::post('/form/step2', [MultiStepFormController::class, 'postStep2']);

Route::get('/form/step3', [MultiStepFormController::class, 'showStep3'])->name('form.step3');
Route::post('/form/step3', [MultiStepFormController::class, 'postStep3']);

Route::match(['get', 'post'], '/form/submit', [MultiStepFormController::class, 'submitForm'])->name('form.submit');
