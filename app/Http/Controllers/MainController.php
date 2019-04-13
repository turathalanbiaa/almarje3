<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Content;
use App\Subject;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;
use PhpParser\Node\Expr\New_;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $subjects = Subject::all();

       return view('welcome', ['subjects' => $subjects]);
    }

    public function viewCategoriesOrContents ($id)
    {
        $category = Subject::findOrFail($id);
        if ($category->level == 1){
            $contents = Content::paginate(20);

            return view('contentsTable', ['contents' => $contents]);
        }

        $subjects = Subject::with('contents')->where('root_id', $id)->paginate(12);

        return view('welcome', ['subjects' => $subjects, 'rootID' => $id]);
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
        $storeCategory = new Subject();
        $storeCategory->root_id = $request->rootID;
        $storeCategory->title = $request->title;
        $storeCategory->level = 0;
        $storeCategory->save();

        return back();
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
        return redirect('/');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCategory(Request $request)
    {
        $update = Subject::findOrFail($request->categoryID);
        $update->title = $request->title;
        $update->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyCategory(Request $request)
    {
        $delete = Subject::findOrFail($request->delete);
        $delete->delete();
        return back();
    }

    public function createContent ($categoryID)
    {
        return view('createContent', ['categoryID' => $categoryID]);
    }

    public function storeContent (Request $request)
    {

        $store = new Content();
        $store->subject_id = $request->categoryID;
        $store->title = $request->title;
        $store->body = $request->body;
        $store->video_link = $request->videoLink;
        $store->external_link = $request->externalLink;
        $store->save();

        $category = Subject::findOrFail($request->categoryID);
        if ($category->level == 0){
            $category->level = 1;
            $category->save();
        }

        return redirect()->route('viewCategories', $request->categoryID);
    }

    public function editContent ($id)
    {
        $content = content::findOrFail($id);

        return view('editContent', ['content' => $content]);
    }

    public function updateContent (Request $request)
    {
        $store = new Content();
        $store->title = $request->title;
        $store->body = $request->body;
        $store->video_link = $request->videoLink;
        $store->external_link = $request->externalLink;
        $store->update();

        return redirect()->route('index');
    }

    public function loginForm ()
    {
        if (session()->has('user_id'))
        {
            return redirect()->route('index');
        }

        return view('loginForm');

    }

    public function login (Request $request)
    {

        $login = Admin::where('username', $request->username)->where('password', md5($request->password))->first();

        if ($login) {
            session()->put('user_id', $login->id);

            return redirect()->route('index');
        }

        return redirect()->route('loginForm');
    }

}
