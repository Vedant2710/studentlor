<?php include '../includes/filesLogic.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Files Upload and Download</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(to bottom right, #6e45e2, #88d3ce);
      background-size: cover;
      color: #fff;
    }

    .container {
      width: 80%;
      margin: 50px auto;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.7);
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
      animation: fadeIn 1s ease;
    }

    .row {
      margin-bottom: 20px;
      text-align: center;
    }

    input[type="text"], input[type="file"], button {
      margin: 10px auto;
      display: block;
      padding: 10px;
      width: 80%;
      border-radius: 5px;
      border: none;
      box-sizing: border-box;
      background-color: rgba(255, 255, 255, 0.8);
      transition: background-color 0.3s ease;
    }

    input[type="text"]:focus, input[type="file"]:focus, button:focus {
      outline: none;
      background-color: #fff;
    }

    button {
      background-color: #6e45e2;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #5427b4;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <h2 style="text-align: center;">Write certificate holder's name</h2>
  <input type="text" style="text-align: center;" placeholder="Enter Name"> <br>

  <div class="row">
    <form action="docupload.php" method="post" enctype="multipart/form-data">
      <h3>Upload Result file</h3>
      <input type="file" name="myfile"> <br>
      <button type="submit" name="save">Upload</button>
    </form>
  </div>
</div>

</body>
</html>
