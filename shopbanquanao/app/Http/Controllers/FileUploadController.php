<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ]);

        if ($request->file('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);

            return response()->json([
                'status' => 'success',
                'message' => 'File uploaded successfully!', 
                'file' => $fileName]);
        }

        return response()->json([
            'status'=> 'error',
            'message' => 'File upload failed!'
        ], 400);
    }
}
