<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model

{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/JmsyBQuBMcd2q9ame82znrhpYCEh8u8DNaOXuDNy.png';

        return '/storage/' .$imagePath;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
