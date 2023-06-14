<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileSizeRequest;
use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Contact;
use App\Models\Categorydocument;

class DocumentController extends Controller
{
    public function create( Request $request) {
        $path = $request->file('document')->store('public/file');
        $path = str_replace('public/file', 'storage/file', $path);

        $request->validate([
           // поддерживаемые MIME файла
           'document.*' => 'required|file|mimes:pdf, doc, docx, jpg, jpeg, png, ptt, txt, tif, xls, xlsx, zip',

           'document' => 'file|max:15360'
   
       ]);


        $document = Document::create([
           'name' => $request->name,
           'categorydocuments_id' => $request->categorydocuments_id,
           'document' => $path,
        ]);

        return redirect()->route('admin.documents.index');
    }

    public function delete(Document $document) {
        $document->delete();
        return redirect()->route('admin.documents.index');
    }
}
