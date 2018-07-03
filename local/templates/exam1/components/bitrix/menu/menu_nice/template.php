<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
 <nav class="nav">
            <div class="inner-wrap">
                <div class="menu-block popup-wrap">
                    <a href="" class="btn-menu btn-toggle"></a>
                    <div class="menu popup-block">
                        
<?if (!empty($arResult)):?>
<ul class="">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li <?if($arItem['LINK']=='/'):?>class="main-page"<?endif;?>><a href="<?=$arItem["LINK"]?>" <?if(isset($arItem['PARAMS']['COLOR'])):?> class = "<?=$arItem['PARAMS']['COLOR']?>"<?endif;?>><?=$arItem["TEXT"]?></a>
				<ul>
		<?else:?>
			<li><a href="<?=$arItem["LINK"]?>" <?if(isset($arItem['PARAMS']['COLOR'])):?> class = "<?=$arItem['PARAMS']['COLOR']?>"<?endif;?>><?=$arItem["TEXT"]?></a>
				<ul>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li <?if($arItem['LINK']=='/'):?>class="main-page"<?endif;?>><a href="<?=$arItem["LINK"]?>" <?if(isset($arItem['PARAMS']['COLOR'])):?> class = "<?=$arItem['PARAMS']['COLOR']?>"<?endif;?>><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="<?=$arItem["LINK"]?>"<?if(isset($arItem['PARAMS']['COLOR'])):?> class = "<?=$arItem['PARAMS']['COLOR']?>"<?endif;?>><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<div class="menu-clear-left"></div>
<?endif?>
        <a href="" class="btn-close"></a>
                    </div>
                    <div class="menu-overlay"></div>
                </div>
            </div>
        </nav>