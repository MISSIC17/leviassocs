
<?php
include 'components/functions.php';
$sconn = studentConnection();
if (isset($_POST['submit'])) {
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
    $checkQuery = "SELECT * FROM students where id = $id";
    $check = $sconn->query($checkQuery);
    if ($check->num_rows >= 1) {
        echo ("<script>alert('The id no has already been used');</script>");
    } else {
        $sql = "INSERT INTO students (id, first_name, last_name, class, section, shift, number, email, password) values ( '$id','$first_name','$last_name','$class','$section','$shift','$number','$email','$password');";
        $result = $sconn->query($sql);
    }
} ?>
<html>
<style>
    label {
        color: white;
        font-size: 1.3em;
        margin-bottom: 0.5em;
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
            <button type="button" class="admin-btn-active">
                <a href="create.php" class="text-xl">Create Record</a </button>
                <button type="button" class="admin-btn-primary">
                    <a href="admin.php" class="text-xl">Search Record</a>
                </button>
        </div>
        <header id="admin" class="relative text-white font-oswald text-4xl">Create Record</header>
        <form method="POST" name="create" class="flex flex-col gap-4 px-10 py-6 w-full min-h-fit justify-center border-white border-2">
            <div>
                <label for="id">Id</label>
                <input type="number" name="id" id="id" class="black">
            </div>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="black">
            </div>
            <div>
                <label for="class">Class</label>
                <select id="class" name="class">
                    <option value='11'>11</option>
                    <option value='12'>12</option>
                </select>
            </div>
            <div>
                <label for="section">Section</label>
                <input type="text" name="section" id="section" class="black">
            </div>
            <div>
                <label for="shift">Shift</label>
                <select id="shift" name="shift">
                    <option value='day'>Day</option>
                    <option value='morning'>Morning</option>
                </select>
            </div>
            <div>
                <label for="number">Number</label>
                <input type="text" name="number" id="number" class="black">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="black">
            </div>
            <!-- <div>
                <input type="password" name="password" id="password" class="black">
            </div> -->
            <div>
                <label for="password">Password</label>

                    <input class="black h-[3em] pl-4" type="password" name="password" id="password">
                </div>
            </div>
            <input class="text-white bg-primary-green relative w-1/2 p-3 self-center" type="submit" name="submit" id="submit" value="Submit">
        </form>
    </main>
    <?php include 'components/footer.php'; ?>
</body>
</html>