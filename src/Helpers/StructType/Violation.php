<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Violation StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Violation
 * @subpackage Structs
 */
class Violation extends AbstractStructBase
{
    /**
     * The DocumentNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DocumentNumber = null;
    /**
     * The DocumentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DocumentType = null;
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
     * The GroupName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $GroupName = null;
    /**
     * The GroupPath
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $GroupPath = null;
    /**
     * The IncidentDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $IncidentDate = null;
    /**
     * The IncidentID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $IncidentID = null;
    /**
     * The LastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $LastName = null;
    /**
     * The NatureOfViolation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $NatureOfViolation = null;
    /**
     * The SecondName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SecondName = null;
    /**
     * The Significance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Significance = null;
    /**
     * The TypeOfViolation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TypeOfViolation = null;
    /**
     * Constructor method for Violation
     * @uses Violation::setDocumentNumber()
     * @uses Violation::setDocumentType()
     * @uses Violation::setEmployeeID()
     * @uses Violation::setFirstName()
     * @uses Violation::setGroupID()
     * @uses Violation::setGroupName()
     * @uses Violation::setGroupPath()
     * @uses Violation::setIncidentDate()
     * @uses Violation::setIncidentID()
     * @uses Violation::setLastName()
     * @uses Violation::setNatureOfViolation()
     * @uses Violation::setSecondName()
     * @uses Violation::setSignificance()
     * @uses Violation::setTypeOfViolation()
     * @param string $documentNumber
     * @param string $documentType
     * @param string $employeeID
     * @param string $firstName
     * @param string $groupID
     * @param string $groupName
     * @param string $groupPath
     * @param string $incidentDate
     * @param string $incidentID
     * @param string $lastName
     * @param string $natureOfViolation
     * @param string $secondName
     * @param string $significance
     * @param string $typeOfViolation
     */
    public function __construct(?string $documentNumber = null, ?string $documentType = null, ?string $employeeID = null, ?string $firstName = null, ?string $groupID = null, ?string $groupName = null, ?string $groupPath = null, ?string $incidentDate = null, ?string $incidentID = null, ?string $lastName = null, ?string $natureOfViolation = null, ?string $secondName = null, ?string $significance = null, ?string $typeOfViolation = null)
    {
        $this
            ->setDocumentNumber($documentNumber)
            ->setDocumentType($documentType)
            ->setEmployeeID($employeeID)
            ->setFirstName($firstName)
            ->setGroupID($groupID)
            ->setGroupName($groupName)
            ->setGroupPath($groupPath)
            ->setIncidentDate($incidentDate)
            ->setIncidentID($incidentID)
            ->setLastName($lastName)
            ->setNatureOfViolation($natureOfViolation)
            ->setSecondName($secondName)
            ->setSignificance($significance)
            ->setTypeOfViolation($typeOfViolation);
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
     * @return \StructType\Violation
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
     * Get DocumentType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return isset($this->DocumentType) ? $this->DocumentType : null;
    }
    /**
     * Set DocumentType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $documentType
     * @return \StructType\Violation
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentType, true), gettype($documentType)), __LINE__);
        }
        if (is_null($documentType) || (is_array($documentType) && empty($documentType))) {
            unset($this->DocumentType);
        } else {
            $this->DocumentType = $documentType;
        }
        
        return $this;
    }
    /**
     * Get EmployeeID value
     * @return string|null
     */
    public function getEmployeeID(): ?string
    {
        return $this->EmployeeID;
    }
    /**
     * Set EmployeeID value
     * @param string $employeeID
     * @return \StructType\Violation
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
        $this->EmployeeID = $employeeID;
        
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
     * @return \StructType\Violation
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
     * @return string|null
     */
    public function getGroupID(): ?string
    {
        return $this->GroupID;
    }
    /**
     * Set GroupID value
     * @param string $groupID
     * @return \StructType\Violation
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
        $this->GroupID = $groupID;
        
        return $this;
    }
    /**
     * Get GroupName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGroupName(): ?string
    {
        return isset($this->GroupName) ? $this->GroupName : null;
    }
    /**
     * Set GroupName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $groupName
     * @return \StructType\Violation
     */
    public function setGroupName(?string $groupName = null): self
    {
        // validation for constraint: string
        if (!is_null($groupName) && !is_string($groupName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupName, true), gettype($groupName)), __LINE__);
        }
        if (is_null($groupName) || (is_array($groupName) && empty($groupName))) {
            unset($this->GroupName);
        } else {
            $this->GroupName = $groupName;
        }
        
        return $this;
    }
    /**
     * Get GroupPath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGroupPath(): ?string
    {
        return isset($this->GroupPath) ? $this->GroupPath : null;
    }
    /**
     * Set GroupPath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $groupPath
     * @return \StructType\Violation
     */
    public function setGroupPath(?string $groupPath = null): self
    {
        // validation for constraint: string
        if (!is_null($groupPath) && !is_string($groupPath)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupPath, true), gettype($groupPath)), __LINE__);
        }
        if (is_null($groupPath) || (is_array($groupPath) && empty($groupPath))) {
            unset($this->GroupPath);
        } else {
            $this->GroupPath = $groupPath;
        }
        
        return $this;
    }
    /**
     * Get IncidentDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIncidentDate(): ?string
    {
        return isset($this->IncidentDate) ? $this->IncidentDate : null;
    }
    /**
     * Set IncidentDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $incidentDate
     * @return \StructType\Violation
     */
    public function setIncidentDate(?string $incidentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($incidentDate) && !is_string($incidentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($incidentDate, true), gettype($incidentDate)), __LINE__);
        }
        if (is_null($incidentDate) || (is_array($incidentDate) && empty($incidentDate))) {
            unset($this->IncidentDate);
        } else {
            $this->IncidentDate = $incidentDate;
        }
        
        return $this;
    }
    /**
     * Get IncidentID value
     * @return string|null
     */
    public function getIncidentID(): ?string
    {
        return $this->IncidentID;
    }
    /**
     * Set IncidentID value
     * @param string $incidentID
     * @return \StructType\Violation
     */
    public function setIncidentID(?string $incidentID = null): self
    {
        // validation for constraint: string
        if (!is_null($incidentID) && !is_string($incidentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($incidentID, true), gettype($incidentID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($incidentID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $incidentID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($incidentID, true)), __LINE__);
        }
        $this->IncidentID = $incidentID;
        
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
     * @return \StructType\Violation
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
     * Get NatureOfViolation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNatureOfViolation(): ?string
    {
        return isset($this->NatureOfViolation) ? $this->NatureOfViolation : null;
    }
    /**
     * Set NatureOfViolation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $natureOfViolation
     * @return \StructType\Violation
     */
    public function setNatureOfViolation(?string $natureOfViolation = null): self
    {
        // validation for constraint: string
        if (!is_null($natureOfViolation) && !is_string($natureOfViolation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($natureOfViolation, true), gettype($natureOfViolation)), __LINE__);
        }
        if (is_null($natureOfViolation) || (is_array($natureOfViolation) && empty($natureOfViolation))) {
            unset($this->NatureOfViolation);
        } else {
            $this->NatureOfViolation = $natureOfViolation;
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
     * @return \StructType\Violation
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
     * Get Significance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSignificance(): ?string
    {
        return isset($this->Significance) ? $this->Significance : null;
    }
    /**
     * Set Significance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $significance
     * @return \StructType\Violation
     */
    public function setSignificance(?string $significance = null): self
    {
        // validation for constraint: string
        if (!is_null($significance) && !is_string($significance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($significance, true), gettype($significance)), __LINE__);
        }
        if (is_null($significance) || (is_array($significance) && empty($significance))) {
            unset($this->Significance);
        } else {
            $this->Significance = $significance;
        }
        
        return $this;
    }
    /**
     * Get TypeOfViolation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTypeOfViolation(): ?string
    {
        return isset($this->TypeOfViolation) ? $this->TypeOfViolation : null;
    }
    /**
     * Set TypeOfViolation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $typeOfViolation
     * @return \StructType\Violation
     */
    public function setTypeOfViolation(?string $typeOfViolation = null): self
    {
        // validation for constraint: string
        if (!is_null($typeOfViolation) && !is_string($typeOfViolation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeOfViolation, true), gettype($typeOfViolation)), __LINE__);
        }
        if (is_null($typeOfViolation) || (is_array($typeOfViolation) && empty($typeOfViolation))) {
            unset($this->TypeOfViolation);
        } else {
            $this->TypeOfViolation = $typeOfViolation;
        }
        
        return $this;
    }
}
