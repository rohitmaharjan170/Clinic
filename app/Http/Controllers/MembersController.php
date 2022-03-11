<?php

namespace App\Http\Controllers;

use App\members;
use Illuminate\Http\Request;
use DB;
use Session;
use File;
use Toastr;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member['data'] = members::get();
        $member['dept'] = DB::table('departments')->get();
        return view('admin.member.member_list', $member);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dept['data'] = DB::table('departments')->get();
        return view('admin.member.add_member', $dept);
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
            'mem_name'           => 'required',
            'mem_phone'          => 'required',
            'mem_address'        => 'required',
            'mem_post'           => 'required',
            'mem_dept_id'        => 'required',
            'mem_img'            => 'required'
        ]);
        if($request->hasFile('mem_img')) {
            $image_type = $request->file('mem_img')->getClientOriginalExtension();
            $path = "images/";
            $name = 'member_'.time().".".$image_type;
            $image = $request->file('mem_img')->move($path,$name);
        }
        $data = [
            'mem_name'           => $request->mem_name,
            'mem_phone'          => $request->mem_phone,
            'mem_address'        => $request->mem_address,
            'mem_post'           => $request->mem_post,
            'mem_dept_id'        => $request->mem_dept_id,
            'mem_img'            => $image
        ];
        members::create($data);
        Toastr::success('Added Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\members  $members
     * @return \Illuminate\Http\Response
     */
    public function show(members $members)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\members  $members
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member['member']  = members::findOrFail($id);
        $member['data'] = DB::table('departments')->get();
        return view('admin.member.edit_member', $member);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\members  $members
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'mem_name'           => 'required',
            'mem_phone'          => 'required',
            'mem_address'        => 'required',
            'mem_post'          => 'required'
        ]);
        if($request->hasFile('mem_img')) {
            $image_type = $request->file('mem_img')->getClientOriginalExtension();
            $path = "images/";
            $name = 'member_'.time().".".$image_type;
            $image = $request->file('mem_img')->move($path,$name);
            if(File::exists(members::findOrFail($id)->mem_img))
            {
                File::delete(members::findOrFail($id)->mem_img);
            }
            $data = [
                'mem_name'           => $request->mem_name,
                'mem_phone'          => $request->mem_phone,
                'mem_address'        => $request->mem_address,
                'mem_post'           => $request->mem_post,
                'mem_dept_id'        => $request->mem_dept_id,
                'doc_img'            => $image
            ];
        } else {
            $data = [
                'mem_name'           => $request->mem_name,
                'mem_phone'          => $request->mem_phone,
                'mem_address'        => $request->mem_address,
                'mem_post'           => $request->mem_post,
                'mem_dept_id'        => $request->mem_dept_id
            ];
        }
        members::where('mem_id', $id)->update($data);
        Toastr::success('Updated Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\members  $members
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        members::where('mem_id', $id)->delete();
        Toastr::success('Deleted Successfully', 'Success', ["positionClass" => "toast-top-right"]);
        return back();
    }
}
