<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(){
        $users = User::all();

        return view('home.index',["users" => $users]);
    }

    public function add(){
        return view('home.add');
    }

    public function processAdd(Request $request){
        $image = Storage::disk('local')->put('public/images/users',$request->file('file'));
        $image = str_replace('public','storage',$image);

        $user = new User();
        $user->email = $request->input('email');
        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('password'));
        $user->image = $image;
        $user->save();

        return redirect('/');
    }

    public function edit($id){
        $user = User::find($id);

        return view('home.edit',['user' => $user]);
    }

    public function processEdit(Request $request){
        $user = User::find($request->input('id'));

        $user->email = $request->input('email');        
        $user->name = $request->input('name');

        if($request->input('password')){
            $user->password = Hash::make($request->input('password'));
        }

        if($request->hasFile('file')){
            $image = Storage::disk('local')->put('public/images/users',$request->file('file'));
            $image = str_replace('public','storage',$image);

            $user->image = $image;
        }

        $user->save();

        return redirect('/');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();

        return redirect('/');
    }
}
