<?php
    
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    // Display a listing of articles with pagination.
    public function index(Request $request)
    {
        $query = Article::query();
    
        // Filter berdasarkan kategori
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }
    
        // Search berdasarkan judul
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }
    
        $articles = $query->latest()->paginate(10)->appends($request->query());
    
        // Ambil daftar kategori unik dari database
        $categories = Article::select('category')->distinct()->pluck('category');
    
        return view('admin.article.index', compact('articles', 'categories'));
    }    

    // Show the form for creating a new article.
    public function create()
    {
        return view('admin.article.create');
    }

    // Store a new article.
    public function store(Request $request)
    {
        $request->validate([
            'title'         => 'required|min:3',
            'content'       => 'required',
            'category'      => 'nullable|string',
            'date'          => 'required|date',
            'image'         => 'nullable|image|max:2048',
            'author_name'   => 'nullable|string',
            'author_photo'  => 'nullable|image|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('articles', 'public');
        }
        if ($request->hasFile('author_photo')) {
            $data['author_photo'] = $request->file('author_photo')->store('authors', 'public');
        }

        Article::create($data);
        return redirect()->route('admin.article.index')->with('success', 'Article created successfully.');
    }

    // Display the specified article.
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article.show', compact('article'));
    }

    // Show the form for editing the specified article.
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.article.edit', compact('article'));
    }

    // Update the specified article.
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $request->validate([
            'title'         => 'required|min:3',
            'content'       => 'required',
            'category'      => 'nullable|string',
            'date'          => 'required|date',
            'image'         => 'nullable|image|max:2048',
            'author_name'   => 'nullable|string',
            'author_photo'  => 'nullable|image|max:2048',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('articles', 'public');
        }
        if ($request->hasFile('author_photo')) {
            $data['author_photo'] = $request->file('author_photo')->store('authors', 'public');
        }

        $article->update($data);
        return redirect()->route('admin.article.index')->with('success', 'Article updated successfully.');
    }

    public function frontIndex(Request $request)
    {
        $query = Article::query();

        // Filter berdasarkan kategori
        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        // Pencarian berdasarkan judul
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        $articles = $query->latest()->paginate(10)->appends($request->query());

        // Ambil kategori unik dari database untuk filter dropdown
        $categories = Article::select('category')->distinct()->pluck('category');

        return view('news', compact('articles', 'categories'));
    }

    // Delete the specified article.
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('admin.article.index')->with('success', 'Article deleted successfully.');
    }
}
