<?php

namespace App\Http\Controllers\Stu;

use App\Model\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Middleware\BlogloginMiddleware;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * 只允许登录用户访问
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 返回学生主页
     */
    public function home()
    {
        $grade = Auth::user()->grade;
        return view('stu.home', compact('grade'));
        //return view('stu.home',['grade'=>$grade]);
    }
    /**
     * 编辑方法，返回编辑页面
     */
    public  function edit()
    {
        return view('stu.edit');
    }
    public function update(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required|digits:11',
            'pro_class' => 'required',
            'email' => 'required|email'
        ]);

        Auth::user()->update($request->all());
        session()->flash('message', '个人信息修改成功');
        return Redirect::route('stu_home');
    }
}
