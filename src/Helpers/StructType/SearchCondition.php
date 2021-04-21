<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCondition StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SearchCondition
 * @subpackage Structs
 */
class SearchCondition extends AbstractStructBase
{
    /**
     * The AddField
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $AddField = null;
    /**
     * The AdditionalFieldID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AdditionalFieldID = null;
    /**
     * The AlcoGroupID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AlcoGroupID = null;
    /**
     * The AssignmentFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AssignmentFilter = null;
    /**
     * The Birthday
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Birthday = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The EmployeeAssignmentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EmployeeAssignmentType = null;
    /**
     * The FirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FirstName = null;
    /**
     * The GroupID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $GroupID = null;
    /**
     * The IsFullMatch
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsFullMatch = null;
    /**
     * The KeyDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $KeyDescription = null;
    /**
     * The KeyNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $KeyNumber = null;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $LastName = null;
    /**
     * The PassportNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PassportNumber = null;
    /**
     * The Phone
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Phone = null;
    /**
     * The SearchWay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SearchWay = null;
    /**
     * The SecondName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SecondName = null;
    /**
     * The TableNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $TableNumber = null;
    /**
     * Constructor method for SearchCondition
     * @uses SearchCondition::setAddField()
     * @uses SearchCondition::setAdditionalFieldID()
     * @uses SearchCondition::setAlcoGroupID()
     * @uses SearchCondition::setAssignmentFilter()
     * @uses SearchCondition::setBirthday()
     * @uses SearchCondition::setEmail()
     * @uses SearchCondition::setEmployeeAssignmentType()
     * @uses SearchCondition::setFirstName()
     * @uses SearchCondition::setGroupID()
     * @uses SearchCondition::setIsFullMatch()
     * @uses SearchCondition::setKeyDescription()
     * @uses SearchCondition::setKeyNumber()
     * @uses SearchCondition::setLastName()
     * @uses SearchCondition::setPassportNumber()
     * @uses SearchCondition::setPhone()
     * @uses SearchCondition::setSearchWay()
     * @uses SearchCondition::setSecondName()
     * @uses SearchCondition::setTableNumber()
     * @param string $addField
     * @param string $additionalFieldID
     * @param string $alcoGroupID
     * @param string $assignmentFilter
     * @param string $birthday
     * @param string $email
     * @param string $employeeAssignmentType
     * @param string $firstName
     * @param string $groupID
     * @param bool $isFullMatch
     * @param string $keyDescription
     * @param int $keyNumber
     * @param string $lastName
     * @param string $passportNumber
     * @param string $phone
     * @param string $searchWay
     * @param string $secondName
     * @param int $tableNumber
     */
    public function __construct(?string $addField = null, ?string $additionalFieldID = null, ?string $alcoGroupID = null, ?string $assignmentFilter = null, ?string $birthday = null, ?string $email = null, ?string $employeeAssignmentType = null, ?string $firstName = null, ?string $groupID = null, ?bool $isFullMatch = null, ?string $keyDescription = null, ?int $keyNumber = null, ?string $lastName = null, ?string $passportNumber = null, ?string $phone = null, ?string $searchWay = null, ?string $secondName = null, ?int $tableNumber = null)
    {
        $this
            ->setAddField($addField)
            ->setAdditionalFieldID($additionalFieldID)
            ->setAlcoGroupID($alcoGroupID)
            ->setAssignmentFilter($assignmentFilter)
            ->setBirthday($birthday)
            ->setEmail($email)
            ->setEmployeeAssignmentType($employeeAssignmentType)
            ->setFirstName($firstName)
            ->setGroupID($groupID)
            ->setIsFullMatch($isFullMatch)
            ->setKeyDescription($keyDescription)
            ->setKeyNumber($keyNumber)
            ->setLastName($lastName)
            ->setPassportNumber($passportNumber)
            ->setPhone($phone)
            ->setSearchWay($searchWay)
            ->setSecondName($secondName)
            ->setTableNumber($tableNumber);
    }
    /**
     * Get AddField value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAddField(): ?string
    {
        return isset($this->AddField) ? $this->AddField : null;
    }
    /**
     * Set AddField value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $addField
     * @return \StructType\SearchCondition
     */
    public function setAddField(?string $addField = null): self
    {
        // validation for constraint: string
        if (!is_null($addField) && !is_string($addField)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addField, true), gettype($addField)), __LINE__);
        }
        if (is_null($addField) || (is_array($addField) && empty($addField))) {
            unset($this->AddField);
        } else {
            $this->AddField = $addField;
        }
        
        return $this;
    }
    /**
     * Get AdditionalFieldID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAdditionalFieldID(): ?string
    {
        return isset($this->AdditionalFieldID) ? $this->AdditionalFieldID : null;
    }
    /**
     * Set AdditionalFieldID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $additionalFieldID
     * @return \StructType\SearchCondition
     */
    public function setAdditionalFieldID(?string $additionalFieldID = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalFieldID) && !is_string($additionalFieldID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalFieldID, true), gettype($additionalFieldID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($additionalFieldID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $additionalFieldID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($additionalFieldID, true)), __LINE__);
        }
        if (is_null($additionalFieldID) || (is_array($additionalFieldID) && empty($additionalFieldID))) {
            unset($this->AdditionalFieldID);
        } else {
            $this->AdditionalFieldID = $additionalFieldID;
        }
        
        return $this;
    }
    /**
     * Get AlcoGroupID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAlcoGroupID(): ?string
    {
        return isset($this->AlcoGroupID) ? $this->AlcoGroupID : null;
    }
    /**
     * Set AlcoGroupID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $alcoGroupID
     * @return \StructType\SearchCondition
     */
    public function setAlcoGroupID(?string $alcoGroupID = null): self
    {
        // validation for constraint: string
        if (!is_null($alcoGroupID) && !is_string($alcoGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alcoGroupID, true), gettype($alcoGroupID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($alcoGroupID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $alcoGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($alcoGroupID, true)), __LINE__);
        }
        if (is_null($alcoGroupID) || (is_array($alcoGroupID) && empty($alcoGroupID))) {
            unset($this->AlcoGroupID);
        } else {
            $this->AlcoGroupID = $alcoGroupID;
        }
        
        return $this;
    }
    /**
     * Get AssignmentFilter value
     * @return string|null
     */
    public function getAssignmentFilter(): ?string
    {
        return $this->AssignmentFilter;
    }
    /**
     * Set AssignmentFilter value
     * @uses \EnumType\AssignmentFilter::valueIsValid()
     * @uses \EnumType\AssignmentFilter::getValidValues()
     * @throws InvalidArgumentException
     * @param string $assignmentFilter
     * @return \StructType\SearchCondition
     */
    public function setAssignmentFilter(?string $assignmentFilter = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\AssignmentFilter::valueIsValid($assignmentFilter)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AssignmentFilter', is_array($assignmentFilter) ? implode(', ', $assignmentFilter) : var_export($assignmentFilter, true), implode(', ', \EnumType\AssignmentFilter::getValidValues())), __LINE__);
        }
        $this->AssignmentFilter = $assignmentFilter;
        
        return $this;
    }
    /**
     * Get Birthday value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBirthday(): ?string
    {
        return isset($this->Birthday) ? $this->Birthday : null;
    }
    /**
     * Set Birthday value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $birthday
     * @return \StructType\SearchCondition
     */
    public function setBirthday(?string $birthday = null): self
    {
        // validation for constraint: string
        if (!is_null($birthday) && !is_string($birthday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthday, true), gettype($birthday)), __LINE__);
        }
        if (is_null($birthday) || (is_array($birthday) && empty($birthday))) {
            unset($this->Birthday);
        } else {
            $this->Birthday = $birthday;
        }
        
        return $this;
    }
    /**
     * Get Email value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return isset($this->Email) ? $this->Email : null;
    }
    /**
     * Set Email value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $email
     * @return \StructType\SearchCondition
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        if (is_null($email) || (is_array($email) && empty($email))) {
            unset($this->Email);
        } else {
            $this->Email = $email;
        }
        
        return $this;
    }
    /**
     * Get EmployeeAssignmentType value
     * @return string|null
     */
    public function getEmployeeAssignmentType(): ?string
    {
        return $this->EmployeeAssignmentType;
    }
    /**
     * Set EmployeeAssignmentType value
     * @uses \EnumType\EmployeeAssignmentType::valueIsValid()
     * @uses \EnumType\EmployeeAssignmentType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $employeeAssignmentType
     * @return \StructType\SearchCondition
     */
    public function setEmployeeAssignmentType(?string $employeeAssignmentType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EmployeeAssignmentType::valueIsValid($employeeAssignmentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EmployeeAssignmentType', is_array($employeeAssignmentType) ? implode(', ', $employeeAssignmentType) : var_export($employeeAssignmentType, true), implode(', ', \EnumType\EmployeeAssignmentType::getValidValues())), __LINE__);
        }
        $this->EmployeeAssignmentType = $employeeAssignmentType;
        
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
     * @return \StructType\SearchCondition
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
     * Get GroupID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGroupID(): ?string
    {
        return isset($this->GroupID) ? $this->GroupID : null;
    }
    /**
     * Set GroupID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $groupID
     * @return \StructType\SearchCondition
     */
    public function setGroupID(?string $groupID = null): self
    {
        // validation for constraint: string
        if (!is_null($groupID) && !is_string($groupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupID, true), gettype($groupID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($groupID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $groupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($groupID, true)), __LINE__);
        }
        if (is_null($groupID) || (is_array($groupID) && empty($groupID))) {
            unset($this->GroupID);
        } else {
            $this->GroupID = $groupID;
        }
        
        return $this;
    }
    /**
     * Get IsFullMatch value
     * @return bool|null
     */
    public function getIsFullMatch(): ?bool
    {
        return $this->IsFullMatch;
    }
    /**
     * Set IsFullMatch value
     * @param bool $isFullMatch
     * @return \StructType\SearchCondition
     */
    public function setIsFullMatch(?bool $isFullMatch = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFullMatch) && !is_bool($isFullMatch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFullMatch, true), gettype($isFullMatch)), __LINE__);
        }
        $this->IsFullMatch = $isFullMatch;
        
        return $this;
    }
    /**
     * Get KeyDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getKeyDescription(): ?string
    {
        return isset($this->KeyDescription) ? $this->KeyDescription : null;
    }
    /**
     * Set KeyDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $keyDescription
     * @return \StructType\SearchCondition
     */
    public function setKeyDescription(?string $keyDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($keyDescription) && !is_string($keyDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($keyDescription, true), gettype($keyDescription)), __LINE__);
        }
        if (is_null($keyDescription) || (is_array($keyDescription) && empty($keyDescription))) {
            unset($this->KeyDescription);
        } else {
            $this->KeyDescription = $keyDescription;
        }
        
        return $this;
    }
    /**
     * Get KeyNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getKeyNumber(): ?int
    {
        return isset($this->KeyNumber) ? $this->KeyNumber : null;
    }
    /**
     * Set KeyNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $keyNumber
     * @return \StructType\SearchCondition
     */
    public function setKeyNumber(?int $keyNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($keyNumber) && !(is_int($keyNumber) || ctype_digit($keyNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($keyNumber, true), gettype($keyNumber)), __LINE__);
        }
        if (is_null($keyNumber) || (is_array($keyNumber) && empty($keyNumber))) {
            unset($this->KeyNumber);
        } else {
            $this->KeyNumber = $keyNumber;
        }
        
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
     * @return \StructType\SearchCondition
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
     * Get PassportNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassportNumber(): ?string
    {
        return isset($this->PassportNumber) ? $this->PassportNumber : null;
    }
    /**
     * Set PassportNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passportNumber
     * @return \StructType\SearchCondition
     */
    public function setPassportNumber(?string $passportNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($passportNumber) && !is_string($passportNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passportNumber, true), gettype($passportNumber)), __LINE__);
        }
        if (is_null($passportNumber) || (is_array($passportNumber) && empty($passportNumber))) {
            unset($this->PassportNumber);
        } else {
            $this->PassportNumber = $passportNumber;
        }
        
        return $this;
    }
    /**
     * Get Phone value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return isset($this->Phone) ? $this->Phone : null;
    }
    /**
     * Set Phone value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phone
     * @return \StructType\SearchCondition
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        if (is_null($phone) || (is_array($phone) && empty($phone))) {
            unset($this->Phone);
        } else {
            $this->Phone = $phone;
        }
        
        return $this;
    }
    /**
     * Get SearchWay value
     * @return string|null
     */
    public function getSearchWay(): ?string
    {
        return $this->SearchWay;
    }
    /**
     * Set SearchWay value
     * @uses \EnumType\SearchWay::valueIsValid()
     * @uses \EnumType\SearchWay::getValidValues()
     * @throws InvalidArgumentException
     * @param string $searchWay
     * @return \StructType\SearchCondition
     */
    public function setSearchWay(?string $searchWay = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\SearchWay::valueIsValid($searchWay)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SearchWay', is_array($searchWay) ? implode(', ', $searchWay) : var_export($searchWay, true), implode(', ', \EnumType\SearchWay::getValidValues())), __LINE__);
        }
        $this->SearchWay = $searchWay;
        
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
     * @return \StructType\SearchCondition
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
     * Get TableNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getTableNumber(): ?int
    {
        return isset($this->TableNumber) ? $this->TableNumber : null;
    }
    /**
     * Set TableNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $tableNumber
     * @return \StructType\SearchCondition
     */
    public function setTableNumber(?int $tableNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($tableNumber) && !(is_int($tableNumber) || ctype_digit($tableNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tableNumber, true), gettype($tableNumber)), __LINE__);
        }
        if (is_null($tableNumber) || (is_array($tableNumber) && empty($tableNumber))) {
            unset($this->TableNumber);
        } else {
            $this->TableNumber = $tableNumber;
        }
        
        return $this;
    }
}
