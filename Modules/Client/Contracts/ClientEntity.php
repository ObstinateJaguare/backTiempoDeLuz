<?php

namespace Modules\Client\Contracts;

use Illuminate\Support\Carbon;

/**
 * En: Data entity contract.
 * Es: Contrato entidad de datos.
 *
 * @package ClientEntity
 */
interface ClientEntity
{
    /**
     * En:Get client id
     * Es:Obtener el id del cliente
     *
     * @return string|null
     */
    public function getId(): string;

    /**
     * En:Get client code
     * Es:Obtener el código del cliente
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * En:Get client name
     * Es:Obtener el nombre del cliente
     *
     * @return string
     */
    public function getName(): string;

    /**
     * En:Get lastname client
     * Es:Obtener apellidos del cliente
     *
     * @return string
     */
    public function getLastName(): string;

    /**
     * En:Get Date Of Birth
     * Es:Obtener fecha de nacimiento
     *
     * @return carbon
     */
    public function getDateOfBirth(): carbon;

    /**
     * En:Get client phone
     * Es:Obtener telefono del cliente
     *
     * @return string
     */
    public function getPhone(): string;

    /**
     * En:Get client email
     * Es:Obtener email del cliente
     *
     * @return string
     */
    public function getEmail(): string;

    /**
     * En:Get client city
     * Es:Obtener ciudad del cliente
     *
     * @return string
     */
    public function getCity(): string;

    /**
     * En:Get clientr country
     * Es:Obtener el pais del cliente
     *
     * @return string
     */
    public function getCountry(): string;

    /**
     * En:Get client status
     * Es:Obtener el estado del cliente
     *
     * @return bool
     */
    public function getStatus(): bool;

    /**
     * En: Get client creation date.
     * Es: Obtener fecha de creación del cliente.
     *
     * @return Carbon
     */
    public function getCreatedAt(): Carbon;

    /**
     * En: Get client update date.
     * Es: Obtener fecha de actualización del cliente.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): Carbon;
}


