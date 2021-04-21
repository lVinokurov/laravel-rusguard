<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Process StructType
 * @subpackage Structs
 */
class Process extends AbstractStructBase
{
    /**
     * The operation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Operation|null
     */
    protected ?\StructType\Operation $operation = null;
    /**
     * The connectionId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $connectionId = null;
    /**
     * Constructor method for Process
     * @uses Process::setOperation()
     * @uses Process::setConnectionId()
     * @param \StructType\Operation $operation
     * @param string $connectionId
     */
    public function __construct(?\StructType\Operation $operation = null, ?string $connectionId = null)
    {
        $this
            ->setOperation($operation)
            ->setConnectionId($connectionId);
    }
    /**
     * Get operation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Operation|null
     */
    public function getOperation(): ?\StructType\Operation
    {
        return isset($this->operation) ? $this->operation : null;
    }
    /**
     * Set operation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Operation $operation
     * @return \StructType\Process
     */
    public function setOperation(?\StructType\Operation $operation = null): self
    {
        if (is_null($operation) || (is_array($operation) && empty($operation))) {
            unset($this->operation);
        } else {
            $this->operation = $operation;
        }
        
        return $this;
    }
    /**
     * Get connectionId value
     * @return string|null
     */
    public function getConnectionId(): ?string
    {
        return $this->connectionId;
    }
    /**
     * Set connectionId value
     * @param string $connectionId
     * @return \StructType\Process
     */
    public function setConnectionId(?string $connectionId = null): self
    {
        // validation for constraint: string
        if (!is_null($connectionId) && !is_string($connectionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($connectionId, true), gettype($connectionId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($connectionId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $connectionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($connectionId, true)), __LINE__);
        }
        $this->connectionId = $connectionId;
        
        return $this;
    }
}
