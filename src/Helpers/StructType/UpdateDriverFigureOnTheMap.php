<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateDriverFigureOnTheMap StructType
 * @subpackage Structs
 */
class UpdateDriverFigureOnTheMap extends AbstractStructBase
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
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DriverFigureSaveData|null
     */
    protected ?\StructType\DriverFigureSaveData $data = null;
    /**
     * Constructor method for UpdateDriverFigureOnTheMap
     * @uses UpdateDriverFigureOnTheMap::setDriverFigureId()
     * @uses UpdateDriverFigureOnTheMap::setData()
     * @param string $driverFigureId
     * @param \StructType\DriverFigureSaveData $data
     */
    public function __construct(?string $driverFigureId = null, ?\StructType\DriverFigureSaveData $data = null)
    {
        $this
            ->setDriverFigureId($driverFigureId)
            ->setData($data);
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
     * @return \StructType\UpdateDriverFigureOnTheMap
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
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DriverFigureSaveData|null
     */
    public function getData(): ?\StructType\DriverFigureSaveData
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\DriverFigureSaveData $data
     * @return \StructType\UpdateDriverFigureOnTheMap
     */
    public function setData(?\StructType\DriverFigureSaveData $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
}
