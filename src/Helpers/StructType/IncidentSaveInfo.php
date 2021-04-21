<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncidentSaveInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IncidentSaveInfo
 * @subpackage Structs
 */
class IncidentSaveInfo extends AbstractStructBase
{
    /**
     * The BranchID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $BranchID = null;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Date = null;
    /**
     * The DocumentNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DocumentNumber = null;
    /**
     * The DocumentTypeID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $DocumentTypeID = null;
    /**
     * The EmployeeID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $EmployeeID = null;
    /**
     * The IsIncludeToReport
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsIncludeToReport = null;
    /**
     * The LocationClarificationID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $LocationClarificationID = null;
    /**
     * The LocationID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $LocationID = null;
    /**
     * The MembersSaveInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfViolatorSaveInfo|null
     */
    protected ?\ArrayType\ArrayOfViolatorSaveInfo $MembersSaveInfo = null;
    /**
     * The SecurityGroupID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $SecurityGroupID = null;
    /**
     * The SignificanceID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $SignificanceID = null;
    /**
     * The TangiblesSaveInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfTangiblesSaveInfo|null
     */
    protected ?\ArrayType\ArrayOfTangiblesSaveInfo $TangiblesSaveInfo = null;
    /**
     * The Time
     * Meta information extracted from the WSDL
     * - base: xs:duration
     * - maxInclusive: P10675199DT2H48M5.4775807S
     * - minInclusive: -P10675199DT2H48M5.4775808S
     * - minOccurs: 0
     * - nillable: true
     * - pattern: \-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?
     * - type: tns:duration
     * @var string|null
     */
    protected ?string $Time = null;
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $UserID = null;
    /**
     * The VehicleComment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $VehicleComment = null;
    /**
     * The VehicleID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $VehicleID = null;
    /**
     * The VehicleOrganizationID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $VehicleOrganizationID = null;
    /**
     * The ViolationDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ViolationDescription = null;
    /**
     * The ViolationNatureID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ViolationNatureID = null;
    /**
     * The ViolationTheftMethodID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ViolationTheftMethodID = null;
    /**
     * The ViolationTypeID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ViolationTypeID = null;
    /**
     * The ViolatorSaveInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfViolatorSaveInfo|null
     */
    protected ?\ArrayType\ArrayOfViolatorSaveInfo $ViolatorSaveInfo = null;
    /**
     * Constructor method for IncidentSaveInfo
     * @uses IncidentSaveInfo::setBranchID()
     * @uses IncidentSaveInfo::setDate()
     * @uses IncidentSaveInfo::setDocumentNumber()
     * @uses IncidentSaveInfo::setDocumentTypeID()
     * @uses IncidentSaveInfo::setEmployeeID()
     * @uses IncidentSaveInfo::setIsIncludeToReport()
     * @uses IncidentSaveInfo::setLocationClarificationID()
     * @uses IncidentSaveInfo::setLocationID()
     * @uses IncidentSaveInfo::setMembersSaveInfo()
     * @uses IncidentSaveInfo::setSecurityGroupID()
     * @uses IncidentSaveInfo::setSignificanceID()
     * @uses IncidentSaveInfo::setTangiblesSaveInfo()
     * @uses IncidentSaveInfo::setTime()
     * @uses IncidentSaveInfo::setUserID()
     * @uses IncidentSaveInfo::setVehicleComment()
     * @uses IncidentSaveInfo::setVehicleID()
     * @uses IncidentSaveInfo::setVehicleOrganizationID()
     * @uses IncidentSaveInfo::setViolationDescription()
     * @uses IncidentSaveInfo::setViolationNatureID()
     * @uses IncidentSaveInfo::setViolationTheftMethodID()
     * @uses IncidentSaveInfo::setViolationTypeID()
     * @uses IncidentSaveInfo::setViolatorSaveInfo()
     * @param string $branchID
     * @param string $date
     * @param string $documentNumber
     * @param string $documentTypeID
     * @param string $employeeID
     * @param bool $isIncludeToReport
     * @param string $locationClarificationID
     * @param string $locationID
     * @param \ArrayType\ArrayOfViolatorSaveInfo $membersSaveInfo
     * @param string $securityGroupID
     * @param string $significanceID
     * @param \ArrayType\ArrayOfTangiblesSaveInfo $tangiblesSaveInfo
     * @param string $time
     * @param string $userID
     * @param string $vehicleComment
     * @param string $vehicleID
     * @param string $vehicleOrganizationID
     * @param string $violationDescription
     * @param string $violationNatureID
     * @param string $violationTheftMethodID
     * @param string $violationTypeID
     * @param \ArrayType\ArrayOfViolatorSaveInfo $violatorSaveInfo
     */
    public function __construct(?string $branchID = null, ?string $date = null, ?string $documentNumber = null, ?string $documentTypeID = null, ?string $employeeID = null, ?bool $isIncludeToReport = null, ?string $locationClarificationID = null, ?string $locationID = null, ?\ArrayType\ArrayOfViolatorSaveInfo $membersSaveInfo = null, ?string $securityGroupID = null, ?string $significanceID = null, ?\ArrayType\ArrayOfTangiblesSaveInfo $tangiblesSaveInfo = null, ?string $time = null, ?string $userID = null, ?string $vehicleComment = null, ?string $vehicleID = null, ?string $vehicleOrganizationID = null, ?string $violationDescription = null, ?string $violationNatureID = null, ?string $violationTheftMethodID = null, ?string $violationTypeID = null, ?\ArrayType\ArrayOfViolatorSaveInfo $violatorSaveInfo = null)
    {
        $this
            ->setBranchID($branchID)
            ->setDate($date)
            ->setDocumentNumber($documentNumber)
            ->setDocumentTypeID($documentTypeID)
            ->setEmployeeID($employeeID)
            ->setIsIncludeToReport($isIncludeToReport)
            ->setLocationClarificationID($locationClarificationID)
            ->setLocationID($locationID)
            ->setMembersSaveInfo($membersSaveInfo)
            ->setSecurityGroupID($securityGroupID)
            ->setSignificanceID($significanceID)
            ->setTangiblesSaveInfo($tangiblesSaveInfo)
            ->setTime($time)
            ->setUserID($userID)
            ->setVehicleComment($vehicleComment)
            ->setVehicleID($vehicleID)
            ->setVehicleOrganizationID($vehicleOrganizationID)
            ->setViolationDescription($violationDescription)
            ->setViolationNatureID($violationNatureID)
            ->setViolationTheftMethodID($violationTheftMethodID)
            ->setViolationTypeID($violationTypeID)
            ->setViolatorSaveInfo($violatorSaveInfo);
    }
    /**
     * Get BranchID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBranchID(): ?string
    {
        return isset($this->BranchID) ? $this->BranchID : null;
    }
    /**
     * Set BranchID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $branchID
     * @return \StructType\IncidentSaveInfo
     */
    public function setBranchID(?string $branchID = null): self
    {
        // validation for constraint: string
        if (!is_null($branchID) && !is_string($branchID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($branchID, true), gettype($branchID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($branchID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $branchID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($branchID, true)), __LINE__);
        }
        if (is_null($branchID) || (is_array($branchID) && empty($branchID))) {
            unset($this->BranchID);
        } else {
            $this->BranchID = $branchID;
        }
        
        return $this;
    }
    /**
     * Get Date value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDate(): ?string
    {
        return isset($this->Date) ? $this->Date : null;
    }
    /**
     * Set Date value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $date
     * @return \StructType\IncidentSaveInfo
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        if (is_null($date) || (is_array($date) && empty($date))) {
            unset($this->Date);
        } else {
            $this->Date = $date;
        }
        
        return $this;
    }
    /**
     * Get DocumentNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocumentNumber(): ?string
    {
        return isset($this->DocumentNumber) ? $this->DocumentNumber : null;
    }
    /**
     * Set DocumentNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $documentNumber
     * @return \StructType\IncidentSaveInfo
     */
    public function setDocumentNumber(?string $documentNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNumber) && !is_string($documentNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNumber, true), gettype($documentNumber)), __LINE__);
        }
        if (is_null($documentNumber) || (is_array($documentNumber) && empty($documentNumber))) {
            unset($this->DocumentNumber);
        } else {
            $this->DocumentNumber = $documentNumber;
        }
        
        return $this;
    }
    /**
     * Get DocumentTypeID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocumentTypeID(): ?string
    {
        return isset($this->DocumentTypeID) ? $this->DocumentTypeID : null;
    }
    /**
     * Set DocumentTypeID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $documentTypeID
     * @return \StructType\IncidentSaveInfo
     */
    public function setDocumentTypeID(?string $documentTypeID = null): self
    {
        // validation for constraint: string
        if (!is_null($documentTypeID) && !is_string($documentTypeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentTypeID, true), gettype($documentTypeID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($documentTypeID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $documentTypeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($documentTypeID, true)), __LINE__);
        }
        if (is_null($documentTypeID) || (is_array($documentTypeID) && empty($documentTypeID))) {
            unset($this->DocumentTypeID);
        } else {
            $this->DocumentTypeID = $documentTypeID;
        }
        
        return $this;
    }
    /**
     * Get EmployeeID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeID(): ?string
    {
        return isset($this->EmployeeID) ? $this->EmployeeID : null;
    }
    /**
     * Set EmployeeID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeID
     * @return \StructType\IncidentSaveInfo
     */
    public function setEmployeeID(?string $employeeID = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeID) && !is_string($employeeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeID, true), gettype($employeeID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeID, true)), __LINE__);
        }
        if (is_null($employeeID) || (is_array($employeeID) && empty($employeeID))) {
            unset($this->EmployeeID);
        } else {
            $this->EmployeeID = $employeeID;
        }
        
        return $this;
    }
    /**
     * Get IsIncludeToReport value
     * @return bool|null
     */
    public function getIsIncludeToReport(): ?bool
    {
        return $this->IsIncludeToReport;
    }
    /**
     * Set IsIncludeToReport value
     * @param bool $isIncludeToReport
     * @return \StructType\IncidentSaveInfo
     */
    public function setIsIncludeToReport(?bool $isIncludeToReport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isIncludeToReport) && !is_bool($isIncludeToReport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isIncludeToReport, true), gettype($isIncludeToReport)), __LINE__);
        }
        $this->IsIncludeToReport = $isIncludeToReport;
        
        return $this;
    }
    /**
     * Get LocationClarificationID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLocationClarificationID(): ?string
    {
        return isset($this->LocationClarificationID) ? $this->LocationClarificationID : null;
    }
    /**
     * Set LocationClarificationID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $locationClarificationID
     * @return \StructType\IncidentSaveInfo
     */
    public function setLocationClarificationID(?string $locationClarificationID = null): self
    {
        // validation for constraint: string
        if (!is_null($locationClarificationID) && !is_string($locationClarificationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationClarificationID, true), gettype($locationClarificationID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($locationClarificationID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $locationClarificationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($locationClarificationID, true)), __LINE__);
        }
        if (is_null($locationClarificationID) || (is_array($locationClarificationID) && empty($locationClarificationID))) {
            unset($this->LocationClarificationID);
        } else {
            $this->LocationClarificationID = $locationClarificationID;
        }
        
        return $this;
    }
    /**
     * Get LocationID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLocationID(): ?string
    {
        return isset($this->LocationID) ? $this->LocationID : null;
    }
    /**
     * Set LocationID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $locationID
     * @return \StructType\IncidentSaveInfo
     */
    public function setLocationID(?string $locationID = null): self
    {
        // validation for constraint: string
        if (!is_null($locationID) && !is_string($locationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locationID, true), gettype($locationID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($locationID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $locationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($locationID, true)), __LINE__);
        }
        if (is_null($locationID) || (is_array($locationID) && empty($locationID))) {
            unset($this->LocationID);
        } else {
            $this->LocationID = $locationID;
        }
        
        return $this;
    }
    /**
     * Get MembersSaveInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfViolatorSaveInfo|null
     */
    public function getMembersSaveInfo(): ?\ArrayType\ArrayOfViolatorSaveInfo
    {
        return isset($this->MembersSaveInfo) ? $this->MembersSaveInfo : null;
    }
    /**
     * Set MembersSaveInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfViolatorSaveInfo $membersSaveInfo
     * @return \StructType\IncidentSaveInfo
     */
    public function setMembersSaveInfo(?\ArrayType\ArrayOfViolatorSaveInfo $membersSaveInfo = null): self
    {
        if (is_null($membersSaveInfo) || (is_array($membersSaveInfo) && empty($membersSaveInfo))) {
            unset($this->MembersSaveInfo);
        } else {
            $this->MembersSaveInfo = $membersSaveInfo;
        }
        
        return $this;
    }
    /**
     * Get SecurityGroupID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSecurityGroupID(): ?string
    {
        return isset($this->SecurityGroupID) ? $this->SecurityGroupID : null;
    }
    /**
     * Set SecurityGroupID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $securityGroupID
     * @return \StructType\IncidentSaveInfo
     */
    public function setSecurityGroupID(?string $securityGroupID = null): self
    {
        // validation for constraint: string
        if (!is_null($securityGroupID) && !is_string($securityGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($securityGroupID, true), gettype($securityGroupID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($securityGroupID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $securityGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($securityGroupID, true)), __LINE__);
        }
        if (is_null($securityGroupID) || (is_array($securityGroupID) && empty($securityGroupID))) {
            unset($this->SecurityGroupID);
        } else {
            $this->SecurityGroupID = $securityGroupID;
        }
        
        return $this;
    }
    /**
     * Get SignificanceID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSignificanceID(): ?string
    {
        return isset($this->SignificanceID) ? $this->SignificanceID : null;
    }
    /**
     * Set SignificanceID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $significanceID
     * @return \StructType\IncidentSaveInfo
     */
    public function setSignificanceID(?string $significanceID = null): self
    {
        // validation for constraint: string
        if (!is_null($significanceID) && !is_string($significanceID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($significanceID, true), gettype($significanceID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($significanceID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $significanceID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($significanceID, true)), __LINE__);
        }
        if (is_null($significanceID) || (is_array($significanceID) && empty($significanceID))) {
            unset($this->SignificanceID);
        } else {
            $this->SignificanceID = $significanceID;
        }
        
        return $this;
    }
    /**
     * Get TangiblesSaveInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfTangiblesSaveInfo|null
     */
    public function getTangiblesSaveInfo(): ?\ArrayType\ArrayOfTangiblesSaveInfo
    {
        return isset($this->TangiblesSaveInfo) ? $this->TangiblesSaveInfo : null;
    }
    /**
     * Set TangiblesSaveInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfTangiblesSaveInfo $tangiblesSaveInfo
     * @return \StructType\IncidentSaveInfo
     */
    public function setTangiblesSaveInfo(?\ArrayType\ArrayOfTangiblesSaveInfo $tangiblesSaveInfo = null): self
    {
        if (is_null($tangiblesSaveInfo) || (is_array($tangiblesSaveInfo) && empty($tangiblesSaveInfo))) {
            unset($this->TangiblesSaveInfo);
        } else {
            $this->TangiblesSaveInfo = $tangiblesSaveInfo;
        }
        
        return $this;
    }
    /**
     * Get Time value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTime(): ?string
    {
        return isset($this->Time) ? $this->Time : null;
    }
    /**
     * Set Time value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $time
     * @return \StructType\IncidentSaveInfo
     */
    public function setTime(?string $time = null): self
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        // validation for constraint: maxInclusive(P10675199DT2H48M5.4775807S)
        if (!is_null($time) && false === mb_strpos((string) $time, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $time)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775807S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P10675199DT2H48M5.4775807S', var_export($time, true)), __LINE__);
        }
        // validation for constraint: minInclusive(-P10675199DT2H48M5.4775808S)
        if (!is_null($time) && false !== mb_strpos((string) $time, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $time)))) < \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775808S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to -P10675199DT2H48M5.4775808S', var_export($time, true)), __LINE__);
        }
        // validation for constraint: pattern(\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?)
        if (!is_null($time) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', var_export($time, true)), __LINE__);
        }
        if (is_null($time) || (is_array($time) && empty($time))) {
            unset($this->Time);
        } else {
            $this->Time = $time;
        }
        
        return $this;
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID(): ?string
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \StructType\IncidentSaveInfo
     */
    public function setUserID(?string $userID = null): self
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($userID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $userID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($userID, true)), __LINE__);
        }
        $this->UserID = $userID;
        
        return $this;
    }
    /**
     * Get VehicleComment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVehicleComment(): ?string
    {
        return isset($this->VehicleComment) ? $this->VehicleComment : null;
    }
    /**
     * Set VehicleComment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vehicleComment
     * @return \StructType\IncidentSaveInfo
     */
    public function setVehicleComment(?string $vehicleComment = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleComment) && !is_string($vehicleComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleComment, true), gettype($vehicleComment)), __LINE__);
        }
        if (is_null($vehicleComment) || (is_array($vehicleComment) && empty($vehicleComment))) {
            unset($this->VehicleComment);
        } else {
            $this->VehicleComment = $vehicleComment;
        }
        
        return $this;
    }
    /**
     * Get VehicleID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVehicleID(): ?string
    {
        return isset($this->VehicleID) ? $this->VehicleID : null;
    }
    /**
     * Set VehicleID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vehicleID
     * @return \StructType\IncidentSaveInfo
     */
    public function setVehicleID(?string $vehicleID = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleID) && !is_string($vehicleID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleID, true), gettype($vehicleID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($vehicleID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $vehicleID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($vehicleID, true)), __LINE__);
        }
        if (is_null($vehicleID) || (is_array($vehicleID) && empty($vehicleID))) {
            unset($this->VehicleID);
        } else {
            $this->VehicleID = $vehicleID;
        }
        
        return $this;
    }
    /**
     * Get VehicleOrganizationID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVehicleOrganizationID(): ?string
    {
        return isset($this->VehicleOrganizationID) ? $this->VehicleOrganizationID : null;
    }
    /**
     * Set VehicleOrganizationID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vehicleOrganizationID
     * @return \StructType\IncidentSaveInfo
     */
    public function setVehicleOrganizationID(?string $vehicleOrganizationID = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleOrganizationID) && !is_string($vehicleOrganizationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleOrganizationID, true), gettype($vehicleOrganizationID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($vehicleOrganizationID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $vehicleOrganizationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($vehicleOrganizationID, true)), __LINE__);
        }
        if (is_null($vehicleOrganizationID) || (is_array($vehicleOrganizationID) && empty($vehicleOrganizationID))) {
            unset($this->VehicleOrganizationID);
        } else {
            $this->VehicleOrganizationID = $vehicleOrganizationID;
        }
        
        return $this;
    }
    /**
     * Get ViolationDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getViolationDescription(): ?string
    {
        return isset($this->ViolationDescription) ? $this->ViolationDescription : null;
    }
    /**
     * Set ViolationDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $violationDescription
     * @return \StructType\IncidentSaveInfo
     */
    public function setViolationDescription(?string $violationDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($violationDescription) && !is_string($violationDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($violationDescription, true), gettype($violationDescription)), __LINE__);
        }
        if (is_null($violationDescription) || (is_array($violationDescription) && empty($violationDescription))) {
            unset($this->ViolationDescription);
        } else {
            $this->ViolationDescription = $violationDescription;
        }
        
        return $this;
    }
    /**
     * Get ViolationNatureID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getViolationNatureID(): ?string
    {
        return isset($this->ViolationNatureID) ? $this->ViolationNatureID : null;
    }
    /**
     * Set ViolationNatureID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $violationNatureID
     * @return \StructType\IncidentSaveInfo
     */
    public function setViolationNatureID(?string $violationNatureID = null): self
    {
        // validation for constraint: string
        if (!is_null($violationNatureID) && !is_string($violationNatureID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($violationNatureID, true), gettype($violationNatureID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($violationNatureID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $violationNatureID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($violationNatureID, true)), __LINE__);
        }
        if (is_null($violationNatureID) || (is_array($violationNatureID) && empty($violationNatureID))) {
            unset($this->ViolationNatureID);
        } else {
            $this->ViolationNatureID = $violationNatureID;
        }
        
        return $this;
    }
    /**
     * Get ViolationTheftMethodID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getViolationTheftMethodID(): ?string
    {
        return isset($this->ViolationTheftMethodID) ? $this->ViolationTheftMethodID : null;
    }
    /**
     * Set ViolationTheftMethodID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $violationTheftMethodID
     * @return \StructType\IncidentSaveInfo
     */
    public function setViolationTheftMethodID(?string $violationTheftMethodID = null): self
    {
        // validation for constraint: string
        if (!is_null($violationTheftMethodID) && !is_string($violationTheftMethodID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($violationTheftMethodID, true), gettype($violationTheftMethodID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($violationTheftMethodID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $violationTheftMethodID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($violationTheftMethodID, true)), __LINE__);
        }
        if (is_null($violationTheftMethodID) || (is_array($violationTheftMethodID) && empty($violationTheftMethodID))) {
            unset($this->ViolationTheftMethodID);
        } else {
            $this->ViolationTheftMethodID = $violationTheftMethodID;
        }
        
        return $this;
    }
    /**
     * Get ViolationTypeID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getViolationTypeID(): ?string
    {
        return isset($this->ViolationTypeID) ? $this->ViolationTypeID : null;
    }
    /**
     * Set ViolationTypeID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $violationTypeID
     * @return \StructType\IncidentSaveInfo
     */
    public function setViolationTypeID(?string $violationTypeID = null): self
    {
        // validation for constraint: string
        if (!is_null($violationTypeID) && !is_string($violationTypeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($violationTypeID, true), gettype($violationTypeID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($violationTypeID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $violationTypeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($violationTypeID, true)), __LINE__);
        }
        if (is_null($violationTypeID) || (is_array($violationTypeID) && empty($violationTypeID))) {
            unset($this->ViolationTypeID);
        } else {
            $this->ViolationTypeID = $violationTypeID;
        }
        
        return $this;
    }
    /**
     * Get ViolatorSaveInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfViolatorSaveInfo|null
     */
    public function getViolatorSaveInfo(): ?\ArrayType\ArrayOfViolatorSaveInfo
    {
        return isset($this->ViolatorSaveInfo) ? $this->ViolatorSaveInfo : null;
    }
    /**
     * Set ViolatorSaveInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfViolatorSaveInfo $violatorSaveInfo
     * @return \StructType\IncidentSaveInfo
     */
    public function setViolatorSaveInfo(?\ArrayType\ArrayOfViolatorSaveInfo $violatorSaveInfo = null): self
    {
        if (is_null($violatorSaveInfo) || (is_array($violatorSaveInfo) && empty($violatorSaveInfo))) {
            unset($this->ViolatorSaveInfo);
        } else {
            $this->ViolatorSaveInfo = $violatorSaveInfo;
        }
        
        return $this;
    }
}
