<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'role_id'
    ];

//RELACIONES
    public function role()
    {
        return $this-> belongsTo('App/Role');
    }

    public function users()
    {
        return $this->belongToMany('App/User')->withTimestamps();
    }


//ALMACENAMIENTO


//VALIDACION


//RECUPERACION DE INFORMACION


//OTRAS OPERACIONES





}
