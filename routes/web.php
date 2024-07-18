<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    // return Inertia::render('Maintenance');
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
})->name('home');

Route::get('/historia', function () {
    return Inertia::render('About/History');
})->name('history');

Route::get('/filosofia', function () {
    return Inertia::render('About/Filosophy');
})->name('filosophy');

Route::get('/directorio', function () {
    return Inertia::render('About/Directory');
})->name('directory');

Route::get('/organigrama', function () {
    return Inertia::render('About/Organigram');
})->name('organigram');

Route::get('/programa-institucional', function () {
    return Inertia::render('About/InstitutionalProgram');
})->name('institutional-program');

Route::get('/decreto-creacion', function () {
    return Inertia::render('About/CreationEdict');
})->name('creation-edict');

Route::get('/manual-organizacion', function () {
    return Inertia::render('About/OrganizationManual');
})->name('organization-manual');

Route::get('/ingenieria-agronomia', function () {
    return Inertia::render('Careers/Agronomy');
})->name('careers-agronomy');

Route::get('/ingenieria-administracion', function () {
    return Inertia::render('Careers/Administration');
})->name('careers-administration');

Route::get('/ingenieria-bioquimica', function () {
    return Inertia::render('Careers/Biochemistry');
})->name('careers-biochemistry');

Route::get('/ingenieria-electromecanica', function () {
    return Inertia::render('Careers/Electromechanics');
})->name('careers-electromechanics');

Route::get('/ingenieria-industrial', function () {
    return Inertia::render('Careers/Industrial');
})->name('careers-industrial');

Route::get('/ingenieria-informatica', function () {
    return Inertia::render('Careers/Informatics');
})->name('careers-informatics');

Route::get('/ingenieria-energias-renovables', function () {
    return Inertia::render('Careers/RenewableEnergies');
})->name('careers-renewable-energies');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
