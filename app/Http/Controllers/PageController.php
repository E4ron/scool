<?php

namespace App\Http\Controllers;

use App\Models\Categoryintelligence;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Teacher;
use App\Models\Contact;
use App\Models\Document;
use App\Models\Intelligence;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index() {
        $teachers = Teacher::orderByDesc('id')->limit(5)->get();
        $contacts = Contact::get();
        return view('pages.index', compact('teachers', 'contacts'));
    }

    public function news() {
        $posts = Post::orderByDesc('id')->limit(5)->get();
        $contacts = Contact::get();
        return view('pages.news', compact('posts','contacts'));
    }

    public function login() {
        $contacts = Contact::get();
        return view('pages.login',compact('contacts'));
    }
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
    public function document(Request $request) {
        $documents = Document::get();
        $contacts = Contact::get();
        return view('pages.document', compact('documents','contacts'));
    }
    public function register() {
        $contacts = Contact::get();
        return view('pages.register', compact('contacts'));
    }
}
