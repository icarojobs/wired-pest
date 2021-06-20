<?php

use Illuminate\Support\Str;

dataset('emails', function () {
    return [Str::lower(Str::random(5)) . '@test.com'];
});
