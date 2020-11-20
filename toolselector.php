<?php
include('lib.php');
include('selectorlib.php');
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
        <?php include('nav.php'); ?>
        <main role="main" class="maincontent container-fluid">

            <div class="toplevel card-deck mb-4">
                <div class="card xfer">
                    <button id="xfer1" class="btn btn-success">
                        <h3>Transfer Information</h3>
                    </button>
                </div>
                <div class="card assess">
                    <button id="assess1" class="btn btn-success">
                        <h3>Assess</h3>
                    </button>
                </div>
                <div class="card interact">
                    <button id="interact1" class="btn btn-success">
                        <h3>Interact</h3>
                    </button>
                </div>
                <div class="card create">
                    <button id="create1" class="btn btn-success">
                        <h3>Co-Create</h3>
                    </button>
                </div>
            </div>

            <div class="level2 xfer card-deck hidden">
                <div class="card xfer_else">
                    <button id="else1" class="btn btn-success">
                        <h3>From somewhere else</h3>
                    </button>
                </div>
                <div class="card xfer_interactive">
                    <button id="interactive1" class="btn btn-success">
                        <h3>Interactive</h3>
                    </button>
                </div>
                <div class="card xfer_static">
                    <button id="static1" class="btn btn-success">
                        <h3>Static</h3>
                    </button>
                </div>
            </div>
            <div class="level3 xfer tool tool_url hidden">
                <p>URL</p>
            </div>
            <div class="level3 xfer_interactive card-deck hidden">
                <div class="card xfer_else">
                    <button id="else1" class="btn btn-success">
                        <h3>From somewhere else</h3>
                    </button>
                </div>
                <div class="card xfer_interactive">
                    <button id="interactive1" class="btn btn-success">
                        <h3>Interactive</h3>
                    </button>
                </div>
                <div class="card xfer_static">
                    <button id="static1" class="btn btn-success">
                        <h3>Static</h3>
                    </button>
                </div>
            </div>
            <div class="level3 xfer card-deck hidden">
                <div class="card xfer_else">
                    <button id="else1" class="btn btn-success">
                        <h3>From somewhere else</h3>
                    </button>
                </div>
                <div class="card xfer_interactive">
                    <button id="interactive1" class="btn btn-success">
                        <h3>Interactive</h3>
                    </button>
                </div>
                <div class="card xfer_static">
                    <button id="static1" class="btn btn-success">
                        <h3>Static</h3>
                    </button>
                </div>
            </div>



        </main>

        <?php
        include('mainfooter.php');
        include('endofbodyjs.php');
        ?>
    </body>
</html>
