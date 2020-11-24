<?php
include('lib.php');
include('selectorlib.php');
include('head.php');
libxml_use_internal_errors(TRUE);
// Get selector framework.
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
// Get tool detail list.
$toolslistobj = simplexml_load_file("tools.xml");
if ($toolslistobj === FALSE) {
    echo "There were errors parsing the XML file.\n";
    foreach(libxml_get_errors() as $error) {
        echo $error->message;
    }
    exit;
}
$objJsonDocument = json_encode($toolslistobj);
$tools = $tool = array();
$tools = json_decode($objJsonDocument, TRUE);
foreach ($tools as $ts) {
    foreach ($ts as $t){
        $toolname = $t['toolname'];
        $tool[$toolname] = $t;
    }
}

?>

    <body>
        <?php
        $page="selector";
        include('nav.php');
        ?>
        <header>
            <div class="jumbotron" style="height:175px";>
                <img src="images/moodlelogo.png" width="150px" height="100px" style="float:left;">
                <div style="float:left;margin-left:30px;">
                    <h1>Moodle Tool Selector</h1>
                    <a href="toolguide.php?theme=<?php echo $theme;?>" title="toolguide link">
                        <i class="fa fa-2x fa-reply">&nbsp;</i>Go To Tool Guide
                    </a>
                </div>
            </div>
        </header>

        <main role="main" class="maincontent container-fluid">
            <?php

            foreach ($selection as $opt0) {
                // Level One.

                if ($opt0['label'] === 'one') {
                    echo '<div class="toplevel card-deck mb-4">';
                        foreach ($opt0['option'] as $opt1) {
                            label($opt1['label']);
                        }
                    echo '</div>';

                    foreach ($opt0['option'] as $opt1) {
                        // Level Two.
                        // Check if any results declared.
                        if (isset($opt1['result'])) {
                            $result = $opt1['result'];
                            result("second", $opt1['label'], $tool[$result], $theme);
                        }
                        // Display next row of options.
                        if (isset($opt1['level']['label']) && $opt1['level']['label'] === 'two') {
                            label2("second", $opt1['label'], $opt1['level']['option']);

                            foreach ($opt1['level']['option'] as $opt2) {
                                // Level Three.
                                if (isset($opt2['result'])) {
                                    $result = $opt2['result'];
                                    result("third", $opt2['label'], $tool[$result], $theme);
                                }
                                if (isset($opt2['level']['label']) && $opt2['level']['label'] === 'three') {
                                    label2("third", $opt2['label'], $opt2['level']['option']);

                                    foreach ($opt2['level']['option'] as $opt3) {
                                        // Level Four.
                                        if (isset($opt3['result'])) {
                                            $result = $opt3['result'];
                                            result("fourth", $opt3['label'], $tool[$result], $theme);
                                        }
                                        if (isset($opt3['level']['label']) && $opt3['level']['label'] === 'four') {
                                            label2("fourth", $opt3['label'], $opt3['level']['option']);

                                            foreach ($opt3['level']['option'] as $opt4) {
                                                // Level Five.
                                                if (isset($opt4['result'])) {
                                                    $result = $opt4['result'];
                                                    result("fifth", $opt4['label'], $tool[$result], $theme);
                                                }
                                                if (isset($opt4['level']['label']) && $opt4['level']['label'] === 'five') {
                                                    label2("fifth", $opt4['label'], $opt4['level']['option']);

                                                    foreach ($opt4['level']['option'] as $opt5) {
                                                        // Level Six.
                                                        if (isset($opt5['result'])) {
                                                            $result = $opt5['result'];
                                                            result("sixth", $opt5['label'], $tool[$result], $theme);
                                                        }
                                                        if (isset($opt5['level']['label']) && $opt5['level']['label'] === 'six') {
                                                            label2("sixth", $opt5['label'], $opt5['level']['option']);

                                                            foreach ($opt5['level']['option'] as $opt6) {
                                                                // Level Seven.
                                                                if (isset($opt6['result'])) {
                                                                    $result = $opt6['result'];
                                                                    result("seventh", $opt6['label'], $tool[$result], $theme);
                                                                }
                                                                if (isset($opt6['level']['label']) && $opt6['level']['label'] === 'seven') {
                                                                    label2("seventh", $opt6['label'], $opt6['level']['option']);
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

        </main>

        <?php
        include('mainfooter.php');
        include('endofbodyjs.php');
        ?>
    </body>
</html>
