<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SectorAuthentication EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SectorAuthentication
 * @subpackage Enumerations
 */
class SectorAuthentication extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ProtectionDataAndUID'
     * @return string 'ProtectionDataAndUID'
     */
    const VALUE_PROTECTION_DATA_AND_UID = 'ProtectionDataAndUID';
    /**
     * Constant for value 'ProtectionData'
     * @return string 'ProtectionData'
     */
    const VALUE_PROTECTION_DATA = 'ProtectionData';
    /**
     * Constant for value 'ProtectionDataOrUID'
     * @return string 'ProtectionDataOrUID'
     */
    const VALUE_PROTECTION_DATA_OR_UID = 'ProtectionDataOrUID';
    /**
     * Constant for value 'Sector'
     * @return string 'Sector'
     */
    const VALUE_SECTOR = 'Sector';
    /**
     * Return allowed values
     * @uses self::VALUE_PROTECTION_DATA_AND_UID
     * @uses self::VALUE_PROTECTION_DATA
     * @uses self::VALUE_PROTECTION_DATA_OR_UID
     * @uses self::VALUE_SECTOR
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PROTECTION_DATA_AND_UID,
            self::VALUE_PROTECTION_DATA,
            self::VALUE_PROTECTION_DATA_OR_UID,
            self::VALUE_SECTOR,
        ];
    }
}
