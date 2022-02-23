<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return ('Selamat Datang');
    }

    public function about()
    {
        return ('2041720124 Wazir Qorni Abud');
    }

    public function article($id)
    {
        return ('Halaman Artikel dengan ID ' .$id );
    }
}
