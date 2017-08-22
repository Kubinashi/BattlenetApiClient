<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\Shared\Criteria\Service;

use Kubinashi\BattlenetApi\WorldOfWarcraft\Shared\Criteria\Model\CriteriaValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-08-22
 * @version 1.0
 */
class CriteriaService
{
    /**
     * @param \StdClass $criteria
     * @return CriteriaValueObject
     */
    public function prepareCriteriaValueObject($criteria)
    {
        return new CriteriaValueObject(
            $criteria->id,
            $criteria->description,
            $criteria->orderIndex,
            $criteria->max
        );
    }
}
