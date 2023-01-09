<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class user_score extends Model
{
  use HasFactory;
  protected $table = 'user_score';

  protected $guarded = array('id');

  public $timestamps = false;

  protected $fillable = [
    'user_id','list','score','updated_at',
  ];
/*
  public function user() {
      return $this->belongTo(App\Models\user::class);
  }*/
/*
  public function like() {
      return $this->get();
  }
*/
public function user() {
  return $this->belongsTo(user::class)->withDefault();
}
  public function score() {
      return $this->belongsTo(score::class,'foreign_key')->withDefault();
  }
/*
  public function isLikedBy($user): bool {
    return Like::where('user_id', $user->id)->where('review_id', $this->id)->first() !==null;
  }*/
  /*
  public function readItems()
  {
      return $this::get();// 全てのデータが取得できる
  }
/*
  public function checkData()
  {
    $data = DB::table($this->table)->WHERE("email" , '=' , "$email");
    return $data;
  }

  public function register_Data()
  {
    $data = DB::table($this->table)->WHERE("email" , '=' , "$email");
    return $data;
  }*/

}
/*

class contact extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'kana', 'tel' ,'email' , 'body'];

    public function readItems()
    {
        return $this::get();// 全てのデータが取得できる
    }
}
*/
