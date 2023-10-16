<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ModelsController;
use App\Http\Controllers\mainController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


////////////////////Admin Routes/////////////////////////

Route::post('insert-new-user',[App\Http\Controllers\ModelsController::class, 'insertnewuser']);
Route::get('/amodels',[App\Http\Controllers\ModelsController::class, 'ViewAllaModels'])->name('amodels');
Route::post('amodels/action', 'ModelsController@action')->name('amodels.action');
Route::get('edit-model/{id}',[App\Http\Controllers\ModelsController::class, 'showeditdata'])->name('edit-model');
Route::post('query',[App\Http\Controllers\PersonalModal::class, 'addquery']);
/***model admin panel**/
Route::POST('update-model/{id}', [App\Http\Controllers\ModelsController::class, 'update']);
Route::get('delete-model/{id}',[App\Http\Controllers\ModelsController::class, 'delete']);
Route::post('/get-cities-by-state',[App\Http\Controllers\CountryStateCityController::class, 'getCity']);
Route::post('/get-state-by-country',[App\Http\Controllers\CountryStateCityController::class, 'getstate']);

Route::get('/insert',[App\Http\Controllers\ModelsController::class, 'ViewInsertData'])->name('insert');
Route::post('insert-data',[App\Http\Controllers\ModelsController::class, 'insert']);
/***model admin panel**/
////////////////////Admin Routes/////////////////////////

///////////////Home-Routes////////////////
Route::get('/',[App\Http\Controllers\ModelsController::class, 'ViewModels']);

Route::get('/main',[App\Http\Controllers\ModelsController::class, 'ViewModels']);
Route::get('/AR',[App\Http\Controllers\ModelsController::class, 'ViewModelsAR']);
Route::get('/home', [App\Http\Controllers\ModelsController::class, 'index'])->name('home');
///////////////Home-Routes////////////////
///
///////////////Model-Register////////////////
Route::get('/model-register',[App\Http\Controllers\ModelsController::class, 'Regdata'])->name('auth/model-register');
Route::get('/model-registerAR',[App\Http\Controllers\ModelsController::class, 'RegdataAR'])->name('auth/model-registerAR');

//////////////////////Sidebar Routes///////////////////////////
Route::get('sidebar-setting',[App\Http\Controllers\SidebarController::class, 'Viewsidebardata'])->name('sidebar-setting');
//////////////////////Sidebar Routes///////////////////////////
///
///////////////Talents-Routes////////////////
Route::get('search',[App\Http\Controllers\ModelsController::class, 'search']);
Route::get('searchAR',[App\Http\Controllers\ModelsController::class, 'searchAR']);
Route::get('/talent-country',[App\Http\Controllers\ModelsController::class, 'talent_country'])->name('talent-country');
Route::get('/talent-countryAR',[App\Http\Controllers\ModelsController::class, 'talent_countryAR'])->name('talent-countryAR');
Route::get('/talents/{id}',[App\Http\Controllers\ModelsController::class, 'ViewAllModels'])->name('talents');
Route::get('/talentsAR/{id}',[App\Http\Controllers\ModelsController::class, 'ViewAllModelsAR'])->name('talentsAR');
Route::get('personal-talent-page/{id}',[App\Http\Controllers\PersonalModal::class, 'showPdata'])->name('personal-talent-page');
Route::get('personal-talent-pageAR/{id}',[App\Http\Controllers\PersonalModal::class, 'showPdataAR'])->name('personal-talent-pageAR');

/**Model Sms sent**/
Route::post('/send-code',[App\Http\Controllers\ModelsController::class, 'SMSSent']);
Route::post('/send-codes',[App\Http\Controllers\ServicesController::class, 'SMSSent']);
Route::post('/send-codel',[App\Http\Controllers\LocationsController::class, 'SMSSent']);
///////////////Model-Routes////////////////
///
/////////////////////////Services Routes///////////////////////////
Route::get('/services-country',[App\Http\Controllers\ServicesController::class, 'services_country'])->name('services-country');
Route::get('/services-countryAR',[App\Http\Controllers\ServicesController::class, 'services_countryAR'])->name('services-countryAR');
Route::get('/services/{id}',[App\Http\Controllers\ServicesController::class, 'data'])->name('services');
Route::get('/servicesAR/{id}',[App\Http\Controllers\ServicesController::class, 'dataAR'])->name('servicesAR');
Route::post('/get-speciali-by-service',[App\Http\Controllers\ServicesController::class, 'getspeciali']);
Route::post('/get-job-by-speciali',[App\Http\Controllers\ServicesController::class, 'getjob']);
Route::get('search-service',[App\Http\Controllers\ServicesController::class, 'search']);
Route::get('search-serviceAR',[App\Http\Controllers\ServicesController::class, 'searchAR']);
///////////////Services-Register////////////////
Route::get('/service-register',[App\Http\Controllers\ServicesController::class, 'Regdata'])->name('auth/service-register');
Route::get('/service-registerAR',[App\Http\Controllers\ServicesController::class, 'RegdataAR'])->name('auth/service-registerAR');
Route::post('insert-new-service',[App\Http\Controllers\ServicesController::class, 'insertnewservice']);
Route::get('personal-service-page/{id}',[App\Http\Controllers\ServicesController::class, 'showservicedata'])->name('personal-service-page');
Route::get('personal-service-pageAR/{id}',[App\Http\Controllers\ServicesController::class, 'showservicedataAR'])->name('personal-service-pageAR');

Route::post('query',[App\Http\Controllers\ServicesController::class, 'addquery']);
/// /// //////////////////////Services Routes///////////////////////////

/////////////////////////Locations Routes///////////////////////////
Route::get('/locations-country',[App\Http\Controllers\LocationsController::class, 'locations_country'])->name('locations-country');
Route::get('/locations-countryAR',[App\Http\Controllers\LocationsController::class, 'locations_countryAR'])->name('locations-countryAR');
Route::get('/locations/{id}',[App\Http\Controllers\LocationsController::class, 'data'])->name('locations');
Route::get('/locationsAR/{id}',[App\Http\Controllers\LocationsController::class, 'dataAR'])->name('locationsAR');
Route::get('search-locations',[App\Http\Controllers\LocationsController::class, 'search']);
Route::get('search-locationsAR',[App\Http\Controllers\LocationsController::class, 'searchAR']);
///////////////Locations-Register////////////////
Route::get('/locations-register',[App\Http\Controllers\LocationsController::class, 'Regdata'])->name('auth/locations-register');
Route::get('/locations-registerAR',[App\Http\Controllers\LocationsController::class, 'RegdataAR'])->name('auth/locations-registerAR');
Route::post('insert-new-location',[App\Http\Controllers\LocationsController::class, 'insertnewlocation']);
Route::get('personal-location-page/{id}',[App\Http\Controllers\LocationsController::class, 'showlocationdata'])->name('personal-location-page');
Route::get('personal-location-pageAR/{id}',[App\Http\Controllers\LocationsController::class, 'showlocationdataAR'])->name('personal-location-pageAR');
Route::post('query',[App\Http\Controllers\LocationsController::class, 'addquery']);
/// /// //////////////////////Locations Routes///////////////////////////


////////////////////////////Dashboard Routes///////////////////////////
/**Sidebar**/
Route::get('delete-sidebar-group/{id}',[App\Http\Controllers\DashboardController::class, 'delete_sidebar_group']);
Route::post('insert-side-group',[App\Http\Controllers\DashboardController::class, 'insert_sidebar_group']);
Route::get('update-side-group',[App\Http\Controllers\DashboardController::class, 'update_sidebar_group']);

Route::get('delete-sidebar-item/{id}',[App\Http\Controllers\DashboardController::class, 'delete_sidebar_item']);
Route::post('insert-side-item',[App\Http\Controllers\DashboardController::class, 'insert_sidebar_item']);
Route::get('update-side-item',[App\Http\Controllers\DashboardController::class, 'update_sidebar_item']);

Route::get('delete-sidebar-sub/{id}',[App\Http\Controllers\DashboardController::class, 'delete_sidebar_sub']);
Route::post('insert-side-sub',[App\Http\Controllers\DashboardController::class, 'insert_sidebar_sub']);
Route::get('update-side-sub',[App\Http\Controllers\DashboardController::class, 'update_sidebar_sub']);
/**Sidebar**/

/**Services**/
Route::get('/aservices',[App\Http\Controllers\DashboardController::class, 'Viewallservices'])->name('aservices');
Route::get('edit-service/{id}',[App\Http\Controllers\DashboardController::class, 'show_edit_service'])->name('edit-service');
Route::POST('update-service/{id}', [App\Http\Controllers\DashboardController::class, 'update_service']);
Route::get('delete-service/{id}',[App\Http\Controllers\DashboardController::class, 'delete_service']);
Route::get('/insert-service',[App\Http\Controllers\DashboardController::class, 'View_service_InsertData'])->name('insert-service');
Route::post('insert-service-data',[App\Http\Controllers\DashboardController::class, 'insert_service']);
/**Services**/

/**Locations**/
Route::get('/alocations',[App\Http\Controllers\DashboardController::class, 'Viewalllocations'])->name('alocations');
Route::get('edit-location/{id}',[App\Http\Controllers\DashboardController::class, 'show_edit_location'])->name('edit-location');
Route::POST('update-location/{id}', [App\Http\Controllers\DashboardController::class, 'update_location']);
Route::get('delete-location/{id}',[App\Http\Controllers\DashboardController::class, 'delete_location']);
Route::get('/insert-location',[App\Http\Controllers\DashboardController::class, 'View_location_InsertData'])->name('insert-location');
Route::post('insert-location-data',[App\Http\Controllers\DashboardController::class, 'insert_location']);
/**Locations**/

/**Blogs**/
Route::get('/ablogs',[App\Http\Controllers\DashboardController::class, 'Viewallblog'])->name('ablogs');
Route::get('edit-blog/{id}',[App\Http\Controllers\DashboardController::class, 'show_edit_blog'])->name('edit-blog');
Route::POST('update-blog/{id}', [App\Http\Controllers\DashboardController::class, 'update_blog']);
Route::get('delete-blog/{id}',[App\Http\Controllers\DashboardController::class, 'delete_blog']);
Route::get('/insert-blog',[App\Http\Controllers\DashboardController::class, 'View_blog_InsertData'])->name('insert-blog');
Route::post('insert-blog-data',[App\Http\Controllers\DashboardController::class, 'insert_blog']);
/**Blogs**/

/**Queries**/
Route::get('/aqueries',[App\Http\Controllers\DashboardController::class, 'Viewallqueries'])->name('aqueries');
Route::get('edit-query/{id}',[App\Http\Controllers\DashboardController::class, 'show_edit_query'])->name('edit-query');
Route::POST('update-query/{id}', [App\Http\Controllers\DashboardController::class, 'update_query']);
Route::get('delete-query/{id}',[App\Http\Controllers\DashboardController::class, 'delete_query']);
Route::get('/insert-query',[App\Http\Controllers\DashboardController::class, 'View_query_InsertData'])->name('insert-query');
Route::post('insert-query-data',[App\Http\Controllers\DashboardController::class, 'insert_query']);
/**Queries**/


/////////////////////////////Dashboard Routes///////////////////////////
///
///
/**About us**/
Route::get('/about-us',[App\Http\Controllers\MainController::class, 'about_us_data'])->name('about-us');
Route::get('/about-usAR',[App\Http\Controllers\MainController::class, 'about_us_dataAR'])->name('about-us');
/**Contact us**/
Route::get('/contact-us',[App\Http\Controllers\MainController::class, 'contact_us_data'])->name('contact-us');
Route::get('/contact-usAR',[App\Http\Controllers\MainController::class, 'contact_us_dataAR'])->name('contact-usAR');
/**Blog us**/
Route::get('/blogs',[App\Http\Controllers\BlogsControllers::class, 'Viewblogs'])->name('blogs');
Route::get('/blogsAR',[App\Http\Controllers\BlogsControllers::class, 'ViewblogsAR'])->name('blogsAR');
Route::get('/single-blog/{id}',[App\Http\Controllers\BlogsControllers::class, 'singleblogs'])->name('single-blog');
Route::get('/single-blogAR/{id}',[App\Http\Controllers\BlogsControllers::class, 'singleblogsAR'])->name('single-blogAR');




Auth::routes();

