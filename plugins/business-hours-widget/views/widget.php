<!-- This file is used to markup the public-facing widget. -->
<p>        <span>Monday-Friday: </span>

    <?php if (strlen(trim ($weekdays))>0):?>
        <?php echo $weekdays; ?>
    <?php else:?>
        <?php echo "closed"; ?>
    <?php endif;?>

</p>

<p>        <span>Saturday: </span>

    <?php if (strlen(trim ($saturdays))>0):?>
        <?php echo $saturdays; ?>
    <?php else: ?>
    <?php echo "closed"; ?>
    <?php endif;?>

</p>

<p>        
    <span>Sunday: </span>
    <?php if (strlen(trim ($sundays))>0):?>
        <?php echo $sundays; ?>
    <?php else: ?>
    <?php echo "closed"; ?>
    <?php endif;?>

</p>