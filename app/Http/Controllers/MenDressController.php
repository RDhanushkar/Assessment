<?php

namespace App\Http\Controllers;

use App\Models\MenDress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use Validator;
use Auth;

class MenDressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menDress = MenDress::latest()->paginate(5);
        return view("admin.mdress.index", compact('menDress'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.mdress.create");
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
        $menDress = new MenDress;
        $menDress->name = $request->input('name');
        
        
        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image/',$filename);
            $menDress->photo = $filename;
        }
        
        
        $menDress->price = $request->input('price');
        $menDress->detail = $request->input('detail');
        $menDress->save();
        return redirect()->back()->with('status','Product created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenDress  $menDress
     * @return \Illuminate\Http\Response
     */
    public function show(MenDress $menDress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenDress  $menDress
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $menDress = MenDress::find($id);
        return view('admin.mdress.edit',compact('menDress'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenDress  $menDress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $menDress = MenDress::find($id);
        $menDress->name = $request->input('name');
        
        
        if($request->hasfile('photo'))
        {
            $destination = 'image/'. $menDress->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image/',$filename);
            $menDress->photo = $filename;
        }
        
        
        $menDress->price = $request->input('price');
        $menDress->detail = $request->input('detail');
        $menDress->update();
        return redirect()->back()->with('status','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenDress  $menDress
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $menDress = MenDress::find($id);
        $destination = 'image/'. $menDress->photo;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $menDress->delete();
        return redirect()->back()->with('status','Product deleted successfully');

    }
}
