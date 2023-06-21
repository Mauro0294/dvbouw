<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\DienstenController;
use App\Http\Controllers\KernwaardeController;
use App\Http\Controllers\InformatieController;
use App\Http\Controllers\GalleryController;

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
    $dienstenController = new DienstenController();
    $kernwaardesController = new KernwaardeController();
    $informatieController = new InformatieController();
    $galleryController = new GalleryController();

    $diensten = $dienstenController->fetchDiensten();
    $kernwaardes = $kernwaardesController->fetchKernwaardes();
    $informaties = $informatieController->fetchInformatie();
    $image = $galleryController->fetchGallery();

    return view('home', compact('diensten', 'kernwaardes', 'informaties', 'image'));
})->name('home');

Route::get('/ons-werk', function () {
    $galleryController = new GalleryController();

    $data = $galleryController->fetchGallery();

    return view('ons-werk', compact('data'));
})->name('ons-werk');

Route::post('/contact', function (Request $request) {
    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);
    
    Mail::to('dvaannemersbedrijf@gmail.com')->send(new ContactFormMail($validatedData));

    return redirect('/')
        ->with('success', 'Bedankt voor uw bericht. We nemen zo snel mogelijk contact met u op.')
        ->with('scroll', 'bottom');
})->name('contact');