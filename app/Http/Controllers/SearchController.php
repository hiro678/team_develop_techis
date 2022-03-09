<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

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
 
      $query = Item::query();

      if (!empty($keyword)) {
          $query->where('name', 'LIKE', "%{$keyword}%");
      }

      $items = $query->get();

      return view('home')
          -> with([
              'keyword'=> $keyword,
              'items' => $items,
          ]);
    }
}