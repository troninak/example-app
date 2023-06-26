<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function getlog()
    {
        $login = Login::all();
        if ($login->count() > 0) {
            return response()->json([
                'status' => 201,
                'gramote' => $login
            ], 201);
        } else {
            return response()->json([
                'status' => 404,
                'messege' => 'Not found certificate'
            ], 404);
        }
    }
}
