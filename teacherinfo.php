<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Added process</title>
    <link rel="stylesheet" href="style.css">
   
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <style>
  input{
    margin: 10px;
}
            </style>

</head>
<body>
     <center>
         <p>Added Instructor Information</p>
         <div class="main">
             <form action="insert.php" method="POST" enctype="multipart/form-data" >
                <label for="">Name:</label>
                <input type="text" name="name"><br>
                <label for="">Contact :</label>
                <input type="text" name="Contact" id=""><br>
                <label for="">Image:</label>
                <input type="file" name="image" id=""><br>
                <button type="submit" name="upload">Upload</button>

              </form>
           </div>
     </center>

</body>
</html>