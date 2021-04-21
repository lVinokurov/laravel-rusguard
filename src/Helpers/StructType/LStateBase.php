<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LStateBase StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LStateBase
 * @subpackage Structs
 */
class LStateBase extends AbstractStructBase
{
    /**
     * The State
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $State = null;
    /**
     * Constructor method for LStateBase
     * @uses LStateBase::setState()
     * @param string $state
     */
    public function __construct(?string $state = null)
    {
        $this
            ->setState($state);
    }
    /**
     * Get State value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->State;
    }
    /**
     * Set State value
     * @uses \EnumType\StorageStateEnum::valueIsValid()
     * @uses \EnumType\StorageStateEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $state
     * @return \StructType\LStateBase
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\StorageStateEnum::valueIsValid($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StorageStateEnum', is_array($state) ? implode(', ', $state) : var_export($state, true), implode(', ', \EnumType\StorageStateEnum::getValidValues())), __LINE__);
        }
        $this->State = $state;
        
        return $this;
    }
}
