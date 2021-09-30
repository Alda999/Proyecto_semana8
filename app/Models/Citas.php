<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Citas
 * @package App\Models
 * @version September 30, 2021, 12:42 am UTC
 *
 * @property integer $id_paciente
 * @property string $fecha_cita
 * @property integer $id_doctor
 */
class Citas extends Model
{
    //use SoftDeletes;

    public $table = 'citas';
    protected $primaryKey= 'idcitas';
    public $timestamps =false;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_paciente',
        'fecha_cita',
        'id_doctor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idcitas' => 'integer',
        'id_paciente' => 'integer',
        'fecha_cita' => 'string',
        'id_doctor' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_paciente' => 'nullable|integer',
        'fecha_cita' => 'nullable|string|max:45',
        'id_doctor' => 'nullable|integer'
    ];

    
}
