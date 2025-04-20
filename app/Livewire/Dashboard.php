<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $user = Auth::user();

        // Cek role user dan tentuin view yang bakal ditampilin
        if ($user->role === 'admin') {
            return view('dashboard.admin'); // View untuk admin
        } elseif ($user->role === 'seller') {
            return view('dashboard.seller'); // View untuk seller
        } else {
            return view('home'); // View untuk user lainnya
        }
    }
}
