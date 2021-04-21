<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsEmployeeResponse StructType
 * @subpackage Structs
 */
class AddAcsEmployeeResponse extends AbstractStructBase
{
    /**
     * The AddAcsEmployeeResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeSlim|null
     */
    protected ?\StructType\AcsEmployeeSlim $AddAcsEmployeeResult = null;
    /**
     * Constructor method for AddAcsEmployeeResponse
     * @uses AddAcsEmployeeResponse::setAddAcsEmployeeResult()
     * @param \StructType\AcsEmployeeSlim $addAcsEmployeeResult
     */
    public function __construct(?\StructType\AcsEmployeeSlim $addAcsEmployeeResult = null)
    {
        $this
            ->setAddAcsEmployeeResult($addAcsEmployeeResult);
    }
    /**
     * Get AddAcsEmployeeResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeSlim|null
     */
    public function getAddAcsEmployeeResult(): ?\StructType\AcsEmployeeSlim
    {
        return isset($this->AddAcsEmployeeResult) ? $this->AddAcsEmployeeResult : null;
    }
    /**
     * Set AddAcsEmployeeResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsEmployeeSlim $addAcsEmployeeResult
     * @return \StructType\AddAcsEmployeeResponse
     */
    public function setAddAcsEmployeeResult(?\StructType\AcsEmployeeSlim $addAcsEmployeeResult = null): self
    {
        if (is_null($addAcsEmployeeResult) || (is_array($addAcsEmployeeResult) && empty($addAcsEmployeeResult))) {
            unset($this->AddAcsEmployeeResult);
        } else {
            $this->AddAcsEmployeeResult = $addAcsEmployeeResult;
        }
        
        return $this;
    }
}
