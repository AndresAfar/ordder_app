<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'id';

    protected $fillable = [
        'role_name',
    ];

    // Define la relación con la tabla 'usuario'
    public function users()
    {
        return $this->hasMany(User::class, 'rol_id_rol', 'id');
    }
}
