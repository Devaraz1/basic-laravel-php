<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    function index()
    {
        return view('backend-web.index', ['data' => Blog::get()]);
    }

    function add()
    {
        return view('backend-web.add');
    }

    function edit($id)
    {
        $data = Blog::where('id', $id)->first();

        return view('backend-web.edit', ['data' => $data]);
    }

    function create(Request $req)
    {
        $req->validate([
            'judul'         => 'required',
            'deskripsi'     => 'required',
            'file'          => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $file = $req->file('file');
        $gallery_file = "gallery_" . $file->getClientOriginalName();
        $file->move('image_gallery', $gallery_file);

        Blog::create([
            'judul'         => $req->judul,
            'deskripsi'     => $req->deskripsi,
            'gambar'        => $gallery_file,
        ]);

        return redirect('blog');
    }

    function update(Request $req)
    {
        $req->validate([
            'judul'         => 'required',
            'deskripsi'     => 'required',
        ]);

        $file = $req->file('file');
        $gallery_file = "gallery_" . $file->getClientOriginalName();
        $file->move('image_gallery', $gallery_file);


        Blog::where('id', $req->id)->update([
            'judul'        => $req->judul,
            'deskripsi'    => $req->deskripsi,
            'gambar'       => $gallery_file,
        ]);

        return redirect('blog');
    }

    function delete($id)
    {
        Blog::where('id', $id)->delete();

        return redirect('blog');
    }
}