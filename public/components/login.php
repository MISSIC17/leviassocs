
  <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "leviassocs";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if (isset($_POST['admin_submit'])) {
        $id = $_REQUEST['admin_id'];
        $password = $_REQUEST['admin_password'];
        $sql = "SELECT * FROM admin WHERE id=" . $id . " AND password='" . $password . "';";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            header("Location: http://localhost/leviassocs/public/admin.php");
            exit();
        } else {
        };
    }
    ?>