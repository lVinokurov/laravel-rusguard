<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmployeesFilter StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeesFilter
 * @subpackage Structs
 */
class EmployeesFilter extends AbstractStructBase
{
    /**
     * The AccessLevelsIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $AccessLevelsIds = null;
    /**
     * The CardTypesIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $CardTypesIds = null;
    /**
     * The FirstNameContains
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $FirstNameContains = null;
    /**
     * The IsFirstNameSigned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsFirstNameSigned = null;
    /**
     * The IsFirstNameUnsigned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsFirstNameUnsigned = null;
    /**
     * The IsKeyCardTypeUnsigned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsKeyCardTypeUnsigned = null;
    /**
     * The IsKeyNotValid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsKeyNotValid = null;
    /**
     * The IsKeyNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsKeyNumber = null;
    /**
     * The IsKeySiteCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool|null
     */
    protected ?bool $IsKeySiteCode = null;
    /**
     * The IsKeyUnsigned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsKeyUnsigned = null;
    /**
     * The IsKeyValid
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsKeyValid = null;
    /**
     * The IsLastNameSigned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsLastNameSigned = null;
    /**
     * The IsLastNameUnsigned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsLastNameUnsigned = null;
    /**
     * The IsLock
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsLock = null;
    /**
     * The IsSecondNameSigned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsSecondNameSigned = null;
    /**
     * The IsSecondNameUnsigned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsSecondNameUnsigned = null;
    /**
     * The IsShowEmptyAccessLevls
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsShowEmptyAccessLevls = null;
    /**
     * The IsTabNumberSigned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsTabNumberSigned = null;
    /**
     * The IsTabNumberUnsigned
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsTabNumberUnsigned = null;
    /**
     * The IsUnlock
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsUnlock = null;
    /**
     * The KeyAfterSiteCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $KeyAfterSiteCode = null;
    /**
     * The KeyCommentContains
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $KeyCommentContains = null;
    /**
     * The KeyNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $KeyNumber = null;
    /**
     * The KeySiteCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $KeySiteCode = null;
    /**
     * The LastNameContains
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $LastNameContains = null;
    /**
     * The SecondNameContains
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SecondNameContains = null;
    /**
     * The TabNumberContains
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TabNumberContains = null;
    /**
     * The TabNumberEquals
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $TabNumberEquals = null;
    /**
     * Constructor method for EmployeesFilter
     * @uses EmployeesFilter::setAccessLevelsIds()
     * @uses EmployeesFilter::setCardTypesIds()
     * @uses EmployeesFilter::setFirstNameContains()
     * @uses EmployeesFilter::setIsFirstNameSigned()
     * @uses EmployeesFilter::setIsFirstNameUnsigned()
     * @uses EmployeesFilter::setIsKeyCardTypeUnsigned()
     * @uses EmployeesFilter::setIsKeyNotValid()
     * @uses EmployeesFilter::setIsKeyNumber()
     * @uses EmployeesFilter::setIsKeySiteCode()
     * @uses EmployeesFilter::setIsKeyUnsigned()
     * @uses EmployeesFilter::setIsKeyValid()
     * @uses EmployeesFilter::setIsLastNameSigned()
     * @uses EmployeesFilter::setIsLastNameUnsigned()
     * @uses EmployeesFilter::setIsLock()
     * @uses EmployeesFilter::setIsSecondNameSigned()
     * @uses EmployeesFilter::setIsSecondNameUnsigned()
     * @uses EmployeesFilter::setIsShowEmptyAccessLevls()
     * @uses EmployeesFilter::setIsTabNumberSigned()
     * @uses EmployeesFilter::setIsTabNumberUnsigned()
     * @uses EmployeesFilter::setIsUnlock()
     * @uses EmployeesFilter::setKeyAfterSiteCode()
     * @uses EmployeesFilter::setKeyCommentContains()
     * @uses EmployeesFilter::setKeyNumber()
     * @uses EmployeesFilter::setKeySiteCode()
     * @uses EmployeesFilter::setLastNameContains()
     * @uses EmployeesFilter::setSecondNameContains()
     * @uses EmployeesFilter::setTabNumberContains()
     * @uses EmployeesFilter::setTabNumberEquals()
     * @param \ArrayType\ArrayOfguid $accessLevelsIds
     * @param \ArrayType\ArrayOfguid $cardTypesIds
     * @param string $firstNameContains
     * @param bool $isFirstNameSigned
     * @param bool $isFirstNameUnsigned
     * @param bool $isKeyCardTypeUnsigned
     * @param bool $isKeyNotValid
     * @param bool $isKeyNumber
     * @param bool $isKeySiteCode
     * @param bool $isKeyUnsigned
     * @param bool $isKeyValid
     * @param bool $isLastNameSigned
     * @param bool $isLastNameUnsigned
     * @param bool $isLock
     * @param bool $isSecondNameSigned
     * @param bool $isSecondNameUnsigned
     * @param bool $isShowEmptyAccessLevls
     * @param bool $isTabNumberSigned
     * @param bool $isTabNumberUnsigned
     * @param bool $isUnlock
     * @param int $keyAfterSiteCode
     * @param string $keyCommentContains
     * @param int $keyNumber
     * @param int $keySiteCode
     * @param string $lastNameContains
     * @param string $secondNameContains
     * @param string $tabNumberContains
     * @param string $tabNumberEquals
     */
    public function __construct(?\ArrayType\ArrayOfguid $accessLevelsIds = null, ?\ArrayType\ArrayOfguid $cardTypesIds = null, ?string $firstNameContains = null, ?bool $isFirstNameSigned = null, ?bool $isFirstNameUnsigned = null, ?bool $isKeyCardTypeUnsigned = null, ?bool $isKeyNotValid = null, ?bool $isKeyNumber = null, ?bool $isKeySiteCode = null, ?bool $isKeyUnsigned = null, ?bool $isKeyValid = null, ?bool $isLastNameSigned = null, ?bool $isLastNameUnsigned = null, ?bool $isLock = null, ?bool $isSecondNameSigned = null, ?bool $isSecondNameUnsigned = null, ?bool $isShowEmptyAccessLevls = null, ?bool $isTabNumberSigned = null, ?bool $isTabNumberUnsigned = null, ?bool $isUnlock = null, ?int $keyAfterSiteCode = null, ?string $keyCommentContains = null, ?int $keyNumber = null, ?int $keySiteCode = null, ?string $lastNameContains = null, ?string $secondNameContains = null, ?string $tabNumberContains = null, ?string $tabNumberEquals = null)
    {
        $this
            ->setAccessLevelsIds($accessLevelsIds)
            ->setCardTypesIds($cardTypesIds)
            ->setFirstNameContains($firstNameContains)
            ->setIsFirstNameSigned($isFirstNameSigned)
            ->setIsFirstNameUnsigned($isFirstNameUnsigned)
            ->setIsKeyCardTypeUnsigned($isKeyCardTypeUnsigned)
            ->setIsKeyNotValid($isKeyNotValid)
            ->setIsKeyNumber($isKeyNumber)
            ->setIsKeySiteCode($isKeySiteCode)
            ->setIsKeyUnsigned($isKeyUnsigned)
            ->setIsKeyValid($isKeyValid)
            ->setIsLastNameSigned($isLastNameSigned)
            ->setIsLastNameUnsigned($isLastNameUnsigned)
            ->setIsLock($isLock)
            ->setIsSecondNameSigned($isSecondNameSigned)
            ->setIsSecondNameUnsigned($isSecondNameUnsigned)
            ->setIsShowEmptyAccessLevls($isShowEmptyAccessLevls)
            ->setIsTabNumberSigned($isTabNumberSigned)
            ->setIsTabNumberUnsigned($isTabNumberUnsigned)
            ->setIsUnlock($isUnlock)
            ->setKeyAfterSiteCode($keyAfterSiteCode)
            ->setKeyCommentContains($keyCommentContains)
            ->setKeyNumber($keyNumber)
            ->setKeySiteCode($keySiteCode)
            ->setLastNameContains($lastNameContains)
            ->setSecondNameContains($secondNameContains)
            ->setTabNumberContains($tabNumberContains)
            ->setTabNumberEquals($tabNumberEquals);
    }
    /**
     * Get AccessLevelsIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getAccessLevelsIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->AccessLevelsIds) ? $this->AccessLevelsIds : null;
    }
    /**
     * Set AccessLevelsIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $accessLevelsIds
     * @return \StructType\EmployeesFilter
     */
    public function setAccessLevelsIds(?\ArrayType\ArrayOfguid $accessLevelsIds = null): self
    {
        if (is_null($accessLevelsIds) || (is_array($accessLevelsIds) && empty($accessLevelsIds))) {
            unset($this->AccessLevelsIds);
        } else {
            $this->AccessLevelsIds = $accessLevelsIds;
        }
        
        return $this;
    }
    /**
     * Get CardTypesIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getCardTypesIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->CardTypesIds) ? $this->CardTypesIds : null;
    }
    /**
     * Set CardTypesIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $cardTypesIds
     * @return \StructType\EmployeesFilter
     */
    public function setCardTypesIds(?\ArrayType\ArrayOfguid $cardTypesIds = null): self
    {
        if (is_null($cardTypesIds) || (is_array($cardTypesIds) && empty($cardTypesIds))) {
            unset($this->CardTypesIds);
        } else {
            $this->CardTypesIds = $cardTypesIds;
        }
        
        return $this;
    }
    /**
     * Get FirstNameContains value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstNameContains(): ?string
    {
        return isset($this->FirstNameContains) ? $this->FirstNameContains : null;
    }
    /**
     * Set FirstNameContains value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstNameContains
     * @return \StructType\EmployeesFilter
     */
    public function setFirstNameContains(?string $firstNameContains = null): self
    {
        // validation for constraint: string
        if (!is_null($firstNameContains) && !is_string($firstNameContains)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstNameContains, true), gettype($firstNameContains)), __LINE__);
        }
        if (is_null($firstNameContains) || (is_array($firstNameContains) && empty($firstNameContains))) {
            unset($this->FirstNameContains);
        } else {
            $this->FirstNameContains = $firstNameContains;
        }
        
        return $this;
    }
    /**
     * Get IsFirstNameSigned value
     * @return bool|null
     */
    public function getIsFirstNameSigned(): ?bool
    {
        return $this->IsFirstNameSigned;
    }
    /**
     * Set IsFirstNameSigned value
     * @param bool $isFirstNameSigned
     * @return \StructType\EmployeesFilter
     */
    public function setIsFirstNameSigned(?bool $isFirstNameSigned = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFirstNameSigned) && !is_bool($isFirstNameSigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFirstNameSigned, true), gettype($isFirstNameSigned)), __LINE__);
        }
        $this->IsFirstNameSigned = $isFirstNameSigned;
        
        return $this;
    }
    /**
     * Get IsFirstNameUnsigned value
     * @return bool|null
     */
    public function getIsFirstNameUnsigned(): ?bool
    {
        return $this->IsFirstNameUnsigned;
    }
    /**
     * Set IsFirstNameUnsigned value
     * @param bool $isFirstNameUnsigned
     * @return \StructType\EmployeesFilter
     */
    public function setIsFirstNameUnsigned(?bool $isFirstNameUnsigned = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFirstNameUnsigned) && !is_bool($isFirstNameUnsigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFirstNameUnsigned, true), gettype($isFirstNameUnsigned)), __LINE__);
        }
        $this->IsFirstNameUnsigned = $isFirstNameUnsigned;
        
        return $this;
    }
    /**
     * Get IsKeyCardTypeUnsigned value
     * @return bool|null
     */
    public function getIsKeyCardTypeUnsigned(): ?bool
    {
        return $this->IsKeyCardTypeUnsigned;
    }
    /**
     * Set IsKeyCardTypeUnsigned value
     * @param bool $isKeyCardTypeUnsigned
     * @return \StructType\EmployeesFilter
     */
    public function setIsKeyCardTypeUnsigned(?bool $isKeyCardTypeUnsigned = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isKeyCardTypeUnsigned) && !is_bool($isKeyCardTypeUnsigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isKeyCardTypeUnsigned, true), gettype($isKeyCardTypeUnsigned)), __LINE__);
        }
        $this->IsKeyCardTypeUnsigned = $isKeyCardTypeUnsigned;
        
        return $this;
    }
    /**
     * Get IsKeyNotValid value
     * @return bool|null
     */
    public function getIsKeyNotValid(): ?bool
    {
        return $this->IsKeyNotValid;
    }
    /**
     * Set IsKeyNotValid value
     * @param bool $isKeyNotValid
     * @return \StructType\EmployeesFilter
     */
    public function setIsKeyNotValid(?bool $isKeyNotValid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isKeyNotValid) && !is_bool($isKeyNotValid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isKeyNotValid, true), gettype($isKeyNotValid)), __LINE__);
        }
        $this->IsKeyNotValid = $isKeyNotValid;
        
        return $this;
    }
    /**
     * Get IsKeyNumber value
     * @return bool|null
     */
    public function getIsKeyNumber(): ?bool
    {
        return $this->IsKeyNumber;
    }
    /**
     * Set IsKeyNumber value
     * @param bool $isKeyNumber
     * @return \StructType\EmployeesFilter
     */
    public function setIsKeyNumber(?bool $isKeyNumber = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isKeyNumber) && !is_bool($isKeyNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isKeyNumber, true), gettype($isKeyNumber)), __LINE__);
        }
        $this->IsKeyNumber = $isKeyNumber;
        
        return $this;
    }
    /**
     * Get IsKeySiteCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsKeySiteCode(): ?bool
    {
        return isset($this->IsKeySiteCode) ? $this->IsKeySiteCode : null;
    }
    /**
     * Set IsKeySiteCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isKeySiteCode
     * @return \StructType\EmployeesFilter
     */
    public function setIsKeySiteCode(?bool $isKeySiteCode = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isKeySiteCode) && !is_bool($isKeySiteCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isKeySiteCode, true), gettype($isKeySiteCode)), __LINE__);
        }
        if (is_null($isKeySiteCode) || (is_array($isKeySiteCode) && empty($isKeySiteCode))) {
            unset($this->IsKeySiteCode);
        } else {
            $this->IsKeySiteCode = $isKeySiteCode;
        }
        
        return $this;
    }
    /**
     * Get IsKeyUnsigned value
     * @return bool|null
     */
    public function getIsKeyUnsigned(): ?bool
    {
        return $this->IsKeyUnsigned;
    }
    /**
     * Set IsKeyUnsigned value
     * @param bool $isKeyUnsigned
     * @return \StructType\EmployeesFilter
     */
    public function setIsKeyUnsigned(?bool $isKeyUnsigned = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isKeyUnsigned) && !is_bool($isKeyUnsigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isKeyUnsigned, true), gettype($isKeyUnsigned)), __LINE__);
        }
        $this->IsKeyUnsigned = $isKeyUnsigned;
        
        return $this;
    }
    /**
     * Get IsKeyValid value
     * @return bool|null
     */
    public function getIsKeyValid(): ?bool
    {
        return $this->IsKeyValid;
    }
    /**
     * Set IsKeyValid value
     * @param bool $isKeyValid
     * @return \StructType\EmployeesFilter
     */
    public function setIsKeyValid(?bool $isKeyValid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isKeyValid) && !is_bool($isKeyValid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isKeyValid, true), gettype($isKeyValid)), __LINE__);
        }
        $this->IsKeyValid = $isKeyValid;
        
        return $this;
    }
    /**
     * Get IsLastNameSigned value
     * @return bool|null
     */
    public function getIsLastNameSigned(): ?bool
    {
        return $this->IsLastNameSigned;
    }
    /**
     * Set IsLastNameSigned value
     * @param bool $isLastNameSigned
     * @return \StructType\EmployeesFilter
     */
    public function setIsLastNameSigned(?bool $isLastNameSigned = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLastNameSigned) && !is_bool($isLastNameSigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLastNameSigned, true), gettype($isLastNameSigned)), __LINE__);
        }
        $this->IsLastNameSigned = $isLastNameSigned;
        
        return $this;
    }
    /**
     * Get IsLastNameUnsigned value
     * @return bool|null
     */
    public function getIsLastNameUnsigned(): ?bool
    {
        return $this->IsLastNameUnsigned;
    }
    /**
     * Set IsLastNameUnsigned value
     * @param bool $isLastNameUnsigned
     * @return \StructType\EmployeesFilter
     */
    public function setIsLastNameUnsigned(?bool $isLastNameUnsigned = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLastNameUnsigned) && !is_bool($isLastNameUnsigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLastNameUnsigned, true), gettype($isLastNameUnsigned)), __LINE__);
        }
        $this->IsLastNameUnsigned = $isLastNameUnsigned;
        
        return $this;
    }
    /**
     * Get IsLock value
     * @return bool|null
     */
    public function getIsLock(): ?bool
    {
        return $this->IsLock;
    }
    /**
     * Set IsLock value
     * @param bool $isLock
     * @return \StructType\EmployeesFilter
     */
    public function setIsLock(?bool $isLock = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLock) && !is_bool($isLock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLock, true), gettype($isLock)), __LINE__);
        }
        $this->IsLock = $isLock;
        
        return $this;
    }
    /**
     * Get IsSecondNameSigned value
     * @return bool|null
     */
    public function getIsSecondNameSigned(): ?bool
    {
        return $this->IsSecondNameSigned;
    }
    /**
     * Set IsSecondNameSigned value
     * @param bool $isSecondNameSigned
     * @return \StructType\EmployeesFilter
     */
    public function setIsSecondNameSigned(?bool $isSecondNameSigned = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSecondNameSigned) && !is_bool($isSecondNameSigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSecondNameSigned, true), gettype($isSecondNameSigned)), __LINE__);
        }
        $this->IsSecondNameSigned = $isSecondNameSigned;
        
        return $this;
    }
    /**
     * Get IsSecondNameUnsigned value
     * @return bool|null
     */
    public function getIsSecondNameUnsigned(): ?bool
    {
        return $this->IsSecondNameUnsigned;
    }
    /**
     * Set IsSecondNameUnsigned value
     * @param bool $isSecondNameUnsigned
     * @return \StructType\EmployeesFilter
     */
    public function setIsSecondNameUnsigned(?bool $isSecondNameUnsigned = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSecondNameUnsigned) && !is_bool($isSecondNameUnsigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSecondNameUnsigned, true), gettype($isSecondNameUnsigned)), __LINE__);
        }
        $this->IsSecondNameUnsigned = $isSecondNameUnsigned;
        
        return $this;
    }
    /**
     * Get IsShowEmptyAccessLevls value
     * @return bool|null
     */
    public function getIsShowEmptyAccessLevls(): ?bool
    {
        return $this->IsShowEmptyAccessLevls;
    }
    /**
     * Set IsShowEmptyAccessLevls value
     * @param bool $isShowEmptyAccessLevls
     * @return \StructType\EmployeesFilter
     */
    public function setIsShowEmptyAccessLevls(?bool $isShowEmptyAccessLevls = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isShowEmptyAccessLevls) && !is_bool($isShowEmptyAccessLevls)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShowEmptyAccessLevls, true), gettype($isShowEmptyAccessLevls)), __LINE__);
        }
        $this->IsShowEmptyAccessLevls = $isShowEmptyAccessLevls;
        
        return $this;
    }
    /**
     * Get IsTabNumberSigned value
     * @return bool|null
     */
    public function getIsTabNumberSigned(): ?bool
    {
        return $this->IsTabNumberSigned;
    }
    /**
     * Set IsTabNumberSigned value
     * @param bool $isTabNumberSigned
     * @return \StructType\EmployeesFilter
     */
    public function setIsTabNumberSigned(?bool $isTabNumberSigned = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isTabNumberSigned) && !is_bool($isTabNumberSigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTabNumberSigned, true), gettype($isTabNumberSigned)), __LINE__);
        }
        $this->IsTabNumberSigned = $isTabNumberSigned;
        
        return $this;
    }
    /**
     * Get IsTabNumberUnsigned value
     * @return bool|null
     */
    public function getIsTabNumberUnsigned(): ?bool
    {
        return $this->IsTabNumberUnsigned;
    }
    /**
     * Set IsTabNumberUnsigned value
     * @param bool $isTabNumberUnsigned
     * @return \StructType\EmployeesFilter
     */
    public function setIsTabNumberUnsigned(?bool $isTabNumberUnsigned = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isTabNumberUnsigned) && !is_bool($isTabNumberUnsigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTabNumberUnsigned, true), gettype($isTabNumberUnsigned)), __LINE__);
        }
        $this->IsTabNumberUnsigned = $isTabNumberUnsigned;
        
        return $this;
    }
    /**
     * Get IsUnlock value
     * @return bool|null
     */
    public function getIsUnlock(): ?bool
    {
        return $this->IsUnlock;
    }
    /**
     * Set IsUnlock value
     * @param bool $isUnlock
     * @return \StructType\EmployeesFilter
     */
    public function setIsUnlock(?bool $isUnlock = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isUnlock) && !is_bool($isUnlock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isUnlock, true), gettype($isUnlock)), __LINE__);
        }
        $this->IsUnlock = $isUnlock;
        
        return $this;
    }
    /**
     * Get KeyAfterSiteCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getKeyAfterSiteCode(): ?int
    {
        return isset($this->KeyAfterSiteCode) ? $this->KeyAfterSiteCode : null;
    }
    /**
     * Set KeyAfterSiteCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $keyAfterSiteCode
     * @return \StructType\EmployeesFilter
     */
    public function setKeyAfterSiteCode(?int $keyAfterSiteCode = null): self
    {
        // validation for constraint: int
        if (!is_null($keyAfterSiteCode) && !(is_int($keyAfterSiteCode) || ctype_digit($keyAfterSiteCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($keyAfterSiteCode, true), gettype($keyAfterSiteCode)), __LINE__);
        }
        if (is_null($keyAfterSiteCode) || (is_array($keyAfterSiteCode) && empty($keyAfterSiteCode))) {
            unset($this->KeyAfterSiteCode);
        } else {
            $this->KeyAfterSiteCode = $keyAfterSiteCode;
        }
        
        return $this;
    }
    /**
     * Get KeyCommentContains value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getKeyCommentContains(): ?string
    {
        return isset($this->KeyCommentContains) ? $this->KeyCommentContains : null;
    }
    /**
     * Set KeyCommentContains value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $keyCommentContains
     * @return \StructType\EmployeesFilter
     */
    public function setKeyCommentContains(?string $keyCommentContains = null): self
    {
        // validation for constraint: string
        if (!is_null($keyCommentContains) && !is_string($keyCommentContains)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($keyCommentContains, true), gettype($keyCommentContains)), __LINE__);
        }
        if (is_null($keyCommentContains) || (is_array($keyCommentContains) && empty($keyCommentContains))) {
            unset($this->KeyCommentContains);
        } else {
            $this->KeyCommentContains = $keyCommentContains;
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
     * @return \StructType\EmployeesFilter
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
     * Get KeySiteCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getKeySiteCode(): ?int
    {
        return isset($this->KeySiteCode) ? $this->KeySiteCode : null;
    }
    /**
     * Set KeySiteCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $keySiteCode
     * @return \StructType\EmployeesFilter
     */
    public function setKeySiteCode(?int $keySiteCode = null): self
    {
        // validation for constraint: int
        if (!is_null($keySiteCode) && !(is_int($keySiteCode) || ctype_digit($keySiteCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($keySiteCode, true), gettype($keySiteCode)), __LINE__);
        }
        if (is_null($keySiteCode) || (is_array($keySiteCode) && empty($keySiteCode))) {
            unset($this->KeySiteCode);
        } else {
            $this->KeySiteCode = $keySiteCode;
        }
        
        return $this;
    }
    /**
     * Get LastNameContains value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastNameContains(): ?string
    {
        return isset($this->LastNameContains) ? $this->LastNameContains : null;
    }
    /**
     * Set LastNameContains value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastNameContains
     * @return \StructType\EmployeesFilter
     */
    public function setLastNameContains(?string $lastNameContains = null): self
    {
        // validation for constraint: string
        if (!is_null($lastNameContains) && !is_string($lastNameContains)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastNameContains, true), gettype($lastNameContains)), __LINE__);
        }
        if (is_null($lastNameContains) || (is_array($lastNameContains) && empty($lastNameContains))) {
            unset($this->LastNameContains);
        } else {
            $this->LastNameContains = $lastNameContains;
        }
        
        return $this;
    }
    /**
     * Get SecondNameContains value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSecondNameContains(): ?string
    {
        return isset($this->SecondNameContains) ? $this->SecondNameContains : null;
    }
    /**
     * Set SecondNameContains value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $secondNameContains
     * @return \StructType\EmployeesFilter
     */
    public function setSecondNameContains(?string $secondNameContains = null): self
    {
        // validation for constraint: string
        if (!is_null($secondNameContains) && !is_string($secondNameContains)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondNameContains, true), gettype($secondNameContains)), __LINE__);
        }
        if (is_null($secondNameContains) || (is_array($secondNameContains) && empty($secondNameContains))) {
            unset($this->SecondNameContains);
        } else {
            $this->SecondNameContains = $secondNameContains;
        }
        
        return $this;
    }
    /**
     * Get TabNumberContains value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTabNumberContains(): ?string
    {
        return isset($this->TabNumberContains) ? $this->TabNumberContains : null;
    }
    /**
     * Set TabNumberContains value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tabNumberContains
     * @return \StructType\EmployeesFilter
     */
    public function setTabNumberContains(?string $tabNumberContains = null): self
    {
        // validation for constraint: string
        if (!is_null($tabNumberContains) && !is_string($tabNumberContains)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tabNumberContains, true), gettype($tabNumberContains)), __LINE__);
        }
        if (is_null($tabNumberContains) || (is_array($tabNumberContains) && empty($tabNumberContains))) {
            unset($this->TabNumberContains);
        } else {
            $this->TabNumberContains = $tabNumberContains;
        }
        
        return $this;
    }
    /**
     * Get TabNumberEquals value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTabNumberEquals(): ?string
    {
        return isset($this->TabNumberEquals) ? $this->TabNumberEquals : null;
    }
    /**
     * Set TabNumberEquals value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tabNumberEquals
     * @return \StructType\EmployeesFilter
     */
    public function setTabNumberEquals(?string $tabNumberEquals = null): self
    {
        // validation for constraint: string
        if (!is_null($tabNumberEquals) && !is_string($tabNumberEquals)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tabNumberEquals, true), gettype($tabNumberEquals)), __LINE__);
        }
        if (is_null($tabNumberEquals) || (is_array($tabNumberEquals) && empty($tabNumberEquals))) {
            unset($this->TabNumberEquals);
        } else {
            $this->TabNumberEquals = $tabNumberEquals;
        }
        
        return $this;
    }
}
