<?php

namespace Sivil\Http\Controllers;

use Illuminate\Http\Request;
use Sivil\Models\Certificate;

class CertificateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Type $var = null)
    {
        # code...
    }
}
