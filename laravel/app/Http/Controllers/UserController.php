<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index(){
        // $data = [
        // 'username' => 'customer-1',
        // 'nama' => 'pelanggan',
        // 'password' => Hash::make('12345'),
        // 'level_id' => 4,];
        // UserModel::insert($data);
        // $data = [
            //     'nama' => 'Pelanggan Pertama',
            // ];
            // UserModel::where('username', 'customer-1') -> update($data);
            
            // $user = UserModel::all();
            // return view('user', ['data' => $user]);
            
            // $data = [
            //     'level_id' => 2,
            //     'username' => 'manager_tiga',
            //     'nama' => 'Manager 3',
            //     'password' => Hash::make('12345')
            // ];
            // UserModel::create($data);
            
        $user = UserModel::where('level_id', 2)->count();
        // dd($user);
        return view('user', ['data' => $user]);
    }
}
