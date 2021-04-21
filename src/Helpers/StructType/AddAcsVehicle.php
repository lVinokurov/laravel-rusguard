<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddAcsVehicle StructType
 * @subpackage Structs
 */
class AddAcsVehicle extends AbstractStructBase
{
    /**
     * The VehicleGroupID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $VehicleGroupID = null;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsVehicleSavedData|null
     */
    protected ?\StructType\AcsVehicleSavedData $data = null;
    /**
     * Constructor method for AddAcsVehicle
     * @uses AddAcsVehicle::setVehicleGroupID()
     * @uses AddAcsVehicle::setData()
     * @param string $vehicleGroupID
     * @param \StructType\AcsVehicleSavedData $data
     */
    public function __construct(?string $vehicleGroupID = null, ?\StructType\AcsVehicleSavedData $data = null)
    {
        $this
            ->setVehicleGroupID($vehicleGroupID)
            ->setData($data);
    }
    /**
     * Get VehicleGroupID value
     * @return string|null
     */
    public function getVehicleGroupID(): ?string
    {
        return $this->VehicleGroupID;
    }
    /**
     * Set VehicleGroupID value
     * @param string $vehicleGroupID
     * @return \StructType\AddAcsVehicle
     */
    public function setVehicleGroupID(?string $vehicleGroupID = null): self
    {
        // validation for constraint: string
        if (!is_null($vehicleGroupID) && !is_string($vehicleGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vehicleGroupID, true), gettype($vehicleGroupID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($vehicleGroupID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $vehicleGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($vehicleGroupID, true)), __LINE__);
        }
        $this->VehicleGroupID = $vehicleGroupID;
        
        return $this;
    }
    /**
     * Get data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsVehicleSavedData|null
     */
    public function getData(): ?\StructType\AcsVehicleSavedData
    {
        return isset($this->data) ? $this->data : null;
    }
    /**
     * Set data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsVehicleSavedData $data
     * @return \StructType\AddAcsVehicle
     */
    public function setData(?\StructType\AcsVehicleSavedData $data = null): self
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->data);
        } else {
            $this->data = $data;
        }
        
        return $this;
    }
}
