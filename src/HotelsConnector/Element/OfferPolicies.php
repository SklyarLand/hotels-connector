<?php

namespace Bronevik\HotelsConnector\Element;

/**
 * Правила предоставления предложения
 * A policy of granting current offer
 */
class OfferPolicies
{
    /**
     * Правило предоставления предложения.
     *
     * @var OfferPolicy[]
     */
    public $policy = [];

    /**
     * @return bool
     */
    public function hasPolicy()
    {
        return count($this->policy) > 0;
    }

    /**
     * @return OfferPolicy[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * @param OfferPolicy $policy
     */
    public function addPolicy($policy)
    {
        $this->policy[] = $policy;
    }
}
