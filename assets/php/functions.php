
<?php



function init(){

   echo  $page = get_page();
    #maps a file to a particular page on the site
    switch ($page) {
        case "index.php":
            include("content/pages/home.php");
        case "blue":
            echo "Your favorite color is bluddde!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:

    }




}
function get_page(){
    return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

?>

