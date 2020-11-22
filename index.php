<?php
include('lib.php');
include('head.php');
libxml_use_internal_errors(TRUE);
$toolslistobj = simplexml_load_file("tools.xml");
if ($toolslistobj === FALSE) {
    echo "There were errors parsing the XML file.\n";
    foreach(libxml_get_errors() as $error) {
        echo $error->message;
    }
    exit;
}
$objJsonDocument = json_encode($toolslistobj);
$tools = array();
$tools = json_decode($objJsonDocument, TRUE);

?>

    <body>
        <?php
        $page="toolguide";
        include('nav.php');
        ?>
        <main role="main" class="maincontent container-fluid">

            <?php
            tooltableheader();
            foreach($tools as $tool) {
                foreach($tool as $t) {
            ?>
                <div class="card-deck toolrow <?php echo 'source'.$t['source'];?> showrow">

                    <?php
                    tooltitle($t);
                    tooldetail($t, 'Ease');
                    tooldetail($t, 'Xfer');
                    tooldetail($t, 'Assess');
                    tooldetail($t, 'Comms');
                    tooldetail($t, 'Create');
                    tooldetail($t, 'Blooms');
                    ?>

                </div>
                <?php
                }
            }
            ?>

        </main>

        <?php
        include('mainfooter.php');
        include('endofbodyjs.php');
        ?>
    </body>
</html>
