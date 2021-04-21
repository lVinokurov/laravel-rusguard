<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveFavoriteFolderResponse StructType
 * @subpackage Structs
 */
class MoveFavoriteFolderResponse extends AbstractStructBase
{
    /**
     * The MoveFavoriteFolderResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FavoriteFolderInfo|null
     */
    protected ?\StructType\FavoriteFolderInfo $MoveFavoriteFolderResult = null;
    /**
     * Constructor method for MoveFavoriteFolderResponse
     * @uses MoveFavoriteFolderResponse::setMoveFavoriteFolderResult()
     * @param \StructType\FavoriteFolderInfo $moveFavoriteFolderResult
     */
    public function __construct(?\StructType\FavoriteFolderInfo $moveFavoriteFolderResult = null)
    {
        $this
            ->setMoveFavoriteFolderResult($moveFavoriteFolderResult);
    }
    /**
     * Get MoveFavoriteFolderResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FavoriteFolderInfo|null
     */
    public function getMoveFavoriteFolderResult(): ?\StructType\FavoriteFolderInfo
    {
        return isset($this->MoveFavoriteFolderResult) ? $this->MoveFavoriteFolderResult : null;
    }
    /**
     * Set MoveFavoriteFolderResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\FavoriteFolderInfo $moveFavoriteFolderResult
     * @return \StructType\MoveFavoriteFolderResponse
     */
    public function setMoveFavoriteFolderResult(?\StructType\FavoriteFolderInfo $moveFavoriteFolderResult = null): self
    {
        if (is_null($moveFavoriteFolderResult) || (is_array($moveFavoriteFolderResult) && empty($moveFavoriteFolderResult))) {
            unset($this->MoveFavoriteFolderResult);
        } else {
            $this->MoveFavoriteFolderResult = $moveFavoriteFolderResult;
        }
        
        return $this;
    }
}
