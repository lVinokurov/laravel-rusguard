<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailDistributionAddressSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmailDistributionAddressSaveData
 * @subpackage Structs
 */
class EmailDistributionAddressSaveData extends AbstractStructBase
{
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The IsAuthenticationRequired
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsAuthenticationRequired = null;
    /**
     * The IsSPARequired
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsSPARequired = null;
    /**
     * The Login
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Login = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Password = null;
    /**
     * The SenderEmailAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SenderEmailAddress = null;
    /**
     * The SenderName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SenderName = null;
    /**
     * The SmtpEncryptionType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SmtpEncryptionType = null;
    /**
     * The SmtpServerAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $SmtpServerAddress = null;
    /**
     * The SmtpServerPort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $SmtpServerPort = null;
    /**
     * Constructor method for EmailDistributionAddressSaveData
     * @uses EmailDistributionAddressSaveData::setDescription()
     * @uses EmailDistributionAddressSaveData::setIsAuthenticationRequired()
     * @uses EmailDistributionAddressSaveData::setIsSPARequired()
     * @uses EmailDistributionAddressSaveData::setLogin()
     * @uses EmailDistributionAddressSaveData::setName()
     * @uses EmailDistributionAddressSaveData::setPassword()
     * @uses EmailDistributionAddressSaveData::setSenderEmailAddress()
     * @uses EmailDistributionAddressSaveData::setSenderName()
     * @uses EmailDistributionAddressSaveData::setSmtpEncryptionType()
     * @uses EmailDistributionAddressSaveData::setSmtpServerAddress()
     * @uses EmailDistributionAddressSaveData::setSmtpServerPort()
     * @param string $description
     * @param bool $isAuthenticationRequired
     * @param bool $isSPARequired
     * @param string $login
     * @param string $name
     * @param string $password
     * @param string $senderEmailAddress
     * @param string $senderName
     * @param string $smtpEncryptionType
     * @param string $smtpServerAddress
     * @param int $smtpServerPort
     */
    public function __construct(?string $description = null, ?bool $isAuthenticationRequired = null, ?bool $isSPARequired = null, ?string $login = null, ?string $name = null, ?string $password = null, ?string $senderEmailAddress = null, ?string $senderName = null, ?string $smtpEncryptionType = null, ?string $smtpServerAddress = null, ?int $smtpServerPort = null)
    {
        $this
            ->setDescription($description)
            ->setIsAuthenticationRequired($isAuthenticationRequired)
            ->setIsSPARequired($isSPARequired)
            ->setLogin($login)
            ->setName($name)
            ->setPassword($password)
            ->setSenderEmailAddress($senderEmailAddress)
            ->setSenderName($senderName)
            ->setSmtpEncryptionType($smtpEncryptionType)
            ->setSmtpServerAddress($smtpServerAddress)
            ->setSmtpServerPort($smtpServerPort);
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
     * @return \StructType\EmailDistributionAddressSaveData
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
     * Get IsAuthenticationRequired value
     * @return bool|null
     */
    public function getIsAuthenticationRequired(): ?bool
    {
        return $this->IsAuthenticationRequired;
    }
    /**
     * Set IsAuthenticationRequired value
     * @param bool $isAuthenticationRequired
     * @return \StructType\EmailDistributionAddressSaveData
     */
    public function setIsAuthenticationRequired(?bool $isAuthenticationRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAuthenticationRequired) && !is_bool($isAuthenticationRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAuthenticationRequired, true), gettype($isAuthenticationRequired)), __LINE__);
        }
        $this->IsAuthenticationRequired = $isAuthenticationRequired;
        
        return $this;
    }
    /**
     * Get IsSPARequired value
     * @return bool|null
     */
    public function getIsSPARequired(): ?bool
    {
        return $this->IsSPARequired;
    }
    /**
     * Set IsSPARequired value
     * @param bool $isSPARequired
     * @return \StructType\EmailDistributionAddressSaveData
     */
    public function setIsSPARequired(?bool $isSPARequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSPARequired) && !is_bool($isSPARequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSPARequired, true), gettype($isSPARequired)), __LINE__);
        }
        $this->IsSPARequired = $isSPARequired;
        
        return $this;
    }
    /**
     * Get Login value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLogin(): ?string
    {
        return isset($this->Login) ? $this->Login : null;
    }
    /**
     * Set Login value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $login
     * @return \StructType\EmailDistributionAddressSaveData
     */
    public function setLogin(?string $login = null): self
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($login, true), gettype($login)), __LINE__);
        }
        if (is_null($login) || (is_array($login) && empty($login))) {
            unset($this->Login);
        } else {
            $this->Login = $login;
        }
        
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
     * @return \StructType\EmailDistributionAddressSaveData
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
    /**
     * Get Password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return isset($this->Password) ? $this->Password : null;
    }
    /**
     * Set Password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \StructType\EmailDistributionAddressSaveData
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->Password);
        } else {
            $this->Password = $password;
        }
        
        return $this;
    }
    /**
     * Get SenderEmailAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSenderEmailAddress(): ?string
    {
        return isset($this->SenderEmailAddress) ? $this->SenderEmailAddress : null;
    }
    /**
     * Set SenderEmailAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $senderEmailAddress
     * @return \StructType\EmailDistributionAddressSaveData
     */
    public function setSenderEmailAddress(?string $senderEmailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($senderEmailAddress) && !is_string($senderEmailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderEmailAddress, true), gettype($senderEmailAddress)), __LINE__);
        }
        if (is_null($senderEmailAddress) || (is_array($senderEmailAddress) && empty($senderEmailAddress))) {
            unset($this->SenderEmailAddress);
        } else {
            $this->SenderEmailAddress = $senderEmailAddress;
        }
        
        return $this;
    }
    /**
     * Get SenderName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSenderName(): ?string
    {
        return isset($this->SenderName) ? $this->SenderName : null;
    }
    /**
     * Set SenderName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $senderName
     * @return \StructType\EmailDistributionAddressSaveData
     */
    public function setSenderName(?string $senderName = null): self
    {
        // validation for constraint: string
        if (!is_null($senderName) && !is_string($senderName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderName, true), gettype($senderName)), __LINE__);
        }
        if (is_null($senderName) || (is_array($senderName) && empty($senderName))) {
            unset($this->SenderName);
        } else {
            $this->SenderName = $senderName;
        }
        
        return $this;
    }
    /**
     * Get SmtpEncryptionType value
     * @return string|null
     */
    public function getSmtpEncryptionType(): ?string
    {
        return $this->SmtpEncryptionType;
    }
    /**
     * Set SmtpEncryptionType value
     * @uses \EnumType\SmtpEncryptionType::valueIsValid()
     * @uses \EnumType\SmtpEncryptionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $smtpEncryptionType
     * @return \StructType\EmailDistributionAddressSaveData
     */
    public function setSmtpEncryptionType(?string $smtpEncryptionType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\SmtpEncryptionType::valueIsValid($smtpEncryptionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SmtpEncryptionType', is_array($smtpEncryptionType) ? implode(', ', $smtpEncryptionType) : var_export($smtpEncryptionType, true), implode(', ', \EnumType\SmtpEncryptionType::getValidValues())), __LINE__);
        }
        $this->SmtpEncryptionType = $smtpEncryptionType;
        
        return $this;
    }
    /**
     * Get SmtpServerAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSmtpServerAddress(): ?string
    {
        return isset($this->SmtpServerAddress) ? $this->SmtpServerAddress : null;
    }
    /**
     * Set SmtpServerAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $smtpServerAddress
     * @return \StructType\EmailDistributionAddressSaveData
     */
    public function setSmtpServerAddress(?string $smtpServerAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($smtpServerAddress) && !is_string($smtpServerAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smtpServerAddress, true), gettype($smtpServerAddress)), __LINE__);
        }
        if (is_null($smtpServerAddress) || (is_array($smtpServerAddress) && empty($smtpServerAddress))) {
            unset($this->SmtpServerAddress);
        } else {
            $this->SmtpServerAddress = $smtpServerAddress;
        }
        
        return $this;
    }
    /**
     * Get SmtpServerPort value
     * @return int|null
     */
    public function getSmtpServerPort(): ?int
    {
        return $this->SmtpServerPort;
    }
    /**
     * Set SmtpServerPort value
     * @param int $smtpServerPort
     * @return \StructType\EmailDistributionAddressSaveData
     */
    public function setSmtpServerPort(?int $smtpServerPort = null): self
    {
        // validation for constraint: int
        if (!is_null($smtpServerPort) && !(is_int($smtpServerPort) || ctype_digit($smtpServerPort))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($smtpServerPort, true), gettype($smtpServerPort)), __LINE__);
        }
        $this->SmtpServerPort = $smtpServerPort;
        
        return $this;
    }
}
