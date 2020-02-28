<!-- This file is used to markup the public-facing widget. -->






<p>        
    <span><i class="fas fa-phone-alt"> </i>: </span>

    <?php if (strlen(trim ($phone))>0):?>
        <?php echo "<a href='$phone'>$phone</a>"; ?>
    <?php else:?>
        <?php echo "none"; ?>
    <?php endif;?>

</p>

<p>        
    <span><i class="fas fa-envelope-square"></i>: </span>

    <?php if (strlen(trim ($email))>0):?>
        <?php echo "<a href='$email'>$email</a>"; ?>
    <?php else: ?>
    <?php echo "none"; ?>
    <?php endif;?>

</p>

<p>        
    <?php if (strlen(trim ($address))>0):?>    
        <span><i class="fas fa-map-marker-alt"></i>: </span>
        <?php echo $address; ?>
    <?php endif;?>

</p>

<p>        
    <?php if (strlen(trim ($facebook))>0): ?>
        <span><i class="fab fa-facebook-square"></i> </span>
        <?php echo "<a href='$facebook'></a>"; ?>
    <?php endif;?>
      
    <?php if (strlen(trim ($twitter))>0): ?>
        <span><i class="fab fa-twitter-square"></i> </span>
        <?php echo "<a href='$twitter'></a>"; ?>
    <?php endif;?>
      
    <?php if (strlen(trim ($google))>0): ?>
        <span><i class="fab fa-google-plus-square"> </i> </span>
        <?php echo "<a href='$google'></a>"; ?>
    <?php endif;?>
</p>