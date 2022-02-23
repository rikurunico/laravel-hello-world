<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products1()
    {
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    }
    public function products2()
    {
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }
    public function products3()
    {
        return redirect('https://www.educastudio.com/category/riri-story-books');
    }
    public function products4()
    {
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    }
}
