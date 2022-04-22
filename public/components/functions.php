<?php

function displayRecords($conn, $query)
{
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr class=''>";
            echo "<td class='text-white '>" . $row['id'] . "</td>";
            echo "<td class='text-white '>" . $row['first_name'] . " " . $row['last_name'] . "</td>";
            echo "<td class='text-white '>" . $row['class'] . "</td>";
            echo "<td class='text-white '>" . $row['section'] . "</td>";
            echo "<td class='text-white '>" . $row['shift'] . "</td>";
            echo "<td class='text-white '>" . $row['number'] . "</td>";
            echo "<td class='text-white '>" . $row['email'] . "</td>";
            echo "<td class='text-white '> 
                                <a href='update.php?id=" . $row['id'] . "'><button class='small-btn bg-primary-purple'>Update</button></a>
                                <a href='delete.php?id=" . $row['id'] . "'<button class='small-btn'>Delete</button></a>
                                </td>";
            echo "</tr>";
        }
    }
};
function studentConnection()
{

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "leviassocs";
    $sconn = new mysqli($servername, $username, $password, $dbname);
    return $sconn;
}
