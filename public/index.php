<?php include'components/login.php';?>
<!DOCTYPE html>
<html lang="en">
<?php include'components/head.php'?>
<!-- <head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home LeviAssocs</title>
  <link rel="stylesheet" href="../dist/output.css" />
  <link rel="stylesheet" href="../dist/styles.css" />
  <link rel="shortcut icon" href="../assets/lwhite.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head> -->

<body class="relative bg-primary-dark grid place-items-center min-h-screen w-full">
  <?php include 'components/nav.php'; ?>

  <main class="relative grid grid-cols-none w-full md:w-3/4 h-3/4 lg:grid-cols-2 place-items-center text-white">
    <section id="intro" class="relative grid md:gap-10 gap-5 text-center">
      <p class="lg:text-5xl text-4xl text-center lg:text-left">Welcome to</p>
      <p class="lg:text-4xl text-primary-red text-3xl text-center lg:text-left">
        Trinity International College
      </p>
      <p class="lg:text-6xl text-5xl text-center lg:text-left">Login Page</p>
    </section>
    <section id="buttons" class="relative w-full flex justify-center gap-4">
      <div id="student-btn-wrapper" class="text-center">
        <p class="text-2xl md:text-3xl">Students</p>
        <button type="button" class="relative bg-primary-green flex justify-center flex-row text-primary-dark px-6 py-3 md:px-10 md:py-5 rounded-lg text-3xl md:text-4xl transform transition-all hover:scale-105" data-active="0">
          <span class="fa fa-graduation-cap"></span>Login
        </button>
      </div>
      <div id="admin-btn-wrapper" class="text-center">
        <p class="text-2xl md:text-3xl">Admin</p>
        <button type="button" class="relative flex col-span-2 place-items-center bg-primary-navy text-primary-dark px-6 py-3 md:px-10 md:py-5 rounded-lg text-3xl md:text-4xl transform transition-all hover:scale-105">
          <img class="relative h-[1em]" src="../assets/shield-quarter-svgrepo-com.svg" />Login
        </button>
      </div>
    </section>
    <div id="form-popups" class="absolute">
      <div id="student-login-wrapper" class="hidden bg-primary-purple place-items-center grid-row-2 gap-3 py-5">
        <div id="close-btn-student" class="close-btn-forms"><i class="fa fa-close"></i></div>
        <header class="text-3xl underline underline-offset-2">Student Login</header>
        <form method="POST" name="student" class="relative grid place-items-center  grid-row-6 px-10">
          <label class="relative w-full text-left text-xl" for="student_id">Student Id</label>
          <input type="number" name="student_id" id="student_id" class="black">
          <label class="relative w-full text-left text-xl" for="student_email">College Mail</label>
          <input type="email" name="student_email" id="student_email" class="black">
          <label class="relative w-full text-left text-xl" for="student_password">Password</label>
          <input type="password" name="student_password" id="student_password" class="black">
          <input class="bg-primary-green px-6 py-2 rounded-sm cursor-pointer" type="submit" name="student_submit" id="student_submit" value="Submit">
        </form>
      </div>
      <div id="admin-login-wrapper" class="hidden bg-primary-navy place-items-center grid-row-2 gap-3 py-5">
        <div id="close-btn-admin" class="close-btn-forms"><i class="fa fa-close"></i></div>
        <header class="text-3xl underline underline-offset-2 text-primary-dark">Admin Login</header>
        <form method="POST" name="admin" class="relative grid place-items-center  grid-row-6 px-10">
          <label class="relative w-full text-left text-xl text-primary-dark" for="admin_id">Admin Id</label>
          <input type="number" name="admin_id" id="admin_id" class="black">
          <label class="relative w-full text-left text-xl text-primary-dark" for="admin_password">Password</label>
          <input type="password" name="admin_password" id="admin_password" class="black">
          <input class="bg-primary-green px-6 py-2 rounded-sm cursor-pointer hover:backdrop-contrast-125 " type="submit" name="admin_submit" id="admin_submit" value="Submit">
        </form>
      </div>
    </div>
  </main>

  <?php include 'components/footer.php'; ?>

  <script src="js/script.js"></script>
  <script src="js/form.js"></script>
</body>

</html>