<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncidentElementFullInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IncidentElementFullInfo
 * @subpackage Structs
 */
class IncidentElementFullInfo extends IncidentSaveInfo
{
    /**
     * The AcsEmployeeDocumentsData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeDocumentsData|null
     */
    protected ?\StructType\AcsEmployeeDocumentsData $AcsEmployeeDocumentsData = null;
    /**
     * The AcsEmployeeFull
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeFull|null
     */
    protected ?\StructType\AcsEmployeeFull $AcsEmployeeFull = null;
    /**
     * The BranchName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $BranchName = null;
    /**
     * The DocumentTypeName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DocumentTypeName = null;
    /**
     * The EmployeeFullName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeeFullName = null;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ID = null;
    /**
     * The LocationClarificationName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $LocationClarificationName = null;
    /**
     * The LocationName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $LocationName = null;
    /**
     * The Members
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfViolatorFullInfo|null
     */
    protected ?\ArrayType\ArrayOfViolatorFullInfo $Members = null;
    /**
     * The SecurityGroupName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SecurityGroupName = null;
    /**
     * The SignificanceName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SignificanceName = null;
    /**
     * The Tangibles
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfTangiblesFullInfo|null
     */
    protected ?\ArrayType\ArrayOfTangiblesFullInfo $Tangibles = null;
    /**
     * The Vehicle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsVehicle|null
     */
    protected ?\StructType\AcsVehicle $Vehicle = null;
    /**
     * The VehicleOrganizationName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $VehicleOrganizationName = null;
    /**
     * The ViolationNatureName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ViolationNatureName = null;
    /**
     * The ViolationTheftMethodName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ViolationTheftMethodName = null;
    /**
     * The ViolationTypeName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ViolationTypeName = null;
    /**
     * The Violators
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfViolatorFullInfo|null
     */
    protected ?\ArrayType\ArrayOfViolatorFullInfo $Violators = null;
    /**
     * Constructor method for IncidentElementFullInfo
     * @uses IncidentElementFullInfo::setAcsEmployeeDocumentsData()
     * @uses IncidentElementFullInfo::setAcsEmployeeFull()
     * @uses IncidentElementFullInfo::setBranchName()
     * @uses IncidentElementFullInfo::setDocumentTypeName()
     * @uses IncidentElementFullInfo::setEmployeeFullName()
     * @uses IncidentElementFullInfo::setID()
     * @uses IncidentElementFullInfo::setLocationClarificationName()
     * @uses IncidentElementFullInfo::setLocationName()
     * @uses IncidentElementFullInfo::setMembers()
     * @uses IncidentElementFullInfo::setSecurityGroupName()
     * @uses IncidentElementFullInfo::setSignificanceName()
     * @uses IncidentElementFullInfo::setTangibles()
     * @uses IncidentElementFullInfo::setVehicle()
     * @uses IncidentElementFullInfo::setVehicleOrganizationName()
     * @uses IncidentElementFullInfo::setViolationNatureName()
     * @uses IncidentElementFullInfo::setViolationTheftMethodName()
     * @uses IncidentElementFullInfo::setViolationTypeName()
     * @uses IncidentElementFullInfo::setViolators()
     * @param \StructType\AcsEmployeeDocumentsData $acsEmployeeDocumentsData
     * @param \StructType\AcsEmployeeFull $acsEmployeeFull
     * @param string $branchName
     * @param string $documentTypeName
     * @param string $employeeFullName
     * @param string $iD
     * @param string $locationClarificationName
     * @param string $locationName
     * @param \ArrayType\ArrayOfViolatorFullInfo $members
     * @param string $securityGroupName
     * @param string $significanceName
     * @param \ArrayType\ArrayOfTangiblesFullInfo $tangibles
     * @param \StructType\AcsVehicle $vehicle
     * @param string $vehicleOrganizationName
     * @param string $violationNatureName
     * @param string $violationTheftMethodName
     * @param string $violationTypeName
     * @param \ArrayType\ArrayOfViolatorFullInfo $violators
     */
    public function __construct(?\StructType\AcsEmployeeDocumentsData $acsEmployeeDocumentsData = null, ?\StructType\AcsEmployeeFull $acsEmployeeFull = null, ?string $branchName = null, ?string $documentTypeName = null, ?string $employeeFullName = null, ?string $iD = null, ?string $locationClarificationName = null, ?string $locationName = null, ?\ArrayType\ArrayOfViolatorFullInfo $members = null, ?string $securityGroupName = null, ?string $significanceName = null, ?\ArrayType\ArrayOfTangiblesFullInfo $tangibles = null, ?\StructType\AcsVehicle $vehicle = null, ?string $vehicleOrganizationName = null, ?string $violationNatureName = null, ?string $violationTheftMethodName = null, ?string $violationTypeName = null, ?\ArrayType\ArrayOfViolatorFullInfo $violators = null)
    {
        $this
            ->setAcsEmployeeDocumentsData($acsEmployeeDocumentsData)
            ->setAcsEmployeeFull($acsEmployeeFull)
            ->setBranchName($branchName)
            ->setDocumentTypeName($documentTypeName)
            ->setEmployeeFullName($employeeFullName)
            ->setID($iD)
            ->setLocationClarificationName($locationClarificationName)
            ->setLocationName($locationName)
            ->setMembers($members)
            ->setSecurityGroupName($securityGroupName)
            ->setSignificanceName($significanceName)
            ->setTangibles($tangibles)
            ->setVehicle($vehicle)
            ->setVehicleOrganizationName($vehicleOrganizationName)
            ->setViolationNatureName($violationNatureName)
            ->setViolationTheftMethodName($violationTheftMethodName)
            ->setViolationTypeName($violationTypeName)
            ->setViolators($violators);
    }
    /**
     * Get AcsEmployeeDocumentsData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeDocumentsData|null
     */
    public function getAcsEmployeeDocumentsData(): ?\StructType\AcsEmployeeDocumentsData
    {
        return isset($this->AcsEmployeeDocumentsData) ? $this->AcsEmployeeDocumentsData : null;
    }
    /**
     * Set AcsEmployeeDocumentsData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsEmployeeDocumentsData $acsEmployeeDocumentsData
     * @return \StructType\IncidentElementFullInfo
     */
    public function setAcsEmployeeDocumentsData(?\StructType\AcsEmployeeDocumentsData $acsEmployeeDocumentsData = null): self
    {
        if (is_null($acsEmployeeDocumentsData) || (is_array($acsEmployeeDocumentsData) && empty($acsEmployeeDocumentsData))) {
            unset($this->AcsEmployeeDocumentsData);
        } else {
            $this->AcsEmployeeDocumentsData = $acsEmployeeDocumentsData;
        }
        
        return $this;
    }
    /**
     * Get AcsEmployeeFull value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeFull|null
     */
    public function getAcsEmployeeFull(): ?\StructType\AcsEmployeeFull
    {
        return isset($this->AcsEmployeeFull) ? $this->AcsEmployeeFull : null;
    }
    /**
     * Set AcsEmployeeFull value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsEmployeeFull $acsEmployeeFull
     * @return \StructType\IncidentElementFullInfo
     */
    public function setAcsEmployeeFull(?\StructType\AcsEmployeeFull $acsEmployeeFull = null): self
    {
        if (is_null($acsEmployeeFull) || (is_array($acsEmployeeFull) && empty($acsEmployeeFull))) {
            unset($this->AcsEmployeeFull);
        } else {
            $this->AcsEmployeeFull = $acsEmployeeFull;
        }
        
        return $this;
    }
    /**
     * Get BranchName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBranchName(): ?string
    {
        return isset($this->BranchName) ? $this->BranchName : null;
    }
    /**
     * Set BranchName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $branchName
     * @return \StructType\IncidentElementFullInfo
     */
    public function setBranchName(?string $branchName = null): self
    {
        // validation for constraint: string
        if (!is_null($branchName) && !is_string($branchName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($branchName, true), gettype($branchName)), __LINE__);
        }
        if (is_null($branchName) || (is_array($branchName) && empty($branchName))) {
            unset($this->BranchName);
        } else {
            $this->BranchName = $branchName;
        }
        
        return $this;
    }
    /**
     * Get DocumentTypeName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocumentTypeName(): ?string
    {
        return isset($this->DocumentTypeName) ? $this->DocumentTypeName : null;
    }
    /**
     * Set DocumentTypeName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $documentTypeName
     * @return \StructType\IncidentElementFullInfo
     */
    public function setDocumentTypeName(?string $documentTypeName = null): self
    {
        // validation for constraint: string
        if (!is_null($documentTypeName) && !is_string($documentTypeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentTypeName, true), gettype($documentTypeName)), __LINE__);
        }
        if (is_null($documentTypeName) || (is_array($documentTypeName) && empty($documentTypeName))) {
            unset($this->DocumentTypeName);
        } else {
            $this->DocumentTypeName = $documentTypeName;
        }
        
        return $this;
    }
    /**
     * Get EmployeeFullName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeFullName(): ?string
    {
        return isset($this->EmployeeFullName) ? $this->EmployeeFullName : null;
    }
    /**
     * Set EmployeeFullName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeFullName
     * @return \StructType\IncidentElementFullInfo
     */
    public function setEmployeeFullName(?string $employeeFullName = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeFullName) && !is_string($employeeFullName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeFullName, true), gettype($employeeFullName)), __LINE__);
        }
        if (is_null($employeeFullName) || (is_array($employeeFullName) && empty($employeeFullName))) {
            unset($this->EmployeeFullName);
        } else {
            $this->EmployeeFullName = $employeeFullName;
        }
        
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\IncidentElementFullInfo
     */
    public function setID(?string $iD = null): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($iD) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($iD, true)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get LocationClarificationName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLocationClarificationName(): ?string
    {
        return isset($this->LocationClarificationName) ? $this->LocationClarificationName : null;
    }
    /**
     * Set LocationClarificationName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $locationClarificationName
     * @return \StructType\IncidentElementFullInfo
     */
    public function setLocationClarificationName(?string $locationClarificationName = null): self
    {
        // validation for constraint: string
        if (!is_null($locationClarificationName) && !is_string($locationClarificationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationClarificationName, true), gettype($locationClarificationName)), __LINE__);
        }
        if (is_null($locationClarificationName) || (is_array($locationClarificationName) && empty($locationClarificationName))) {
            unset($this->LocationClarificationName);
        } else {
            $this->LocationClarificationName = $locationClarificationName;
        }
        
        return $this;
    }
    /**
     * Get LocationName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLocationName(): ?string
    {
        return isset($this->LocationName) ? $this->LocationName : null;
    }
    /**
     * Set LocationName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $locationName
     * @return \StructType\IncidentElementFullInfo
     */
    public function setLocationName(?string $locationName = null): self
    {
        // validation for constraint: string
        if (!is_null($locationName) && !is_string($locationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationName, true), gettype($locationName)), __LINE__);
        }
        if (is_null($locationName) || (is_array($locationName) && empty($locationName))) {
            unset($this->LocationName);
        } else {
            $this->LocationName = $locationName;
        }
        
        return $this;
    }
    /**
     * Get Members value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfViolatorFullInfo|null
     */
    public function getMembers(): ?\ArrayType\ArrayOfViolatorFullInfo
    {
        return isset($this->Members) ? $this->Members : null;
    }
    /**
     * Set Members value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfViolatorFullInfo $members
     * @return \StructType\IncidentElementFullInfo
     */
    public function setMembers(?\ArrayType\ArrayOfViolatorFullInfo $members = null): self
    {
        if (is_null($members) || (is_array($members) && empty($members))) {
            unset($this->Members);
        } else {
            $this->Members = $members;
        }
        
        return $this;
    }
    /**
     * Get SecurityGroupName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSecurityGroupName(): ?string
    {
        return isset($this->SecurityGroupName) ? $this->SecurityGroupName : null;
    }
    /**
     * Set SecurityGroupName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $securityGroupName
     * @return \StructType\IncidentElementFullInfo
     */
    public function setSecurityGroupName(?string $securityGroupName = null): self
    {
        // validation for constraint: string
        if (!is_null($securityGroupName) && !is_string($securityGroupName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($securityGroupName, true), gettype($securityGroupName)), __LINE__);
        }
        if (is_null($securityGroupName) || (is_array($securityGroupName) && empty($securityGroupName))) {
            unset($this->SecurityGroupName);
        } else {
            $this->SecurityGroupName = $securityGroupName;
        }
        
        return $this;
    }
    /**
     * Get SignificanceName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSignificanceName(): ?string
    {
        return isset($this->SignificanceName) ? $this->SignificanceName : null;
    }
    /**
     * Set SignificanceName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $significanceName
     * @return \StructType\IncidentElementFullInfo
     */
    public function setSignificanceName(?string $significanceName = null): self
    {
        // validation for constraint: string
        if (!is_null($significanceName) && !is_string($significanceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($significanceName, true), gettype($significanceName)), __LINE__);
        }
        if (is_null($significanceName) || (is_array($significanceName) && empty($significanceName))) {
            unset($this->SignificanceName);
        } else {
            $this->SignificanceName = $significanceName;
        }
        
        return $this;
    }
    /**
     * Get Tangibles value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfTangiblesFullInfo|null
     */
    public function getTangibles(): ?\ArrayType\ArrayOfTangiblesFullInfo
    {
        return isset($this->Tangibles) ? $this->Tangibles : null;
    }
    /**
     * Set Tangibles value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfTangiblesFullInfo $tangibles
     * @return \StructType\IncidentElementFullInfo
     */
    public function setTangibles(?\ArrayType\ArrayOfTangiblesFullInfo $tangibles = null): self
    {
        if (is_null($tangibles) || (is_array($tangibles) && empty($tangibles))) {
            unset($this->Tangibles);
        } else {
            $this->Tangibles = $tangibles;
        }
        
        return $this;
    }
    /**
     * Get Vehicle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsVehicle|null
     */
    public function getVehicle(): ?\StructType\AcsVehicle
    {
        return isset($this->Vehicle) ? $this->Vehicle : null;
    }
    /**
     * Set Vehicle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsVehicle $vehicle
     * @return \StructType\IncidentElementFullInfo
     */
    public function setVehicle(?\StructType\AcsVehicle $vehicle = null): self
    {
        if (is_null($vehicle) || (is_array($vehicle) && empty($vehicle))) {
            unset($this->Vehicle);
        } else {
            $this->Vehicle = $vehicle;
        }
        
        return $this;
    }
    /**
     * Get VehicleOrganizationName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVehicleOrganizationName(): ?string
    {
        return isset($this->VehicleOrganizationName) ? $this->VehicleOrganizationName : null;
    }
    /**
     * Set VehicleOrganizationName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vehicleOrganizationName
     * @return \StructType\IncidentElementFullInfo
     */
    public function setVehicleOrganizationName(?string $vehicleOrganizationName = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleOrganizationName) && !is_string($vehicleOrganizationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleOrganizationName, true), gettype($vehicleOrganizationName)), __LINE__);
        }
        if (is_null($vehicleOrganizationName) || (is_array($vehicleOrganizationName) && empty($vehicleOrganizationName))) {
            unset($this->VehicleOrganizationName);
        } else {
            $this->VehicleOrganizationName = $vehicleOrganizationName;
        }
        
        return $this;
    }
    /**
     * Get ViolationNatureName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getViolationNatureName(): ?string
    {
        return isset($this->ViolationNatureName) ? $this->ViolationNatureName : null;
    }
    /**
     * Set ViolationNatureName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $violationNatureName
     * @return \StructType\IncidentElementFullInfo
     */
    public function setViolationNatureName(?string $violationNatureName = null): self
    {
        // validation for constraint: string
        if (!is_null($violationNatureName) && !is_string($violationNatureName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($violationNatureName, true), gettype($violationNatureName)), __LINE__);
        }
        if (is_null($violationNatureName) || (is_array($violationNatureName) && empty($violationNatureName))) {
            unset($this->ViolationNatureName);
        } else {
            $this->ViolationNatureName = $violationNatureName;
        }
        
        return $this;
    }
    /**
     * Get ViolationTheftMethodName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getViolationTheftMethodName(): ?string
    {
        return isset($this->ViolationTheftMethodName) ? $this->ViolationTheftMethodName : null;
    }
    /**
     * Set ViolationTheftMethodName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $violationTheftMethodName
     * @return \StructType\IncidentElementFullInfo
     */
    public function setViolationTheftMethodName(?string $violationTheftMethodName = null): self
    {
        // validation for constraint: string
        if (!is_null($violationTheftMethodName) && !is_string($violationTheftMethodName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($violationTheftMethodName, true), gettype($violationTheftMethodName)), __LINE__);
        }
        if (is_null($violationTheftMethodName) || (is_array($violationTheftMethodName) && empty($violationTheftMethodName))) {
            unset($this->ViolationTheftMethodName);
        } else {
            $this->ViolationTheftMethodName = $violationTheftMethodName;
        }
        
        return $this;
    }
    /**
     * Get ViolationTypeName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getViolationTypeName(): ?string
    {
        return isset($this->ViolationTypeName) ? $this->ViolationTypeName : null;
    }
    /**
     * Set ViolationTypeName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $violationTypeName
     * @return \StructType\IncidentElementFullInfo
     */
    public function setViolationTypeName(?string $violationTypeName = null): self
    {
        // validation for constraint: string
        if (!is_null($violationTypeName) && !is_string($violationTypeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($violationTypeName, true), gettype($violationTypeName)), __LINE__);
        }
        if (is_null($violationTypeName) || (is_array($violationTypeName) && empty($violationTypeName))) {
            unset($this->ViolationTypeName);
        } else {
            $this->ViolationTypeName = $violationTypeName;
        }
        
        return $this;
    }
    /**
     * Get Violators value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfViolatorFullInfo|null
     */
    public function getViolators(): ?\ArrayType\ArrayOfViolatorFullInfo
    {
        return isset($this->Violators) ? $this->Violators : null;
    }
    /**
     * Set Violators value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfViolatorFullInfo $violators
     * @return \StructType\IncidentElementFullInfo
     */
    public function setViolators(?\ArrayType\ArrayOfViolatorFullInfo $violators = null): self
    {
        if (is_null($violators) || (is_array($violators) && empty($violators))) {
            unset($this->Violators);
        } else {
            $this->Violators = $violators;
        }
        
        return $this;
    }
}
