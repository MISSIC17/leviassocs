<!DOCTYPE html>
<html>
<?php include"components/head.php";?>

<body class="grid place-items-center min-h-screen bg-primary-dark">
    <nav class="grid place-items-center w-full h-16 md:h-20">
        <h1 class="relative md:text-3xl text-primary-red text-2xl">
            Trinity International College
        </h1>
        <div id="admin-banner" class="absolute right-5 bg-primary-green flex justify-center  px-5 py-3 text-2xl rounded-[500px]">
            <span class="fa fa-graduation-cap"></span>
            <p>Student Panel</p>
        </div>
    </nav>

    <main class="grid w-3/4 grid-rows-[4em_2rem_auto] min-h-[50vh] gap-10 justify-items-center  self-start mt-10">
        <div id="admin-operations-wrapper" class="relative text-white w-fit flex justify-around ">
           <button type="button" class="admin-btn-active">
                <p class="text-xl">Courses</p>
            </button>
            <button type="button" class="admin-btn-primary">
                <p class="text-xl">Assignments</p>
            </button>
            <button type="button" class="admin-btn-primary">
                <p class="text-xl">Notes</p>
            </button>
        </div>
        <header id="admin" class="relative text-white font-oswald text-4xl"> Course Details</header>
        <div id="courses-wrapper""> 
            <div id="subject1">Phyiscs</div>
            <div id="subject2">Chemistry</div>
            <div id="subject3">Mathematics</div>
            <div id="subject4">Computer</div>
            <div id="subject5">Nepali</div>
        </div>
    </main>
    <?php include 'components/footer.php'; ?>
</body>
</html>