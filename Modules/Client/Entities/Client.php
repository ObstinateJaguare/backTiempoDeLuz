<?php

namespace Modules\Client\Entities;

use Bookstores\Eloquent\Blueprint;
use Modules\Client\Contracts\ClientEntity;
use Modules\Client\Entities\Concerns\ClientEntityGetAttributeData;

/**
 * En: Data entity of the module.
 * Es: Entidad de datos del módulo.
 *
 * @package Plan
 */
class Client extends Blueprint implements ClientEntity
{
    use ClientEntityGetAttributeData;

    /**
     * En: The attributes that are mass assignable.
     * Es: Los atributos que se pueden asignar en masa.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'name',
        'lastName',
        'dateOfBirth',
        'phone',
        'email',
        'city',
        'country',
        'status',
        'createdAt',
        'updatedAt'
    ];

}

