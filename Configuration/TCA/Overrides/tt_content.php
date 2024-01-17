<?php
defined('TYPO3') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'WeCookieConsent',
    'Pi1',
    'Cookie List'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['wecookieconsent_pi1'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'wecookieconsent_pi1',
    'FILE:EXT:we_cookie_consent/Configuration/FlexForms/flexform_pi1.xml'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'WeCookieConsent',
    'Pi2',
    'Cookie Consent'
);
