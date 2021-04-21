<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSecureOSCameras StructType
 * @subpackage Structs
 */
class GetSecureOSCameras extends AbstractStructBase
{
    /**
     * The iidkId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $iidkId = null;
    /**
     * Constructor method for GetSecureOSCameras
     * @uses GetSecureOSCameras::setIidkId()
     * @param string $iidkId
     */
    public function __construct(?string $iidkId = null)
    {
        $this
            ->setIidkId($iidkId);
    }
    /**
     * Get iidkId value
     * @return string|null
     */
    public function getIidkId(): ?string
    {
        return $this->iidkId;
    }
    /**
     * Set iidkId value
     * @param string $iidkId
     * @return \StructType\GetSecureOSCameras
     */
    public function setIidkId(?string $iidkId = null): self
    {
        // validation for constraint: string
        if (!is_null($iidkId) && !is_string($iidkId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iidkId, true), gettype($iidkId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($iidkId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $iidkId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($iidkId, true)), __LINE__);
        }
        $this->iidkId = $iidkId;
        
        return $this;
    }
}
