<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsDayScheduleByOwner StructType
 * @subpackage Structs
 */
class GetAcsDayScheduleByOwner extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $id = null;
    /**
     * The owner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $owner = null;
    /**
     * Constructor method for GetAcsDayScheduleByOwner
     * @uses GetAcsDayScheduleByOwner::setId()
     * @uses GetAcsDayScheduleByOwner::setOwner()
     * @param string $id
     * @param string $owner
     */
    public function __construct(?string $id = null, ?string $owner = null)
    {
        $this
            ->setId($id)
            ->setOwner($owner);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \StructType\GetAcsDayScheduleByOwner
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
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
     * @uses \EnumType\AcsScheduleOwnerType::valueIsValid()
     * @uses \EnumType\AcsScheduleOwnerType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $owner
     * @return \StructType\GetAcsDayScheduleByOwner
     */
    public function setOwner(?string $owner = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\AcsScheduleOwnerType::valueIsValid($owner)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AcsScheduleOwnerType', is_array($owner) ? implode(', ', $owner) : var_export($owner, true), implode(', ', \EnumType\AcsScheduleOwnerType::getValidValues())), __LINE__);
        }
        $this->owner = $owner;
        
        return $this;
    }
}
