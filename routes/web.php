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
})->name('careers.agronomy');

Route::get('/ingenieria-administracion', function () {
    return Inertia::render('Careers/Administration');
})->name('careers.administration');

Route::get('/ingenieria-bioquimica', function () {
    return Inertia::render('Careers/Biochemistry');
})->name('careers.biochemistry');

Route::get('/ingenieria-electromecanica', function () {
    return Inertia::render('Careers/Electromechanics');
})->name('careers.electromechanics');

Route::get('/ingenieria-industrial', function () {
    return Inertia::render('Careers/Industrial');
})->name('careers.industrial');

Route::get('/ingenieria-informatica', function () {
    return Inertia::render('Careers/Informatics');
})->name('careers.informatics');

Route::get('/ingenieria-energias-renovables', function () {
    return Inertia::render('Careers/RenewableEnergies');
})->name('careers.renewable-energies');

Route::get('/admision', function () {
    return Inertia::render('Aplicants/Admission');
})->name('aplicants.admission');

Route::get('/noticias', function () {
    return Inertia::render('Difussion/News');
})->name('difussion.news');

Route::get('/convocatorias', function () {
    return Inertia::render('Difussion/Convocations');
})->name('difussion.convocations');

Route::get('/galeria', function () {
    return Inertia::render('Difussion/Gallery');
})->name('difussion.gallery');

Route::get('/calendario-escolar', function () {
    return Inertia::render('Difussion/AcademicCalendar');
})->name('difussion.academic-calendar');

Route::get('/servicios-escolares', function () {
    return Inertia::render('Departments/AcademicServices');
})->name('departments.academic-services');

Route::get('/vinculacion', function () {
    return Inertia::render('Departments/Vinculation');
})->name('departments.vinculation');

Route::get('/recursos-financieros', function () {
    return Inertia::render('Departments/FinancialResources');
})->name('departments.financial-resources');

Route::get('/sistema-institucional-archivos', function () {
    return Inertia::render('Departments/InstitutionalFileSystem');
})->name('departments.institutional-file-system');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
