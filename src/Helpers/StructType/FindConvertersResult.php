<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindConvertersResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FindConvertersResult
 * @subpackage Structs
 */
class FindConvertersResult extends AbstractStructBase
{
    /**
     * The Converters
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfCanConverterAddress|null
     */
    protected ?\ArrayType\ArrayOfCanConverterAddress $Converters = null;
    /**
     * The MissingDrivers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring|null
     */
    protected ?\ArrayType\ArrayOfstring $MissingDrivers = null;
    /**
     * Constructor method for FindConvertersResult
     * @uses FindConvertersResult::setConverters()
     * @uses FindConvertersResult::setMissingDrivers()
     * @param \ArrayType\ArrayOfCanConverterAddress $converters
     * @param \ArrayType\ArrayOfstring $missingDrivers
     */
    public function __construct(?\ArrayType\ArrayOfCanConverterAddress $converters = null, ?\ArrayType\ArrayOfstring $missingDrivers = null)
    {
        $this
            ->setConverters($converters)
            ->setMissingDrivers($missingDrivers);
    }
    /**
     * Get Converters value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfCanConverterAddress|null
     */
    public function getConverters(): ?\ArrayType\ArrayOfCanConverterAddress
    {
        return isset($this->Converters) ? $this->Converters : null;
    }
    /**
     * Set Converters value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfCanConverterAddress $converters
     * @return \StructType\FindConvertersResult
     */
    public function setConverters(?\ArrayType\ArrayOfCanConverterAddress $converters = null): self
    {
        if (is_null($converters) || (is_array($converters) && empty($converters))) {
            unset($this->Converters);
        } else {
            $this->Converters = $converters;
        }
        
        return $this;
    }
    /**
     * Get MissingDrivers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getMissingDrivers(): ?\ArrayType\ArrayOfstring
    {
        return isset($this->MissingDrivers) ? $this->MissingDrivers : null;
    }
    /**
     * Set MissingDrivers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $missingDrivers
     * @return \StructType\FindConvertersResult
     */
    public function setMissingDrivers(?\ArrayType\ArrayOfstring $missingDrivers = null): self
    {
        if (is_null($missingDrivers) || (is_array($missingDrivers) && empty($missingDrivers))) {
            unset($this->MissingDrivers);
        } else {
            $this->MissingDrivers = $missingDrivers;
        }
        
        return $this;
    }
}
