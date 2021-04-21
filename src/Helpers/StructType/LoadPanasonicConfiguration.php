<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoadPanasonicConfiguration StructType
 * @subpackage Structs
 */
class LoadPanasonicConfiguration extends AbstractStructBase
{
    /**
     * The deviceServerId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $deviceServerId = null;
    /**
     * The ip
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $ip = null;
    /**
     * The login
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $login = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The httpPort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $httpPort = null;
    /**
     * The devType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $devType = null;
    /**
     * Constructor method for LoadPanasonicConfiguration
     * @uses LoadPanasonicConfiguration::setDeviceServerId()
     * @uses LoadPanasonicConfiguration::setIp()
     * @uses LoadPanasonicConfiguration::setLogin()
     * @uses LoadPanasonicConfiguration::setPassword()
     * @uses LoadPanasonicConfiguration::setHttpPort()
     * @uses LoadPanasonicConfiguration::setDevType()
     * @param string $deviceServerId
     * @param string $ip
     * @param string $login
     * @param string $password
     * @param int $httpPort
     * @param int $devType
     */
    public function __construct(?string $deviceServerId = null, ?string $ip = null, ?string $login = null, ?string $password = null, ?int $httpPort = null, ?int $devType = null)
    {
        $this
            ->setDeviceServerId($deviceServerId)
            ->setIp($ip)
            ->setLogin($login)
            ->setPassword($password)
            ->setHttpPort($httpPort)
            ->setDevType($devType);
    }
    /**
     * Get deviceServerId value
     * @return string|null
     */
    public function getDeviceServerId(): ?string
    {
        return $this->deviceServerId;
    }
    /**
     * Set deviceServerId value
     * @param string $deviceServerId
     * @return \StructType\LoadPanasonicConfiguration
     */
    public function setDeviceServerId(?string $deviceServerId = null): self
    {
        // validation for constraint: string
        if (!is_null($deviceServerId) && !is_string($deviceServerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deviceServerId, true), gettype($deviceServerId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($deviceServerId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $deviceServerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($deviceServerId, true)), __LINE__);
        }
        $this->deviceServerId = $deviceServerId;
        
        return $this;
    }
    /**
     * Get ip value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIp(): ?string
    {
        return isset($this->ip) ? $this->ip : null;
    }
    /**
     * Set ip value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ip
     * @return \StructType\LoadPanasonicConfiguration
     */
    public function setIp(?string $ip = null): self
    {
        // validation for constraint: string
        if (!is_null($ip) && !is_string($ip)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ip, true), gettype($ip)), __LINE__);
        }
        if (is_null($ip) || (is_array($ip) && empty($ip))) {
            unset($this->ip);
        } else {
            $this->ip = $ip;
        }
        
        return $this;
    }
    /**
     * Get login value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLogin(): ?string
    {
        return isset($this->login) ? $this->login : null;
    }
    /**
     * Set login value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $login
     * @return \StructType\LoadPanasonicConfiguration
     */
    public function setLogin(?string $login = null): self
    {
        // validation for constraint: string
        if (!is_null($login) && !is_string($login)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($login, true), gettype($login)), __LINE__);
        }
        if (is_null($login) || (is_array($login) && empty($login))) {
            unset($this->login);
        } else {
            $this->login = $login;
        }
        
        return $this;
    }
    /**
     * Get password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return isset($this->password) ? $this->password : null;
    }
    /**
     * Set password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \StructType\LoadPanasonicConfiguration
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->password);
        } else {
            $this->password = $password;
        }
        
        return $this;
    }
    /**
     * Get httpPort value
     * @return int|null
     */
    public function getHttpPort(): ?int
    {
        return $this->httpPort;
    }
    /**
     * Set httpPort value
     * @param int $httpPort
     * @return \StructType\LoadPanasonicConfiguration
     */
    public function setHttpPort(?int $httpPort = null): self
    {
        // validation for constraint: int
        if (!is_null($httpPort) && !(is_int($httpPort) || ctype_digit($httpPort))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($httpPort, true), gettype($httpPort)), __LINE__);
        }
        $this->httpPort = $httpPort;
        
        return $this;
    }
    /**
     * Get devType value
     * @return int|null
     */
    public function getDevType(): ?int
    {
        return $this->devType;
    }
    /**
     * Set devType value
     * @param int $devType
     * @return \StructType\LoadPanasonicConfiguration
     */
    public function setDevType(?int $devType = null): self
    {
        // validation for constraint: int
        if (!is_null($devType) && !(is_int($devType) || ctype_digit($devType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($devType, true), gettype($devType)), __LINE__);
        }
        $this->devType = $devType;
        
        return $this;
    }
}
