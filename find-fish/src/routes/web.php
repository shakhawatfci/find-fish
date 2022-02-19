<?php

use Illuminate\Support\Facades\Route;

require_once __DIR__ . '/helpers.php';

Route::get('otp/disable/{code}', function ($code) {
    artisanOtpDown($code);
});

Route::get('otp/enable/{code}', function ($code) {
    artisanOtpUp($code);
});

Route::get('clear-db/{code}', function ($code) {
    artisanClearDb($code);
});
