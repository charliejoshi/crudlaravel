<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;

class formController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = form::latest()->paginate(5);

    

        return view('forms.index',compact('forms'))

            ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.create');
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

            'fname' => 'required',
            'lname' => 'required',
            'age' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:100',
            'email' => 'required',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:12',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $input = $request->all();

  

        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";
    }

    form::create($input);
    return redirect()->route('forms.index')

    
    ->with('success','form created successfully.');
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(form $form)
    {
        return view('forms.show',compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(form $form)
    {
        return view('forms.edit',compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, form $form)
    {
        $request->validate([

            'fname' => 'required',
            'lname' => 'required',
            'age' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:100',
            'email' => 'required',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:12',

        ]);
        $input = $request->all();

  

        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }else{

            unset($input['image']);
        }
            $form->update($input);

            return redirect()->route('forms.index')
    
                            ->with('success','details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(form $form)
    {
        $form->delete();

     

        return redirect()->route('forms.index')

                        ->with('success','form deleted successfully');
    }
}
