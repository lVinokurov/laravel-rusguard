<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResolvePhotoBankEntity StructType
 * @subpackage Structs
 */
class ResolvePhotoBankEntity extends AbstractStructBase
{
    /**
     * The idPhotoBankEntity
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $idPhotoBankEntity = null;
    /**
     * Constructor method for ResolvePhotoBankEntity
     * @uses ResolvePhotoBankEntity::setIdPhotoBankEntity()
     * @param int $idPhotoBankEntity
     */
    public function __construct(?int $idPhotoBankEntity = null)
    {
        $this
            ->setIdPhotoBankEntity($idPhotoBankEntity);
    }
    /**
     * Get idPhotoBankEntity value
     * @return int|null
     */
    public function getIdPhotoBankEntity(): ?int
    {
        return $this->idPhotoBankEntity;
    }
    /**
     * Set idPhotoBankEntity value
     * @param int $idPhotoBankEntity
     * @return \StructType\ResolvePhotoBankEntity
     */
    public function setIdPhotoBankEntity(?int $idPhotoBankEntity = null): self
    {
        // validation for constraint: int
        if (!is_null($idPhotoBankEntity) && !(is_int($idPhotoBankEntity) || ctype_digit($idPhotoBankEntity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($idPhotoBankEntity, true), gettype($idPhotoBankEntity)), __LINE__);
        }
        $this->idPhotoBankEntity = $idPhotoBankEntity;
        
        return $this;
    }
}
