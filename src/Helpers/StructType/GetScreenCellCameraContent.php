<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetScreenCellCameraContent StructType
 * @subpackage Structs
 */
class GetScreenCellCameraContent extends AbstractStructBase
{
    /**
     * The cellId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $cellId = null;
    /**
     * Constructor method for GetScreenCellCameraContent
     * @uses GetScreenCellCameraContent::setCellId()
     * @param string $cellId
     */
    public function __construct(?string $cellId = null)
    {
        $this
            ->setCellId($cellId);
    }
    /**
     * Get cellId value
     * @return string|null
     */
    public function getCellId(): ?string
    {
        return $this->cellId;
    }
    /**
     * Set cellId value
     * @param string $cellId
     * @return \StructType\GetScreenCellCameraContent
     */
    public function setCellId(?string $cellId = null): self
    {
        // validation for constraint: string
        if (!is_null($cellId) && !is_string($cellId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cellId, true), gettype($cellId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($cellId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $cellId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($cellId, true)), __LINE__);
        }
        $this->cellId = $cellId;
        
        return $this;
    }
}
