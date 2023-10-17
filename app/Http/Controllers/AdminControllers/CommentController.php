<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listComment= Comment::with(['movie','user'])->where('Deleted',0)->get();
      
        
        return view("AdminViews.index",[
           'page'=>'comment',
          
       "danhsach"=>$listComment ]);
         // return response()->json($listComment,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Comment= Comment::find($id);
        return view("AdminViews.index",['page'=>'commentShow'],['Comment'=>$Comment]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
     
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $newComment= Comment::where('id',$id)->first();
        $newComment->Deleted=1;
        $newComment->save();
       // return $this->index();
       return redirect("/admin/comment");
    }
}
