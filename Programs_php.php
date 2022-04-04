<!DOCTYPE html>
<html>
    <head>
        <title>AriWeb</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&family=Oswald:wght@700&display=swap" rel="stylesheet"> 
    </head>
    <body>
    <section class = "sub-phpheader">
        <nav>
            <a href="index.html"><img src=""> </a>
            <div class= "nav-links">
                <ul>
                    <li><a href=" index.html">HOME</a></li>
                    <li><a href="CV.html">CV</a></li>
                    <li><a href="Programs_php.php">Programs with php</a></li>
                    <li><a href="Programs_js.html">Programs with JS</a></li>
                </ul>
            </div>
        </nav>

    <div class ="text-box-h5">
        <p> Program that prints my name and country<p>
</div>
        <div class = "text-box-h2">
        <?php 

$name = "Ariel";
$country = "Puerto Rico";
echo "Hi im $name, and im from $country ";

?>
</div>
<div class ="text-box-h6">
        <p> Program that calculates 9 by each number from 1 to 10<p>
</div>
<div class ="text-box-h3">
<?php 

$num = 9;  
for($i=1; $i<=10; $i++)   
{
$product = $i*$num;
echo "$num * $i = $product" ;   
echo '<br>';	 
}  

?>
</div>
<div class ="text-box-h7">
        <p> Program that calculates the factorial of 10<p>
</div>

<div class = "text-box-h4">
<?php 

$n = 10;  
$f = 1;  
for ($i=$n; $i>=1; $i--)   
{  
$f = $f * $i;  
}  
echo "$n! = $f";  

?>
</div>
    </section>
        
    </body>
</html>
