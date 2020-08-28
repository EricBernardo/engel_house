<?php

if (!session_id()) {
    session_start();
}

if (!isset($_SESSION['last_url']) || !$_SESSION['last_url']) {
    $_SESSION['last_url'] = @$_SERVER['HTTP_REFERER'];
}

if (isset($_GET['_source'])) {
    $_SESSION['_source'] = $_GET['_source'];
}

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

$getRequestUri = request()->getRequestUri();

if(strpos($getRequestUri, '/public') !== false) {    
  header('Location: https://www.artefatosdecimentoportao.com.br' . str_replace('/public', '', $getRequestUri), true, 301);        
  die("Aguarde...");
}

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/produtos', 'ProductController@index')->name('products.index');
Route::get('/produtos/{slug}', 'ProductController@show')->name('products.show');
Route::get('/quem-somos', 'AboutController@index')->name('abouts.index');
Route::get('/equipe', 'TeamController@index')->name('teams.index');
Route::get('/contato', 'ContactController@index')->name('contacts.index');

Route::post('/lead', 'LeadController@store')->name('leads.store');

Route::get('manifest.json', function() {
    return [
      "name" => "Artefatos de Cimento Portão",
      "short_name" => "AC Portão",
      "theme_color" => "#FF4C00",
      "background_color" => "#FFFFFF",
      "display" => "standalone",
      "scope" => "/",
      "start_url" => "/"
    ];
});

Route::get('sitemap.xml', function () {

    // create new sitemap object
    $sitemap = App::make('sitemap');

    $sitemap->setCache('laravel.sitemap', 60);

    if (!$sitemap->isCached()) {

        $date = Carbon::now();

        $sitemap->add(URL::to('/'), $date, '1.0', 'daily');
        $sitemap->add(URL::to('produtos'), $date, '0.9', 'monthly');
        $sitemap->add(URL::to('quem-somos'), $date, '0.9', 'monthly');

        $products = DB::table('products')->where('status', 1)->get();

        // add every product to the sitemap
        foreach ($products as $product) {
            $sitemap->add(URL::to('produtos/' . $product->slug), ($product->updated_at ? $product->updated_at : $date), '0.9', 'monthly');
        }

        $sitemap->add(URL::to('equipe'), $date, '0.9', 'monthly');
        $sitemap->add(URL::to('contato'), $date, '0.9', 'monthly');
    }

    return $sitemap->render('xml');
});

Route::get('admin', 'Auth\LoginController@showLoginForm')->name('admin');
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/logout', 'Auth\LoginController@logout')->name('admin.logout');

Auth::routes();

Route::get('admin/banners', 'Auth\BannerController@index')->name('banners.index');
Route::get('admin/banners/create', 'Auth\BannerController@create')->name('banners.create');
Route::post('admin/banners/store', 'Auth\BannerController@store')->name('banners.store');
Route::get('admin/banners/show/{id}', 'Auth\BannerController@show')->name('banners.show');
Route::put('admin/banners/update/{id}', 'Auth\BannerController@update')->name('banners.update');
Route::delete('admin/banners/delete/{id}', 'Auth\BannerController@delete')->name('banners.delete');

Route::get('admin/services', 'Auth\ServiceController@index')->name('services.index');
Route::get('admin/services/create', 'Auth\ServiceController@create')->name('services.create');
Route::post('admin/services/store', 'Auth\ServiceController@store')->name('services.store');
Route::get('admin/services/show/{id}', 'Auth\ServiceController@show')->name('services.show');
Route::put('admin/services/update/{id}', 'Auth\ServiceController@update')->name('services.update');
Route::delete('admin/services/delete/{id}', 'Auth\ServiceController@delete')->name('services.delete');

Route::get('admin/products', 'Auth\ProductController@index')->name('products.index');
Route::get('admin/products/create', 'Auth\ProductController@create')->name('products.create');
Route::post('admin/products/store', 'Auth\ProductController@store')->name('products.store');
Route::get('admin/products/show/{id}', 'Auth\ProductController@show')->name('products.show');
Route::put('admin/products/update/{id}', 'Auth\ProductController@update')->name('products.update');
Route::delete('admin/products/delete/{id}', 'Auth\ProductController@delete')->name('products.delete');

Route::get('admin/abouts', 'Auth\AboutController@index')->name('abouts.index');
Route::get('admin/abouts/create', 'Auth\AboutController@create')->name('abouts.create');
Route::post('admin/abouts/store', 'Auth\AboutController@store')->name('abouts.store');
Route::get('admin/abouts/show/{id}', 'Auth\AboutController@show')->name('abouts.show');
Route::put('admin/abouts/update/{id}', 'Auth\AboutController@update')->name('abouts.update');
Route::delete('admin/abouts/delete/{id}', 'Auth\AboutController@delete')->name('abouts.delete');

Route::get('admin/teams', 'Auth\TeamController@index')->name('teams.index');
Route::get('admin/teams/create', 'Auth\TeamController@create')->name('teams.create');
Route::post('admin/teams/store', 'Auth\TeamController@store')->name('teams.store');
Route::get('admin/teams/show/{id}', 'Auth\TeamController@show')->name('teams.show');
Route::put('admin/teams/update/{id}', 'Auth\TeamController@update')->name('teams.update');
Route::delete('admin/teams/delete/{id}', 'Auth\TeamController@delete')->name('teams.delete');

Route::get('admin/contacts', 'Auth\ContactController@index')->name('contacts.index');
Route::get('admin/contacts/create', 'Auth\ContactController@create')->name('contacts.create');
Route::post('admin/contacts/store', 'Auth\ContactController@store')->name('contacts.store');
Route::get('admin/contacts/show/{id}', 'Auth\ContactController@show')->name('contacts.show');
Route::put('admin/contacts/update/{id}', 'Auth\ContactController@update')->name('contacts.update');
Route::delete('admin/contacts/delete/{id}', 'Auth\ContactController@delete')->name('contacts.delete');

Route::get('admin/settings', 'Auth\SettingController@index')->name('settings.index');
Route::get('admin/settings/create', 'Auth\SettingController@create')->name('settings.create');
Route::post('admin/settings/store', 'Auth\SettingController@store')->name('settings.store');
Route::get('admin/settings/show/{id}', 'Auth\SettingController@show')->name('settings.show');
Route::put('admin/settings/update/{id}', 'Auth\SettingController@update')->name('settings.update');
Route::delete('admin/settings/delete/{id}', 'Auth\SettingController@delete')->name('settings.delete');

Route::get('admin/seo', 'Auth\SeoController@index')->name('seo.index');
Route::get('admin/seo/create', 'Auth\SeoController@create')->name('seo.create');
Route::post('admin/seo/store', 'Auth\SeoController@store')->name('seo.store');
Route::get('admin/seo/show/{id}', 'Auth\SeoController@show')->name('seo.show');
Route::put('admin/seo/update/{id}', 'Auth\SeoController@update')->name('seo.update');
Route::delete('admin/seo/delete/{id}', 'Auth\SeoController@delete')->name('seo.delete');

Route::get('admin/home_products', 'Auth\HomeProductController@index')->name('home_products.index');
Route::get('admin/home_products/create', 'Auth\HomeProductController@create')->name('home_products.create');
Route::post('admin/home_products/store', 'Auth\HomeProductController@store')->name('home_products.store');
Route::get('admin/home_products/show/{id}', 'Auth\HomeProductController@show')->name('home_products.show');
Route::put('admin/home_products/update/{id}', 'Auth\HomeProductController@update')->name('home_products.update');
Route::delete('admin/home_products/delete/{id}', 'Auth\HomeProductController@delete')->name('home_products.delete');

Route::get('admin/leads', 'Auth\LeadController@index')->name('leads.index');
Route::get('admin/leads/{id}', 'Auth\LeadController@show')->name('leads.show');
