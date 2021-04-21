<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AddressFamily EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AddressFamily
 * @subpackage Enumerations
 */
class AddressFamily extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Unspecified'
     * @return string 'Unspecified'
     */
    const VALUE_UNSPECIFIED = 'Unspecified';
    /**
     * Constant for value 'Unix'
     * @return string 'Unix'
     */
    const VALUE_UNIX = 'Unix';
    /**
     * Constant for value 'InterNetwork'
     * @return string 'InterNetwork'
     */
    const VALUE_INTER_NETWORK = 'InterNetwork';
    /**
     * Constant for value 'ImpLink'
     * @return string 'ImpLink'
     */
    const VALUE_IMP_LINK = 'ImpLink';
    /**
     * Constant for value 'Pup'
     * @return string 'Pup'
     */
    const VALUE_PUP = 'Pup';
    /**
     * Constant for value 'Chaos'
     * @return string 'Chaos'
     */
    const VALUE_CHAOS = 'Chaos';
    /**
     * Constant for value 'NS'
     * @return string 'NS'
     */
    const VALUE_NS = 'NS';
    /**
     * Constant for value 'Ipx'
     * @return string 'Ipx'
     */
    const VALUE_IPX = 'Ipx';
    /**
     * Constant for value 'Iso'
     * @return string 'Iso'
     */
    const VALUE_ISO = 'Iso';
    /**
     * Constant for value 'Osi'
     * @return string 'Osi'
     */
    const VALUE_OSI = 'Osi';
    /**
     * Constant for value 'Ecma'
     * @return string 'Ecma'
     */
    const VALUE_ECMA = 'Ecma';
    /**
     * Constant for value 'DataKit'
     * @return string 'DataKit'
     */
    const VALUE_DATA_KIT = 'DataKit';
    /**
     * Constant for value 'Ccitt'
     * @return string 'Ccitt'
     */
    const VALUE_CCITT = 'Ccitt';
    /**
     * Constant for value 'Sna'
     * @return string 'Sna'
     */
    const VALUE_SNA = 'Sna';
    /**
     * Constant for value 'DecNet'
     * @return string 'DecNet'
     */
    const VALUE_DEC_NET = 'DecNet';
    /**
     * Constant for value 'DataLink'
     * @return string 'DataLink'
     */
    const VALUE_DATA_LINK = 'DataLink';
    /**
     * Constant for value 'Lat'
     * @return string 'Lat'
     */
    const VALUE_LAT = 'Lat';
    /**
     * Constant for value 'HyperChannel'
     * @return string 'HyperChannel'
     */
    const VALUE_HYPER_CHANNEL = 'HyperChannel';
    /**
     * Constant for value 'AppleTalk'
     * @return string 'AppleTalk'
     */
    const VALUE_APPLE_TALK = 'AppleTalk';
    /**
     * Constant for value 'NetBios'
     * @return string 'NetBios'
     */
    const VALUE_NET_BIOS = 'NetBios';
    /**
     * Constant for value 'VoiceView'
     * @return string 'VoiceView'
     */
    const VALUE_VOICE_VIEW = 'VoiceView';
    /**
     * Constant for value 'FireFox'
     * @return string 'FireFox'
     */
    const VALUE_FIRE_FOX = 'FireFox';
    /**
     * Constant for value 'Banyan'
     * @return string 'Banyan'
     */
    const VALUE_BANYAN = 'Banyan';
    /**
     * Constant for value 'Atm'
     * @return string 'Atm'
     */
    const VALUE_ATM = 'Atm';
    /**
     * Constant for value 'InterNetworkV6'
     * @return string 'InterNetworkV6'
     */
    const VALUE_INTER_NETWORK_V_6 = 'InterNetworkV6';
    /**
     * Constant for value 'Cluster'
     * @return string 'Cluster'
     */
    const VALUE_CLUSTER = 'Cluster';
    /**
     * Constant for value 'Ieee12844'
     * @return string 'Ieee12844'
     */
    const VALUE_IEEE_12844 = 'Ieee12844';
    /**
     * Constant for value 'Irda'
     * @return string 'Irda'
     */
    const VALUE_IRDA = 'Irda';
    /**
     * Constant for value 'NetworkDesigners'
     * @return string 'NetworkDesigners'
     */
    const VALUE_NETWORK_DESIGNERS = 'NetworkDesigners';
    /**
     * Constant for value 'Max'
     * @return string 'Max'
     */
    const VALUE_MAX = 'Max';
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_UNSPECIFIED
     * @uses self::VALUE_UNIX
     * @uses self::VALUE_INTER_NETWORK
     * @uses self::VALUE_IMP_LINK
     * @uses self::VALUE_PUP
     * @uses self::VALUE_CHAOS
     * @uses self::VALUE_NS
     * @uses self::VALUE_IPX
     * @uses self::VALUE_ISO
     * @uses self::VALUE_OSI
     * @uses self::VALUE_ECMA
     * @uses self::VALUE_DATA_KIT
     * @uses self::VALUE_CCITT
     * @uses self::VALUE_SNA
     * @uses self::VALUE_DEC_NET
     * @uses self::VALUE_DATA_LINK
     * @uses self::VALUE_LAT
     * @uses self::VALUE_HYPER_CHANNEL
     * @uses self::VALUE_APPLE_TALK
     * @uses self::VALUE_NET_BIOS
     * @uses self::VALUE_VOICE_VIEW
     * @uses self::VALUE_FIRE_FOX
     * @uses self::VALUE_BANYAN
     * @uses self::VALUE_ATM
     * @uses self::VALUE_INTER_NETWORK_V_6
     * @uses self::VALUE_CLUSTER
     * @uses self::VALUE_IEEE_12844
     * @uses self::VALUE_IRDA
     * @uses self::VALUE_NETWORK_DESIGNERS
     * @uses self::VALUE_MAX
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNKNOWN,
            self::VALUE_UNSPECIFIED,
            self::VALUE_UNIX,
            self::VALUE_INTER_NETWORK,
            self::VALUE_IMP_LINK,
            self::VALUE_PUP,
            self::VALUE_CHAOS,
            self::VALUE_NS,
            self::VALUE_IPX,
            self::VALUE_ISO,
            self::VALUE_OSI,
            self::VALUE_ECMA,
            self::VALUE_DATA_KIT,
            self::VALUE_CCITT,
            self::VALUE_SNA,
            self::VALUE_DEC_NET,
            self::VALUE_DATA_LINK,
            self::VALUE_LAT,
            self::VALUE_HYPER_CHANNEL,
            self::VALUE_APPLE_TALK,
            self::VALUE_NET_BIOS,
            self::VALUE_VOICE_VIEW,
            self::VALUE_FIRE_FOX,
            self::VALUE_BANYAN,
            self::VALUE_ATM,
            self::VALUE_INTER_NETWORK_V_6,
            self::VALUE_CLUSTER,
            self::VALUE_IEEE_12844,
            self::VALUE_IRDA,
            self::VALUE_NETWORK_DESIGNERS,
            self::VALUE_MAX,
        ];
    }
}
