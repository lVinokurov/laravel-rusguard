<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddClaim StructType
 * @subpackage Structs
 */
class AddClaim extends AbstractStructBase
{
    /**
     * The userGroupId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $userGroupId = null;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ClaimSaveData|null
     */
    protected ?\StructType\ClaimSaveData $data = null;
    /**
     * Constructor method for AddClaim
     * @uses AddClaim::setUserGroupId()
     * @uses AddClaim::setData()
     * @param string $userGroupId
     * @param \StructType\ClaimSaveData $data
     */
    public function __construct(?string $userGroupId = null, ?\StructType\ClaimSaveData $data = null)
    {
        $this
            ->setUserGroupId($userGroupId)
            ->setData($data);
    }
    /**
     * Get userGroupId value
     * @return string|null
     */
    public function getUserGroupId(): ?string
    {
        return $this->userGroupId;
    }
    /**
     * Set userGroupId value
     * @param string $userGroupId
     * @return \StructType\AddClaim
     */
    public function setUserGroupId(?string $userGroupId = null): self
    {
        // validation for constraint: string
        if (!is_null($userGroupId) && !is_string($userGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userGroupId, true), gettype($userGroupId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($userGroupId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $userGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($userGroupId, true)), __LINE__);
        }
        $this->userGroupId = $userGroupId;
        
        return $this;
    }
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ClaimSaveData|null
     */
    public function getData(): ?\StructType\ClaimSaveData
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ClaimSaveData $data
     * @return \StructType\AddClaim
     */
    public function setData(?\StructType\ClaimSaveData $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
}
