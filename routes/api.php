<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\UnitKnowledgeController;
use App\Http\Controllers\api\NoteController;
use App\Http\Controllers\api\auth\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// auth
// Route::post("/register", [AuthController::class, "register"]);
// Route::post("/login", [AuthController::class, "login"]);

Route::prefix("/user")->group( function() {

    Route::post('/register', [AuthController::class, "register"]);
    Route::post('/login', [AuthController::class, "login"]);
    Route::post('/logout', [AuthController::class, "logout"]);


    //Route::middleware("auth:api")->get("/about-user", 'api\v1\user\UserController@index'); 
    // gọi route trên: + http://127.0.0.1:8000/api/v1/user/all 
    //                 + header: Authorization: Bearer + accessToken của user đã login

});

// other logic 

// kiểm tra thử user đã đăng nhập hay chưa bằng middleware('auth:api'):
Route::middleware('auth:api')->get('/athenticated', function () {
    return true;
});

// Route::get("/unit_knowledge/all", [UnitKnowledgeController::class, "getAll"]);

// Route::get("/unit_knowledge/{id}", [UnitKnowledgeController::class, "getById"]);

// Route::post("/note/create", [NoteController::class, "save"]);

Route::middleware("auth:api")->prefix("/unit_knowledge")->group( function() {

    Route::get('/all', [UnitKnowledgeController::class, "getAll"]);
    Route::get('/{id}', [UnitKnowledgeController::class, "getById"]);

});

Route::prefix("/note")->group(function() {

    Route::middleware("auth:api")->post('/create', [NoteController::class, "save"]);

});