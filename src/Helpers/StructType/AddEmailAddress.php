<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEmailAddress StructType
 * @subpackage Structs
 */
class AddEmailAddress extends AbstractStructBase
{
    /**
     * The owner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $owner = null;
    /**
     * The ownerId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ownerId = null;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmailAddressSaveData|null
     */
    protected ?\StructType\EmailAddressSaveData $data = null;
    /**
     * The partOfCreateOperation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $partOfCreateOperation = null;
    /**
     * Constructor method for AddEmailAddress
     * @uses AddEmailAddress::setOwner()
     * @uses AddEmailAddress::setOwnerId()
     * @uses AddEmailAddress::setData()
     * @uses AddEmailAddress::setPartOfCreateOperation()
     * @param string $owner
     * @param string $ownerId
     * @param \StructType\EmailAddressSaveData $data
     * @param bool $partOfCreateOperation
     */
    public function __construct(?string $owner = null, ?string $ownerId = null, ?\StructType\EmailAddressSaveData $data = null, ?bool $partOfCreateOperation = null)
    {
        $this
            ->setOwner($owner)
            ->setOwnerId($ownerId)
            ->setData($data)
            ->setPartOfCreateOperation($partOfCreateOperation);
    }
    /**
     * Get owner value
     * @return string|null
     */
    public function getOwner(): ?string
    {
        return $this->owner;
    }
    /**
     * Set owner value
     * @uses \EnumType\EmailAddressOwner::valueIsValid()
     * @uses \EnumType\EmailAddressOwner::getValidValues()
     * @throws InvalidArgumentException
     * @param string $owner
     * @return \StructType\AddEmailAddress
     */
    public function setOwner(?string $owner = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EmailAddressOwner::valueIsValid($owner)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EmailAddressOwner', is_array($owner) ? implode(', ', $owner) : var_export($owner, true), implode(', ', \EnumType\EmailAddressOwner::getValidValues())), __LINE__);
        }
        $this->owner = $owner;
        
        return $this;
    }
    /**
     * Get ownerId value
     * @return string|null
     */
    public function getOwnerId(): ?string
    {
        return $this->ownerId;
    }
    /**
     * Set ownerId value
     * @param string $ownerId
     * @return \StructType\AddEmailAddress
     */
    public function setOwnerId(?string $ownerId = null): self
    {
        // validation for constraint: string
        if (!is_null($ownerId) && !is_string($ownerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ownerId, true), gettype($ownerId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($ownerId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $ownerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($ownerId, true)), __LINE__);
        }
        $this->ownerId = $ownerId;
        
        return $this;
    }
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmailAddressSaveData|null
     */
    public function getData(): ?\StructType\EmailAddressSaveData
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\EmailAddressSaveData $data
     * @return \StructType\AddEmailAddress
     */
    public function setData(?\StructType\EmailAddressSaveData $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
    /**
     * Get partOfCreateOperation value
     * @return bool|null
     */
    public function getPartOfCreateOperation(): ?bool
    {
        return $this->partOfCreateOperation;
    }
    /**
     * Set partOfCreateOperation value
     * @param bool $partOfCreateOperation
     * @return \StructType\AddEmailAddress
     */
    public function setPartOfCreateOperation(?bool $partOfCreateOperation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($partOfCreateOperation) && !is_bool($partOfCreateOperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($partOfCreateOperation, true), gettype($partOfCreateOperation)), __LINE__);
        }
        $this->partOfCreateOperation = $partOfCreateOperation;
        
        return $this;
    }
}
