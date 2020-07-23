<?php $secondary = TRUE; 

$page_subtitle = 'Getting you closer to your dream home';

include '../includes/db.php';


if(null !== $_GET['id']){

    $ID = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM testimonial WHERE test_ID='$ID' ";

    $result = mysqli_query($conn, $sql) or die();

    $row = mysqli_fetch_array($result);

}

$name = $row['test_name'];
$testimonial = $row['testimonial'];
$img = $row['img'];

$page_title = $name . '\'s testimonial';

//Figure out how to not query the same Testimonial as the current one being displayed.....
$currentID = $ID;

?>


<?php include '../includes/secondary_header.php'?>

<div class="container pt-5 pb-5">
    <row>
        <div class="col pt-5 pb-3">
            <img class="img-thumbnail rounded-circle mx-auto d-block" src="../assets/images/<?php echo $img ?>" alt="">

        </div>
    </row>
    <row>
        <div class="col-lg-8 mx-auto">
            <h1 class="text-center pb-3"><?php echo $name; ?></h1>
            <p><?php echo $testimonial; ?>
            </p>
        </div>
    </row>



</div>

<div class="container-fluid pb-5 pt-5 bg-light">

<div class="col">
<h1 class="text-center pb-5">Check Out Some More Tesimonials</h1>
<div class="scrollmenu">

<?php
while($row = mysqli_fetch_assoc($result)){?>
<a href="single_test.php?id=<?php echo $row['test_ID']; ?>">
            <div class="col">
                <img class="img-thumbnail round mx-auto d-block" src="../assets/images/<?php echo $row['img'] ?>" alt="">
            </div>

            </a>
<?php } 

?>

        
        
        
        ...
    </div>
</div>
</div>


    







    <?php include '../includes/footer.php';?>