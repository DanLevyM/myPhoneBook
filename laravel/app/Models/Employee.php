<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
            /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'sexe',
        'last_name',
        'first_name',
        'address',
        'postcode',
        'city',
        'phone_number',
        'email',
        'enterprise_name',
        'enterprise_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function enterprises()
    {
        return $this->belongsToMany('App\Models\Enterprise');
    }
}
