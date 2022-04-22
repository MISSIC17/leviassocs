<?php
$displayAll = "SELECT * FROM students";
include 'components/functions.php';
$sconn = studentConnection();

if (isset($_POST['keyword']) && $_POST['keyword'] != "") {
    $searchType = $_POST['searchType'];
    $searchKeyword = $_POST['keyword'];
    if ($searchType == "name") {
        if ($searchKeyword== trim($searchKeyword) && str_contains($searchKeyword, ' ')) {
            $temp= explode(' ', $searchKeyword);//makes it an array
            $last_name= array_pop($temp);
            $first_name= implode(' ', $temp);
            if ($last_name!== "") {
                $query = ("SELECT * FROM students WHERE first_name LIKE '%" . $first_name. "%' AND last_name LIKE '%" . $last_name. "%';");
            } else {
                $query = "SELECT * FROM students WHERE first_name LIKE '%" . $searchKeyword . "%';";
            }
        } else {
            $query = "SELECT * FROM students WHERE first_name LIKE '%" . $searchKeyword . "%';";
        }
    } else {
        $query = "SELECT * FROM students WHERE " . $searchType . " LIKE '%" . $searchKeyword . "%';";
    }
    displayRecords($sconn,$query);
} else {
    displayRecords($sconn,$displayAll);
}
