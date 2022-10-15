<?php

namespace Modules\Client\Transformers;

use Illuminate\Http\Request;
use Modules\Client\Contracts\ClientEntity;
use Illuminate\Http\Resources\Json\JsonResource;


/**
 * En: Collection of resources.
 * Es: Colección de recursos.
 *
 * @package ClientResource
 */
class ClientResource extends JsonResource
{
    /**
     * En: Transform the resource into an array.
     * Es: Transforma el recurso en un array.
     *
     * @param  Request
     * @return array
     */
    public function toArray($request): array
    {
        /** @var ClientEntity $clientEntity */
        $clientEntity = $this->resource;
        return [
            'id'                      => $clientEntity->getId(),
            'code'                    => $clientEntity->getCode(),
            'name'                    => $clientEntity->getName(),
            'baseId'                  => $clientEntity->getBaseId(),
            'base'                    => $this->when($request->input('_embed:base') === 'true', new BaseWithoutHotelsResource(
                $clientEntity->getBase()
            )),
            'hotelId'                 => $clientEntity->getHotelId(),
            'hotel'                   => $this->when($request->input('_embed:hotel') === 'true', new HotelWithoutBaseResource(
                $clientEntity->getHotel()
            )),
            'startDate'               => $clientEntity->getStartDate()->format('Y-m-d'),
            'finalDate'               => $clientEntity->getFinalDate()->format('Y-m-d'),
            'isCommissionable'        => $clientEntity->getIsCommissionable(),
            'category'                => $clientEntity->getCategory(),
            'marketCode'              => $clientEntity->getMarketCode(),
            'extraNights'             => $clientEntity->getExtraNights(),
            'profitabilityIndicator'  => $clientEntity->getProfitabilityIndicator(),
            'quantityIndicator'       => $clientEntity->getQuantityIndicator(),
            'restriction'             => $clientEntity->getRestriction(),
            'settingIndicator'        => $clientEntity->getSettingIndicator(),
            'adjustmentAmount'        => $clientEntity->getAdjustmentAmount(),
            'adjustmentPercentage'    => $clientEntity->getAdjustmentPercentage(),
            'status'                  => $clientEntity->getStatus(),
            'createdAt'               => $clientEntity->getCreatedAt()->format('Y-m-d H:i:s'),
            'updatedAt'               => $clientEntity->getUpdatedAt()->format('Y-m-d H:i:s')
        ];
    }
}
