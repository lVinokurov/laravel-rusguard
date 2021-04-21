<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindNotify StructType
 * @subpackage Structs
 */
class FindNotify extends AbstractStructBase
{
    /**
     * The command
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $command = null;
    /**
     * Constructor method for FindNotify
     * @uses FindNotify::setCommand()
     * @param string $command
     */
    public function __construct(?string $command = null)
    {
        $this
            ->setCommand($command);
    }
    /**
     * Get command value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCommand(): ?string
    {
        return isset($this->command) ? $this->command : null;
    }
    /**
     * Set command value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $command
     * @return \StructType\FindNotify
     */
    public function setCommand(?string $command = null): self
    {
        // validation for constraint: string
        if (!is_null($command) && !is_string($command)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($command, true), gettype($command)), __LINE__);
        }
        if (is_null($command) || (is_array($command) && empty($command))) {
            unset($this->command);
        } else {
            $this->command = $command;
        }
        
        return $this;
    }
}
