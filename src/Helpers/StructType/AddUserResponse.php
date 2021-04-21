<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddUserResponse StructType
 * @subpackage Structs
 */
class AddUserResponse extends AbstractStructBase
{
    /**
     * The AddUserResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LUser|null
     */
    protected ?\StructType\LUser $AddUserResult = null;
    /**
     * Constructor method for AddUserResponse
     * @uses AddUserResponse::setAddUserResult()
     * @param \StructType\LUser $addUserResult
     */
    public function __construct(?\StructType\LUser $addUserResult = null)
    {
        $this
            ->setAddUserResult($addUserResult);
    }
    /**
     * Get AddUserResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LUser|null
     */
    public function getAddUserResult(): ?\StructType\LUser
    {
        return isset($this->AddUserResult) ? $this->AddUserResult : null;
    }
    /**
     * Set AddUserResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\LUser $addUserResult
     * @return \StructType\AddUserResponse
     */
    public function setAddUserResult(?\StructType\LUser $addUserResult = null): self
    {
        if (is_null($addUserResult) || (is_array($addUserResult) && empty($addUserResult))) {
            unset($this->AddUserResult);
        } else {
            $this->AddUserResult = $addUserResult;
        }
        
        return $this;
    }
}
