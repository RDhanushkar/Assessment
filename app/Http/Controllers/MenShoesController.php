<?php

namespace App\Http\Controllers;

use App\Models\MenShoes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use Validator;
use Auth;


class MenShoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menShoes = MenShoes::latest()->paginate(5);
        return view("admin.mshoes.index", compact('menShoes'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.mshoes.create");
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
        $menShoes = new MenShoes;
        $menShoes->name = $request->input('name');
        
        
        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image/',$filename);
            $menShoes->photo = $filename;
        }
        
        
        $menShoes->price = $request->input('price');
        $menShoes->detail = $request->input('detail');
        $menShoes->save();
        return redirect()->back()->with('status','Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenShoes  $menShoes
     * @return \Illuminate\Http\Response
     */
    public function show(MenShoes $menShoes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenShoes  $menShoes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $menShoes = MenShoes::find($id);
        return view('admin.mshoes.edit',compact('menShoes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenShoes  $menShoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $menShoes = MenShoes::find($id);
        $menShoes->name = $request->input('name');
        
        
        if($request->hasfile('photo'))
        {
            $destination = 'image/'. $menShoes->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image/',$filename);
            $menShoes->photo = $filename;
        }
        
        
        $menShoes->price = $request->input('price');
        $menShoes->detail = $request->input('detail');
        $menShoes->update();
        return redirect()->back()->with('status','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenShoes  $menShoes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $menShoes = MenShoes::find($id);
        $destination = 'image/'. $menShoes->photo;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $menShoes->delete();
        return redirect()->back()->with('status','Product updated successfully');
    }
}
