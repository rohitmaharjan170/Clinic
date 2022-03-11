<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Doctor;
use App\members;
class MasterController extends Controller
{
    

    public function home()
    {
        return view('master_index.index');
    }
    
    public function onlinePay()
    {
        return view('master_index.onlinepay');
    }

    public function contact()
    {
        return view('master_index.contact');
    }

    public function bod()
    {
        return view('master_index.bod');
    }

    public function showdoctors(Request $request)
    {
        $dept = Department::get();
        $items = Doctor::orderBy('doc_id','ASC')->paginate(12);
        return view('master_index.doctor',compact('items','dept'))
            ->with('i', ($request->input('page', 1) - 1) * 12);

        // return view('master_index.doctor');
    }

    public function showmembers(Request $request)
    {
        $dept = Department::get();
        $items = members::orderBy('mem_id','ASC')->paginate(12);
        return view('master_index.member',compact('items','dept'))
            ->with('i', ($request->input('page', 1) - 1) * 12);
    }

    public function gallery()
    {
        return view('master_index.gallery');
    }

    public function members()
    {
        return view('master_index.members');
    }
    
    public function shareholders()
    {
        return view('master_index.shareholders');
    }

    public function about()
    {
        return view('master_index.about_us');
    }

    
}
