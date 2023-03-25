<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Document;

class DocumentController extends Controller
{
    public function create(Request $request) {
        $path = $request->file('document')->store('public');
        $path = str_replace('public', '/storage', $path);

        $document = Document::create([
           'name' => $request->name,
           'document' => $path,
        ]);

        return redirect()->route('admin.documents.index');
    }
}
