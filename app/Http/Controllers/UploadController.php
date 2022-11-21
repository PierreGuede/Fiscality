<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('ifu_file')) {
            $file = $request->file('ifu_file');
            $filename = $file->getClientOriginalName();
            $folder = uniqid().'-'.now()->timestamp;
            $file->storeAs('upload/tmp/'.$folder, $filename);

            TemporaryFile::create([
                'folder' => $folder,
                'filename' => $filename,
            ]);

            return $folder;
        }

        if ($request->hasFile('rccm_file')) {
            $file = $request->file('rccm_file');
            $filename = $file->getClientOriginalName();
            $folder = uniqid().'-'.now()->timestamp;
            $file->storeAs('upload/tmp/'.$folder, $filename);

            TemporaryFile::create([
                'folder' => $folder,
                'filename' => $filename,
            ]);

            return $folder;
        }

        return '';
    }

    public function delete(Request $request)
    {
        if ($request->hasFile('ifu_file')) {
            $file = $request->file('ifu_file');
            $filename = $file->getClientOriginalName();

            TemporaryFile::where('filename', $filename)->delete();

            return '';
        }

        if ($request->hasFile('rccm_file')) {
            $file = $request->file('rccm_file');
            $filename = $file->getClientOriginalName();

            TemporaryFile::where('filename', $filename)->delete();

            return '';
        }

        return '';
    }
}
