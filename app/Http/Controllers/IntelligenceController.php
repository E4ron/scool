<?php

namespace App\Http\Controllers;

use App\Models\Intelligence;
use Illuminate\Http\Request;

class IntelligenceController extends Controller
{
    public function create(Request $request) {

        $intelligence = Intelligence::create([
           'name' => $request->name,
           'text' => $request->text,
           'categoryintelligences_id' => $request->categoryintelligences_id,
        ]);

        return redirect()->route('admin.intelligences.index');
    }

    public function edit(Request $request, Intelligence $intelligence) {
        $params = [
            'name' => $request->name,
            'text' => $request->text,
            'categoryintelligences_id' => $request->categoryintelligences_id
        ];
        $intelligence->update($params);

        return redirect()->route('admin.intelligences.index');
    }

    public function delete(Intelligence $intelligence) {
        $intelligence->delete();
        return redirect()->route('admin.intelligences.index');
    }
}
