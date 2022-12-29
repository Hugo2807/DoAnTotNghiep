<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menunote;

use App\Components\MenuRecusive;

use Illuminate\Support\Str;

class MenuNoteController extends Controller
{
    private $menuRecusive;
    public function __construct(MenuRecusive $menuRecusive){
        $this->menuRecusive = $menuRecusive;
    }

    public function create(Request $request)
    {
        $data = Menunote::where('id', $request->id)->get('menu_id');
        // $data = Menunote::where('id')->get('menu_id');
        // $data = new Menunote::find($request->id);
        // $data = $data->id;
        // $data = $request->all();
        dd($data);
        // $optionSelect = $this->menuRecusive->menuRecusiveAdd();
        // return view('adminshop.menunote.create', compact('optionSelect','data'));
    }

    public function postcreate(Request $request)
    {
        // $data = $request->all();
        $slug = Str::slug($request->name, '-');
        $menu = Menu::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => $slug
        ]);

        return redirect()->route('adminshop.menu.index')->with('msg', 'Thêm menu thành công');
    }
}
