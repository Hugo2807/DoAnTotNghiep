<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;

use App\Models\Menunote;

use App\Models\Menulocation;

use App\Components\MenuRecusive;

use App\Components\Position;

use Illuminate\Support\Str;

class MenuController extends Controller
{
    private $menuRecusive;
    public function __construct(MenuRecusive $menuRecusive, Position $position){
        $this->menuRecusive = $menuRecusive;
        $this->position = $position;
    }

    public function index(){
        $data = Menu::orderBy('id', 'ASC')->paginate(5);
        if($key = request()->key)
        {
            $data = Menu::orderBy('id', 'ASC')->where('name','like','%'.$key.'%')->paginate(2);
        }
        return view('adminshop.menu.index', compact('data'));
    }

    public function create()
    {
        return view('adminshop.menu.create');
    }

    public function postcreate(Request $request)
    {
        //$data = $request->all();
        //$slug = Str::slug($request->name, '-');
        $menu = Menu::create([
            'name' => $request->name,
            //'parent_id' => $request->parent_id,
            //'slug' => $slug
        ]);

        return redirect()->route('adminshop.menu.index')->with('msg', 'Thêm menu thành công');
    }

    public function getMenunote(){
        $menunotes = Menunote::orderBy('id', 'ASC')->get();
        $listNote = [];
        Menunote::recursive($menunotes, $parents = 0, $level = 1, $listNote);
        return $listNote;
    }

    public function edit(Request $request, $id, Menunote $data1)
    {
        // $data = Menunote::where($id)->get();
        // $data = Menunote();
        //$result = Menunote::find($request->menu_id);
        

        $result = Menu::findOrFail($id);
        //$data1 = $result->menunote;
        //dd($data1);
        $menunotes = $result->menunote;
        // $data = $result->menunote->pluck('id')->toArray();
        // $menunotes = Menunote::whereIn('id', $data)->get();
        // $data1 = $result->menulocation->pluck('id')->toArray();
        // $menulocations = Menulocation::whereIn('id', $data1)->get();
        $menulocations = $result->menulocation;
        //dd($menulocations);
        //$data2 = Menunote::where('parent_id', 0)->get();
        //dd($menunotes);
        // $data1 = Menunote::findOrFail($result->menunote->id);
        // dd($data1);
        // dd(Menunote::where('id', $data));
        //$data = Menunote::where('id', $menunotes->id)->get('parent_id');
        // foreach($menunotes as $menunote){
        //     $data = Menunote::where('id', $id)->delete();;
        // }
        
        $optionSelect = $this->menuRecusive->menuRecusiveAdd();
        $optionSelect1 = $this->menuRecusive->menuRecusiveEdit(0);
        $optionSelect2 = $this->menuRecusive->getParent();
        $optionSelect3 = $this->position->output();
        $optionSelect4 = $this->getMenunote();
        $noteid = $request->input('noteid');
        //dd($optionSelect4);
        // foreach($optionSelect3 as $key => $value){
        //     dd($value) ;
        // }
        //$cr = createmenunote();
        return view('adminshop.menu.edit', ['data1'=>$data1], compact('noteid', 'result', 'menunotes', 'menulocations', 'optionSelect', 'optionSelect1', 'optionSelect2', 'optionSelect3', 'optionSelect4'));
    }

    public function updateMenu(Request $request, $id)
    {
        $result = Menu::findOrFail($id);
        $menunotes = $result->menunote;
        //dd($menunotes);
        // $data1 = $menunotes['id'];
        // dd($data1);
        if($request->input('addmenunote'))
        {
            $slug = Str::slug($request->name, '-');
            $menu = MenuNote::create([
                'name' => $request->name,
                'parent_id' => $request->parent_id,
                'slug' => $slug,
                'menu_id'=>$id,
            ]);
            return redirect()->route('adminshop.menu.edit', $id)->with('msg', 'Thêm menunote thành công');
        }
            if($request->input('editmenunote')){
                $slug = Str::slug($request->menunotename, '-');
                $noteid = $request->input('noteid');
                $menunote = Menunote::find($noteid)->update([
                            'name' => $request->menunotename,
                            'parent_id' => $request->parent_id,
                            'slug' => $slug,
                            'menu_id' => $id,
                        ]);
                return redirect()->route('adminshop.menu.edit', $id)->with('msg', 'Cập nhât menunote thành công');
            }

            if($request->input('savemenu')){
                //return $request->pos;
                $data = Menu::find($id);
                $position = Menulocation::create([
                    'pos' => $request->pos,
                    'menu_id' => $id,
                ]);
                $data->name = $request->menuname;
                $data->save();
                return redirect()->route('adminshop.menu.index')->with('msg', 'Cập nhật menu thành công');
            }
    }

    public function delete(Request $request, $id)
    {
        Menu::find($id)->delete();
        return redirect()->route('adminshop.menu.index')->with('msg', 'Xóa loại sản phẩm thành công');
    }

    public function deleteNote(Request $request, $id)
    {
        foreach(Menu::all() as $item){
            Menunote::where('id', $id)->delete();
            return redirect()->route('adminshop.menu.edit', ['id' => $item->id])->with('msg', 'Xóa menunote thành công');
        }
    }
}
