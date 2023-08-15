<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $submissions = Submission::latest()->get();

        // return view('home')->with('username', 'Isha');
        return view('home', ['records' => $submissions]);
    }
}
