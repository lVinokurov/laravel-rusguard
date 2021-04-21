<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDataForGraph StructType
 * @subpackage Structs
 */
class GetDataForGraph extends AbstractStructBase
{
    /**
     * The departmentId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $departmentId = null;
    /**
     * The startedOn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $startedOn = null;
    /**
     * The endedOn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $endedOn = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for GetDataForGraph
     * @uses GetDataForGraph::setDepartmentId()
     * @uses GetDataForGraph::setStartedOn()
     * @uses GetDataForGraph::setEndedOn()
     * @uses GetDataForGraph::setType()
     * @param string $departmentId
     * @param string $startedOn
     * @param string $endedOn
     * @param string $type
     */
    public function __construct(?string $departmentId = null, ?string $startedOn = null, ?string $endedOn = null, ?string $type = null)
    {
        $this
            ->setDepartmentId($departmentId)
            ->setStartedOn($startedOn)
            ->setEndedOn($endedOn)
            ->setType($type);
    }
    /**
     * Get departmentId value
     * @return string|null
     */
    public function getDepartmentId(): ?string
    {
        return $this->departmentId;
    }
    /**
     * Set departmentId value
     * @param string $departmentId
     * @return \StructType\GetDataForGraph
     */
    public function setDepartmentId(?string $departmentId = null): self
    {
        // validation for constraint: string
        if (!is_null($departmentId) && !is_string($departmentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departmentId, true), gettype($departmentId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($departmentId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $departmentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($departmentId, true)), __LINE__);
        }
        $this->departmentId = $departmentId;
        
        return $this;
    }
    /**
     * Get startedOn value
     * @return string|null
     */
    public function getStartedOn(): ?string
    {
        return $this->startedOn;
    }
    /**
     * Set startedOn value
     * @param string $startedOn
     * @return \StructType\GetDataForGraph
     */
    public function setStartedOn(?string $startedOn = null): self
    {
        // validation for constraint: string
        if (!is_null($startedOn) && !is_string($startedOn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startedOn, true), gettype($startedOn)), __LINE__);
        }
        $this->startedOn = $startedOn;
        
        return $this;
    }
    /**
     * Get endedOn value
     * @return string|null
     */
    public function getEndedOn(): ?string
    {
        return $this->endedOn;
    }
    /**
     * Set endedOn value
     * @param string $endedOn
     * @return \StructType\GetDataForGraph
     */
    public function setEndedOn(?string $endedOn = null): self
    {
        // validation for constraint: string
        if (!is_null($endedOn) && !is_string($endedOn)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endedOn, true), gettype($endedOn)), __LINE__);
        }
        $this->endedOn = $endedOn;
        
        return $this;
    }
    /**
     * Get type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getType(): ?string
    {
        return isset($this->type) ? $this->type : null;
    }
    /**
     * Set type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \EnumType\ViolationType::valueIsValid()
     * @uses \EnumType\ViolationType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \StructType\GetDataForGraph
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ViolationType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ViolationType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\ViolationType::getValidValues())), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->type);
        } else {
            $this->type = $type;
        }
        
        return $this;
    }
}
