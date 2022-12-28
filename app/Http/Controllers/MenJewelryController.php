<?php

namespace App\Http\Controllers;

use App\Models\MenJewelry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use Validator;
use Auth;

class MenJewelryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menJewelry = MenJewelry::latest()->paginate(5);
        return view("admin.mjewelry.index", compact('menJewelry'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("admin.mjewelry.create");
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
        $menJewelry = new menJewelry;
        $menJewelry->name = $request->input('name');
        
        
        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image/',$filename);
            $menJewelry->photo = $filename;
        }
        
        
        $menJewelry->price = $request->input('price');
        $menJewelry->detail = $request->input('detail');
        $menJewelry->save();
        return redirect("admin.mjewelry.index")->with('success','Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenJewelry  $menJewelry
     * @return \Illuminate\Http\Response
     */
    public function show(MenJewelry $menJewelry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenJewelry  $menJewelry
     * @return \Illuminate\Http\Response
     */
    public function editj(MenJewelry $menJewelry)
    {
        //
        return view('admin.mjewelry.edit',compact('menJewelry'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenJewelry  $menJewelry
     * @return \Illuminate\Http\Response
     */
    public function updateJ(Request $request, MenJewelry $menJewelry)
    {
        //
        $menJewelry->name = $request->input('name');
        
        
        if($request->hasfile('photo'))
        {
            $destination = 'image/'. $menJewelry->photo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('photo');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('image/',$filename);
            $menJewelry->photo = $filename;
        }
        
        
        $menJewelry->price = $request->input('price');
        $menJewelry->detail = $request->input('detail');
        $menJewelry->update();
        return redirect("admin.mjewelry.index")->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenJewelry  $menJewelry
     * @return \Illuminate\Http\Response
     */
    public function destroyJ(MenJewelry $menJewelry)
    {
        //
        $destination = 'image/'. $menJewelry->photo;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $menJewelry->delete();
        return redirect("admin.mjewelry.index")->with('success','Product deleted successfully');
    }
}
