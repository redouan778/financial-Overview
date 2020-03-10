<?php

namespace App\Http\Controllers;

use App\Income;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Traits\ImageUpload;
use Carbon\Carbon;


class IncomeController extends Controller
{

    use ImageUpload; //Using our created Trait to access inside trait method

    /**
     * @param Income $income
     * @return string
     */
    public function index(Income $income)
    {
        $general = Income::where('Category', 'General')->get();
        $loaning = Income::where('Category', 'Loaning')->get();
        $reminder = Income::where('Category', 'Reminder')->get();


        return view('income.index', compact('general',  'loaning', 'reminder'));
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
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|string
     */
    public function store(Request $request)
    {

        $carbon = new Carbon('now');


        $this->validate($request,[
            'amount' => 'required',
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        $category = new Income([
            'amount' => $request->get('amount'),
            'title' => $request->get('title'),
            'user_id' => Auth::id(),
            'description' => $request->get('description'),
            'category' => $request->get('category'),
            'date' =>  $carbon->format('y-m-d')
        ]);


//        $category->img = $request->img;
//
//        if($category->img){
//            try {
//                $filePath = $this->UserImageUpload($category->img); //Passing $data->image as parameter to our created method
//                $category->img = $filePath;
                $category->save();

                return redirect('/');
//
//            } catch (Exception $e) {
//
//                return 'asd';
//            }
//        }
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
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $address = Income::find($id);
        $address->delete();

        return redirect('/');
    }
}
