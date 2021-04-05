<?php

namespace App\Http\Controllers;

use App\Models\GymMemberModel;
use Illuminate\Http\Request;

class GymMemberController extends Controller
{
    public function viewGymMember() {
        $viewGymMember = new \App\Models\GymMemberModel();

        return view('gym-view-member', [
            "viewGymMember" => $viewGymMember
        ]);
    }

    public function storeGymMember(Request $request) {
        $gym_members = new GymMemberModel();
        $gym_members->first_name = $request->first_name;
        $gym_members->last_name = $request->last_name;
        $gym_members->birth_date = $request->birth_date;
        $gym_members->expire_date = $request->expire_date;
        $gym_members->profile_picture = $request->profile_picture;
        $gym_members->save();

        return redirect()->route('viewMember');
    }

    public function deleteGymMember($id) {
        $gym_members = GymMemberModel::find($id);
        $gym_members->delete();

        return redirect()->route('viewMember');
    }
}
