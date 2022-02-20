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
   
   public function create()
   {
      return view('item.create');
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
      $this->validate($request, Item::$rules);
      $image_name = $request->image_name;
      if ($image_name) {

      //一意のファイル名を自動生成しつつ保存し、かつファイルパス（$image_namePath）を生成
      //ここでstore()メソッドを使っているが、これは画像データをstorageに保存している
      $image_namePath = $image_name->store('public/uploads');

      } else {
         $image_name = "";
      }

      $item=new Item;

       // $item->user_id=$request->input('user_id');
      $item->user_id=1; //仮設定
      $item->name=$request->input('name');
      $item->amount=$request->input('amount');
      $item->bought_at=$request->input('bought_at');
      $item->image_name=$image_namePath;         //画像のファイルパスをDBに保存
      $item->alert=$request->input('alert');
      $item->comment=$request->input('comment');

      $item->save();

      //アイテム登録画面にリダイレクト
         return redirect('item.create');

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
      //バリデーションの記載
      $this->validate($request, Item::$rules);
      $image_name = $request->image_name;
      if ($image_name) {

      //一意のファイル名を自動生成しつつ保存し、かつファイルパス（$image_namePath）を生成
      //ここでstore()メソッドを使っているが、これは画像データをstorageに保存している
      $image_namePath = $image_name->store('public/uploads');

      } else {
         $image_name = "";
      }

      $item=Item::find($id);

      // $item->user_id=$request->input('user_id');
      $item->user_id=1; //仮設定
      $item->name=$request->input('name');
      $item->amount=$request->input('amount');
      $item->bought_at=$request->input('bought_at');
      $item->image_name=$image_namePath;         //画像のファイルパスをDBに保存
      $item->alert=$request->input('alert');
      $item->comment=$request->input('comment');

      //DBに保存
      $item->save();

      //処理が終わったらアイテム登録画面にリダイレクト
      return redirect('item.create');
   }

   //削除機能
   public function delete($id)
   {
      
      $item=Item::find($id);

      $item->delete();
      //処理が終わったらアイテム登録画面にリダイレクト
      return redirect('item.create');
   }
}
