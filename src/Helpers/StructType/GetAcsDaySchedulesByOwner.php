<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsDaySchedulesByOwner StructType
 * @subpackage Structs
 */
class GetAcsDaySchedulesByOwner extends AbstractStructBase
{
    /**
     * The owner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $owner = null;
    /**
     * Constructor method for GetAcsDaySchedulesByOwner
     * @uses GetAcsDaySchedulesByOwner::setOwner()
     * @param string $owner
     */
    public function __construct(?string $owner = null)
    {
        $this
            ->setOwner($owner);
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
     * @return \StructType\GetAcsDaySchedulesByOwner
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
