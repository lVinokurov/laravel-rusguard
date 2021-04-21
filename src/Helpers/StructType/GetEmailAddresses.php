<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmailAddresses StructType
 * @subpackage Structs
 */
class GetEmailAddresses extends AbstractStructBase
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
     * Constructor method for GetEmailAddresses
     * @uses GetEmailAddresses::setOwner()
     * @uses GetEmailAddresses::setOwnerId()
     * @param string $owner
     * @param string $ownerId
     */
    public function __construct(?string $owner = null, ?string $ownerId = null)
    {
        $this
            ->setOwner($owner)
            ->setOwnerId($ownerId);
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
     * @return \StructType\GetEmailAddresses
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
     * @return \StructType\GetEmailAddresses
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
}
