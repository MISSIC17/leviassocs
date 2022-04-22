    <?php
    include 'components/functions.php';
    $sconn = studentConnection();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = 'SELECT * FROM students WHERE id = ' . $id . ';';
        $result = $sconn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $name = $row['first_name'] . " " . $row["last_name"];
                $class = $row['class'];
                $section = $row['section'];
                $shift = $row['shift'];
                $number = $row['number'];
                $email = $row['email'];
                $password = $row['password'];
            }
        }
    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $class = $_POST['class'];
        $section = $_POST['section'];
        $shift = $_POST['shift'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nameArray = explode(' ', $name);
        $last_name = array_pop($nameArray);
        $first_name = implode(' ', $nameArray);

        $sql = "UPDATE students SET first_name = '" . $first_name . "',last_name = '" . $last_name . "', class=" . $class . ", section='" . $section . "', shift='" . $shift . "', number=" . $number . ", email='" . $email . "',password='" . $password . "' WHERE id=" . $id . ";";
        $result = $sconn->query($sql);
        // echo $sql;

        // if ($result == true) {
        //     echo "Record updated success";
        // } else {
        //     echo 'errorkjA';
        // }
    } ?>
    <html>
    <style>
        label {
            color: white;
        }

        form>div {
            display: grid;
            grid-template-rows: 1.5em 3em;
        }

        select {
            width: 15em;
        }
    </style>
    <?php
    include 'components/head.php';
    ?>

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
        <main class="relative grid w-3/4 grid-rows-[4em_2rem_auto] gap-10 justify-items-center justify-center mt-10">
            <div id="admin-operations-wrapper" class="relative text-white w-fit flex justify-around ">
                <button type="button" class="admin-btn-primary">
                    <a href="create.php" class="text-xl">Create Record</a </button>
                    <button type="button" class="admin-btn-active">
                        <a href="admin.php" class="text-xl">Search Record</a>
                    </button>
            </div>
            <header id="admin" class="relative text-white font-oswald text-4xl">Update Record</header>
            <form method="POST" name="update" class="flex flex-col gap-4 py-6 px-10 w-full min-h-fit justify-center border-white border-2">
                <div>
                    <label for="id">Id</label>
                    <input class="black" type="number" name="id" id="id" value="<?php echo $id; ?>">
                </div>
                <div>
                    <label for="name">Name</label>
                    <input class="black" type="text" name="name" id="name" value="<?php echo $name; ?>">
                </div>
                <div>
                    <label for="class">Class</label>
                    <select id="class" name="class">
                        <?php
                        if ($class == "11") {
                            echo "
                        <option value='11' selected>11</option>
                        <option value='12'>12</option>
                        ";
                        } else {

                            echo "
                        <option value='11'>11</option>
                        <option value='12' selected>12</option>
                        ";
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="section">Section</label>
                    <input class="black" type="text" name="section" id="section" value="<?php echo $section; ?>">
                </div>
                <div>
                    <label for="shift">Shift</label>
                    <select id="shift" name="shift">
                        <?php
                        if ($shift == "day") {
                            echo "
                        <option value='day' selected>Day</option>
                        <option value='morning'>Morning</option>
                        ";
                        } else {

                            echo "
                        <option value='day'>Day</option>
                        <option value='morning' selected>Morning</option>
                        ";
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="number">Number</label>
                    <input class="black" type="text" name="number" id="number" value="<?php echo $number; ?>">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input class="black" type="email" name="email" id="email" value="<?php echo $email; ?>">
                </div>
                <div>
                    <label for="password">Password</label>
                    <div class="grid grid-cols-[90%_10%]">

                        <input class="black h-[3em] pl-4" type="password" name="password" id="password" value="<?php echo $password; ?>">
                        <div id="update-eye" style="display:grid;" class=" relative fa fa-eye-slash  text-white place-items-center"></div>
                    </div>
                </div>
                <input class="text-white bg-primary-green relative w-1/2 p-3 self-center" type="submit" name="update" id="update" value="Update">
            </form>
        </main>
        <?php include 'components/footer.php'; ?>
    </body>

    </html>