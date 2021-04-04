<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymMemberModel extends Model
{
    use HasFactory;

    public $table = 'gym_members';

    public function getId() {
        return $this->id;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getBirthDate() {
        return $this->birth_date;
    }

    public function getExpireDate() {
        return $this->expire_date;
    }

    public function getProfilePicture() {
        return $this->profile_picture;
    }
}
