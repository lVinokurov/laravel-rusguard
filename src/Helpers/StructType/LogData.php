<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LogData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LogData
 * @subpackage Structs
 */
class LogData extends AbstractStructBase
{
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Count = null;
    /**
     * The Messages
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLogMessage|null
     */
    protected ?\ArrayType\ArrayOfLogMessage $Messages = null;
    /**
     * Constructor method for LogData
     * @uses LogData::setCount()
     * @uses LogData::setMessages()
     * @param int $count
     * @param \ArrayType\ArrayOfLogMessage $messages
     */
    public function __construct(?int $count = null, ?\ArrayType\ArrayOfLogMessage $messages = null)
    {
        $this
            ->setCount($count)
            ->setMessages($messages);
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \StructType\LogData
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
        return $this;
    }
    /**
     * Get Messages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLogMessage|null
     */
    public function getMessages(): ?\ArrayType\ArrayOfLogMessage
    {
        return isset($this->Messages) ? $this->Messages : null;
    }
    /**
     * Set Messages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLogMessage $messages
     * @return \StructType\LogData
     */
    public function setMessages(?\ArrayType\ArrayOfLogMessage $messages = null): self
    {
        if (is_null($messages) || (is_array($messages) && empty($messages))) {
            unset($this->Messages);
        } else {
            $this->Messages = $messages;
        }
        
        return $this;
    }
}
