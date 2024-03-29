<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if(!defined("WIZARD_DEFAULT_SITE_ID") && !empty($_REQUEST["wizardSiteID"])) 
	define("WIZARD_DEFAULT_SITE_ID", $_REQUEST["wizardSiteID"]); 

$arWizardDescription = Array(
	"NAME" => GetMessage("PORTAL_WIZARD_NAME"), 
	"DESCRIPTION" => GetMessage("PORTAL_WIZARD_DESC"), 
	"VERSION" => "1.0.2",
	"START_TYPE" => "WINDOW",
	"WIZARD_TYPE" => "INSTALL",
	"IMAGE" => "images/".LANGUAGE_ID."/solution.png",
	"TEMPLATES" => Array(
		Array("SCRIPT" => "scripts/template.php", "CLASS" => "WizardTemplate")
	),
	"STEPS" => (defined("WIZARD_DEFAULT_SITE_ID") ? 
		Array("SelectTemplateStep", "SelectThemeStep", "SiteSettingsStep", "CompanyServicesStep", "DataInstallStep" ,"FinishStep") : 
		Array("SelectSiteStep", "SelectTemplateStep", "SelectThemeStep", "SiteSettingsStep", "CompanyServicesStep", "DataInstallStep" ,"FinishStep"))
);
?>