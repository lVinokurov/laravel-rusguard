<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMifareProfilesResponse StructType
 * @subpackage Structs
 */
class GetMifareProfilesResponse extends AbstractStructBase
{
    /**
     * The GetMifareProfilesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfMifareProfileInfo|null
     */
    protected ?\ArrayType\ArrayOfMifareProfileInfo $GetMifareProfilesResult = null;
    /**
     * Constructor method for GetMifareProfilesResponse
     * @uses GetMifareProfilesResponse::setGetMifareProfilesResult()
     * @param \ArrayType\ArrayOfMifareProfileInfo $getMifareProfilesResult
     */
    public function __construct(?\ArrayType\ArrayOfMifareProfileInfo $getMifareProfilesResult = null)
    {
        $this
            ->setGetMifareProfilesResult($getMifareProfilesResult);
    }
    /**
     * Get GetMifareProfilesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfMifareProfileInfo|null
     */
    public function getGetMifareProfilesResult(): ?\ArrayType\ArrayOfMifareProfileInfo
    {
        return isset($this->GetMifareProfilesResult) ? $this->GetMifareProfilesResult : null;
    }
    /**
     * Set GetMifareProfilesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfMifareProfileInfo $getMifareProfilesResult
     * @return \StructType\GetMifareProfilesResponse
     */
    public function setGetMifareProfilesResult(?\ArrayType\ArrayOfMifareProfileInfo $getMifareProfilesResult = null): self
    {
        if (is_null($getMifareProfilesResult) || (is_array($getMifareProfilesResult) && empty($getMifareProfilesResult))) {
            unset($this->GetMifareProfilesResult);
        } else {
            $this->GetMifareProfilesResult = $getMifareProfilesResult;
        }
        
        return $this;
    }
}
