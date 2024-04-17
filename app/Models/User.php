<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
    ];

    protected function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
    public function blogs()
    {
    return $this->hasMany(Blog::class, 'user_id'); 
    }

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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    static public function getSingle($id)
    {
        return self::find($id);
    }
    static public function getFounders()
    {
        return self::select('users.*')
            ->where('role_id', '=', '1') 
            ->where('is_deleted', '=', '0')
            ->get();

    }
    static public function getRecordUser(){
        return self::select('users.*')
        ->where('role_id','=','2')
        ->where('is_deleted','=','0')
        ->orderBy('id','desc')
        ->paginate(10);
    }
    
    public function getProfile(){
        if(!empty($this->image_file) && file_exists('upload/users/'.$this->image_file)){
            return url('upload/users/'.$this->image_file);
        }else{
            return url('upload/users/userplaceholder.jpg');;
        }
    }

}
