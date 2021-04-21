<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddFavoriteFolderResponse StructType
 * @subpackage Structs
 */
class AddFavoriteFolderResponse extends AbstractStructBase
{
    /**
     * The AddFavoriteFolderResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FavoriteFolderInfo|null
     */
    protected ?\StructType\FavoriteFolderInfo $AddFavoriteFolderResult = null;
    /**
     * Constructor method for AddFavoriteFolderResponse
     * @uses AddFavoriteFolderResponse::setAddFavoriteFolderResult()
     * @param \StructType\FavoriteFolderInfo $addFavoriteFolderResult
     */
    public function __construct(?\StructType\FavoriteFolderInfo $addFavoriteFolderResult = null)
    {
        $this
            ->setAddFavoriteFolderResult($addFavoriteFolderResult);
    }
    /**
     * Get AddFavoriteFolderResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FavoriteFolderInfo|null
     */
    public function getAddFavoriteFolderResult(): ?\StructType\FavoriteFolderInfo
    {
        return isset($this->AddFavoriteFolderResult) ? $this->AddFavoriteFolderResult : null;
    }
    /**
     * Set AddFavoriteFolderResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\FavoriteFolderInfo $addFavoriteFolderResult
     * @return \StructType\AddFavoriteFolderResponse
     */
    public function setAddFavoriteFolderResult(?\StructType\FavoriteFolderInfo $addFavoriteFolderResult = null): self
    {
        if (is_null($addFavoriteFolderResult) || (is_array($addFavoriteFolderResult) && empty($addFavoriteFolderResult))) {
            unset($this->AddFavoriteFolderResult);
        } else {
            $this->AddFavoriteFolderResult = $addFavoriteFolderResult;
        }
        
        return $this;
    }
}
