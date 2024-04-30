<?php

namespace App\Models;

use App\Models\LevelModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserModel extends Authenticatable implements JWTSubject
{
    use HasFactory;

    public function getJWTIdentifier(){
        return $this->getKey();
    }
    
    public function getJWTCustomClaims(){
        return [];
    }
    
    protected $table = 'm_user';
    protected $primaryKey = "user_id";
    protected $fillable = ['level_id', 'username', 'nama', 'password'];

    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id');
    }

    // public function userLainnya(): HasMany
    // {
    //     return $this->hasMany(UserModel::class, 'user_id');
    // }

    // protected $table = "m_user";
    // public $timestamps = false;
    // protected $primaryKey = 'user_id';
    // protected $fillable = [
    //     'user_id',
    //     'level_id',
    //     'username',
    //     'nama',
    //     'password',
    // ];

    // public function level(): BelongsTo
    // {
    //     return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    // }
    
}
