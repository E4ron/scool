<?php

namespace App\Http\Controllers;

use App\Models\Categoryintelligence;
use Illuminate\Http\Request;

class CategoryIntelligenceController extends Controller
{
    public function create(Request $request) {
        $title = $request->get('title');
        Categoryintelligence::create(compact('title'));
        return redirect()->route('admin.categories.index');
    }

    public function delete(Categoryintelligence $category) {
        $category->delete();
        return redirect()->route('admin.categories.index');
    }
}
