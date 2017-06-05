<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notebook;

class NotebooksController extends Controller
{





public function index() {

    	$books= notebook::all();

    	return view('notebooks.index',compact('books'));
}




public function create(){

return view('notebooks.create');

} 
public function store(Request $request){
 $blog=new notebook;
        $blog->name=$request->name;
        
        $blog->save();
return redirect('/notebooks');
}




public function edit($id){
	/*$notebook=Notebook::where('id',$id)->first();

	return view('notebooks.edit')->with('notebook','$notebook');
*/



         $blog=Notebook::findOrFail($id);
        return view('notebooks.edit',compact('notebook'));

	 /*$blog=Notebook::findOrFail($id);
        return view('notebooks.edit',compact('notebook'));*/
}






  public function update(Request $request, $id)
    {
        

/*
$notebook=Notebook::where('id',$id)->first();
$notebook->update($request->all());
return redirect('/notebooks');*/

        $notebook=Notebook::findOrFail($id);
        $notebook->name=$request->name;
        
        $notebook->save();

        return redirect()->route('notebooks.index')->with('alert-success');
    }
}