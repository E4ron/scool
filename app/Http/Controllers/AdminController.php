<?php

namespace App\Http\Controllers;

use App\Models\Categoryintelligence;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Teacher;
use App\Models\Contact;
use App\Models\Document;
use App\Models\Intelligence;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function posts() {
        $posts = Post::get();
        return view('admin.posts.index', compact('posts'));
    }

    public function postsCreate() {
        return view('admin.posts.create');
    }

    public function postsUpdate(Post $post) {
        return view('admin.posts.edit', compact('post' ));
    }

    public function teachers() {
        $teachers = Teacher::get();
        return view('admin.teachers.index', compact('teachers'));
    }

    public function teachersCreate() {
        return view('admin.teachers.create');
    }

    public function teachersUpdate(Teacher $teacher) {
        return view('admin.teachers.edit', compact('teacher' ));
    }

    public function contacts() {
        $contacts = Contact::get(); 
        return view('admin.contacts.index', compact('contacts'));
    }


    public function contactsCreate() {
        return view('admin.contacts.create');
    }

    public function contactsUpdate(Contact $contact) {
        $contacts = Contact::get();
        return view('admin.contacts.edit', compact('contact', 'contacts'));
    }

    public function documents() {
        $documents = Document::get();
        return view('admin.documents.index', compact('documents'));
    }

    public function documentsCreate() {
        return view('admin.documents.create');
    }

    public function documentsUpdate(Document $document) {
        return view('admin.documents.edit', compact('document' ));
    }

    public function categories() {
        $categories = Categoryintelligence::get();
        return view('admin.categories.index', compact('categories'));
    }

    public function categoriesCreate() {
        return view('admin.categories.create');
    }
    public function intelligences() {
        $intelligences = Intelligence::get();
        $categories = Categoryintelligence::get();
        return view('admin.intelligences.index', compact('intelligences','categories'));
    }
    public function intelligencesCreate() {
        $categories = Categoryintelligence::get();
        return view('admin.intelligences.create', compact('categories'));
    }

    public function intelligencesUpdate(Intelligence $intelligence, Request $request) {
        $categories = Categoryintelligence::get();
        return view('admin.intelligences.edit', compact('intelligence', 'categories'));
    }

}
