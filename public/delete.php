
<?php
include 'components/functions.php';
?>
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
    <main class="relative grid w-3/4 grid-rows-[4em_2rem_auto] gap-10 justify-items-center justify-center mt-4 self-start">
        <div id="admin-operations-wrapper" class="relative text-white w-fit flex justify-around ">
            <button type="button" class="admin-btn-primary">
                <a href="create.php" class="text-xl">Create Record</a </button>
                <button type="button" class="admin-btn-active">
                    <a href="admin.php" class="text-xl">Search Record</a>
                </button>
        </div>
        <header id="admin" class="relative text-white font-oswald text-4xl">Delete Record</header>
        <?php
        $sconn = studentConnection();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = 'DELETE FROM students WHERE id = ' . $id . ';';
            $result = $sconn->query($sql);
            if ($result == TRUE) {
                echo "<p class='text-5xl mt-10 text-primary-red text-center relative'>Record of id no <span class='text-white'>$id</span> deleted successfully!!</p>";
            }
        }
        ?>
    </main>
    <?php include 'components/footer.php'; ?>
</body>

</html>