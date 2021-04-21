<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUserPassEditorResponse StructType
 * @subpackage Structs
 */
class SetUserPassEditorResponse extends AbstractStructBase
{
    /**
     * The SetUserPassEditorResult
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $SetUserPassEditorResult = null;
    /**
     * Constructor method for SetUserPassEditorResponse
     * @uses SetUserPassEditorResponse::setSetUserPassEditorResult()
     * @param string $setUserPassEditorResult
     */
    public function __construct(?string $setUserPassEditorResult = null)
    {
        $this
            ->setSetUserPassEditorResult($setUserPassEditorResult);
    }
    /**
     * Get SetUserPassEditorResult value
     * @return string|null
     */
    public function getSetUserPassEditorResult(): ?string
    {
        return $this->SetUserPassEditorResult;
    }
    /**
     * Set SetUserPassEditorResult value
     * @param string $setUserPassEditorResult
     * @return \StructType\SetUserPassEditorResponse
     */
    public function setSetUserPassEditorResult(?string $setUserPassEditorResult = null): self
    {
        // validation for constraint: string
        if (!is_null($setUserPassEditorResult) && !is_string($setUserPassEditorResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($setUserPassEditorResult, true), gettype($setUserPassEditorResult)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($setUserPassEditorResult) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $setUserPassEditorResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($setUserPassEditorResult, true)), __LINE__);
        }
        $this->SetUserPassEditorResult = $setUserPassEditorResult;
        
        return $this;
    }
}
