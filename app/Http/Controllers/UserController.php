<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return view('user.index',compact('users'));
    }
    public function show($id){
        $user = User::where('id',$id)->first();
        return view('user.show',compact('user'));
    }
    public function create(){
        return view('user.create');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        if($validator->fails()){
            return back()->with('failed',$validator->errors());
        }else{
            $isCreated = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password'))
            ]);
            if($isCreated){
                $users = User::get();
                return view('user.index',compact('users'))->with('success','data berhasil dibuat');
            }else{
                return back()->with('failed','data gagal dibuat');
            }
        }
    }
    public function edit($id){
        $user = User::where('id',$id)->first();
        if(isset($user)){
            return view('user.edit',compact('user'));
        }else{
            return back()->with('failed','data user tidak ditemukan');
        }
    }
    public function update(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
            'email' => 'required|email'
        ]);
        if($validator->fails()){
            return back()->with('failed',$validator->errors());
        }else{
            $user = User::where('id',$id)->first();
            if(isset($user)){
                $isUpdate = $user->update([
                    'name' => $request->input('name'),
                    'email' => $request->input('email')
                ]);
                if($isUpdate){
                    $users = User::get();
                    return view('user.index',compact('users'))->with('success','data berhasil diupdate');
                }else{
                    return back()->with('failed','data gagal diupdate');
                }
            }else{
                return back()->with('failed','data user tidak ditemukan');
            }
        }
    }
    public function destroy($id){
        $user = User::where('id',$id)->first();
        if(isset($user)){
            $isDelete = $user->delete();
            if($isDelete){
                return back()->with('success','data telah berhasil dihapus');
            }else{
                return back()->with('failed','data gagal dihapus');
            }
        }else{
            return back()->with('failed','data user tidak ditemukan');
        }
    }
}
