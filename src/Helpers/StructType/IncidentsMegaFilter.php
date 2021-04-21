<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncidentsMegaFilter StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IncidentsMegaFilter
 * @subpackage Structs
 */
class IncidentsMegaFilter extends AbstractStructBase
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
     * The BeginTime
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
    protected ?string $BeginTime = null;
    /**
     * The Branches
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $Branches = null;
    /**
     * The DatOfBirth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DatOfBirth = null;
    /**
     * The DecisionCreateDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DecisionCreateDate = null;
    /**
     * The DecisionDocumentNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DecisionDocumentNumber = null;
    /**
     * The DecisionFinalPunishmentID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $DecisionFinalPunishmentID = null;
    /**
     * The DocumentNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DocumentNumber = null;
    /**
     * The EmployeeConfirmatorID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $EmployeeConfirmatorID = null;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EndDate = null;
    /**
     * The EndTime
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
    protected ?string $EndTime = null;
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FirstName = null;
    /**
     * The IncidentDetentionID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $IncidentDetentionID = null;
    /**
     * The IncidentNatureID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $IncidentNatureID = null;
    /**
     * The IncidentTheftMethodID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $IncidentTheftMethodID = null;
    /**
     * The IncidentTypeID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $IncidentTypeID = null;
    /**
     * The IsAllBranches
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsAllBranches = null;
    /**
     * The IsEmplyBranch
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsEmplyBranch = null;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $LastName = null;
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
     * The OrganizationID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $OrganizationID = null;
    /**
     * The RegistrationAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $RegistrationAddress = null;
    /**
     * The ResidentialAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ResidentialAddress = null;
    /**
     * The SecondName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SecondName = null;
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
     * The SubdivisionID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $SubdivisionID = null;
    /**
     * The TabNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $TabNumber = null;
    /**
     * The TangiblesMeasureID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $TangiblesMeasureID = null;
    /**
     * The TangiblesNameID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $TangiblesNameID = null;
    /**
     * The VehicleMark
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $VehicleMark = null;
    /**
     * The VehicleRegistrationNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $VehicleRegistrationNumber = null;
    /**
     * Constructor method for IncidentsMegaFilter
     * @uses IncidentsMegaFilter::setBeginDate()
     * @uses IncidentsMegaFilter::setBeginTime()
     * @uses IncidentsMegaFilter::setBranches()
     * @uses IncidentsMegaFilter::setDatOfBirth()
     * @uses IncidentsMegaFilter::setDecisionCreateDate()
     * @uses IncidentsMegaFilter::setDecisionDocumentNumber()
     * @uses IncidentsMegaFilter::setDecisionFinalPunishmentID()
     * @uses IncidentsMegaFilter::setDocumentNumber()
     * @uses IncidentsMegaFilter::setEmployeeConfirmatorID()
     * @uses IncidentsMegaFilter::setEndDate()
     * @uses IncidentsMegaFilter::setEndTime()
     * @uses IncidentsMegaFilter::setFirstName()
     * @uses IncidentsMegaFilter::setIncidentDetentionID()
     * @uses IncidentsMegaFilter::setIncidentNatureID()
     * @uses IncidentsMegaFilter::setIncidentTheftMethodID()
     * @uses IncidentsMegaFilter::setIncidentTypeID()
     * @uses IncidentsMegaFilter::setIsAllBranches()
     * @uses IncidentsMegaFilter::setIsEmplyBranch()
     * @uses IncidentsMegaFilter::setLastName()
     * @uses IncidentsMegaFilter::setLocationClarificationID()
     * @uses IncidentsMegaFilter::setLocationID()
     * @uses IncidentsMegaFilter::setOrganizationID()
     * @uses IncidentsMegaFilter::setRegistrationAddress()
     * @uses IncidentsMegaFilter::setResidentialAddress()
     * @uses IncidentsMegaFilter::setSecondName()
     * @uses IncidentsMegaFilter::setSignificanceID()
     * @uses IncidentsMegaFilter::setSubdivisionID()
     * @uses IncidentsMegaFilter::setTabNumber()
     * @uses IncidentsMegaFilter::setTangiblesMeasureID()
     * @uses IncidentsMegaFilter::setTangiblesNameID()
     * @uses IncidentsMegaFilter::setVehicleMark()
     * @uses IncidentsMegaFilter::setVehicleRegistrationNumber()
     * @param string $beginDate
     * @param string $beginTime
     * @param \ArrayType\ArrayOfguid $branches
     * @param string $datOfBirth
     * @param string $decisionCreateDate
     * @param string $decisionDocumentNumber
     * @param string $decisionFinalPunishmentID
     * @param string $documentNumber
     * @param string $employeeConfirmatorID
     * @param string $endDate
     * @param string $endTime
     * @param string $firstName
     * @param string $incidentDetentionID
     * @param string $incidentNatureID
     * @param string $incidentTheftMethodID
     * @param string $incidentTypeID
     * @param bool $isAllBranches
     * @param bool $isEmplyBranch
     * @param string $lastName
     * @param string $locationClarificationID
     * @param string $locationID
     * @param string $organizationID
     * @param string $registrationAddress
     * @param string $residentialAddress
     * @param string $secondName
     * @param string $significanceID
     * @param string $subdivisionID
     * @param int $tabNumber
     * @param string $tangiblesMeasureID
     * @param string $tangiblesNameID
     * @param string $vehicleMark
     * @param string $vehicleRegistrationNumber
     */
    public function __construct(?string $beginDate = null, ?string $beginTime = null, ?\ArrayType\ArrayOfguid $branches = null, ?string $datOfBirth = null, ?string $decisionCreateDate = null, ?string $decisionDocumentNumber = null, ?string $decisionFinalPunishmentID = null, ?string $documentNumber = null, ?string $employeeConfirmatorID = null, ?string $endDate = null, ?string $endTime = null, ?string $firstName = null, ?string $incidentDetentionID = null, ?string $incidentNatureID = null, ?string $incidentTheftMethodID = null, ?string $incidentTypeID = null, ?bool $isAllBranches = null, ?bool $isEmplyBranch = null, ?string $lastName = null, ?string $locationClarificationID = null, ?string $locationID = null, ?string $organizationID = null, ?string $registrationAddress = null, ?string $residentialAddress = null, ?string $secondName = null, ?string $significanceID = null, ?string $subdivisionID = null, ?int $tabNumber = null, ?string $tangiblesMeasureID = null, ?string $tangiblesNameID = null, ?string $vehicleMark = null, ?string $vehicleRegistrationNumber = null)
    {
        $this
            ->setBeginDate($beginDate)
            ->setBeginTime($beginTime)
            ->setBranches($branches)
            ->setDatOfBirth($datOfBirth)
            ->setDecisionCreateDate($decisionCreateDate)
            ->setDecisionDocumentNumber($decisionDocumentNumber)
            ->setDecisionFinalPunishmentID($decisionFinalPunishmentID)
            ->setDocumentNumber($documentNumber)
            ->setEmployeeConfirmatorID($employeeConfirmatorID)
            ->setEndDate($endDate)
            ->setEndTime($endTime)
            ->setFirstName($firstName)
            ->setIncidentDetentionID($incidentDetentionID)
            ->setIncidentNatureID($incidentNatureID)
            ->setIncidentTheftMethodID($incidentTheftMethodID)
            ->setIncidentTypeID($incidentTypeID)
            ->setIsAllBranches($isAllBranches)
            ->setIsEmplyBranch($isEmplyBranch)
            ->setLastName($lastName)
            ->setLocationClarificationID($locationClarificationID)
            ->setLocationID($locationID)
            ->setOrganizationID($organizationID)
            ->setRegistrationAddress($registrationAddress)
            ->setResidentialAddress($residentialAddress)
            ->setSecondName($secondName)
            ->setSignificanceID($significanceID)
            ->setSubdivisionID($subdivisionID)
            ->setTabNumber($tabNumber)
            ->setTangiblesMeasureID($tangiblesMeasureID)
            ->setTangiblesNameID($tangiblesNameID)
            ->setVehicleMark($vehicleMark)
            ->setVehicleRegistrationNumber($vehicleRegistrationNumber);
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
     * @return \StructType\IncidentsMegaFilter
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
     * Get BeginTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBeginTime(): ?string
    {
        return isset($this->BeginTime) ? $this->BeginTime : null;
    }
    /**
     * Set BeginTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $beginTime
     * @return \StructType\IncidentsMegaFilter
     */
    public function setBeginTime(?string $beginTime = null): self
    {
        // validation for constraint: string
        if (!is_null($beginTime) && !is_string($beginTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginTime, true), gettype($beginTime)), __LINE__);
        }
        // validation for constraint: maxInclusive(P10675199DT2H48M5.4775807S)
        if (!is_null($beginTime) && false === mb_strpos((string) $beginTime, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $beginTime)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775807S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P10675199DT2H48M5.4775807S', var_export($beginTime, true)), __LINE__);
        }
        // validation for constraint: minInclusive(-P10675199DT2H48M5.4775808S)
        if (!is_null($beginTime) && false !== mb_strpos((string) $beginTime, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $beginTime)))) < \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775808S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to -P10675199DT2H48M5.4775808S', var_export($beginTime, true)), __LINE__);
        }
        // validation for constraint: pattern(\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?)
        if (!is_null($beginTime) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $beginTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', var_export($beginTime, true)), __LINE__);
        }
        if (is_null($beginTime) || (is_array($beginTime) && empty($beginTime))) {
            unset($this->BeginTime);
        } else {
            $this->BeginTime = $beginTime;
        }
        
        return $this;
    }
    /**
     * Get Branches value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getBranches(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->Branches) ? $this->Branches : null;
    }
    /**
     * Set Branches value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $branches
     * @return \StructType\IncidentsMegaFilter
     */
    public function setBranches(?\ArrayType\ArrayOfguid $branches = null): self
    {
        if (is_null($branches) || (is_array($branches) && empty($branches))) {
            unset($this->Branches);
        } else {
            $this->Branches = $branches;
        }
        
        return $this;
    }
    /**
     * Get DatOfBirth value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDatOfBirth(): ?string
    {
        return isset($this->DatOfBirth) ? $this->DatOfBirth : null;
    }
    /**
     * Set DatOfBirth value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $datOfBirth
     * @return \StructType\IncidentsMegaFilter
     */
    public function setDatOfBirth(?string $datOfBirth = null): self
    {
        // validation for constraint: string
        if (!is_null($datOfBirth) && !is_string($datOfBirth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datOfBirth, true), gettype($datOfBirth)), __LINE__);
        }
        if (is_null($datOfBirth) || (is_array($datOfBirth) && empty($datOfBirth))) {
            unset($this->DatOfBirth);
        } else {
            $this->DatOfBirth = $datOfBirth;
        }
        
        return $this;
    }
    /**
     * Get DecisionCreateDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDecisionCreateDate(): ?string
    {
        return isset($this->DecisionCreateDate) ? $this->DecisionCreateDate : null;
    }
    /**
     * Set DecisionCreateDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $decisionCreateDate
     * @return \StructType\IncidentsMegaFilter
     */
    public function setDecisionCreateDate(?string $decisionCreateDate = null): self
    {
        // validation for constraint: string
        if (!is_null($decisionCreateDate) && !is_string($decisionCreateDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($decisionCreateDate, true), gettype($decisionCreateDate)), __LINE__);
        }
        if (is_null($decisionCreateDate) || (is_array($decisionCreateDate) && empty($decisionCreateDate))) {
            unset($this->DecisionCreateDate);
        } else {
            $this->DecisionCreateDate = $decisionCreateDate;
        }
        
        return $this;
    }
    /**
     * Get DecisionDocumentNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDecisionDocumentNumber(): ?string
    {
        return isset($this->DecisionDocumentNumber) ? $this->DecisionDocumentNumber : null;
    }
    /**
     * Set DecisionDocumentNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $decisionDocumentNumber
     * @return \StructType\IncidentsMegaFilter
     */
    public function setDecisionDocumentNumber(?string $decisionDocumentNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($decisionDocumentNumber) && !is_string($decisionDocumentNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($decisionDocumentNumber, true), gettype($decisionDocumentNumber)), __LINE__);
        }
        if (is_null($decisionDocumentNumber) || (is_array($decisionDocumentNumber) && empty($decisionDocumentNumber))) {
            unset($this->DecisionDocumentNumber);
        } else {
            $this->DecisionDocumentNumber = $decisionDocumentNumber;
        }
        
        return $this;
    }
    /**
     * Get DecisionFinalPunishmentID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDecisionFinalPunishmentID(): ?string
    {
        return isset($this->DecisionFinalPunishmentID) ? $this->DecisionFinalPunishmentID : null;
    }
    /**
     * Set DecisionFinalPunishmentID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $decisionFinalPunishmentID
     * @return \StructType\IncidentsMegaFilter
     */
    public function setDecisionFinalPunishmentID(?string $decisionFinalPunishmentID = null): self
    {
        // validation for constraint: string
        if (!is_null($decisionFinalPunishmentID) && !is_string($decisionFinalPunishmentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($decisionFinalPunishmentID, true), gettype($decisionFinalPunishmentID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($decisionFinalPunishmentID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $decisionFinalPunishmentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($decisionFinalPunishmentID, true)), __LINE__);
        }
        if (is_null($decisionFinalPunishmentID) || (is_array($decisionFinalPunishmentID) && empty($decisionFinalPunishmentID))) {
            unset($this->DecisionFinalPunishmentID);
        } else {
            $this->DecisionFinalPunishmentID = $decisionFinalPunishmentID;
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
     * @return \StructType\IncidentsMegaFilter
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
     * Get EmployeeConfirmatorID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeConfirmatorID(): ?string
    {
        return isset($this->EmployeeConfirmatorID) ? $this->EmployeeConfirmatorID : null;
    }
    /**
     * Set EmployeeConfirmatorID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeConfirmatorID
     * @return \StructType\IncidentsMegaFilter
     */
    public function setEmployeeConfirmatorID(?string $employeeConfirmatorID = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeConfirmatorID) && !is_string($employeeConfirmatorID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeConfirmatorID, true), gettype($employeeConfirmatorID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeConfirmatorID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeConfirmatorID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeConfirmatorID, true)), __LINE__);
        }
        if (is_null($employeeConfirmatorID) || (is_array($employeeConfirmatorID) && empty($employeeConfirmatorID))) {
            unset($this->EmployeeConfirmatorID);
        } else {
            $this->EmployeeConfirmatorID = $employeeConfirmatorID;
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
     * @return \StructType\IncidentsMegaFilter
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
     * Get EndTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return isset($this->EndTime) ? $this->EndTime : null;
    }
    /**
     * Set EndTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endTime
     * @return \StructType\IncidentsMegaFilter
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        // validation for constraint: maxInclusive(P10675199DT2H48M5.4775807S)
        if (!is_null($endTime) && false === mb_strpos((string) $endTime, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $endTime)))) > \DateTime::createFromFormat('U', $time)->add(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775807S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically less than or equal to P10675199DT2H48M5.4775807S', var_export($endTime, true)), __LINE__);
        }
        // validation for constraint: minInclusive(-P10675199DT2H48M5.4775808S)
        if (!is_null($endTime) && false !== mb_strpos((string) $endTime, '-') && ($time = (string) time()) && \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', str_replace('-', '', $endTime)))) < \DateTime::createFromFormat('U', $time)->sub(new \DateInterval(preg_replace('/(.*)(\.[0-9]*S)/', '$1S', 'P10675199DT2H48M5.4775808S')))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be chronologically greater than or equal to -P10675199DT2H48M5.4775808S', var_export($endTime, true)), __LINE__);
        }
        // validation for constraint: pattern(\-?P(\d*D)?(T(\d*H)?(\d*M)?(\d*(\.\d*)?S)?)?)
        if (!is_null($endTime) && !preg_match('/\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', $endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /\\-?P(\\d*D)?(T(\\d*H)?(\\d*M)?(\\d*(\\.\\d*)?S)?)?/', var_export($endTime, true)), __LINE__);
        }
        if (is_null($endTime) || (is_array($endTime) && empty($endTime))) {
            unset($this->EndTime);
        } else {
            $this->EndTime = $endTime;
        }
        
        return $this;
    }
    /**
     * Get FirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return isset($this->FirstName) ? $this->FirstName : null;
    }
    /**
     * Set FirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstName
     * @return \StructType\IncidentsMegaFilter
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
            unset($this->FirstName);
        } else {
            $this->FirstName = $firstName;
        }
        
        return $this;
    }
    /**
     * Get IncidentDetentionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIncidentDetentionID(): ?string
    {
        return isset($this->IncidentDetentionID) ? $this->IncidentDetentionID : null;
    }
    /**
     * Set IncidentDetentionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $incidentDetentionID
     * @return \StructType\IncidentsMegaFilter
     */
    public function setIncidentDetentionID(?string $incidentDetentionID = null): self
    {
        // validation for constraint: string
        if (!is_null($incidentDetentionID) && !is_string($incidentDetentionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($incidentDetentionID, true), gettype($incidentDetentionID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($incidentDetentionID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $incidentDetentionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($incidentDetentionID, true)), __LINE__);
        }
        if (is_null($incidentDetentionID) || (is_array($incidentDetentionID) && empty($incidentDetentionID))) {
            unset($this->IncidentDetentionID);
        } else {
            $this->IncidentDetentionID = $incidentDetentionID;
        }
        
        return $this;
    }
    /**
     * Get IncidentNatureID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIncidentNatureID(): ?string
    {
        return isset($this->IncidentNatureID) ? $this->IncidentNatureID : null;
    }
    /**
     * Set IncidentNatureID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $incidentNatureID
     * @return \StructType\IncidentsMegaFilter
     */
    public function setIncidentNatureID(?string $incidentNatureID = null): self
    {
        // validation for constraint: string
        if (!is_null($incidentNatureID) && !is_string($incidentNatureID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($incidentNatureID, true), gettype($incidentNatureID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($incidentNatureID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $incidentNatureID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($incidentNatureID, true)), __LINE__);
        }
        if (is_null($incidentNatureID) || (is_array($incidentNatureID) && empty($incidentNatureID))) {
            unset($this->IncidentNatureID);
        } else {
            $this->IncidentNatureID = $incidentNatureID;
        }
        
        return $this;
    }
    /**
     * Get IncidentTheftMethodID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIncidentTheftMethodID(): ?string
    {
        return isset($this->IncidentTheftMethodID) ? $this->IncidentTheftMethodID : null;
    }
    /**
     * Set IncidentTheftMethodID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $incidentTheftMethodID
     * @return \StructType\IncidentsMegaFilter
     */
    public function setIncidentTheftMethodID(?string $incidentTheftMethodID = null): self
    {
        // validation for constraint: string
        if (!is_null($incidentTheftMethodID) && !is_string($incidentTheftMethodID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($incidentTheftMethodID, true), gettype($incidentTheftMethodID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($incidentTheftMethodID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $incidentTheftMethodID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($incidentTheftMethodID, true)), __LINE__);
        }
        if (is_null($incidentTheftMethodID) || (is_array($incidentTheftMethodID) && empty($incidentTheftMethodID))) {
            unset($this->IncidentTheftMethodID);
        } else {
            $this->IncidentTheftMethodID = $incidentTheftMethodID;
        }
        
        return $this;
    }
    /**
     * Get IncidentTypeID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIncidentTypeID(): ?string
    {
        return isset($this->IncidentTypeID) ? $this->IncidentTypeID : null;
    }
    /**
     * Set IncidentTypeID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $incidentTypeID
     * @return \StructType\IncidentsMegaFilter
     */
    public function setIncidentTypeID(?string $incidentTypeID = null): self
    {
        // validation for constraint: string
        if (!is_null($incidentTypeID) && !is_string($incidentTypeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($incidentTypeID, true), gettype($incidentTypeID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($incidentTypeID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $incidentTypeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($incidentTypeID, true)), __LINE__);
        }
        if (is_null($incidentTypeID) || (is_array($incidentTypeID) && empty($incidentTypeID))) {
            unset($this->IncidentTypeID);
        } else {
            $this->IncidentTypeID = $incidentTypeID;
        }
        
        return $this;
    }
    /**
     * Get IsAllBranches value
     * @return bool|null
     */
    public function getIsAllBranches(): ?bool
    {
        return $this->IsAllBranches;
    }
    /**
     * Set IsAllBranches value
     * @param bool $isAllBranches
     * @return \StructType\IncidentsMegaFilter
     */
    public function setIsAllBranches(?bool $isAllBranches = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAllBranches) && !is_bool($isAllBranches)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAllBranches, true), gettype($isAllBranches)), __LINE__);
        }
        $this->IsAllBranches = $isAllBranches;
        
        return $this;
    }
    /**
     * Get IsEmplyBranch value
     * @return bool|null
     */
    public function getIsEmplyBranch(): ?bool
    {
        return $this->IsEmplyBranch;
    }
    /**
     * Set IsEmplyBranch value
     * @param bool $isEmplyBranch
     * @return \StructType\IncidentsMegaFilter
     */
    public function setIsEmplyBranch(?bool $isEmplyBranch = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isEmplyBranch) && !is_bool($isEmplyBranch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEmplyBranch, true), gettype($isEmplyBranch)), __LINE__);
        }
        $this->IsEmplyBranch = $isEmplyBranch;
        
        return $this;
    }
    /**
     * Get LastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return isset($this->LastName) ? $this->LastName : null;
    }
    /**
     * Set LastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastName
     * @return \StructType\IncidentsMegaFilter
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        if (is_null($lastName) || (is_array($lastName) && empty($lastName))) {
            unset($this->LastName);
        } else {
            $this->LastName = $lastName;
        }
        
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
     * @return \StructType\IncidentsMegaFilter
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
     * @return \StructType\IncidentsMegaFilter
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
     * Get OrganizationID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrganizationID(): ?string
    {
        return isset($this->OrganizationID) ? $this->OrganizationID : null;
    }
    /**
     * Set OrganizationID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $organizationID
     * @return \StructType\IncidentsMegaFilter
     */
    public function setOrganizationID(?string $organizationID = null): self
    {
        // validation for constraint: string
        if (!is_null($organizationID) && !is_string($organizationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organizationID, true), gettype($organizationID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($organizationID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $organizationID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($organizationID, true)), __LINE__);
        }
        if (is_null($organizationID) || (is_array($organizationID) && empty($organizationID))) {
            unset($this->OrganizationID);
        } else {
            $this->OrganizationID = $organizationID;
        }
        
        return $this;
    }
    /**
     * Get RegistrationAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRegistrationAddress(): ?string
    {
        return isset($this->RegistrationAddress) ? $this->RegistrationAddress : null;
    }
    /**
     * Set RegistrationAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $registrationAddress
     * @return \StructType\IncidentsMegaFilter
     */
    public function setRegistrationAddress(?string $registrationAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($registrationAddress) && !is_string($registrationAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($registrationAddress, true), gettype($registrationAddress)), __LINE__);
        }
        if (is_null($registrationAddress) || (is_array($registrationAddress) && empty($registrationAddress))) {
            unset($this->RegistrationAddress);
        } else {
            $this->RegistrationAddress = $registrationAddress;
        }
        
        return $this;
    }
    /**
     * Get ResidentialAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getResidentialAddress(): ?string
    {
        return isset($this->ResidentialAddress) ? $this->ResidentialAddress : null;
    }
    /**
     * Set ResidentialAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $residentialAddress
     * @return \StructType\IncidentsMegaFilter
     */
    public function setResidentialAddress(?string $residentialAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($residentialAddress) && !is_string($residentialAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($residentialAddress, true), gettype($residentialAddress)), __LINE__);
        }
        if (is_null($residentialAddress) || (is_array($residentialAddress) && empty($residentialAddress))) {
            unset($this->ResidentialAddress);
        } else {
            $this->ResidentialAddress = $residentialAddress;
        }
        
        return $this;
    }
    /**
     * Get SecondName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSecondName(): ?string
    {
        return isset($this->SecondName) ? $this->SecondName : null;
    }
    /**
     * Set SecondName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $secondName
     * @return \StructType\IncidentsMegaFilter
     */
    public function setSecondName(?string $secondName = null): self
    {
        // validation for constraint: string
        if (!is_null($secondName) && !is_string($secondName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondName, true), gettype($secondName)), __LINE__);
        }
        if (is_null($secondName) || (is_array($secondName) && empty($secondName))) {
            unset($this->SecondName);
        } else {
            $this->SecondName = $secondName;
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
     * @return \StructType\IncidentsMegaFilter
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
     * Get SubdivisionID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSubdivisionID(): ?string
    {
        return isset($this->SubdivisionID) ? $this->SubdivisionID : null;
    }
    /**
     * Set SubdivisionID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $subdivisionID
     * @return \StructType\IncidentsMegaFilter
     */
    public function setSubdivisionID(?string $subdivisionID = null): self
    {
        // validation for constraint: string
        if (!is_null($subdivisionID) && !is_string($subdivisionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subdivisionID, true), gettype($subdivisionID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($subdivisionID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $subdivisionID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($subdivisionID, true)), __LINE__);
        }
        if (is_null($subdivisionID) || (is_array($subdivisionID) && empty($subdivisionID))) {
            unset($this->SubdivisionID);
        } else {
            $this->SubdivisionID = $subdivisionID;
        }
        
        return $this;
    }
    /**
     * Get TabNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTabNumber(): ?int
    {
        return isset($this->TabNumber) ? $this->TabNumber : null;
    }
    /**
     * Set TabNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $tabNumber
     * @return \StructType\IncidentsMegaFilter
     */
    public function setTabNumber(?int $tabNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($tabNumber) && !(is_int($tabNumber) || ctype_digit($tabNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tabNumber, true), gettype($tabNumber)), __LINE__);
        }
        if (is_null($tabNumber) || (is_array($tabNumber) && empty($tabNumber))) {
            unset($this->TabNumber);
        } else {
            $this->TabNumber = $tabNumber;
        }
        
        return $this;
    }
    /**
     * Get TangiblesMeasureID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTangiblesMeasureID(): ?string
    {
        return isset($this->TangiblesMeasureID) ? $this->TangiblesMeasureID : null;
    }
    /**
     * Set TangiblesMeasureID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tangiblesMeasureID
     * @return \StructType\IncidentsMegaFilter
     */
    public function setTangiblesMeasureID(?string $tangiblesMeasureID = null): self
    {
        // validation for constraint: string
        if (!is_null($tangiblesMeasureID) && !is_string($tangiblesMeasureID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tangiblesMeasureID, true), gettype($tangiblesMeasureID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($tangiblesMeasureID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $tangiblesMeasureID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($tangiblesMeasureID, true)), __LINE__);
        }
        if (is_null($tangiblesMeasureID) || (is_array($tangiblesMeasureID) && empty($tangiblesMeasureID))) {
            unset($this->TangiblesMeasureID);
        } else {
            $this->TangiblesMeasureID = $tangiblesMeasureID;
        }
        
        return $this;
    }
    /**
     * Get TangiblesNameID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTangiblesNameID(): ?string
    {
        return isset($this->TangiblesNameID) ? $this->TangiblesNameID : null;
    }
    /**
     * Set TangiblesNameID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tangiblesNameID
     * @return \StructType\IncidentsMegaFilter
     */
    public function setTangiblesNameID(?string $tangiblesNameID = null): self
    {
        // validation for constraint: string
        if (!is_null($tangiblesNameID) && !is_string($tangiblesNameID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tangiblesNameID, true), gettype($tangiblesNameID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($tangiblesNameID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $tangiblesNameID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($tangiblesNameID, true)), __LINE__);
        }
        if (is_null($tangiblesNameID) || (is_array($tangiblesNameID) && empty($tangiblesNameID))) {
            unset($this->TangiblesNameID);
        } else {
            $this->TangiblesNameID = $tangiblesNameID;
        }
        
        return $this;
    }
    /**
     * Get VehicleMark value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVehicleMark(): ?string
    {
        return isset($this->VehicleMark) ? $this->VehicleMark : null;
    }
    /**
     * Set VehicleMark value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vehicleMark
     * @return \StructType\IncidentsMegaFilter
     */
    public function setVehicleMark(?string $vehicleMark = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleMark) && !is_string($vehicleMark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleMark, true), gettype($vehicleMark)), __LINE__);
        }
        if (is_null($vehicleMark) || (is_array($vehicleMark) && empty($vehicleMark))) {
            unset($this->VehicleMark);
        } else {
            $this->VehicleMark = $vehicleMark;
        }
        
        return $this;
    }
    /**
     * Get VehicleRegistrationNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVehicleRegistrationNumber(): ?string
    {
        return isset($this->VehicleRegistrationNumber) ? $this->VehicleRegistrationNumber : null;
    }
    /**
     * Set VehicleRegistrationNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vehicleRegistrationNumber
     * @return \StructType\IncidentsMegaFilter
     */
    public function setVehicleRegistrationNumber(?string $vehicleRegistrationNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleRegistrationNumber) && !is_string($vehicleRegistrationNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleRegistrationNumber, true), gettype($vehicleRegistrationNumber)), __LINE__);
        }
        if (is_null($vehicleRegistrationNumber) || (is_array($vehicleRegistrationNumber) && empty($vehicleRegistrationNumber))) {
            unset($this->VehicleRegistrationNumber);
        } else {
            $this->VehicleRegistrationNumber = $vehicleRegistrationNumber;
        }
        
        return $this;
    }
}
