<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMifareProfileResponse StructType
 * @subpackage Structs
 */
class SaveMifareProfileResponse extends AbstractStructBase
{
    /**
     * The SaveMifareProfileResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $SaveMifareProfileResult = null;
    /**
     * Constructor method for SaveMifareProfileResponse
     * @uses SaveMifareProfileResponse::setSaveMifareProfileResult()
     * @param \ArrayType\ArrayOfguid $saveMifareProfileResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $saveMifareProfileResult = null)
    {
        $this
            ->setSaveMifareProfileResult($saveMifareProfileResult);
    }
    /**
     * Get SaveMifareProfileResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getSaveMifareProfileResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->SaveMifareProfileResult) ? $this->SaveMifareProfileResult : null;
    }
    /**
     * Set SaveMifareProfileResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $saveMifareProfileResult
     * @return \StructType\SaveMifareProfileResponse
     */
    public function setSaveMifareProfileResult(?\ArrayType\ArrayOfguid $saveMifareProfileResult = null): self
    {
        if (is_null($saveMifareProfileResult) || (is_array($saveMifareProfileResult) && empty($saveMifareProfileResult))) {
            unset($this->SaveMifareProfileResult);
        } else {
            $this->SaveMifareProfileResult = $saveMifareProfileResult;
        }
        
        return $this;
    }
}
