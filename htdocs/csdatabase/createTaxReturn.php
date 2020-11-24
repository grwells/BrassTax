<?php
    $TID = '';
    $errors = array('TID' => '');
?>

<!DOCTYPE html>
<html>

    <?php include('templates/header.php'); ?>

    <section class="container grey-text">
        <h4 class="center">Tax Return</h4>
        <form class="white" action="createTaxReturn.php" method="POST">
            <label>Personal TID</label>
            <input type="text" name="TID" value="<?php echo htmlspecialchars($TID)?>">
            
            <div class="center">
                <input type="submit" name="submit" value ="submit" 
                class="btn buttonColor z-depth-0">
            </div>
        </form>
    </section>

    <?php include('templates/footer.php'); ?>

</html>