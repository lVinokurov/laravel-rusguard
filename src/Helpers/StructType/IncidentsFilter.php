<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncidentsFilter StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IncidentsFilter
 * @subpackage Structs
 */
class IncidentsFilter extends AbstractStructBase
{
    /**
     * The BeginDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $BeginDate = null;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EndDate = null;
    /**
     * The IncidentsMegaFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IncidentsMegaFilter|null
     */
    protected ?\StructType\IncidentsMegaFilter $IncidentsMegaFilter = null;
    /**
     * The IsCurrentDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsCurrentDate = null;
    /**
     * The IsCurrentEmployee
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsCurrentEmployee = null;
    /**
     * The IsEnableFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsEnableFilter = null;
    /**
     * The User
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $User = null;
    /**
     * Constructor method for IncidentsFilter
     * @uses IncidentsFilter::setBeginDate()
     * @uses IncidentsFilter::setEndDate()
     * @uses IncidentsFilter::setIncidentsMegaFilter()
     * @uses IncidentsFilter::setIsCurrentDate()
     * @uses IncidentsFilter::setIsCurrentEmployee()
     * @uses IncidentsFilter::setIsEnableFilter()
     * @uses IncidentsFilter::setUser()
     * @param string $beginDate
     * @param string $endDate
     * @param \StructType\IncidentsMegaFilter $incidentsMegaFilter
     * @param bool $isCurrentDate
     * @param bool $isCurrentEmployee
     * @param bool $isEnableFilter
     * @param string $user
     */
    public function __construct(?string $beginDate = null, ?string $endDate = null, ?\StructType\IncidentsMegaFilter $incidentsMegaFilter = null, ?bool $isCurrentDate = null, ?bool $isCurrentEmployee = null, ?bool $isEnableFilter = null, ?string $user = null)
    {
        $this
            ->setBeginDate($beginDate)
            ->setEndDate($endDate)
            ->setIncidentsMegaFilter($incidentsMegaFilter)
            ->setIsCurrentDate($isCurrentDate)
            ->setIsCurrentEmployee($isCurrentEmployee)
            ->setIsEnableFilter($isEnableFilter)
            ->setUser($user);
    }
    /**
     * Get BeginDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBeginDate(): ?string
    {
        return isset($this->BeginDate) ? $this->BeginDate : null;
    }
    /**
     * Set BeginDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $beginDate
     * @return \StructType\IncidentsFilter
     */
    public function setBeginDate(?string $beginDate = null): self
    {
        // validation for constraint: string
        if (!is_null($beginDate) && !is_string($beginDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginDate, true), gettype($beginDate)), __LINE__);
        }
        if (is_null($beginDate) || (is_array($beginDate) && empty($beginDate))) {
            unset($this->BeginDate);
        } else {
            $this->BeginDate = $beginDate;
        }
        
        return $this;
    }
    /**
     * Get EndDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return isset($this->EndDate) ? $this->EndDate : null;
    }
    /**
     * Set EndDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endDate
     * @return \StructType\IncidentsFilter
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        if (is_null($endDate) || (is_array($endDate) && empty($endDate))) {
            unset($this->EndDate);
        } else {
            $this->EndDate = $endDate;
        }
        
        return $this;
    }
    /**
     * Get IncidentsMegaFilter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IncidentsMegaFilter|null
     */
    public function getIncidentsMegaFilter(): ?\StructType\IncidentsMegaFilter
    {
        return isset($this->IncidentsMegaFilter) ? $this->IncidentsMegaFilter : null;
    }
    /**
     * Set IncidentsMegaFilter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\IncidentsMegaFilter $incidentsMegaFilter
     * @return \StructType\IncidentsFilter
     */
    public function setIncidentsMegaFilter(?\StructType\IncidentsMegaFilter $incidentsMegaFilter = null): self
    {
        if (is_null($incidentsMegaFilter) || (is_array($incidentsMegaFilter) && empty($incidentsMegaFilter))) {
            unset($this->IncidentsMegaFilter);
        } else {
            $this->IncidentsMegaFilter = $incidentsMegaFilter;
        }
        
        return $this;
    }
    /**
     * Get IsCurrentDate value
     * @return bool|null
     */
    public function getIsCurrentDate(): ?bool
    {
        return $this->IsCurrentDate;
    }
    /**
     * Set IsCurrentDate value
     * @param bool $isCurrentDate
     * @return \StructType\IncidentsFilter
     */
    public function setIsCurrentDate(?bool $isCurrentDate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCurrentDate) && !is_bool($isCurrentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCurrentDate, true), gettype($isCurrentDate)), __LINE__);
        }
        $this->IsCurrentDate = $isCurrentDate;
        
        return $this;
    }
    /**
     * Get IsCurrentEmployee value
     * @return bool|null
     */
    public function getIsCurrentEmployee(): ?bool
    {
        return $this->IsCurrentEmployee;
    }
    /**
     * Set IsCurrentEmployee value
     * @param bool $isCurrentEmployee
     * @return \StructType\IncidentsFilter
     */
    public function setIsCurrentEmployee(?bool $isCurrentEmployee = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCurrentEmployee) && !is_bool($isCurrentEmployee)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCurrentEmployee, true), gettype($isCurrentEmployee)), __LINE__);
        }
        $this->IsCurrentEmployee = $isCurrentEmployee;
        
        return $this;
    }
    /**
     * Get IsEnableFilter value
     * @return bool|null
     */
    public function getIsEnableFilter(): ?bool
    {
        return $this->IsEnableFilter;
    }
    /**
     * Set IsEnableFilter value
     * @param bool $isEnableFilter
     * @return \StructType\IncidentsFilter
     */
    public function setIsEnableFilter(?bool $isEnableFilter = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isEnableFilter) && !is_bool($isEnableFilter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEnableFilter, true), gettype($isEnableFilter)), __LINE__);
        }
        $this->IsEnableFilter = $isEnableFilter;
        
        return $this;
    }
    /**
     * Get User value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUser(): ?string
    {
        return isset($this->User) ? $this->User : null;
    }
    /**
     * Set User value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $user
     * @return \StructType\IncidentsFilter
     */
    public function setUser(?string $user = null): self
    {
        // validation for constraint: string
        if (!is_null($user) && !is_string($user)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user, true), gettype($user)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($user) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $user)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($user, true)), __LINE__);
        }
        if (is_null($user) || (is_array($user) && empty($user))) {
            unset($this->User);
        } else {
            $this->User = $user;
        }
        
        return $this;
    }
}
