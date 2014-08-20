
<?php



function init(){

    $page = get_page();
    #maps a file to a particular page on the site
    if($page == "index.php"){
            echo"INDEX.PHP";
    }
    elseif($page == "about.php"){
        include "content/pages/about/content.php";
    }




}
function get_page(){
    return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

?>

