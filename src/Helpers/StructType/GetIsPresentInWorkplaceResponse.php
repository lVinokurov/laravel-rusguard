<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIsPresentInWorkplaceResponse StructType
 * @subpackage Structs
 */
class GetIsPresentInWorkplaceResponse extends AbstractStructBase
{
    /**
     * The GetIsPresentInWorkplaceResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDataOnPresenceInWorkplace|null
     */
    protected ?\ArrayType\ArrayOfDataOnPresenceInWorkplace $GetIsPresentInWorkplaceResult = null;
    /**
     * Constructor method for GetIsPresentInWorkplaceResponse
     * @uses GetIsPresentInWorkplaceResponse::setGetIsPresentInWorkplaceResult()
     * @param \ArrayType\ArrayOfDataOnPresenceInWorkplace $getIsPresentInWorkplaceResult
     */
    public function __construct(?\ArrayType\ArrayOfDataOnPresenceInWorkplace $getIsPresentInWorkplaceResult = null)
    {
        $this
            ->setGetIsPresentInWorkplaceResult($getIsPresentInWorkplaceResult);
    }
    /**
     * Get GetIsPresentInWorkplaceResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDataOnPresenceInWorkplace|null
     */
    public function getGetIsPresentInWorkplaceResult(): ?\ArrayType\ArrayOfDataOnPresenceInWorkplace
    {
        return isset($this->GetIsPresentInWorkplaceResult) ? $this->GetIsPresentInWorkplaceResult : null;
    }
    /**
     * Set GetIsPresentInWorkplaceResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDataOnPresenceInWorkplace $getIsPresentInWorkplaceResult
     * @return \StructType\GetIsPresentInWorkplaceResponse
     */
    public function setGetIsPresentInWorkplaceResult(?\ArrayType\ArrayOfDataOnPresenceInWorkplace $getIsPresentInWorkplaceResult = null): self
    {
        if (is_null($getIsPresentInWorkplaceResult) || (is_array($getIsPresentInWorkplaceResult) && empty($getIsPresentInWorkplaceResult))) {
            unset($this->GetIsPresentInWorkplaceResult);
        } else {
            $this->GetIsPresentInWorkplaceResult = $getIsPresentInWorkplaceResult;
        }
        
        return $this;
    }
}
