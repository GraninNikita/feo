<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\News;
use Validator;
use App\Table;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AdminController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
//    public function showProfile($id)
//    {
//        return view('user.profile', ['user' => User::findOrFail($id)]);
//    }
    public function index()
    {
        return view('admin/admin');
    }

    public function news(Request $request)
    {
        if ( $request->isMethod('POST') ) {
//            News::create($request->except('_token'));
            News::create(
                [
                    'text' => $request->input('editor1'),
                    'header' => $request->input('header')
                ]
            );
//            switch ( $request->input('type') ) {
//                case 'insert':
//                    News::create($request->except('_token'));
//                    break;
//                case 'update':
//                    News::find( $request->input('id') )->update([
//                        'header' => $request->input('header'),
//                        'text' => $request->input('editor1'),
//                    ]);
//                    break;
//            }
        }
        if ( $request->isMethod('GET') ) {
            $item = News::find($request->input('remove'));
            if ( $item ) {
                $item->delete();
            }
        }
        $news = News::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin/news', [ 'news' => $news ]);
    }
}