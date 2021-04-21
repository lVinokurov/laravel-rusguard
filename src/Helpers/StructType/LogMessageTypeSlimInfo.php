<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LogMessageTypeSlimInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LogMessageTypeSlimInfo
 * @subpackage Structs
 */
class LogMessageTypeSlimInfo extends AbstractStructBase
{
    /**
     * The LogMesssageType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LogMesssageType = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The OrderNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $OrderNumber = null;
    /**
     * The Publish
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $Publish = null;
    /**
     * Constructor method for LogMessageTypeSlimInfo
     * @uses LogMessageTypeSlimInfo::setLogMesssageType()
     * @uses LogMessageTypeSlimInfo::setName()
     * @uses LogMessageTypeSlimInfo::setOrderNumber()
     * @uses LogMessageTypeSlimInfo::setPublish()
     * @param string $logMesssageType
     * @param string $name
     * @param int $orderNumber
     * @param bool $publish
     */
    public function __construct(?string $logMesssageType = null, ?string $name = null, ?int $orderNumber = null, ?bool $publish = null)
    {
        $this
            ->setLogMesssageType($logMesssageType)
            ->setName($name)
            ->setOrderNumber($orderNumber)
            ->setPublish($publish);
    }
    /**
     * Get LogMesssageType value
     * @return string|null
     */
    public function getLogMesssageType(): ?string
    {
        return $this->LogMesssageType;
    }
    /**
     * Set LogMesssageType value
     * @uses \EnumType\LogMsgType::valueIsValid()
     * @uses \EnumType\LogMsgType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $logMesssageType
     * @return \StructType\LogMessageTypeSlimInfo
     */
    public function setLogMesssageType(?string $logMesssageType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\LogMsgType::valueIsValid($logMesssageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\LogMsgType', is_array($logMesssageType) ? implode(', ', $logMesssageType) : var_export($logMesssageType, true), implode(', ', \EnumType\LogMsgType::getValidValues())), __LINE__);
        }
        $this->LogMesssageType = $logMesssageType;
        
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
     * @return \StructType\LogMessageTypeSlimInfo
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
     * Get OrderNumber value
     * @return int|null
     */
    public function getOrderNumber(): ?int
    {
        return $this->OrderNumber;
    }
    /**
     * Set OrderNumber value
     * @param int $orderNumber
     * @return \StructType\LogMessageTypeSlimInfo
     */
    public function setOrderNumber(?int $orderNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNumber) && !(is_int($orderNumber) || ctype_digit($orderNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNumber, true), gettype($orderNumber)), __LINE__);
        }
        $this->OrderNumber = $orderNumber;
        
        return $this;
    }
    /**
     * Get Publish value
     * @return bool|null
     */
    public function getPublish(): ?bool
    {
        return $this->Publish;
    }
    /**
     * Set Publish value
     * @param bool $publish
     * @return \StructType\LogMessageTypeSlimInfo
     */
    public function setPublish(?bool $publish = null): self
    {
        // validation for constraint: boolean
        if (!is_null($publish) && !is_bool($publish)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($publish, true), gettype($publish)), __LINE__);
        }
        $this->Publish = $publish;
        
        return $this;
    }
}
