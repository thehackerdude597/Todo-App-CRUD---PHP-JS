<html>
  <head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="script.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  


  <nav class="navbar fixed-top navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">To-Do</a>
  </div>
</nav>


<br>
<br>
<br>
<br> 

<h1>Enter todo items, task, time</h1>

<form action="index.php" method="GET">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Task</label>
    <input name="task" type="text" class="form-control" placeholder="task" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>


  <form action="index.php" method="GET">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Task</label>
    <input name="task2" type="text" class="form-control" placeholder="task" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>



  <form action="index.php" method="GET">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Task</label>
    <input name="task3" type="text" class="form-control" placeholder="task" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>


  <form action="index.php" method="GET">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Task</label>
    <input name="task4" type="text" class="form-control" placeholder="task" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>


  <form action="index.php" method="GET">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Task</label>
    <input name="task5" type="text" class="form-control" placeholder="task" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

 <p id="usereward">Congrats on hitting your daily goal of completing one task</p>

    <title>PHP Test</title>
  </head>
  <body>

    <?php  

     $getTaskOne = $_GET['task'];

     $getTaskTwo = $_GET['task2'];



     $getTaskThree = $_GET['task3'];


     $getTaskFour = $_GET['task4'];

     $getTaskFive = $_GET['task5'];


     $printUserResultsOne = print "<h3 id='1'>$getTaskOne</h3>";
     $printUserResultsTwo = print "<h3 id='2'>$getTaskTwo</h3>";
     $printUserResultsThree = print "<h3 id='3'>$getTaskThree</h3>";
     $printUserResultsFour = print "<h3 id='4'>$getTaskFour</h3>";
     $printUserResultsFive = print "<h3 id='5'>$getTaskFive</h3>";





    
    
    
    ?> 


    <style>
     body{
       background-color: #212529;
     }

     .mb-3{
       margin-left: 140px;
       margin-right: 140px;
     }

     button{
       margin-left: 140px;
     }

     h1{
       color: white;
       text-align: center;
     }

     h3{
       color: white;
       text-align: center;

     }

     h3:hover{
       color: grey;
     }

     #usereward{
       text-align: center;
     }
      
     label{
       color: white;
      }
    
    </style>

   

  
   
 

    
  </body>
</html>
