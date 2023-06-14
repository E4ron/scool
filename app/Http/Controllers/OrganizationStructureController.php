<?php

namespace App\Http\Controllers;

use App\Models\OrganizationStructure;
use Illuminate\Http\Request;

class OrganizationStructureController extends Controller
{
    public function create(Request $request) {
        $path = $request->file('image')->store('public');
        $path = str_replace('public', '/storage', $path);

        $organizationstructure = OrganizationStructure::create([
            'image' => $path,
            'title' => $request->title,
            'branch_manager' => $request->branch_manager,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'website' => $request->website,
        ]);

        return redirect()->route('admin.organizationstructures.index');
    }

    public function edit(Request $request, OrganizationStructure $organizationstructure) {
        $params = [
            'title' => $request->title,
            'branch_manager' => $request->branch_manager,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'website' => $request->website,
        ];

        if ($request->image) {
            $path = $request->file('image')->store('public');
            $params['image'] = str_replace('public', '/storage', $path);
        }

        $organizationstructure->update($params);

        return redirect()->route('admin.organizationstructures.index');
    }

    public function delete(OrganizationStructure $organizationstructure) {
        $organizationstructure->delete();
        return redirect()->route('admin.organizationstructures.index');
    }
}
