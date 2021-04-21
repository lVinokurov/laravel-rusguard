<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindReports StructType
 * @subpackage Structs
 */
class FindReports extends AbstractStructBase
{
    /**
     * The reportIdentity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $reportIdentity = null;
    /**
     * Constructor method for FindReports
     * @uses FindReports::setReportIdentity()
     * @param string $reportIdentity
     */
    public function __construct(?string $reportIdentity = null)
    {
        $this
            ->setReportIdentity($reportIdentity);
    }
    /**
     * Get reportIdentity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getReportIdentity(): ?string
    {
        return isset($this->reportIdentity) ? $this->reportIdentity : null;
    }
    /**
     * Set reportIdentity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $reportIdentity
     * @return \StructType\FindReports
     */
    public function setReportIdentity(?string $reportIdentity = null): self
    {
        // validation for constraint: string
        if (!is_null($reportIdentity) && !is_string($reportIdentity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reportIdentity, true), gettype($reportIdentity)), __LINE__);
        }
        if (is_null($reportIdentity) || (is_array($reportIdentity) && empty($reportIdentity))) {
            unset($this->reportIdentity);
        } else {
            $this->reportIdentity = $reportIdentity;
        }
        
        return $this;
    }
}
