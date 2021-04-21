<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcsEmployeeFullBase StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsEmployeeFullBase
 * @subpackage Structs
 */
class AcsEmployeeFullBase extends AcsEmployeeSlimBase
{
    /**
     * The Authority
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Authority = null;
    /**
     * The DateOfIssue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $DateOfIssue = null;
    /**
     * The PINCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $PINCode = null;
    /**
     * The PINCodeDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PINCodeDescription = null;
    /**
     * The PINCodeUnderPressure
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $PINCodeUnderPressure = null;
    /**
     * The PINCodeUnderPressureDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PINCodeUnderPressureDescription = null;
    /**
     * The PassportIssue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PassportIssue = null;
    /**
     * The PassportNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PassportNumber = null;
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
     * Constructor method for AcsEmployeeFullBase
     * @uses AcsEmployeeFullBase::setAuthority()
     * @uses AcsEmployeeFullBase::setDateOfIssue()
     * @uses AcsEmployeeFullBase::setPINCode()
     * @uses AcsEmployeeFullBase::setPINCodeDescription()
     * @uses AcsEmployeeFullBase::setPINCodeUnderPressure()
     * @uses AcsEmployeeFullBase::setPINCodeUnderPressureDescription()
     * @uses AcsEmployeeFullBase::setPassportIssue()
     * @uses AcsEmployeeFullBase::setPassportNumber()
     * @uses AcsEmployeeFullBase::setRegistrationAddress()
     * @uses AcsEmployeeFullBase::setResidentialAddress()
     * @param string $authority
     * @param string $dateOfIssue
     * @param int $pINCode
     * @param string $pINCodeDescription
     * @param int $pINCodeUnderPressure
     * @param string $pINCodeUnderPressureDescription
     * @param string $passportIssue
     * @param string $passportNumber
     * @param string $registrationAddress
     * @param string $residentialAddress
     */
    public function __construct(?string $authority = null, ?string $dateOfIssue = null, ?int $pINCode = null, ?string $pINCodeDescription = null, ?int $pINCodeUnderPressure = null, ?string $pINCodeUnderPressureDescription = null, ?string $passportIssue = null, ?string $passportNumber = null, ?string $registrationAddress = null, ?string $residentialAddress = null)
    {
        $this
            ->setAuthority($authority)
            ->setDateOfIssue($dateOfIssue)
            ->setPINCode($pINCode)
            ->setPINCodeDescription($pINCodeDescription)
            ->setPINCodeUnderPressure($pINCodeUnderPressure)
            ->setPINCodeUnderPressureDescription($pINCodeUnderPressureDescription)
            ->setPassportIssue($passportIssue)
            ->setPassportNumber($passportNumber)
            ->setRegistrationAddress($registrationAddress)
            ->setResidentialAddress($residentialAddress);
    }
    /**
     * Get Authority value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAuthority(): ?string
    {
        return isset($this->Authority) ? $this->Authority : null;
    }
    /**
     * Set Authority value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $authority
     * @return \StructType\AcsEmployeeFullBase
     */
    public function setAuthority(?string $authority = null): self
    {
        // validation for constraint: string
        if (!is_null($authority) && !is_string($authority)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authority, true), gettype($authority)), __LINE__);
        }
        if (is_null($authority) || (is_array($authority) && empty($authority))) {
            unset($this->Authority);
        } else {
            $this->Authority = $authority;
        }
        
        return $this;
    }
    /**
     * Get DateOfIssue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDateOfIssue(): ?string
    {
        return isset($this->DateOfIssue) ? $this->DateOfIssue : null;
    }
    /**
     * Set DateOfIssue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dateOfIssue
     * @return \StructType\AcsEmployeeFullBase
     */
    public function setDateOfIssue(?string $dateOfIssue = null): self
    {
        // validation for constraint: string
        if (!is_null($dateOfIssue) && !is_string($dateOfIssue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateOfIssue, true), gettype($dateOfIssue)), __LINE__);
        }
        if (is_null($dateOfIssue) || (is_array($dateOfIssue) && empty($dateOfIssue))) {
            unset($this->DateOfIssue);
        } else {
            $this->DateOfIssue = $dateOfIssue;
        }
        
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
     * @return \StructType\AcsEmployeeFullBase
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
     * Get PINCodeDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPINCodeDescription(): ?string
    {
        return isset($this->PINCodeDescription) ? $this->PINCodeDescription : null;
    }
    /**
     * Set PINCodeDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pINCodeDescription
     * @return \StructType\AcsEmployeeFullBase
     */
    public function setPINCodeDescription(?string $pINCodeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($pINCodeDescription) && !is_string($pINCodeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pINCodeDescription, true), gettype($pINCodeDescription)), __LINE__);
        }
        if (is_null($pINCodeDescription) || (is_array($pINCodeDescription) && empty($pINCodeDescription))) {
            unset($this->PINCodeDescription);
        } else {
            $this->PINCodeDescription = $pINCodeDescription;
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
     * @return \StructType\AcsEmployeeFullBase
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
     * Get PINCodeUnderPressureDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPINCodeUnderPressureDescription(): ?string
    {
        return isset($this->PINCodeUnderPressureDescription) ? $this->PINCodeUnderPressureDescription : null;
    }
    /**
     * Set PINCodeUnderPressureDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pINCodeUnderPressureDescription
     * @return \StructType\AcsEmployeeFullBase
     */
    public function setPINCodeUnderPressureDescription(?string $pINCodeUnderPressureDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($pINCodeUnderPressureDescription) && !is_string($pINCodeUnderPressureDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pINCodeUnderPressureDescription, true), gettype($pINCodeUnderPressureDescription)), __LINE__);
        }
        if (is_null($pINCodeUnderPressureDescription) || (is_array($pINCodeUnderPressureDescription) && empty($pINCodeUnderPressureDescription))) {
            unset($this->PINCodeUnderPressureDescription);
        } else {
            $this->PINCodeUnderPressureDescription = $pINCodeUnderPressureDescription;
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
     * @return \StructType\AcsEmployeeFullBase
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
     * @return \StructType\AcsEmployeeFullBase
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
     * @return \StructType\AcsEmployeeFullBase
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
     * @return \StructType\AcsEmployeeFullBase
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
}
