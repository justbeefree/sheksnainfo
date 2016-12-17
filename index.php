<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/common.css" />
<?$APPLICATION->ShowHead();?>
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/colors.css" />
<title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<div id="page-wrapper">

	<div id="header">
	<div id="header-gerb">	
		<a href="/"><img src="/bitrix/images/sheksna.gif" width= "147px" height="185px"></a>
		</div>
	<div id="header-title"><a href="<?=SITE_DIR?>"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/infoportal_name.php"), false);?></a></div>
	<!--<div id="header-auth">
		<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "info", array(
			"REGISTER_URL" => SITE_DIR."login/",
			"PROFILE_URL" => SITE_DIR."personal/profile/",
			"SHOW_ERRORS" => "N"
			),
			false,
			Array()
		);?>
	</div>-->
	</div>
	<div id="main-menu">
	<?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel", array(
	"ROOT_MENU_TYPE" => "top",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "36000000",
	"MENU_CACHE_USE_GROUPS" => "N",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "1",
	"CHILD_MENU_TYPE" => "top",
	"USE_EXT" => "Y",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N"
	),
	false
	);?>
	</div>
	<div id="page-body">
	<table width="100%" cellspacing="0" cellpadding="0" >
		<tr>
		<?$arCurDir = explode("/", $APPLICATION->GetCurDir());?>
		<td <?if(!array_search('forum', $arCurDir)):?>width="60%"<?endif;?> class="page-left">
		<?if($APPLICATION->GetCurDir() != SITE_DIR):?>
		<h1><?$APPLICATION->ShowTitle()?></h1>
		<?endif;?>#WORK_AREA#<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
		</td>
		<?$arCurDir = explode("/", $APPLICATION->GetCurDir());?>
		<?if(!array_search('forum', $arCurDir)):?>
		<td width="40%" class="page-right"><div class="page-right">
			<div id="left-search">
		<?$APPLICATION->IncludeComponent("bitrix:search.title", ".default", array(
			"NUM_CATEGORIES" => "3",
			"TOP_COUNT" => "5",
			"CHECK_DATES" => "N",
			"SHOW_OTHERS" => "Y",
			"PAGE" => "#SITE_DIR#search/",
			"CATEGORY_0_TITLE" => GetMessage('NEWS_TITLE'),
			"CATEGORY_0" => array(
				0 => "iblock_news",
			),
			"CATEGORY_0_iblock_news" => array(
				0 => "2",
				1 => "3",
			),
			"CATEGORY_1_TITLE" => GetMessage('BLOG_TITLE'),
			"CATEGORY_1" => array(
				0 => "blog",
			),
			"CATEGORY_1_blog" => array(
				0 => "all",
			),
			"CATEGORY_2_TITLE" => GetMessage('JOB_TITLE'),
			"CATEGORY_2" => array(
				0 => "iblock_job",
			),
			"CATEGORY_2_iblock_job" => array(
				0 => "all",
			),
			"CATEGORY_OTHERS_TITLE" => GetMessage('OTHER_TITLE'),
			"SHOW_INPUT" => "Y",
			"INPUT_ID" => "title-search-input",
			"CONTAINER_ID" => "title-search"
			),
			false
		);?>
			</div>
			<div class="hr"></div>

		<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
			"AREA_FILE_SHOW" => "sect",
			"AREA_FILE_SUFFIX" => "btop",
			"AREA_FILE_RECURSIVE" => "Y",
			"EDIT_TEMPLATE" => ""
			),
			false
		);?>
		<?$APPLICATION->ShowViewContent("sidebar")?>	
		<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
			"AREA_FILE_SHOW" => "sect",
			"AREA_FILE_SUFFIX" => "rtop",
			"AREA_FILE_RECURSIVE" => "Y",
			"EDIT_TEMPLATE" => ""
			),
			false
		);?>
		<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
			"AREA_FILE_SHOW" => "sect",
			"AREA_FILE_SUFFIX" => "bbottom",
			"AREA_FILE_RECURSIVE" => "Y",
			"EDIT_TEMPLATE" => ""
			),
			false
		);?>
		<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
			"AREA_FILE_SHOW" => "sect",
			"AREA_FILE_SUFFIX" => "rbottom",
			"AREA_FILE_RECURSIVE" => "N",
			"EDIT_TEMPLATE" => ""
			),
			false
		);?>
		
		</div></td>
		<?endif;?>
		</tr>
		</table>
		
		</div></td>
	</tr>
	</table>
	</div>
</div>
<div id="footer-wrapper">

<h2>Администрация Шекснинского муниципального района, 2014     </h2>
<br />
<p>Об информационном содержании вы можете написать администратору Сайта<br />
При перепечатке и ретрансляции материалов, ссылка на сайт www.sheksnainfo.ru обязательна. <br />
Информация персонального характера о пользователях сайта хранится и обрабатывается <br />
с соблюдением требований российского законодательства о персональных данных </p>


	<!--<div class="bottom-menu-one">-->
	<?/*$APPLICATION->IncludeComponent("bitrix:menu", "bottom_one", array(
	"ROOT_MENU_TYPE" => "bottom1",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "36000000",
	"MENU_CACHE_USE_GROUPS" => "N",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "1",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "Y",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N",
	"MENU_TITLE" => GetMessage('MENU_1_TITLE')
	),
	false
	 );*/?>
	<!--</div>
	<div class="bottom-menu-two">-->
	<?/*$APPLICATION->IncludeComponent("bitrix:menu", "bottom_one", array(
	"ROOT_MENU_TYPE" => "bottom2",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "36000000",
	"MENU_CACHE_USE_GROUPS" => "N",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "1",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "Y",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N",
	"MENU_TITLE" => GetMessage('MENU_2_TITLE')
	),
	false
);*/?>
	<!--</div>-->
	<?/*$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
	"ROOT_MENU_TYPE" => "bottom",
	"MENU_CACHE_TYPE" => "A",
	"MENU_CACHE_TIME" => "36000000",
	"MENU_CACHE_USE_GROUPS" => "N",
	"MENU_CACHE_GET_VARS" => array(
	),
	"MAX_LEVEL" => "1",
	"CHILD_MENU_TYPE" => "left",
	"USE_EXT" => "Y",
	"DELAY" => "N",
	"ALLOW_MULTI_SELECT" => "N",
	),
	false
);*/?>
<!--	<div class="copyright"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/copyright.php"), false);?><?=GetMessage("FOOTER_DISIGN")?></div> -->
</div>
</body>
</html>
