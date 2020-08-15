<?php
use App\admin;
use App\user1;
use App\purchase;
use App\internship;
use App\sales;
use App\Notifications\notifyme;

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

Route::get('/', function () {
    return view('front');
});



Route::post('addqry2','employeeController@addqry2');

Route::get('cadmin', function () {
    return view('admin/login');
});


Route::get('cuser', function () {
    return view('user/userlogin');
});




Route::get('index1',function() {
	
	return view('admin/index');
 
});


Route::post('/adminlogin','admincontroller@adminlogin');
Route::get('alogout','admincontroller@alogout');



Route::get('userregister', function () {
	
	return view('user/userregister');
});

Route::get('userlogin', function () {
    
    return view('user/userlogin');
});


Route::post('addqry','admincontroller@addqry');

Route::post('addpurchase','admincontroller@addpurchase');

Route::post('addsales','admincontroller@addsales');

Route::get('purchase/{id}','admincontroller@purchase');

Route::get('decline/{id}','admincontroller@decline');

Route::get('sell/{id}','admincontroller@sell');

Route::get('decline1/{id}','admincontroller@decline1');


Route::get('userview', function () {
	$res=user1::all();
	
	return view('admin/userview',compact('res'));

});

Route::get('purchaseview', function () {
    $res=purchase::all();
    
    return view('admin/purchaseview',compact('res'));

});

Route::get('purchase', function () {
    
    return view('user/purchase');
});

Route::get('sales', function () {
    
    return view('user/sales');
});

Route::get('milkproduct', function () {
    
    return view('user/milkproduct');
});

Route::get('productpage', function () {
    
    return view('user/productpage');
});

Route::get('alogout','admincontroller@alogout');

Route::get('salesview', function () {
    $res=sales::all();
    
    return view('admin/salesview',compact('res'));

});




Route::get('edit/{id}','admincontroller@edit');
Route::post('editqry','admincontroller@editqry');

Route::get('delete/{id}','admincontroller@delete');




Route::post('userlogin','admincontroller@userlogin');
Route::get('a1logout','admincontroller@a1logout');



Route::get('userindex',function() {
    return view('user/userindex');
});




Route::post('addqry1','EmployeeController@addqry1');






Route::get('approve/{id}','AdminController@approve');


Route::get('reject/{id}','AdminController@reject');


Route::get('notif/{id}',function() {
   user1::find(1)->notify(new notifyme);
});








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
