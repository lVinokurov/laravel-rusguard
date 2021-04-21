<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddMifareProfileResponse StructType
 * @subpackage Structs
 */
class AddMifareProfileResponse extends AbstractStructBase
{
    /**
     * The AddMifareProfileResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\MifareProfileInfo|null
     */
    protected ?\StructType\MifareProfileInfo $AddMifareProfileResult = null;
    /**
     * Constructor method for AddMifareProfileResponse
     * @uses AddMifareProfileResponse::setAddMifareProfileResult()
     * @param \StructType\MifareProfileInfo $addMifareProfileResult
     */
    public function __construct(?\StructType\MifareProfileInfo $addMifareProfileResult = null)
    {
        $this
            ->setAddMifareProfileResult($addMifareProfileResult);
    }
    /**
     * Get AddMifareProfileResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\MifareProfileInfo|null
     */
    public function getAddMifareProfileResult(): ?\StructType\MifareProfileInfo
    {
        return isset($this->AddMifareProfileResult) ? $this->AddMifareProfileResult : null;
    }
    /**
     * Set AddMifareProfileResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\MifareProfileInfo $addMifareProfileResult
     * @return \StructType\AddMifareProfileResponse
     */
    public function setAddMifareProfileResult(?\StructType\MifareProfileInfo $addMifareProfileResult = null): self
    {
        if (is_null($addMifareProfileResult) || (is_array($addMifareProfileResult) && empty($addMifareProfileResult))) {
            unset($this->AddMifareProfileResult);
        } else {
            $this->AddMifareProfileResult = $addMifareProfileResult;
        }
        
        return $this;
    }
}
