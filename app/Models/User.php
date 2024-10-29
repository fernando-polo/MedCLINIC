<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\DescripUser;
use App\Models\Cita;
use Filament\Panel;
use Filament\Models\Contracts\FilamentUser;
use Spatie\Permission\Traits\HasRoles;

// class User extends Authenticatable implements FilamentUser
class User extends Authenticatable implements FilamentUser


{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'confirm_password',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'confirm_password',
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
            'confirm_password' => 'hashed'
        ];
    }

    // public function canAccessPanel(): bool
    // {
    //     return $this->hasRole(['Administrador', 'SuperAdmin', 'Paciente']);
    // }
    public function canAccessPanel(Panel $panel): bool
    {
        if ($panel->getId() === 'admin') {
            return $this->hasRole(['Administrador', 'SuperAdmin', 'Doctor']);       
         }
 
        return true;
    }

    public function DescripUser(){
        return $this->hasOne(DescripUser::class);
    }

    public function Cita(){
        return $this->hasMany(Cita::class);
    }
}
