<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeesOfReactionAction StructType
 * @subpackage Structs
 */
class GetEmployeesOfReactionAction extends AbstractStructBase
{
    /**
     * The actionId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $actionId = null;
    /**
     * Constructor method for GetEmployeesOfReactionAction
     * @uses GetEmployeesOfReactionAction::setActionId()
     * @param string $actionId
     */
    public function __construct(?string $actionId = null)
    {
        $this
            ->setActionId($actionId);
    }
    /**
     * Get actionId value
     * @return string|null
     */
    public function getActionId(): ?string
    {
        return $this->actionId;
    }
    /**
     * Set actionId value
     * @param string $actionId
     * @return \StructType\GetEmployeesOfReactionAction
     */
    public function setActionId(?string $actionId = null): self
    {
        // validation for constraint: string
        if (!is_null($actionId) && !is_string($actionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionId, true), gettype($actionId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($actionId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $actionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($actionId, true)), __LINE__);
        }
        $this->actionId = $actionId;
        
        return $this;
    }
}
