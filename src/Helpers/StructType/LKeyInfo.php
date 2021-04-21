<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LKeyInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LKeyInfo
 * @subpackage Structs
 */
class LKeyInfo extends LStateBase
{
    /**
     * The AccessPointID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $AccessPointID = null;
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Data = null;
    /**
     * The DriverSettings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DriverSettings|null
     */
    protected ?\StructType\DriverSettings $DriverSettings = null;
    /**
     * The EmployeeFirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeeFirstName = null;
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
     * The EmployeeLastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeeLastName = null;
    /**
     * The EmployeeSecondName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EmployeeSecondName = null;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $EndDate = null;
    /**
     * The Finger1_Template
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Finger1_Template = null;
    /**
     * The Finger2_Template
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Finger2_Template = null;
    /**
     * The Finger3_Template
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Finger3_Template = null;
    /**
     * The Finger4_Template
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Finger4_Template = null;
    /**
     * The Finger5_Template
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Finger5_Template = null;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $ID = null;
    /**
     * The IsForBiometrics
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsForBiometrics = null;
    /**
     * The KeyNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $KeyNumber = null;
    /**
     * The PINCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $PINCode = null;
    /**
     * The PINCodeUnderPressure
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $PINCodeUnderPressure = null;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $StartDate = null;
    /**
     * The TabNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $TabNumber = null;
    /**
     * Constructor method for LKeyInfo
     * @uses LKeyInfo::setAccessPointID()
     * @uses LKeyInfo::setData()
     * @uses LKeyInfo::setDriverSettings()
     * @uses LKeyInfo::setEmployeeFirstName()
     * @uses LKeyInfo::setEmployeeID()
     * @uses LKeyInfo::setEmployeeLastName()
     * @uses LKeyInfo::setEmployeeSecondName()
     * @uses LKeyInfo::setEndDate()
     * @uses LKeyInfo::setFinger1_Template()
     * @uses LKeyInfo::setFinger2_Template()
     * @uses LKeyInfo::setFinger3_Template()
     * @uses LKeyInfo::setFinger4_Template()
     * @uses LKeyInfo::setFinger5_Template()
     * @uses LKeyInfo::setID()
     * @uses LKeyInfo::setIsForBiometrics()
     * @uses LKeyInfo::setKeyNumber()
     * @uses LKeyInfo::setPINCode()
     * @uses LKeyInfo::setPINCodeUnderPressure()
     * @uses LKeyInfo::setStartDate()
     * @uses LKeyInfo::setTabNumber()
     * @param string $accessPointID
     * @param string $data
     * @param \StructType\DriverSettings $driverSettings
     * @param string $employeeFirstName
     * @param string $employeeID
     * @param string $employeeLastName
     * @param string $employeeSecondName
     * @param string $endDate
     * @param string $finger1_Template
     * @param string $finger2_Template
     * @param string $finger3_Template
     * @param string $finger4_Template
     * @param string $finger5_Template
     * @param int $iD
     * @param bool $isForBiometrics
     * @param int $keyNumber
     * @param int $pINCode
     * @param int $pINCodeUnderPressure
     * @param string $startDate
     * @param int $tabNumber
     */
    public function __construct(?string $accessPointID = null, ?string $data = null, ?\StructType\DriverSettings $driverSettings = null, ?string $employeeFirstName = null, ?string $employeeID = null, ?string $employeeLastName = null, ?string $employeeSecondName = null, ?string $endDate = null, ?string $finger1_Template = null, ?string $finger2_Template = null, ?string $finger3_Template = null, ?string $finger4_Template = null, ?string $finger5_Template = null, ?int $iD = null, ?bool $isForBiometrics = null, ?int $keyNumber = null, ?int $pINCode = null, ?int $pINCodeUnderPressure = null, ?string $startDate = null, ?int $tabNumber = null)
    {
        $this
            ->setAccessPointID($accessPointID)
            ->setData($data)
            ->setDriverSettings($driverSettings)
            ->setEmployeeFirstName($employeeFirstName)
            ->setEmployeeID($employeeID)
            ->setEmployeeLastName($employeeLastName)
            ->setEmployeeSecondName($employeeSecondName)
            ->setEndDate($endDate)
            ->setFinger1_Template($finger1_Template)
            ->setFinger2_Template($finger2_Template)
            ->setFinger3_Template($finger3_Template)
            ->setFinger4_Template($finger4_Template)
            ->setFinger5_Template($finger5_Template)
            ->setID($iD)
            ->setIsForBiometrics($isForBiometrics)
            ->setKeyNumber($keyNumber)
            ->setPINCode($pINCode)
            ->setPINCodeUnderPressure($pINCodeUnderPressure)
            ->setStartDate($startDate)
            ->setTabNumber($tabNumber);
    }
    /**
     * Get AccessPointID value
     * @return string|null
     */
    public function getAccessPointID(): ?string
    {
        return $this->AccessPointID;
    }
    /**
     * Set AccessPointID value
     * @param string $accessPointID
     * @return \StructType\LKeyInfo
     */
    public function setAccessPointID(?string $accessPointID = null): self
    {
        // validation for constraint: string
        if (!is_null($accessPointID) && !is_string($accessPointID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accessPointID, true), gettype($accessPointID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($accessPointID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $accessPointID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($accessPointID, true)), __LINE__);
        }
        $this->AccessPointID = $accessPointID;
        
        return $this;
    }
    /**
     * Get Data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getData(): ?string
    {
        return isset($this->Data) ? $this->Data : null;
    }
    /**
     * Set Data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $data
     * @return \StructType\LKeyInfo
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->Data);
        } else {
            $this->Data = $data;
        }
        
        return $this;
    }
    /**
     * Get DriverSettings value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DriverSettings|null
     */
    public function getDriverSettings(): ?\StructType\DriverSettings
    {
        return isset($this->DriverSettings) ? $this->DriverSettings : null;
    }
    /**
     * Set DriverSettings value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\DriverSettings $driverSettings
     * @return \StructType\LKeyInfo
     */
    public function setDriverSettings(?\StructType\DriverSettings $driverSettings = null): self
    {
        if (is_null($driverSettings) || (is_array($driverSettings) && empty($driverSettings))) {
            unset($this->DriverSettings);
        } else {
            $this->DriverSettings = $driverSettings;
        }
        
        return $this;
    }
    /**
     * Get EmployeeFirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeFirstName(): ?string
    {
        return isset($this->EmployeeFirstName) ? $this->EmployeeFirstName : null;
    }
    /**
     * Set EmployeeFirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeFirstName
     * @return \StructType\LKeyInfo
     */
    public function setEmployeeFirstName(?string $employeeFirstName = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeFirstName) && !is_string($employeeFirstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeFirstName, true), gettype($employeeFirstName)), __LINE__);
        }
        if (is_null($employeeFirstName) || (is_array($employeeFirstName) && empty($employeeFirstName))) {
            unset($this->EmployeeFirstName);
        } else {
            $this->EmployeeFirstName = $employeeFirstName;
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
     * @return \StructType\LKeyInfo
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
     * Get EmployeeLastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeLastName(): ?string
    {
        return isset($this->EmployeeLastName) ? $this->EmployeeLastName : null;
    }
    /**
     * Set EmployeeLastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeLastName
     * @return \StructType\LKeyInfo
     */
    public function setEmployeeLastName(?string $employeeLastName = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeLastName) && !is_string($employeeLastName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeLastName, true), gettype($employeeLastName)), __LINE__);
        }
        if (is_null($employeeLastName) || (is_array($employeeLastName) && empty($employeeLastName))) {
            unset($this->EmployeeLastName);
        } else {
            $this->EmployeeLastName = $employeeLastName;
        }
        
        return $this;
    }
    /**
     * Get EmployeeSecondName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeSecondName(): ?string
    {
        return isset($this->EmployeeSecondName) ? $this->EmployeeSecondName : null;
    }
    /**
     * Set EmployeeSecondName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeSecondName
     * @return \StructType\LKeyInfo
     */
    public function setEmployeeSecondName(?string $employeeSecondName = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeSecondName) && !is_string($employeeSecondName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeSecondName, true), gettype($employeeSecondName)), __LINE__);
        }
        if (is_null($employeeSecondName) || (is_array($employeeSecondName) && empty($employeeSecondName))) {
            unset($this->EmployeeSecondName);
        } else {
            $this->EmployeeSecondName = $employeeSecondName;
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
     * @return \StructType\LKeyInfo
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
     * Get Finger1_Template value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFinger1_Template(): ?string
    {
        return isset($this->Finger1_Template) ? $this->Finger1_Template : null;
    }
    /**
     * Set Finger1_Template value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $finger1_Template
     * @return \StructType\LKeyInfo
     */
    public function setFinger1_Template(?string $finger1_Template = null): self
    {
        // validation for constraint: string
        if (!is_null($finger1_Template) && !is_string($finger1_Template)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finger1_Template, true), gettype($finger1_Template)), __LINE__);
        }
        if (is_null($finger1_Template) || (is_array($finger1_Template) && empty($finger1_Template))) {
            unset($this->Finger1_Template);
        } else {
            $this->Finger1_Template = $finger1_Template;
        }
        
        return $this;
    }
    /**
     * Get Finger2_Template value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFinger2_Template(): ?string
    {
        return isset($this->Finger2_Template) ? $this->Finger2_Template : null;
    }
    /**
     * Set Finger2_Template value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $finger2_Template
     * @return \StructType\LKeyInfo
     */
    public function setFinger2_Template(?string $finger2_Template = null): self
    {
        // validation for constraint: string
        if (!is_null($finger2_Template) && !is_string($finger2_Template)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finger2_Template, true), gettype($finger2_Template)), __LINE__);
        }
        if (is_null($finger2_Template) || (is_array($finger2_Template) && empty($finger2_Template))) {
            unset($this->Finger2_Template);
        } else {
            $this->Finger2_Template = $finger2_Template;
        }
        
        return $this;
    }
    /**
     * Get Finger3_Template value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFinger3_Template(): ?string
    {
        return isset($this->Finger3_Template) ? $this->Finger3_Template : null;
    }
    /**
     * Set Finger3_Template value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $finger3_Template
     * @return \StructType\LKeyInfo
     */
    public function setFinger3_Template(?string $finger3_Template = null): self
    {
        // validation for constraint: string
        if (!is_null($finger3_Template) && !is_string($finger3_Template)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finger3_Template, true), gettype($finger3_Template)), __LINE__);
        }
        if (is_null($finger3_Template) || (is_array($finger3_Template) && empty($finger3_Template))) {
            unset($this->Finger3_Template);
        } else {
            $this->Finger3_Template = $finger3_Template;
        }
        
        return $this;
    }
    /**
     * Get Finger4_Template value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFinger4_Template(): ?string
    {
        return isset($this->Finger4_Template) ? $this->Finger4_Template : null;
    }
    /**
     * Set Finger4_Template value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $finger4_Template
     * @return \StructType\LKeyInfo
     */
    public function setFinger4_Template(?string $finger4_Template = null): self
    {
        // validation for constraint: string
        if (!is_null($finger4_Template) && !is_string($finger4_Template)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finger4_Template, true), gettype($finger4_Template)), __LINE__);
        }
        if (is_null($finger4_Template) || (is_array($finger4_Template) && empty($finger4_Template))) {
            unset($this->Finger4_Template);
        } else {
            $this->Finger4_Template = $finger4_Template;
        }
        
        return $this;
    }
    /**
     * Get Finger5_Template value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFinger5_Template(): ?string
    {
        return isset($this->Finger5_Template) ? $this->Finger5_Template : null;
    }
    /**
     * Set Finger5_Template value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $finger5_Template
     * @return \StructType\LKeyInfo
     */
    public function setFinger5_Template(?string $finger5_Template = null): self
    {
        // validation for constraint: string
        if (!is_null($finger5_Template) && !is_string($finger5_Template)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finger5_Template, true), gettype($finger5_Template)), __LINE__);
        }
        if (is_null($finger5_Template) || (is_array($finger5_Template) && empty($finger5_Template))) {
            unset($this->Finger5_Template);
        } else {
            $this->Finger5_Template = $finger5_Template;
        }
        
        return $this;
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID(): ?int
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \StructType\LKeyInfo
     */
    public function setID(?int $iD = null): self
    {
        // validation for constraint: int
        if (!is_null($iD) && !(is_int($iD) || ctype_digit($iD))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        
        return $this;
    }
    /**
     * Get IsForBiometrics value
     * @return bool|null
     */
    public function getIsForBiometrics(): ?bool
    {
        return $this->IsForBiometrics;
    }
    /**
     * Set IsForBiometrics value
     * @param bool $isForBiometrics
     * @return \StructType\LKeyInfo
     */
    public function setIsForBiometrics(?bool $isForBiometrics = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isForBiometrics) && !is_bool($isForBiometrics)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isForBiometrics, true), gettype($isForBiometrics)), __LINE__);
        }
        $this->IsForBiometrics = $isForBiometrics;
        
        return $this;
    }
    /**
     * Get KeyNumber value
     * @return int|null
     */
    public function getKeyNumber(): ?int
    {
        return $this->KeyNumber;
    }
    /**
     * Set KeyNumber value
     * @param int $keyNumber
     * @return \StructType\LKeyInfo
     */
    public function setKeyNumber(?int $keyNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($keyNumber) && !(is_int($keyNumber) || ctype_digit($keyNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($keyNumber, true), gettype($keyNumber)), __LINE__);
        }
        $this->KeyNumber = $keyNumber;
        
        return $this;
    }
    /**
     * Get PINCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPINCode(): ?int
    {
        return isset($this->PINCode) ? $this->PINCode : null;
    }
    /**
     * Set PINCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $pINCode
     * @return \StructType\LKeyInfo
     */
    public function setPINCode(?int $pINCode = null): self
    {
        // validation for constraint: int
        if (!is_null($pINCode) && !(is_int($pINCode) || ctype_digit($pINCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pINCode, true), gettype($pINCode)), __LINE__);
        }
        if (is_null($pINCode) || (is_array($pINCode) && empty($pINCode))) {
            unset($this->PINCode);
        } else {
            $this->PINCode = $pINCode;
        }
        
        return $this;
    }
    /**
     * Get PINCodeUnderPressure value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPINCodeUnderPressure(): ?int
    {
        return isset($this->PINCodeUnderPressure) ? $this->PINCodeUnderPressure : null;
    }
    /**
     * Set PINCodeUnderPressure value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $pINCodeUnderPressure
     * @return \StructType\LKeyInfo
     */
    public function setPINCodeUnderPressure(?int $pINCodeUnderPressure = null): self
    {
        // validation for constraint: int
        if (!is_null($pINCodeUnderPressure) && !(is_int($pINCodeUnderPressure) || ctype_digit($pINCodeUnderPressure))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pINCodeUnderPressure, true), gettype($pINCodeUnderPressure)), __LINE__);
        }
        if (is_null($pINCodeUnderPressure) || (is_array($pINCodeUnderPressure) && empty($pINCodeUnderPressure))) {
            unset($this->PINCodeUnderPressure);
        } else {
            $this->PINCodeUnderPressure = $pINCodeUnderPressure;
        }
        
        return $this;
    }
    /**
     * Get StartDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return isset($this->StartDate) ? $this->StartDate : null;
    }
    /**
     * Set StartDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startDate
     * @return \StructType\LKeyInfo
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        if (is_null($startDate) || (is_array($startDate) && empty($startDate))) {
            unset($this->StartDate);
        } else {
            $this->StartDate = $startDate;
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
     * @return \StructType\LKeyInfo
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
}
