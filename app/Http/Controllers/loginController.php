<?php

namespace App\Http\Controllers;

//use App\Blog;
use App\Model\Blog;
use Illuminate\Http\Request as Request;
use App\Http\Requests;
use App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Redirect;

class loginController extends Controller
{
    /**  * 返回login视图,登录页面  */
    public function loginGet()
    {
        return view('blog.login');
    }

    /**  * 登录响应  */
    public function loginPost(Request $request)
    {
        $this->validate($request, Blog::rules());
        $id = $request->get('id');
        $password = $request->get('password');
        if (Auth::attempt(['id' => $id, 'password' => $password], $request->get('remember'))) {
            if (!Auth::user()->is_admin) {
                return Redirect::route('stu_home');
            } else {
                return Redirect::action('AdminAdminController@index');
            }
        } else {
            return Redirect::route('login')
                ->withInput()
                ->withErrors('学号或者密码不正确,请重新输入！');
        }
    }

    /**  * 用户登出  */
    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return Redirect::route('login');

    }
}

