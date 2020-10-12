<?php

Route::get('/storageLink', function() {
    $exitCode = Artisan::call('storage:link');
    return 'DONE'; //Return anything
});

Auth::routes(['register' => false]);

Route::get('/crudIndex', 'HomeController@crudIndex');
Route::get('/crud2index', 'HomeController@crud2index');
Route::post('/jsonSave', 'HomeController@jsonSave');
Route::post('/crudMaker', 'HomeController@crudMaker');
//------------------------------------------------------------

Route::group(['middleware' => ['auth']], function () {
    // Route::get('/', 'HomeController@index');
    Route::get('/sidebar', 'HomeController@sidebar');
    Route::get('/sidebar/show', 'HomeController@sidebarShow');
    Route::get('/dashboard', 'HomeController@index');

    // Route::resource('admin/school', 'Admin\\SchoolController');
    Route::get('admin/settings', 'Admin\\RoleSettingsContoller@show');
    Route::post('admin/settings/{id}', 'Admin\\RoleSettingsContoller@update');

    Route::resource('admin/holiday', 'Admin\\HolidayController');
    Route::resource('admin/slider', 'Admin\\SliderController');
    Route::resource('admin/solution', 'Admin\\SolutionController');
    Route::resource('admin/service', 'Admin\\ServiceController');
    Route::resource('admin/objective', 'Admin\\ObjectiveController');
    Route::resource('admin/category', 'Admin\\CategoryController');
    Route::resource('admin/product', 'Admin\\ProjectController');
    Route::resource('admin/our_team', 'Admin\\OurTeamController');
    Route::resource('admin/message', 'Admin\\MessageController');
    Route::resource('admin/contact', 'Admin\\ContactController');
    Route::resource('admin/about', 'Admin\\AboutController');
    Route::resource('admin/client', 'Admin\\ClientController');
    Route::resource('admin/newsletter', 'Admin\\NewsletterController');
    Route::resource('admin/blog-category', 'Admin\\BlogCategoryController');
    Route::resource('admin/blog', 'Admin\\BlogController');
    // Route::get('admin/theme', 'HomeController@themes');

    //------------------------------------------------------ Student management System-------------------------------------------------




});

    Route::get('/', 'FrontEndController@home');
    Route::get('/service-details/{slug}', 'FrontEndController@serviceDetails');
    Route::get('/product-details/{slug}', 'FrontEndController@projectDetails');
    Route::get('/products', 'FrontEndController@projects');
    Route::get('/services', 'FrontEndController@services');
    Route::get('/team', 'FrontEndController@team');
    Route::get('/clients', 'FrontEndController@clients');
    Route::get('/about', 'FrontEndController@about');
    Route::get('/blog', 'FrontEndController@blog');
    Route::get('/blog/{slug}', 'FrontEndController@slugBlog');
    Route::get('/blog_single/{slug}', 'FrontEndController@blog_single');
    Route::get('/contacts', 'FrontEndController@contacts');
    Route::post('/message', 'FrontEndController@addMessage');
    Route::post('/newsletter', 'FrontEndController@addEmail');

    Route::get('/solutions', 'FrontEndController@solutions');
    Route::get('/solution-details/{slug}', 'FrontEndController@solutionDetails');

 
Route::resource('admin/gallery', 'Admin\\GalleryController'); 
Route::view('/gallery', 'frontEnd.gallery');
Route::view('/partner', 'frontEnd.partner');
Route::view('/testimonials', 'frontEnd.testimonials');
Route::view('/pricing', 'frontEnd.pricing');
Route::view('/portfolios', 'frontEnd.portfolio');
Route::resource('admin/partner', 'Admin\\PartnerController');
Route::resource('admin/testimonials', 'Admin\\TestimonialsController')->only([ 'edit', 'update',]);
Route::resource('admin/portfolio', 'Admin\\PortfolioController');
Route::resource('admin/pricing-list', 'Admin\\PricingListController');