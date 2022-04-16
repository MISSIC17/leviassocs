<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
        <form method="POST" name="admin" class="relative grid place-items-center  grid-row-6 px-10">
          <label class="relative w-full text-left text-xl text-primary-dark" for="admin_id">Admin Id</label>
          <input type="number" name="admin_id" id="admin_id" class="black">
          <label class="relative w-full text-left text-xl text-primary-dark" for="admin_password">Password</label>
          <input type="password" name="admin_password" id="admin_password" class="black">
          <input class="bg-primary-green px-6 py-2 rounded-sm cursor-pointer hover:backdrop-contrast-125 " type="submit" name="admin_submit" id="admin_submit" value="Submit">
        </form>
  <?php
  if (isset($_REQUEST['admin_submit'])) {
    echo $_POST['admin_id'];
    echo $_POST['admin_password'];
  }
  ?>

</body>

</html>