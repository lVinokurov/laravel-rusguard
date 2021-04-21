<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsWorkDayWithTransferResponse StructType
 * @subpackage Structs
 */
class AddAcsWorkDayWithTransferResponse extends AbstractStructBase
{
    /**
     * The AddAcsWorkDayWithTransferResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsWorkDayWithTransfer|null
     */
    protected ?\StructType\AcsWorkDayWithTransfer $AddAcsWorkDayWithTransferResult = null;
    /**
     * Constructor method for AddAcsWorkDayWithTransferResponse
     * @uses AddAcsWorkDayWithTransferResponse::setAddAcsWorkDayWithTransferResult()
     * @param \StructType\AcsWorkDayWithTransfer $addAcsWorkDayWithTransferResult
     */
    public function __construct(?\StructType\AcsWorkDayWithTransfer $addAcsWorkDayWithTransferResult = null)
    {
        $this
            ->setAddAcsWorkDayWithTransferResult($addAcsWorkDayWithTransferResult);
    }
    /**
     * Get AddAcsWorkDayWithTransferResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsWorkDayWithTransfer|null
     */
    public function getAddAcsWorkDayWithTransferResult(): ?\StructType\AcsWorkDayWithTransfer
    {
        return isset($this->AddAcsWorkDayWithTransferResult) ? $this->AddAcsWorkDayWithTransferResult : null;
    }
    /**
     * Set AddAcsWorkDayWithTransferResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsWorkDayWithTransfer $addAcsWorkDayWithTransferResult
     * @return \StructType\AddAcsWorkDayWithTransferResponse
     */
    public function setAddAcsWorkDayWithTransferResult(?\StructType\AcsWorkDayWithTransfer $addAcsWorkDayWithTransferResult = null): self
    {
        if (is_null($addAcsWorkDayWithTransferResult) || (is_array($addAcsWorkDayWithTransferResult) && empty($addAcsWorkDayWithTransferResult))) {
            unset($this->AddAcsWorkDayWithTransferResult);
        } else {
            $this->AddAcsWorkDayWithTransferResult = $addAcsWorkDayWithTransferResult;
        }
        
        return $this;
    }
}
