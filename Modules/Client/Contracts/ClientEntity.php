<?php

namespace Modules\Client\Contracts;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * En: Data entity contract.
 * Es: Contrato entidad de datos.
 *
 * @package ClientEntity
 */
interface ClientEntity
{
    /**
     * En:Get plan id
     * Es:Obtener el id del plan
     *
     * @return string|null
     */
    public function getId(): string;

    /**
     * En:Get plan code
     * Es:Obtener el código del plan
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * En:Get plan name
     * Es:Obtener el nombre del plan
     *
     * @return string
     */
    public function getName(): string;

    /**
     * En:Get the basis of the plan
     * Es:Obtener la base del plan
     *
     * @return HasOne
     */
    public function base(): HasOne;

    /**
     * En:Get the basis of the plan
     * Es:Obtener la base del plan
     *
     * @return HasOne
     */
    public function getBase();

    /**
     * En:Get the base id of the plan
     * Es:Obtener el id de la base del plan
     *
     * @return string
     */
    public function getBaseId(): string;

    /**
     * En:Get hotel plan
     * Es:Obtener hotel del plan
     *
     * @return HasOne
     */
    public function hotel(): HasOne;

    /**
     * En:Get hotel plan
     * Es:Obtener hotel del plan
     *
     * @return HasOne
     */
    public function getHotel();

    /**
     * En:Get the hotel id of the plan
     * Es:Obtener el id del hotel del plan
     *
     * @return string
     */
    public function getHotelId(): string;

    /**
     * En:Get plan start date
     * Es:Obtener fecha de inicio del plan
     *
     * @return Carbon
     */
    public function getStartDate(): Carbon;

    /**
     * En:Get plan end date
     * Es:Obtener fecha final del plan
     *
     * @return Carbon
     */
    public function getFinalDate(): Carbon;

    /**
     * En:Get if the plan is commissionable
     * Es:Obtener si es comisionable el plan
     *
     * @return string
     */
    public function getIsCommissionable(): string;

    /**
     * En:Get plan category
     * Es:Obtener categoria del plan
     *
     * @return string
     */
    public function getCategory(): string;

    /**
     * En:Get market code plan
     * Es:obtener codigo de mercado
     *
     * @return string
     */
    public function getMarketCode(): string;

    /**
     * En:Get extra plan nights
     * Es:Obtener noches extras del plan
     *
     * @return string
     */
    public function getExtraNights(): string;

    /**
     * En:Get plan profitability indicator
     * Es:Obtener indicador de rentabilidad del plan
     *
     * @return string
     */
    public function getProfitabilityIndicator(): string;

    /**
     * En:Get Quantity Indicator of the plan
     * Es:Obtener indicador de cantidad del plan
     *
     * @return string
     */
    public function getQuantityIndicator(): string;

    /**
     * En:Get plan restriction
     * Es:Obtener restrincion del plan
     *
     * @return string
     */
    public function getRestriction(): string;

    /**
     * En:Get plan configuration indicator
     * Es:Obtener indicador de configuración del plan
     *
     * @return string
     */
    public function getSettingIndicator(): string;

    /**
     * En:Get plan adjustment amount
     * Es:Obtener la cantidad de ajuste del plan
     *
     * @return string
     */
    public function getAdjustmentAmount(): string;

    /**
     * En:Get fit percentage
     * Es:Obtener porcentaje de forma
     *
     * @return string
     */
    public function getAdjustmentPercentage(): string;

    /**
     * En:Get plan status
     * Es:Obtener el estado del plan
     *
     * @return bool
     */
    public function getStatus(): bool;

    /**
     * En: Get plan creation date.
     * Es: Obtener fecha de creación de plan.
     *
     * @return Carbon
     */
    public function getCreatedAt(): Carbon;

    /**
     * En: Get plan update date.
     * Es: Obtener fecha de actualización de plan.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): Carbon;
}


