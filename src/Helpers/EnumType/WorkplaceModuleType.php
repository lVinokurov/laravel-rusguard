<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for WorkplaceModuleType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WorkplaceModuleType
 * @subpackage Enumerations
 */
class WorkplaceModuleType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EquipmentConfigurator'
     * @return string 'EquipmentConfigurator'
     */
    const VALUE_EQUIPMENT_CONFIGURATOR = 'EquipmentConfigurator';
    /**
     * Constant for value 'AcsConfigurator'
     * @return string 'AcsConfigurator'
     */
    const VALUE_ACS_CONFIGURATOR = 'AcsConfigurator';
    /**
     * Constant for value 'WorkstationConfigurator'
     * @return string 'WorkstationConfigurator'
     */
    const VALUE_WORKSTATION_CONFIGURATOR = 'WorkstationConfigurator';
    /**
     * Constant for value 'SystemConfigurator'
     * @return string 'SystemConfigurator'
     */
    const VALUE_SYSTEM_CONFIGURATOR = 'SystemConfigurator';
    /**
     * Constant for value 'Maps'
     * @return string 'Maps'
     */
    const VALUE_MAPS = 'Maps';
    /**
     * Constant for value 'Reports'
     * @return string 'Reports'
     */
    const VALUE_REPORTS = 'Reports';
    /**
     * Constant for value 'PhotoIdentification'
     * @return string 'PhotoIdentification'
     */
    const VALUE_PHOTO_IDENTIFICATION = 'PhotoIdentification';
    /**
     * Constant for value 'Statistics'
     * @return string 'Statistics'
     */
    const VALUE_STATISTICS = 'Statistics';
    /**
     * Constant for value 'VisitorsScoreboard'
     * @return string 'VisitorsScoreboard'
     */
    const VALUE_VISITORS_SCOREBOARD = 'VisitorsScoreboard';
    /**
     * Constant for value 'Administrator'
     * @return string 'Administrator'
     */
    const VALUE_ADMINISTRATOR = 'Administrator';
    /**
     * Constant for value 'Leader'
     * @return string 'Leader'
     */
    const VALUE_LEADER = 'Leader';
    /**
     * Constant for value 'RemoteTerminal'
     * @return string 'RemoteTerminal'
     */
    const VALUE_REMOTE_TERMINAL = 'RemoteTerminal';
    /**
     * Constant for value 'Incidents'
     * @return string 'Incidents'
     */
    const VALUE_INCIDENTS = 'Incidents';
    /**
     * Return allowed values
     * @uses self::VALUE_EQUIPMENT_CONFIGURATOR
     * @uses self::VALUE_ACS_CONFIGURATOR
     * @uses self::VALUE_WORKSTATION_CONFIGURATOR
     * @uses self::VALUE_SYSTEM_CONFIGURATOR
     * @uses self::VALUE_MAPS
     * @uses self::VALUE_REPORTS
     * @uses self::VALUE_PHOTO_IDENTIFICATION
     * @uses self::VALUE_STATISTICS
     * @uses self::VALUE_VISITORS_SCOREBOARD
     * @uses self::VALUE_ADMINISTRATOR
     * @uses self::VALUE_LEADER
     * @uses self::VALUE_REMOTE_TERMINAL
     * @uses self::VALUE_INCIDENTS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EQUIPMENT_CONFIGURATOR,
            self::VALUE_ACS_CONFIGURATOR,
            self::VALUE_WORKSTATION_CONFIGURATOR,
            self::VALUE_SYSTEM_CONFIGURATOR,
            self::VALUE_MAPS,
            self::VALUE_REPORTS,
            self::VALUE_PHOTO_IDENTIFICATION,
            self::VALUE_STATISTICS,
            self::VALUE_VISITORS_SCOREBOARD,
            self::VALUE_ADMINISTRATOR,
            self::VALUE_LEADER,
            self::VALUE_REMOTE_TERMINAL,
            self::VALUE_INCIDENTS,
        ];
    }
}
