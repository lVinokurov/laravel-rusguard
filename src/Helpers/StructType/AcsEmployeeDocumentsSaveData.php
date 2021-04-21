<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsEmployeeDocumentsSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsEmployeeDocumentsSaveData
 * @subpackage Structs
 */
class AcsEmployeeDocumentsSaveData extends AbstractStructBase
{
    /**
     * The DriverDateOfBirth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DriverDateOfBirth = null;
    /**
     * The DriverDateOfExpiry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DriverDateOfExpiry = null;
    /**
     * The DriverDateOfIssue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DriverDateOfIssue = null;
    /**
     * The DriverFirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DriverFirstName = null;
    /**
     * The DriverLastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DriverLastName = null;
    /**
     * The DriverMiddleName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DriverMiddleName = null;
    /**
     * The DriverNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DriverNumber = null;
    /**
     * The DriverPlaceOfBirth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DriverPlaceOfBirth = null;
    /**
     * The DriverSeries
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DriverSeries = null;
    /**
     * The ForeignPassportCodeOfIssuingState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ForeignPassportCodeOfIssuingState = null;
    /**
     * The ForeignPassportDateOfBirth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ForeignPassportDateOfBirth = null;
    /**
     * The ForeignPassportDateOfExpiry
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ForeignPassportDateOfExpiry = null;
    /**
     * The ForeignPassportFirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ForeignPassportFirstName = null;
    /**
     * The ForeignPassportLastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ForeignPassportLastName = null;
    /**
     * The ForeignPassportMRZ
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ForeignPassportMRZ = null;
    /**
     * The ForeignPassportMiddleName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ForeignPassportMiddleName = null;
    /**
     * The ForeignPassportNationality
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ForeignPassportNationality = null;
    /**
     * The ForeignPassportNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ForeignPassportNumber = null;
    /**
     * The ForeignPassportPersonalCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ForeignPassportPersonalCode = null;
    /**
     * The ForeignPassportSex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ForeignPassportSex = null;
    /**
     * The PassportDateOfBirth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PassportDateOfBirth = null;
    /**
     * The PassportDateOfIssue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PassportDateOfIssue = null;
    /**
     * The PassportDepartmentCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PassportDepartmentCode = null;
    /**
     * The PassportFirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PassportFirstName = null;
    /**
     * The PassportIssue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PassportIssue = null;
    /**
     * The PassportLastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PassportLastName = null;
    /**
     * The PassportMiddleName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PassportMiddleName = null;
    /**
     * The PassportNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PassportNumber = null;
    /**
     * The PassportPlaceOfBirth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PassportPlaceOfBirth = null;
    /**
     * The PassportRegistrationAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PassportRegistrationAddress = null;
    /**
     * The PassportSeries
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PassportSeries = null;
    /**
     * The PassportSex
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PassportSex = null;
    /**
     * Constructor method for AcsEmployeeDocumentsSaveData
     * @uses AcsEmployeeDocumentsSaveData::setDriverDateOfBirth()
     * @uses AcsEmployeeDocumentsSaveData::setDriverDateOfExpiry()
     * @uses AcsEmployeeDocumentsSaveData::setDriverDateOfIssue()
     * @uses AcsEmployeeDocumentsSaveData::setDriverFirstName()
     * @uses AcsEmployeeDocumentsSaveData::setDriverLastName()
     * @uses AcsEmployeeDocumentsSaveData::setDriverMiddleName()
     * @uses AcsEmployeeDocumentsSaveData::setDriverNumber()
     * @uses AcsEmployeeDocumentsSaveData::setDriverPlaceOfBirth()
     * @uses AcsEmployeeDocumentsSaveData::setDriverSeries()
     * @uses AcsEmployeeDocumentsSaveData::setForeignPassportCodeOfIssuingState()
     * @uses AcsEmployeeDocumentsSaveData::setForeignPassportDateOfBirth()
     * @uses AcsEmployeeDocumentsSaveData::setForeignPassportDateOfExpiry()
     * @uses AcsEmployeeDocumentsSaveData::setForeignPassportFirstName()
     * @uses AcsEmployeeDocumentsSaveData::setForeignPassportLastName()
     * @uses AcsEmployeeDocumentsSaveData::setForeignPassportMRZ()
     * @uses AcsEmployeeDocumentsSaveData::setForeignPassportMiddleName()
     * @uses AcsEmployeeDocumentsSaveData::setForeignPassportNationality()
     * @uses AcsEmployeeDocumentsSaveData::setForeignPassportNumber()
     * @uses AcsEmployeeDocumentsSaveData::setForeignPassportPersonalCode()
     * @uses AcsEmployeeDocumentsSaveData::setForeignPassportSex()
     * @uses AcsEmployeeDocumentsSaveData::setPassportDateOfBirth()
     * @uses AcsEmployeeDocumentsSaveData::setPassportDateOfIssue()
     * @uses AcsEmployeeDocumentsSaveData::setPassportDepartmentCode()
     * @uses AcsEmployeeDocumentsSaveData::setPassportFirstName()
     * @uses AcsEmployeeDocumentsSaveData::setPassportIssue()
     * @uses AcsEmployeeDocumentsSaveData::setPassportLastName()
     * @uses AcsEmployeeDocumentsSaveData::setPassportMiddleName()
     * @uses AcsEmployeeDocumentsSaveData::setPassportNumber()
     * @uses AcsEmployeeDocumentsSaveData::setPassportPlaceOfBirth()
     * @uses AcsEmployeeDocumentsSaveData::setPassportRegistrationAddress()
     * @uses AcsEmployeeDocumentsSaveData::setPassportSeries()
     * @uses AcsEmployeeDocumentsSaveData::setPassportSex()
     * @param string $driverDateOfBirth
     * @param string $driverDateOfExpiry
     * @param string $driverDateOfIssue
     * @param string $driverFirstName
     * @param string $driverLastName
     * @param string $driverMiddleName
     * @param string $driverNumber
     * @param string $driverPlaceOfBirth
     * @param string $driverSeries
     * @param string $foreignPassportCodeOfIssuingState
     * @param string $foreignPassportDateOfBirth
     * @param string $foreignPassportDateOfExpiry
     * @param string $foreignPassportFirstName
     * @param string $foreignPassportLastName
     * @param string $foreignPassportMRZ
     * @param string $foreignPassportMiddleName
     * @param string $foreignPassportNationality
     * @param string $foreignPassportNumber
     * @param string $foreignPassportPersonalCode
     * @param string $foreignPassportSex
     * @param string $passportDateOfBirth
     * @param string $passportDateOfIssue
     * @param string $passportDepartmentCode
     * @param string $passportFirstName
     * @param string $passportIssue
     * @param string $passportLastName
     * @param string $passportMiddleName
     * @param string $passportNumber
     * @param string $passportPlaceOfBirth
     * @param string $passportRegistrationAddress
     * @param string $passportSeries
     * @param string $passportSex
     */
    public function __construct(?string $driverDateOfBirth = null, ?string $driverDateOfExpiry = null, ?string $driverDateOfIssue = null, ?string $driverFirstName = null, ?string $driverLastName = null, ?string $driverMiddleName = null, ?string $driverNumber = null, ?string $driverPlaceOfBirth = null, ?string $driverSeries = null, ?string $foreignPassportCodeOfIssuingState = null, ?string $foreignPassportDateOfBirth = null, ?string $foreignPassportDateOfExpiry = null, ?string $foreignPassportFirstName = null, ?string $foreignPassportLastName = null, ?string $foreignPassportMRZ = null, ?string $foreignPassportMiddleName = null, ?string $foreignPassportNationality = null, ?string $foreignPassportNumber = null, ?string $foreignPassportPersonalCode = null, ?string $foreignPassportSex = null, ?string $passportDateOfBirth = null, ?string $passportDateOfIssue = null, ?string $passportDepartmentCode = null, ?string $passportFirstName = null, ?string $passportIssue = null, ?string $passportLastName = null, ?string $passportMiddleName = null, ?string $passportNumber = null, ?string $passportPlaceOfBirth = null, ?string $passportRegistrationAddress = null, ?string $passportSeries = null, ?string $passportSex = null)
    {
        $this
            ->setDriverDateOfBirth($driverDateOfBirth)
            ->setDriverDateOfExpiry($driverDateOfExpiry)
            ->setDriverDateOfIssue($driverDateOfIssue)
            ->setDriverFirstName($driverFirstName)
            ->setDriverLastName($driverLastName)
            ->setDriverMiddleName($driverMiddleName)
            ->setDriverNumber($driverNumber)
            ->setDriverPlaceOfBirth($driverPlaceOfBirth)
            ->setDriverSeries($driverSeries)
            ->setForeignPassportCodeOfIssuingState($foreignPassportCodeOfIssuingState)
            ->setForeignPassportDateOfBirth($foreignPassportDateOfBirth)
            ->setForeignPassportDateOfExpiry($foreignPassportDateOfExpiry)
            ->setForeignPassportFirstName($foreignPassportFirstName)
            ->setForeignPassportLastName($foreignPassportLastName)
            ->setForeignPassportMRZ($foreignPassportMRZ)
            ->setForeignPassportMiddleName($foreignPassportMiddleName)
            ->setForeignPassportNationality($foreignPassportNationality)
            ->setForeignPassportNumber($foreignPassportNumber)
            ->setForeignPassportPersonalCode($foreignPassportPersonalCode)
            ->setForeignPassportSex($foreignPassportSex)
            ->setPassportDateOfBirth($passportDateOfBirth)
            ->setPassportDateOfIssue($passportDateOfIssue)
            ->setPassportDepartmentCode($passportDepartmentCode)
            ->setPassportFirstName($passportFirstName)
            ->setPassportIssue($passportIssue)
            ->setPassportLastName($passportLastName)
            ->setPassportMiddleName($passportMiddleName)
            ->setPassportNumber($passportNumber)
            ->setPassportPlaceOfBirth($passportPlaceOfBirth)
            ->setPassportRegistrationAddress($passportRegistrationAddress)
            ->setPassportSeries($passportSeries)
            ->setPassportSex($passportSex);
    }
    /**
     * Get DriverDateOfBirth value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverDateOfBirth(): ?string
    {
        return isset($this->DriverDateOfBirth) ? $this->DriverDateOfBirth : null;
    }
    /**
     * Set DriverDateOfBirth value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverDateOfBirth
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setDriverDateOfBirth(?string $driverDateOfBirth = null): self
    {
        // validation for constraint: string
        if (!is_null($driverDateOfBirth) && !is_string($driverDateOfBirth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverDateOfBirth, true), gettype($driverDateOfBirth)), __LINE__);
        }
        if (is_null($driverDateOfBirth) || (is_array($driverDateOfBirth) && empty($driverDateOfBirth))) {
            unset($this->DriverDateOfBirth);
        } else {
            $this->DriverDateOfBirth = $driverDateOfBirth;
        }
        
        return $this;
    }
    /**
     * Get DriverDateOfExpiry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverDateOfExpiry(): ?string
    {
        return isset($this->DriverDateOfExpiry) ? $this->DriverDateOfExpiry : null;
    }
    /**
     * Set DriverDateOfExpiry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverDateOfExpiry
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setDriverDateOfExpiry(?string $driverDateOfExpiry = null): self
    {
        // validation for constraint: string
        if (!is_null($driverDateOfExpiry) && !is_string($driverDateOfExpiry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverDateOfExpiry, true), gettype($driverDateOfExpiry)), __LINE__);
        }
        if (is_null($driverDateOfExpiry) || (is_array($driverDateOfExpiry) && empty($driverDateOfExpiry))) {
            unset($this->DriverDateOfExpiry);
        } else {
            $this->DriverDateOfExpiry = $driverDateOfExpiry;
        }
        
        return $this;
    }
    /**
     * Get DriverDateOfIssue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverDateOfIssue(): ?string
    {
        return isset($this->DriverDateOfIssue) ? $this->DriverDateOfIssue : null;
    }
    /**
     * Set DriverDateOfIssue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverDateOfIssue
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setDriverDateOfIssue(?string $driverDateOfIssue = null): self
    {
        // validation for constraint: string
        if (!is_null($driverDateOfIssue) && !is_string($driverDateOfIssue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverDateOfIssue, true), gettype($driverDateOfIssue)), __LINE__);
        }
        if (is_null($driverDateOfIssue) || (is_array($driverDateOfIssue) && empty($driverDateOfIssue))) {
            unset($this->DriverDateOfIssue);
        } else {
            $this->DriverDateOfIssue = $driverDateOfIssue;
        }
        
        return $this;
    }
    /**
     * Get DriverFirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverFirstName(): ?string
    {
        return isset($this->DriverFirstName) ? $this->DriverFirstName : null;
    }
    /**
     * Set DriverFirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverFirstName
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setDriverFirstName(?string $driverFirstName = null): self
    {
        // validation for constraint: string
        if (!is_null($driverFirstName) && !is_string($driverFirstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverFirstName, true), gettype($driverFirstName)), __LINE__);
        }
        if (is_null($driverFirstName) || (is_array($driverFirstName) && empty($driverFirstName))) {
            unset($this->DriverFirstName);
        } else {
            $this->DriverFirstName = $driverFirstName;
        }
        
        return $this;
    }
    /**
     * Get DriverLastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverLastName(): ?string
    {
        return isset($this->DriverLastName) ? $this->DriverLastName : null;
    }
    /**
     * Set DriverLastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverLastName
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setDriverLastName(?string $driverLastName = null): self
    {
        // validation for constraint: string
        if (!is_null($driverLastName) && !is_string($driverLastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverLastName, true), gettype($driverLastName)), __LINE__);
        }
        if (is_null($driverLastName) || (is_array($driverLastName) && empty($driverLastName))) {
            unset($this->DriverLastName);
        } else {
            $this->DriverLastName = $driverLastName;
        }
        
        return $this;
    }
    /**
     * Get DriverMiddleName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverMiddleName(): ?string
    {
        return isset($this->DriverMiddleName) ? $this->DriverMiddleName : null;
    }
    /**
     * Set DriverMiddleName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverMiddleName
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setDriverMiddleName(?string $driverMiddleName = null): self
    {
        // validation for constraint: string
        if (!is_null($driverMiddleName) && !is_string($driverMiddleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverMiddleName, true), gettype($driverMiddleName)), __LINE__);
        }
        if (is_null($driverMiddleName) || (is_array($driverMiddleName) && empty($driverMiddleName))) {
            unset($this->DriverMiddleName);
        } else {
            $this->DriverMiddleName = $driverMiddleName;
        }
        
        return $this;
    }
    /**
     * Get DriverNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverNumber(): ?string
    {
        return isset($this->DriverNumber) ? $this->DriverNumber : null;
    }
    /**
     * Set DriverNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverNumber
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setDriverNumber(?string $driverNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($driverNumber) && !is_string($driverNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverNumber, true), gettype($driverNumber)), __LINE__);
        }
        if (is_null($driverNumber) || (is_array($driverNumber) && empty($driverNumber))) {
            unset($this->DriverNumber);
        } else {
            $this->DriverNumber = $driverNumber;
        }
        
        return $this;
    }
    /**
     * Get DriverPlaceOfBirth value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverPlaceOfBirth(): ?string
    {
        return isset($this->DriverPlaceOfBirth) ? $this->DriverPlaceOfBirth : null;
    }
    /**
     * Set DriverPlaceOfBirth value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverPlaceOfBirth
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setDriverPlaceOfBirth(?string $driverPlaceOfBirth = null): self
    {
        // validation for constraint: string
        if (!is_null($driverPlaceOfBirth) && !is_string($driverPlaceOfBirth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverPlaceOfBirth, true), gettype($driverPlaceOfBirth)), __LINE__);
        }
        if (is_null($driverPlaceOfBirth) || (is_array($driverPlaceOfBirth) && empty($driverPlaceOfBirth))) {
            unset($this->DriverPlaceOfBirth);
        } else {
            $this->DriverPlaceOfBirth = $driverPlaceOfBirth;
        }
        
        return $this;
    }
    /**
     * Get DriverSeries value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverSeries(): ?string
    {
        return isset($this->DriverSeries) ? $this->DriverSeries : null;
    }
    /**
     * Set DriverSeries value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverSeries
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setDriverSeries(?string $driverSeries = null): self
    {
        // validation for constraint: string
        if (!is_null($driverSeries) && !is_string($driverSeries)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverSeries, true), gettype($driverSeries)), __LINE__);
        }
        if (is_null($driverSeries) || (is_array($driverSeries) && empty($driverSeries))) {
            unset($this->DriverSeries);
        } else {
            $this->DriverSeries = $driverSeries;
        }
        
        return $this;
    }
    /**
     * Get ForeignPassportCodeOfIssuingState value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getForeignPassportCodeOfIssuingState(): ?string
    {
        return isset($this->ForeignPassportCodeOfIssuingState) ? $this->ForeignPassportCodeOfIssuingState : null;
    }
    /**
     * Set ForeignPassportCodeOfIssuingState value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $foreignPassportCodeOfIssuingState
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setForeignPassportCodeOfIssuingState(?string $foreignPassportCodeOfIssuingState = null): self
    {
        // validation for constraint: string
        if (!is_null($foreignPassportCodeOfIssuingState) && !is_string($foreignPassportCodeOfIssuingState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreignPassportCodeOfIssuingState, true), gettype($foreignPassportCodeOfIssuingState)), __LINE__);
        }
        if (is_null($foreignPassportCodeOfIssuingState) || (is_array($foreignPassportCodeOfIssuingState) && empty($foreignPassportCodeOfIssuingState))) {
            unset($this->ForeignPassportCodeOfIssuingState);
        } else {
            $this->ForeignPassportCodeOfIssuingState = $foreignPassportCodeOfIssuingState;
        }
        
        return $this;
    }
    /**
     * Get ForeignPassportDateOfBirth value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getForeignPassportDateOfBirth(): ?string
    {
        return isset($this->ForeignPassportDateOfBirth) ? $this->ForeignPassportDateOfBirth : null;
    }
    /**
     * Set ForeignPassportDateOfBirth value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $foreignPassportDateOfBirth
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setForeignPassportDateOfBirth(?string $foreignPassportDateOfBirth = null): self
    {
        // validation for constraint: string
        if (!is_null($foreignPassportDateOfBirth) && !is_string($foreignPassportDateOfBirth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreignPassportDateOfBirth, true), gettype($foreignPassportDateOfBirth)), __LINE__);
        }
        if (is_null($foreignPassportDateOfBirth) || (is_array($foreignPassportDateOfBirth) && empty($foreignPassportDateOfBirth))) {
            unset($this->ForeignPassportDateOfBirth);
        } else {
            $this->ForeignPassportDateOfBirth = $foreignPassportDateOfBirth;
        }
        
        return $this;
    }
    /**
     * Get ForeignPassportDateOfExpiry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getForeignPassportDateOfExpiry(): ?string
    {
        return isset($this->ForeignPassportDateOfExpiry) ? $this->ForeignPassportDateOfExpiry : null;
    }
    /**
     * Set ForeignPassportDateOfExpiry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $foreignPassportDateOfExpiry
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setForeignPassportDateOfExpiry(?string $foreignPassportDateOfExpiry = null): self
    {
        // validation for constraint: string
        if (!is_null($foreignPassportDateOfExpiry) && !is_string($foreignPassportDateOfExpiry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreignPassportDateOfExpiry, true), gettype($foreignPassportDateOfExpiry)), __LINE__);
        }
        if (is_null($foreignPassportDateOfExpiry) || (is_array($foreignPassportDateOfExpiry) && empty($foreignPassportDateOfExpiry))) {
            unset($this->ForeignPassportDateOfExpiry);
        } else {
            $this->ForeignPassportDateOfExpiry = $foreignPassportDateOfExpiry;
        }
        
        return $this;
    }
    /**
     * Get ForeignPassportFirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getForeignPassportFirstName(): ?string
    {
        return isset($this->ForeignPassportFirstName) ? $this->ForeignPassportFirstName : null;
    }
    /**
     * Set ForeignPassportFirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $foreignPassportFirstName
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setForeignPassportFirstName(?string $foreignPassportFirstName = null): self
    {
        // validation for constraint: string
        if (!is_null($foreignPassportFirstName) && !is_string($foreignPassportFirstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreignPassportFirstName, true), gettype($foreignPassportFirstName)), __LINE__);
        }
        if (is_null($foreignPassportFirstName) || (is_array($foreignPassportFirstName) && empty($foreignPassportFirstName))) {
            unset($this->ForeignPassportFirstName);
        } else {
            $this->ForeignPassportFirstName = $foreignPassportFirstName;
        }
        
        return $this;
    }
    /**
     * Get ForeignPassportLastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getForeignPassportLastName(): ?string
    {
        return isset($this->ForeignPassportLastName) ? $this->ForeignPassportLastName : null;
    }
    /**
     * Set ForeignPassportLastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $foreignPassportLastName
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setForeignPassportLastName(?string $foreignPassportLastName = null): self
    {
        // validation for constraint: string
        if (!is_null($foreignPassportLastName) && !is_string($foreignPassportLastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreignPassportLastName, true), gettype($foreignPassportLastName)), __LINE__);
        }
        if (is_null($foreignPassportLastName) || (is_array($foreignPassportLastName) && empty($foreignPassportLastName))) {
            unset($this->ForeignPassportLastName);
        } else {
            $this->ForeignPassportLastName = $foreignPassportLastName;
        }
        
        return $this;
    }
    /**
     * Get ForeignPassportMRZ value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getForeignPassportMRZ(): ?string
    {
        return isset($this->ForeignPassportMRZ) ? $this->ForeignPassportMRZ : null;
    }
    /**
     * Set ForeignPassportMRZ value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $foreignPassportMRZ
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setForeignPassportMRZ(?string $foreignPassportMRZ = null): self
    {
        // validation for constraint: string
        if (!is_null($foreignPassportMRZ) && !is_string($foreignPassportMRZ)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreignPassportMRZ, true), gettype($foreignPassportMRZ)), __LINE__);
        }
        if (is_null($foreignPassportMRZ) || (is_array($foreignPassportMRZ) && empty($foreignPassportMRZ))) {
            unset($this->ForeignPassportMRZ);
        } else {
            $this->ForeignPassportMRZ = $foreignPassportMRZ;
        }
        
        return $this;
    }
    /**
     * Get ForeignPassportMiddleName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getForeignPassportMiddleName(): ?string
    {
        return isset($this->ForeignPassportMiddleName) ? $this->ForeignPassportMiddleName : null;
    }
    /**
     * Set ForeignPassportMiddleName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $foreignPassportMiddleName
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setForeignPassportMiddleName(?string $foreignPassportMiddleName = null): self
    {
        // validation for constraint: string
        if (!is_null($foreignPassportMiddleName) && !is_string($foreignPassportMiddleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreignPassportMiddleName, true), gettype($foreignPassportMiddleName)), __LINE__);
        }
        if (is_null($foreignPassportMiddleName) || (is_array($foreignPassportMiddleName) && empty($foreignPassportMiddleName))) {
            unset($this->ForeignPassportMiddleName);
        } else {
            $this->ForeignPassportMiddleName = $foreignPassportMiddleName;
        }
        
        return $this;
    }
    /**
     * Get ForeignPassportNationality value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getForeignPassportNationality(): ?string
    {
        return isset($this->ForeignPassportNationality) ? $this->ForeignPassportNationality : null;
    }
    /**
     * Set ForeignPassportNationality value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $foreignPassportNationality
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setForeignPassportNationality(?string $foreignPassportNationality = null): self
    {
        // validation for constraint: string
        if (!is_null($foreignPassportNationality) && !is_string($foreignPassportNationality)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreignPassportNationality, true), gettype($foreignPassportNationality)), __LINE__);
        }
        if (is_null($foreignPassportNationality) || (is_array($foreignPassportNationality) && empty($foreignPassportNationality))) {
            unset($this->ForeignPassportNationality);
        } else {
            $this->ForeignPassportNationality = $foreignPassportNationality;
        }
        
        return $this;
    }
    /**
     * Get ForeignPassportNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getForeignPassportNumber(): ?string
    {
        return isset($this->ForeignPassportNumber) ? $this->ForeignPassportNumber : null;
    }
    /**
     * Set ForeignPassportNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $foreignPassportNumber
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setForeignPassportNumber(?string $foreignPassportNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($foreignPassportNumber) && !is_string($foreignPassportNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreignPassportNumber, true), gettype($foreignPassportNumber)), __LINE__);
        }
        if (is_null($foreignPassportNumber) || (is_array($foreignPassportNumber) && empty($foreignPassportNumber))) {
            unset($this->ForeignPassportNumber);
        } else {
            $this->ForeignPassportNumber = $foreignPassportNumber;
        }
        
        return $this;
    }
    /**
     * Get ForeignPassportPersonalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getForeignPassportPersonalCode(): ?string
    {
        return isset($this->ForeignPassportPersonalCode) ? $this->ForeignPassportPersonalCode : null;
    }
    /**
     * Set ForeignPassportPersonalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $foreignPassportPersonalCode
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setForeignPassportPersonalCode(?string $foreignPassportPersonalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($foreignPassportPersonalCode) && !is_string($foreignPassportPersonalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreignPassportPersonalCode, true), gettype($foreignPassportPersonalCode)), __LINE__);
        }
        if (is_null($foreignPassportPersonalCode) || (is_array($foreignPassportPersonalCode) && empty($foreignPassportPersonalCode))) {
            unset($this->ForeignPassportPersonalCode);
        } else {
            $this->ForeignPassportPersonalCode = $foreignPassportPersonalCode;
        }
        
        return $this;
    }
    /**
     * Get ForeignPassportSex value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getForeignPassportSex(): ?string
    {
        return isset($this->ForeignPassportSex) ? $this->ForeignPassportSex : null;
    }
    /**
     * Set ForeignPassportSex value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $foreignPassportSex
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setForeignPassportSex(?string $foreignPassportSex = null): self
    {
        // validation for constraint: string
        if (!is_null($foreignPassportSex) && !is_string($foreignPassportSex)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreignPassportSex, true), gettype($foreignPassportSex)), __LINE__);
        }
        if (is_null($foreignPassportSex) || (is_array($foreignPassportSex) && empty($foreignPassportSex))) {
            unset($this->ForeignPassportSex);
        } else {
            $this->ForeignPassportSex = $foreignPassportSex;
        }
        
        return $this;
    }
    /**
     * Get PassportDateOfBirth value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassportDateOfBirth(): ?string
    {
        return isset($this->PassportDateOfBirth) ? $this->PassportDateOfBirth : null;
    }
    /**
     * Set PassportDateOfBirth value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passportDateOfBirth
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setPassportDateOfBirth(?string $passportDateOfBirth = null): self
    {
        // validation for constraint: string
        if (!is_null($passportDateOfBirth) && !is_string($passportDateOfBirth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passportDateOfBirth, true), gettype($passportDateOfBirth)), __LINE__);
        }
        if (is_null($passportDateOfBirth) || (is_array($passportDateOfBirth) && empty($passportDateOfBirth))) {
            unset($this->PassportDateOfBirth);
        } else {
            $this->PassportDateOfBirth = $passportDateOfBirth;
        }
        
        return $this;
    }
    /**
     * Get PassportDateOfIssue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassportDateOfIssue(): ?string
    {
        return isset($this->PassportDateOfIssue) ? $this->PassportDateOfIssue : null;
    }
    /**
     * Set PassportDateOfIssue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passportDateOfIssue
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setPassportDateOfIssue(?string $passportDateOfIssue = null): self
    {
        // validation for constraint: string
        if (!is_null($passportDateOfIssue) && !is_string($passportDateOfIssue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passportDateOfIssue, true), gettype($passportDateOfIssue)), __LINE__);
        }
        if (is_null($passportDateOfIssue) || (is_array($passportDateOfIssue) && empty($passportDateOfIssue))) {
            unset($this->PassportDateOfIssue);
        } else {
            $this->PassportDateOfIssue = $passportDateOfIssue;
        }
        
        return $this;
    }
    /**
     * Get PassportDepartmentCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassportDepartmentCode(): ?string
    {
        return isset($this->PassportDepartmentCode) ? $this->PassportDepartmentCode : null;
    }
    /**
     * Set PassportDepartmentCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passportDepartmentCode
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setPassportDepartmentCode(?string $passportDepartmentCode = null): self
    {
        // validation for constraint: string
        if (!is_null($passportDepartmentCode) && !is_string($passportDepartmentCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passportDepartmentCode, true), gettype($passportDepartmentCode)), __LINE__);
        }
        if (is_null($passportDepartmentCode) || (is_array($passportDepartmentCode) && empty($passportDepartmentCode))) {
            unset($this->PassportDepartmentCode);
        } else {
            $this->PassportDepartmentCode = $passportDepartmentCode;
        }
        
        return $this;
    }
    /**
     * Get PassportFirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassportFirstName(): ?string
    {
        return isset($this->PassportFirstName) ? $this->PassportFirstName : null;
    }
    /**
     * Set PassportFirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passportFirstName
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setPassportFirstName(?string $passportFirstName = null): self
    {
        // validation for constraint: string
        if (!is_null($passportFirstName) && !is_string($passportFirstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passportFirstName, true), gettype($passportFirstName)), __LINE__);
        }
        if (is_null($passportFirstName) || (is_array($passportFirstName) && empty($passportFirstName))) {
            unset($this->PassportFirstName);
        } else {
            $this->PassportFirstName = $passportFirstName;
        }
        
        return $this;
    }
    /**
     * Get PassportIssue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassportIssue(): ?string
    {
        return isset($this->PassportIssue) ? $this->PassportIssue : null;
    }
    /**
     * Set PassportIssue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passportIssue
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setPassportIssue(?string $passportIssue = null): self
    {
        // validation for constraint: string
        if (!is_null($passportIssue) && !is_string($passportIssue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passportIssue, true), gettype($passportIssue)), __LINE__);
        }
        if (is_null($passportIssue) || (is_array($passportIssue) && empty($passportIssue))) {
            unset($this->PassportIssue);
        } else {
            $this->PassportIssue = $passportIssue;
        }
        
        return $this;
    }
    /**
     * Get PassportLastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassportLastName(): ?string
    {
        return isset($this->PassportLastName) ? $this->PassportLastName : null;
    }
    /**
     * Set PassportLastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passportLastName
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setPassportLastName(?string $passportLastName = null): self
    {
        // validation for constraint: string
        if (!is_null($passportLastName) && !is_string($passportLastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passportLastName, true), gettype($passportLastName)), __LINE__);
        }
        if (is_null($passportLastName) || (is_array($passportLastName) && empty($passportLastName))) {
            unset($this->PassportLastName);
        } else {
            $this->PassportLastName = $passportLastName;
        }
        
        return $this;
    }
    /**
     * Get PassportMiddleName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassportMiddleName(): ?string
    {
        return isset($this->PassportMiddleName) ? $this->PassportMiddleName : null;
    }
    /**
     * Set PassportMiddleName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passportMiddleName
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setPassportMiddleName(?string $passportMiddleName = null): self
    {
        // validation for constraint: string
        if (!is_null($passportMiddleName) && !is_string($passportMiddleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passportMiddleName, true), gettype($passportMiddleName)), __LINE__);
        }
        if (is_null($passportMiddleName) || (is_array($passportMiddleName) && empty($passportMiddleName))) {
            unset($this->PassportMiddleName);
        } else {
            $this->PassportMiddleName = $passportMiddleName;
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
     * @return \StructType\AcsEmployeeDocumentsSaveData
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
     * Get PassportPlaceOfBirth value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassportPlaceOfBirth(): ?string
    {
        return isset($this->PassportPlaceOfBirth) ? $this->PassportPlaceOfBirth : null;
    }
    /**
     * Set PassportPlaceOfBirth value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passportPlaceOfBirth
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setPassportPlaceOfBirth(?string $passportPlaceOfBirth = null): self
    {
        // validation for constraint: string
        if (!is_null($passportPlaceOfBirth) && !is_string($passportPlaceOfBirth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passportPlaceOfBirth, true), gettype($passportPlaceOfBirth)), __LINE__);
        }
        if (is_null($passportPlaceOfBirth) || (is_array($passportPlaceOfBirth) && empty($passportPlaceOfBirth))) {
            unset($this->PassportPlaceOfBirth);
        } else {
            $this->PassportPlaceOfBirth = $passportPlaceOfBirth;
        }
        
        return $this;
    }
    /**
     * Get PassportRegistrationAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassportRegistrationAddress(): ?string
    {
        return isset($this->PassportRegistrationAddress) ? $this->PassportRegistrationAddress : null;
    }
    /**
     * Set PassportRegistrationAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passportRegistrationAddress
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setPassportRegistrationAddress(?string $passportRegistrationAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($passportRegistrationAddress) && !is_string($passportRegistrationAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passportRegistrationAddress, true), gettype($passportRegistrationAddress)), __LINE__);
        }
        if (is_null($passportRegistrationAddress) || (is_array($passportRegistrationAddress) && empty($passportRegistrationAddress))) {
            unset($this->PassportRegistrationAddress);
        } else {
            $this->PassportRegistrationAddress = $passportRegistrationAddress;
        }
        
        return $this;
    }
    /**
     * Get PassportSeries value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassportSeries(): ?string
    {
        return isset($this->PassportSeries) ? $this->PassportSeries : null;
    }
    /**
     * Set PassportSeries value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passportSeries
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setPassportSeries(?string $passportSeries = null): self
    {
        // validation for constraint: string
        if (!is_null($passportSeries) && !is_string($passportSeries)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passportSeries, true), gettype($passportSeries)), __LINE__);
        }
        if (is_null($passportSeries) || (is_array($passportSeries) && empty($passportSeries))) {
            unset($this->PassportSeries);
        } else {
            $this->PassportSeries = $passportSeries;
        }
        
        return $this;
    }
    /**
     * Get PassportSex value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassportSex(): ?string
    {
        return isset($this->PassportSex) ? $this->PassportSex : null;
    }
    /**
     * Set PassportSex value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passportSex
     * @return \StructType\AcsEmployeeDocumentsSaveData
     */
    public function setPassportSex(?string $passportSex = null): self
    {
        // validation for constraint: string
        if (!is_null($passportSex) && !is_string($passportSex)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passportSex, true), gettype($passportSex)), __LINE__);
        }
        if (is_null($passportSex) || (is_array($passportSex) && empty($passportSex))) {
            unset($this->PassportSex);
        } else {
            $this->PassportSex = $passportSex;
        }
        
        return $this;
    }
}
