<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddUser StructType
 * @subpackage Structs
 */
class AddUser extends AbstractStructBase
{
    /**
     * The login
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $login = null;
    /**
     * The passsword
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $passsword = null;
    /**
     * The fullName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $fullName = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for AddUser
     * @uses AddUser::setLogin()
     * @uses AddUser::setPasssword()
     * @uses AddUser::setFullName()
     * @uses AddUser::setDescription()
     * @param string $login
     * @param string $passsword
     * @param string $fullName
     * @param string $description
     */
    public function __construct(?string $login = null, ?string $passsword = null, ?string $fullName = null, ?string $description = null)
    {
        $this
            ->setLogin($login)
            ->setPasssword($passsword)
            ->setFullName($fullName)
            ->setDescription($description);
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
     * @return \StructType\AddUser
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
     * Get passsword value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPasssword(): ?string
    {
        return isset($this->passsword) ? $this->passsword : null;
    }
    /**
     * Set passsword value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $passsword
     * @return \StructType\AddUser
     */
    public function setPasssword(?string $passsword = null): self
    {
        // validation for constraint: string
        if (!is_null($passsword) && !is_string($passsword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passsword, true), gettype($passsword)), __LINE__);
        }
        if (is_null($passsword) || (is_array($passsword) && empty($passsword))) {
            unset($this->passsword);
        } else {
            $this->passsword = $passsword;
        }
        
        return $this;
    }
    /**
     * Get fullName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFullName(): ?string
    {
        return isset($this->fullName) ? $this->fullName : null;
    }
    /**
     * Set fullName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fullName
     * @return \StructType\AddUser
     */
    public function setFullName(?string $fullName = null): self
    {
        // validation for constraint: string
        if (!is_null($fullName) && !is_string($fullName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fullName, true), gettype($fullName)), __LINE__);
        }
        if (is_null($fullName) || (is_array($fullName) && empty($fullName))) {
            unset($this->fullName);
        } else {
            $this->fullName = $fullName;
        }
        
        return $this;
    }
    /**
     * Get description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return isset($this->description) ? $this->description : null;
    }
    /**
     * Set description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \StructType\AddUser
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->description);
        } else {
            $this->description = $description;
        }
        
        return $this;
    }
}
