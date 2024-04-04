<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>STUDENT LOGIN</title>
   <link rel="stylesheet" href="/styles/utilities.css">
   <link rel="stylesheet" href="/styles/teacher.css">
</head>
<body>

   <div class="container">
      <div class="student">
         <img src="/imgs/chalkboard-user-solid.svg" alt="">
         <h2>student</h2>
      </div>
      <form action="">
         <div class="inp">
            <div class="data">
               <label for="">Teacher Id</label>
               <input type="text" name="id">
            </div>
            <div class="data">
               <label for="">Teacher Password</label>
               <input type="text" name="password">
            </div>
         </div>
         <div class="buttons">
            <button><a href="index.php">Back</a></button>
            <button type="submit"><a href="teacherInterface.php">Login</a></button>
         </div>
      </form>
   </div>

</body>
</html>