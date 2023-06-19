<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $categories = Category::all();

    return view('home', ['categories' => $categories]);
})->name('home');

Route::get('/ons-werk', function () {
    $directory = $_SERVER['DOCUMENT_ROOT'] . "/images/ons-werk/";
    $filecount = count(glob($directory . "*"));

    return view('ons-werk', ['filecount' => $filecount]);
})->name('ons-werk');

Route::post('/contact', function (Request $request) {
    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);
    
    Mail::to('mauroscheltens@hotmail.com')->send(new ContactFormMail($validatedData));

    return redirect('/')
        ->with('success', 'Bedankt voor uw bericht. We nemen zo snel mogelijk contact met u op.')
        ->with('scroll', 'bottom');
})->name('contact');