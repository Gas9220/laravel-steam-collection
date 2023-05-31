<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $guarded = [];
  
    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
  
    public function genres(){
        return $this->belongsToMany(Genre::class)->withTimestamps();

    public function platforms(){
        return $this->belongsToMany(Platform::class)->withTimestamps();
    }
      
    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }
}
