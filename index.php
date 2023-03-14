<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <style>
        .img{
            float: right;
            width: 50%;
            margin-right: 220px;
            
        }
        .form{
            margin: 30px;
            width: 50%;
        }
        h2{
            margin: 30px;
        }
        input{
            width:50%;
            height: 20px;
        }
        #submit{
            height:40px;
        }
        label{
            font-weight : bolder;
        }
    </style>
</head>
<body bgcolor="B2FF33">
  <center>
      <h1>Blood Donation Camp</h1>
      
      
    </center>
    <img src="blood1.webp" alt="" class="img">
      
      
  <div><h2>Registration Form</h2></div>
  <form action="connect.php" method="post" class="form">
      <label for="user">Name :</label><br>
      <input type="text" name="name" required><br><br>

      <label for="email">Email :</label><br>
      <input type="text" name="email" required><br><br>

      <label for="phone">Phone :</label><br>
      <input type="text" name="phone" required><br><br>

      <label for="bgroup">Blood Group :</label><br>
      <input type="text" name="bgroup" required><br><br><br><br>

      <input type="submit" name="submit" id='submit'>


  </form>
 


    
</body>
</html>