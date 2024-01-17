<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ExcelUpload extends Controller
{
    public function upload(Request $request)
    {
        //code
    }


    public function uploadPage() : View
    {
        return view('page.uploadexcel');
    }
    public function uploadTraitement() : View
    {
        return view('page.traitement', [

        ]);
    }
}