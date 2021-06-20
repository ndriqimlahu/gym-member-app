<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailToMemberAfterIsRegisteredJob;
use App\Jobs\SendEmailToMemberWhenIsCreatedJob;
use App\Jobs\SendEmailToMemberWhenIsDeletedJob;
use App\Models\GymMemberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GymMemberController extends Controller
{
    public function storeGymMember(Request $request) {
        $gym_members = new GymMemberModel();
        $gym_members->first_name = $request->first_name;
        $gym_members->last_name = $request->last_name;
        $gym_members->birth_date = $request->birth_date;
        $gym_members->expire_date = $request->expire_date;
        $gym_members->profile_picture = $request->profile_picture;
        $gym_members->save();

        $send_email = $request->user();
        $emailJob = (new SendEmailToMemberWhenIsCreatedJob($send_email))->delay(now()->addMinutes(2));
        dispatch($emailJob);

        return redirect()->route('viewMember');
    }

    public function showDataEditMember($id) {
        $gym_members = GymMemberModel::find($id);

        return view('gym-edit-member',['gym_members' => $gym_members]);
    }

    public function editGymMember(Request $request) {
        $gym_members = GymMemberModel::find($request->id);
        $gym_members->first_name = $request->first_name;
        $gym_members->last_name = $request->last_name;
        $gym_members->birth_date = $request->birth_date;
        $gym_members->expire_date = $request->expire_date;
        $gym_members->profile_picture = $request->profile_picture;
        $gym_members->save();

        return redirect()->route('viewMember');
    }

    public function deleteGymMember(Request $request, $id) {
        $gym_members = GymMemberModel::find($id);
        $gym_members->delete();

        $send_email = $request->user();
        $emailJob = (new SendEmailToMemberWhenIsDeletedJob($send_email))->delay(now()->addSeconds(3));
        dispatch($emailJob);

        return redirect()->route('viewMember');
    }
}
