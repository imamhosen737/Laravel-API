<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $about_data = About::get();
        return response([
            'status' => true,
            'message' => 'Data fetched successfully',
            'data' => $about_data
        ], 200);
    }
  
    public function about_insert(Request $request)
    {
        $data = new About();
        $data->top_title = $request->top_title;
        $data->top_description = $request->top_description;
        $data->sub_title = $request->sub_title;
        $data->sub_description = $request->sub_description;
        $data->dob = $request->dob;
        $data->address = $request->address;
        $data->save();

        return response([
            'status' => true,
            'message' => 'About data inserted succesfully',
            'data' => $data
        ], 201);
    }

    public function about_update(Request $request, $id)
    {
        $data = About::find($id);
        $data->top_title = $request->top_title;
        $data->top_description = $request->top_description;
        $data->sub_title = $request->sub_title;
        $data->sub_description = $request->sub_description;
        $data->dob = $request->dob;
        $data->address = $request->address;
        $data->update();

        return response([
            'status' => true,
            'message' => 'About data updated successfully',
            'data' => $data
        ], 200);
    }
}
