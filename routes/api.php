<?php

 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;
 use App\codeModel;
 use App\Http\Controller\WorkinfoController;
 use App\Http\Controller\PersonalInfoController;
 use App\Http\Controller\Auth\RegisterController;
 
 
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('register','AuthController@register');
});

Route::post('users/{id}' , function(Request $req , $id){
    $name = $req->only('first');
    return $name;    
});

Route::post('/db/test' , function(){
    $val = DB::table('code')->where('code','123')->value('state');
    return $val;
});

Route::post('/workinfo' , 'WorkinfoController@store');
Route::post('/role' , 'WorkinfoController@storerole');
// Route::post('/usr' , 'WorkinfoController@storeUser');

Route::post('/create_point' , 'PointController@storePoint');
Route::post('/point' , 'PointController@getPoints');

Route::post('/create_section' , 'SectionController@storeSection');
Route::post('/section' , 'SectionController@getSections');

Route::post('/create_role' , 'RoleController@storeRole');
Route::post('/role' , 'RoleController@getRoles');

Route::post('/get_options' , 'options@getOptions');

Route::post('/first_personal' , 'PersonalInfoController@getFirstUser');
Route::get('/first_personal/{id}' , 'PersonalInfoController@getUserById');

Route::post('/personal','PersonalInfoController@store');

Route::get('/{id}/{op}', function($id,$op){
    return $id . $op;
});