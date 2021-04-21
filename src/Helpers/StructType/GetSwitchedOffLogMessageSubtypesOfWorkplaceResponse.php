<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSwitchedOffLogMessageSubtypesOfWorkplaceResponse
 * StructType
 * @subpackage Structs
 */
class GetSwitchedOffLogMessageSubtypesOfWorkplaceResponse extends AbstractStructBase
{
    /**
     * The GetSwitchedOffLogMessageSubtypesOfWorkplaceResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLogMsgSubType|null
     */
    protected ?\ArrayType\ArrayOfLogMsgSubType $GetSwitchedOffLogMessageSubtypesOfWorkplaceResult = null;
    /**
     * Constructor method for GetSwitchedOffLogMessageSubtypesOfWorkplaceResponse
     * @uses GetSwitchedOffLogMessageSubtypesOfWorkplaceResponse::setGetSwitchedOffLogMessageSubtypesOfWorkplaceResult()
     * @param \ArrayType\ArrayOfLogMsgSubType $getSwitchedOffLogMessageSubtypesOfWorkplaceResult
     */
    public function __construct(?\ArrayType\ArrayOfLogMsgSubType $getSwitchedOffLogMessageSubtypesOfWorkplaceResult = null)
    {
        $this
            ->setGetSwitchedOffLogMessageSubtypesOfWorkplaceResult($getSwitchedOffLogMessageSubtypesOfWorkplaceResult);
    }
    /**
     * Get GetSwitchedOffLogMessageSubtypesOfWorkplaceResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLogMsgSubType|null
     */
    public function getGetSwitchedOffLogMessageSubtypesOfWorkplaceResult(): ?\ArrayType\ArrayOfLogMsgSubType
    {
        return isset($this->GetSwitchedOffLogMessageSubtypesOfWorkplaceResult) ? $this->GetSwitchedOffLogMessageSubtypesOfWorkplaceResult : null;
    }
    /**
     * Set GetSwitchedOffLogMessageSubtypesOfWorkplaceResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLogMsgSubType $getSwitchedOffLogMessageSubtypesOfWorkplaceResult
     * @return \StructType\GetSwitchedOffLogMessageSubtypesOfWorkplaceResponse
     */
    public function setGetSwitchedOffLogMessageSubtypesOfWorkplaceResult(?\ArrayType\ArrayOfLogMsgSubType $getSwitchedOffLogMessageSubtypesOfWorkplaceResult = null): self
    {
        if (is_null($getSwitchedOffLogMessageSubtypesOfWorkplaceResult) || (is_array($getSwitchedOffLogMessageSubtypesOfWorkplaceResult) && empty($getSwitchedOffLogMessageSubtypesOfWorkplaceResult))) {
            unset($this->GetSwitchedOffLogMessageSubtypesOfWorkplaceResult);
        } else {
            $this->GetSwitchedOffLogMessageSubtypesOfWorkplaceResult = $getSwitchedOffLogMessageSubtypesOfWorkplaceResult;
        }
        
        return $this;
    }
}
