<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Метод для главной страницы
    public function index()
    {
        return view('welcome');  // Используем стандартное представление 'welcome' для главной страницы
    }

    // Метод для страницы "О нас"
    public function about()
    {
        return view('about');  // Для страницы "О нас"
    }
}