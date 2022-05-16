<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;


class ItemController extends Controller
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
     * アイテム登録画面
     *
     * @param Request $request
     * @return Response
     */
   
   public function create(Request $request,$category_id)
   {
      return view('item.create',[
         'category_id' => $category_id,
         ]);
   }

   /**
     * アイテム登録機能
     * 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
   {
      

       //バリデーションの記載
      $this->validate($request, [
         'name' => 'required',
         'amount' => 'required',
         'bought_at' => 'required',
         'comment' => 'required',
      ]);
      
      $this->validate($request, Item::$rules);
      $image_name = $request->image_name;
      if (isset($image_name)) {

       //ファイルパス（$image_namePath）を生成ここでstore()メソッドを使っているが、これは画像データをstorageに保存している
      $image_namePath = $image_name->store('public/uploads');

      } else {
         //画像ファイル未選択ならNOIMAGEを表示
      $image_namePath = $image_name.'public/uploads/El9X5kPrYGtaYzpFG0q8bFvPyouAgvHkTvqL8ByI.png';
      }

      $item=new Item;

      $item->user_id=auth()->id();
      $item->category_id=$request->input('category_id');
      $item->name=$request->input('name');
      $item->amount=$request->input('amount');
      $item->bought_at=$request->input('bought_at');
      $item->image_name=$image_namePath;         //画像のファイルパスをDBに保存
      $item->alert=$request->input('alert');
      $item->comment=$request->input('comment');

      // DBに保存
      $item->save();

      //カテゴリー一覧画面にリダイレクト
         return redirect('category.list');

   }
   //アイテム編集画面
   public function edit($id)
   {
      $item=Item::find($id);
      return view('item.edit',compact('item'));
   }

   //アイテム編集機能
   public function update(Request $request, $id)
   {
      $item=Item::find($id);

      
      //バリデーションの記載
      $this->validate($request, [
         'name' => 'required',
         'amount' => 'required',
         'bought_at' => 'required',
         'comment' => 'required',
      ]);

      $this->validate($request, Item::$rules);
      $image_name = $request->image_name;
      if (isset($image_name)) {

      //ファイルパス（$image_namePath）を生成ここでstore()メソッドを使っているが、これは画像データをstorageに保存している
      $image_namePath = $image_name->store('public/uploads');

      } else {
         $image_namePath = $item->image_name;
      }

      $item=Item::find($id);

      $item->user_id=auth()->id();
      $item->category_id=$request->input('category_id');
      $item->name=$request->input('name');
      $item->amount=$request->input('amount');
      $item->bought_at=$request->input('bought_at');
      $item->image_name=$image_namePath;         //画像のファイルパスをDBに保存
      $item->alert=$request->input('alert');
      $item->comment=$request->input('comment');

      //DBに保存
      $item->save();

      //処理が終わったらカテゴリー一覧画面にリダイレクト
      return redirect('category.list');
   }

   //削除機能
   public function delete($id)
   {
      
      $item=Item::find($id);

      $item->delete();
      //処理が終わったらカテゴリー一覧画面にリダイレクト
      return redirect('category.list');
   }

   /**
     * アイテム一覧表示
     * 
     * @param Request $request
     * @return Response
     */
   public function index(Request $request,$id)
    {
      $item = Item::where('category_id',$id)->get();
      return view('item.list', [
            'item' => $item,
        ]);
    }
}
