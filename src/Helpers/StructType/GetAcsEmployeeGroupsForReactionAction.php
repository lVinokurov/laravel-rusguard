<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployeeGroupsForReactionAction StructType
 * @subpackage Structs
 */
class GetAcsEmployeeGroupsForReactionAction extends AbstractStructBase
{
    /**
     * The reactionActiond
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $reactionActiond = null;
    /**
     * Constructor method for GetAcsEmployeeGroupsForReactionAction
     * @uses GetAcsEmployeeGroupsForReactionAction::setReactionActiond()
     * @param string $reactionActiond
     */
    public function __construct(?string $reactionActiond = null)
    {
        $this
            ->setReactionActiond($reactionActiond);
    }
    /**
     * Get reactionActiond value
     * @return string|null
     */
    public function getReactionActiond(): ?string
    {
        return $this->reactionActiond;
    }
    /**
     * Set reactionActiond value
     * @param string $reactionActiond
     * @return \StructType\GetAcsEmployeeGroupsForReactionAction
     */
    public function setReactionActiond(?string $reactionActiond = null): self
    {
        // validation for constraint: string
        if (!is_null($reactionActiond) && !is_string($reactionActiond)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reactionActiond, true), gettype($reactionActiond)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($reactionActiond) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $reactionActiond)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($reactionActiond, true)), __LINE__);
        }
        $this->reactionActiond = $reactionActiond;
        
        return $this;
    }
}
