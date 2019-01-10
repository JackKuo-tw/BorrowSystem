<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Permission;
use App\Item;
use App\Http\Requests\ItemStore;
use App\Http\Requests\CategoryStore;
use App\Http\Requests\MemberStore;
use App\Label;
use Auth;

class SystemController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(Request $request)
    {
        //
    }

    public function index()
    {
        $c_total = Category::total();
        $i_total = Item::total();
        $m_total = Label::listened()->count();

        return view('system.index', compact('c_total', 'i_total', 'm_total'));
    }

    public function category()
    {
        $result = Category::all();
        $type = 'category';
        return view('system.list_category', compact('result', 'type'));
    }

    public function item()
    {
        $result = Item::all();
        $type = 'item';
        return view('system.list_item', compact('result', 'type'));
    }

    public function create_category()
    {
        return view('system.craete_category');
    }

    public function create_item()
    {
        $categories = Category::all();
        return view('system.create_item', compact('categories'));
    }

    public function create_member()
    {
        return view('system.create_member');
    }

    public function store_category(CategoryStore $request)
    {
        Category::create($request->all());
        return redirect()->route('system.category');
    }

    public function store_item(ItemStore $request)
    {
//        dd($request->all()['photo']);
//        $request->all()["CID"] = $request->all()["cid"];
//        $request->CID = $request->input("cid");
//        Item::create($request->all());

        $validated = $request->validated();

        $f = new Item;
        $f->cname = $request->input('cname');
        $f->ename = $request->input('ename');
        $f->description = $request->input('description');
        $f->cid = $request->input('cid');
        $f->photo = base64_encode(
            file_get_contents(
                $request->file('photo')->path()
            )
        );
        $f->save();
        return redirect()->route('system.item');
    }

    public function member()
    {
        $people = Label::listened();
        return view('system.member', compact('people'));
    }

    public function store_member(MemberStore $request)
    {
        $validated = $request->validated();
        if(Label::all()->where('sid', $request->sid)->count() == 0) {
            Label::add($request->input('sid'), 'listened');
        }
        return redirect()->route('system.member');
    }

    public function delete_member($id)
    {
        $user = Label::find($id);
        $user->delete();
        return redirect()->route('system.member');
    }
}
