<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;


class SearchController extends Controller
{
    /**
     * 持ち物検索
     * @param Request $request
     * @return view
     */ 
    public function search(Request $request)
    {
      $keyword = $request->input('keyword');

      $user_id = Auth::id();
 
      $query = Item::query();


      if (!empty($keyword)) {
          $query->where('name', 'LIKE', "%{$keyword}%")
                ->where('user_id','=',$user_id);
                
      }

      $items = $query->get();

      return view('home')
          -> with([
              'keyword'=> $keyword,
              'items' => $items,
              'user_id' => $user_id,
          ]);
    }
}