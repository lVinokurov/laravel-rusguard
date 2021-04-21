<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveSwitchedOffLogMessageSubtypesFromWorkplace
 * StructType
 * @subpackage Structs
 */
class RemoveSwitchedOffLogMessageSubtypesFromWorkplace extends AbstractStructBase
{
    /**
     * The workplaceId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $workplaceId = null;
    /**
     * The subtypes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLogMsgSubType|null
     */
    protected ?\ArrayType\ArrayOfLogMsgSubType $subtypes = null;
    /**
     * Constructor method for RemoveSwitchedOffLogMessageSubtypesFromWorkplace
     * @uses RemoveSwitchedOffLogMessageSubtypesFromWorkplace::setWorkplaceId()
     * @uses RemoveSwitchedOffLogMessageSubtypesFromWorkplace::setSubtypes()
     * @param string $workplaceId
     * @param \ArrayType\ArrayOfLogMsgSubType $subtypes
     */
    public function __construct(?string $workplaceId = null, ?\ArrayType\ArrayOfLogMsgSubType $subtypes = null)
    {
        $this
            ->setWorkplaceId($workplaceId)
            ->setSubtypes($subtypes);
    }
    /**
     * Get workplaceId value
     * @return string|null
     */
    public function getWorkplaceId(): ?string
    {
        return $this->workplaceId;
    }
    /**
     * Set workplaceId value
     * @param string $workplaceId
     * @return \StructType\RemoveSwitchedOffLogMessageSubtypesFromWorkplace
     */
    public function setWorkplaceId(?string $workplaceId = null): self
    {
        // validation for constraint: string
        if (!is_null($workplaceId) && !is_string($workplaceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workplaceId, true), gettype($workplaceId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($workplaceId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $workplaceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($workplaceId, true)), __LINE__);
        }
        $this->workplaceId = $workplaceId;
        
        return $this;
    }
    /**
     * Get subtypes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLogMsgSubType|null
     */
    public function getSubtypes(): ?\ArrayType\ArrayOfLogMsgSubType
    {
        return isset($this->subtypes) ? $this->subtypes : null;
    }
    /**
     * Set subtypes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLogMsgSubType $subtypes
     * @return \StructType\RemoveSwitchedOffLogMessageSubtypesFromWorkplace
     */
    public function setSubtypes(?\ArrayType\ArrayOfLogMsgSubType $subtypes = null): self
    {
        if (is_null($subtypes) || (is_array($subtypes) && empty($subtypes))) {
            unset($this->subtypes);
        } else {
            $this->subtypes = $subtypes;
        }
        
        return $this;
    }
}
