<?php 
// Defaults
$SETTINGS["available_languages"] = array("en", "de");
$SETTINGS["default_lang"] = "de";
$SETTINGS["default_page"] = "homepage";
$SETTINGS["default_title"] = "";
$SETTINGS["default_metadesc"] = "Mode f&uuml;r Individualisten";


// Finding $lang
if (isset($_GET["lang"])) {
    $lang = $_GET["lang"];
    if (!in_array($lang, $SETTINGS["available_languages"])) {
        $lang = $SETTINGS["default_lang"];
    }
} else {
	$lang = $SETTINGS["default_lang"];
}

// Finding $page
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = $SETTINGS["default_page"];
}

// Setting Title
if (isset($_GET["title"])) {
    $title = $_GET["title"];
} else {
    $title = $SETTINGS["default_title"];
}

// Setting Year
if (isset($_GET["year"])) {
    $year = $_GET["year"];
}

// Setting Meta Description
if (isset($_GET["metadesc"])) {
    $metadesc = $_GET["metadesc"];
} else {
    $metadesc = $SETTINGS["default_metadesc"];
}

// Translation
include "inc/translation/translation.".$lang.".php";

// Header Include
include "inc/header.php";

// Page Inclues
if ($page == "homepage") {
    include "home/home.php";
	$metadesc = "$MetaHome";
// Collection
} else if ($page == "collection") {
    include "collection/collection.php";
	$title ="$Coll - ";
	$metadesc = "$MetaCollection";
} else if ($page == "collcurrent") {
    include "collection/collcurrent.php";
	$title ="$SS - ";
	$metadesc = "$MetaSS";
} else if ($page == "collarchive") {
    include "collection/collarchive.php";
	$title ="$AW - ";
	$metadesc = "$MetaAW";
} else if ($page == "lookbook") {
    include "collection/lookbook.php";
	$title ="$Coll_LB - ";
	$metadesc = "$MetaLookbook";
} else if ($page == "impressions") {
    include "collection/impressions.php";
	$title ="$Coll - ";
	$metadesc = "$Impressions";
} else if ($page == "philosophy") {
    include "collection/philosophy.php";
	$title ="$Coll_Philosophy - ";
	$metadesc = "$MetaPhilosophy";
// Quality
} else if ($page == "quality") {
    include "quality/quality.php";
	$title ="$Qual - ";
	$metadesc = "$MetaQuality";
} else if ($page == "material") {
    include "quality/material.php";
	$title ="$Qual_Material - ";
	$metadesc = "$MetaMaterial";
} else if ($page == "linen") {
    include "quality/linen.php";
	$title ="$Linen - ";
	$metadesc = "$MetaMaterial";
} else if ($page == "cotton") {
    include "quality/cotton.php";
	$title ="$Cotton - ";
	$metadesc = "$MetaMaterial";
} else if ($page == "boiledwool") {
    include "quality/boiledwool.php";
	$title ="$Boiledwool - ";
	$metadesc = "$MetaMaterial";
} else if ($page == "silk") {
    include "quality/silk.php";
	$title ="$Silk - ";
	$metadesc = "$MetaMaterial";
} else if ($page == "hemp") {
    include "quality/hemp.php";
	$title ="$Hemp - ";
	$metadesc = "$MetaMaterial";
} else if ($page == "development") {
    include "quality/development.php";
	$title ="$Qual_Development - ";
	$metadesc = "$MetaDevelopment";
} else if ($page == "production") {
    include "quality/production.php";
	$title ="$Qual_Production - ";
	$metadesc = "$MetaProduction";
} else if ($page == "qa") {
    include "quality/qa.php";
	$title ="$Qual_QA - ";
	$metadesc = "$MetaQA";
// News
} else if ($page == "news") {
    include "news/news_" . $year . ".php";
	$title ="$News - ";
	$metadesc = "$MetaNews";
// Company
} else if ($page == "company") {
    include "company/company.php";
	$title ="$Comp - ";
	$metadesc = "$MetaCompany";
} else if ($page == "press") {
	include "company/press.php";
	$title ="$Comp_Press - ";
	$metadesc = "$MetaPress";
} else if ($page == "facts") {
    include "company/facts.php";
	$title ="$Comp_Facts - ";
	$metadesc = "$MetaFactst";
} else if ($page == "team") {
    include "company/team.php";
	$title ="$Comp_Team - ";
	$metadesc = "$MetaTeam";
} else if ($page == "jobs") {
    include "company/jobs.php";
	$title ="$Comp_Jobs - ";
	$metadesc = "$MetaJobs";
// B2B
} else if ($page == "b2b") {
    include "b2b/b2b.php";
	$title ="$B2b - ";
	$metadesc = "$MetaB2b";
} else if ($page == "plans") {
    include "b2b/plans.php";
	$title ="$B2b_Plans - ";
	$metadesc = "$MetaPlans";
} else if ($page == "dates") {
    include "b2b/dates.php";
	$metadesc = "$MetaDates";
	$title ="$B2b_Dates - ";
} else if ($page == "sales") {
    include "b2b/sales.php";
	$title ="$B2b_Sales - ";
	$metadesc = "$MetaSales";
} else if ($page == "b2bnewsletter") {
    include "b2b/b2bnewsletter.php";
	$title ="$B2b_Newsletter - ";
	$metadesc = "$MetaNewsletter";
} else if ($page == "terms") {
    include "b2b/terms.php";
	$title ="$B2b_Terms - ";
	$metadesc = "$MetaTerms";
} else if ($page == "downloads") {
    include "b2b/downloads.php";
	$title ="$B2b_Downloads - ";
	$metadesc = "$MetaDownloads";
// Stores
} else if ($page == "stores") {
    include "stores/stores.php";
	$title ="$Stores - ";
	$metadesc = "$MetaStores";
} else if ($page == "retail") {
    include "stores/retail.php";
	$title ="$Stores_Retail - ";
	$metadesc = "$MetaRetail";
} else if ($page == "storesonline") {
    include "stores/online.php";
	$title ="$Stores_Online - ";
	$metadesc = "$MetaOnline";
// Footer
} else if ($page == "imprint") {
    include "imprint/imprint.php";
	$title ="$Imprint - ";
} else if ($page == "privacy") {
    include "privacy/privacy.php";
	$title ="$Headline_Privacy - ";
} else if ($page == "contact") {
    include "contact/contact.php";
	$title ="$Contact - ";
} else if ($page == "thankyou") {
    include "contact/thankyou.php";
	$title ="$Contact - ";
// Redirect
} else if ($page == "redirect") {
    include "inc/redirect.php";
	$title ="$Headline_Redirect - ";
// ...
} else {
	include "home/home.php";
}

// Footer Include
include "inc/footer.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">

<head>

	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
	<meta name="author" content="OSKA Textilvertriebs GmbH" />
	<meta name="description" content="<?php echo "$metadesc" ?>"> 
	<meta name="keywords" content="Oska Textilvertriebs GmbH,Helmut Bayer,individualisten,individual fashion,knitware,Damenmode,Herrenmode,Womenswear,Menswear,Walk,boiled wool,linen,leather,Leinen,Hanf,hemp,Seide,silk,Leder,reine Naturfasern,natural fabrics,accessoires,jewelry,Schmuck,Homewear,Oska M&uuml;nchen,Oska London,Oska Berlin,Oska Hamburg,Oska Hamburg,Outlet,Dirnismaning,F&uuml;nf H&ouml;fe,Lagerprogramme,In-Stock Programme,Textileinzelhandel" /> 
	<meta name="copyright" content="OSKA Textilvertriebs GmbH" />
	<meta name="robots" content="index,follow" />
	
	<meta name="google-site-verification" content="kic9lJRha08S4JtiYrH5pqL5laQnDvBlVMSlT7heeT8" />
	
	<link href="css/reset.css" rel="stylesheet" type="text/css" />
	<link href="css/960gs.css" rel="stylesheet" type="text/css" />
	<link href="css/screen.css" rel="stylesheet" media="screen" />
	<link href="css/print.css" rel="stylesheet" media="print" />
	<link href="css/superfish.css" rel="stylesheet" type="text/css" />
	<link href="http://fast.fonts.com/cssapi/cbf89c1d-3b23-4687-bfb3-2c7119e970c8.css" rel="stylesheet" type="text/css" />
	
	<!--[if IE]>
		<link href="../css/ie.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	
	<title><?php echo "$title" ?> OSKA</title>
	<link rel="SHORTCUT ICON" href="http://www.oska.de/images/favicon.ico">
</head>

<body>

	<noscript>
	<meta http-equiv="refresh" content="2; URL=./error/nojs.html">
	</noscript>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.bgiframe.min.js"></script> 
	<script type="text/javascript" src="js/jquery.hoverIntent.min.js"></script> 
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/hyphenate.js" ></script>
	<script type="text/javascript" src="js/jumpmenu.js" ></script>
	<script type="text/javascript" src="js/swfobject.js" ></script>
	
	<script type="text/javascript"> 
		$(document).ready(function(){ 
			$("ul.sf-menu").superfish({delay: 000, animation: {opacity:'show',height:'show'}}).find('ul').bgiframe();                 
		});
	</script>
	
<a name='top'></a>
<div id="content" class="container_12">
	<?php echo "$Header";?>
	<?php echo "$Content" ?>
	<?php echo "$Footer" ?>
</div>

<?php echo "$Galleria" ?>
<?php echo "$Cycle" ?>

<!-- Google Analytics -->
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script> 
	<script type="text/javascript"> 
		try {
		var pageTracker = _gat._getTracker("UA-3627785-1");
		_gat._anonymizeIp();
		pageTracker._trackPageview();
		} catch(err) {}
	</script>
	
</body>
</html>