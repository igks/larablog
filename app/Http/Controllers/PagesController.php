<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Welcome to Laravel Blog Exercise";
        // single data with compact
        return view('pages.index', compact('title'));
    }

    public function about()
    {
        $title = "About LaraBlog";
        // single data using with
        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $data = [
            'title' => "Our Services",
            'services' => ['Web Design', 'Web Programming', 'SEO', 'Digital Marketing']
        ];

        // multiple data using array
        return view('pages.services')->with($data);
    }
}