<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsCustomDayResponse StructType
 * @subpackage Structs
 */
class AddAcsCustomDayResponse extends AbstractStructBase
{
    /**
     * The AddAcsCustomDayResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsCustomDay|null
     */
    protected ?\StructType\AcsCustomDay $AddAcsCustomDayResult = null;
    /**
     * Constructor method for AddAcsCustomDayResponse
     * @uses AddAcsCustomDayResponse::setAddAcsCustomDayResult()
     * @param \StructType\AcsCustomDay $addAcsCustomDayResult
     */
    public function __construct(?\StructType\AcsCustomDay $addAcsCustomDayResult = null)
    {
        $this
            ->setAddAcsCustomDayResult($addAcsCustomDayResult);
    }
    /**
     * Get AddAcsCustomDayResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsCustomDay|null
     */
    public function getAddAcsCustomDayResult(): ?\StructType\AcsCustomDay
    {
        return isset($this->AddAcsCustomDayResult) ? $this->AddAcsCustomDayResult : null;
    }
    /**
     * Set AddAcsCustomDayResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsCustomDay $addAcsCustomDayResult
     * @return \StructType\AddAcsCustomDayResponse
     */
    public function setAddAcsCustomDayResult(?\StructType\AcsCustomDay $addAcsCustomDayResult = null): self
    {
        if (is_null($addAcsCustomDayResult) || (is_array($addAcsCustomDayResult) && empty($addAcsCustomDayResult))) {
            unset($this->AddAcsCustomDayResult);
        } else {
            $this->AddAcsCustomDayResult = $addAcsCustomDayResult;
        }
        
        return $this;
    }
}
