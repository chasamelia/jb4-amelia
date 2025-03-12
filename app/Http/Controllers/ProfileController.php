<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Amelia Chasanah',
            'email' => 'ameliachasanah320@gmail.com',
            'bio' => 'if life is a movie, and im the best part',
            'profile_picture' => 'giselleaespa.jpg',
            'skills' => ['Manajemen Waktu', 'Kreativitas', 'Kerjasama tim/kelompok']
        ];
        return view('profile', compact('profile'));
    }
}
