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
     * En: The relationships that should always be loaded.
     * Es: Las relaciones que siempre deben estar cargadas.
     *
     * @var array
     */
    protected $with = ['base', 'hotel'];

    /**
     * En: The attributes that are mass assignable.
     * Es: Los atributos que se pueden asignar en masa.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'name',
        'base_id',
        'hotel_id',
        'start_date',
        'final_date',
        'is_commissionable',
        'category',
        'market_code',
        'extra_nights',
        'profitability_indicator',
        'quantity_indicator',
        'restriction',
        'setting_indicator',
        'adjustment_amount',
        'adjustment_percentage',
        'status'
    ];

}

