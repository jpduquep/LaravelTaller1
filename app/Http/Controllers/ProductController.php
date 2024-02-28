<?php
 
namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\item;
 
class ProductController extends Controller
{
    public function creacion(): View
    {
        return view('home.creacion');
    }

    public function listar():View
    {
        return view('home.listar');
    }

    public function guardar(Request $request)
    {
        $item = new item;
        $item->id = $request->input('id');
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->stock = $request->input('stock');
        $item->price = $request->input('price');
        $item -> save();
        dd($request->all());
        return 'Elemento creado satisfactoriamente';
    }
}
