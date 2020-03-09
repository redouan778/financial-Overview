<?php

namespace App\Http\Controllers;

use App\Income;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUpload;


class IncomeController extends Controller
{

    use ImageUpload; //Using our created Trait to access inside trait method

    /**
     * @param Income $income
     * @return string
     */
    public function index(Income $income)
    {
        $r = Income::take(10)->get();

        return view('income.index', compact('r'));
    }

    /**
     *
     */
    public function create()
    {
        return view('income.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'img' => 'required|img|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        dd('dd');

        $category = new Income([
            'amount' => $request->get('amount'),
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'category' => $request->get('category'),
            'img' => $request->get('img'),
            'user_id' => Auth::id(),

        ]);

dd($category->amount);

        $category->image = $request->image;
        if($category->image){
            try {
                $filePath = $this->UserImageUpload($category->image); //Passing $data->image as parameter to our created method
                $category->image = $filePath;
                $category->save();
                return redirect('/');

            } catch (Exception $e) {
                //Write your error message here
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Income  $income
     * @return Response
     */
    public function show(Income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Income  $income
     * @return Response
     */
    public function edit(Income $income)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Income  $income
     * @return Response
     */
    public function update(Request $request, Income $income)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Income  $income
     * @return Response
     */
    public function destroy(Income $income)
    {
        //
    }
}
