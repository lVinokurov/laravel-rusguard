<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReportSaveData
 * @subpackage Structs
 */
class ReportSaveData extends AbstractStructBase
{
    /**
     * The AdditionalField1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AdditionalField1 = null;
    /**
     * The AdditionalField2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AdditionalField2 = null;
    /**
     * The AdditionalField3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AdditionalField3 = null;
    /**
     * The Company
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Company = null;
    /**
     * The Department
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Department = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The Filter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Filter = null;
    /**
     * The Identity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Identity = null;
    /**
     * The IsShowAllDevices
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsShowAllDevices = null;
    /**
     * The IsShowAllEmployees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsShowAllEmployees = null;
    /**
     * The IsShowAllEvents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsShowAllEvents = null;
    /**
     * The IsShowAllVehicle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsShowAllVehicle = null;
    /**
     * The IsShowAllVehicleTypes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsShowAllVehicleTypes = null;
    /**
     * The IsShowAllWorkZones
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsShowAllWorkZones = null;
    /**
     * The IsShowEventsWithRelatedData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsShowEventsWithRelatedData = null;
    /**
     * The IsShowRemovedEmployees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsShowRemovedEmployees = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * Constructor method for ReportSaveData
     * @uses ReportSaveData::setAdditionalField1()
     * @uses ReportSaveData::setAdditionalField2()
     * @uses ReportSaveData::setAdditionalField3()
     * @uses ReportSaveData::setCompany()
     * @uses ReportSaveData::setDepartment()
     * @uses ReportSaveData::setDescription()
     * @uses ReportSaveData::setFilter()
     * @uses ReportSaveData::setIdentity()
     * @uses ReportSaveData::setIsShowAllDevices()
     * @uses ReportSaveData::setIsShowAllEmployees()
     * @uses ReportSaveData::setIsShowAllEvents()
     * @uses ReportSaveData::setIsShowAllVehicle()
     * @uses ReportSaveData::setIsShowAllVehicleTypes()
     * @uses ReportSaveData::setIsShowAllWorkZones()
     * @uses ReportSaveData::setIsShowEventsWithRelatedData()
     * @uses ReportSaveData::setIsShowRemovedEmployees()
     * @uses ReportSaveData::setName()
     * @param string $additionalField1
     * @param string $additionalField2
     * @param string $additionalField3
     * @param string $company
     * @param string $department
     * @param string $description
     * @param int $filter
     * @param string $identity
     * @param bool $isShowAllDevices
     * @param bool $isShowAllEmployees
     * @param bool $isShowAllEvents
     * @param bool $isShowAllVehicle
     * @param bool $isShowAllVehicleTypes
     * @param bool $isShowAllWorkZones
     * @param bool $isShowEventsWithRelatedData
     * @param bool $isShowRemovedEmployees
     * @param string $name
     */
    public function __construct(?string $additionalField1 = null, ?string $additionalField2 = null, ?string $additionalField3 = null, ?string $company = null, ?string $department = null, ?string $description = null, ?int $filter = null, ?string $identity = null, ?bool $isShowAllDevices = null, ?bool $isShowAllEmployees = null, ?bool $isShowAllEvents = null, ?bool $isShowAllVehicle = null, ?bool $isShowAllVehicleTypes = null, ?bool $isShowAllWorkZones = null, ?bool $isShowEventsWithRelatedData = null, ?bool $isShowRemovedEmployees = null, ?string $name = null)
    {
        $this
            ->setAdditionalField1($additionalField1)
            ->setAdditionalField2($additionalField2)
            ->setAdditionalField3($additionalField3)
            ->setCompany($company)
            ->setDepartment($department)
            ->setDescription($description)
            ->setFilter($filter)
            ->setIdentity($identity)
            ->setIsShowAllDevices($isShowAllDevices)
            ->setIsShowAllEmployees($isShowAllEmployees)
            ->setIsShowAllEvents($isShowAllEvents)
            ->setIsShowAllVehicle($isShowAllVehicle)
            ->setIsShowAllVehicleTypes($isShowAllVehicleTypes)
            ->setIsShowAllWorkZones($isShowAllWorkZones)
            ->setIsShowEventsWithRelatedData($isShowEventsWithRelatedData)
            ->setIsShowRemovedEmployees($isShowRemovedEmployees)
            ->setName($name);
    }
    /**
     * Get AdditionalField1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditionalField1(): ?string
    {
        return isset($this->AdditionalField1) ? $this->AdditionalField1 : null;
    }
    /**
     * Set AdditionalField1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additionalField1
     * @return \StructType\ReportSaveData
     */
    public function setAdditionalField1(?string $additionalField1 = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalField1) && !is_string($additionalField1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalField1, true), gettype($additionalField1)), __LINE__);
        }
        if (is_null($additionalField1) || (is_array($additionalField1) && empty($additionalField1))) {
            unset($this->AdditionalField1);
        } else {
            $this->AdditionalField1 = $additionalField1;
        }
        
        return $this;
    }
    /**
     * Get AdditionalField2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditionalField2(): ?string
    {
        return isset($this->AdditionalField2) ? $this->AdditionalField2 : null;
    }
    /**
     * Set AdditionalField2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additionalField2
     * @return \StructType\ReportSaveData
     */
    public function setAdditionalField2(?string $additionalField2 = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalField2) && !is_string($additionalField2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalField2, true), gettype($additionalField2)), __LINE__);
        }
        if (is_null($additionalField2) || (is_array($additionalField2) && empty($additionalField2))) {
            unset($this->AdditionalField2);
        } else {
            $this->AdditionalField2 = $additionalField2;
        }
        
        return $this;
    }
    /**
     * Get AdditionalField3 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditionalField3(): ?string
    {
        return isset($this->AdditionalField3) ? $this->AdditionalField3 : null;
    }
    /**
     * Set AdditionalField3 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additionalField3
     * @return \StructType\ReportSaveData
     */
    public function setAdditionalField3(?string $additionalField3 = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalField3) && !is_string($additionalField3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalField3, true), gettype($additionalField3)), __LINE__);
        }
        if (is_null($additionalField3) || (is_array($additionalField3) && empty($additionalField3))) {
            unset($this->AdditionalField3);
        } else {
            $this->AdditionalField3 = $additionalField3;
        }
        
        return $this;
    }
    /**
     * Get Company value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCompany(): ?string
    {
        return isset($this->Company) ? $this->Company : null;
    }
    /**
     * Set Company value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $company
     * @return \StructType\ReportSaveData
     */
    public function setCompany(?string $company = null): self
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company, true), gettype($company)), __LINE__);
        }
        if (is_null($company) || (is_array($company) && empty($company))) {
            unset($this->Company);
        } else {
            $this->Company = $company;
        }
        
        return $this;
    }
    /**
     * Get Department value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDepartment(): ?string
    {
        return isset($this->Department) ? $this->Department : null;
    }
    /**
     * Set Department value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $department
     * @return \StructType\ReportSaveData
     */
    public function setDepartment(?string $department = null): self
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($department, true), gettype($department)), __LINE__);
        }
        if (is_null($department) || (is_array($department) && empty($department))) {
            unset($this->Department);
        } else {
            $this->Department = $department;
        }
        
        return $this;
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \StructType\ReportSaveData
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        
        return $this;
    }
    /**
     * Get Filter value
     * @return int|null
     */
    public function getFilter(): ?int
    {
        return $this->Filter;
    }
    /**
     * Set Filter value
     * @param int $filter
     * @return \StructType\ReportSaveData
     */
    public function setFilter(?int $filter = null): self
    {
        // validation for constraint: int
        if (!is_null($filter) && !(is_int($filter) || ctype_digit($filter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($filter, true), gettype($filter)), __LINE__);
        }
        $this->Filter = $filter;
        
        return $this;
    }
    /**
     * Get Identity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIdentity(): ?string
    {
        return isset($this->Identity) ? $this->Identity : null;
    }
    /**
     * Set Identity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $identity
     * @return \StructType\ReportSaveData
     */
    public function setIdentity(?string $identity = null): self
    {
        // validation for constraint: string
        if (!is_null($identity) && !is_string($identity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identity, true), gettype($identity)), __LINE__);
        }
        if (is_null($identity) || (is_array($identity) && empty($identity))) {
            unset($this->Identity);
        } else {
            $this->Identity = $identity;
        }
        
        return $this;
    }
    /**
     * Get IsShowAllDevices value
     * @return bool|null
     */
    public function getIsShowAllDevices(): ?bool
    {
        return $this->IsShowAllDevices;
    }
    /**
     * Set IsShowAllDevices value
     * @param bool $isShowAllDevices
     * @return \StructType\ReportSaveData
     */
    public function setIsShowAllDevices(?bool $isShowAllDevices = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isShowAllDevices) && !is_bool($isShowAllDevices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShowAllDevices, true), gettype($isShowAllDevices)), __LINE__);
        }
        $this->IsShowAllDevices = $isShowAllDevices;
        
        return $this;
    }
    /**
     * Get IsShowAllEmployees value
     * @return bool|null
     */
    public function getIsShowAllEmployees(): ?bool
    {
        return $this->IsShowAllEmployees;
    }
    /**
     * Set IsShowAllEmployees value
     * @param bool $isShowAllEmployees
     * @return \StructType\ReportSaveData
     */
    public function setIsShowAllEmployees(?bool $isShowAllEmployees = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isShowAllEmployees) && !is_bool($isShowAllEmployees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShowAllEmployees, true), gettype($isShowAllEmployees)), __LINE__);
        }
        $this->IsShowAllEmployees = $isShowAllEmployees;
        
        return $this;
    }
    /**
     * Get IsShowAllEvents value
     * @return bool|null
     */
    public function getIsShowAllEvents(): ?bool
    {
        return $this->IsShowAllEvents;
    }
    /**
     * Set IsShowAllEvents value
     * @param bool $isShowAllEvents
     * @return \StructType\ReportSaveData
     */
    public function setIsShowAllEvents(?bool $isShowAllEvents = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isShowAllEvents) && !is_bool($isShowAllEvents)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShowAllEvents, true), gettype($isShowAllEvents)), __LINE__);
        }
        $this->IsShowAllEvents = $isShowAllEvents;
        
        return $this;
    }
    /**
     * Get IsShowAllVehicle value
     * @return bool|null
     */
    public function getIsShowAllVehicle(): ?bool
    {
        return $this->IsShowAllVehicle;
    }
    /**
     * Set IsShowAllVehicle value
     * @param bool $isShowAllVehicle
     * @return \StructType\ReportSaveData
     */
    public function setIsShowAllVehicle(?bool $isShowAllVehicle = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isShowAllVehicle) && !is_bool($isShowAllVehicle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShowAllVehicle, true), gettype($isShowAllVehicle)), __LINE__);
        }
        $this->IsShowAllVehicle = $isShowAllVehicle;
        
        return $this;
    }
    /**
     * Get IsShowAllVehicleTypes value
     * @return bool|null
     */
    public function getIsShowAllVehicleTypes(): ?bool
    {
        return $this->IsShowAllVehicleTypes;
    }
    /**
     * Set IsShowAllVehicleTypes value
     * @param bool $isShowAllVehicleTypes
     * @return \StructType\ReportSaveData
     */
    public function setIsShowAllVehicleTypes(?bool $isShowAllVehicleTypes = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isShowAllVehicleTypes) && !is_bool($isShowAllVehicleTypes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShowAllVehicleTypes, true), gettype($isShowAllVehicleTypes)), __LINE__);
        }
        $this->IsShowAllVehicleTypes = $isShowAllVehicleTypes;
        
        return $this;
    }
    /**
     * Get IsShowAllWorkZones value
     * @return bool|null
     */
    public function getIsShowAllWorkZones(): ?bool
    {
        return $this->IsShowAllWorkZones;
    }
    /**
     * Set IsShowAllWorkZones value
     * @param bool $isShowAllWorkZones
     * @return \StructType\ReportSaveData
     */
    public function setIsShowAllWorkZones(?bool $isShowAllWorkZones = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isShowAllWorkZones) && !is_bool($isShowAllWorkZones)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShowAllWorkZones, true), gettype($isShowAllWorkZones)), __LINE__);
        }
        $this->IsShowAllWorkZones = $isShowAllWorkZones;
        
        return $this;
    }
    /**
     * Get IsShowEventsWithRelatedData value
     * @return bool|null
     */
    public function getIsShowEventsWithRelatedData(): ?bool
    {
        return $this->IsShowEventsWithRelatedData;
    }
    /**
     * Set IsShowEventsWithRelatedData value
     * @param bool $isShowEventsWithRelatedData
     * @return \StructType\ReportSaveData
     */
    public function setIsShowEventsWithRelatedData(?bool $isShowEventsWithRelatedData = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isShowEventsWithRelatedData) && !is_bool($isShowEventsWithRelatedData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShowEventsWithRelatedData, true), gettype($isShowEventsWithRelatedData)), __LINE__);
        }
        $this->IsShowEventsWithRelatedData = $isShowEventsWithRelatedData;
        
        return $this;
    }
    /**
     * Get IsShowRemovedEmployees value
     * @return bool|null
     */
    public function getIsShowRemovedEmployees(): ?bool
    {
        return $this->IsShowRemovedEmployees;
    }
    /**
     * Set IsShowRemovedEmployees value
     * @param bool $isShowRemovedEmployees
     * @return \StructType\ReportSaveData
     */
    public function setIsShowRemovedEmployees(?bool $isShowRemovedEmployees = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isShowRemovedEmployees) && !is_bool($isShowRemovedEmployees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShowRemovedEmployees, true), gettype($isShowRemovedEmployees)), __LINE__);
        }
        $this->IsShowRemovedEmployees = $isShowRemovedEmployees;
        
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
     * @return \StructType\ReportSaveData
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
