<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveDriverResponse StructType
 * @subpackage Structs
 */
class RemoveDriverResponse extends AbstractStructBase
{
    /**
     * The RemoveDriverResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LDriverFullInfo|null
     */
    protected ?\StructType\LDriverFullInfo $RemoveDriverResult = null;
    /**
     * Constructor method for RemoveDriverResponse
     * @uses RemoveDriverResponse::setRemoveDriverResult()
     * @param \StructType\LDriverFullInfo $removeDriverResult
     */
    public function __construct(?\StructType\LDriverFullInfo $removeDriverResult = null)
    {
        $this
            ->setRemoveDriverResult($removeDriverResult);
    }
    /**
     * Get RemoveDriverResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LDriverFullInfo|null
     */
    public function getRemoveDriverResult(): ?\StructType\LDriverFullInfo
    {
        return isset($this->RemoveDriverResult) ? $this->RemoveDriverResult : null;
    }
    /**
     * Set RemoveDriverResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LDriverFullInfo $removeDriverResult
     * @return \StructType\RemoveDriverResponse
     */
    public function setRemoveDriverResult(?\StructType\LDriverFullInfo $removeDriverResult = null): self
    {
        if (is_null($removeDriverResult) || (is_array($removeDriverResult) && empty($removeDriverResult))) {
            unset($this->RemoveDriverResult);
        } else {
            $this->RemoveDriverResult = $removeDriverResult;
        }
        
        return $this;
    }
}
