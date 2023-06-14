<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorydocument;

class CategoryDocumentController extends Controller
{
    public function create(Request $request) {
        $name = $request->get('name');
        Categorydocument::create(compact('name'));
        return redirect()->route('admin.documents.categories.index');
    }

    public function delete(Categorydocument $categorydocument) {
        $categorydocument->delete();
        return redirect()->route('admin.documents.categories.index');
    }
}
