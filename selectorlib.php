<?php
function label($label) {
    $label = str_replace(" ", "_", $label);
    echo '<div class="card '.$label.' bg-dark text-white">';
        echo '<button id="'.$label.'" class="btn btn-dark border-light">';
            echo '<h3>'.$label.'</h3>';
        echo '</button>';
    echo '</div>';
}

function result($level, $from, $tool, $theme){
    $from = str_replace(" ", "_", $from);
    $result = str_replace(" ", "_", $tool['toolname']);
    echo '<div class="'.$level.'level from'.$from.' result'.$result.' card-deck m-4 hidden ">';
        echo '<div class="card result'.$result.' bg-dark text-white">';
            tooltableheader();
            echo '<div class="card-deck toolrow">';
                tooltitle($tool, $theme);
                tooldetail($tool, 'Ease');
                tooldetail($tool, 'Xfer');
                tooldetail($tool, 'Assess');
                tooldetail($tool, 'Comms');
                tooldetail($tool, 'Create');
                tooldetail($tool, 'Blooms');
            echo '</div>';
            ?>
            <div class="card-deck toolrow <?php echo 'source'.$tool['source'];?> showrow">
                <div class="card bg-dark text-light">
                    <h5 class="card-header text-left">Additional Information</h5>
                    <div class="card-body">
                        <p class="card-text text-left"><?php echo $tool['additional'];?></p>
                        <a href="<?php echo $tool['additionalurl'];?>" title="additional information url"><?php echo $tool['additionalurl'];?></a>
                    </div>
                </div>
            </div>
            <?php
        echo '</div>';
    echo '</div>';
}

function label2($level, $from, $option) {
    $from = str_replace(" ", "_", $from);
    echo '<div class="'.$level.'level from'.$from.' card-deck mb-4 hidden">';
        foreach ($option as $opt2) {
            $label=str_replace(" ", "_", $opt2['label']);
            $label2=$opt2['label'];
            if ($opt2['label'] === 'QA') {$label2 = 'Q&A';}
            echo '<div class="card '.$label.' bg-dark text-white">';
                echo '<button id="'.$label.'" class="btn btn-dark border-light">';
                    echo '<h3>'.$label2.'</h3>';
                echo '</button>';
            echo '</div>';

        }
    echo '</div>';

}
