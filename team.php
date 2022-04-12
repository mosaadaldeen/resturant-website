<?php 
define('TITLE','Team | Franklin\'s Fine Dining');
include ('includes/header.php');

?>

<div id="team-members" class="cf">
    <h1>Our team at Franklin</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et quasi aut possimus blanditiis, atque consequuntur odit doloribus neque nihil, itaque fugit, expedita accusamus. Atque vel rerum sed aut pariatur mollitia!</p>

    <hr>

    <?php 

foreach($teamMembers as $member){
    ?>
    <div class="member">
        <img src="img/<?php echo $member["img"]?>.png" alt="<?php echo $member["name"]?>">
        <h2><?php echo $member["name"]?></h2>
        <p><?php echo $member["bio"]?></p>
    </div>
    <?php 
}
?>


</div>

<hr>

<?php 
include ('includes/footer.php');

?>