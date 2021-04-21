<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyKeeperControllerResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:KeyKeeperControllerResult
 * @subpackage Structs
 */
class KeyKeeperControllerResult extends AbstractStructBase
{
    /**
     * The Configuration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\KeyKeeperConfiguration|null
     */
    protected ?\StructType\KeyKeeperConfiguration $Configuration = null;
    /**
     * The KeyKeeperCabinets
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfKeyKeeperCabinet|null
     */
    protected ?\ArrayType\ArrayOfKeyKeeperCabinet $KeyKeeperCabinets = null;
    /**
     * The KeyKeeperPorts
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfKeyKeeperPort|null
     */
    protected ?\ArrayType\ArrayOfKeyKeeperPort $KeyKeeperPorts = null;
    /**
     * Constructor method for KeyKeeperControllerResult
     * @uses KeyKeeperControllerResult::setConfiguration()
     * @uses KeyKeeperControllerResult::setKeyKeeperCabinets()
     * @uses KeyKeeperControllerResult::setKeyKeeperPorts()
     * @param \StructType\KeyKeeperConfiguration $configuration
     * @param \ArrayType\ArrayOfKeyKeeperCabinet $keyKeeperCabinets
     * @param \ArrayType\ArrayOfKeyKeeperPort $keyKeeperPorts
     */
    public function __construct(?\StructType\KeyKeeperConfiguration $configuration = null, ?\ArrayType\ArrayOfKeyKeeperCabinet $keyKeeperCabinets = null, ?\ArrayType\ArrayOfKeyKeeperPort $keyKeeperPorts = null)
    {
        $this
            ->setConfiguration($configuration)
            ->setKeyKeeperCabinets($keyKeeperCabinets)
            ->setKeyKeeperPorts($keyKeeperPorts);
    }
    /**
     * Get Configuration value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\KeyKeeperConfiguration|null
     */
    public function getConfiguration(): ?\StructType\KeyKeeperConfiguration
    {
        return isset($this->Configuration) ? $this->Configuration : null;
    }
    /**
     * Set Configuration value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\KeyKeeperConfiguration $configuration
     * @return \StructType\KeyKeeperControllerResult
     */
    public function setConfiguration(?\StructType\KeyKeeperConfiguration $configuration = null): self
    {
        if (is_null($configuration) || (is_array($configuration) && empty($configuration))) {
            unset($this->Configuration);
        } else {
            $this->Configuration = $configuration;
        }
        
        return $this;
    }
    /**
     * Get KeyKeeperCabinets value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfKeyKeeperCabinet|null
     */
    public function getKeyKeeperCabinets(): ?\ArrayType\ArrayOfKeyKeeperCabinet
    {
        return isset($this->KeyKeeperCabinets) ? $this->KeyKeeperCabinets : null;
    }
    /**
     * Set KeyKeeperCabinets value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfKeyKeeperCabinet $keyKeeperCabinets
     * @return \StructType\KeyKeeperControllerResult
     */
    public function setKeyKeeperCabinets(?\ArrayType\ArrayOfKeyKeeperCabinet $keyKeeperCabinets = null): self
    {
        if (is_null($keyKeeperCabinets) || (is_array($keyKeeperCabinets) && empty($keyKeeperCabinets))) {
            unset($this->KeyKeeperCabinets);
        } else {
            $this->KeyKeeperCabinets = $keyKeeperCabinets;
        }
        
        return $this;
    }
    /**
     * Get KeyKeeperPorts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfKeyKeeperPort|null
     */
    public function getKeyKeeperPorts(): ?\ArrayType\ArrayOfKeyKeeperPort
    {
        return isset($this->KeyKeeperPorts) ? $this->KeyKeeperPorts : null;
    }
    /**
     * Set KeyKeeperPorts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfKeyKeeperPort $keyKeeperPorts
     * @return \StructType\KeyKeeperControllerResult
     */
    public function setKeyKeeperPorts(?\ArrayType\ArrayOfKeyKeeperPort $keyKeeperPorts = null): self
    {
        if (is_null($keyKeeperPorts) || (is_array($keyKeeperPorts) && empty($keyKeeperPorts))) {
            unset($this->KeyKeeperPorts);
        } else {
            $this->KeyKeeperPorts = $keyKeeperPorts;
        }
        
        return $this;
    }
}
