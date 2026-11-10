<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function dataMenu(): array {
        $menu = [
            ['nama' => 'Original', 'kategori' => 'Teh', 'harga' => 4500, 'stok' => 100],
            ['nama' => 'Jasmine', 'kategori' => 'Teh', 'harga' => 4500, 'stok' => 100],
            ['nama' => 'Green Ijo', 'kategori' => 'Teh', 'harga' => 7000, 'stok' => 90],
            ['nama' => 'Black Hitam', 'kategori' => 'Teh', 'harga' => 15000, 'stok' => 88],
            ['nama' => 'Thai Teaaa gemoyyy', 'kategori' => 'Teh', 'harga' => 8500, 'stok' => 90],
            ['nama' => 'Tapi LEMONNN', 'kategori' => 'Teh Buah', 'harga' => 8000, 'stok' => 88],
            ['nama' => 'Lychee', 'kategori' => 'Teh Buah', 'harga' => 14000, 'stok' => 78],
            ['nama' => 'Mangga Depan Rumah', 'kategori' => 'Teh Buah', 'harga' => 8000, 'stok' => 78],
            ['nama' => 'Matchadepanmu', 'kategori' => 'Teh Buah', 'harga' => 8000, 'stok' => 67],
        ];

    return array_map(
            fn ($item) => $item + ['status' => $item['stok'] <= 10 ? 'Menipis' : 'Aman'],
            $menu
        );
    }
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|min:3|max:20',
            'password' => 'required|string|min:4',
        ]);

        return to_route('dashboard', ['username' => $data['username']]);
    }


    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        $menu = $this->dataMenu();

        $stats = [
            ['label' => 'Total Menu', 'nilai' => count($menu)],
            ['label' => 'Total Stok', 'nilai' => array_sum(array_column($menu, 'stok'))],
            ['label' => 'Stok Menipis', 'nilai' => count(array_filter($menu, fn ($m) => $m['status'] === 'Menipis'))],
        ];

        return view('dashboard', compact('username', 'stats'));
    }


    public function pengelolaan(Request $request)
    {
        $username = $request->query('username');
        $menu = $this->dataMenu();

        return view('pengelolaan', compact('username', 'menu'));
    }


    public function profile(Request $request)
    {
        $username = $request->query('username');

        $profil = [
            'Username' => $username,
            'Role' => 'Karyawan',
            'Shift' => 'Pagi (07.00 - 13.00)',
            'Outlet' => 'TehYung Outlet Pusat',
        ];

        return view('profile', compact('username', 'profil'));
    }
}
