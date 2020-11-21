<?php
include('lib.php');
include('selectorlib.php');
include('head.php');
libxml_use_internal_errors(TRUE);
$toolselobj = simplexml_load_file("selector.xml");
if ($toolselobj === FALSE) {
    echo "There were errors parsing the XML file.\n";
    foreach(libxml_get_errors() as $error) {
        echo $error->message;
    }
    exit;
}
$objJsonDocument = json_encode($toolselobj);
$selection = array();
$selection = json_decode($objJsonDocument, TRUE);

?>

    <body>
        <?php include('nav.php'); ?>
        <main role="main" class="maincontent container-fluid">
<?php
echo '<p></br><hr></p>';


            foreach ($selection as $opt0) {
                // Level One.

                if ($opt0['label'] === 'one') {
echo '<div class="REMOVE_FOR_PROD border-bottom" style="border-width:4px !important;border-color:#fff !important;">';
echo '<h1>Level 1</h1>';
echo '</div>';
                    echo '<div class="toplevel card-deck mb-4">';

                        foreach ($opt0['option'] as $opt1) {
                            echo '<div class="card '.$opt1['label'].'">';
                                echo '<button id="'.$opt1['label'].'" class="btn btn-success">';
                                    echo '<h3>'.$opt1['label'].'</h3>';
                                echo '</button>';
                            echo '</div>';
                        }

                    echo '</div>';

                    foreach ($opt0['option'] as $opt1) {
                        // Level Two.
                        // Check if any results declared.
                        if (isset($opt1['result'])) {
echo '<div class="REMOVE_FOR_PROD border-bottom" style="border-width:4px !important;border-color:#fff !important;">';
echo '<h2>Level 2: Results</h2>';
echo '</div>';
                            echo '<div class="thirdlevel card-deck mb-4">';
                                echo '<div class="card '.$opt3['label'].'">';
                                    echo $opt3['result'];
                                echo '</div>';
                            echo '</div>';
                        }
                        // Display next row of options.
                        if (isset($opt1['level']['label']) && $opt1['level']['label'] === 'two') {
echo '<div class="REMOVE_FOR_PROD border-bottom" style="border-width:4px !important;border-color:#fff !important;">';
echo "<h2>Level 2: Options for - ".$opt1['label']."</h2>";
echo '</div>';
                            echo '<div class="secondlevel card-deck mb-4">';

                                foreach ($opt1['level']['option'] as $opt2) {
                                    echo '<div class="card '.$opt2['label'].'">';
                                        echo '<button id="'.$opt2['label'].'" class="btn btn-success">';
                                            echo '<h3>'.$opt2['label'].'</h3>';
                                        echo '</button>';
                                    echo '</div>';
                                }

                            echo '</div>';

                            foreach ($opt1['level']['option'] as $opt2) {
                                // Level Three.
                                if (isset($opt2['result'])) {
echo '<div class="REMOVE_FOR_PROD border-bottom" style="border-width:4px !important;border-color:#fff !important;">';
echo '<h3>Level 3: Results</h3>';
echo '</div>';
                                    echo '<div class="thirdlevel card-deck mb-4">';
                                        echo '<div class="card '.$opt2['label'].'">';
                                            echo $opt2['result'];
                                        echo '</div>';
                                    echo '</div>';
                                }
                                if (isset($opt2['level']['label']) && $opt2['level']['label'] === 'three') {
echo '<div class="REMOVE_FOR_PROD border-bottom" style="border-width:4px !important;border-color:#fff !important;">';
echo "<h3>Level 3: Options for - ".$opt2['label']."</h3>";
echo '</div>';
                                    echo '<div class="thirdlevel card-deck mb-4">';

                                        foreach ($opt2['level']['option'] as $opt3) {
                                            echo '<div class="card '.$opt3['label'].'">';
                                                echo '<button id="'.$opt3['label'].'" class="btn btn-success">';
                                                    echo '<h3>'.$opt3['label'].'</h3>';
                                                echo '</button>';
                                            echo '</div>';
                                        }

                                    echo '</div>';

                                    foreach ($opt2['level']['option'] as $opt3) {
                                        // Level Four.
                                        if (isset($opt3['result'])) {
echo '<div class="REMOVE_FOR_PROD border-bottom" style="border-width:4px !important;border-color:#fff !important;">';
echo '<h4>Level 4: Results</h4>';
echo '</div>';
                                            echo '<div class="fourthlevel card-deck mb-4">';
                                                echo '<div class="card '.$opt3['label'].'">';
                                                    echo $opt3['result'];
                                                echo '</div>';
                                            echo '</div>';
                                        }
                                        if (isset($opt3['level']['label']) && $opt3['level']['label'] === 'three') {
echo '<div class="REMOVE_FOR_PROD border-bottom" style="border-width:4px !important;border-color:#fff !important;">';
echo "<h4>Level 4: Options for - ".$opt3['label']."</h4>";
echo '</div>';
                                            echo '<div class="fourthlevel card-deck mb-4">';

                                                foreach ($opt3['level']['option'] as $opt4) {
                                                    echo '<div class="card '.$opt4['label'].'">';
                                                        echo '<button id="'.$opt4['label'].'" class="btn btn-success">';
                                                            echo '<h3>'.$opt4['label'].'</h3>';
                                                        echo '</button>';
                                                    echo '</div>';
                                                }
                                            echo '</div>';

                                            foreach ($opt3['level']['option'] as $opt4) {
                                                // Level Five.
                                                if (isset($opt4['result'])) {
echo '<div class="REMOVE_FOR_PROD border-bottom" style="border-width:4px !important;border-color:#fff !important;">';
echo '<h5>Level 5: Results</h5>';
echo '</div>';
                                                    echo '<div class="fifthlevel card-deck mb-4">';
                                                        echo '<div class="card '.$opt4['label'].'">';
                                                            echo $opt4['result'];
                                                        echo '</div>';
                                                    echo '</div>';
                                                }
                                                if (isset($opt4['level']['label']) && $opt4['level']['label'] === 'four') {
echo '<div class="REMOVE_FOR_PROD border-bottom" style="border-width:4px !important;border-color:#fff !important;">';
echo "<h5>Level 5: Options for - ".$opt4['label']."</h5>";
echo '</div>';
                                                    echo '<div class="fifthlevel card-deck mb-4">';

                                                        foreach ($opt4['level']['option'] as $opt5) {
                                                            echo '<div class="card '.$opt5['label'].'">';
                                                                echo '<button id="'.$opt5['label'].'" class="btn btn-success">';
                                                                    echo '<h3>'.$opt5['label'].'</h3>';
                                                                echo '</button>';
                                                            echo '</div>';
                                                        }
                                                    echo '</div>';

                                                    foreach ($opt4['level']['option'] as $opt5) {
                                                        // Level Six.
                                                        if (isset($opt5['result'])) {
        echo '<div class="REMOVE_FOR_PROD border-bottom" style="border-width:4px !important;border-color:#fff !important;">';
        echo '<h6>Level 6: Results</h6>';
        echo '</div>';
                                                            echo '<div class="sixthlevel card-deck mb-4">';
                                                                echo '<div class="card '.$opt5['label'].'">';
                                                                    echo $opt5['result'];
                                                                echo '</div>';
                                                            echo '</div>';
                                                        }
                                                        if (isset($opt5['level']['label']) && $opt5['level']['label'] === 'five') {
        echo '<div class="REMOVE_FOR_PROD border-bottom" style="border-width:4px !important;border-color:#fff !important;">';
        echo "<h6>Level 6: Options for - ".$opt5['label']."</h6>";
        echo '</div>';
                                                            echo '<div class="fifthlevel card-deck mb-4">';

                                                                foreach ($opt5['level']['option'] as $opt6) {
                                                                    echo '<div class="card '.$opt6['label'].'">';
                                                                        echo '<button id="'.$opt6['label'].'" class="btn btn-success">';
                                                                            echo '<h3>'.$opt6['label'].'</h3>';
                                                                        echo '</button>';
                                                                    echo '</div>';
                                                                }
                                                            echo '</div>';

                                                            foreach ($opt5['level']['option'] as $opt6) {
                                                                // Level Seven.
                                                                if (isset($opt5['result'])) {
                echo '<div class="REMOVE_FOR_PROD border-bottom" style="border-width:4px !important;border-color:#fff !important;">';
                echo '<h7>Level 7: Results</h7>';
                echo '</div>';
                                                                    echo '<div class="seventhlevel card-deck mb-4">';
                                                                        echo '<div class="card '.$opt6['label'].'">';
                                                                            echo $opt6['result'];
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                }
                                                                if (isset($opt6['level']['label']) && $opt6['level']['label'] === 'six') {
                echo '<div class="REMOVE_FOR_PROD border-bottom" style="border-width:4px !important;border-color:#fff !important;">';
                echo "<h7>Level 7: Options for - ".$opt5['label']."</h7>";
                echo '</div>';
                                                                    echo '<div class="fifthlevel card-deck mb-4">';

                                                                        foreach ($opt6['level']['option'] as $opt7) {
                                                                            echo '<div class="card '.$opt7['label'].'">';
                                                                                echo '<button id="'.$opt7['label'].'" class="btn btn-success">';
                                                                                    echo '<h3>'.$opt7['label'].'</h3>';
                                                                                echo '</button>';
                                                                            echo '</div>';
                                                                        }
                                                                    echo '</div>';




                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }

                                }
                            }
                        }

                    }
                }
            }
?>
<!--
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
-->


        </main>

        <?php
        include('mainfooter.php');
        include('endofbodyjs.php');
        ?>
    </body>
</html>
