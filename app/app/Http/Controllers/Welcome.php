<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Welcome extends Controller
{
    public function get () {
        echo "test";
    }
}
