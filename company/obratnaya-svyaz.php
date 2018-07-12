<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"USE_CAPTCHA" => "Y",
		"OK_TEXT" => "Спасибо, человек, твое сообщение принято.",
		"EMAIL_TO" => "solleks777@gmail.com",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"EVENT_MESSAGE_ID" => array(
			0 => "30",
		)
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>