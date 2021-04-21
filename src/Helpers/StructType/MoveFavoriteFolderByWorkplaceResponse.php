<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveFavoriteFolderByWorkplaceResponse StructType
 * @subpackage Structs
 */
class MoveFavoriteFolderByWorkplaceResponse extends AbstractStructBase
{
    /**
     * The MoveFavoriteFolderByWorkplaceResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FavoriteFolderInfo|null
     */
    protected ?\StructType\FavoriteFolderInfo $MoveFavoriteFolderByWorkplaceResult = null;
    /**
     * Constructor method for MoveFavoriteFolderByWorkplaceResponse
     * @uses MoveFavoriteFolderByWorkplaceResponse::setMoveFavoriteFolderByWorkplaceResult()
     * @param \StructType\FavoriteFolderInfo $moveFavoriteFolderByWorkplaceResult
     */
    public function __construct(?\StructType\FavoriteFolderInfo $moveFavoriteFolderByWorkplaceResult = null)
    {
        $this
            ->setMoveFavoriteFolderByWorkplaceResult($moveFavoriteFolderByWorkplaceResult);
    }
    /**
     * Get MoveFavoriteFolderByWorkplaceResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FavoriteFolderInfo|null
     */
    public function getMoveFavoriteFolderByWorkplaceResult(): ?\StructType\FavoriteFolderInfo
    {
        return isset($this->MoveFavoriteFolderByWorkplaceResult) ? $this->MoveFavoriteFolderByWorkplaceResult : null;
    }
    /**
     * Set MoveFavoriteFolderByWorkplaceResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\FavoriteFolderInfo $moveFavoriteFolderByWorkplaceResult
     * @return \StructType\MoveFavoriteFolderByWorkplaceResponse
     */
    public function setMoveFavoriteFolderByWorkplaceResult(?\StructType\FavoriteFolderInfo $moveFavoriteFolderByWorkplaceResult = null): self
    {
        if (is_null($moveFavoriteFolderByWorkplaceResult) || (is_array($moveFavoriteFolderByWorkplaceResult) && empty($moveFavoriteFolderByWorkplaceResult))) {
            unset($this->MoveFavoriteFolderByWorkplaceResult);
        } else {
            $this->MoveFavoriteFolderByWorkplaceResult = $moveFavoriteFolderByWorkplaceResult;
        }
        
        return $this;
    }
}
