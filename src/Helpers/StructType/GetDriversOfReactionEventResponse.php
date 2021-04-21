<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDriversOfReactionEventResponse StructType
 * @subpackage Structs
 */
class GetDriversOfReactionEventResponse extends AbstractStructBase
{
    /**
     * The GetDriversOfReactionEventResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $GetDriversOfReactionEventResult = null;
    /**
     * Constructor method for GetDriversOfReactionEventResponse
     * @uses GetDriversOfReactionEventResponse::setGetDriversOfReactionEventResult()
     * @param \ArrayType\ArrayOfguid $getDriversOfReactionEventResult
     */
    public function __construct(?\ArrayType\ArrayOfguid $getDriversOfReactionEventResult = null)
    {
        $this
            ->setGetDriversOfReactionEventResult($getDriversOfReactionEventResult);
    }
    /**
     * Get GetDriversOfReactionEventResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getGetDriversOfReactionEventResult(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->GetDriversOfReactionEventResult) ? $this->GetDriversOfReactionEventResult : null;
    }
    /**
     * Set GetDriversOfReactionEventResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $getDriversOfReactionEventResult
     * @return \StructType\GetDriversOfReactionEventResponse
     */
    public function setGetDriversOfReactionEventResult(?\ArrayType\ArrayOfguid $getDriversOfReactionEventResult = null): self
    {
        if (is_null($getDriversOfReactionEventResult) || (is_array($getDriversOfReactionEventResult) && empty($getDriversOfReactionEventResult))) {
            unset($this->GetDriversOfReactionEventResult);
        } else {
            $this->GetDriversOfReactionEventResult = $getDriversOfReactionEventResult;
        }
        
        return $this;
    }
}
