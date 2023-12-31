<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function ProfileImage(){
        $imagePath = ($this->image) ? $this->image : 'uploads/ZwVwkTPXsztBTPwkEz8X3BV1p5QxMuY9JsOkcHtA.jpg';
        return '/storage/' . $imagePath;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
