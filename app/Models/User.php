<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'is_active',
        'avatar',
        'balance'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function items(){
        return $this->hasMany(Item::class);
    }
    public function itemsRated(){
        return $this->belongsToMany(Item::class)
            ->withPivot('rating')
            ->withTimestamps();
    }
    public function itemsQuant($iscart){
        return $this->belongsToMany(Item::class,'item_type')
            ->wherePivot('iscart', $iscart)
            ->withPivot('quantity', 'iscart', 'kol', 'sum')
            ->withTimestamps();
    }


    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }
}
