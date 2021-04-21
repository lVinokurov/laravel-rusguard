<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTagsByClaim StructType
 * @subpackage Structs
 */
class GetTagsByClaim extends AbstractStructBase
{
    /**
     * The claim
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $claim = null;
    /**
     * Constructor method for GetTagsByClaim
     * @uses GetTagsByClaim::setClaim()
     * @param string $claim
     */
    public function __construct(?string $claim = null)
    {
        $this
            ->setClaim($claim);
    }
    /**
     * Get claim value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getClaim(): ?string
    {
        return isset($this->claim) ? $this->claim : null;
    }
    /**
     * Set claim value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $claim
     * @return \StructType\GetTagsByClaim
     */
    public function setClaim(?string $claim = null): self
    {
        // validation for constraint: string
        if (!is_null($claim) && !is_string($claim)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($claim, true), gettype($claim)), __LINE__);
        }
        if (is_null($claim) || (is_array($claim) && empty($claim))) {
            unset($this->claim);
        } else {
            $this->claim = $claim;
        }
        
        return $this;
    }
}
