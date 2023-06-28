<?php

use Ghusr\Inspire\Controllers;
use Illuminate\Support\Facades\Route;

/* 
Si comento esto, sale error 404, si le cambio el nombre al archivo 
InspirationController.php a, por ejemplo zazInspirationController.php
va a decir que no se encuentra el controlador y que si me refiero a 
zazInspirationController, es decir que sí reconoce la carpeta
*/
//Route::get('inspire', InspirationController::class);
Route::get('inspire', Ghusr\Inspire\Controllers\InspirationController::class);
//Route::get('inspire', [Ghusr\Inspire\Controllers\InspirationController::class, '__invoke'])->name('portfolio');;