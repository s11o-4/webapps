<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\File;

class FilesController extends Controller
{
    public function index()
    {
        $files = File::all();
        return response() -> json($files);
    }

    public function show($id)
    {
        $file = File::find($id);
        if (!empty($file)) {
            return response() -> json($file);
        }
        else
        {
            return response() -> json(['message' => 'File not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $file = new File();
        $file->file_name = $request->file_name;
        $file->description = $request->description;
        $file->file = $request->file;
        $file->save();

        return response() -> json($file, 201);
    }
}
