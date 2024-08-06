<?php

use App\Http\Controllers\ProfileController;
use App\Mail\ContactMail;
use App\Models\AuditAccess;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    $allowSave = ! AuditAccess::where('ip', $request->ip())
        ->orderByDesc('created_at')
        ->first()
        ?->created_at
        ->addHour()
        ->greaterThanOrEqualTo(now());

    if ($allowSave) {
        AuditAccess::create([
            'ip' => $request->ip(),
            'browser' => browser(),
            'user_agent' => str($request->userAgent())->limit(255),
            'access_at' => today()->format('Y-m-d'),
            'location' => geoip($request->ip())->toArray(),
        ]);
    }

    return view('portfolio');
})->name('portfolio');

Route::post('/', function(Request $request) {
    Mail::to(env('USER_EMAIL'))->send(new ContactMail($request));
    return redirect('/');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
