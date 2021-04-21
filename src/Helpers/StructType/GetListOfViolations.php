<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListOfViolations StructType
 * @subpackage Structs
 */
class GetListOfViolations extends AbstractStructBase
{
    /**
     * The userId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $userId = null;
    /**
     * The departmentsIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $departmentsIds = null;
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
     * Constructor method for GetListOfViolations
     * @uses GetListOfViolations::setUserId()
     * @uses GetListOfViolations::setDepartmentsIds()
     * @uses GetListOfViolations::setStartedOn()
     * @uses GetListOfViolations::setEndedOn()
     * @uses GetListOfViolations::setType()
     * @param string $userId
     * @param \ArrayType\ArrayOfguid $departmentsIds
     * @param string $startedOn
     * @param string $endedOn
     * @param string $type
     */
    public function __construct(?string $userId = null, ?\ArrayType\ArrayOfguid $departmentsIds = null, ?string $startedOn = null, ?string $endedOn = null, ?string $type = null)
    {
        $this
            ->setUserId($userId)
            ->setDepartmentsIds($departmentsIds)
            ->setStartedOn($startedOn)
            ->setEndedOn($endedOn)
            ->setType($type);
    }
    /**
     * Get userId value
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param string $userId
     * @return \StructType\GetListOfViolations
     */
    public function setUserId(?string $userId = null): self
    {
        // validation for constraint: string
        if (!is_null($userId) && !is_string($userId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($userId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $userId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($userId, true)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
    /**
     * Get departmentsIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getDepartmentsIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->departmentsIds) ? $this->departmentsIds : null;
    }
    /**
     * Set departmentsIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $departmentsIds
     * @return \StructType\GetListOfViolations
     */
    public function setDepartmentsIds(?\ArrayType\ArrayOfguid $departmentsIds = null): self
    {
        if (is_null($departmentsIds) || (is_array($departmentsIds) && empty($departmentsIds))) {
            unset($this->departmentsIds);
        } else {
            $this->departmentsIds = $departmentsIds;
        }
        
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
     * @return \StructType\GetListOfViolations
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
     * @return \StructType\GetListOfViolations
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
     * @return \StructType\GetListOfViolations
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
