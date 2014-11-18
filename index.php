<?PHP
$location = $_GET["l"];

switch ($location) {
	case "menu":
		$metaDescription = "";
		$metaKeywords = "";
		$headTitle = " - Menu";
		$menuActive = " class=\"active\"";
		$body = "includes/menu.php";
		break;
	case "about":
		$metaDescription = "";
		$metaKeywords = "";	
		$headTitle = " - About Ichikawa";
		$aboutActive = " class=\"active\"";
		$body = "includes/about.php";
		break;
	case "contact":
		$metaDescription = "";
		$metaKeywords = "";	
		$headTitle = " - Contact Us";	
		$contactActive = " class=\"active\"";	
		$body = "includes/contact.php";
		break;
	default:
		$metaDescription = "";
		$metaKeywords = "";	
		$homeActive = " class=\"active\"";	
		$body = "includes/home.php";
}

include_once "includes/header.php";
include_once $body;
include_once "includes/footer.php";
?>