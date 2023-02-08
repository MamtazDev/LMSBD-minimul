<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
=======
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
>>>>>>> zerin
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
<<<<<<< HEAD
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
=======
    use HasApiTokens, HasFactory, Notifiable;
>>>>>>> zerin

    /**
     * The attributes that are mass assignable.
     *
<<<<<<< HEAD
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
=======
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'image',
        'email',
        'password',
        'bio',
        'phone',
        'date_of_birth',
        'website'
>>>>>>> zerin
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array<int, string>
>>>>>>> zerin
     */
    protected $hidden = [
        'password',
        'remember_token',
<<<<<<< HEAD
        'two_factor_recovery_codes',
        'two_factor_secret',
=======
>>>>>>> zerin
    ];

    /**
     * The attributes that should be cast.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array<string, string>
>>>>>>> zerin
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
<<<<<<< HEAD

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];


    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function student()
    {
       return $this->hasMany(User::class, 'course_id');
    }

    public function batch()
    {
        return $this->belongsTo(Batch::class, 'batch_id','id');
    }
=======
>>>>>>> zerin
}
