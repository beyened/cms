<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $date = ['deleted_at'];

//    protected $table = 'posts';
//    protected $primaryKey = 'id';
      protected $fillable = [
          'title',
          'body'
          ];

    // Inverse One-to-One Relationship
      public function user(){

          return $this->belongsTo('App\Models\User');

      }

      public function photos(){

          return $this->morphMany(Photo::class, 'imageable');

      }

    /**
     * Get all of the tags for the post.
     */
      public function tags(){
          return $this->morphToMany(Tags::class, 'taggable');
      }

      public function getPathAttribute($value){

          return $this->directory . $value;
      }

//      public static function scopeLatest($query){
//
//          return $query->orderBy('id', 'asc')->get();
//      }


}
