<?php

use Illuminate\Support\Str;

function generatePassword()
{

    //dd($code);
    do {
        $randomCode = Str::password(10);
        $checkCode = \App\Models\Admin::query()->where('password', $randomCode)->first();
    } while ($checkCode);

    return $randomCode;
}
