<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comments;
use App\Models\Reply;
use DB;
use Carbon\Carbon;

class AdminContoller extends Controller
{
    public function welcome(){
    $articles = DB::table('users')
    ->join('articles', 'users.id', '=', 'articles.userid')
    ->orderBy('articles.views','DESC')
    ->paginate(2);

    $comment = DB::table('users')
        ->join('articles','users.id','=','articles.userid')
        ->join('comments', 'articles.slug', '=', 'comments.slug')
        ->orderBy('comments.created_at','DESC')
        ->get();
   
    $trending = DB::table('users')
    ->join('articles', 'users.id', '=', 'articles.userid')
    ->orderBy('articles.views','DESC')
    ->paginate(5);

    $trend = DB::table('users')
    ->join('articles', 'users.id', '=', 'articles.userid')
    ->orderBy('articles.views','DESC')
    ->get();

    $viewed = DB::table('users')
    ->join('articles', 'users.id', '=', 'articles.userid')
    ->orderBy('articles.views','DESC')
    ->paginate(3);

    $recent = DB::table('users')
    ->join('articles', 'users.id', '=', 'articles.userid')
    ->orderBy('articles.created_at','DESC')
    ->paginate(5);

    $popular = DB::table('users')
    ->join('articles', 'users.id', '=', 'articles.userid')
    ->orderBy('articles.views','DESC')
    ->paginate(4);

    $recents = DB::table('users')
    ->join('articles', 'users.id', '=', 'articles.userid')
    ->orderBy('articles.created_at','DESC')
    ->paginate(3);

   return view('welcome',compact('articles','trending', 'viewed', 'recent', 'popular','trend','recents','comment'));
  
    }

    public function single_page($slug){
        $article = DB::table('users')
        ->join('articles', 'users.id', '=', 'articles.userid')
        ->where('articles.slug', '=', $slug)
        ->get();
        foreach($article as $article)
        if ($article) {
            $id = $article->id;
            $number = $article->views;
            $views =  ++ $number ;
            DB::update("update articles set views = '$views'  where id = '$id'");
        }
        $popular = DB::table('users')
       ->join('articles', 'users.id', '=', 'articles.userid')
        ->orderBy('articles.views','DESC')
       ->paginate(4);

       $comments = DB::table('articles')
       ->join('comments', 'articles.slug', '=', 'comments.slug')
        ->where('comments.slug','=', $slug)
       ->get();
        
       $reply = DB::table('comments')
        ->join('replies', 'comments.id', '=', 'replies.reply_id')
        ->where('comments.slug','=', $slug)
        ->get();
        foreach($reply as $reply);
      
       $test = DB::table('comments')
       ->join('replies', 'comments.id', '=', 'replies.reply_id')
       ->where('comments.slug','=',$slug)
       ->get();

       $count = DB::table('articles')
       ->join('comments', 'articles.slug', '=', 'comments.slug')
       ->where('comments.slug','=', $slug)
       ->count();

       $recents = DB::table('users')
      ->join('articles', 'users.id', '=', 'articles.userid')
      ->orderBy('articles.created_at','DESC')
      ->paginate(3);
      
      $viewed = DB::table('users')
      ->join('articles', 'users.id', '=', 'articles.userid')
      ->orderBy('articles.views','DESC')
      ->paginate(3);
      
      $also = DB::table('users')
      ->join('articles', 'users.id', '=', 'articles.userid')
      ->orderBy('articles.created_at','DESC')
      ->get();

       $shareComponent = \Share::page(
        "https://019b-41-216-201-29.ngrok.io/single_page/$slug",
    )
    ->facebook()
    ->twitter()
    ->linkedin()
    ->telegram()
    ->whatsapp()        
    ->reddit();
        
       return view('single_page', compact('article', 'popular', 'comments', 'count', 'reply', 'test','shareComponent','recents','viewed','also'));
    }

    public function index(){
    $article = DB::table('users')
    ->join('articles', 'users.id', '=', 'articles.userid')
    ->orderBy('articles.thumb','DESC')
    ->paginate(20);
    return view('/admin/index',compact('article'));
    }

    public function manage_articles(){
        $articles = DB::table('users')
        ->join('articles','users.id','=','articles.userid')
        ->get();
        return view('/admin/manage_articles',compact('articles'));
    }

    public function view($slug){
        $article = DB::table('users')
        ->join('articles', 'users.id', '=', 'articles.userid')
        ->where('articles.slug', '=', $slug)
        ->get();
        foreach($article as $article);
        if ($article) {
            $read ='1';
            $admin_date = $current = Carbon::now();
            DB::update("update articles set admin_read = '$read',admin_read_Date = '$admin_date'  where slug = '$slug'");
        }
        return view('/admin/view', compact('article'));
    }

    public function like(Request $request , $id)
    {
        $article = DB::table('users')
        ->join('articles', 'users.id', '=', 'articles.userid')
        ->where('articles.id', '=', $id)
        ->get();
      $likes = $request->input('like');
      $like =  ++ $likes ;
      DB::update("update Articles set thumb = '$like' where id = '$id'");
      return redirect()->back()->with('status','Article was successfully Updated');
    }

    public function comment(Request $request)
    {
        Comments::create($request->except('_token'));

        return redirect()->back()->with('status','Post was successfully added');
    }

    public function reply_store(Request $request)
    {
        Reply::create($request->except('_token'));

        return redirect()->back()->with('status','Post was successfully added');
    }

    public function update(Request $request)
    {
        $current = Carbon::now();

      $id = $request->input('id');
      $title = $request->input('title');
      $content = $request->input('content');
      $p_status = $request->input('p_status');
      $AdminRemark = $request->input('AdminRemark');
      $AdminRemarkDate = $request->$current = Carbon::now();
      $r_date = $request->$current = Carbon::now();

      DB::update("update articles set title = '$title', content ='$content', p_status = '$p_status', AdminRemark = '$AdminRemark' , AdminRemarkDate = '$AdminRemarkDate', r_date = '$r_date'  where id = '$id'");
      return redirect()->back()->with('status','Article was successfully Updated');
      
    }
    
    public function test(){
        
        return view('test');
    }
}
