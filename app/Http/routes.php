<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('blog.index');
});

Route::get('/about', function () {
    return view('about.user');
})->name('about.user');

Route::get('/post/{id}', function ($id) {
    if($id == 1){
        $post = [
            'title'=>'Learning laravel',
            'content'=>'php'
        ];
    }else {
        $post = [
            'title'=>'Something else',
            'content'=>'some content'
        ];
    }
    return view('articles.post',['post'=>$post]);
})->name('articles.post');

Route::group(['prefix'=>'admin'], function() {
    Route::get('', function () {
        return view('admin.create');
    })->name('admin.create');

    Route::post('', function (\Illuminate\Http\Request $request, Illuminate\Validation\Factory $validator) {
        $validation = $validator->make($request->all(),[
             'email'=>'required',
             'password'=>'required|min:5'
            ]);
        if($validation->fails()){
            return redirect()->back()->withErrors($validation);
        }
        return redirect()->route('about.user')->with('info','Posted this data:'.$request->input('email'));
    })->name('admin.create');
});

