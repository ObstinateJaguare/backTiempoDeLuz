<?php

namespace Modules\Plan\Repositories;

use Modules\Plan\Entities\Plan;
use Bookstores\Repositories\EntityRepository;
use Modules\Plan\Contracts\PlanEntityRepository as PlanEntityRepositoryContract;

/**
 * En: Data entity repository.
 * Es: Repositorio entidad de datos.
 *
 * @package PlanEntityRepository
 */
class PlanEntityRepository extends EntityRepository implements PlanEntityRepositoryContract
{
    /**
     * En: Set data entity.
     * Es: Establecer entidad de datos.
     *
     * @return string
     */
    public function setEntity(): string {
        return Plan::class;
    }
}