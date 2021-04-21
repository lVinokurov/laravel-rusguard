<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReactionEventSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReactionEventSaveData
 * @subpackage Structs
 */
class ReactionEventSaveData extends AbstractStructBase
{
    /**
     * The IsActive
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsActive = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * Constructor method for ReactionEventSaveData
     * @uses ReactionEventSaveData::setIsActive()
     * @uses ReactionEventSaveData::setName()
     * @param bool $isActive
     * @param string $name
     */
    public function __construct(?bool $isActive = null, ?string $name = null)
    {
        $this
            ->setIsActive($isActive)
            ->setName($name);
    }
    /**
     * Get IsActive value
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->IsActive;
    }
    /**
     * Set IsActive value
     * @param bool $isActive
     * @return \StructType\ReactionEventSaveData
     */
    public function setIsActive(?bool $isActive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isActive) && !is_bool($isActive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isActive, true), gettype($isActive)), __LINE__);
        }
        $this->IsActive = $isActive;
        
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\ReactionEventSaveData
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        
        return $this;
    }
}
