<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'body',
    // ];
    ///////////////////////////or/
    /*table name*/
    protected $table ='posts';
    /*primary key */
    public $primarykey ='id';
    /*timestamp */
    public $timestamps =true ;
   /////////////////////////////////////////////////model relationship
    

      public function user()
      {
          return $this->belongsTo(User::class);
      }

}
