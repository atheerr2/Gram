<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        $imagePath =  ($this->image) ? $this->image : '/profile/EniuSNFabRSgK9yNJb1j7H19i5bsO720Ef2H5lsQ.png';
        return '/storage/' . $imagePath;
    }
    public function followers(){
        return $this->belongsToMany(User::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
