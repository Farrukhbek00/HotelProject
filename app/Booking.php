<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
   protected $fillable = ['arrival', 'book_time', 'checkout', 'breakfast', 'night', 'comment'];

   public function user()
   {
   		return $this->belongsTo('App\User');
   }

   public function room()
   {
   		return $this->hasOne('App\Room');
   }

}