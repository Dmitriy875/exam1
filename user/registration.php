<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><div class="registrationForm">
</div>
 &nbsp;<?$APPLICATION->IncludeComponent(
	"bitrix:main.register",
	"",
Array()
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>