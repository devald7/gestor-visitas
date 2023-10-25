<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Visita
 *
 * @property $id
 * @property $documento
 * @property $visitante
 * @property $telefono
 * @property $entidad_visitante
 * @property $area_destino
 * @property $motivo_visita
 * @property $hora_ingreso
 * @property $hora_salida
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Visita extends Model
{
    use SoftDeletes;

    static $rules = [
		'documento' => 'required',
		'visitante' => 'required',
		'telefono' => 'required',
		'entidad_visitante' => 'required',
		'area_destino' => 'required',
		'motivo_visita' => 'required',
		'hora_ingreso' => 'required',
		'hora_salida' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['documento','visitante','telefono','entidad_visitante','area_destino','motivo_visita','hora_ingreso','hora_salida'];



}
