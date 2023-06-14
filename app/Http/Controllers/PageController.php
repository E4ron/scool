<?php

namespace App\Http\Controllers;

use App\Models\Categoryintelligence;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Teacher;
use App\Models\Contact;
use App\Models\Document;
use App\Models\Intelligence;
use App\Models\OrganizationStructure;
use App\Models\Categorydocument;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index() {
        $contacts = Contact::get();
        return view('pages.index', compact('contacts'));
    }

    public function news() {
        $posts = Post::orderByDesc('id')->get();
        $contacts = Contact::get();
        return view('pages.news', compact('posts','contacts'));
    }
    public function newsShow(Post $post) {
        $contacts = Contact::get();
        return view('pages.newsShow', compact('post','contacts'));
    }

    public function login() {
        $contacts = Contact::get();
        return view('pages.login',compact('contacts'));
    }
    // public function register() {
    //     $contacts = Contact::get();
    //     return view('pages.register',compact('contacts'));
    // }
    // public function location() {
    //     return view('pages.location');
    // }
    public function intelligences(Request $request) {
        $contacts = Contact::get();
        $intelligences = Intelligence::get();
        $categories = Categoryintelligence::get();
        return view('pages.intelligences', compact('contacts','intelligences','categories'));
    }

    public function teacher(Request $request) {
        $contacts = Contact::get();
        $teachers = Teacher::get();
        return view('pages.teacher', compact('contacts', 'teachers'));
    }

    public function contact(Request $request) {
        $contacts = Contact::get();
        return view('pages.contact', compact('contacts'));
    }
    public function document(Request $request, Document $document) {
        $contacts = Contact::get();
        $categorydocumentId = $request->get('categorydocuments_id', null);
        $categorydocuments = Categorydocument::get();
        $documents = Document::get();
        if ($categorydocumentId) {
            $documents = $documents->where('categorydocuments_id', $categorydocumentId);
        }
        return view('pages.document', compact('documents','contacts', 'categorydocuments', 'categorydocumentId', 'document'));
    }
    
    public function search(Request $request, Document $document)
    {
        $contacts = Contact::get();
        $s = $request->s;
        $request->validate([
                's' => 'required',
        ]);
        $categorydocuments = Categorydocument::get();
        $documents = Document::where('name', 'LIKE', "%{$s}%")->get();
        return view('pages.document', compact('documents','document', 's','contacts', 'categorydocuments'));
    }
    public function activity() {
        $contacts = Contact::get();
        return view('pages.activity', compact('contacts'));
    }
    public function availableenvironment() {
        $contacts = Contact::get();
        return view('pages.availableenvironment', compact('contacts'));
    }    public function education() {
        $contacts = Contact::get();
        return view('pages.education', compact('contacts'));
    }    public function internationalcooperation() {
        $contacts = Contact::get();
        return view('pages.internationalcooperation', compact('contacts'));
    }    public function organizationstructure() {
        $contacts = Contact::get();
        $organizationstructures = OrganizationStructure::get();
        return view('pages.organizationstructure', compact('contacts','organizationstructures'));
    }    public function paideducationalservices() {
        $contacts = Contact::get();
        return view('pages.paideducationalservices', compact('contacts'));
    }    public function providingeducational() {
        $contacts = Contact::get();
        return view('pages.providingeducational', compact('contacts'));
    }    public function vacant() {
        $contacts = Contact::get();
        return view('pages.vacant', compact('contacts'));
    }
}
