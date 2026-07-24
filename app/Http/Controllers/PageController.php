<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function howItWorks(): View
    {
        return view('pages.how-it-works');
    }

    public function tutorial(): View
    {
        return view('pages.tutorial');
    }

    public function forPersonalTrainers(): View
    {
        return view('pages.for-personal-trainers');
    }

    public function pricing(): View
    {
        return view('pages.pricing');
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function support(): View
    {
        return view('pages.support');
    }

    public function privacy(): View
    {
        return view('pages.privacy');
    }

    public function terms(): View
    {
        return view('pages.terms');
    }

    public function notFound(): Response
    {
        return response()->view('errors.404', status: 404);
    }
}
