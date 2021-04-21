<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportingServicesData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReportingServicesData
 * @subpackage Structs
 */
class ReportingServicesData extends AbstractStructBase
{
    /**
     * The Login
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Login = null;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Password = null;
    /**
     * The Url
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Url = null;
    /**
     * Constructor method for ReportingServicesData
     * @uses ReportingServicesData::setLogin()
     * @uses ReportingServicesData::setPassword()
     * @uses ReportingServicesData::setUrl()
     * @param string $login
     * @param string $password
     * @param string $url
     */
    public function __construct(?string $login = null, ?string $password = null, ?string $url = null)
    {
        $this
            ->setLogin($login)
            ->setPassword($password)
            ->setUrl($url);
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
     * @return \StructType\ReportingServicesData
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
     * @return \StructType\ReportingServicesData
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
     * Get Url value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return isset($this->Url) ? $this->Url : null;
    }
    /**
     * Set Url value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $url
     * @return \StructType\ReportingServicesData
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        if (is_null($url) || (is_array($url) && empty($url))) {
            unset($this->Url);
        } else {
            $this->Url = $url;
        }
        
        return $this;
    }
}
