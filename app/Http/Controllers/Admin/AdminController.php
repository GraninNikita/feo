<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use Image;
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
            // read image from temporary file
            $file = $request->file('imagePrev');
            $img = Image::make($file->getRealPath());

            $nameFile = $file->getClientOriginalName();

//          resize image
                    $img->fit(263, 263);
            // save image
                    $img->save("images/".$nameFile);
            News::create(
                [
                    'text' => $request->input('editor1'),
                    'header' => $request->input('header'),
                    'picture' => "images/".$nameFile
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
        $news = News::orderBy('created_at', 'DESC')->paginate(15);
        return view('admin/news', [ 'news' => $news ]);
    }
}