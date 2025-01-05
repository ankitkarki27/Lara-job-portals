<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function applicant()
{
    return view('applicant.index'); // Make sure the view exists
}

public function company()
{
    return view('company.index'); // Make sure the view exists
}

}
