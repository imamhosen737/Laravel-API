<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $contact_data = Contact::get();
        return response([
            'status' => true,
            'message' => 'Data fetched successfully',
            'data' => $contact_data
        ], 200);
    }

    public function contact_insert(Request $request)
    {
        $data = new Contact();
        $data->contact_headline = $request->contact_headline;
        $data->contact_description = $request->contact_description;
        $data->save();

        return response([
            'status' => true,
            'message' => 'Contact data inserted succesfully',
            'data' => $data
        ], 201);
    }

    public function contact_update(Request $request, $id)
    {
        $data = Contact::find($id);
        $data->contact_headline = $request->contact_headline;
        $data->contact_description = $request->contact_description;
        $data->update();

        return response([
            'status' => true,
            'message' => 'Contact data updated succesfully',
            'data' => $data
        ], 201);
    }
}
