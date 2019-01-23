<?php

namespace App\Http\Controllers;

use App\Fenlei8;
use App\Article8;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //首页
    public function index()
    {
        //
        $fenlei = Fenlei8::all();
        // $fenlei_id = Fenlei::all('id');     
        // $zuixin = Article::whereIn('fenlei_id',$fenlei_id)->paginate(10);
        // dump($zuixin);
        // return view('news.index', compact('fenlei','zuixin'));
        return view('news.index', compact('fenlei'));
    }
    
    //列表页
    public function fenlei($id)
    {
        $fenlei=Fenlei8::all();
        $dangqian_fenlei = Fenlei8::where('id',$id)->first();
        $article = Article8::orderBy('id','desc')->where('fenlei_id','=',$id)->paginate(8);
        $lunbo = Article8::orderBy('id','desc')->where('fenlei_id',$id)->where('news_pic','<>','')->limit(8)->get();
        return view('news.list',compact('dangqian_fenlei','article','fenlei','id','lunbo'));
    }

    //内容页
    public function content($id)
    {
        $fenlei = Fenlei8::all();
        $content = Article8::where('id','=',$id)->first();
        return view('news.article', compact('content','fenlei','id'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
