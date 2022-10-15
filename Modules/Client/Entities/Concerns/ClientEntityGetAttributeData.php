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
     * En:Get plan code
     * Es:Obtener el código del plan
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->getAttribute('code');
    }

    /**
     * En:Get plan name
     * Es:Obtener el nombre del plan
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->getAttribute('name');
    }

    /**
     * En:Get the basis of the plan
     * Es:Obtener la base del plan
     *
     * @return HasOne
     */
    public function base(): HasOne
    {
        return $this->hasOne(Base::class, 'bas_cod', 'base_id');
    }

    /**
     * En:Get the basis of the plan
     * Es:Obtener la base del plan
     *
     * @return HasOne
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * En:Get the base id of the plan
     * Es:Obtener el id de la base del plan
     *
     * @return string
     */
    public function getBaseId(): string
    {
        return $this->getAttribute('base_id');
    }

    /**
     * En:Get hotel plan
     * Es:Obtener hotel del plan
     *
     * @return HasOne
     */
    public function hotel(): HasOne
    {
        return $this->hasOne(Hotel::class, 'establ_cod', 'hotel_id');
    }

    /**
     * En:Get hotel plan
     * Es:Obtener hotel del plan
     *
     * @return HasOne
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * En:Get the hotel id of the plan
     * Es:Obtener el id del hotel del plan
     *
     * @return string
     */
    public function getHotelId(): string
    {
        return $this->getAttribute('hotel_id');
    }

    /**
     * En:Get plan start date
     * Es:Obtener fecha de inicio del plan
     *
     * @return Carbon
     */
    public function getStartDate(): Carbon
    {
        return Carbon::parse($this->getAttribute('start_date'));
    }

    /**
     * En:Get plan end date
     * Es:Obtener fecha final del plan
     *
     * @return Carbon
     */
    public function getFinalDate(): Carbon
    {
        return Carbon::parse($this->getAttribute('final_date'));
    }

    /**
     * En:Get if the plan is commissionable
     * Es:Obtener si es comisionable el plan
     *
     * @return string
     */
    public function getIsCommissionable(): string
    {
        return $this->getAttribute('is_commissionable');
    }

    /**
     * En:Get plan category
     * Es:Obtener categoria del plan
     *
     * @return string
     */
    public function getCategory(): string
    {
        return $this->getAttribute('category');
    }

    /**
     * En:Get extra plan nights
     * Es:Obtener noches extras del plan
     *
     * @return string
     */
    public function getMarketCode(): string
    {
        return $this->getAttribute('market_code');
    }

    /**
     * En:Get extra plan nights
     * Es:Obtener noches extras del plan
     *
     * @return string
     */
    public function getExtraNights(): string
    {
        return $this->getAttribute('extra_nights');
    }

    /**
     * En:Get plan profitability indicator
     * Es:Obtener indicador de rentabilidad del plan
     *
     * @return string
     */
    public function getProfitabilityIndicator(): string
    {
        return $this->getAttribute('profitability_indicator');
    }

    /**
     * En:Get Quantity Indicator of the plan
     * Es:Obtener indicador de cantidad del plan
     *
     * @return string
     */
    public function getQuantityIndicator(): string
    {
        return $this->getAttribute('quantity_indicator') ?? '';
    }

    /**
     * En:Get plan restriction
     * Es:Obtener restrincion del plan
     *
     * @return string
     */
    public function getRestriction(): string
    {
        return $this->getAttribute('restriction');
    }

    /**
     * En:Get plan configuration indicator
     * Es:Obtener indicador de configuración del plan
     *
     * @return string
     */
    public function getSettingIndicator(): string
    {
        return $this->getAttribute('setting_indicator');
    }

    /**
     * En:Get plan adjustment amount
     * Es:Obtener la cantidad de ajuste del plan
     *
     * @return string
     */
    public function getAdjustmentAmount(): string
    {
        return $this->getAttribute('adjustment_amount');
    }

    /**
     * En:Get fit percentage
     * Es:Obtener porcentaje de forma
     *
     * @return string
     */
    public function getAdjustmentPercentage(): string
    {
        return $this->getAttribute('adjustment_percentage');
    }

    /**
     * En:Get plan status
     * Es:Obtener el estado del plan
     *
     * @return bool
     */
    public function getStatus(): bool
    {
        return $this->getAttribute('status');
    }

    /**
     * En: Get plan creation date.
     * Es: Obtener fecha de creación de plan.
     *
     * @return Carbon
     */
    public function getCreatedAt(): Carbon
    {
        return $this->getAttribute('created_at');
    }

    /**
     * En: Get plan update date.
     * Es: Obtener fecha de actualización de plan.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): Carbon
    {
        return $this->getAttribute('updated_at');
    }
}
