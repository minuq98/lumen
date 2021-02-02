<?php

namespace App\Http\Controllers;

use App\Models\Todos; //File Model
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $data = Todos::all();
        
        return response($data);
    }

    
}
