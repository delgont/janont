<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Web\WebPost;

class HomeController extends Controller
{
    private $webPost;

    public function __construct(WebPost $webPost)
    {
        $this->webPost = $webPost;
    }

    public function index()
    {
        return view('index');
    }
        
}
