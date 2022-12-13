<?php

use Illuminate\Support\Facades\Route;

use splittlogic\goodies\Http\Controllers\goodiesController;

/*
|--------------------------------------------------------------------------
| Routes must be passed through the web middleware to allow for
|   validation errors and flash messages to be displayed.
|--------------------------------------------------------------------------
*/

Route::get(
  'splittlogic/goodies',
  [goodiesController::class, 'index']
)->name('splittlogic.goodies');
