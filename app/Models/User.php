<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login' => 'datetime'
    ];

    public function getRoleTextAttribute()
    {
        if($this->role == 'developer'){
            return 'برنامه نویس';
        }
        elseif($this->role == 'admin'){
            return 'ادمین';
        }
        return 'کاربر';
    }

    protected $fillable = [
        'first_name',
        'last_name',
        'role',
        'email',
        'email_verified_at',
        'password',
        'last_login',
        'avatar',
    ];



    protected $appends = ['full_name','role_text'];

    public function getFullNameAttribute()
    {
        if (trim(strlen($this->first_name)) > 0 || trim(strlen($this->last_name)) > 0) {
            return "{$this->first_name} {$this->last_name}";
        }
        return $this->mobile;
    }

    public function getAvatarCharacterAttribute()
    {
        return $this->first_name[0] . $this->last_name[0];
    }

    public function getAvatarColorAttribute()
    {
        $colors = ['success', 'primary', 'info', 'danger', 'dark', 'warning'];
        $id = "{$this->id}";
        $index = $id[strlen($id) - 1];

        $index = $index == 0 ? 11 : $index;
        $index = $index > 6 ? abs($index - 5) : $index;

        return $colors[$index - 1];
    }

    public function isAdmin($checkRole = false)
    {
        return $this->role === 'admin';
    }

    public function isCustomer($checkRole = false)
    {
        return $this->role === 'user';
    }

    /**
     * @param string|array $role
     * @return bool
     */
    public function hasBasicRole($role)
    {
        $roles = is_array($role)
            ? $role
            : explode('|', $role);

        return in_array($this->role, $roles);
    }

}
