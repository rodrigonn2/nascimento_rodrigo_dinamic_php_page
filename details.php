<!DOCTYPE html> 
<html lang="en">
<?php

    require_once('includes/connect.php');


    $query = 'SELECT * FROM employees, jobs WHERE job_id = jobs.id AND employees.id='.$_GET['id'];
    $results = mysqli_query($connect, $query);
    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Simpsons Assignment</title>
</head>
<body>
<header>
        <section class="col-span-full">
        <h2 class="hidden">Header Hiring</h2>
                <div class="logo"><span class="hiring_text">We're</span> <a href="index.php"><img src="images/Krusty_logo.png" class="k_logo" alt="Krusty Logo"></a><span class="hiring_text">Hiring</span></div>
        </section>
</header>

<section class="col-span-full employee_box">
    
    <h2 class="hidden">Employee info</h2>
    <?php

while($row = mysqli_fetch_array($results)) {

    echo ' <div class="box_employee_pic_b col-span-full m-col-start-1 m-col-end-6 l-col-start-1 m-col-end-6">
    <img src="images/'.$row['image'].'" class="dt_img" alt="img_big_employee"></div>
    <div class="box_employee_text col-span-full m-col-start-1 m-col-end-6 l-col-start-6 m-col-end-12">
    <h4 class="h4_details">Name:</h4>
        <h3 class="h3_detail">'.$row['fname'].'</h3>
    <h4 class="h4_details">Last Name:</h4>
        <h3 class="h3_detail">'.$row['lname'].'</h3>
    <h4 class="h4_details">Job Title:</h4>
        <h3 class="h3_detail">'.$row['title'].'</h3>
       
     </div>';
}
?>
</section>

<section class="grid-con pic_background">
    <h2 class="hidden">Employees Div</h2>
    <?php

$connect = new mysqli('localhost','root','root','Simpsons');

$query = 'SELECT employees.id, fname, lname, image FROM employees WHERE id = employees.id ORDER BY employees.id ASC';
$results = mysqli_query($connect, $query);

while($row = mysqli_fetch_array($results)) {

    echo ' <div class="person col-start-1 col-end-4">
        <img src="images/'.$row['image'].'" class="people_img" alt="employee name" />
        <h2 class="name_h2">'.$row['fname'].' '.$row['lname'].'</h2>
     <a href="details.php?id='.$row['id'].'" class="btn">Know me</a>  </div>';
}
?>


   
</section>

<!--<h3 class="h3_detail">'.$row['title'].'</h3>
        <h3 class="h3_detail">NAME: </h3>
        <h3 class="h3_detail">LAST NAME</h3>
        <h3 class="h3_detail">JOB</h3></div>
    
    
    </div>-->



     <footer class="col-span-full footer_back">

    <div class="fobox col-start-1 col-end-5 m-col-start-1 m-col-end-5 l-col-start-1 l-col-end-5"><img src="images/Krusty_logo.png" class="k_logo_footer" alt="Krusty Logo"></div>
    <div class="fobox_text fo_text col-start-1 col-end-5 m-col-start-6 m-col-end-13 l-col-start-6 l-col-end-13"><p>"I will personally spit into every fiftieth burger!" - The Clown, Krusty</p></div>

     </footer>

</body>
</html>