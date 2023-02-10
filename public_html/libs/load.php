<?

function load_template($value)
{
    $s="/home/Gowtham032/htdocs/gowtham_portfolio/public_html/";
    if($_SERVER['DOCUMENT_ROOT']==$s){
    include $_SERVER['DOCUMENT_ROOT'] . "_templates/$value.php";
}else{
    include $_SERVER['DOCUMENT_ROOT'] . "gowtham_portfolio/public_html/_templates/$value.php";
}
}
?>