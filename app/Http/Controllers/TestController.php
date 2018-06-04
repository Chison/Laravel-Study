<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestController extends Controller
{
    //
    public function uuid(){
        return (string) Str::uuid();
    }

    public function orderid(){
        return (string) Str::orderedUuid();
    }
}
