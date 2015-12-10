<?php
namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\User;
use App\News;
use Validator;
use App\Table;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class UserController extends Controller {
    public $paginateNews = 6;

    public function index()
    {
        $news = News::orderBy('created_at', 'DESC')->paginate($this->paginateNews);
        return view('main', [ 'news' => $news ]);
    }
    public function detail_news($id){
            $news = News::find($id);
//        die();
            return view('detail_news', [ 'news' => $news ]);
    }

}