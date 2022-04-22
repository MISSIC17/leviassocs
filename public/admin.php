<!DOCTYPE html>
<html lang="en">
<?php include 'components/head.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<body class="grid place-items-center min-h-screen bg-primary-dark">
    <nav class="grid place-items-center w-full h-16 md:h-20">
        <h1 class="relative md:text-3xl text-primary-red text-2xl">
            Trinity International College
        </h1>
        <div id="admin-banner" class="absolute right-5 bg-primary-navy flex justify-center  px-5 py-3 text-2xl rounded-[500px]">

            <img class="relative h-[1.3em]" src="../assets/shield-quarter-svgrepo-com.svg" />
            <p>Admin Panel</p>
        </div>
    </nav>

    <main class="grid w-3/4 grid-rows-[4em_2rem_3rem_auto_auto] min-h-[50vh] gap-10 justify-items-center  self-start mt-10">
        <div id="admin-operations-wrapper" class="relative text-white w-fit flex justify-around ">
            <a href="create.php"><button type="button" class="admin-btn-primary">
                <p class="text-xl">Create Record</p>
            </button></a>
           <a href="admin.php"> <button type="button" class="admin-btn-active">
                <p class="text-xl">Search Record</p>
            </button></a>
        </div>
        <header id="admin" class="relative text-white font-oswald text-4xl">Search Record</header>
        <div id="search-wrapper" class="flex w-3/4 relative flex-row justify-end gap-5">
            <section class="relative grid gap-2">

                <label for="search_type" class="font-oswald text-white text-xl">Search by:</label>
                <select name="search_type" id="search_type" class="text-xl">
                    <option value="id">Id</option>
                    <option value="name">Name</option>
                    <option value="class">Class</option>
                    <option value="section">Section</option>
                    <option value="shift">Shift</option>
                    <option value="number">Number</option>
                </select>
            </section>
            <section class="relative grid gap-2">

                <label for="search_keyword" class="font-oswald text-white text-xl">Search Keyword</label>
                <input type="text" name="search_keyword" id="search_keyword" class="text-xl pl-3">
            </section>
        </div>
        <div id="records" class="text-white">
            <table id="table" class="">
                <thead>

                    <tr id="table-header" class="">
                        <th>Id</th>
                        <th>Student Name</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th>Shift</th>
                        <th>Phone no</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="tbody">

                    <?php

$sconn = new mysqli('localhost', 'root', '', 'leviassocs');
$sql = "select * from students;";
$result = $sconn->query($sql);
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
        <a href='delete.php?id=".$row['id']."'<button class='small-btn'>Delete</button></a>
        </td>";
        echo "</tr>";
    }
}
// 
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <?php include 'components/footer.php'; ?>
</body>
<script>
    $(document).ready(function() {
        $('#search_keyword').keypress(function() {
            $.ajax({
                type: 'POST',
                url: 'search.php',
                data: {
                    searchType: $('#search_type').val(),
                    keyword: $('#search_keyword').val(),
                },
                success: function(data) {
                    $('#tbody').html(data);

                }
            })
            console.log($('#search_type').val());
        })
    })
</script>

</html>