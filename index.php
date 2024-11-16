<!DOCTYPE html>
<html lang="en">
    <?php
   require_once('includes/connect.php');


    $query = 'SELECT employees.id, fname, lname, image FROM employees WHERE id = employees.id ORDER BY employees.id ASC';
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
                <div class="logo"><span class="hiring_text">We're</span> <img src="images/Krusty_logo.png" class="k_logo" alt="Krusty Logo"><span class="hiring_text">Hiring</span></div>
        </section>
</header>
<section class="col-span-full hero_box">
    <h2 class="hidden">Hero Image</h2>
    <div class="box_hero_text col-span-full m-col-start-1 m-col-end-12 l-col-start-1 m-col-end-12"><h2 class="h2_hero">Meet <span class="krusty_spam">Krusty</span> employees</h2></div>

    </div>
</section>

<section class="grid-con pic_background">
    <h2 class="hidden">Employees Div</h2>
   
    <?php

while($row = mysqli_fetch_array($results)) {

    echo ' <div class="person col-start-1 col-end-4">
        <a href="details.php?id='.$row['id'].'"><img src="images/'.$row['image'].'" class="people_img" alt="employee name" /></a>
        <h2 class="name_h2">'.$row['fname'].' '.$row['lname'].'</h2>
     <a href="details.php?id='.$row['id'].'" class="btn">Know me</a>  </div>';
}
?>


   
</section>

     <footer class="col-span-full footer_back">

    <div class="fobox col-start-1 col-end-5 m-col-start-1 m-col-end-5 l-col-start-1 l-col-end-5"><img src="images/Krusty_logo.png" class="k_logo_footer" alt="Krusty Logo"></div>
    <div class="fobox_text fo_text col-start-1 col-end-5 m-col-start-6 m-col-end-13 l-col-start-6 l-col-end-13"><p>"I will personally spit into every fiftieth burger!" - The Clown, Krusty</p></div>

     </footer>

</body>
</html>