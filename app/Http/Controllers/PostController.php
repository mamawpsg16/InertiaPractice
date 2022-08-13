<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Inertia\Inertia;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        $users = User::query()
        //Check Query
        ->when(request('search'),function($query,$search){
            $query->where('name','like', "%{$search}%");
        })
        ->Paginate(10)
        //Maintain the query
        ->withQueryString()
        ->through(fn($user) =>[
            'id'=>$user->id,
            'name'=>$user->name
        ]);
        // dd($users);
        // ->map(fn($user) =>[
        //     'name' => $user->name
        // ]);
        
        return Inertia::render('Post/Index',['posts'=>$posts,'users'=>$users,'filters'=>request()->only(['search'])]);
    }
}
