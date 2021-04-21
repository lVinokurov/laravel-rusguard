<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ServerType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ServerType
 * @subpackage Enumerations
 */
class ServerType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DeviceServer'
     * @return string 'DeviceServer'
     */
    const VALUE_DEVICE_SERVER = 'DeviceServer';
    /**
     * Constant for value 'OperationCoordinator'
     * @return string 'OperationCoordinator'
     */
    const VALUE_OPERATION_COORDINATOR = 'OperationCoordinator';
    /**
     * Constant for value 'DataServer'
     * @return string 'DataServer'
     */
    const VALUE_DATA_SERVER = 'DataServer';
    /**
     * Constant for value 'LNetworkServer'
     * @return string 'LNetworkServer'
     */
    const VALUE_LNETWORK_SERVER = 'LNetworkServer';
    /**
     * Constant for value 'ResourceBroker'
     * @return string 'ResourceBroker'
     */
    const VALUE_RESOURCE_BROKER = 'ResourceBroker';
    /**
     * Constant for value 'CloudDispatcher'
     * @return string 'CloudDispatcher'
     */
    const VALUE_CLOUD_DISPATCHER = 'CloudDispatcher';
    /**
     * Return allowed values
     * @uses self::VALUE_DEVICE_SERVER
     * @uses self::VALUE_OPERATION_COORDINATOR
     * @uses self::VALUE_DATA_SERVER
     * @uses self::VALUE_LNETWORK_SERVER
     * @uses self::VALUE_RESOURCE_BROKER
     * @uses self::VALUE_CLOUD_DISPATCHER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DEVICE_SERVER,
            self::VALUE_OPERATION_COORDINATOR,
            self::VALUE_DATA_SERVER,
            self::VALUE_LNETWORK_SERVER,
            self::VALUE_RESOURCE_BROKER,
            self::VALUE_CLOUD_DISPATCHER,
        ];
    }
}
