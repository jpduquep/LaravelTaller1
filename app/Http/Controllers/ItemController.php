<?php
 
namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Item;
 
class ItemController extends Controller
{
    public function creacion(): View
    {
        return view('home.creacion');
    }


    public function index():View{
        $viewData = [];
        $viewData['item'] = Item::all();
        return view('item.show')->with('viewData',$viewData);
    }

    public function show(string $id): View{

        $viewData = [];
        $item = Item::findOrFail($id);
        $viewData["item"] = $item;
        return view('item.showUnique')->with("viewData", $viewData);

    }

    public function save(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([

            "name" => "required",
            "price" => "required",
            "description" => "required",
            "stock" => "required"
            
            ]);
        
        Item::create($request->only(["name","price","description","stock"]));
    
        return back();
    }

    public function destroy(string $id): View{

        $item = Item::findOrFail($id);
        $item->delete();

        $viewData = [];
        $viewData['item'] = Item::all();
        

        return view('item.show')->with("viewData",$viewData);
    }
}
