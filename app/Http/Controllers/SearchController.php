<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Stock;


class SearchController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */

    public function autocomplete(Request $request){

        $query = $request->get('query');
        $filterResult = Stock::select("*")->where('name', 'LIKE', '%'. $query. '%')->get();
        return response()->json($filterResult);
        
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function stockinfo(Request $request)
    {
        $id = $request->get('stock_id');
        $stock = Stock::find($id);
        return view('info',['stock'=>$stock]);
    }
}
