<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NUUOArchiveServerCollectionResult StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:NUUOArchiveServerCollectionResult
 * @subpackage Structs
 */
class NUUOArchiveServerCollectionResult extends AbstractStructBase
{
    /**
     * The ArchiveServers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfNUUOArchiveServer|null
     */
    protected ?\ArrayType\ArrayOfNUUOArchiveServer $ArchiveServers = null;
    /**
     * Constructor method for NUUOArchiveServerCollectionResult
     * @uses NUUOArchiveServerCollectionResult::setArchiveServers()
     * @param \ArrayType\ArrayOfNUUOArchiveServer $archiveServers
     */
    public function __construct(?\ArrayType\ArrayOfNUUOArchiveServer $archiveServers = null)
    {
        $this
            ->setArchiveServers($archiveServers);
    }
    /**
     * Get ArchiveServers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfNUUOArchiveServer|null
     */
    public function getArchiveServers(): ?\ArrayType\ArrayOfNUUOArchiveServer
    {
        return isset($this->ArchiveServers) ? $this->ArchiveServers : null;
    }
    /**
     * Set ArchiveServers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfNUUOArchiveServer $archiveServers
     * @return \StructType\NUUOArchiveServerCollectionResult
     */
    public function setArchiveServers(?\ArrayType\ArrayOfNUUOArchiveServer $archiveServers = null): self
    {
        if (is_null($archiveServers) || (is_array($archiveServers) && empty($archiveServers))) {
            unset($this->ArchiveServers);
        } else {
            $this->ArchiveServers = $archiveServers;
        }
        
        return $this;
    }
}
