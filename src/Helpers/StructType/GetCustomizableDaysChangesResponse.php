<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomizableDaysChangesResponse StructType
 * @subpackage Structs
 */
class GetCustomizableDaysChangesResponse extends AbstractStructBase
{
    /**
     * The GetCustomizableDaysChangesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LChangedCustomizableDays|null
     */
    protected ?\StructType\LChangedCustomizableDays $GetCustomizableDaysChangesResult = null;
    /**
     * Constructor method for GetCustomizableDaysChangesResponse
     * @uses GetCustomizableDaysChangesResponse::setGetCustomizableDaysChangesResult()
     * @param \StructType\LChangedCustomizableDays $getCustomizableDaysChangesResult
     */
    public function __construct(?\StructType\LChangedCustomizableDays $getCustomizableDaysChangesResult = null)
    {
        $this
            ->setGetCustomizableDaysChangesResult($getCustomizableDaysChangesResult);
    }
    /**
     * Get GetCustomizableDaysChangesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LChangedCustomizableDays|null
     */
    public function getGetCustomizableDaysChangesResult(): ?\StructType\LChangedCustomizableDays
    {
        return isset($this->GetCustomizableDaysChangesResult) ? $this->GetCustomizableDaysChangesResult : null;
    }
    /**
     * Set GetCustomizableDaysChangesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LChangedCustomizableDays $getCustomizableDaysChangesResult
     * @return \StructType\GetCustomizableDaysChangesResponse
     */
    public function setGetCustomizableDaysChangesResult(?\StructType\LChangedCustomizableDays $getCustomizableDaysChangesResult = null): self
    {
        if (is_null($getCustomizableDaysChangesResult) || (is_array($getCustomizableDaysChangesResult) && empty($getCustomizableDaysChangesResult))) {
            unset($this->GetCustomizableDaysChangesResult);
        } else {
            $this->GetCustomizableDaysChangesResult = $getCustomizableDaysChangesResult;
        }
        
        return $this;
    }
}
