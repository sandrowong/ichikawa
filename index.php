<?PHP
//I'll add options for us to dynamically change the meta data and title later on. -Aric

$location = $_GET["l"];

switch ($location) {
	case "menu":
		$metaDescription = "";
		$metaKeywords = "";
		$headTitle = " - Menu";
		$menuActive = " class=\"active\"";
		$body = "menu.php";
		break;
	case "about":
		$metaDescription = "";
		$metaKeywords = "";	
		$headTitle = " - About Ichikawa";
		$aboutActive = " class=\"active\"";
		$body = "about.php";
		break;
	case "contact":
		$metaDescription = "";
		$metaKeywords = "";	
		$headTitle = " - Contact Us";	
		$contactActive = " class=\"active\"";	
		$body = "contact.php";
		break;
	default:
		$metaDescription = "";
		$metaKeywords = "";	
		$homeActive = " class=\"active\"";	
		$body = "home.php";
}

include_once "header.php";
include_once $body;
include_once "footer.php";
?>