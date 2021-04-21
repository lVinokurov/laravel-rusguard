<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DictionaryType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DictionaryType
 * @subpackage Enumerations
 */
class DictionaryType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'DocumentType'
     * @return string 'DocumentType'
     */
    const VALUE_DOCUMENT_TYPE = 'DocumentType';
    /**
     * Constant for value 'Significance'
     * @return string 'Significance'
     */
    const VALUE_SIGNIFICANCE = 'Significance';
    /**
     * Constant for value 'Position'
     * @return string 'Position'
     */
    const VALUE_POSITION = 'Position';
    /**
     * Constant for value 'Location'
     * @return string 'Location'
     */
    const VALUE_LOCATION = 'Location';
    /**
     * Constant for value 'LocationClarification'
     * @return string 'LocationClarification'
     */
    const VALUE_LOCATION_CLARIFICATION = 'LocationClarification';
    /**
     * Constant for value 'SecurityGroup'
     * @return string 'SecurityGroup'
     */
    const VALUE_SECURITY_GROUP = 'SecurityGroup';
    /**
     * Constant for value 'IncidentType'
     * @return string 'IncidentType'
     */
    const VALUE_INCIDENT_TYPE = 'IncidentType';
    /**
     * Constant for value 'IncidentNature'
     * @return string 'IncidentNature'
     */
    const VALUE_INCIDENT_NATURE = 'IncidentNature';
    /**
     * Constant for value 'TheftMethod'
     * @return string 'TheftMethod'
     */
    const VALUE_THEFT_METHOD = 'TheftMethod';
    /**
     * Constant for value 'Organization'
     * @return string 'Organization'
     */
    const VALUE_ORGANIZATION = 'Organization';
    /**
     * Constant for value 'Subdivision'
     * @return string 'Subdivision'
     */
    const VALUE_SUBDIVISION = 'Subdivision';
    /**
     * Constant for value 'StatusOfPerson'
     * @return string 'StatusOfPerson'
     */
    const VALUE_STATUS_OF_PERSON = 'StatusOfPerson';
    /**
     * Constant for value 'Punishment'
     * @return string 'Punishment'
     */
    const VALUE_PUNISHMENT = 'Punishment';
    /**
     * Constant for value 'Detention'
     * @return string 'Detention'
     */
    const VALUE_DETENTION = 'Detention';
    /**
     * Constant for value 'WhoTransferredWealth'
     * @return string 'WhoTransferredWealth'
     */
    const VALUE_WHO_TRANSFERRED_WEALTH = 'WhoTransferredWealth';
    /**
     * Constant for value 'WhoTransferredDocument'
     * @return string 'WhoTransferredDocument'
     */
    const VALUE_WHO_TRANSFERRED_DOCUMENT = 'WhoTransferredDocument';
    /**
     * Constant for value 'WhoTransferredDecisionDocument'
     * @return string 'WhoTransferredDecisionDocument'
     */
    const VALUE_WHO_TRANSFERRED_DECISION_DOCUMENT = 'WhoTransferredDecisionDocument';
    /**
     * Constant for value 'PersonalDocumentType'
     * @return string 'PersonalDocumentType'
     */
    const VALUE_PERSONAL_DOCUMENT_TYPE = 'PersonalDocumentType';
    /**
     * Constant for value 'DecisionDocumentType'
     * @return string 'DecisionDocumentType'
     */
    const VALUE_DECISION_DOCUMENT_TYPE = 'DecisionDocumentType';
    /**
     * Constant for value 'FinalPunishment'
     * @return string 'FinalPunishment'
     */
    const VALUE_FINAL_PUNISHMENT = 'FinalPunishment';
    /**
     * Constant for value 'ExtraFinalPunishment'
     * @return string 'ExtraFinalPunishment'
     */
    const VALUE_EXTRA_FINAL_PUNISHMENT = 'ExtraFinalPunishment';
    /**
     * Constant for value 'Measure'
     * @return string 'Measure'
     */
    const VALUE_MEASURE = 'Measure';
    /**
     * Constant for value 'Tangibles'
     * @return string 'Tangibles'
     */
    const VALUE_TANGIBLES = 'Tangibles';
    /**
     * Constant for value 'OrganizationType'
     * @return string 'OrganizationType'
     */
    const VALUE_ORGANIZATION_TYPE = 'OrganizationType';
    /**
     * Constant for value 'VehicleType'
     * @return string 'VehicleType'
     */
    const VALUE_VEHICLE_TYPE = 'VehicleType';
    /**
     * Constant for value 'Branch'
     * @return string 'Branch'
     */
    const VALUE_BRANCH = 'Branch';
    /**
     * Return allowed values
     * @uses self::VALUE_DOCUMENT_TYPE
     * @uses self::VALUE_SIGNIFICANCE
     * @uses self::VALUE_POSITION
     * @uses self::VALUE_LOCATION
     * @uses self::VALUE_LOCATION_CLARIFICATION
     * @uses self::VALUE_SECURITY_GROUP
     * @uses self::VALUE_INCIDENT_TYPE
     * @uses self::VALUE_INCIDENT_NATURE
     * @uses self::VALUE_THEFT_METHOD
     * @uses self::VALUE_ORGANIZATION
     * @uses self::VALUE_SUBDIVISION
     * @uses self::VALUE_STATUS_OF_PERSON
     * @uses self::VALUE_PUNISHMENT
     * @uses self::VALUE_DETENTION
     * @uses self::VALUE_WHO_TRANSFERRED_WEALTH
     * @uses self::VALUE_WHO_TRANSFERRED_DOCUMENT
     * @uses self::VALUE_WHO_TRANSFERRED_DECISION_DOCUMENT
     * @uses self::VALUE_PERSONAL_DOCUMENT_TYPE
     * @uses self::VALUE_DECISION_DOCUMENT_TYPE
     * @uses self::VALUE_FINAL_PUNISHMENT
     * @uses self::VALUE_EXTRA_FINAL_PUNISHMENT
     * @uses self::VALUE_MEASURE
     * @uses self::VALUE_TANGIBLES
     * @uses self::VALUE_ORGANIZATION_TYPE
     * @uses self::VALUE_VEHICLE_TYPE
     * @uses self::VALUE_BRANCH
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DOCUMENT_TYPE,
            self::VALUE_SIGNIFICANCE,
            self::VALUE_POSITION,
            self::VALUE_LOCATION,
            self::VALUE_LOCATION_CLARIFICATION,
            self::VALUE_SECURITY_GROUP,
            self::VALUE_INCIDENT_TYPE,
            self::VALUE_INCIDENT_NATURE,
            self::VALUE_THEFT_METHOD,
            self::VALUE_ORGANIZATION,
            self::VALUE_SUBDIVISION,
            self::VALUE_STATUS_OF_PERSON,
            self::VALUE_PUNISHMENT,
            self::VALUE_DETENTION,
            self::VALUE_WHO_TRANSFERRED_WEALTH,
            self::VALUE_WHO_TRANSFERRED_DOCUMENT,
            self::VALUE_WHO_TRANSFERRED_DECISION_DOCUMENT,
            self::VALUE_PERSONAL_DOCUMENT_TYPE,
            self::VALUE_DECISION_DOCUMENT_TYPE,
            self::VALUE_FINAL_PUNISHMENT,
            self::VALUE_EXTRA_FINAL_PUNISHMENT,
            self::VALUE_MEASURE,
            self::VALUE_TANGIBLES,
            self::VALUE_ORGANIZATION_TYPE,
            self::VALUE_VEHICLE_TYPE,
            self::VALUE_BRANCH,
        ];
    }
}
