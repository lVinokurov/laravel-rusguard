<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSwitchedOffLogDriversOfWorkplaceResponse StructType
 * @subpackage Structs
 */
class GetSwitchedOffLogDriversOfWorkplaceResponse extends AbstractStructBase
{
    /**
     * The GetSwitchedOffLogDriversOfWorkplaceResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $GetSwitchedOffLogDriversOfWorkplaceResult = null;
    /**
     * Constructor method for GetSwitchedOffLogDriversOfWorkplaceResponse
     * @uses GetSwitchedOffLogDriversOfWorkplaceResponse::setGetSwitchedOffLogDriversOfWorkplaceResult()
     * @param \ArrayType\ArrayOfguid $getSwitchedOffLogDriversOfWorkplaceResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $getSwitchedOffLogDriversOfWorkplaceResult = null)
    {
        $this
            ->setGetSwitchedOffLogDriversOfWorkplaceResult($getSwitchedOffLogDriversOfWorkplaceResult);
    }
    /**
     * Get GetSwitchedOffLogDriversOfWorkplaceResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getGetSwitchedOffLogDriversOfWorkplaceResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->GetSwitchedOffLogDriversOfWorkplaceResult) ? $this->GetSwitchedOffLogDriversOfWorkplaceResult : null;
    }
    /**
     * Set GetSwitchedOffLogDriversOfWorkplaceResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $getSwitchedOffLogDriversOfWorkplaceResult
     * @return \StructType\GetSwitchedOffLogDriversOfWorkplaceResponse
     */
    public function setGetSwitchedOffLogDriversOfWorkplaceResult(?\ArrayType\ArrayOfguid $getSwitchedOffLogDriversOfWorkplaceResult = null): self
    {
        if (is_null($getSwitchedOffLogDriversOfWorkplaceResult) || (is_array($getSwitchedOffLogDriversOfWorkplaceResult) && empty($getSwitchedOffLogDriversOfWorkplaceResult))) {
            unset($this->GetSwitchedOffLogDriversOfWorkplaceResult);
        } else {
            $this->GetSwitchedOffLogDriversOfWorkplaceResult = $getSwitchedOffLogDriversOfWorkplaceResult;
        }
        
        return $this;
    }
}
