 <!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="utf-8">
	<title>Jeedom</title>
	<link rel="shortcut icon" href="core/img/logo-jeedom-sans-nom-couleur-25x25.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<script>
		var clientDatetime = new Date();
		var clientServerDiffDatetime = (1644245605.7434 * 1000) - clientDatetime.getTime();
		var serverTZoffsetMin = 60;
		var serverDatetime = 1644245605.7437;
		JEEDOM_PRODUCT_NAME = 'Jeedom';
		JEEDOM_AJAX_TOKEN = '';
	</script>
	<link rel="stylesheet" href="3rdparty/font-awesome5/css/all.min.css">
<link rel="stylesheet" href="core/css/icon/icons.css">
<link href="3rdparty/roboto/roboto.css?md5=5e846361a1dd5ee5ddf95c5058ef62a3" rel="stylesheet" /><link href="3rdparty/camingocode/camingocode.css?md5=a931b4e52946b5019fb6a59b15843942" rel="stylesheet" /><link href="3rdparty/text-security/text-security-disc.css?md5=a060dd3f537cb63734602f1ff8e9ad76" rel="stylesheet" /><link href="3rdparty/jquery.toastr/jquery.toastr.min.css?md5=f284028c678041d687c6f1be6968f68a" rel="stylesheet" /><link href="3rdparty/jquery.ui/jquery-ui-bootstrap/jquery-ui.css?md5=e2d6893c9fb09eef515df121e5971136" rel="stylesheet" /><script type="text/javascript" src="3rdparty/jquery/jquery.min.js?md5=7c14a783dfeb3d238ccd3edd840d82ee"></script><script type="text/javascript" src="3rdparty/nouislider/nouislider.js?md5=c5899740ad142d6671024f7b47413100"></script><link href="3rdparty/nouislider/nouislider.css?md5=6e7c858b9eb1f998e44a18dce1c127c2" rel="stylesheet" /><script type="text/javascript" src="3rdparty/jquery.utils/jquery.utils.js?md5=5152edffcc6cadb34fb9910b3c93dca7"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/core.js&md5=b087014af58c0e606e7588b57b67c4e8&lang=fr_FR"></script><script type="text/javascript" src="3rdparty/bootstrap/bootstrap.min.js?md5=2f34b630ffe30ba2ff2b91e3f3c322a1"></script><script type="text/javascript" src="3rdparty/jquery.ui/jquery-ui.min.js?md5=777b80b520786cf6f0ce9c83401b2c87"></script><script type="text/javascript" src="3rdparty/jquery.ui/jquery.ui.datepicker.fr.js?md5=f602aeb67566df46868b698beff905f6"></script><script type="text/javascript" src="3rdparty/jquery.ui-touch-punch/jquery.ui.touch-punch.min.js?md5=73ebb9142822e4e184ae5caf8266d9be"></script><script type="text/javascript" src="3rdparty/jquery.toastr/jquery.toastr.min.js?md5=b90b48659b33201bdc9e84dacb1efb98"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/jeedom.class.js&md5=2eab91ef3b870e9c09bbf5d29cf62e69&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/private.class.js&md5=096afa2e023e86461c36cc2699d1ea2f&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/eqLogic.class.js&md5=115b2c3a918c5114e190e4f0d2e142ef&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/cmd.class.js&md5=fd055ab819caa203895220ccbf340b9d&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/object.class.js&md5=d002aacdf8b41803a745f48ef6c46c12&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/scenario.class.js&md5=9138fb63085f7b022db2e68917486338&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/plugin.class.js&md5=238ce5ba2f5d57c0ceeff8e074cbc94a&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/message.class.js&md5=8bff6dc19f6978b76e3c8f7d4a0bceb0&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/view.class.js&md5=8bd59ffe8dee8999fe7eb9ef54b3955b&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/config.class.js&md5=0a7566eed39fc0233380ca09ce950b23&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/history.class.js&md5=597a92d87e17b20436bea0cdbfe2fc47&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/cron.class.js&md5=d61977d8be9402c20207bf2e51ce2456&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/security.class.js&md5=ee399333f713c039ee05b09d2de6a756&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/update.class.js&md5=1ef7e34fa0f36bad88b9f58baa4fea05&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/user.class.js&md5=6f887755d5ba9ad260e0cf5b2dbeac15&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/backup.class.js&md5=e906de63f766eb0cf7982da5ee89bd83&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/interact.class.js&md5=30c9ba2f8cc6cf1dce3a4627e4ba00a5&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/update.class.js&md5=1ef7e34fa0f36bad88b9f58baa4fea05&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/plan.class.js&md5=4208f75c71897570bf87b19b6e392959&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/plan3d.class.js&md5=3ad717f811e8b52d72caba991962f79e&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/log.class.js&md5=948e60e98a5bc7937c5c1125606f353f&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/repo.class.js&md5=d426beee9007bd37fb166619cd35ee60&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/network.class.js&md5=169fd474dcdc04609f4cd102c3089e28&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/dataStore.class.js&md5=b59d90149a89dd10893b78c305eb299a&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/cache.class.js&md5=3b662366c131949d9a061b9c99d04595&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/report.class.js&md5=6cf883728ead7362308e5fb159ee63d2&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/note.class.js&md5=93323372d4cf4b2ef126d081b787870e&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/listener.class.js&md5=08183f2d24a8eab7e0a0b65e6d1a1865&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/widgets.class.js&md5=e1cc49838bf3ad3bd2b1e8acc1c34b62&lang=fr_FR"></script><script type="text/javascript" src="core/php/getResource.php?file=core/js/timeline.class.js&md5=4fa19540bd68d6a9962afa3044d47f94&lang=fr_FR"></script><script type="text/javascript" src="3rdparty/bootbox/bootbox.min.js?md5=4ef33d9dbd6b4096140ddd1bae06cc0a"></script><script type="text/javascript" src="3rdparty/highstock/highstock.js?md5=975cc3b63f66280c1bf433ce2d48a200"></script><script type="text/javascript" src="3rdparty/highstock/highcharts-more.js?md5=75b23d7eee9c57e62e6d86786592848b"></script><script type="text/javascript" src="3rdparty/highstock/modules/solid-gauge.js?md5=3eb8608b564b29b3569525b366a8ea09"></script><script type="text/javascript" src="3rdparty/highstock/modules/exporting.js?md5=cc8d952ef697b3c4405f9af3cd6b5986"></script><script type="text/javascript" src="3rdparty/highstock/modules/offline-exporting.js?md5=73898de1e2e582dc5bdafd63220d80c8"></script><script type="text/javascript" src="core/php/getResource.php?file=desktop/common/js/utils.js&md5=fe80e3004ce1bcbec735ef59645c1bc0&lang=fr_FR"></script><script type="text/javascript" src="3rdparty/jquery.at.caret/jquery.at.caret.min.js?md5=2b2418fc5274f872fd366941855147ab"></script><script type="text/javascript" src="3rdparty/jwerty/jwerty.js?md5=910ca201adac76aa8b8bd51ceddf9357"></script><script type="text/javascript" src="3rdparty/jquery.packery/jquery.packery.js?md5=13f935f898fe84c42567dd609f0c4ce4"></script><script type="text/javascript" src="3rdparty/jquery.lazyload/jquery.lazyload.js?md5=5c01d7aff077b4ed0804b71c2e3ab4a1"></script><script type="text/javascript" src="3rdparty/jquery.tooltipster/js/tooltipster.bundle.min.js?md5=a92b74d6787afb5e34d749ce45d2eeb2"></script><link href="3rdparty/jquery.tooltipster/css/tooltipster.bundle.min.css?md5=b15ef24270546e5fe896d3ea387ea134" rel="stylesheet" /><script type="text/javascript" src="3rdparty/codemirror/lib/codemirror.js?md5=906c69f4cd75a847061ca8925cd4c790"></script><link href="3rdparty/codemirror/lib/codemirror.css?md5=db781048fb310ce33990e10fd3b6e57e" rel="stylesheet" /><script type="text/javascript" src="3rdparty/codemirror/addon/edit/matchbrackets.js?md5=0b6e5e59b34f51f8086bd1e39092bc12"></script><script type="text/javascript" src="3rdparty/codemirror/mode/htmlmixed/htmlmixed.js?md5=c5e1660e5df7066b0a82eb374c91f964"></script><script type="text/javascript" src="3rdparty/codemirror/mode/clike/clike.js?md5=22ec39a6a342bcc6291c65b924984c3c"></script><script type="text/javascript" src="3rdparty/codemirror/mode/php/php.js?md5=7c448560cfc9e8c06ba2c13dc3b85209"></script><script type="text/javascript" src="3rdparty/codemirror/mode/xml/xml.js?md5=e7180867a4312e2e75b2d87253b631d4"></script><script type="text/javascript" src="3rdparty/codemirror/mode/javascript/javascript.js?md5=7f3360019e83913ec0a90c738c8e1a84"></script><script type="text/javascript" src="3rdparty/codemirror/mode/css/css.js?md5=0cb3d98d007054d1430105fedf2a09b5"></script><script type="text/javascript" src="3rdparty/codemirror/mode/python/python.js?md5=1c1e3f8cd05fed087c70463244142050"></script><link href="3rdparty/jquery.tree/themes/default/style.min.css?md5=779fc4b400d1748ec2fb99685ad80550" rel="stylesheet" /><script type="text/javascript" src="3rdparty/jquery.fileupload/jquery.ui.widget.js?md5=3d0f0f5ca5d86c5a4b4fc33cda374a17"></script><script type="text/javascript" src="3rdparty/jquery.fileupload/jquery.iframe-transport.js?md5=f371e8d9f57329f90114d7b52dd5c7a4"></script><script type="text/javascript" src="3rdparty/jquery.fileupload/jquery.fileupload.js?md5=621acae28fe70d4976263a8ea7f8dd12"></script><link href="3rdparty/jquery.tablesorter/theme.bootstrap.min.css?md5=6867e70881e6ed2c03b6c9cf9c3152e0" rel="stylesheet" /><script type="text/javascript" src="3rdparty/jquery.tablesorter/jquery.tablesorter.min.js?md5=411633a8bb75d440b6045fee64dece95"></script><script type="text/javascript" src="3rdparty/jquery.tablesorter/jquery.tablesorter.widgets.min.js?md5=52132005045d37dd7d2baa0356b40305"></script><script type="text/javascript" src="3rdparty/jquery.tablesorter/parsers/parser-input-select.min.js?md5=956147b4f9354872dac628378ab95019"></script><script type="text/javascript" src="3rdparty/datetimepicker/jquery.datetimepicker.js?md5=b173cdb373ef26c58e45b89992d7a336"></script><link href="3rdparty/datetimepicker/jquery.datetimepicker.css?md5=3a0e62b9252ad355dbadaccaea870f4e" rel="stylesheet" /><script type="text/javascript" src="3rdparty/jquery.cron/jquery.cron.min.js?md5=d2abd106f6fa1a7689b192c8059379b6"></script><link href="3rdparty/jquery.cron/jquery.cron.css?md5=cb5a119e0ea73442fd20dda1ea210334" rel="stylesheet" /><link href="3rdparty/jquery.contextMenu/jquery.contextMenu.min.css?md5=b8d54141bd3c7f6c8a65adedb836e491" rel="stylesheet" /><script type="text/javascript" src="3rdparty/jquery.contextMenu/jquery.contextMenu.min.js?md5=5e9c2229b6c8833662932ec82ae63487"></script><script type="text/javascript" src="3rdparty/autosize/autosize.min.js?md5=ad0656589d34c18cd55206d4fd2bc0d7"></script><script type="text/javascript" src="3rdparty/moment/moment-with-locales.min.js?md5=65a5016e8598f76b25ff443edb362e62"></script><link href="desktop/css/bootstrap.css?md5=5c9d33ccd0cbf6944614d6b7357a424c" rel="stylesheet" /><link href="desktop/css/coreWidgets.css?md5=66f1b4f700c9c1009de3e6ac8be18614" rel="stylesheet" /><link href="desktop/css/desktop.main.css?md5=94043956d0ca3d83df9d9b0958ef214c" rel="stylesheet" /><link id="bootstrap_theme_css" href="core/themes/core2019_Dark/desktop/core2019_Dark.css?md5=3981805b369cb318f5c06bd5efd6d4ef" rel="stylesheet"><link id="shadows_theme_css" href="core/themes/core2019_Dark/desktop/shadows.css" rel="stylesheet">	<script src="3rdparty/snap.svg/snap.svg-min.js"></script>
</head>

<body>
	<div id="backgroundforJeedom">
		<div id="top"></div>
		<div id="bottom"></div>
	</div>
	<div id="div_jeedomLoading" style="display:none;">
		<div class="loadingBack"></div>
		<div class="loadingSpinner"></div>
	</div>
	<script>var jeedom_langage = "fr_FR"
jeedom.theme = jQuery.parseJSON("{\"default_bootstrap_theme\":\"core2019_Dark\",\"default_bootstrap_theme_night\":\"core2019_Light\",\"enableCustomCss\":\"0\",\"interface::advance::coloredIcons\":\"0\",\"interface::advance::enable\":\"0\",\"mobile_theme_color\":\"core2019_Dark\",\"mobile_theme_useAmbientLight\":\"0\",\"showBackgroundImg\":\"0\",\"theme_changeAccordingTime\":\"0\",\"theme_end_day_hour\":\"23:50\",\"theme_start_day_hour\":\"00:00\",\"widget::shadow\":\"0\",\"product_name\":\"Jeedom\",\"product_icon\":\"core\\/img\\/logo-jeedom-sans-nom-couleur-25x25.png\",\"product_image\":\"core\\/img\\/logo-jeedom-grand-nom-couleur.svg\",\"mobile_theme_color_night\":\"core2019_Dark\",\"widget::step::width\":\"40\",\"widget::step::height\":\"20\",\"widget::margin\":\"4\",\"interface::advance::coloredcats\":\"1\",\"logo_light\":\"core\\/img\\/logo-jeedom_Light.png\",\"logo_dark\":\"core\\/img\\/logo-jeedom_Dark.png\",\"logo_mobile_light\":\"core\\/img\\/jeedom_home_Light.png\",\"logo_mobile_dark\":\"core\\/img\\/jeedom_home_Dark.png\",\"objectBackgroundBlur\":\"\",\"theme_displayAsTable\":\"\",\"interface::toast::position\":\"toast-bottom-right\",\"interface::toast::duration\":\"5\",\"interface::background::dashboard\":\"core\\/img\\/background\\/jeedom_abstract_01_\",\"interface::background::analysis\":\"core\\/img\\/background\\/jeedom_abstract_02_\",\"interface::background::tools\":\"core\\/img\\/background\\/jeedom_abstract_03_\",\"interface::background::opacitylight\":\"0.4\",\"interface::background::opacitydark\":\"0.6\",\"current_desktop_theme\":\"core2019_Dark\",\"current_mobile_theme\":\"core2019_Dark\",\"css\":[],\"currentTheme\":\"core2019_Dark\"}")
</script><link href="3rdparty/animate/animate.css?md5=0b24e27593277898d3ae8bc5730c5356" rel="stylesheet" /><script type="text/javascript" src="3rdparty/animate/animate.js?md5=d0e8eb2a3986384293621cf622947e3a"></script>
<div id="wrap">
	<div style="display: none;width : 100%" id="div_alert"></div>
	<div class="bodyLogin">
		<div class="veen animated zoomIn">
			<div class="login-btn splits">
				<h3 id="titre_login_btn"></h3>
				<p id="phrase_login_btn"></p>
			</div>
			<div class="rgstr-btn splits">
				<img class="img-responsive" src="core/img/logo-jeedom-grand-nom-couleur-460x320.png" style="display:block; margin: 10% 5% 10% auto; width:45%;">
			</div>
			<div class="wrapper">
				<div id="login" tabindex="503" class="form-group">
					<h3>Login</h3>
					<div class="mail">
						<label>Nom d'utilisateur</label>
						<input type="text" id="in_login_username">
					</div>
					<div class="passwd">
						<label>Mot de passe</label>
						<input type="password" id="in_login_password">
					</div>
					<div class="passwd" id="div_twoFactorCode" style="display:none;">
						<label>Code à 2 facteurs</label>
						<input type="text" id="in_twoFactorCode" autocomplete="off">
					</div>
					<div class="checkbox">
						<input type="checkbox" id="cb_storeConnection" /><label>Enregistrer cet ordinateur</label>
					</div>
					<div class="submit center">
						<button class="dark btn-lg" id="bt_login_validate"><i class="fas fa-sign-in-alt" ></i> Connexion</button>
					</div>
											<div class="resetPassword center">
							<a href="https://doc.jeedom.com/fr_FR/howto/reset.password" target="_blank">J'ai perdu mon mot de passe</a>
						</div>
									</div>
				<div id="market" tabindex="502" class="form-group" style="display:none;">
					<h3>Je n'ai pas de compte Market</h3>
					<button class="dark btn-lg" id="bt_compte_market"><i class="fas fa-sign-in-alt" ></i> En créer un !</button>
					<hr align=center size=2 width="70%">
					<h3>J'ai un compte market</h3>
					<div class="mail">
						<input type="text" id="in_login_username_market">
						<label>Nom d'utilisateur</label>
					</div>
					<div class="passwd">
						<input type="password" autocomplete="new-password" id="in_login_password_market">
						<label>Mot de passe</label>
					</div>
					<div class="submit">
						<button class="dark btn-lg" id="bt_login_validate_market"><i class="fas fa-sign-in-alt"></i> Connecter Jeedom au Market</button>
					</div>
					<div class="submit">
						<button class="dark btn-lg" id="bt_ignore_market"><i class="fas fa-times"></i></i> Configurer plus tard</button>
					</div>
					<div class="resetPassword">
						<a href="https://www.jeedom.com/market/index.php?v=d&p=connection" target="_blank">J'ai perdu mon mot de passe</a>
					</div>
					<br/>
				</div>
				<div id="register" tabindex="500" class="form-group">
					<h3>CHANGER VOTRE MOT DE PASSE</h3>
					<div class="passwd">
						<input type="password" autocomplete="new-password" id="in_change_password">
						<label>Mot de passe</label>
					</div>
					<div class="passwd">
						<input type="password" autocomplete="new-password" id="in_change_passwordToo">
						<label>Mot de passe</label>
					</div>
					<div class="submit center">
						<button class="dark btn-lg" id="bt_change_validate">C'est parti !</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<button class="btn_help animated bounceInUp" onclick="window.open('https://doc.jeedom.com/fr_FR/premiers-pas/#tocAnchor-4')">
		?
	</button>
</div>

<link href="desktop/css/connection.css?md5=decb0d802f6b01765b71bafab9db38b3" rel="stylesheet" /><script type="text/javascript" src="core/php/getResource.php?file=desktop/js/connection.js&md5=920c8c07708696d2fe4ffdfedee68e10&lang=fr_FR"></script>		</body>

</html><script>document.title = "Mises à jour - Jeedom"</script>