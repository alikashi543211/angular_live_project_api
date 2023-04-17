<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Storage;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\Facades\JWTAuth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'username',
    ];
    protected $appends = [
        'is_verified',
    ];



    /**
     * Get the ProfilePicture
     *
     * @param  string  $value
     * @return string
     */
    public function getPhotoAttribute($value)
    {
        if($value)
        {
            if (env('AWS_ENV')) {

                $value = Storage::temporaryUrl($value, now()->addDay());
            } else {
                $value = url($value);
            }
        }
        return $value;
    }
    /**
     * Get the isVerified
     *
     * @param  string  $value
     * @return string
     */
    public function getIsVerifiedAttribute($value)
    {
        if($this->email_verified_at)
        {
            return true;
        }
        return false;
    }

    /* Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'role_id',
        'jwt_sign',
        'email_verified_at',
        'mobile_verified_at',
        'verification_code',
        'verification_code_email',
        'verification_code_mobile',
        'social_user_id',
        'social_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get all of the questionnaires for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questionnaires(): HasMany
    {
        return $this->hasMany(Questionnaire::class, 'user_id', 'id');
    }

    /**
     * The questions that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(Question::class, 'questionnaires', 'user_id', 'question_id');
    }

}
