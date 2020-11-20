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
    ?>
    <div class="card border-dark <?php echo $class;?> text-white">
        <h6 class="card-header text-center">Ease of use</h6>
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
        <div class="card border-dark titlecolumn">
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
        <div class="card">
            <h5 class="card-header text-center">Ease of use</h5>
            <div class="card-body">
                <p class="card-text text-center">How easily can you set this up?</p>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header text-center">Information Transfer</h5>
            <div class="card-body">
                <p class="card-text text-center">Is it a tool for disseminating information from you to your students?</p>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header text-center">Assessing</h5>
            <div class="card-body">
                <p class="card-text text-center">Will this tool allow you to assess your students learning?</p>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header text-center">Communication and Interaction</h5>
            <div class="card-body">
                <p class="card-text text-center">Can this tool be used for comms & interaction among participants (you & your students)</p>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header text-center">Co-Creation</h5>
            <div class="card-body">
                <p class="card-text text-center">Can you & your students collaborate and create content together?</p>
            </div>
        </div>
        <div class="card">
            <h5 class="card-header text-center">Bloom's</h5>
            <div class="card-body">
                <p class="card-text text-center">Remember, Understand, Apply, Analyse, Evaluate, Create</p>
            </div>
        </div>
    </div>
<?php
}
function tooltitle($t) {
?>
    <div class="card border-dark titlecolumn">
        <h5 class="card-header text left">
            <?php echo $t['toolname'];?>
        </h5>

        <div class="card-body">
            <p class="card-text text-center">
                <?php echo $t['tooldesc'];?>
            </p>
        </div>
        <div class="card-footer text-muted">
            <p class="text-center"><em>
                <?php echo $t['source'];?>
            </em></p>
        </div>
    </div>
<?php
}
