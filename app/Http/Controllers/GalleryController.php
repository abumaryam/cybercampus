<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function formUpload()
    {
        return view('gallery.form_upload');
    }

    public function prosesUpload(Request $request)
    {
        $target_directory = 'gambar';
        $request->validate([
            'fileUpload' => 'mimes:png,jpg|max:1024',
        ]);
        $file = $request->file('fileUpload');
        $filename = time() . '-' . $file->getClientOriginalName();
        $request->fileUpload->move(public_path('gambar'), $filename);

        $gallery = new Gallery();
        $gallery->nama_file = $filename;
        $gallery->keterangan = $request->keterangan;
        $gallery->save();
        return redirect()->route('gallery.viewGallery', ['id' => $gallery->id]);
    }

    public function viewGallery($id)
    {
        $gallery = Gallery::find($id);
        return view('gallery.viewGallery', compact('gallery'));
    }
}
