<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMapImageResponse StructType
 * @subpackage Structs
 */
class GetMapImageResponse extends AbstractStructBase
{
    /**
     * The GetMapImageResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $GetMapImageResult = null;
    /**
     * Constructor method for GetMapImageResponse
     * @uses GetMapImageResponse::setGetMapImageResult()
     * @param string $getMapImageResult
     */
    public function __construct(?string $getMapImageResult = null)
    {
        $this
            ->setGetMapImageResult($getMapImageResult);
    }
    /**
     * Get GetMapImageResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGetMapImageResult(): ?string
    {
        return isset($this->GetMapImageResult) ? $this->GetMapImageResult : null;
    }
    /**
     * Set GetMapImageResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $getMapImageResult
     * @return \StructType\GetMapImageResponse
     */
    public function setGetMapImageResult(?string $getMapImageResult = null): self
    {
        // validation for constraint: string
        if (!is_null($getMapImageResult) && !is_string($getMapImageResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($getMapImageResult, true), gettype($getMapImageResult)), __LINE__);
        }
        if (is_null($getMapImageResult) || (is_array($getMapImageResult) && empty($getMapImageResult))) {
            unset($this->GetMapImageResult);
        } else {
            $this->GetMapImageResult = $getMapImageResult;
        }
        
        return $this;
    }
}
