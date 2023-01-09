<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;
use Auth;
use DB;
use Illuminate\Support\Str;

class BloggerContoller extends Controller
{
  public function index(){
    $article = DB::table('users')
    ->join('articles', 'users.id', '=', 'articles.userid')
    ->orderBy('articles.thumb','DESC')
    ->paginate(20);
    return view('/blogger/index',compact('article'));
    }

    public function manage_articles(){
        $user = Auth::user();
        $user_id = $user->id;
        $slug = Article::select('title')->get();
         foreach($slug as $slugs);
        $articles = DB::table('users')
        ->join('articles','users.id','=','articles.userid')
        ->join('comments', 'articles.id', '=', 'comments.id')
        ->where('articles.userid', '=', $user->id)
        ->get();
        $shareComponent = \Share::page(
          "https://e262-41-216-201-29.ngrok.io/single_page/$slugs->title",
      )
      ->facebook()
      ->twitter()
      ->linkedin()
      ->telegram()
      ->whatsapp()        
      ->reddit();
       return view('/blogger/manage_articles',compact('articles','shareComponent'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'userid' => 'required',
        'title' => 'required|string|max:255',
        'content' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
     
     $request['slug'] = Str::slug($request->title);
     $input = $request->all();

    if ($image = $request->file('image')) {
      $destinationPath = '/uploads/image/';
      $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
      $image->move(public_path('/uploads/image/'), $profileImage);
      $input['image'] = "$profileImage";
  }
        Article::create($input);
        return redirect()->back()->with('status','Post was successfully added');
    }
       /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $edit = Article::find($id);
      return view('edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $id = $request->input('id');
      $title = $request->input('title');
      $content = $request->input('content');
     
      DB::update("update articles set title = '$title', content = '$content' where id = '$id'");
      return redirect()->back()->with('status','Article was successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $article = Article::find($id);
      $article_id = $article->id;
      DB::table('Articles')->where('id', '=', $article->id)->delete();
      return redirect()->back()->with('status','Article was successfully delete');
    }

    public function view($id){
      $article = DB::table('users')
      ->join('articles', 'users.id', '=', 'articles.userid')
      ->where('articles.id', '=', $id)
      ->get();
      foreach($article as $article);
      return view('/blogger/view', compact('article'));
  }
}
