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
use App\Models\CategoryDocument;

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
        $teachers = Teacher::simplePaginate(8);
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

    public function categoriesDocument(Document $document) {
        $documents = Document::get();
        $categorydocuments = CategoryDocument::get();
        return view('admin.documents.categories.index', compact('categorydocuments','documents','document',));
    }

    public function categoriesDocumentCreate() {
        return view('admin.documents.categories.create');
    }

    public function documents() {
        $documents = Document::simplePaginate(28);
        $categorydocuments = CategoryDocument::get();
        return view('admin.documents.index', compact('documents', 'categorydocuments'));
    }

    public function documentsCreate() {
        $categorydocuments = CategoryDocument::get();
        return view('admin.documents.create', compact('categorydocuments'));
    }

    

    public function categories(Intelligence $intelligence) {
        $intelligences = Intelligence::get();
        $categories = Categoryintelligence::get();
        return view('admin.categories.index', compact('categories','intelligences','intelligence',));
    }

    public function categoriesCreate() {
        return view('admin.categories.create');
    }

    

    public function intelligences(Intelligence $intelligence) {
        $intelligences = Intelligence::get();
        $categories = Categoryintelligence::get();
        return view('admin.intelligences.index', compact('intelligences','categories','intelligence',));
    }
    public function intelligencesCreate(Intelligence $intelligence) {
        $categories = Categoryintelligence::get();
        return view('admin.intelligences.create', compact('categories','intelligence',));
    }

    public function intelligencesUpdate(Intelligence $intelligence, Request $request) {
        $categories = Categoryintelligence::get();
        $intelligences = Intelligence::get();
        return view('admin.intelligences.edit', compact('intelligences','intelligence', 'categories'));
    }
    public function organizationstructures() {
        $organizationstructures = OrganizationStructure::get();
        return view('admin.organizationstructures.index', compact('organizationstructures'));
    }

    public function organizationstructuresCreate() {
        return view('admin.organizationstructures.create');
    }

    public function organizationstructuresUpdate(OrganizationStructure $organizationstructure) {
        return view('admin.organizationstructures.edit', compact('organizationstructure' ));
    }
}
