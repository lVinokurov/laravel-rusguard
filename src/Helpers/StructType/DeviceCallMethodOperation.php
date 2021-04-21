<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeviceCallMethodOperation StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DeviceCallMethodOperation
 * @subpackage Structs
 */
class DeviceCallMethodOperation extends DeviceOperation
{
    /**
     * The LogMessageId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int|null
     */
    protected ?int $LogMessageId = null;
    /**
     * The MethodArgs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring|null
     */
    protected ?\ArrayType\ArrayOfstring $MethodArgs = null;
    /**
     * The MethodName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $MethodName = null;
    /**
     * Constructor method for DeviceCallMethodOperation
     * @uses DeviceCallMethodOperation::setLogMessageId()
     * @uses DeviceCallMethodOperation::setMethodArgs()
     * @uses DeviceCallMethodOperation::setMethodName()
     * @param int $logMessageId
     * @param \ArrayType\ArrayOfstring $methodArgs
     * @param string $methodName
     */
    public function __construct(?int $logMessageId = null, ?\ArrayType\ArrayOfstring $methodArgs = null, ?string $methodName = null)
    {
        $this
            ->setLogMessageId($logMessageId)
            ->setMethodArgs($methodArgs)
            ->setMethodName($methodName);
    }
    /**
     * Get LogMessageId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getLogMessageId(): ?int
    {
        return isset($this->LogMessageId) ? $this->LogMessageId : null;
    }
    /**
     * Set LogMessageId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $logMessageId
     * @return \StructType\DeviceCallMethodOperation
     */
    public function setLogMessageId(?int $logMessageId = null): self
    {
        // validation for constraint: int
        if (!is_null($logMessageId) && !(is_int($logMessageId) || ctype_digit($logMessageId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($logMessageId, true), gettype($logMessageId)), __LINE__);
        }
        if (is_null($logMessageId) || (is_array($logMessageId) && empty($logMessageId))) {
            unset($this->LogMessageId);
        } else {
            $this->LogMessageId = $logMessageId;
        }
        
        return $this;
    }
    /**
     * Get MethodArgs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getMethodArgs(): ?\ArrayType\ArrayOfstring
    {
        return isset($this->MethodArgs) ? $this->MethodArgs : null;
    }
    /**
     * Set MethodArgs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $methodArgs
     * @return \StructType\DeviceCallMethodOperation
     */
    public function setMethodArgs(?\ArrayType\ArrayOfstring $methodArgs = null): self
    {
        if (is_null($methodArgs) || (is_array($methodArgs) && empty($methodArgs))) {
            unset($this->MethodArgs);
        } else {
            $this->MethodArgs = $methodArgs;
        }
        
        return $this;
    }
    /**
     * Get MethodName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMethodName(): ?string
    {
        return isset($this->MethodName) ? $this->MethodName : null;
    }
    /**
     * Set MethodName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $methodName
     * @return \StructType\DeviceCallMethodOperation
     */
    public function setMethodName(?string $methodName = null): self
    {
        // validation for constraint: string
        if (!is_null($methodName) && !is_string($methodName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($methodName, true), gettype($methodName)), __LINE__);
        }
        if (is_null($methodName) || (is_array($methodName) && empty($methodName))) {
            unset($this->MethodName);
        } else {
            $this->MethodName = $methodName;
        }
        
        return $this;
    }
}
