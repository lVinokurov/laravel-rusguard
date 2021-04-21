<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LNetworkChanges StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LNetworkChanges
 * @subpackage Structs
 */
class LNetworkChanges extends AbstractStructBase
{
    /**
     * The DriversAdded
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLDriverAdded|null
     */
    protected ?\ArrayType\ArrayOfLDriverAdded $DriversAdded = null;
    /**
     * The LinkChanges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLLinkChanged|null
     */
    protected ?\ArrayType\ArrayOfLLinkChanged $LinkChanges = null;
    /**
     * The NetworksAdded
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLNetworkAdded|null
     */
    protected ?\ArrayType\ArrayOfLNetworkAdded $NetworksAdded = null;
    /**
     * The OperationResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLOperationResult|null
     */
    protected ?\ArrayType\ArrayOfLOperationResult $OperationResults = null;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLResourceProperty|null
     */
    protected ?\ArrayType\ArrayOfLResourceProperty $Properties = null;
    /**
     * The ResourcesRemoved
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLResourceInfo|null
     */
    protected ?\ArrayType\ArrayOfLResourceInfo $ResourcesRemoved = null;
    /**
     * The ServersAdded
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLServerAdded|null
     */
    protected ?\ArrayType\ArrayOfLServerAdded $ServersAdded = null;
    /**
     * The States
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLResourceProperty|null
     */
    protected ?\ArrayType\ArrayOfLResourceProperty $States = null;
    /**
     * Constructor method for LNetworkChanges
     * @uses LNetworkChanges::setDriversAdded()
     * @uses LNetworkChanges::setLinkChanges()
     * @uses LNetworkChanges::setNetworksAdded()
     * @uses LNetworkChanges::setOperationResults()
     * @uses LNetworkChanges::setProperties()
     * @uses LNetworkChanges::setResourcesRemoved()
     * @uses LNetworkChanges::setServersAdded()
     * @uses LNetworkChanges::setStates()
     * @param \ArrayType\ArrayOfLDriverAdded $driversAdded
     * @param \ArrayType\ArrayOfLLinkChanged $linkChanges
     * @param \ArrayType\ArrayOfLNetworkAdded $networksAdded
     * @param \ArrayType\ArrayOfLOperationResult $operationResults
     * @param \ArrayType\ArrayOfLResourceProperty $properties
     * @param \ArrayType\ArrayOfLResourceInfo $resourcesRemoved
     * @param \ArrayType\ArrayOfLServerAdded $serversAdded
     * @param \ArrayType\ArrayOfLResourceProperty $states
     */
    public function __construct(?\ArrayType\ArrayOfLDriverAdded $driversAdded = null, ?\ArrayType\ArrayOfLLinkChanged $linkChanges = null, ?\ArrayType\ArrayOfLNetworkAdded $networksAdded = null, ?\ArrayType\ArrayOfLOperationResult $operationResults = null, ?\ArrayType\ArrayOfLResourceProperty $properties = null, ?\ArrayType\ArrayOfLResourceInfo $resourcesRemoved = null, ?\ArrayType\ArrayOfLServerAdded $serversAdded = null, ?\ArrayType\ArrayOfLResourceProperty $states = null)
    {
        $this
            ->setDriversAdded($driversAdded)
            ->setLinkChanges($linkChanges)
            ->setNetworksAdded($networksAdded)
            ->setOperationResults($operationResults)
            ->setProperties($properties)
            ->setResourcesRemoved($resourcesRemoved)
            ->setServersAdded($serversAdded)
            ->setStates($states);
    }
    /**
     * Get DriversAdded value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLDriverAdded|null
     */
    public function getDriversAdded(): ?\ArrayType\ArrayOfLDriverAdded
    {
        return isset($this->DriversAdded) ? $this->DriversAdded : null;
    }
    /**
     * Set DriversAdded value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLDriverAdded $driversAdded
     * @return \StructType\LNetworkChanges
     */
    public function setDriversAdded(?\ArrayType\ArrayOfLDriverAdded $driversAdded = null): self
    {
        if (is_null($driversAdded) || (is_array($driversAdded) && empty($driversAdded))) {
            unset($this->DriversAdded);
        } else {
            $this->DriversAdded = $driversAdded;
        }
        
        return $this;
    }
    /**
     * Get LinkChanges value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLLinkChanged|null
     */
    public function getLinkChanges(): ?\ArrayType\ArrayOfLLinkChanged
    {
        return isset($this->LinkChanges) ? $this->LinkChanges : null;
    }
    /**
     * Set LinkChanges value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLLinkChanged $linkChanges
     * @return \StructType\LNetworkChanges
     */
    public function setLinkChanges(?\ArrayType\ArrayOfLLinkChanged $linkChanges = null): self
    {
        if (is_null($linkChanges) || (is_array($linkChanges) && empty($linkChanges))) {
            unset($this->LinkChanges);
        } else {
            $this->LinkChanges = $linkChanges;
        }
        
        return $this;
    }
    /**
     * Get NetworksAdded value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLNetworkAdded|null
     */
    public function getNetworksAdded(): ?\ArrayType\ArrayOfLNetworkAdded
    {
        return isset($this->NetworksAdded) ? $this->NetworksAdded : null;
    }
    /**
     * Set NetworksAdded value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLNetworkAdded $networksAdded
     * @return \StructType\LNetworkChanges
     */
    public function setNetworksAdded(?\ArrayType\ArrayOfLNetworkAdded $networksAdded = null): self
    {
        if (is_null($networksAdded) || (is_array($networksAdded) && empty($networksAdded))) {
            unset($this->NetworksAdded);
        } else {
            $this->NetworksAdded = $networksAdded;
        }
        
        return $this;
    }
    /**
     * Get OperationResults value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLOperationResult|null
     */
    public function getOperationResults(): ?\ArrayType\ArrayOfLOperationResult
    {
        return isset($this->OperationResults) ? $this->OperationResults : null;
    }
    /**
     * Set OperationResults value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLOperationResult $operationResults
     * @return \StructType\LNetworkChanges
     */
    public function setOperationResults(?\ArrayType\ArrayOfLOperationResult $operationResults = null): self
    {
        if (is_null($operationResults) || (is_array($operationResults) && empty($operationResults))) {
            unset($this->OperationResults);
        } else {
            $this->OperationResults = $operationResults;
        }
        
        return $this;
    }
    /**
     * Get Properties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLResourceProperty|null
     */
    public function getProperties(): ?\ArrayType\ArrayOfLResourceProperty
    {
        return isset($this->Properties) ? $this->Properties : null;
    }
    /**
     * Set Properties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLResourceProperty $properties
     * @return \StructType\LNetworkChanges
     */
    public function setProperties(?\ArrayType\ArrayOfLResourceProperty $properties = null): self
    {
        if (is_null($properties) || (is_array($properties) && empty($properties))) {
            unset($this->Properties);
        } else {
            $this->Properties = $properties;
        }
        
        return $this;
    }
    /**
     * Get ResourcesRemoved value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLResourceInfo|null
     */
    public function getResourcesRemoved(): ?\ArrayType\ArrayOfLResourceInfo
    {
        return isset($this->ResourcesRemoved) ? $this->ResourcesRemoved : null;
    }
    /**
     * Set ResourcesRemoved value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLResourceInfo $resourcesRemoved
     * @return \StructType\LNetworkChanges
     */
    public function setResourcesRemoved(?\ArrayType\ArrayOfLResourceInfo $resourcesRemoved = null): self
    {
        if (is_null($resourcesRemoved) || (is_array($resourcesRemoved) && empty($resourcesRemoved))) {
            unset($this->ResourcesRemoved);
        } else {
            $this->ResourcesRemoved = $resourcesRemoved;
        }
        
        return $this;
    }
    /**
     * Get ServersAdded value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLServerAdded|null
     */
    public function getServersAdded(): ?\ArrayType\ArrayOfLServerAdded
    {
        return isset($this->ServersAdded) ? $this->ServersAdded : null;
    }
    /**
     * Set ServersAdded value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLServerAdded $serversAdded
     * @return \StructType\LNetworkChanges
     */
    public function setServersAdded(?\ArrayType\ArrayOfLServerAdded $serversAdded = null): self
    {
        if (is_null($serversAdded) || (is_array($serversAdded) && empty($serversAdded))) {
            unset($this->ServersAdded);
        } else {
            $this->ServersAdded = $serversAdded;
        }
        
        return $this;
    }
    /**
     * Get States value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLResourceProperty|null
     */
    public function getStates(): ?\ArrayType\ArrayOfLResourceProperty
    {
        return isset($this->States) ? $this->States : null;
    }
    /**
     * Set States value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLResourceProperty $states
     * @return \StructType\LNetworkChanges
     */
    public function setStates(?\ArrayType\ArrayOfLResourceProperty $states = null): self
    {
        if (is_null($states) || (is_array($states) && empty($states))) {
            unset($this->States);
        } else {
            $this->States = $states;
        }
        
        return $this;
    }
}
