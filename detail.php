<?php
include('lib.php');
include('head.php');
$tooltype = array();
$tooltype['toolname']=$_POST['toolname'];
$tooltype['tooldesc']=$_POST['tooldesc'];
$tooltype['source']=$_POST['source'];
$tooltype['Ease']['status']=$_POST['Ease_status'];
$tooltype['Ease']['desc']=$_POST['Ease_desc'];
$tooltype['Xfer']['status']=$_POST['Xfer_status'];
$tooltype['Xfer']['desc']=$_POST['Xfer_desc'];
$tooltype['Assess']['status']=$_POST['Assess_status'];
$tooltype['Assess']['desc']=$_POST['Assess_desc'];
$tooltype['Comms']['status']=$_POST['Comms_status'];
$tooltype['Comms']['desc']=$_POST['Comms_desc'];
$tooltype['Create']['status']=$_POST['Create_status'];
$tooltype['Create']['desc']=$_POST['Create_desc'];
$tooltype['Blooms']['status']=$_POST['Blooms_status'];
$tooltype['Blooms']['desc']=$_POST['Blooms_desc'];
$tooltype['additional']=$_POST['additional'];
$tooltype['additionalurl']=$_POST['additionalurl'];

?>
<body>
    <?php include('nav.php'); ?>
    <main role="main" class="maincontent container-fluid">
        <a href="index.php">
			<i class="fa fa-2x fa-reply">Return to Main Page</i>
		</a>
        <div class="mb-4">&nbsp;</div>
        <?php
        tooltableheader();
        ?>
        <div class="card-deck toolrow <?php echo 'source'.$tooltype['source'];?> showrow">
            <?php
            tooltitle($tooltype);
            tooldetail($tooltype, 'Ease');
            tooldetail($tooltype, 'Xfer');
            tooldetail($tooltype, 'Assess');
            tooldetail($tooltype, 'Comms');
            tooldetail($tooltype, 'Create');
            tooldetail($tooltype, 'Blooms');
            ?>
        </div>
        <div class="card-deck toolrow <?php echo 'source'.$tooltype['source'];?> showrow">
            <div class="card bg-dark text-light">
                <h5 class="card-header text-left">Additional Information</h5>
                <div class="card-body">
                    <p class="card-text text-left"><?php echo $tooltype['additional'];?></p>
                    <a href="<?php echo $tooltype['additionalurl'];?>" title="additional information url"><?php echo $tooltype['additionalurl'];?></a>
                </div>
            </div>
        </div>
        <div class="mb-4">&nbsp;</div>

    </main>

    <?php
    include('mainfooter.php');
    include('endofbodyjs.php');
    ?>
</body>
</html>
