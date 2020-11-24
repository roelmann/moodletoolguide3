<?php
function tooldetail($t, $ped) {
    if ($t[$ped]['status'] === 'yes') {
        $icon = "fa-check-square-o";
        $class = "bg-success";
    } else if ($t[$ped]['status'] === 'maybe') {
        $icon = "fa-exclamation-triangle";
        $class = "bg-warning";
    } else if ($t[$ped]['status'] === 'no') {
        $icon = "fa-times-circle";
        $class = "bg-danger";
    } else {
        $icon = "circle";
        $class = "";
    }
    switch ($ped) {
        case 'Ease':
            $pedtitle="Ease of use";
        break;
        case 'Xfer':
            $pedtitle="Information transfer";
        break;
        case 'Assess':
            $pedtitle="Assessing";
        break;
        case 'Comms':
            $pedtitle="Communication and Interaction";
        break;
        case 'Create':
            $pedtitle="Co-Creation";
        break;
        case 'Blooms':
            $pedtitle="Bloom's";
        break;
        default:
            $pedtitle="";
    }
    ?>
    <div class="card border-dark <?php echo $class;?> text-white">
        <h6 class="card-header text-center"><?php echo $pedtitle;?></h6>
        <div class="card-body">
            <i class="fa fa-3x <?php echo $icon;?>" data-toggle="popover"
                data-content="<?php echo $t[$ped]['desc'];?>"></i>
            <i class="fa fa-hand-o-left mobinst">Tap</i>
            <p class="comment"><?php echo $t[$ped]['desc'];?></p>
        </div>
    </div>
<?php
}
function tooltableheader() {
    ?>
    <div class="card-deck titlerow">
        <div class="card bg-dark text-light titlecolumn">
            <h5 class="card-header text-right">Pedagogy
                <i class="fa fa-hand-o-right" aria-hidden="true"></i>
            </h5>
            <h5 class="card-header text left">Technology
                <i class="fa fa-hand-o-down" aria-hidden="true"></i>
            </h5>

            <div class="card-body">
                <p class="card-text text-center">Click on the tool title for additional information.</p>
            </div>
        </div>
        <div class="card bg-dark text-light">
            <h5 class="card-header text-center">Ease of use</h5>
            <div class="card-body">
                <p class="card-text text-center">How easily can you set this up?</p>
            </div>
        </div>
        <div class="card bg-dark text-light">
            <h5 class="card-header text-center">Information Transfer</h5>
            <div class="card-body">
                <p class="card-text text-center">Is it a tool for disseminating information from you to your students?</p>
            </div>
        </div>
        <div class="card bg-dark text-light">
            <h5 class="card-header text-center">Assessing</h5>
            <div class="card-body">
                <p class="card-text text-center">Will this tool allow you to assess your students learning?</p>
            </div>
        </div>
        <div class="card bg-dark text-light">
            <h5 class="card-header text-center">Communication and Interaction</h5>
            <div class="card-body">
                <p class="card-text text-center">Can this tool be used for comms & interaction among participants (you & your students)</p>
            </div>
        </div>
        <div class="card bg-dark text-light">
            <h5 class="card-header text-center">Co-Creation</h5>
            <div class="card-body">
                <p class="card-text text-center">Can you & your students collaborate and create content together?</p>
            </div>
        </div>
        <div class="card bg-dark text-light">
            <h5 class="card-header text-center">Bloom's</h5>
            <div class="card-body">
                <p class="card-text text-center">Remember, Understand, Apply, Analyse, Evaluate, Create</p>
            </div>
        </div>
    </div>
<?php
}
function tooltitle($t, $theme) {
?>

    <div class="card border-dark titlecolumn">
        <form action="detail.php?theme=<?php echo $theme;?>" method="post">

            <input type="hidden" name="toolname" value="<?php echo $t['toolname'];?>">
            <input type="hidden" name="tooldesc" value="<?php echo $t['tooldesc'];?>">
            <input type="hidden" name="source" value="<?php echo $t['source'];?>">
            <input type="hidden" name="Ease_status" value="<?php echo $t['Ease']['status'];?>">
            <input type="hidden" name="Ease_desc" value="<?php echo $t['Ease']['desc'];?>">
            <input type="hidden" name="Xfer_status" value="<?php echo $t['Xfer']['status'];?>">
            <input type="hidden" name="Xfer_desc" value="<?php echo $t['Xfer']['desc'];?>">
            <input type="hidden" name="Assess_status" value="<?php echo $t['Assess']['status'];?>">
            <input type="hidden" name="Assess_desc" value="<?php echo $t['Assess']['desc'];?>">
            <input type="hidden" name="Comms_status" value="<?php echo $t['Comms']['status'];?>">
            <input type="hidden" name="Comms_desc" value="<?php echo $t['Comms']['desc'];?>">
            <input type="hidden" name="Create_status" value="<?php echo $t['Create']['status'];?>">
            <input type="hidden" name="Create_desc" value="<?php echo $t['Create']['desc'];?>">
            <input type="hidden" name="Blooms_status" value="<?php echo $t['Blooms']['status'];?>">
            <input type="hidden" name="Blooms_desc" value="<?php echo $t['Blooms']['desc'];?>">
            <input type="hidden" name="additional" value="<?php echo $t['additional'];?>">
            <input type="hidden" name="additionalurl" value="<?php echo $t['additionalurl'];?>">
            <button type="submit" class="bg-dark border-0 w-100">

            <div class="card-body text-light" style="width:100%">
                <h4>
                    <?php echo $t['toolname'];?>
                </h4>
                <p class="card-text text-center">
                    <?php echo $t['tooldesc'];?>
                </p>
                <p><br/></p>
                <p class="text-center"><em>
                    <?php echo $t['source'];?>
                </em></p>
            </div>
        </button>
        </form>

    </div>

<?php
}
