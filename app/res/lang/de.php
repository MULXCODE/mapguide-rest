<?php

//
//  Copyright (C) 2014 by Jackie Ng
//
//  This library is free software; you can redistribute it and/or
//  modify it under the terms of version 2.1 of the GNU Lesser
//  General Public License as published by the Free Software Foundation.
//
//  This library is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
//  Lesser General Public License for more details.
//
//  You should have received a copy of the GNU Lesser General Public
//  License along with this library; if not, write to the Free Software
//  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
//

//
// This is the german text bundle for mapguide-rest
// 
// This is a quick-and-dirty Google translate of the english text. As such the textual content
// here is not guaranteed to be grammatically correct. This bundle currently exists to test
// localization functionality

return array(
    "L_RETURNS_DATA_AS_TYPE" => "Gibt Daten in %s",
    "L_PRODUCT_API_REFERENCE" => "%s API-Reference",
    "L_ABOUT_MAPGUIDE_REST" => "mapguide-rest ist eine RESTful Web Extension für MapGuide Open Source und Autodesk Infrastructure Map Server<br/><br/><strong>Hinweis:.</strong> Grund Zugangsdaten HTTP-Authentifizierung wird in der Regel vom Web-Browser für eine kurze zwischengespeichert werden Zeitraum sollten Sie sich für diese Methode anstelle der Weitergabe in Session-IDs verwenden",
    "L_REST_GET_ID_DESC" => "Die ID der Funktion zur Rückkehr",
    "L_REST_PAGE_NO_DESC" => "Die Seitenzahl, um zu wechseln. Gilt nur, wenn die Paginierung wird für die Datenquelle konfiguriert",
    "L_REST_GET_BBOX_DESC" => "Ein Quartett von x1, y1, x2, y2",
    "L_REST_GET_FILTER_DESC" => "Die URL-kodierte FDO Filterzeichenfolge",
    "L_REST_POST_BODY_DESC" => "Die XML-Umschlag der Beschreibung der Funktionen eingefügt werden",
    "L_REST_PUT_BODY_DESC" => "Die XML-Umschlag der Beschreibung der Funktionen, die aktualisiert werden",
    "L_REST_DELETE_FILTER_DESC" => "Der FDO Filter String, festzustellen, welche Funktionen gelöscht werden",
    "E_DATA_CONFIGURATION_NOT_JSON" => "Die hochgeladenen Daten Konfiguration ungültig JSON",
    "E_DATA_FILE_NOT_FOUND" => "datei nicht gefunden: %s",
    "E_DATA_FILE_NAME_NOT_ALLOWED" => "ungültigen Dateinamen: %s",
    "E_UNSUPPORTED_PROPERTY_TYPE" => "Nicht unterstützter Objekttyp",
    "E_NOT_SUPPORTED_FOR_SESSION_RESOURCES" => "Dieser Vorgang ist für die Sitzung Ressourcen unterstützt",
    "E_MALFORMED_JSON_BODY" => "Malformed JSON Körper",
    "E_DONT_KNOW_HOW_TO_OUTPUT" => "Konnte nicht ermittelt werden, wie die Ausgabe: %s",
    "E_FAILED_TO_GENERATE_TILE_AFTER_N_ATTEMPTS" => "Fehler beim Fliesen nach %d Versuche erzeugen",
    "E_FAILED_TO_CREATE_DIR_AFTER_N_ATTEMPTS" => "Konnte Verzeichnis nach %d Versuche erstellen",
    "E_OPERATION_NOT_ALLOWED" => "Operation nicht zulässig",
    "E_FEATURE_SOURCE_NOT_CONFIGURED_TO_ALLOW_UPDATES" => "Die Ressource '%s' ist nicht konfiguriert, Feature-Updates erlauben",
    "E_PHP_FILE_UPLOAD_ERROR" => "Datei-Upload-Fehler (Code: %s). Siehe <a href='http://www.php.net/manual/en/features.file-upload.errors.php'>http://www.php.net/manual/en/features.file-upload.errors.php</a> für weitere Informationen",
    "L_STACK_TRACE" => "Stack-Trace",
    "E_UNHANDLED_EXCEPTION" => "Unbehandelte Ausnahme",
    "E_PHP_EXCEPTION_DETAILS" => "%s bei %s:%s",
    "E_SERVICE_UNAVAILABLE" => "Dienst nicht verfügbar",
    "E_SERVER_ERROR" => "Server Error",
    "E_FORBIDDEN" => "verboten",
    "E_NOT_FOUND" => "nicht gefunden",
    "E_RESOURCE_NOT_FOUND" => "Ressource nicht gefunden: %s",
    "E_UNPREVIEWABLE_RESOURCE_TYPE" => "Ressourcentyp ist nicht vorhersehbare",
    "E_BAD_REQUEST" => "Ungültige Anforderung",
    "E_CZML_PAGINATION_NOT_SUPPORTED" => "Paginierung czml Ausgang nicht unterstützt",
    "E_FORBIDDEN_ACCESS" => "Sie sind nicht berechtigt, diesen Bereich zugreifen",
    "E_UNAUTHORIZED" => "unbefugt",
    "E_UNAUTHORIZED_DESC" => "Sie müssen einen gültigen Benutzernamen und Passwort eingeben, um auf diese Website zuzugreifen",
    "E_MISSING_REQUIRED_PARAMETER" => "Fehlende erforderliche Parameter: %s",
    "E_UNRECOGNIZED_VALUE_IN_DOMAIN" => "Nicht erkannte Wert: %s. Zulässige Werte sind (%s)",
    "E_METHOD_NOT_SUPPORTED" => "Methode nicht unterstützt",
    "E_METHOD_NOT_SUPPORTED_DESC" => "Methode nicht unterstützt: %s",
    "E_UNSUPPORTED_SOURCE_TYPE" => "Nicht unterstützte Quelltyp: %s",
    "E_UNSUPPORTED_REPRESENTATION" => "Nicht unterstützte Darstellung: %s",
    "E_ADAPTER_NOT_REGISTERED" => "Adapter (%s) ist nicht definiert oder eingetragene",
    "E_NO_DATA_CONFIGURATION_FOR_URI" => "Kein Datenkonfiguration für URI Teil gefunden: %s",
    "E_NOT_GEOMETRY_PROPERTY" => "Keine Geometrieeigenschaft: %s",
    "E_LAYER_HAS_INVALID_FEATURE_CLASS" => "Schicht '%s' hat einen ungültigen Feature-Class",
    "E_LAYER_HAS_INVALID_FEATURE_SOURCE" => "Schicht '%s' hat einen ungültigen Objektquelle",
    "E_LAYER_NOT_IN_SELECTION" => "Layer (%s) nicht in Auswahl gefunden",
    "E_GROUP_NOT_FOUND" => "Gruppe nicht gefunden: %s",
    "E_INVALID_DATE_STRING" => "Datum ungültig Zeichenfolge: %s",
    "E_CANNOT_PARSE_DATE_STRING_INVALID_COMPONENT" => "Datum ungültig String. '%s' hat ungültiges Datum Komponente '%s'",
    "E_UNKNOWN_FORMATTER" => "Kein Formatierer mit dem Namen '%s' registriert",
    "E_UNKNOWN_DATETIME_FORMATTER" => "Kein Datetime-Formatierer mit dem Namen '%s' registriert",
    "E_UNKNOWN_GEOMETRY_FORMATTER" => "Kein Geometry Formatierer mit dem Namen '%s' registriert",
    "E_TEMPLATE_MISSING_DEFINITION" => "Fehlende Definition für '%s' Vorlage",
    "E_INVALID_MAP_DEFINITION_PARAMETER" => "Parameter '%s' ist keine gültige Karte Definition Ressourcen-ID",
    "E_RELATION_CANNOT_HAVE_SPACES" => "Relation '%s' keine Leerstellen",
    "E_RELATION_MISSING_PROPERTY" => "Konfiguration für Beziehung '%s' ist '%s' Eigenschaft fehlt",
    "E_RELATION_MISSING_SOURCE_PROPERTY" => "Quelle Konfiguration für Beziehung '%s' ist '%s' Eigenschaft fehlt",
    "E_CANNOT_APPLY_UPDATE_CANNOT_UNIQUELY_IDENTIFY" => "Kann Update nicht. Der Wert (%s) nicht ausreicht, um die Funktion aktualisiert werden eindeutig identifiziert. Klassendefinition hat %d Identität Eigenschaften",
    "E_QUERY_SETUP" => "Fehler beim Einrichten des verwandten Abfrage. Filter war: %s, Details: %s",
    "E_INVALID_COORDINATE_PAIR" => "Ungültige angetroffen Koordinatenpaar: '%s'. Gefunden %d Token. Erwartete 2",
    "E_NO_FEATURE_ID_SET" => "Keine Features ID Set",
    "E_NO_REPRESENTATIONS_DEFINED_IN_CONFIGURATION" => "Keine Vertretungen in Konfigurationsdokument festgelegt",
    "E_REPRESENTATION_NOT_HANDLED_OR_SUPPORTED" => "Diese Konfiguration unterstützt keine oder übernehmen die gegebene Darstellung: %s",
    "E_REPRESENTATION_CONFIGURATION_MISSING_PROPERTY" => "Fehlende '%s' Eigenschaft in der Konfiguration der Repräsentation: %s",
    "E_METHOD_NOT_SUPPORTED_ON_REPRESENTATION" => "Die projektierte Darstellung '%s' ist nicht konfiguriert zu handhaben '%s' Anfragen",
    "E_CANNOT_DELETE_NO_ID_PROPS" => "Kann nicht in der Klasse '%s' zu löschen (%s), die durch ID. Klasse hat keine Identität Eigenschaften",
    "E_CANNOT_DELETE_MULTIPLE_ID_PROPS" => "Kann nicht in der Klasse '%s' zu löschen (%s), die durch ID. Klasse hat mehr als eine Identitätseigenschaft",
    "E_CANNOT_QUERY_NO_ID_PROPS" => "In der Klasse '%s' kann nicht abgefragt werden (%s), die durch ID. Klasse hat keine Identität Eigenschaften",
    "E_CANNOT_QUERY_MULTIPLE_ID_PROPS" => "In der Klasse '%s' kann nicht abgefragt werden (%s), die durch ID. Klasse hat mehr als eine Identitätseigenschaft",
    "E_ID_PROP_NOT_DATA" => "Spezifizierte Identitätseigenschaft (%s) ist nicht eine Eigenschaft data",
    "E_ID_PROP_NOT_FOUND" => "Spezifizierte Identitätseigenschaft (%s) nicht in der Klasse Definition gefunden",
    "E_MISSING_ROOT_PROPERTY" => "Fehlende root-Eigenschaft '%s' in der Konfiguration",
    "E_MISSING_PROPERTY_IN_SECTION" => "Fehlende Eigenschaft '%s' in Konfigurationsabschnitt '%s'",
    "E_MISSING_REQUIRED_ADAPTER_PROPERTY" => "Fehlende erforderliche Adapter-Eigenschaft '%s'",
    "E_LAYER_NOT_FOUND_IN_MAP" => "Keine Ebene namens (%s) in der Karte gefunden",
    "E_LAYER_NOT_POINTING_TO_EXPECTED_FEATURE_SOURCE" => "Schicht (%s) nicht zu der erwarteten Funktion Quelle (%s) zeigen. Er verweist stattdessen auf: %s",
    "E_UNKNOWN_PAPER_SIZE" => "Unbekannt Papierformat: %s",
    "E_INVALID_DOCUMENT" => "ungültigen Dokument",
    "E_PROPERTY_NOT_FOUND_IN_CLASS" => "Immobilien (%s) nicht in der Klasse gefunden: %s",
    "E_MULTIPLE_IDENTITY_PROPS_NOT_SUPPORTED" => "Multiple Identität Eigenschaften nicht unterstützt"
);