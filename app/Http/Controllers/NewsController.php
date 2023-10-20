<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    // Menampilkan daftar berita
    public function index()
    {
        $news = News::latest()->paginate(10); // Mengambil 10 berita terbaru
        return view('news.index', compact('news'));
    }

    // Menampilkan form tambah berita
    public function create()
    {
        return view('news.create');
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        News::create($request->all());

        return redirect('/news')->with('success', 'Berita baru telah ditambahkan.');
    }

    // Menampilkan detail berita
    public function show($id)
    {
        $news = News::find($id);
        return view('news.show', compact('news'));
    }

    // Menampilkan form edit berita
    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit', compact('news'));
    }

    // Mengupdate berita
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $news = News::find($id);
        $news->update($request->all());

        return redirect('/news')->with('success', 'Berita telah diupdate.');
    }

    // Menghapus berita
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();

        return redirect('/news')->with('success', 'Berita telah dihapus.');
    }

    public function dashboard()
    {
        $news = News::latest()->paginate(10); // Mengambil 10 berita terbaru
        return view('news.dashboard', compact('news'));
    }

}
