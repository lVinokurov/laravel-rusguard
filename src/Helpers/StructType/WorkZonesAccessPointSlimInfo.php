<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkZonesAccessPointSlimInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WorkZonesAccessPointSlimInfo
 * @subpackage Structs
 */
class WorkZonesAccessPointSlimInfo extends WorkZonesAccessPointBase
{
    /**
     * The AcsAccessPointDriverInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsAccessPointDriverInfo|null
     */
    protected ?\StructType\AcsAccessPointDriverInfo $AcsAccessPointDriverInfo = null;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * Constructor method for WorkZonesAccessPointSlimInfo
     * @uses WorkZonesAccessPointSlimInfo::setAcsAccessPointDriverInfo()
     * @uses WorkZonesAccessPointSlimInfo::setId()
     * @param \StructType\AcsAccessPointDriverInfo $acsAccessPointDriverInfo
     * @param string $id
     */
    public function __construct(?\StructType\AcsAccessPointDriverInfo $acsAccessPointDriverInfo = null, ?string $id = null)
    {
        $this
            ->setAcsAccessPointDriverInfo($acsAccessPointDriverInfo)
            ->setId($id);
    }
    /**
     * Get AcsAccessPointDriverInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsAccessPointDriverInfo|null
     */
    public function getAcsAccessPointDriverInfo(): ?\StructType\AcsAccessPointDriverInfo
    {
        return isset($this->AcsAccessPointDriverInfo) ? $this->AcsAccessPointDriverInfo : null;
    }
    /**
     * Set AcsAccessPointDriverInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AcsAccessPointDriverInfo $acsAccessPointDriverInfo
     * @return \StructType\WorkZonesAccessPointSlimInfo
     */
    public function setAcsAccessPointDriverInfo(?\StructType\AcsAccessPointDriverInfo $acsAccessPointDriverInfo = null): self
    {
        if (is_null($acsAccessPointDriverInfo) || (is_array($acsAccessPointDriverInfo) && empty($acsAccessPointDriverInfo))) {
            unset($this->AcsAccessPointDriverInfo);
        } else {
            $this->AcsAccessPointDriverInfo = $acsAccessPointDriverInfo;
        }
        
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\WorkZonesAccessPointSlimInfo
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
}
