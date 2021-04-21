<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LogMsgSubType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LogMsgSubType
 * @subpackage Enumerations
 */
class LogMsgSubType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ControllerReload'
     * @return string 'ControllerReload'
     */
    const VALUE_CONTROLLER_RELOAD = 'ControllerReload';
    /**
     * Constant for value 'DeviceStateChanged'
     * @return string 'DeviceStateChanged'
     */
    const VALUE_DEVICE_STATE_CHANGED = 'DeviceStateChanged';
    /**
     * Constant for value 'DriverMethodCall'
     * @return string 'DriverMethodCall'
     */
    const VALUE_DRIVER_METHOD_CALL = 'DriverMethodCall';
    /**
     * Constant for value 'ControllerTamperAlarm'
     * @return string 'ControllerTamperAlarm'
     */
    const VALUE_CONTROLLER_TAMPER_ALARM = 'ControllerTamperAlarm';
    /**
     * Constant for value 'ControllerTamperNorm'
     * @return string 'ControllerTamperNorm'
     */
    const VALUE_CONTROLLER_TAMPER_NORM = 'ControllerTamperNorm';
    /**
     * Constant for value 'ControllerPowerNorm'
     * @return string 'ControllerPowerNorm'
     */
    const VALUE_CONTROLLER_POWER_NORM = 'ControllerPowerNorm';
    /**
     * Constant for value 'ControllerPowerBackup'
     * @return string 'ControllerPowerBackup'
     */
    const VALUE_CONTROLLER_POWER_BACKUP = 'ControllerPowerBackup';
    /**
     * Constant for value 'ControllerAccumulatorNorm'
     * @return string 'ControllerAccumulatorNorm'
     */
    const VALUE_CONTROLLER_ACCUMULATOR_NORM = 'ControllerAccumulatorNorm';
    /**
     * Constant for value 'ControllerAccumulatorDischarged'
     * @return string 'ControllerAccumulatorDischarged'
     */
    const VALUE_CONTROLLER_ACCUMULATOR_DISCHARGED = 'ControllerAccumulatorDischarged';
    /**
     * Constant for value 'ControllerPowerChannelShortCircuit'
     * @return string 'ControllerPowerChannelShortCircuit'
     */
    const VALUE_CONTROLLER_POWER_CHANNEL_SHORT_CIRCUIT = 'ControllerPowerChannelShortCircuit';
    /**
     * Constant for value 'ControllerPowerChannelEndShortCircuit'
     * @return string 'ControllerPowerChannelEndShortCircuit'
     */
    const VALUE_CONTROLLER_POWER_CHANNEL_END_SHORT_CIRCUIT = 'ControllerPowerChannelEndShortCircuit';
    /**
     * Constant for value 'ControllerHardwareFailure'
     * @return string 'ControllerHardwareFailure'
     */
    const VALUE_CONTROLLER_HARDWARE_FAILURE = 'ControllerHardwareFailure';
    /**
     * Constant for value 'AccessPointAlarm'
     * @return string 'AccessPointAlarm'
     */
    const VALUE_ACCESS_POINT_ALARM = 'AccessPointAlarm';
    /**
     * Constant for value 'AccessPointBroken'
     * @return string 'AccessPointBroken'
     */
    const VALUE_ACCESS_POINT_BROKEN = 'AccessPointBroken';
    /**
     * Constant for value 'AccessPointArmedGuard'
     * @return string 'AccessPointArmedGuard'
     */
    const VALUE_ACCESS_POINT_ARMED_GUARD = 'AccessPointArmedGuard';
    /**
     * Constant for value 'AccessPointDisarmedGuard'
     * @return string 'AccessPointDisarmedGuard'
     */
    const VALUE_ACCESS_POINT_DISARMED_GUARD = 'AccessPointDisarmedGuard';
    /**
     * Constant for value 'AccessPointBlocked'
     * @return string 'AccessPointBlocked'
     */
    const VALUE_ACCESS_POINT_BLOCKED = 'AccessPointBlocked';
    /**
     * Constant for value 'AccessPointUnblocked'
     * @return string 'AccessPointUnblocked'
     */
    const VALUE_ACCESS_POINT_UNBLOCKED = 'AccessPointUnblocked';
    /**
     * Constant for value 'AccessPointArmGuardDeniedAccess'
     * @return string 'AccessPointArmGuardDeniedAccess'
     */
    const VALUE_ACCESS_POINT_ARM_GUARD_DENIED_ACCESS = 'AccessPointArmGuardDeniedAccess';
    /**
     * Constant for value 'AccessPointBlockDeniedAccess'
     * @return string 'AccessPointBlockDeniedAccess'
     */
    const VALUE_ACCESS_POINT_BLOCK_DENIED_ACCESS = 'AccessPointBlockDeniedAccess';
    /**
     * Constant for value 'AccessPointArmGuardDeniedSensor'
     * @return string 'AccessPointArmGuardDeniedSensor'
     */
    const VALUE_ACCESS_POINT_ARM_GUARD_DENIED_SENSOR = 'AccessPointArmGuardDeniedSensor';
    /**
     * Constant for value 'AccessPointEmergencyOpened'
     * @return string 'AccessPointEmergencyOpened'
     */
    const VALUE_ACCESS_POINT_EMERGENCY_OPENED = 'AccessPointEmergencyOpened';
    /**
     * Constant for value 'AccessPointEmergencyEnd'
     * @return string 'AccessPointEmergencyEnd'
     */
    const VALUE_ACCESS_POINT_EMERGENCY_END = 'AccessPointEmergencyEnd';
    /**
     * Constant for value 'AccessPointEmergencyEndDeniedButton'
     * @return string 'AccessPointEmergencyEndDeniedButton'
     */
    const VALUE_ACCESS_POINT_EMERGENCY_END_DENIED_BUTTON = 'AccessPointEmergencyEndDeniedButton';
    /**
     * Constant for value 'AccessPointPassDenied'
     * @return string 'AccessPointPassDenied'
     */
    const VALUE_ACCESS_POINT_PASS_DENIED = 'AccessPointPassDenied';
    /**
     * Constant for value 'AccessPointKeyQuery'
     * @return string 'AccessPointKeyQuery'
     */
    const VALUE_ACCESS_POINT_KEY_QUERY = 'AccessPointKeyQuery';
    /**
     * Constant for value 'AccessPointEntry'
     * @return string 'AccessPointEntry'
     */
    const VALUE_ACCESS_POINT_ENTRY = 'AccessPointEntry';
    /**
     * Constant for value 'AccessPointExit'
     * @return string 'AccessPointExit'
     */
    const VALUE_ACCESS_POINT_EXIT = 'AccessPointExit';
    /**
     * Constant for value 'AccessPointExitByCardReceiver'
     * @return string 'AccessPointExitByCardReceiver'
     */
    const VALUE_ACCESS_POINT_EXIT_BY_CARD_RECEIVER = 'AccessPointExitByCardReceiver';
    /**
     * Constant for value 'AccessPointPassUnknown'
     * @return string 'AccessPointPassUnknown'
     */
    const VALUE_ACCESS_POINT_PASS_UNKNOWN = 'AccessPointPassUnknown';
    /**
     * Constant for value 'AccessPointFirstPersonEntry'
     * @return string 'AccessPointFirstPersonEntry'
     */
    const VALUE_ACCESS_POINT_FIRST_PERSON_ENTRY = 'AccessPointFirstPersonEntry';
    /**
     * Constant for value 'AccessPointFirstPersonExit'
     * @return string 'AccessPointFirstPersonExit'
     */
    const VALUE_ACCESS_POINT_FIRST_PERSON_EXIT = 'AccessPointFirstPersonExit';
    /**
     * Constant for value 'AccessPointFirstPersonExitByCardReceiver'
     * @return string 'AccessPointFirstPersonExitByCardReceiver'
     */
    const VALUE_ACCESS_POINT_FIRST_PERSON_EXIT_BY_CARD_RECEIVER = 'AccessPointFirstPersonExitByCardReceiver';
    /**
     * Constant for value 'AccessPointFirstPersonPassUnknown'
     * @return string 'AccessPointFirstPersonPassUnknown'
     */
    const VALUE_ACCESS_POINT_FIRST_PERSON_PASS_UNKNOWN = 'AccessPointFirstPersonPassUnknown';
    /**
     * Constant for value 'AccessPointSecondPersonEntry'
     * @return string 'AccessPointSecondPersonEntry'
     */
    const VALUE_ACCESS_POINT_SECOND_PERSON_ENTRY = 'AccessPointSecondPersonEntry';
    /**
     * Constant for value 'AccessPointSecondPersonExit'
     * @return string 'AccessPointSecondPersonExit'
     */
    const VALUE_ACCESS_POINT_SECOND_PERSON_EXIT = 'AccessPointSecondPersonExit';
    /**
     * Constant for value 'AccessPointSecondPersonExitByCardReceiver'
     * @return string 'AccessPointSecondPersonExitByCardReceiver'
     */
    const VALUE_ACCESS_POINT_SECOND_PERSON_EXIT_BY_CARD_RECEIVER = 'AccessPointSecondPersonExitByCardReceiver';
    /**
     * Constant for value 'AccessPointSecondPersonPassUnknown'
     * @return string 'AccessPointSecondPersonPassUnknown'
     */
    const VALUE_ACCESS_POINT_SECOND_PERSON_PASS_UNKNOWN = 'AccessPointSecondPersonPassUnknown';
    /**
     * Constant for value 'AccessPointPassRefused'
     * @return string 'AccessPointPassRefused'
     */
    const VALUE_ACCESS_POINT_PASS_REFUSED = 'AccessPointPassRefused';
    /**
     * Constant for value 'AccessPointEnteredPinUnderCompulsion'
     * @return string 'AccessPointEnteredPinUnderCompulsion'
     */
    const VALUE_ACCESS_POINT_ENTERED_PIN_UNDER_COMPULSION = 'AccessPointEnteredPinUnderCompulsion';
    /**
     * Constant for value 'AccessPointDoorLeftOpened'
     * @return string 'AccessPointDoorLeftOpened'
     */
    const VALUE_ACCESS_POINT_DOOR_LEFT_OPENED = 'AccessPointDoorLeftOpened';
    /**
     * Constant for value 'AccessPointDoorLongOpened'
     * @return string 'AccessPointDoorLongOpened'
     */
    const VALUE_ACCESS_POINT_DOOR_LONG_OPENED = 'AccessPointDoorLongOpened';
    /**
     * Constant for value 'AccessPointDoorLongOpenedEnd'
     * @return string 'AccessPointDoorLongOpenedEnd'
     */
    const VALUE_ACCESS_POINT_DOOR_LONG_OPENED_END = 'AccessPointDoorLongOpenedEnd';
    /**
     * Constant for value 'AccessPointNotReceivedPermissionToPass'
     * @return string 'AccessPointNotReceivedPermissionToPass'
     */
    const VALUE_ACCESS_POINT_NOT_RECEIVED_PERMISSION_TO_PASS = 'AccessPointNotReceivedPermissionToPass';
    /**
     * Constant for value 'AccessPointButtonPressed'
     * @return string 'AccessPointButtonPressed'
     */
    const VALUE_ACCESS_POINT_BUTTON_PRESSED = 'AccessPointButtonPressed';
    /**
     * Constant for value 'AccessPointOnGuardDelayStarted'
     * @return string 'AccessPointOnGuardDelayStarted'
     */
    const VALUE_ACCESS_POINT_ON_GUARD_DELAY_STARTED = 'AccessPointOnGuardDelayStarted';
    /**
     * Constant for value 'AccessPointSirenOn'
     * @return string 'AccessPointSirenOn'
     */
    const VALUE_ACCESS_POINT_SIREN_ON = 'AccessPointSirenOn';
    /**
     * Constant for value 'AccessPointSirenOff'
     * @return string 'AccessPointSirenOff'
     */
    const VALUE_ACCESS_POINT_SIREN_OFF = 'AccessPointSirenOff';
    /**
     * Constant for value 'AccessPointCardReaderTamperAlert'
     * @return string 'AccessPointCardReaderTamperAlert'
     */
    const VALUE_ACCESS_POINT_CARD_READER_TAMPER_ALERT = 'AccessPointCardReaderTamperAlert';
    /**
     * Constant for value 'AccessPointCardReaderTamperNorm'
     * @return string 'AccessPointCardReaderTamperNorm'
     */
    const VALUE_ACCESS_POINT_CARD_READER_TAMPER_NORM = 'AccessPointCardReaderTamperNorm';
    /**
     * Constant for value 'DriverActivated'
     * @return string 'DriverActivated'
     */
    const VALUE_DRIVER_ACTIVATED = 'DriverActivated';
    /**
     * Constant for value 'DriverDeactivated'
     * @return string 'DriverDeactivated'
     */
    const VALUE_DRIVER_DEACTIVATED = 'DriverDeactivated';
    /**
     * Constant for value 'DeviceOnline'
     * @return string 'DeviceOnline'
     */
    const VALUE_DEVICE_ONLINE = 'DeviceOnline';
    /**
     * Constant for value 'DeviceOffline'
     * @return string 'DeviceOffline'
     */
    const VALUE_DEVICE_OFFLINE = 'DeviceOffline';
    /**
     * Constant for value 'AccessPointCardReaderContainerFull'
     * @return string 'AccessPointCardReaderContainerFull'
     */
    const VALUE_ACCESS_POINT_CARD_READER_CONTAINER_FULL = 'AccessPointCardReaderContainerFull';
    /**
     * Constant for value 'AccessPointEndBroken'
     * @return string 'AccessPointEndBroken'
     */
    const VALUE_ACCESS_POINT_END_BROKEN = 'AccessPointEndBroken';
    /**
     * Constant for value 'AccessPointAlarmDelayStarted'
     * @return string 'AccessPointAlarmDelayStarted'
     */
    const VALUE_ACCESS_POINT_ALARM_DELAY_STARTED = 'AccessPointAlarmDelayStarted';
    /**
     * Constant for value 'AccessPointDoorClosed'
     * @return string 'AccessPointDoorClosed'
     */
    const VALUE_ACCESS_POINT_DOOR_CLOSED = 'AccessPointDoorClosed';
    /**
     * Constant for value 'ConverterNotFound'
     * @return string 'ConverterNotFound'
     */
    const VALUE_CONVERTER_NOT_FOUND = 'ConverterNotFound';
    /**
     * Constant for value 'ConverterNoDevicesOnCanBus'
     * @return string 'ConverterNoDevicesOnCanBus'
     */
    const VALUE_CONVERTER_NO_DEVICES_ON_CAN_BUS = 'ConverterNoDevicesOnCanBus';
    /**
     * Constant for value 'ConverterOk'
     * @return string 'ConverterOk'
     */
    const VALUE_CONVERTER_OK = 'ConverterOk';
    /**
     * Constant for value 'AccessPointArmedGuardByKey'
     * @return string 'AccessPointArmedGuardByKey'
     */
    const VALUE_ACCESS_POINT_ARMED_GUARD_BY_KEY = 'AccessPointArmedGuardByKey';
    /**
     * Constant for value 'AccessPointDisarmedGuardByKey'
     * @return string 'AccessPointDisarmedGuardByKey'
     */
    const VALUE_ACCESS_POINT_DISARMED_GUARD_BY_KEY = 'AccessPointDisarmedGuardByKey';
    /**
     * Constant for value 'AccessPointBlockedByKey'
     * @return string 'AccessPointBlockedByKey'
     */
    const VALUE_ACCESS_POINT_BLOCKED_BY_KEY = 'AccessPointBlockedByKey';
    /**
     * Constant for value 'AccessPointUnblockedByKey'
     * @return string 'AccessPointUnblockedByKey'
     */
    const VALUE_ACCESS_POINT_UNBLOCKED_BY_KEY = 'AccessPointUnblockedByKey';
    /**
     * Constant for value 'AccessPointArmGuardDeniedSensorByKey'
     * @return string 'AccessPointArmGuardDeniedSensorByKey'
     */
    const VALUE_ACCESS_POINT_ARM_GUARD_DENIED_SENSOR_BY_KEY = 'AccessPointArmGuardDeniedSensorByKey';
    /**
     * Constant for value 'AccessPointEntryByKey'
     * @return string 'AccessPointEntryByKey'
     */
    const VALUE_ACCESS_POINT_ENTRY_BY_KEY = 'AccessPointEntryByKey';
    /**
     * Constant for value 'AccessPointExitByKey'
     * @return string 'AccessPointExitByKey'
     */
    const VALUE_ACCESS_POINT_EXIT_BY_KEY = 'AccessPointExitByKey';
    /**
     * Constant for value 'AccessPointPassUnknownByKey'
     * @return string 'AccessPointPassUnknownByKey'
     */
    const VALUE_ACCESS_POINT_PASS_UNKNOWN_BY_KEY = 'AccessPointPassUnknownByKey';
    /**
     * Constant for value 'AccessPointPassRefusedByKey'
     * @return string 'AccessPointPassRefusedByKey'
     */
    const VALUE_ACCESS_POINT_PASS_REFUSED_BY_KEY = 'AccessPointPassRefusedByKey';
    /**
     * Constant for value 'AccessPointDoorLongOpenedByKey'
     * @return string 'AccessPointDoorLongOpenedByKey'
     */
    const VALUE_ACCESS_POINT_DOOR_LONG_OPENED_BY_KEY = 'AccessPointDoorLongOpenedByKey';
    /**
     * Constant for value 'AccessPointDoorLongOpenedEndByKey'
     * @return string 'AccessPointDoorLongOpenedEndByKey'
     */
    const VALUE_ACCESS_POINT_DOOR_LONG_OPENED_END_BY_KEY = 'AccessPointDoorLongOpenedEndByKey';
    /**
     * Constant for value 'AccessPointOnGuardDelayStartedByKey'
     * @return string 'AccessPointOnGuardDelayStartedByKey'
     */
    const VALUE_ACCESS_POINT_ON_GUARD_DELAY_STARTED_BY_KEY = 'AccessPointOnGuardDelayStartedByKey';
    /**
     * Constant for value 'AccessPointDoorLeftOpenedByKey'
     * @return string 'AccessPointDoorLeftOpenedByKey'
     */
    const VALUE_ACCESS_POINT_DOOR_LEFT_OPENED_BY_KEY = 'AccessPointDoorLeftOpenedByKey';
    /**
     * Constant for value 'AccessPointDoorClosedByKey'
     * @return string 'AccessPointDoorClosedByKey'
     */
    const VALUE_ACCESS_POINT_DOOR_CLOSED_BY_KEY = 'AccessPointDoorClosedByKey';
    /**
     * Constant for value 'AccessPointKeyAppliedEntry'
     * @return string 'AccessPointKeyAppliedEntry'
     */
    const VALUE_ACCESS_POINT_KEY_APPLIED_ENTRY = 'AccessPointKeyAppliedEntry';
    /**
     * Constant for value 'AccessPointKeyAppliedExit'
     * @return string 'AccessPointKeyAppliedExit'
     */
    const VALUE_ACCESS_POINT_KEY_APPLIED_EXIT = 'AccessPointKeyAppliedExit';
    /**
     * Constant for value 'GateCarPassDenied'
     * @return string 'GateCarPassDenied'
     */
    const VALUE_GATE_CAR_PASS_DENIED = 'GateCarPassDenied';
    /**
     * Constant for value 'GateCarKeyAppliedEntry'
     * @return string 'GateCarKeyAppliedEntry'
     */
    const VALUE_GATE_CAR_KEY_APPLIED_ENTRY = 'GateCarKeyAppliedEntry';
    /**
     * Constant for value 'GateCarKeyAppliedExit'
     * @return string 'GateCarKeyAppliedExit'
     */
    const VALUE_GATE_CAR_KEY_APPLIED_EXIT = 'GateCarKeyAppliedExit';
    /**
     * Constant for value 'GateCarKeyQuery'
     * @return string 'GateCarKeyQuery'
     */
    const VALUE_GATE_CAR_KEY_QUERY = 'GateCarKeyQuery';
    /**
     * Constant for value 'GateCarEntry'
     * @return string 'GateCarEntry'
     */
    const VALUE_GATE_CAR_ENTRY = 'GateCarEntry';
    /**
     * Constant for value 'GateCarExit'
     * @return string 'GateCarExit'
     */
    const VALUE_GATE_CAR_EXIT = 'GateCarExit';
    /**
     * Constant for value 'GateCarExitByCardReceiver'
     * @return string 'GateCarExitByCardReceiver'
     */
    const VALUE_GATE_CAR_EXIT_BY_CARD_RECEIVER = 'GateCarExitByCardReceiver';
    /**
     * Constant for value 'GateCarPassUnknown'
     * @return string 'GateCarPassUnknown'
     */
    const VALUE_GATE_CAR_PASS_UNKNOWN = 'GateCarPassUnknown';
    /**
     * Constant for value 'GateCarEntryByKey'
     * @return string 'GateCarEntryByKey'
     */
    const VALUE_GATE_CAR_ENTRY_BY_KEY = 'GateCarEntryByKey';
    /**
     * Constant for value 'GateCarExitByKey'
     * @return string 'GateCarExitByKey'
     */
    const VALUE_GATE_CAR_EXIT_BY_KEY = 'GateCarExitByKey';
    /**
     * Constant for value 'GateCarPassUnknownByKey'
     * @return string 'GateCarPassUnknownByKey'
     */
    const VALUE_GATE_CAR_PASS_UNKNOWN_BY_KEY = 'GateCarPassUnknownByKey';
    /**
     * Constant for value 'GateCarFirstPersonEntry'
     * @return string 'GateCarFirstPersonEntry'
     */
    const VALUE_GATE_CAR_FIRST_PERSON_ENTRY = 'GateCarFirstPersonEntry';
    /**
     * Constant for value 'GateCarFirstPersonExit'
     * @return string 'GateCarFirstPersonExit'
     */
    const VALUE_GATE_CAR_FIRST_PERSON_EXIT = 'GateCarFirstPersonExit';
    /**
     * Constant for value 'GateCarFirstPersonExitByCardReceiver'
     * @return string 'GateCarFirstPersonExitByCardReceiver'
     */
    const VALUE_GATE_CAR_FIRST_PERSON_EXIT_BY_CARD_RECEIVER = 'GateCarFirstPersonExitByCardReceiver';
    /**
     * Constant for value 'GateCarFirstPersonPassUnknown'
     * @return string 'GateCarFirstPersonPassUnknown'
     */
    const VALUE_GATE_CAR_FIRST_PERSON_PASS_UNKNOWN = 'GateCarFirstPersonPassUnknown';
    /**
     * Constant for value 'GateCarSecondPersonEntry'
     * @return string 'GateCarSecondPersonEntry'
     */
    const VALUE_GATE_CAR_SECOND_PERSON_ENTRY = 'GateCarSecondPersonEntry';
    /**
     * Constant for value 'GateCarSecondPersonExit'
     * @return string 'GateCarSecondPersonExit'
     */
    const VALUE_GATE_CAR_SECOND_PERSON_EXIT = 'GateCarSecondPersonExit';
    /**
     * Constant for value 'GateCarSecondPersonExitByCardReceiver'
     * @return string 'GateCarSecondPersonExitByCardReceiver'
     */
    const VALUE_GATE_CAR_SECOND_PERSON_EXIT_BY_CARD_RECEIVER = 'GateCarSecondPersonExitByCardReceiver';
    /**
     * Constant for value 'GateCarSecondPersonPassUnknown'
     * @return string 'GateCarSecondPersonPassUnknown'
     */
    const VALUE_GATE_CAR_SECOND_PERSON_PASS_UNKNOWN = 'GateCarSecondPersonPassUnknown';
    /**
     * Constant for value 'GateCarPassRefused'
     * @return string 'GateCarPassRefused'
     */
    const VALUE_GATE_CAR_PASS_REFUSED = 'GateCarPassRefused';
    /**
     * Constant for value 'GateCarPassRefusedByKey'
     * @return string 'GateCarPassRefusedByKey'
     */
    const VALUE_GATE_CAR_PASS_REFUSED_BY_KEY = 'GateCarPassRefusedByKey';
    /**
     * Constant for value 'GateCarArrived'
     * @return string 'GateCarArrived'
     */
    const VALUE_GATE_CAR_ARRIVED = 'GateCarArrived';
    /**
     * Constant for value 'Fire'
     * @return string 'Fire'
     */
    const VALUE_FIRE = 'Fire';
    /**
     * Constant for value 'AttentionFireWarning'
     * @return string 'AttentionFireWarning'
     */
    const VALUE_ATTENTION_FIRE_WARNING = 'AttentionFireWarning';
    /**
     * Constant for value 'FireEquipmentFault'
     * @return string 'FireEquipmentFault'
     */
    const VALUE_FIRE_EQUIPMENT_FAULT = 'FireEquipmentFault';
    /**
     * Constant for value 'PenetrationAlarm'
     * @return string 'PenetrationAlarm'
     */
    const VALUE_PENETRATION_ALARM = 'PenetrationAlarm';
    /**
     * Constant for value 'TrainBreak'
     * @return string 'TrainBreak'
     */
    const VALUE_TRAIN_BREAK = 'TrainBreak';
    /**
     * Constant for value 'ElecticNetworkCrash'
     * @return string 'ElecticNetworkCrash'
     */
    const VALUE_ELECTIC_NETWORK_CRASH = 'ElecticNetworkCrash';
    /**
     * Constant for value 'ElectricNetworkRestored'
     * @return string 'ElectricNetworkRestored'
     */
    const VALUE_ELECTRIC_NETWORK_RESTORED = 'ElectricNetworkRestored';
    /**
     * Constant for value 'TemperatureIncrease'
     * @return string 'TemperatureIncrease'
     */
    const VALUE_TEMPERATURE_INCREASE = 'TemperatureIncrease';
    /**
     * Constant for value 'NormalTemperature'
     * @return string 'NormalTemperature'
     */
    const VALUE_NORMAL_TEMPERATURE = 'NormalTemperature';
    /**
     * Constant for value 'InputAlarm'
     * @return string 'InputAlarm'
     */
    const VALUE_INPUT_ALARM = 'InputAlarm';
    /**
     * Constant for value 'OutputShortCurcuit'
     * @return string 'OutputShortCurcuit'
     */
    const VALUE_OUTPUT_SHORT_CURCUIT = 'OutputShortCurcuit';
    /**
     * Constant for value 'OutputBreak'
     * @return string 'OutputBreak'
     */
    const VALUE_OUTPUT_BREAK = 'OutputBreak';
    /**
     * Constant for value 'OutputOff'
     * @return string 'OutputOff'
     */
    const VALUE_OUTPUT_OFF = 'OutputOff';
    /**
     * Constant for value 'OutputOn'
     * @return string 'OutputOn'
     */
    const VALUE_OUTPUT_ON = 'OutputOn';
    /**
     * Constant for value 'OutputRestoration'
     * @return string 'OutputRestoration'
     */
    const VALUE_OUTPUT_RESTORATION = 'OutputRestoration';
    /**
     * Constant for value 'OutputStateChanged'
     * @return string 'OutputStateChanged'
     */
    const VALUE_OUTPUT_STATE_CHANGED = 'OutputStateChanged';
    /**
     * Constant for value 'DeviceCaseOpened'
     * @return string 'DeviceCaseOpened'
     */
    const VALUE_DEVICE_CASE_OPENED = 'DeviceCaseOpened';
    /**
     * Constant for value 'DeviceCaseClosed'
     * @return string 'DeviceCaseClosed'
     */
    const VALUE_DEVICE_CASE_CLOSED = 'DeviceCaseClosed';
    /**
     * Constant for value 'VoiceNotificationOn'
     * @return string 'VoiceNotificationOn'
     */
    const VALUE_VOICE_NOTIFICATION_ON = 'VoiceNotificationOn';
    /**
     * Constant for value 'VoiceNotificationOff'
     * @return string 'VoiceNotificationOff'
     */
    const VALUE_VOICE_NOTIFICATION_OFF = 'VoiceNotificationOff';
    /**
     * Constant for value 'ValveReady'
     * @return string 'ValveReady'
     */
    const VALUE_VALVE_READY = 'ValveReady';
    /**
     * Constant for value 'ValveFault'
     * @return string 'ValveFault'
     */
    const VALUE_VALVE_FAULT = 'ValveFault';
    /**
     * Constant for value 'ValveError'
     * @return string 'ValveError'
     */
    const VALUE_VALVE_ERROR = 'ValveError';
    /**
     * Constant for value 'ValveRestoration'
     * @return string 'ValveRestoration'
     */
    const VALUE_VALVE_RESTORATION = 'ValveRestoration';
    /**
     * Constant for value 'TrainParametersError'
     * @return string 'TrainParametersError'
     */
    const VALUE_TRAIN_PARAMETERS_ERROR = 'TrainParametersError';
    /**
     * Constant for value 'TrainOff'
     * @return string 'TrainOff'
     */
    const VALUE_TRAIN_OFF = 'TrainOff';
    /**
     * Constant for value 'TrainOn'
     * @return string 'TrainOn'
     */
    const VALUE_TRAIN_ON = 'TrainOn';
    /**
     * Constant for value 'DPLS1NotConnected'
     * @return string 'DPLS1NotConnected'
     */
    const VALUE_DPLS_1_NOT_CONNECTED = 'DPLS1NotConnected';
    /**
     * Constant for value 'DPLS2NotConnected'
     * @return string 'DPLS2NotConnected'
     */
    const VALUE_DPLS_2_NOT_CONNECTED = 'DPLS2NotConnected';
    /**
     * Constant for value 'DPLS1ConnectionRestored'
     * @return string 'DPLS1ConnectionRestored'
     */
    const VALUE_DPLS_1_CONNECTION_RESTORED = 'DPLS1ConnectionRestored';
    /**
     * Constant for value 'DPLS2ConnectionRestored'
     * @return string 'DPLS2ConnectionRestored'
     */
    const VALUE_DPLS_2_CONNECTION_RESTORED = 'DPLS2ConnectionRestored';
    /**
     * Constant for value 'DPLSShortCircuit'
     * @return string 'DPLSShortCircuit'
     */
    const VALUE_DPLSSHORT_CIRCUIT = 'DPLSShortCircuit';
    /**
     * Constant for value 'DPLSCrash'
     * @return string 'DPLSCrash'
     */
    const VALUE_DPLSCRASH = 'DPLSCrash';
    /**
     * Constant for value 'TrainShortCircuit'
     * @return string 'TrainShortCircuit'
     */
    const VALUE_TRAIN_SHORT_CIRCUIT = 'TrainShortCircuit';
    /**
     * Constant for value 'SensorTriggered'
     * @return string 'SensorTriggered'
     */
    const VALUE_SENSOR_TRIGGERED = 'SensorTriggered';
    /**
     * Constant for value 'SDUTriggered'
     * @return string 'SDUTriggered'
     */
    const VALUE_SDUTRIGGERED = 'SDUTriggered';
    /**
     * Constant for value 'SDUFault'
     * @return string 'SDUFault'
     */
    const VALUE_SDUFAULT = 'SDUFault';
    /**
     * Constant for value 'ConnectionLost'
     * @return string 'ConnectionLost'
     */
    const VALUE_CONNECTION_LOST = 'ConnectionLost';
    /**
     * Constant for value 'ConnectionRestored'
     * @return string 'ConnectionRestored'
     */
    const VALUE_CONNECTION_RESTORED = 'ConnectionRestored';
    /**
     * Constant for value 'PumpOn'
     * @return string 'PumpOn'
     */
    const VALUE_PUMP_ON = 'PumpOn';
    /**
     * Constant for value 'PumpOff'
     * @return string 'PumpOff'
     */
    const VALUE_PUMP_OFF = 'PumpOff';
    /**
     * Constant for value 'StartCircuitOperation'
     * @return string 'StartCircuitOperation'
     */
    const VALUE_START_CIRCUIT_OPERATION = 'StartCircuitOperation';
    /**
     * Constant for value 'FaultFireFighting'
     * @return string 'FaultFireFighting'
     */
    const VALUE_FAULT_FIRE_FIGHTING = 'FaultFireFighting';
    /**
     * Constant for value 'AutomaticStartDelay'
     * @return string 'AutomaticStartDelay'
     */
    const VALUE_AUTOMATIC_START_DELAY = 'AutomaticStartDelay';
    /**
     * Constant for value 'Extinguishing'
     * @return string 'Extinguishing'
     */
    const VALUE_EXTINGUISHING = 'Extinguishing';
    /**
     * Constant for value 'EmergencyASPTStart'
     * @return string 'EmergencyASPTStart'
     */
    const VALUE_EMERGENCY_ASPTSTART = 'EmergencyASPTStart';
    /**
     * Constant for value 'StartAUP'
     * @return string 'StartAUP'
     */
    const VALUE_START_AUP = 'StartAUP';
    /**
     * Constant for value 'BlockStartAUP'
     * @return string 'BlockStartAUP'
     */
    const VALUE_BLOCK_START_AUP = 'BlockStartAUP';
    /**
     * Constant for value 'AutomaticOn'
     * @return string 'AutomaticOn'
     */
    const VALUE_AUTOMATIC_ON = 'AutomaticOn';
    /**
     * Constant for value 'AutomaticOff'
     * @return string 'AutomaticOff'
     */
    const VALUE_AUTOMATIC_OFF = 'AutomaticOff';
    /**
     * Constant for value 'StopAUP'
     * @return string 'StopAUP'
     */
    const VALUE_STOP_AUP = 'StopAUP';
    /**
     * Constant for value 'AutomaticTestError'
     * @return string 'AutomaticTestError'
     */
    const VALUE_AUTOMATIC_TEST_ERROR = 'AutomaticTestError';
    /**
     * Constant for value 'ManualTest'
     * @return string 'ManualTest'
     */
    const VALUE_MANUAL_TEST = 'ManualTest';
    /**
     * Constant for value 'PowerCrash'
     * @return string 'PowerCrash'
     */
    const VALUE_POWER_CRASH = 'PowerCrash';
    /**
     * Constant for value 'AKBTestError'
     * @return string 'AKBTestError'
     */
    const VALUE_AKBTEST_ERROR = 'AKBTestError';
    /**
     * Constant for value 'AKBDischarged'
     * @return string 'AKBDischarged'
     */
    const VALUE_AKBDISCHARGED = 'AKBDischarged';
    /**
     * Constant for value 'BatteryFault'
     * @return string 'BatteryFault'
     */
    const VALUE_BATTERY_FAULT = 'BatteryFault';
    /**
     * Constant for value 'RIPChargerFault'
     * @return string 'RIPChargerFault'
     */
    const VALUE_RIPCHARGER_FAULT = 'RIPChargerFault';
    /**
     * Constant for value 'RIPOverload'
     * @return string 'RIPOverload'
     */
    const VALUE_RIPOVERLOAD = 'RIPOverload';
    /**
     * Constant for value 'RIPNotOverload'
     * @return string 'RIPNotOverload'
     */
    const VALUE_RIPNOT_OVERLOAD = 'RIPNotOverload';
    /**
     * Constant for value 'RIPChargerRestoration'
     * @return string 'RIPChargerRestoration'
     */
    const VALUE_RIPCHARGER_RESTORATION = 'RIPChargerRestoration';
    /**
     * Constant for value 'PowerRestoration'
     * @return string 'PowerRestoration'
     */
    const VALUE_POWER_RESTORATION = 'PowerRestoration';
    /**
     * Constant for value 'BatteryRestoration'
     * @return string 'BatteryRestoration'
     */
    const VALUE_BATTERY_RESTORATION = 'BatteryRestoration';
    /**
     * Constant for value 'RIPOff'
     * @return string 'RIPOff'
     */
    const VALUE_RIPOFF = 'RIPOff';
    /**
     * Constant for value 'RIPOn'
     * @return string 'RIPOn'
     */
    const VALUE_RIPON = 'RIPOn';
    /**
     * Constant for value 'DeviceRestart'
     * @return string 'DeviceRestart'
     */
    const VALUE_DEVICE_RESTART = 'DeviceRestart';
    /**
     * Constant for value 'NeedMaintenance'
     * @return string 'NeedMaintenance'
     */
    const VALUE_NEED_MAINTENANCE = 'NeedMaintenance';
    /**
     * Constant for value 'RS485Off'
     * @return string 'RS485Off'
     */
    const VALUE_RS_485_OFF = 'RS485Off';
    /**
     * Constant for value 'RS485Restored'
     * @return string 'RS485Restored'
     */
    const VALUE_RS_485_RESTORED = 'RS485Restored';
    /**
     * Constant for value 'TrainDisturbance'
     * @return string 'TrainDisturbance'
     */
    const VALUE_TRAIN_DISTURBANCE = 'TrainDisturbance';
    /**
     * Constant for value 'TrainRestoration'
     * @return string 'TrainRestoration'
     */
    const VALUE_TRAIN_RESTORATION = 'TrainRestoration';
    /**
     * Constant for value 'StopTrainAlarm'
     * @return string 'StopTrainAlarm'
     */
    const VALUE_STOP_TRAIN_ALARM = 'StopTrainAlarm';
    /**
     * Constant for value 'TrainDisarmed'
     * @return string 'TrainDisarmed'
     */
    const VALUE_TRAIN_DISARMED = 'TrainDisarmed';
    /**
     * Constant for value 'ThermometerRestoration'
     * @return string 'ThermometerRestoration'
     */
    const VALUE_THERMOMETER_RESTORATION = 'ThermometerRestoration';
    /**
     * Constant for value 'AlarmWaterLevelIncrease'
     * @return string 'AlarmWaterLevelIncrease'
     */
    const VALUE_ALARM_WATER_LEVEL_INCREASE = 'AlarmWaterLevelIncrease';
    /**
     * Constant for value 'AlarmWaterLevelDecrease'
     * @return string 'AlarmWaterLevelDecrease'
     */
    const VALUE_ALARM_WATER_LEVEL_DECREASE = 'AlarmWaterLevelDecrease';
    /**
     * Constant for value 'WaterLevelIncrease'
     * @return string 'WaterLevelIncrease'
     */
    const VALUE_WATER_LEVEL_INCREASE = 'WaterLevelIncrease';
    /**
     * Constant for value 'NormalWaterLevel'
     * @return string 'NormalWaterLevel'
     */
    const VALUE_NORMAL_WATER_LEVEL = 'NormalWaterLevel';
    /**
     * Constant for value 'WaterLevelDecrease'
     * @return string 'WaterLevelDecrease'
     */
    const VALUE_WATER_LEVEL_DECREASE = 'WaterLevelDecrease';
    /**
     * Constant for value 'SilentAlarm'
     * @return string 'SilentAlarm'
     */
    const VALUE_SILENT_ALARM = 'SilentAlarm';
    /**
     * Constant for value 'DPLSRestoration'
     * @return string 'DPLSRestoration'
     */
    const VALUE_DPLSRESTORATION = 'DPLSRestoration';
    /**
     * Constant for value 'FireEquipmentNormRestoration'
     * @return string 'FireEquipmentNormRestoration'
     */
    const VALUE_FIRE_EQUIPMENT_NORM_RESTORATION = 'FireEquipmentNormRestoration';
    /**
     * Constant for value 'LowTemperature'
     * @return string 'LowTemperature'
     */
    const VALUE_LOW_TEMPERATURE = 'LowTemperature';
    /**
     * Constant for value 'UnknownDevice'
     * @return string 'UnknownDevice'
     */
    const VALUE_UNKNOWN_DEVICE = 'UnknownDevice';
    /**
     * Constant for value 'ControlRestoration'
     * @return string 'ControlRestoration'
     */
    const VALUE_CONTROL_RESTORATION = 'ControlRestoration';
    /**
     * Constant for value 'TrainOnDelay'
     * @return string 'TrainOnDelay'
     */
    const VALUE_TRAIN_ON_DELAY = 'TrainOnDelay';
    /**
     * Constant for value 'TrainArmed'
     * @return string 'TrainArmed'
     */
    const VALUE_TRAIN_ARMED = 'TrainArmed';
    /**
     * Constant for value 'Identification'
     * @return string 'Identification'
     */
    const VALUE_IDENTIFICATION = 'Identification';
    /**
     * Constant for value 'TechTrainRestoration'
     * @return string 'TechTrainRestoration'
     */
    const VALUE_TECH_TRAIN_RESTORATION = 'TechTrainRestoration';
    /**
     * Constant for value 'TechTrainDisturbance'
     * @return string 'TechTrainDisturbance'
     */
    const VALUE_TECH_TRAIN_DISTURBANCE = 'TechTrainDisturbance';
    /**
     * Constant for value 'ThermometerFault'
     * @return string 'ThermometerFault'
     */
    const VALUE_THERMOMETER_FAULT = 'ThermometerFault';
    /**
     * Constant for value 'TechTrainDisturbance2'
     * @return string 'TechTrainDisturbance2'
     */
    const VALUE_TECH_TRAIN_DISTURBANCE_2 = 'TechTrainDisturbance2';
    /**
     * Constant for value 'FailedTrainOn'
     * @return string 'FailedTrainOn'
     */
    const VALUE_FAILED_TRAIN_ON = 'FailedTrainOn';
    /**
     * Constant for value 'InnerZoneRestored'
     * @return string 'InnerZoneRestored'
     */
    const VALUE_INNER_ZONE_RESTORED = 'InnerZoneRestored';
    /**
     * Constant for value 'DepartmentArmed'
     * @return string 'DepartmentArmed'
     */
    const VALUE_DEPARTMENT_ARMED = 'DepartmentArmed';
    /**
     * Constant for value 'DepartmentDisarmed'
     * @return string 'DepartmentDisarmed'
     */
    const VALUE_DEPARTMENT_DISARMED = 'DepartmentDisarmed';
    /**
     * Constant for value 'OrionRelayOn'
     * @return string 'OrionRelayOn'
     */
    const VALUE_ORION_RELAY_ON = 'OrionRelayOn';
    /**
     * Constant for value 'OrionRelayOff'
     * @return string 'OrionRelayOff'
     */
    const VALUE_ORION_RELAY_OFF = 'OrionRelayOff';
    /**
     * Constant for value 'AccessPointEmegancyExitButton'
     * @return string 'AccessPointEmegancyExitButton'
     */
    const VALUE_ACCESS_POINT_EMEGANCY_EXIT_BUTTON = 'AccessPointEmegancyExitButton';
    /**
     * Constant for value 'AccessPointEmegancyExitButtonEnd'
     * @return string 'AccessPointEmegancyExitButtonEnd'
     */
    const VALUE_ACCESS_POINT_EMEGANCY_EXIT_BUTTON_END = 'AccessPointEmegancyExitButtonEnd';
    /**
     * Constant for value 'DoorOpenDenied'
     * @return string 'DoorOpenDenied'
     */
    const VALUE_DOOR_OPEN_DENIED = 'DoorOpenDenied';
    /**
     * Constant for value 'DoorOpen'
     * @return string 'DoorOpen'
     */
    const VALUE_DOOR_OPEN = 'DoorOpen';
    /**
     * Constant for value 'InvalidDoorNumber'
     * @return string 'InvalidDoorNumber'
     */
    const VALUE_INVALID_DOOR_NUMBER = 'InvalidDoorNumber';
    /**
     * Constant for value 'CommunicationModuleRestored'
     * @return string 'CommunicationModuleRestored'
     */
    const VALUE_COMMUNICATION_MODULE_RESTORED = 'CommunicationModuleRestored';
    /**
     * Constant for value 'NewModule'
     * @return string 'NewModule'
     */
    const VALUE_NEW_MODULE = 'NewModule';
    /**
     * Constant for value 'NoCommunicationModule'
     * @return string 'NoCommunicationModule'
     */
    const VALUE_NO_COMMUNICATION_MODULE = 'NoCommunicationModule';
    /**
     * Constant for value 'ImpossibleKeyOperation'
     * @return string 'ImpossibleKeyOperation'
     */
    const VALUE_IMPOSSIBLE_KEY_OPERATION = 'ImpossibleKeyOperation';
    /**
     * Constant for value 'ImpossibleOpenDoor'
     * @return string 'ImpossibleOpenDoor'
     */
    const VALUE_IMPOSSIBLE_OPEN_DOOR = 'ImpossibleOpenDoor';
    /**
     * Constant for value 'BreathalyzerCheckSuccessful'
     * @return string 'BreathalyzerCheckSuccessful'
     */
    const VALUE_BREATHALYZER_CHECK_SUCCESSFUL = 'BreathalyzerCheckSuccessful';
    /**
     * Constant for value 'VerificationTimeExpired'
     * @return string 'VerificationTimeExpired'
     */
    const VALUE_VERIFICATION_TIME_EXPIRED = 'VerificationTimeExpired';
    /**
     * Constant for value 'TimeIntervalProhibition'
     * @return string 'TimeIntervalProhibition'
     */
    const VALUE_TIME_INTERVAL_PROHIBITION = 'TimeIntervalProhibition';
    /**
     * Constant for value 'DataAuthenticationError'
     * @return string 'DataAuthenticationError'
     */
    const VALUE_DATA_AUTHENTICATION_ERROR = 'DataAuthenticationError';
    /**
     * Constant for value 'CardAuthorizationError'
     * @return string 'CardAuthorizationError'
     */
    const VALUE_CARD_AUTHORIZATION_ERROR = 'CardAuthorizationError';
    /**
     * Constant for value 'EnabledOperatorControl'
     * @return string 'EnabledOperatorControl'
     */
    const VALUE_ENABLED_OPERATOR_CONTROL = 'EnabledOperatorControl';
    /**
     * Constant for value 'DisabledOperatorControl'
     * @return string 'DisabledOperatorControl'
     */
    const VALUE_DISABLED_OPERATOR_CONTROL = 'DisabledOperatorControl';
    /**
     * Constant for value 'ReaderTamperAlert'
     * @return string 'ReaderTamperAlert'
     */
    const VALUE_READER_TAMPER_ALERT = 'ReaderTamperAlert';
    /**
     * Constant for value 'ReaderTamperNorm'
     * @return string 'ReaderTamperNorm'
     */
    const VALUE_READER_TAMPER_NORM = 'ReaderTamperNorm';
    /**
     * Constant for value 'ReaderConnectionLost'
     * @return string 'ReaderConnectionLost'
     */
    const VALUE_READER_CONNECTION_LOST = 'ReaderConnectionLost';
    /**
     * Constant for value 'ReaderConnectionRestored'
     * @return string 'ReaderConnectionRestored'
     */
    const VALUE_READER_CONNECTION_RESTORED = 'ReaderConnectionRestored';
    /**
     * Constant for value 'RusgardFacePhotoProcessing'
     * @return string 'RusgardFacePhotoProcessing'
     */
    const VALUE_RUSGARD_FACE_PHOTO_PROCESSING = 'RusgardFacePhotoProcessing';
    /**
     * Constant for value 'BiometricDeviceConnectionLost'
     * @return string 'BiometricDeviceConnectionLost'
     */
    const VALUE_BIOMETRIC_DEVICE_CONNECTION_LOST = 'BiometricDeviceConnectionLost';
    /**
     * Constant for value 'BiometricDeviceConnectionRestored'
     * @return string 'BiometricDeviceConnectionRestored'
     */
    const VALUE_BIOMETRIC_DEVICE_CONNECTION_RESTORED = 'BiometricDeviceConnectionRestored';
    /**
     * Constant for value 'BiometricAutentificationError'
     * @return string 'BiometricAutentificationError'
     */
    const VALUE_BIOMETRIC_AUTENTIFICATION_ERROR = 'BiometricAutentificationError';
    /**
     * Constant for value 'ControllerKeyProcessingError'
     * @return string 'ControllerKeyProcessingError'
     */
    const VALUE_CONTROLLER_KEY_PROCESSING_ERROR = 'ControllerKeyProcessingError';
    /**
     * Constant for value 'BiometricVerificationError'
     * @return string 'BiometricVerificationError'
     */
    const VALUE_BIOMETRIC_VERIFICATION_ERROR = 'BiometricVerificationError';
    /**
     * Constant for value 'AccessPointFaceEntry'
     * @return string 'AccessPointFaceEntry'
     */
    const VALUE_ACCESS_POINT_FACE_ENTRY = 'AccessPointFaceEntry';
    /**
     * Constant for value 'GateFaceEntry'
     * @return string 'GateFaceEntry'
     */
    const VALUE_GATE_FACE_ENTRY = 'GateFaceEntry';
    /**
     * Constant for value 'AccessPointFaceExit'
     * @return string 'AccessPointFaceExit'
     */
    const VALUE_ACCESS_POINT_FACE_EXIT = 'AccessPointFaceExit';
    /**
     * Constant for value 'GateFaceExit'
     * @return string 'GateFaceExit'
     */
    const VALUE_GATE_FACE_EXIT = 'GateFaceExit';
    /**
     * Constant for value 'AccessPointFaceExitByCardReceiver'
     * @return string 'AccessPointFaceExitByCardReceiver'
     */
    const VALUE_ACCESS_POINT_FACE_EXIT_BY_CARD_RECEIVER = 'AccessPointFaceExitByCardReceiver';
    /**
     * Constant for value 'GateFaceExitByCardReceiver'
     * @return string 'GateFaceExitByCardReceiver'
     */
    const VALUE_GATE_FACE_EXIT_BY_CARD_RECEIVER = 'GateFaceExitByCardReceiver';
    /**
     * Constant for value 'AccessPointFaceEntryRefused'
     * @return string 'AccessPointFaceEntryRefused'
     */
    const VALUE_ACCESS_POINT_FACE_ENTRY_REFUSED = 'AccessPointFaceEntryRefused';
    /**
     * Constant for value 'GateFaceEntryRefused'
     * @return string 'GateFaceEntryRefused'
     */
    const VALUE_GATE_FACE_ENTRY_REFUSED = 'GateFaceEntryRefused';
    /**
     * Constant for value 'AccessPointFaceExitRefused'
     * @return string 'AccessPointFaceExitRefused'
     */
    const VALUE_ACCESS_POINT_FACE_EXIT_REFUSED = 'AccessPointFaceExitRefused';
    /**
     * Constant for value 'GateFaceExitRefused'
     * @return string 'GateFaceExitRefused'
     */
    const VALUE_GATE_FACE_EXIT_REFUSED = 'GateFaceExitRefused';
    /**
     * Constant for value 'AccessPointFaceExitRefusedByCardReceiver'
     * @return string 'AccessPointFaceExitRefusedByCardReceiver'
     */
    const VALUE_ACCESS_POINT_FACE_EXIT_REFUSED_BY_CARD_RECEIVER = 'AccessPointFaceExitRefusedByCardReceiver';
    /**
     * Constant for value 'GateFaceExitRefusedByCardReceiver'
     * @return string 'GateFaceExitRefusedByCardReceiver'
     */
    const VALUE_GATE_FACE_EXIT_REFUSED_BY_CARD_RECEIVER = 'GateFaceExitRefusedByCardReceiver';
    /**
     * Constant for value 'AccessPointEntryDeniedNoConfirmFace'
     * @return string 'AccessPointEntryDeniedNoConfirmFace'
     */
    const VALUE_ACCESS_POINT_ENTRY_DENIED_NO_CONFIRM_FACE = 'AccessPointEntryDeniedNoConfirmFace';
    /**
     * Constant for value 'GateFaceEntryDeniedNoConfirmFace'
     * @return string 'GateFaceEntryDeniedNoConfirmFace'
     */
    const VALUE_GATE_FACE_ENTRY_DENIED_NO_CONFIRM_FACE = 'GateFaceEntryDeniedNoConfirmFace';
    /**
     * Constant for value 'AccessPointFaceExitDeniedNoConfirmFace'
     * @return string 'AccessPointFaceExitDeniedNoConfirmFace'
     */
    const VALUE_ACCESS_POINT_FACE_EXIT_DENIED_NO_CONFIRM_FACE = 'AccessPointFaceExitDeniedNoConfirmFace';
    /**
     * Constant for value 'GateFaceExitDeniedNoConfirmFace'
     * @return string 'GateFaceExitDeniedNoConfirmFace'
     */
    const VALUE_GATE_FACE_EXIT_DENIED_NO_CONFIRM_FACE = 'GateFaceExitDeniedNoConfirmFace';
    /**
     * Constant for value 'KeyKeeper_DoorOpenByKeyOrOperator'
     * @return string 'KeyKeeper_DoorOpenByKeyOrOperator'
     */
    const VALUE_KEY_KEEPER_DOOR_OPEN_BY_KEY_OR_OPERATOR = 'KeyKeeper_DoorOpenByKeyOrOperator';
    /**
     * Constant for value 'KeyKeeper_OpenByEmployee'
     * @return string 'KeyKeeper_OpenByEmployee'
     */
    const VALUE_KEY_KEEPER_OPEN_BY_EMPLOYEE = 'KeyKeeper_OpenByEmployee';
    /**
     * Constant for value 'KeyKeeper_DoorLeftOpen'
     * @return string 'KeyKeeper_DoorLeftOpen'
     */
    const VALUE_KEY_KEEPER_DOOR_LEFT_OPEN = 'KeyKeeper_DoorLeftOpen';
    /**
     * Constant for value 'KeyKeeper_DoorClosedNoInfoWhoOpen'
     * @return string 'KeyKeeper_DoorClosedNoInfoWhoOpen'
     */
    const VALUE_KEY_KEEPER_DOOR_CLOSED_NO_INFO_WHO_OPEN = 'KeyKeeper_DoorClosedNoInfoWhoOpen';
    /**
     * Constant for value 'KeyKeeper_DoorClosed'
     * @return string 'KeyKeeper_DoorClosed'
     */
    const VALUE_KEY_KEEPER_DOOR_CLOSED = 'KeyKeeper_DoorClosed';
    /**
     * Constant for value 'KeyKeeper_DoorAccessDenyUnknownKey'
     * @return string 'KeyKeeper_DoorAccessDenyUnknownKey'
     */
    const VALUE_KEY_KEEPER_DOOR_ACCESS_DENY_UNKNOWN_KEY = 'KeyKeeper_DoorAccessDenyUnknownKey';
    /**
     * Constant for value 'KeyKeeper_DoorAccessDenyNoPermission'
     * @return string 'KeyKeeper_DoorAccessDenyNoPermission'
     */
    const VALUE_KEY_KEEPER_DOOR_ACCESS_DENY_NO_PERMISSION = 'KeyKeeper_DoorAccessDenyNoPermission';
    /**
     * Constant for value 'KeyKeeper_DoorOpenedKeyAccessDenyUnknownKey'
     * @return string 'KeyKeeper_DoorOpenedKeyAccessDenyUnknownKey'
     */
    const VALUE_KEY_KEEPER_DOOR_OPENED_KEY_ACCESS_DENY_UNKNOWN_KEY = 'KeyKeeper_DoorOpenedKeyAccessDenyUnknownKey';
    /**
     * Constant for value 'KeyKeeper_DoorOpenedKeyAccessDenyNoPermission'
     * @return string 'KeyKeeper_DoorOpenedKeyAccessDenyNoPermission'
     */
    const VALUE_KEY_KEEPER_DOOR_OPENED_KEY_ACCESS_DENY_NO_PERMISSION = 'KeyKeeper_DoorOpenedKeyAccessDenyNoPermission';
    /**
     * Constant for value 'KeyKeeper_EmployeeGaveKey'
     * @return string 'KeyKeeper_EmployeeGaveKey'
     */
    const VALUE_KEY_KEEPER_EMPLOYEE_GAVE_KEY = 'KeyKeeper_EmployeeGaveKey';
    /**
     * Constant for value 'KeyKeeper_EmployeeGaveUnknownKey'
     * @return string 'KeyKeeper_EmployeeGaveUnknownKey'
     */
    const VALUE_KEY_KEEPER_EMPLOYEE_GAVE_UNKNOWN_KEY = 'KeyKeeper_EmployeeGaveUnknownKey';
    /**
     * Constant for value 'KeyKeeper_EmployeeGaveUnknownThing'
     * @return string 'KeyKeeper_EmployeeGaveUnknownThing'
     */
    const VALUE_KEY_KEEPER_EMPLOYEE_GAVE_UNKNOWN_THING = 'KeyKeeper_EmployeeGaveUnknownThing';
    /**
     * Constant for value 'KeyKeeper_UnknownEmployeeGaveKey'
     * @return string 'KeyKeeper_UnknownEmployeeGaveKey'
     */
    const VALUE_KEY_KEEPER_UNKNOWN_EMPLOYEE_GAVE_KEY = 'KeyKeeper_UnknownEmployeeGaveKey';
    /**
     * Constant for value 'KeyKeeper_UnknownEmployeeGaveUnknownKey'
     * @return string 'KeyKeeper_UnknownEmployeeGaveUnknownKey'
     */
    const VALUE_KEY_KEEPER_UNKNOWN_EMPLOYEE_GAVE_UNKNOWN_KEY = 'KeyKeeper_UnknownEmployeeGaveUnknownKey';
    /**
     * Constant for value 'KeyKeeper_UnknownEmployeeGaveUnknownThing'
     * @return string 'KeyKeeper_UnknownEmployeeGaveUnknownThing'
     */
    const VALUE_KEY_KEEPER_UNKNOWN_EMPLOYEE_GAVE_UNKNOWN_THING = 'KeyKeeper_UnknownEmployeeGaveUnknownThing';
    /**
     * Constant for value 'KeyKeeper_EmployeeTakeKey'
     * @return string 'KeyKeeper_EmployeeTakeKey'
     */
    const VALUE_KEY_KEEPER_EMPLOYEE_TAKE_KEY = 'KeyKeeper_EmployeeTakeKey';
    /**
     * Constant for value 'KeyKeeper_EmployeeTakeUnknownKey'
     * @return string 'KeyKeeper_EmployeeTakeUnknownKey'
     */
    const VALUE_KEY_KEEPER_EMPLOYEE_TAKE_UNKNOWN_KEY = 'KeyKeeper_EmployeeTakeUnknownKey';
    /**
     * Constant for value 'KeyKeeper_EmployeeTakeUnknownThing'
     * @return string 'KeyKeeper_EmployeeTakeUnknownThing'
     */
    const VALUE_KEY_KEEPER_EMPLOYEE_TAKE_UNKNOWN_THING = 'KeyKeeper_EmployeeTakeUnknownThing';
    /**
     * Constant for value 'KeyKeeper_UnknownEmployeeTakeKey'
     * @return string 'KeyKeeper_UnknownEmployeeTakeKey'
     */
    const VALUE_KEY_KEEPER_UNKNOWN_EMPLOYEE_TAKE_KEY = 'KeyKeeper_UnknownEmployeeTakeKey';
    /**
     * Constant for value 'KeyKeeper_UnknownEmployeeTakeUnknownKey'
     * @return string 'KeyKeeper_UnknownEmployeeTakeUnknownKey'
     */
    const VALUE_KEY_KEEPER_UNKNOWN_EMPLOYEE_TAKE_UNKNOWN_KEY = 'KeyKeeper_UnknownEmployeeTakeUnknownKey';
    /**
     * Constant for value 'KeyKeeper_UnknownEmployeeTakeUnknownThing'
     * @return string 'KeyKeeper_UnknownEmployeeTakeUnknownThing'
     */
    const VALUE_KEY_KEEPER_UNKNOWN_EMPLOYEE_TAKE_UNKNOWN_THING = 'KeyKeeper_UnknownEmployeeTakeUnknownThing';
    /**
     * Return allowed values
     * @uses self::VALUE_CONTROLLER_RELOAD
     * @uses self::VALUE_DEVICE_STATE_CHANGED
     * @uses self::VALUE_DRIVER_METHOD_CALL
     * @uses self::VALUE_CONTROLLER_TAMPER_ALARM
     * @uses self::VALUE_CONTROLLER_TAMPER_NORM
     * @uses self::VALUE_CONTROLLER_POWER_NORM
     * @uses self::VALUE_CONTROLLER_POWER_BACKUP
     * @uses self::VALUE_CONTROLLER_ACCUMULATOR_NORM
     * @uses self::VALUE_CONTROLLER_ACCUMULATOR_DISCHARGED
     * @uses self::VALUE_CONTROLLER_POWER_CHANNEL_SHORT_CIRCUIT
     * @uses self::VALUE_CONTROLLER_POWER_CHANNEL_END_SHORT_CIRCUIT
     * @uses self::VALUE_CONTROLLER_HARDWARE_FAILURE
     * @uses self::VALUE_ACCESS_POINT_ALARM
     * @uses self::VALUE_ACCESS_POINT_BROKEN
     * @uses self::VALUE_ACCESS_POINT_ARMED_GUARD
     * @uses self::VALUE_ACCESS_POINT_DISARMED_GUARD
     * @uses self::VALUE_ACCESS_POINT_BLOCKED
     * @uses self::VALUE_ACCESS_POINT_UNBLOCKED
     * @uses self::VALUE_ACCESS_POINT_ARM_GUARD_DENIED_ACCESS
     * @uses self::VALUE_ACCESS_POINT_BLOCK_DENIED_ACCESS
     * @uses self::VALUE_ACCESS_POINT_ARM_GUARD_DENIED_SENSOR
     * @uses self::VALUE_ACCESS_POINT_EMERGENCY_OPENED
     * @uses self::VALUE_ACCESS_POINT_EMERGENCY_END
     * @uses self::VALUE_ACCESS_POINT_EMERGENCY_END_DENIED_BUTTON
     * @uses self::VALUE_ACCESS_POINT_PASS_DENIED
     * @uses self::VALUE_ACCESS_POINT_KEY_QUERY
     * @uses self::VALUE_ACCESS_POINT_ENTRY
     * @uses self::VALUE_ACCESS_POINT_EXIT
     * @uses self::VALUE_ACCESS_POINT_EXIT_BY_CARD_RECEIVER
     * @uses self::VALUE_ACCESS_POINT_PASS_UNKNOWN
     * @uses self::VALUE_ACCESS_POINT_FIRST_PERSON_ENTRY
     * @uses self::VALUE_ACCESS_POINT_FIRST_PERSON_EXIT
     * @uses self::VALUE_ACCESS_POINT_FIRST_PERSON_EXIT_BY_CARD_RECEIVER
     * @uses self::VALUE_ACCESS_POINT_FIRST_PERSON_PASS_UNKNOWN
     * @uses self::VALUE_ACCESS_POINT_SECOND_PERSON_ENTRY
     * @uses self::VALUE_ACCESS_POINT_SECOND_PERSON_EXIT
     * @uses self::VALUE_ACCESS_POINT_SECOND_PERSON_EXIT_BY_CARD_RECEIVER
     * @uses self::VALUE_ACCESS_POINT_SECOND_PERSON_PASS_UNKNOWN
     * @uses self::VALUE_ACCESS_POINT_PASS_REFUSED
     * @uses self::VALUE_ACCESS_POINT_ENTERED_PIN_UNDER_COMPULSION
     * @uses self::VALUE_ACCESS_POINT_DOOR_LEFT_OPENED
     * @uses self::VALUE_ACCESS_POINT_DOOR_LONG_OPENED
     * @uses self::VALUE_ACCESS_POINT_DOOR_LONG_OPENED_END
     * @uses self::VALUE_ACCESS_POINT_NOT_RECEIVED_PERMISSION_TO_PASS
     * @uses self::VALUE_ACCESS_POINT_BUTTON_PRESSED
     * @uses self::VALUE_ACCESS_POINT_ON_GUARD_DELAY_STARTED
     * @uses self::VALUE_ACCESS_POINT_SIREN_ON
     * @uses self::VALUE_ACCESS_POINT_SIREN_OFF
     * @uses self::VALUE_ACCESS_POINT_CARD_READER_TAMPER_ALERT
     * @uses self::VALUE_ACCESS_POINT_CARD_READER_TAMPER_NORM
     * @uses self::VALUE_DRIVER_ACTIVATED
     * @uses self::VALUE_DRIVER_DEACTIVATED
     * @uses self::VALUE_DEVICE_ONLINE
     * @uses self::VALUE_DEVICE_OFFLINE
     * @uses self::VALUE_ACCESS_POINT_CARD_READER_CONTAINER_FULL
     * @uses self::VALUE_ACCESS_POINT_END_BROKEN
     * @uses self::VALUE_ACCESS_POINT_ALARM_DELAY_STARTED
     * @uses self::VALUE_ACCESS_POINT_DOOR_CLOSED
     * @uses self::VALUE_CONVERTER_NOT_FOUND
     * @uses self::VALUE_CONVERTER_NO_DEVICES_ON_CAN_BUS
     * @uses self::VALUE_CONVERTER_OK
     * @uses self::VALUE_ACCESS_POINT_ARMED_GUARD_BY_KEY
     * @uses self::VALUE_ACCESS_POINT_DISARMED_GUARD_BY_KEY
     * @uses self::VALUE_ACCESS_POINT_BLOCKED_BY_KEY
     * @uses self::VALUE_ACCESS_POINT_UNBLOCKED_BY_KEY
     * @uses self::VALUE_ACCESS_POINT_ARM_GUARD_DENIED_SENSOR_BY_KEY
     * @uses self::VALUE_ACCESS_POINT_ENTRY_BY_KEY
     * @uses self::VALUE_ACCESS_POINT_EXIT_BY_KEY
     * @uses self::VALUE_ACCESS_POINT_PASS_UNKNOWN_BY_KEY
     * @uses self::VALUE_ACCESS_POINT_PASS_REFUSED_BY_KEY
     * @uses self::VALUE_ACCESS_POINT_DOOR_LONG_OPENED_BY_KEY
     * @uses self::VALUE_ACCESS_POINT_DOOR_LONG_OPENED_END_BY_KEY
     * @uses self::VALUE_ACCESS_POINT_ON_GUARD_DELAY_STARTED_BY_KEY
     * @uses self::VALUE_ACCESS_POINT_DOOR_LEFT_OPENED_BY_KEY
     * @uses self::VALUE_ACCESS_POINT_DOOR_CLOSED_BY_KEY
     * @uses self::VALUE_ACCESS_POINT_KEY_APPLIED_ENTRY
     * @uses self::VALUE_ACCESS_POINT_KEY_APPLIED_EXIT
     * @uses self::VALUE_GATE_CAR_PASS_DENIED
     * @uses self::VALUE_GATE_CAR_KEY_APPLIED_ENTRY
     * @uses self::VALUE_GATE_CAR_KEY_APPLIED_EXIT
     * @uses self::VALUE_GATE_CAR_KEY_QUERY
     * @uses self::VALUE_GATE_CAR_ENTRY
     * @uses self::VALUE_GATE_CAR_EXIT
     * @uses self::VALUE_GATE_CAR_EXIT_BY_CARD_RECEIVER
     * @uses self::VALUE_GATE_CAR_PASS_UNKNOWN
     * @uses self::VALUE_GATE_CAR_ENTRY_BY_KEY
     * @uses self::VALUE_GATE_CAR_EXIT_BY_KEY
     * @uses self::VALUE_GATE_CAR_PASS_UNKNOWN_BY_KEY
     * @uses self::VALUE_GATE_CAR_FIRST_PERSON_ENTRY
     * @uses self::VALUE_GATE_CAR_FIRST_PERSON_EXIT
     * @uses self::VALUE_GATE_CAR_FIRST_PERSON_EXIT_BY_CARD_RECEIVER
     * @uses self::VALUE_GATE_CAR_FIRST_PERSON_PASS_UNKNOWN
     * @uses self::VALUE_GATE_CAR_SECOND_PERSON_ENTRY
     * @uses self::VALUE_GATE_CAR_SECOND_PERSON_EXIT
     * @uses self::VALUE_GATE_CAR_SECOND_PERSON_EXIT_BY_CARD_RECEIVER
     * @uses self::VALUE_GATE_CAR_SECOND_PERSON_PASS_UNKNOWN
     * @uses self::VALUE_GATE_CAR_PASS_REFUSED
     * @uses self::VALUE_GATE_CAR_PASS_REFUSED_BY_KEY
     * @uses self::VALUE_GATE_CAR_ARRIVED
     * @uses self::VALUE_FIRE
     * @uses self::VALUE_ATTENTION_FIRE_WARNING
     * @uses self::VALUE_FIRE_EQUIPMENT_FAULT
     * @uses self::VALUE_PENETRATION_ALARM
     * @uses self::VALUE_TRAIN_BREAK
     * @uses self::VALUE_ELECTIC_NETWORK_CRASH
     * @uses self::VALUE_ELECTRIC_NETWORK_RESTORED
     * @uses self::VALUE_TEMPERATURE_INCREASE
     * @uses self::VALUE_NORMAL_TEMPERATURE
     * @uses self::VALUE_INPUT_ALARM
     * @uses self::VALUE_OUTPUT_SHORT_CURCUIT
     * @uses self::VALUE_OUTPUT_BREAK
     * @uses self::VALUE_OUTPUT_OFF
     * @uses self::VALUE_OUTPUT_ON
     * @uses self::VALUE_OUTPUT_RESTORATION
     * @uses self::VALUE_OUTPUT_STATE_CHANGED
     * @uses self::VALUE_DEVICE_CASE_OPENED
     * @uses self::VALUE_DEVICE_CASE_CLOSED
     * @uses self::VALUE_VOICE_NOTIFICATION_ON
     * @uses self::VALUE_VOICE_NOTIFICATION_OFF
     * @uses self::VALUE_VALVE_READY
     * @uses self::VALUE_VALVE_FAULT
     * @uses self::VALUE_VALVE_ERROR
     * @uses self::VALUE_VALVE_RESTORATION
     * @uses self::VALUE_TRAIN_PARAMETERS_ERROR
     * @uses self::VALUE_TRAIN_OFF
     * @uses self::VALUE_TRAIN_ON
     * @uses self::VALUE_DPLS_1_NOT_CONNECTED
     * @uses self::VALUE_DPLS_2_NOT_CONNECTED
     * @uses self::VALUE_DPLS_1_CONNECTION_RESTORED
     * @uses self::VALUE_DPLS_2_CONNECTION_RESTORED
     * @uses self::VALUE_DPLSSHORT_CIRCUIT
     * @uses self::VALUE_DPLSCRASH
     * @uses self::VALUE_TRAIN_SHORT_CIRCUIT
     * @uses self::VALUE_SENSOR_TRIGGERED
     * @uses self::VALUE_SDUTRIGGERED
     * @uses self::VALUE_SDUFAULT
     * @uses self::VALUE_CONNECTION_LOST
     * @uses self::VALUE_CONNECTION_RESTORED
     * @uses self::VALUE_PUMP_ON
     * @uses self::VALUE_PUMP_OFF
     * @uses self::VALUE_START_CIRCUIT_OPERATION
     * @uses self::VALUE_FAULT_FIRE_FIGHTING
     * @uses self::VALUE_AUTOMATIC_START_DELAY
     * @uses self::VALUE_EXTINGUISHING
     * @uses self::VALUE_EMERGENCY_ASPTSTART
     * @uses self::VALUE_START_AUP
     * @uses self::VALUE_BLOCK_START_AUP
     * @uses self::VALUE_AUTOMATIC_ON
     * @uses self::VALUE_AUTOMATIC_OFF
     * @uses self::VALUE_STOP_AUP
     * @uses self::VALUE_AUTOMATIC_TEST_ERROR
     * @uses self::VALUE_MANUAL_TEST
     * @uses self::VALUE_POWER_CRASH
     * @uses self::VALUE_AKBTEST_ERROR
     * @uses self::VALUE_AKBDISCHARGED
     * @uses self::VALUE_BATTERY_FAULT
     * @uses self::VALUE_RIPCHARGER_FAULT
     * @uses self::VALUE_RIPOVERLOAD
     * @uses self::VALUE_RIPNOT_OVERLOAD
     * @uses self::VALUE_RIPCHARGER_RESTORATION
     * @uses self::VALUE_POWER_RESTORATION
     * @uses self::VALUE_BATTERY_RESTORATION
     * @uses self::VALUE_RIPOFF
     * @uses self::VALUE_RIPON
     * @uses self::VALUE_DEVICE_RESTART
     * @uses self::VALUE_NEED_MAINTENANCE
     * @uses self::VALUE_RS_485_OFF
     * @uses self::VALUE_RS_485_RESTORED
     * @uses self::VALUE_TRAIN_DISTURBANCE
     * @uses self::VALUE_TRAIN_RESTORATION
     * @uses self::VALUE_STOP_TRAIN_ALARM
     * @uses self::VALUE_TRAIN_DISARMED
     * @uses self::VALUE_THERMOMETER_RESTORATION
     * @uses self::VALUE_ALARM_WATER_LEVEL_INCREASE
     * @uses self::VALUE_ALARM_WATER_LEVEL_DECREASE
     * @uses self::VALUE_WATER_LEVEL_INCREASE
     * @uses self::VALUE_NORMAL_WATER_LEVEL
     * @uses self::VALUE_WATER_LEVEL_DECREASE
     * @uses self::VALUE_SILENT_ALARM
     * @uses self::VALUE_DPLSRESTORATION
     * @uses self::VALUE_FIRE_EQUIPMENT_NORM_RESTORATION
     * @uses self::VALUE_LOW_TEMPERATURE
     * @uses self::VALUE_UNKNOWN_DEVICE
     * @uses self::VALUE_CONTROL_RESTORATION
     * @uses self::VALUE_TRAIN_ON_DELAY
     * @uses self::VALUE_TRAIN_ARMED
     * @uses self::VALUE_IDENTIFICATION
     * @uses self::VALUE_TECH_TRAIN_RESTORATION
     * @uses self::VALUE_TECH_TRAIN_DISTURBANCE
     * @uses self::VALUE_THERMOMETER_FAULT
     * @uses self::VALUE_TECH_TRAIN_DISTURBANCE_2
     * @uses self::VALUE_FAILED_TRAIN_ON
     * @uses self::VALUE_INNER_ZONE_RESTORED
     * @uses self::VALUE_DEPARTMENT_ARMED
     * @uses self::VALUE_DEPARTMENT_DISARMED
     * @uses self::VALUE_ORION_RELAY_ON
     * @uses self::VALUE_ORION_RELAY_OFF
     * @uses self::VALUE_ACCESS_POINT_EMEGANCY_EXIT_BUTTON
     * @uses self::VALUE_ACCESS_POINT_EMEGANCY_EXIT_BUTTON_END
     * @uses self::VALUE_DOOR_OPEN_DENIED
     * @uses self::VALUE_DOOR_OPEN
     * @uses self::VALUE_INVALID_DOOR_NUMBER
     * @uses self::VALUE_COMMUNICATION_MODULE_RESTORED
     * @uses self::VALUE_NEW_MODULE
     * @uses self::VALUE_NO_COMMUNICATION_MODULE
     * @uses self::VALUE_IMPOSSIBLE_KEY_OPERATION
     * @uses self::VALUE_IMPOSSIBLE_OPEN_DOOR
     * @uses self::VALUE_BREATHALYZER_CHECK_SUCCESSFUL
     * @uses self::VALUE_VERIFICATION_TIME_EXPIRED
     * @uses self::VALUE_TIME_INTERVAL_PROHIBITION
     * @uses self::VALUE_DATA_AUTHENTICATION_ERROR
     * @uses self::VALUE_CARD_AUTHORIZATION_ERROR
     * @uses self::VALUE_ENABLED_OPERATOR_CONTROL
     * @uses self::VALUE_DISABLED_OPERATOR_CONTROL
     * @uses self::VALUE_READER_TAMPER_ALERT
     * @uses self::VALUE_READER_TAMPER_NORM
     * @uses self::VALUE_READER_CONNECTION_LOST
     * @uses self::VALUE_READER_CONNECTION_RESTORED
     * @uses self::VALUE_RUSGARD_FACE_PHOTO_PROCESSING
     * @uses self::VALUE_BIOMETRIC_DEVICE_CONNECTION_LOST
     * @uses self::VALUE_BIOMETRIC_DEVICE_CONNECTION_RESTORED
     * @uses self::VALUE_BIOMETRIC_AUTENTIFICATION_ERROR
     * @uses self::VALUE_CONTROLLER_KEY_PROCESSING_ERROR
     * @uses self::VALUE_BIOMETRIC_VERIFICATION_ERROR
     * @uses self::VALUE_ACCESS_POINT_FACE_ENTRY
     * @uses self::VALUE_GATE_FACE_ENTRY
     * @uses self::VALUE_ACCESS_POINT_FACE_EXIT
     * @uses self::VALUE_GATE_FACE_EXIT
     * @uses self::VALUE_ACCESS_POINT_FACE_EXIT_BY_CARD_RECEIVER
     * @uses self::VALUE_GATE_FACE_EXIT_BY_CARD_RECEIVER
     * @uses self::VALUE_ACCESS_POINT_FACE_ENTRY_REFUSED
     * @uses self::VALUE_GATE_FACE_ENTRY_REFUSED
     * @uses self::VALUE_ACCESS_POINT_FACE_EXIT_REFUSED
     * @uses self::VALUE_GATE_FACE_EXIT_REFUSED
     * @uses self::VALUE_ACCESS_POINT_FACE_EXIT_REFUSED_BY_CARD_RECEIVER
     * @uses self::VALUE_GATE_FACE_EXIT_REFUSED_BY_CARD_RECEIVER
     * @uses self::VALUE_ACCESS_POINT_ENTRY_DENIED_NO_CONFIRM_FACE
     * @uses self::VALUE_GATE_FACE_ENTRY_DENIED_NO_CONFIRM_FACE
     * @uses self::VALUE_ACCESS_POINT_FACE_EXIT_DENIED_NO_CONFIRM_FACE
     * @uses self::VALUE_GATE_FACE_EXIT_DENIED_NO_CONFIRM_FACE
     * @uses self::VALUE_KEY_KEEPER_DOOR_OPEN_BY_KEY_OR_OPERATOR
     * @uses self::VALUE_KEY_KEEPER_OPEN_BY_EMPLOYEE
     * @uses self::VALUE_KEY_KEEPER_DOOR_LEFT_OPEN
     * @uses self::VALUE_KEY_KEEPER_DOOR_CLOSED_NO_INFO_WHO_OPEN
     * @uses self::VALUE_KEY_KEEPER_DOOR_CLOSED
     * @uses self::VALUE_KEY_KEEPER_DOOR_ACCESS_DENY_UNKNOWN_KEY
     * @uses self::VALUE_KEY_KEEPER_DOOR_ACCESS_DENY_NO_PERMISSION
     * @uses self::VALUE_KEY_KEEPER_DOOR_OPENED_KEY_ACCESS_DENY_UNKNOWN_KEY
     * @uses self::VALUE_KEY_KEEPER_DOOR_OPENED_KEY_ACCESS_DENY_NO_PERMISSION
     * @uses self::VALUE_KEY_KEEPER_EMPLOYEE_GAVE_KEY
     * @uses self::VALUE_KEY_KEEPER_EMPLOYEE_GAVE_UNKNOWN_KEY
     * @uses self::VALUE_KEY_KEEPER_EMPLOYEE_GAVE_UNKNOWN_THING
     * @uses self::VALUE_KEY_KEEPER_UNKNOWN_EMPLOYEE_GAVE_KEY
     * @uses self::VALUE_KEY_KEEPER_UNKNOWN_EMPLOYEE_GAVE_UNKNOWN_KEY
     * @uses self::VALUE_KEY_KEEPER_UNKNOWN_EMPLOYEE_GAVE_UNKNOWN_THING
     * @uses self::VALUE_KEY_KEEPER_EMPLOYEE_TAKE_KEY
     * @uses self::VALUE_KEY_KEEPER_EMPLOYEE_TAKE_UNKNOWN_KEY
     * @uses self::VALUE_KEY_KEEPER_EMPLOYEE_TAKE_UNKNOWN_THING
     * @uses self::VALUE_KEY_KEEPER_UNKNOWN_EMPLOYEE_TAKE_KEY
     * @uses self::VALUE_KEY_KEEPER_UNKNOWN_EMPLOYEE_TAKE_UNKNOWN_KEY
     * @uses self::VALUE_KEY_KEEPER_UNKNOWN_EMPLOYEE_TAKE_UNKNOWN_THING
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CONTROLLER_RELOAD,
            self::VALUE_DEVICE_STATE_CHANGED,
            self::VALUE_DRIVER_METHOD_CALL,
            self::VALUE_CONTROLLER_TAMPER_ALARM,
            self::VALUE_CONTROLLER_TAMPER_NORM,
            self::VALUE_CONTROLLER_POWER_NORM,
            self::VALUE_CONTROLLER_POWER_BACKUP,
            self::VALUE_CONTROLLER_ACCUMULATOR_NORM,
            self::VALUE_CONTROLLER_ACCUMULATOR_DISCHARGED,
            self::VALUE_CONTROLLER_POWER_CHANNEL_SHORT_CIRCUIT,
            self::VALUE_CONTROLLER_POWER_CHANNEL_END_SHORT_CIRCUIT,
            self::VALUE_CONTROLLER_HARDWARE_FAILURE,
            self::VALUE_ACCESS_POINT_ALARM,
            self::VALUE_ACCESS_POINT_BROKEN,
            self::VALUE_ACCESS_POINT_ARMED_GUARD,
            self::VALUE_ACCESS_POINT_DISARMED_GUARD,
            self::VALUE_ACCESS_POINT_BLOCKED,
            self::VALUE_ACCESS_POINT_UNBLOCKED,
            self::VALUE_ACCESS_POINT_ARM_GUARD_DENIED_ACCESS,
            self::VALUE_ACCESS_POINT_BLOCK_DENIED_ACCESS,
            self::VALUE_ACCESS_POINT_ARM_GUARD_DENIED_SENSOR,
            self::VALUE_ACCESS_POINT_EMERGENCY_OPENED,
            self::VALUE_ACCESS_POINT_EMERGENCY_END,
            self::VALUE_ACCESS_POINT_EMERGENCY_END_DENIED_BUTTON,
            self::VALUE_ACCESS_POINT_PASS_DENIED,
            self::VALUE_ACCESS_POINT_KEY_QUERY,
            self::VALUE_ACCESS_POINT_ENTRY,
            self::VALUE_ACCESS_POINT_EXIT,
            self::VALUE_ACCESS_POINT_EXIT_BY_CARD_RECEIVER,
            self::VALUE_ACCESS_POINT_PASS_UNKNOWN,
            self::VALUE_ACCESS_POINT_FIRST_PERSON_ENTRY,
            self::VALUE_ACCESS_POINT_FIRST_PERSON_EXIT,
            self::VALUE_ACCESS_POINT_FIRST_PERSON_EXIT_BY_CARD_RECEIVER,
            self::VALUE_ACCESS_POINT_FIRST_PERSON_PASS_UNKNOWN,
            self::VALUE_ACCESS_POINT_SECOND_PERSON_ENTRY,
            self::VALUE_ACCESS_POINT_SECOND_PERSON_EXIT,
            self::VALUE_ACCESS_POINT_SECOND_PERSON_EXIT_BY_CARD_RECEIVER,
            self::VALUE_ACCESS_POINT_SECOND_PERSON_PASS_UNKNOWN,
            self::VALUE_ACCESS_POINT_PASS_REFUSED,
            self::VALUE_ACCESS_POINT_ENTERED_PIN_UNDER_COMPULSION,
            self::VALUE_ACCESS_POINT_DOOR_LEFT_OPENED,
            self::VALUE_ACCESS_POINT_DOOR_LONG_OPENED,
            self::VALUE_ACCESS_POINT_DOOR_LONG_OPENED_END,
            self::VALUE_ACCESS_POINT_NOT_RECEIVED_PERMISSION_TO_PASS,
            self::VALUE_ACCESS_POINT_BUTTON_PRESSED,
            self::VALUE_ACCESS_POINT_ON_GUARD_DELAY_STARTED,
            self::VALUE_ACCESS_POINT_SIREN_ON,
            self::VALUE_ACCESS_POINT_SIREN_OFF,
            self::VALUE_ACCESS_POINT_CARD_READER_TAMPER_ALERT,
            self::VALUE_ACCESS_POINT_CARD_READER_TAMPER_NORM,
            self::VALUE_DRIVER_ACTIVATED,
            self::VALUE_DRIVER_DEACTIVATED,
            self::VALUE_DEVICE_ONLINE,
            self::VALUE_DEVICE_OFFLINE,
            self::VALUE_ACCESS_POINT_CARD_READER_CONTAINER_FULL,
            self::VALUE_ACCESS_POINT_END_BROKEN,
            self::VALUE_ACCESS_POINT_ALARM_DELAY_STARTED,
            self::VALUE_ACCESS_POINT_DOOR_CLOSED,
            self::VALUE_CONVERTER_NOT_FOUND,
            self::VALUE_CONVERTER_NO_DEVICES_ON_CAN_BUS,
            self::VALUE_CONVERTER_OK,
            self::VALUE_ACCESS_POINT_ARMED_GUARD_BY_KEY,
            self::VALUE_ACCESS_POINT_DISARMED_GUARD_BY_KEY,
            self::VALUE_ACCESS_POINT_BLOCKED_BY_KEY,
            self::VALUE_ACCESS_POINT_UNBLOCKED_BY_KEY,
            self::VALUE_ACCESS_POINT_ARM_GUARD_DENIED_SENSOR_BY_KEY,
            self::VALUE_ACCESS_POINT_ENTRY_BY_KEY,
            self::VALUE_ACCESS_POINT_EXIT_BY_KEY,
            self::VALUE_ACCESS_POINT_PASS_UNKNOWN_BY_KEY,
            self::VALUE_ACCESS_POINT_PASS_REFUSED_BY_KEY,
            self::VALUE_ACCESS_POINT_DOOR_LONG_OPENED_BY_KEY,
            self::VALUE_ACCESS_POINT_DOOR_LONG_OPENED_END_BY_KEY,
            self::VALUE_ACCESS_POINT_ON_GUARD_DELAY_STARTED_BY_KEY,
            self::VALUE_ACCESS_POINT_DOOR_LEFT_OPENED_BY_KEY,
            self::VALUE_ACCESS_POINT_DOOR_CLOSED_BY_KEY,
            self::VALUE_ACCESS_POINT_KEY_APPLIED_ENTRY,
            self::VALUE_ACCESS_POINT_KEY_APPLIED_EXIT,
            self::VALUE_GATE_CAR_PASS_DENIED,
            self::VALUE_GATE_CAR_KEY_APPLIED_ENTRY,
            self::VALUE_GATE_CAR_KEY_APPLIED_EXIT,
            self::VALUE_GATE_CAR_KEY_QUERY,
            self::VALUE_GATE_CAR_ENTRY,
            self::VALUE_GATE_CAR_EXIT,
            self::VALUE_GATE_CAR_EXIT_BY_CARD_RECEIVER,
            self::VALUE_GATE_CAR_PASS_UNKNOWN,
            self::VALUE_GATE_CAR_ENTRY_BY_KEY,
            self::VALUE_GATE_CAR_EXIT_BY_KEY,
            self::VALUE_GATE_CAR_PASS_UNKNOWN_BY_KEY,
            self::VALUE_GATE_CAR_FIRST_PERSON_ENTRY,
            self::VALUE_GATE_CAR_FIRST_PERSON_EXIT,
            self::VALUE_GATE_CAR_FIRST_PERSON_EXIT_BY_CARD_RECEIVER,
            self::VALUE_GATE_CAR_FIRST_PERSON_PASS_UNKNOWN,
            self::VALUE_GATE_CAR_SECOND_PERSON_ENTRY,
            self::VALUE_GATE_CAR_SECOND_PERSON_EXIT,
            self::VALUE_GATE_CAR_SECOND_PERSON_EXIT_BY_CARD_RECEIVER,
            self::VALUE_GATE_CAR_SECOND_PERSON_PASS_UNKNOWN,
            self::VALUE_GATE_CAR_PASS_REFUSED,
            self::VALUE_GATE_CAR_PASS_REFUSED_BY_KEY,
            self::VALUE_GATE_CAR_ARRIVED,
            self::VALUE_FIRE,
            self::VALUE_ATTENTION_FIRE_WARNING,
            self::VALUE_FIRE_EQUIPMENT_FAULT,
            self::VALUE_PENETRATION_ALARM,
            self::VALUE_TRAIN_BREAK,
            self::VALUE_ELECTIC_NETWORK_CRASH,
            self::VALUE_ELECTRIC_NETWORK_RESTORED,
            self::VALUE_TEMPERATURE_INCREASE,
            self::VALUE_NORMAL_TEMPERATURE,
            self::VALUE_INPUT_ALARM,
            self::VALUE_OUTPUT_SHORT_CURCUIT,
            self::VALUE_OUTPUT_BREAK,
            self::VALUE_OUTPUT_OFF,
            self::VALUE_OUTPUT_ON,
            self::VALUE_OUTPUT_RESTORATION,
            self::VALUE_OUTPUT_STATE_CHANGED,
            self::VALUE_DEVICE_CASE_OPENED,
            self::VALUE_DEVICE_CASE_CLOSED,
            self::VALUE_VOICE_NOTIFICATION_ON,
            self::VALUE_VOICE_NOTIFICATION_OFF,
            self::VALUE_VALVE_READY,
            self::VALUE_VALVE_FAULT,
            self::VALUE_VALVE_ERROR,
            self::VALUE_VALVE_RESTORATION,
            self::VALUE_TRAIN_PARAMETERS_ERROR,
            self::VALUE_TRAIN_OFF,
            self::VALUE_TRAIN_ON,
            self::VALUE_DPLS_1_NOT_CONNECTED,
            self::VALUE_DPLS_2_NOT_CONNECTED,
            self::VALUE_DPLS_1_CONNECTION_RESTORED,
            self::VALUE_DPLS_2_CONNECTION_RESTORED,
            self::VALUE_DPLSSHORT_CIRCUIT,
            self::VALUE_DPLSCRASH,
            self::VALUE_TRAIN_SHORT_CIRCUIT,
            self::VALUE_SENSOR_TRIGGERED,
            self::VALUE_SDUTRIGGERED,
            self::VALUE_SDUFAULT,
            self::VALUE_CONNECTION_LOST,
            self::VALUE_CONNECTION_RESTORED,
            self::VALUE_PUMP_ON,
            self::VALUE_PUMP_OFF,
            self::VALUE_START_CIRCUIT_OPERATION,
            self::VALUE_FAULT_FIRE_FIGHTING,
            self::VALUE_AUTOMATIC_START_DELAY,
            self::VALUE_EXTINGUISHING,
            self::VALUE_EMERGENCY_ASPTSTART,
            self::VALUE_START_AUP,
            self::VALUE_BLOCK_START_AUP,
            self::VALUE_AUTOMATIC_ON,
            self::VALUE_AUTOMATIC_OFF,
            self::VALUE_STOP_AUP,
            self::VALUE_AUTOMATIC_TEST_ERROR,
            self::VALUE_MANUAL_TEST,
            self::VALUE_POWER_CRASH,
            self::VALUE_AKBTEST_ERROR,
            self::VALUE_AKBDISCHARGED,
            self::VALUE_BATTERY_FAULT,
            self::VALUE_RIPCHARGER_FAULT,
            self::VALUE_RIPOVERLOAD,
            self::VALUE_RIPNOT_OVERLOAD,
            self::VALUE_RIPCHARGER_RESTORATION,
            self::VALUE_POWER_RESTORATION,
            self::VALUE_BATTERY_RESTORATION,
            self::VALUE_RIPOFF,
            self::VALUE_RIPON,
            self::VALUE_DEVICE_RESTART,
            self::VALUE_NEED_MAINTENANCE,
            self::VALUE_RS_485_OFF,
            self::VALUE_RS_485_RESTORED,
            self::VALUE_TRAIN_DISTURBANCE,
            self::VALUE_TRAIN_RESTORATION,
            self::VALUE_STOP_TRAIN_ALARM,
            self::VALUE_TRAIN_DISARMED,
            self::VALUE_THERMOMETER_RESTORATION,
            self::VALUE_ALARM_WATER_LEVEL_INCREASE,
            self::VALUE_ALARM_WATER_LEVEL_DECREASE,
            self::VALUE_WATER_LEVEL_INCREASE,
            self::VALUE_NORMAL_WATER_LEVEL,
            self::VALUE_WATER_LEVEL_DECREASE,
            self::VALUE_SILENT_ALARM,
            self::VALUE_DPLSRESTORATION,
            self::VALUE_FIRE_EQUIPMENT_NORM_RESTORATION,
            self::VALUE_LOW_TEMPERATURE,
            self::VALUE_UNKNOWN_DEVICE,
            self::VALUE_CONTROL_RESTORATION,
            self::VALUE_TRAIN_ON_DELAY,
            self::VALUE_TRAIN_ARMED,
            self::VALUE_IDENTIFICATION,
            self::VALUE_TECH_TRAIN_RESTORATION,
            self::VALUE_TECH_TRAIN_DISTURBANCE,
            self::VALUE_THERMOMETER_FAULT,
            self::VALUE_TECH_TRAIN_DISTURBANCE_2,
            self::VALUE_FAILED_TRAIN_ON,
            self::VALUE_INNER_ZONE_RESTORED,
            self::VALUE_DEPARTMENT_ARMED,
            self::VALUE_DEPARTMENT_DISARMED,
            self::VALUE_ORION_RELAY_ON,
            self::VALUE_ORION_RELAY_OFF,
            self::VALUE_ACCESS_POINT_EMEGANCY_EXIT_BUTTON,
            self::VALUE_ACCESS_POINT_EMEGANCY_EXIT_BUTTON_END,
            self::VALUE_DOOR_OPEN_DENIED,
            self::VALUE_DOOR_OPEN,
            self::VALUE_INVALID_DOOR_NUMBER,
            self::VALUE_COMMUNICATION_MODULE_RESTORED,
            self::VALUE_NEW_MODULE,
            self::VALUE_NO_COMMUNICATION_MODULE,
            self::VALUE_IMPOSSIBLE_KEY_OPERATION,
            self::VALUE_IMPOSSIBLE_OPEN_DOOR,
            self::VALUE_BREATHALYZER_CHECK_SUCCESSFUL,
            self::VALUE_VERIFICATION_TIME_EXPIRED,
            self::VALUE_TIME_INTERVAL_PROHIBITION,
            self::VALUE_DATA_AUTHENTICATION_ERROR,
            self::VALUE_CARD_AUTHORIZATION_ERROR,
            self::VALUE_ENABLED_OPERATOR_CONTROL,
            self::VALUE_DISABLED_OPERATOR_CONTROL,
            self::VALUE_READER_TAMPER_ALERT,
            self::VALUE_READER_TAMPER_NORM,
            self::VALUE_READER_CONNECTION_LOST,
            self::VALUE_READER_CONNECTION_RESTORED,
            self::VALUE_RUSGARD_FACE_PHOTO_PROCESSING,
            self::VALUE_BIOMETRIC_DEVICE_CONNECTION_LOST,
            self::VALUE_BIOMETRIC_DEVICE_CONNECTION_RESTORED,
            self::VALUE_BIOMETRIC_AUTENTIFICATION_ERROR,
            self::VALUE_CONTROLLER_KEY_PROCESSING_ERROR,
            self::VALUE_BIOMETRIC_VERIFICATION_ERROR,
            self::VALUE_ACCESS_POINT_FACE_ENTRY,
            self::VALUE_GATE_FACE_ENTRY,
            self::VALUE_ACCESS_POINT_FACE_EXIT,
            self::VALUE_GATE_FACE_EXIT,
            self::VALUE_ACCESS_POINT_FACE_EXIT_BY_CARD_RECEIVER,
            self::VALUE_GATE_FACE_EXIT_BY_CARD_RECEIVER,
            self::VALUE_ACCESS_POINT_FACE_ENTRY_REFUSED,
            self::VALUE_GATE_FACE_ENTRY_REFUSED,
            self::VALUE_ACCESS_POINT_FACE_EXIT_REFUSED,
            self::VALUE_GATE_FACE_EXIT_REFUSED,
            self::VALUE_ACCESS_POINT_FACE_EXIT_REFUSED_BY_CARD_RECEIVER,
            self::VALUE_GATE_FACE_EXIT_REFUSED_BY_CARD_RECEIVER,
            self::VALUE_ACCESS_POINT_ENTRY_DENIED_NO_CONFIRM_FACE,
            self::VALUE_GATE_FACE_ENTRY_DENIED_NO_CONFIRM_FACE,
            self::VALUE_ACCESS_POINT_FACE_EXIT_DENIED_NO_CONFIRM_FACE,
            self::VALUE_GATE_FACE_EXIT_DENIED_NO_CONFIRM_FACE,
            self::VALUE_KEY_KEEPER_DOOR_OPEN_BY_KEY_OR_OPERATOR,
            self::VALUE_KEY_KEEPER_OPEN_BY_EMPLOYEE,
            self::VALUE_KEY_KEEPER_DOOR_LEFT_OPEN,
            self::VALUE_KEY_KEEPER_DOOR_CLOSED_NO_INFO_WHO_OPEN,
            self::VALUE_KEY_KEEPER_DOOR_CLOSED,
            self::VALUE_KEY_KEEPER_DOOR_ACCESS_DENY_UNKNOWN_KEY,
            self::VALUE_KEY_KEEPER_DOOR_ACCESS_DENY_NO_PERMISSION,
            self::VALUE_KEY_KEEPER_DOOR_OPENED_KEY_ACCESS_DENY_UNKNOWN_KEY,
            self::VALUE_KEY_KEEPER_DOOR_OPENED_KEY_ACCESS_DENY_NO_PERMISSION,
            self::VALUE_KEY_KEEPER_EMPLOYEE_GAVE_KEY,
            self::VALUE_KEY_KEEPER_EMPLOYEE_GAVE_UNKNOWN_KEY,
            self::VALUE_KEY_KEEPER_EMPLOYEE_GAVE_UNKNOWN_THING,
            self::VALUE_KEY_KEEPER_UNKNOWN_EMPLOYEE_GAVE_KEY,
            self::VALUE_KEY_KEEPER_UNKNOWN_EMPLOYEE_GAVE_UNKNOWN_KEY,
            self::VALUE_KEY_KEEPER_UNKNOWN_EMPLOYEE_GAVE_UNKNOWN_THING,
            self::VALUE_KEY_KEEPER_EMPLOYEE_TAKE_KEY,
            self::VALUE_KEY_KEEPER_EMPLOYEE_TAKE_UNKNOWN_KEY,
            self::VALUE_KEY_KEEPER_EMPLOYEE_TAKE_UNKNOWN_THING,
            self::VALUE_KEY_KEEPER_UNKNOWN_EMPLOYEE_TAKE_KEY,
            self::VALUE_KEY_KEEPER_UNKNOWN_EMPLOYEE_TAKE_UNKNOWN_KEY,
            self::VALUE_KEY_KEEPER_UNKNOWN_EMPLOYEE_TAKE_UNKNOWN_THING,
        ];
    }
}
