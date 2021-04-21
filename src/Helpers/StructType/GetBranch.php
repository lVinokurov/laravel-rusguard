<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBranch StructType
 * @subpackage Structs
 */
class GetBranch extends AbstractStructBase
{
    /**
     * The _id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $_id = null;
    /**
     * Constructor method for GetBranch
     * @uses GetBranch::set_id()
     * @param string $_id
     */
    public function __construct(?string $_id = null)
    {
        $this
            ->set_id($_id);
    }
    /**
     * Get _id value
     * @return string|null
     */
    public function get_id(): ?string
    {
        return $this->_id;
    }
    /**
     * Set _id value
     * @param string $_id
     * @return \StructType\GetBranch
     */
    public function set_id(?string $_id = null): self
    {
        // validation for constraint: string
        if (!is_null($_id) && !is_string($_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_id, true), gettype($_id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($_id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($_id, true)), __LINE__);
        }
        $this->_id = $_id;
        
        return $this;
    }
}
