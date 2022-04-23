<?php

namespace App\Http\Controllers;

use App\Models\truck;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 


class postloadController extends Controller
{
    public function LoadDetails(Request $req)
    {
        return $req->input();
        $data=truck::create($req->all());
        $token=$data->createToken('token')->accessToken;
        return $token;
    }
}
