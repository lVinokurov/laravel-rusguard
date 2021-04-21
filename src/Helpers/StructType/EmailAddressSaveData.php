<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailAddressSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmailAddressSaveData
 * @subpackage Structs
 */
class EmailAddressSaveData extends AbstractStructBase
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
     * The Email
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The EmailOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $EmailOrder = null;
    /**
     * Constructor method for EmailAddressSaveData
     * @uses EmailAddressSaveData::setDescription()
     * @uses EmailAddressSaveData::setEmail()
     * @uses EmailAddressSaveData::setEmailOrder()
     * @param string $description
     * @param string $email
     * @param int $emailOrder
     */
    public function __construct(?string $description = null, ?string $email = null, ?int $emailOrder = null)
    {
        $this
            ->setDescription($description)
            ->setEmail($email)
            ->setEmailOrder($emailOrder);
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
     * @return \StructType\EmailAddressSaveData
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
     * @return \StructType\EmailAddressSaveData
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
     * Get EmailOrder value
     * @return int|null
     */
    public function getEmailOrder(): ?int
    {
        return $this->EmailOrder;
    }
    /**
     * Set EmailOrder value
     * @param int $emailOrder
     * @return \StructType\EmailAddressSaveData
     */
    public function setEmailOrder(?int $emailOrder = null): self
    {
        // validation for constraint: int
        if (!is_null($emailOrder) && !(is_int($emailOrder) || ctype_digit($emailOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($emailOrder, true), gettype($emailOrder)), __LINE__);
        }
        $this->EmailOrder = $emailOrder;
        
        return $this;
    }
}
