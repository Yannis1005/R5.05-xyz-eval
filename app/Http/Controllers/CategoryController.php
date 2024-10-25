<?php
namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{


    public function index()
    {
        $categories = Category::withCount('tracks')->get();
        
        return view('app.categories.index', compact('categories'));
    }
}