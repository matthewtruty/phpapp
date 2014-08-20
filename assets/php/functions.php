<?php



function init(){


    echo "<div class='container'>
    TEST
</div> <!-- /container -->


";
    echo $t = get_page();
   /* #maps a file to a particular page on the site
    switch ($page) {
        case "index":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, or green!";
    }*/




}
function get_page(){
    return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

