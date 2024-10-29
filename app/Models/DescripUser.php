<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class DescripUser extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'telefono',
    //     'confirm_telefono',
    //     'sexo',
    //     'fecha_nacimiento',
    //     'nss',
    //     'curp',
    //     'cedula',
    //     'historial_medico'
    // ];

    protected $guarded = [];

    public function User(){
        return $this->belongsTo(User::class);
    }


}
