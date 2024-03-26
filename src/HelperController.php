<?php

namespace MyPackage;

use App\Http\Controllers\Controller;

class HelperController extends Controller
{
    public function getDay()
    {
        return currentDay();
    }
}
