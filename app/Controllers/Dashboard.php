<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login')->with('error', 'Anda belum login.');
        }
        return view('dashboard');
    }
}
