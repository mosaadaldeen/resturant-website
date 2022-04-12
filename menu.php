<?php 
define('TITLE','Menu | Franklin\'s Fine Dining');
include ('includes/header.php');

?>

<div id="menu-items">
    <h1>Our delicious Menu</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <p><em>Lorem ipsum dolor sit amet consectetur adipisicing elit.</em></p>
    <hr>

    <ul>
        <?php foreach($menuItems as $dish => $item){?>

            <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item["title"]?></a>  <sup>$</sup><?php echo $item["price"]?></li>

            <?php }?>
    </ul>
</div>




<?php 
include ('includes/footer.php');

?>