<?php

namespace App\Http\Controllers;

use App\Models\AttendantRecord;
use Illuminate\Http\Request;

class AttendantRecordController extends Controller
{
    //Display all the list attendants from DB
    public function index()
    {
        $attendants = AttendantRecord::all();
        return response()->json(
            [
                'message' => 'Success', 'data' => $attendants,
            ],
        );
    }

    public function show($id)
    {
        $attendant = AttendantRecord::find($id);

        return response()->json(
            [
                'message' => 'Display Successfully', 'data' => $attendant,
            ],
        );
    }

    public function store(Request $request)
    {
        $attendant = AttendantRecord::create($request->all());
        return response()->json(
            [
                'message' => 'Created Successfully', 'data' => $attendant,
            ],
        );
    }

    public function update(Request $request, $id)
    {
        $attendant = AttendantRecord::find($id);
        $attendant->update($request->all());
        return response()->json(
            [
                'message' => 'Updated Successfully', 'data' => $attendant,
            ],
        );
    }

    public function destroy($id)
    {
        $attendant = AttendantRecord::find($id);
        $attendant->delete();
        return response()->json(
            [
                'message' => 'Deleted Successfully', 'data' => null,
            ],
        );
    }
}
