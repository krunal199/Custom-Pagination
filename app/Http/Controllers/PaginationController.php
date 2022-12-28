<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PaginationController extends Controller
{
    public function index(){
        $users = User::paginate(5);
        // dd($users);
        return view('pagination.index',compact('users'));
    } 
}