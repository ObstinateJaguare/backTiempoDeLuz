<?php

namespace Modules\Client\Entities\Concerns;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * En: Get Data Entity Attributes.
 * Es: Obtener atributos entidad de datos.
 *
 * @package ClientEntityGetAttributeData
 */
trait ClientEntityGetAttributeData
{
    /**
     * En:Get plan id
     * Es:Obtener el id del plan
     *
     * @return string|null
     */
    public function getId(): string
    {
        return $this->getAttribute('id');
    }

    /**
     * En:Get client code
     * Es:Obtener el código del cliente
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->getAttribute('code');
    }

    /**
     * En:Get client name
     * Es:Obtener el nombre del cliente
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->getAttribute('name');
    }

    /**
     * En:Get lastname client
     * Es:Obtener apellidos del cliente
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->getAttribute('lastName');
    }

    /**
     * En:Get Date Of Birth
     * Es:Obtener fecha de nacimiento
     *
     * @return carbon
     */
    public function getDateOfBirth(): carbon
    {
        return $this->getAttribute('dateOfBirth');
    }

    /**
     * En:Get client phone
     * Es:Obtener telefono del cliente
     *
     * @return string
     */
    public function getPhone(): string
    {
        return $this->getAttribute('phone');
    }

    /**
     * En:Get client email
     * Es:Obtener email del cliente
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->getAttribute('email');
    }

    /**
     * En:Get client city
     * Es:Obtener ciudad del cliente
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->getAttribute('city');
    }

    /**
     * En:Get clientr country
     * Es:Obtener el pais del cliente
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->getAttribute('country');
    }

    /**
     * En:Get client status
     * Es:Obtener el estado del cliente
     *
     * @return bool
     */
    public function getStatus(): bool
    {
        return $this->getAttribute('status');
    }

    /**
     * En: Get client creation date.
     * Es: Obtener fecha de creación del cliente.
     *
     * @return Carbon
     */
    public function getCreatedAt(): Carbon
    {
        return $this->getAttribute('createdAt');
    }

    /**
     * En: Get client update date.
     * Es: Obtener fecha de actualización del cliente.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): Carbon
    {
        return $this->getAttribute('updatedAt');
    }
}
