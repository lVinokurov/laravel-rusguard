<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveDriverFigureFromMap StructType
 * @subpackage Structs
 */
class RemoveDriverFigureFromMap extends AbstractStructBase
{
    /**
     * The driverFigureId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $driverFigureId = null;
    /**
     * Constructor method for RemoveDriverFigureFromMap
     * @uses RemoveDriverFigureFromMap::setDriverFigureId()
     * @param string $driverFigureId
     */
    public function __construct(?string $driverFigureId = null)
    {
        $this
            ->setDriverFigureId($driverFigureId);
    }
    /**
     * Get driverFigureId value
     * @return string|null
     */
    public function getDriverFigureId(): ?string
    {
        return $this->driverFigureId;
    }
    /**
     * Set driverFigureId value
     * @param string $driverFigureId
     * @return \StructType\RemoveDriverFigureFromMap
     */
    public function setDriverFigureId(?string $driverFigureId = null): self
    {
        // validation for constraint: string
        if (!is_null($driverFigureId) && !is_string($driverFigureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverFigureId, true), gettype($driverFigureId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($driverFigureId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $driverFigureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($driverFigureId, true)), __LINE__);
        }
        $this->driverFigureId = $driverFigureId;
        
        return $this;
    }
}
