<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryIntelligenceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\IntelligenceController;
use App\Http\Controllers\OrganizationStructureController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\CategoryDocumentController;

// Главная
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/newsShow', [PageController::class, 'newsShow'])->name('newsShow');
Route::get('/newsShow/{post}', [PageController::class, 'newsShow'])->name('newsShow');
Route::get('/location', [PageController::class, 'location'])->name('location');
Route::get('/intelligences', [PageController::class, 'intelligences'])->name('intelligences');
Route::get('/teacher', [PageController::class, 'teacher'])->name('teacher');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/vacant', [PageController::class, 'vacant'])->name('vacant');
Route::get('/providingeducational', [PageController::class, 'providingeducational'])->name('providingeducational');
Route::get('/paideducationalservices', [PageController::class, 'paideducationalservices'])->name('paideducationalservices');
Route::get('/organizationstructure', [PageController::class, 'organizationstructure'])->name('organizationstructure');
Route::get('/internationalcooperation', [PageController::class, 'internationalcooperation'])->name('internationalcooperation');
Route::get('/education', [PageController::class, 'education'])->name('education');
Route::get('/availableenvironment', [PageController::class, 'availableenvironment'])->name('availableenvironment');
Route::get('/activity', [PageController::class, 'activity'])->name('activity');
Route::get('/document', [PageController::class, 'document'])->name('document');
Route::get('/search', [PageController::class, 'search'])->name('search');

// Роуты отправки писем
Route::get('/send',[ContactController::class , 'send'])->name('send');
Route::post('/send',[ContactController::class , 'send'])->name('send');

 

// Вход
Route::prefix('login')->group(function() {
    Route::get('/', [PageController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'login']);
});
// // Регистрация
// Route::prefix('register')->group(function() {
//     Route::get('/', [PageController::class, 'register'])->name('register');
//     Route::post('/', [AuthController::class, 'register']);
// });


// Руты авторизованного
Route::middleware('auth')->group(function() {
   Route::get('logout', [AuthController::class, 'logout'])->name('logout');

   // Руты админа
   Route::middleware('access:admin')->group(function() {
       Route::prefix('admin')->group(function() {
            Route::get('/', [AdminController::class, 'index'])->name('admin');

            Route::prefix('posts')->group(function() {
                Route::get('/', [AdminController::class, 'posts'])->name('admin.posts.index');

                Route::get('/create', [AdminController::class, 'postsCreate'])->name('admin.posts.createPage');
                Route::post('/create', [PostsController::class, 'create'])->name('admin.posts.create');

                Route::get('/edit/{post}', [AdminController::class, 'postsUpdate'])->name('admin.posts.updatePage');
                Route::post('/edit/{post}', [PostsController::class, 'edit'])->name('admin.posts.edit');

                Route::get('/delete/{post}', [PostsController::class, 'delete'])->name('admin.posts.delete');
            });

            // Руты преподователей
            Route::prefix('teachers')->group(function() {
                Route::get('/', [AdminController::class, 'teachers'])->name('admin.teachers.index');

                Route::get('/create', [AdminController::class, 'teachersCreate'])->name('admin.teachers.createPage');
                Route::post('/create', [TeachersController::class, 'create'])->name('admin.teachers.create');

                Route::get('/edit/{teacher}', [AdminController::class, 'teachersUpdate'])->name('admin.teachers.updatePage');
                Route::post('/edit/{teacher}', [TeachersController::class, 'edit'])->name('admin.teachers.edit');

                Route::get('/delete/{teacher}', [TeachersController::class, 'delete'])->name('admin.teachers.delete');
            });
            // Руты контактов
            Route::prefix('contacts')->group(function() {
                Route::get('/', [AdminController::class, 'contacts'])->name('admin.contacts.index');

                Route::get('/create', [AdminController::class, 'contactsCreate'])->name('admin.contacts.createPage');
                Route::post('/create', [ContactController::class, 'create'])->name('admin.contacts.create');

                Route::get('/edit/{contact}', [AdminController::class, 'contactsUpdate'])->name('admin.contacts.updatePage');
                Route::post('/edit/{contact}', [ContactController::class, 'edit'])->name('admin.contacts.edit');

                Route::get('/delete/{contact}', [ContactController::class, 'delete'])->name('admin.contacts.delete');
            });

            // Руты документов
            Route::prefix('documents')->group(function() {
                Route::get('/', [AdminController::class, 'documents'])->name('admin.documents.index');

                Route::get('/create', [AdminController::class, 'documentsCreate'])->name('admin.documents.createPage');
                Route::post('/create', [DocumentController::class, 'create'])->name('admin.documents.create');

                Route::get('/delete/{document}', [DocumentController::class, 'delete'])->name('admin.documents.delete');

                Route::prefix('categoriesDocument')->group(function() {
                    Route::get('/', [AdminController::class, 'categoriesDocument'])->name('admin.documents.categories.index');
    
                    Route::get('/create', [AdminController::class, 'categoriesDocumentCreate'])->name('admin.documents.categories.createPage');
                    Route::post('/create', [CategoryDocumentController::class, 'create'])->name('admin.documents.categories.create');
    
                    Route::get('/delete/{categorydocument}', [CategoryDocumentController::class, 'delete'])->name('admin.documents.categories.delete');
                });
            });
            // Руты Структура и органы управления образовательной организацией
            Route::prefix('organizationstructures')->group(function() {
                Route::get('/', [AdminController::class, 'organizationstructures'])->name('admin.organizationstructures.index');

                Route::get('/create', [AdminController::class, 'organizationstructuresCreate'])->name('admin.organizationstructures.createPage');
                Route::post('/create', [OrganizationStructureController::class, 'create'])->name('admin.organizationstructures.create');

                
                Route::get('/edit/{organizationstructure}', [AdminController::class, 'organizationstructuresUpdate'])->name('admin.organizationstructures.updatePage');
                Route::post('/edit/{organizationstructure}', [OrganizationStructureController::class, 'edit'])->name('admin.organizationstructures.edit');


                Route::get('/delete/{organizationstructures}', [OrganizationStructureController::class, 'delete'])->name('admin.organizationstructures.delete');
            });

            // Руты категорий основных сведений
            Route::prefix('categories')->group(function() {
                Route::get('/', [AdminController::class, 'categories'])->name('admin.categories.index');

                Route::get('/create', [AdminController::class, 'categoriesCreate'])->name('admin.categories.createPage');
                Route::post('/create', [CategoryIntelligenceController::class, 'create'])->name('admin.categories.create');

                Route::get('/delete/{category}', [CategoryIntelligenceController::class, 'delete'])->name('admin.categories.delete');
            });

            Route::prefix('intelligences')->group(function() {
                Route::get('/', [AdminController::class, 'intelligences'])->name('admin.intelligences.index');

                Route::get('/create', [AdminController::class, 'intelligencesCreate'])->name('admin.intelligences.createPage');
                Route::post('/create', [IntelligenceController::class, 'create'])->name('admin.intelligences.create');

                Route::get('/edit/{intelligence}', [AdminController::class, 'intelligencesUpdate'])->name('admin.intelligences.updatePage');
                Route::post('/edit/{intelligence}', [IntelligenceController::class, 'edit'])->name('admin.intelligences.edit');

                Route::get('/delete/{intelligence}', [IntelligenceController::class, 'delete'])->name('admin.intelligences.delete');
            });

       });
   });
});
