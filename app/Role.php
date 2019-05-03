<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name', 'slug', 'description'
    ];

//RELACIONES
    public function permissions() // permissions en plural porque un rol tiene muchos permisos
    {
        return $this-> hasMany('App/Permission');
    }

    public function users()
    {
        return $this->belongToMany('App/User');
    }





//ALMACENAMIENTO


//VALIDACION


//RECUPERACION DE INFORMACION


//OTRAS OPERACIONES



}
