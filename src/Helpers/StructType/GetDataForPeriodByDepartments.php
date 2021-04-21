<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDataForPeriodByDepartments StructType
 * @subpackage Structs
 */
class GetDataForPeriodByDepartments extends AbstractStructBase
{
    /**
     * The login
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $login = null;
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
     * Constructor method for GetDataForPeriodByDepartments
     * @uses GetDataForPeriodByDepartments::setLogin()
     * @uses GetDataForPeriodByDepartments::setDepartmentsIds()
     * @uses GetDataForPeriodByDepartments::setStartedOn()
     * @uses GetDataForPeriodByDepartments::setEndedOn()
     * @uses GetDataForPeriodByDepartments::setType()
     * @param string $login
     * @param \ArrayType\ArrayOfguid $departmentsIds
     * @param string $startedOn
     * @param string $endedOn
     * @param string $type
     */
    public function __construct(?string $login = null, ?\ArrayType\ArrayOfguid $departmentsIds = null, ?string $startedOn = null, ?string $endedOn = null, ?string $type = null)
    {
        $this
            ->setLogin($login)
            ->setDepartmentsIds($departmentsIds)
            ->setStartedOn($startedOn)
            ->setEndedOn($endedOn)
            ->setType($type);
    }
    /**
     * Get login value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLogin(): ?string
    {
        return isset($this->login) ? $this->login : null;
    }
    /**
     * Set login value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $login
     * @return \StructType\GetDataForPeriodByDepartments
     */
    public function setLogin(?string $login = null): self
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($login, true), gettype($login)), __LINE__);
        }
        if (is_null($login) || (is_array($login) && empty($login))) {
            unset($this->login);
        } else {
            $this->login = $login;
        }
        
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
     * @return \StructType\GetDataForPeriodByDepartments
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
     * @return \StructType\GetDataForPeriodByDepartments
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
     * @return \StructType\GetDataForPeriodByDepartments
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
     * @return \StructType\GetDataForPeriodByDepartments
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
