<?php

use Illuminate\Support\Facades\Route;
use YourVendor\LaravelInteractiveDocs\Http\Controllers\DocumentationController;

Route::get('docs', [DocumentationController::class, 'index'])->name('interactive-docs.index');
Route::get('docs/swagger.json', [DocumentationController::class, 'swaggerJson'])->name('interactive-docs.swagger-json');
