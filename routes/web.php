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
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ContactController;

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
    $heroController = new HeroController();
    $contactController = new ContactController();

    $diensten = $dienstenController->fetchDiensten();
    $kernwaardes = $kernwaardesController->fetchKernwaardes();
    $informaties = $informatieController->fetchInformatie();
    $image = $galleryController->fetchGallery();
    $hero = $heroController->fetchHeroes();
    $contact = $contactController->fetchContact();

    return view('home', compact('diensten', 'kernwaardes', 'informaties', 'image', 'hero', 'contact'));
})->name('home');

Route::get('/ons-werk', function () {
    $galleryController = new GalleryController();
    $heroController = new HeroController();
    $contactController = new ContactController();

    $data = $galleryController->fetchGallery();
    $hero = $heroController->fetchHeroes();
    $contact = $contactController->fetchContact();

    return view('ons-werk', compact('data', 'hero', 'contact'));
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