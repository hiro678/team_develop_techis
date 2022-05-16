<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
    * コンストラクタ
    *
    * @return coid
    */
    public function __construct()
    {
       $this->middleware('auth');
    }
 
    /**
     * カテゴリー追加画面を表示
     *
     * @return view
     */ 
    public function create()
    {
        return view('category.create');
    }

    /**
     * カテゴリー登録
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
 
        $this->validate($request, [
            'name' => 'required',
         ]);

        // Category::create([
        //     'id' => 0,
        //     'name' => $request->name,
        // ]);
        $category=new Category;

        $category->user_id=auth()->id();
        $category->name=$request->input('name');

        // DBに保存
        $category->save();

        return redirect('/category.list');
    }

    /**
     * カテゴリー編集画面を表示
     *
     * @param int $id
     * @return view
     */ 
    public function edit($id)
    {
        $category = Category::find($id);
        
        return view('category.edit' ,[
            'category' => $category
        ]);
    }
    /**
     * カテゴリー編集
     *
     * @param Request $request
     * @return Response
     */
    public function update(Request $request )
    {
        $inputs = $request->all();

        $category = Category::find($inputs
        ['id']);
        $category->fill([
            'name' => $inputs['name'],
        ]);
        $category->save();

        return redirect('/category.list');
    }

    /**
     * カテゴリー削除
     *
     * @param int $id
     * @return view
     */
    public function delete($id)
    {
        Category::destroy($id);
        return redirect('/category.list');
    }

    /**
     * カテゴリー一覧表示
     * 
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $category = Category::where('user_id', Auth::id())->get();
        return view('category.list', [
            'category' => $category,
        ]);
    }

}