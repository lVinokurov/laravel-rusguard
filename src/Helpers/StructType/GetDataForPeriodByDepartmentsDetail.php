<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDataForPeriodByDepartmentsDetail StructType
 * @subpackage Structs
 */
class GetDataForPeriodByDepartmentsDetail extends AbstractStructBase
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
     * Constructor method for GetDataForPeriodByDepartmentsDetail
     * @uses GetDataForPeriodByDepartmentsDetail::setLogin()
     * @uses GetDataForPeriodByDepartmentsDetail::setDepartmentId()
     * @uses GetDataForPeriodByDepartmentsDetail::setStartedOn()
     * @uses GetDataForPeriodByDepartmentsDetail::setEndedOn()
     * @param string $login
     * @param string $departmentId
     * @param string $startedOn
     * @param string $endedOn
     */
    public function __construct(?string $login = null, ?string $departmentId = null, ?string $startedOn = null, ?string $endedOn = null)
    {
        $this
            ->setLogin($login)
            ->setDepartmentId($departmentId)
            ->setStartedOn($startedOn)
            ->setEndedOn($endedOn);
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
     * @return \StructType\GetDataForPeriodByDepartmentsDetail
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
     * @return \StructType\GetDataForPeriodByDepartmentsDetail
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
     * @return \StructType\GetDataForPeriodByDepartmentsDetail
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
     * @return \StructType\GetDataForPeriodByDepartmentsDetail
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
}
