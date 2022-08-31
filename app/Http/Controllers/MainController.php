<?php

namespace App\Http\Controllers;

use App\Models\librarymod;
use App\Http\Requests\CRUDRequest;
use Illuminate\Http\Requests;

class MainController extends Controller
{
    public function main(){
    	return view('main');
    }

    public function author(){
        $adds = new librarymod();
   		return view('author', ['allbooks' => $adds::all()]); 
    }


    public function books(){
        $adds = new librarymod();
    	return view('books', ['allbooks' => $adds::all()]);	
    }

    public function thisbook($id){
        $adds = new librarymod();
        return view('thisbook', ['allbooks' => $adds->find($id)]);    
    }

    public function thisbookupd($id){
        $adds = new librarymod();
        return view('thisbookupd', ['allbooks' => $adds->find($id)]);
    }

    public function thisbookdel($id){
        librarymod::find($id)->delete();
        return redirect()->route('books')->with('success', 'Deleted! U R BREATHTALKING!!');
    }

    public function thisbookcrudok($id, CRUDRequest $request) {

    $adds = librarymod::find($id);
    $adds->name = $request->input('name');
    $adds->surname = $request->input('surname');
    $adds->book = $request->input('book');

    $adds->save();

    return redirect()->route('thisbook', $id)->with('success', 'Updated! U R BREATHTALKING!!');
    }

    public function add(){
    	$adds = new librarymod();
        return view('add', ['add' => $adds->all()]);
    }

    public function add_check(CRUDRequest $request) {

    $adds = new librarymod();
    $adds->name = $request->input('name');
    $adds->surname = $request->input('surname');
    $adds->book = $request->input('book');

    $adds->save();

    return redirect()->route('main')->with('success', 'Successfull! U R BREATHTALKING!!');
    }




}