<?PHP
//I'll add options for us to dynamically change the meta data and title later on. -Aric

$location = $_GET["l"];

switch ($location) {
	case "menu":
		$menuActive = " active";
		$body = "menu.php";
		break;
	case "about":
		$aboutActive = " class=\"active\"";	
		$body = "about.php";
		break;
	case "contact":
		$contactActive = " active";	
		$body = "contact.php";
		break;
	default:
		$homeActive = " class=\"active\"";	
		$body = "home.php";
}

include_once "header.php";
include_once $body;
include_once "footer.php";
?>