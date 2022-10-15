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
            'lastName'                => $clientEntity->getLastName(),
            'dateOfBirth'             => $clientEntity->getDateOfBirth(),
            'phone'                   => $clientEntity->getPhone(),
            'email'                   => $clientEntity->getEmail(),
            'city'                    => $clientEntity->getCity(),
            'country'                 => $clientEntity->getCountry(),
            'status'                  => $clientEntity->getStatus(),
            'createdAt'               => $clientEntity->getCreatedAt()->format('Y-m-d H:i:s'),
            'updatedAt'               => $clientEntity->getUpdatedAt()->format('Y-m-d H:i:s')
        ];
    }
}
