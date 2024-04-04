<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>STUDENT REGISTRATION</title>
   <link rel="stylesheet" href="/styles/utilities.css">
   <link rel="stylesheet" href="/styles/student.css">
</head>
<body>

   <div class="container">
      <div class="student">
         <img src="/imgs/icons8-student-96.png" alt="">
         <h2>student</h2>
      </div>
      <form action="">
         <div class="inp">
            <div class="data">
               <label for="">Student Id</label>
               <input type="text" name="id">
            </div>
            <div class="data">
               <label for="">Student First Name</label>
               <input type="text" name="firstname">
            </div>
         </div>
         <div class="inp">
            <div class="data">
               <label for="">Student Last Name</label>
               <input type="text" name="lastname">
            </div>
            <div class="data">
               <label for="">Student Middle Name</label>
               <input type="text" name="middlename">
            </div>
         </div>
         <div class="inp">
            <div class="data">
               <label for="">Student Email</label>
               <input type="text" name="email">
            </div>
            <div class="data">
               <label for="">Student Passsword</label>
               <input type="text" name="password">
            </div>
         </div>
         <div class="buttons">
            <button type="cancel"><a href="index.php">Cancel</a></button>
            <button type="submit"><a href="studentLogin.php">Submit</a></button>
         </div>
      </form>
      
   </div>
   
</body>
</html>