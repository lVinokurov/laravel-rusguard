<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ISS_IntegrationPoint_SlimInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ISS_IntegrationPoint_SlimInfo
 * @subpackage Structs
 */
class ISS_IntegrationPoint_SlimInfo extends ISS_Entity_Base
{
    /**
     * The RusGuardIntegrationPoints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfISS_RusGuard_SlimInfo|null
     */
    protected ?\ArrayType\ArrayOfISS_RusGuard_SlimInfo $RusGuardIntegrationPoints = null;
    /**
     * Constructor method for ISS_IntegrationPoint_SlimInfo
     * @uses ISS_IntegrationPoint_SlimInfo::setRusGuardIntegrationPoints()
     * @param \ArrayType\ArrayOfISS_RusGuard_SlimInfo $rusGuardIntegrationPoints
     */
    public function __construct(?\ArrayType\ArrayOfISS_RusGuard_SlimInfo $rusGuardIntegrationPoints = null)
    {
        $this
            ->setRusGuardIntegrationPoints($rusGuardIntegrationPoints);
    }
    /**
     * Get RusGuardIntegrationPoints value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfISS_RusGuard_SlimInfo|null
     */
    public function getRusGuardIntegrationPoints(): ?\ArrayType\ArrayOfISS_RusGuard_SlimInfo
    {
        return isset($this->RusGuardIntegrationPoints) ? $this->RusGuardIntegrationPoints : null;
    }
    /**
     * Set RusGuardIntegrationPoints value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfISS_RusGuard_SlimInfo $rusGuardIntegrationPoints
     * @return \StructType\ISS_IntegrationPoint_SlimInfo
     */
    public function setRusGuardIntegrationPoints(?\ArrayType\ArrayOfISS_RusGuard_SlimInfo $rusGuardIntegrationPoints = null): self
    {
        if (is_null($rusGuardIntegrationPoints) || (is_array($rusGuardIntegrationPoints) && empty($rusGuardIntegrationPoints))) {
            unset($this->RusGuardIntegrationPoints);
        } else {
            $this->RusGuardIntegrationPoints = $rusGuardIntegrationPoints;
        }
        
        return $this;
    }
}
