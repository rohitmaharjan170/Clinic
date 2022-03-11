<?php

namespace App\Http\Controllers;

use App\ShareHolders;
use Illuminate\Http\Request;
class ShareHoldersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.shareholders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	 $dept['data'] = ShareHolders::get();
    	 return view('admin.shareholders.list', $dept);
        // $sh['data'] = DB::table('shareholders')->get();
        // return view('admin.shareholders.all', $sh);
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
            'sh_member_no'    => 'required',
            'sh_member_name' => 'required',
        ]);
        $data = [
            'sh_member_no'    => $request->sh_member_no,
            'sh_member_name' => $request->sh_member_name,
            'sh_mobile_no' => $request->sh_mobile_no,
            'sh_member_age' => $request->sh_member_age,
            'sh_membership_date' => $request->sh_membership_date,
        ];
        $id = $request->sh_id;
        if($id) {
            ShareHolders::where('sh_id', $id)->update($data);
            $response = [
                'msgtype' => 'success',
                'message' => 'Data Updated Successfully',
            ];
            echo json_encode($response);
        } else {
            ShareHolders::create($data);
            $response = [
                'msgtype' => 'success',
                'message' => 'Data Inserted Successfully',
            ];
            echo json_encode($response);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShareHolders  $shareholders
     * @return \Illuminate\Http\Response
     */
    public function show(ShareHolders $shareholders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShareHolders  $shareholders
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ShareHolders::find($id);
        echo json_encode($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShareHolders  $shareholders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShareHolders  $shareholders
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ShareHolders::where('sh_id', $id)->delete();
        $response = [
            'msgtype' => 'success',
            'message' => 'Data Deleted Successfully',
        ];
        echo json_encode($response);
    }
}
