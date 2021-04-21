<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VisitorsScoreboardWorkplaceModuleInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:VisitorsScoreboardWorkplaceModuleInfo
 * @subpackage Structs
 */
class VisitorsScoreboardWorkplaceModuleInfo extends VisitorsScoreboardWorkplaceModuleSaveData
{
    /**
     * The WorkZoneName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $WorkZoneName = null;
    /**
     * Constructor method for VisitorsScoreboardWorkplaceModuleInfo
     * @uses VisitorsScoreboardWorkplaceModuleInfo::setWorkZoneName()
     * @param string $workZoneName
     */
    public function __construct(?string $workZoneName = null)
    {
        $this
            ->setWorkZoneName($workZoneName);
    }
    /**
     * Get WorkZoneName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWorkZoneName(): ?string
    {
        return isset($this->WorkZoneName) ? $this->WorkZoneName : null;
    }
    /**
     * Set WorkZoneName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $workZoneName
     * @return \StructType\VisitorsScoreboardWorkplaceModuleInfo
     */
    public function setWorkZoneName(?string $workZoneName = null): self
    {
        // validation for constraint: string
        if (!is_null($workZoneName) && !is_string($workZoneName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workZoneName, true), gettype($workZoneName)), __LINE__);
        }
        if (is_null($workZoneName) || (is_array($workZoneName) && empty($workZoneName))) {
            unset($this->WorkZoneName);
        } else {
            $this->WorkZoneName = $workZoneName;
        }
        
        return $this;
    }
}
