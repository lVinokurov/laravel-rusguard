<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncidentTypeInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IncidentTypeInfo
 * @subpackage Structs
 */
class IncidentTypeInfo extends DictionaryElementInfo
{
    /**
     * The IsImportant
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsImportant = null;
    /**
     * Constructor method for IncidentTypeInfo
     * @uses IncidentTypeInfo::setIsImportant()
     * @param bool $isImportant
     */
    public function __construct(?bool $isImportant = null)
    {
        $this
            ->setIsImportant($isImportant);
    }
    /**
     * Get IsImportant value
     * @return bool|null
     */
    public function getIsImportant(): ?bool
    {
        return $this->IsImportant;
    }
    /**
     * Set IsImportant value
     * @param bool $isImportant
     * @return \StructType\IncidentTypeInfo
     */
    public function setIsImportant(?bool $isImportant = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isImportant) && !is_bool($isImportant)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isImportant, true), gettype($isImportant)), __LINE__);
        }
        $this->IsImportant = $isImportant;
        
        return $this;
    }
}
