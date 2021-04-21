<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DriverFigureSaveData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DriverFigureSaveData
 * @subpackage Structs
 */
class DriverFigureSaveData extends AbstractStructBase
{
    /**
     * The DriverId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $DriverId = null;
    /**
     * The ShowDriverName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ShowDriverName = null;
    /**
     * The X
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $X = null;
    /**
     * The Y
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Y = null;
    /**
     * The Z
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Z = null;
    /**
     * Constructor method for DriverFigureSaveData
     * @uses DriverFigureSaveData::setDriverId()
     * @uses DriverFigureSaveData::setShowDriverName()
     * @uses DriverFigureSaveData::setX()
     * @uses DriverFigureSaveData::setY()
     * @uses DriverFigureSaveData::setZ()
     * @param string $driverId
     * @param bool $showDriverName
     * @param float $x
     * @param float $y
     * @param int $z
     */
    public function __construct(?string $driverId = null, ?bool $showDriverName = null, ?float $x = null, ?float $y = null, ?int $z = null)
    {
        $this
            ->setDriverId($driverId)
            ->setShowDriverName($showDriverName)
            ->setX($x)
            ->setY($y)
            ->setZ($z);
    }
    /**
     * Get DriverId value
     * @return string|null
     */
    public function getDriverId(): ?string
    {
        return $this->DriverId;
    }
    /**
     * Set DriverId value
     * @param string $driverId
     * @return \StructType\DriverFigureSaveData
     */
    public function setDriverId(?string $driverId = null): self
    {
        // validation for constraint: string
        if (!is_null($driverId) && !is_string($driverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverId, true), gettype($driverId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($driverId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $driverId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($driverId, true)), __LINE__);
        }
        $this->DriverId = $driverId;
        
        return $this;
    }
    /**
     * Get ShowDriverName value
     * @return bool|null
     */
    public function getShowDriverName(): ?bool
    {
        return $this->ShowDriverName;
    }
    /**
     * Set ShowDriverName value
     * @param bool $showDriverName
     * @return \StructType\DriverFigureSaveData
     */
    public function setShowDriverName(?bool $showDriverName = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showDriverName) && !is_bool($showDriverName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showDriverName, true), gettype($showDriverName)), __LINE__);
        }
        $this->ShowDriverName = $showDriverName;
        
        return $this;
    }
    /**
     * Get X value
     * @return float|null
     */
    public function getX(): ?float
    {
        return $this->X;
    }
    /**
     * Set X value
     * @param float $x
     * @return \StructType\DriverFigureSaveData
     */
    public function setX(?float $x = null): self
    {
        // validation for constraint: float
        if (!is_null($x) && !(is_float($x) || is_numeric($x))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($x, true), gettype($x)), __LINE__);
        }
        $this->X = $x;
        
        return $this;
    }
    /**
     * Get Y value
     * @return float|null
     */
    public function getY(): ?float
    {
        return $this->Y;
    }
    /**
     * Set Y value
     * @param float $y
     * @return \StructType\DriverFigureSaveData
     */
    public function setY(?float $y = null): self
    {
        // validation for constraint: float
        if (!is_null($y) && !(is_float($y) || is_numeric($y))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($y, true), gettype($y)), __LINE__);
        }
        $this->Y = $y;
        
        return $this;
    }
    /**
     * Get Z value
     * @return int|null
     */
    public function getZ(): ?int
    {
        return $this->Z;
    }
    /**
     * Set Z value
     * @param int $z
     * @return \StructType\DriverFigureSaveData
     */
    public function setZ(?int $z = null): self
    {
        // validation for constraint: int
        if (!is_null($z) && !(is_int($z) || ctype_digit($z))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($z, true), gettype($z)), __LINE__);
        }
        $this->Z = $z;
        
        return $this;
    }
}
