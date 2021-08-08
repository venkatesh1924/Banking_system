<html>
<head><title>Banking System </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href ="first.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
</head>
<body>
<center>
<h1>WELCOME TO SPARKS FOUNDATION BANK </h1></center>
<div class="col-md act">
        <img src="logo.png" class="img-fluid" width="100px">
</div>
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#contact">About</a></li>
</ul>
</br>
<div class="container">
        <h2 class="text-center pt-4">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    include 'connectdatabase.php';
                    $sql = "SELECT * FROM customers";
                    $result = mysqli_query($conn,$sql);
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['currentbalance']?></td>
                        <td><a href="displayuser.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transfer</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
<div id ="contact">
<center><h1>CONTACT ME</h1>
<span id ="des-con">___ Get in touch ___</span>
</center>
</div>
<footer><center>
<p>DESIGNED BY <b>VENKATESH DARAMALLA</b></p>
<p>&copy; 2021 All Rights Reserved <b>Sparks Foundation</b></p>
</center></footer>
         </body>
</html>