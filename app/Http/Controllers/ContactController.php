<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function table()
    {
        $articles = Article::all();
        return view('index', compact('articles'));

    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        $articles = Article::where('full_name', 'LIKE', "%$query%")
            ->orWhere('email', 'LIKE', "%$query%")
            ->get();
        return view('index', compact('articles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'number' => 'nullable|string|max:15',
            'text' => 'required|string',
        ]);
        Article::create([
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'number' => $request->input('number'),
            'text' => $request->input('text'),
        ]);
        return redirect()->route('index', ['locale' => app()->getLocale()])->with('success', 'Article created successfully.');

    }

}
