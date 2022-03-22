<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function general()
    {
        $general_data = General::get();
        return response([
            'status' => true,
            'message' => 'Data fetched successfully',
            'data' => $general_data
        ], 200);
    }
  
    public function general_insert(Request $request)
    {
        $data = new General();
        $data->name = $request->name;
        $data->sub_title = $request->sub_title;
        $data->title = $request->title;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->fb = $request->fb;
        $data->tw = $request->tw;
        $data->instagram = $request->instagram;
        $data->linkedin = $request->linkedin;
        $data->save();

        return response([
            'status' => true,
            'message' => 'General data inserted succesfully',
            'data' => $data
        ], 201);
    }

    public function general_update(Request $request, $id)
    {
        $data = General::find($id);
        $data->name = $request->name;
        $data->sub_title = $request->sub_title;
        $data->title = $request->title;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->fb = $request->fb;
        $data->tw = $request->tw;
        $data->instagram = $request->instagram;
        $data->linkedin = $request->linkedin;
        $data->update();

        return response([
            'status' => true,
            'message' => 'General data updated successfully',
            'data' => $data
        ], 200);
    }
}
