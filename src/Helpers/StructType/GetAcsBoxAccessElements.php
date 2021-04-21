<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsBoxAccessElements StructType
 * @subpackage Structs
 */
class GetAcsBoxAccessElements extends AbstractStructBase
{
    /**
     * The boxAccessLevelId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $boxAccessLevelId = null;
    /**
     * Constructor method for GetAcsBoxAccessElements
     * @uses GetAcsBoxAccessElements::setBoxAccessLevelId()
     * @param string $boxAccessLevelId
     */
    public function __construct(?string $boxAccessLevelId = null)
    {
        $this
            ->setBoxAccessLevelId($boxAccessLevelId);
    }
    /**
     * Get boxAccessLevelId value
     * @return string|null
     */
    public function getBoxAccessLevelId(): ?string
    {
        return $this->boxAccessLevelId;
    }
    /**
     * Set boxAccessLevelId value
     * @param string $boxAccessLevelId
     * @return \StructType\GetAcsBoxAccessElements
     */
    public function setBoxAccessLevelId(?string $boxAccessLevelId = null): self
    {
        // validation for constraint: string
        if (!is_null($boxAccessLevelId) && !is_string($boxAccessLevelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($boxAccessLevelId, true), gettype($boxAccessLevelId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($boxAccessLevelId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $boxAccessLevelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($boxAccessLevelId, true)), __LINE__);
        }
        $this->boxAccessLevelId = $boxAccessLevelId;
        
        return $this;
    }
}
