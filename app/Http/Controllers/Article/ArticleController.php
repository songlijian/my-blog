<?php

namespace App\Http\Controllers\Article;

use Validator;
use Redis;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Jobs\SendEmail;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        $list = DB::table('article_list')->where('id',1)->get();
        //$this->dispatch(new SendEmail());
        return view('article.index',['lists' =>$list]);
    }

    public function info(Request $request){
        $id = $request->query('id');
        $validator = Validator::make([$id],[
            'id' => 'integer'
        ],['id' => '请求参数错误']);
        if(!$validator->fails()){
            $info = DB::table('article_list')->where('id',$id)->value('content');
            return view('article.info',['info' => $info]);
        }
    }
}
