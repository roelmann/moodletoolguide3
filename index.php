<?php
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
            foreach($tools as $tool) {
                foreach($tool as $t) {
            ?>
                <div class="card-deck toolrow <?php echo 'source'.$t['source'];?> showrow">

                    <!-- Row title -->
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

                    <!--Ease of Use -->
                    <?php
                    if ($t['Ease']['status'] === 'yes') {
                        $icon = "fa-check-square-o";
                        $class = "bg-success";
                    } else if ($t['Ease']['status'] === 'maybe') {
                        $icon = "fa-exclamation-triangle";
                        $class = "bg-warning";
                    } else if ($t['Ease']['status'] === 'no') {
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
                                data-content="<?php echo $t['Ease']['desc'];?>"></i>
                                <i class="fa fa-hand-o-left mobinst">Tap</i>
                            <p class="comment"><?php echo $t['Ease']['desc'];?></p>
                        </div>
                    </div>

                    <!--Information Transfer -->
                    <?php
                    if ($t['Xfer']['status'] === 'yes') {
                        $icon = "fa-check-square-o";
                        $class = "bg-success";
                    } else if ($t['Xfer']['status'] === 'maybe') {
                        $icon = "fa-exclamation-triangle";
                        $class = "bg-warning";
                    } else if ($t['Xfer']['status'] === 'no') {
                        $icon = "fa-times-circle";
                        $class = "bg-danger";
                    } else {
                        $icon = "circle";
                        $class = "";
                    }
                    ?>
                    <div class="card border-dark <?php echo $class;?> text-white">
                        <h6 class="card-header text-center">Info Xfer</h6>
                        <div class="card-body">
                            <i class="fa fa-3x <?php echo $icon;?>" data-toggle="popover"
                                data-content="<?php echo $t['Xfer']['desc'];?>"></i>
                                <i class="fa fa-hand-o-left mobinst">Tap</i>
                            <p class="comment"><?php echo $t['Xfer']['desc'];?></p>
                        </div>
                    </div>

                    <!--Assessing -->
                    <?php
                    if ($t['Assess']['status'] === 'yes') {
                        $icon = "fa-check-square-o";
                        $class = "bg-success";
                    } else if ($t['Assess']['status'] === 'maybe') {
                        $icon = "fa-exclamation-triangle";
                        $class = "bg-warning";
                    } else if ($t['Assess']['status'] === 'no') {
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
                                data-content="<?php echo $t['Assess']['desc'];?>"></i>
                                <i class="fa fa-hand-o-left mobinst">Tap</i>
                            <p class="comment"><?php echo $t['Assess']['desc'];?></p>
                        </div>
                    </div>

                    <!--Communication -->
                    <?php
                    if ($t['Comms']['status'] === 'yes') {
                        $icon = "fa-check-square-o";
                        $class = "bg-success";
                    } else if ($t['Comms']['status'] === 'maybe') {
                        $icon = "fa-exclamation-triangle";
                        $class = "bg-warning";
                    } else if ($t['Comms']['status'] === 'no') {
                        $icon = "fa-times-circle";
                        $class = "bg-danger";
                    } else {
                        $icon = "circle";
                        $class = "";
                    }
                    ?>
                    <div class="card border-dark <?php echo $class;?> text-white">
                        <h6 class="card-header text-center">Comms and Interaction</h6>
                        <div class="card-body">
                            <i class="fa fa-3x <?php echo $icon;?>" data-toggle="popover"
                                data-content="<?php echo $t['Comms']['desc'];?>"></i>
                                <i class="fa fa-hand-o-left mobinst">Tap</i>
                            <p class="comment"><?php echo $t['Comms']['desc'];?></p>
                        </div>
                    </div>

                    <!--Co-Create -->
                    <?php
                    if ($t['Create']['status'] === 'yes') {
                        $icon = "fa-check-square-o";
                        $class = "bg-success";
                    } else if ($t['Create']['status'] === 'maybe') {
                        $icon = "fa-exclamation-triangle";
                        $class = "bg-warning";
                    } else if ($t['Create']['status'] === 'no') {
                        $icon = "fa-times-circle";
                        $class = "bg-danger";
                    } else {
                        $icon = "circle";
                        $class = "";
                    }
                    ?>
                    <div class="card border-dark <?php echo $class;?> text-white">
                        <h6 class="card-header text-center">Co-Creation</h6>
                        <div class="card-body">
                            <i class="fa fa-3x <?php echo $icon;?>" data-toggle="popover"
                                data-content="<?php echo $t['Create']['desc'];?>"></i>
                                <i class="fa fa-hand-o-left mobinst">Tap</i>
                            <p class="comment"><?php echo $t['Create']['desc'];?></p>
                        </div>
                    </div>

                    <!--Blooms -->
                    <?php
                    if ($t['Blooms']['status'] === 'yes') {
                        $icon = "fa-check-square-o";
                        $class = "bg-success";
                    } else if ($t['Blooms']['status'] === 'maybe') {
                        $icon = "fa-exclamation-triangle";
                        $class = "bg-warning";
                    } else if ($t['Blooms']['status'] === 'no') {
                        $icon = "fa-times-circle";
                        $class = "bg-danger";
                    } else {
                        $icon = "circle";
                        $class = "";
                    }
                    ?>
                    <div class="card border-dark <?php echo $class;?> text-white">
                        <h6 class="card-header text-center">Blooms</h6>
                        <div class="card-body">
                            <i class="fa fa-3x <?php echo $icon;?>" data-toggle="popover"
                                data-content="<?php echo $t['Blooms']['desc'];?>"></i>
                                <i class="fa fa-hand-o-left mobinst">Tap</i>
                            <p class="comment"><?php echo $t['Blooms']['desc'];?></p>
                        </div>
                    </div>
                </div>
                <?php
                }
            }
            ?>

        </main>


        <footer class="footer row container-fluid border-top border-secondary pr-0" style="border-width:4px !important">
            <div class="col-lg-3">
                <div>
                    <div>
                        <div class="key flex-container flex-item">
                        	<div class="flex-item flex-container card bg-success text-white">
                        		<div class="card-heading">
                        			<i class="fa fa-2x fa-check-square-o"></i>
                					<p>This tool is a great fit for this purpose</p>
                				</div>
                			</div>
                			<div class="flex-item flex-container card bg-warning text-white">
                        		<div class="card-heading">
                        			<i class="fa fa-2x fa-exclamation-triangle"></i>
                					<p>Can work with some appropriate learning design of activities</p>
                				</div>
                			</div>
                			<div class="flex-item flex-container card bg-danger text-white">
                				<div class="card-heading">
                					<i class="fa fa-2x fa-times-circle"></i>
                					<p>This is not the best tool for <strong>this job</strong>. It may be ideal for others!</p>
                        		</div>
                    		</div>
                		</div><!-- key -->
                   </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div>
                    <div>
                        <h5>How to use this guide</h5>
                    </div>
                    <div>
                        <ul>
                            <li><strong>Are you a tutor new to Moodle? </strong>Use this guide to help pick the right tool for the job.</li>
                            <li><strong>Know what you want to achieve? </strong>Select the column and follow down to see which are the best tools to help you do it.</li>
                            <li><strong>Want to know the strengths of a specific tool? </strong>Follow its row across the guide to see what that tool is suited for, or not.</li>
                        </ul>
                        <p>You can click on the tool title for more information and help links about each tool. You can also click the icon in each panel for a pop up of the description of the panel - useful on small screens when the responsive nature of the page only shows the icon in each panel.</p>
                    </div>
                    <div>
                        <h5>Need more Moodle help</h5>
                        <ul>
                            <li>Community Forums at http://www.moodle.org</li>
                            <li>Documentation at http://docs.moodle.org</li>
                            <li>Follow #moodle on Twitter!</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pr-0">
                <div>
                    <div>
                        <p>Adapted (2015) by Richard Oelmann (@richards_edtech) from the original <a href="images/MoodleToolGuideforTeachers_May2010_JS.pdf" alt="Moodle Tool Guide">Moodle Tool Guide</a> by Joyce Seitzinger (@catspyjamasnz) and the <a href="http://www.somerandomthoughts.com/blog/2012/03/15/a-moodle-2-version-of-the-moodle-tool-guide/" alt="Moodle2 Tool Guide">Moodle 2 Tool Guide</a> by Gavin Henrick (@ghenrick)</p>
                        <p>The Moodle Tool Selector is based on the concepts and the overview of the Tool Selection Decision Tree by Alison Ruth, sadly no longer available at the link I originally found it at.</p>
                        <br/>
                        <p><img src="images/by-nc-sa.png" alt="Creative Commons licence - by, nc, sa" style="float:left;padding-right:1rem;"  width=200px> As defined in the original, this work is released under a <a href="https://creativecommons.org/licenses/">Creative Commons, with attribution, non-commercial, share-alike licence.</a></p>
                        <p><br/></p>
                        <p><img src="images/catalyst.png" alt="Catalyst Europe logo" style="float:left;padding-right:1rem;" width=200px >Updated as a Catathon Project at <a href="https://www.catalyst-eu.net/content/contact-us">Catalyst-EU</a>. November 2020.</p>
                    </div>
                </div>
            </div>

        </footer>


    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript">
		$(function () {
		    $('[data-toggle="popover"]').popover()
        });
        $('.showall').on('click',function(){
            $('.toolrow').removeClass('showrow');
            $('.toolrow').removeClass('hiderow');
            $('.toolrow').addClass('showrow');
        });
        $('.showcore').on('click',function(){
            $('.toolrow').removeClass('showrow');
            $('.toolrow').removeClass('hiderow');
            $('.sourceCore').addClass('showrow');
            $('.sourcePlugin').addClass('hiderow');
            $('.sourceCatalyst').addClass('hiderow');
        });
        $('.showcatalyst').on('click',function(){
            $('.toolrow').removeClass('showrow');
            $('.toolrow').removeClass('hiderow');
            $('.sourceCore').addClass('hiderow');
            $('.sourcePlugin').addClass('hiderow');
            $('.sourceCatalyst').addClass('showrow');
        });
        $('.showplugin').on('click',function(){
            $('.toolrow').removeClass('showrow');
            $('.toolrow').removeClass('hiderow');
            $('.sourceCore').addClass('hiderow');
            $('.sourcePlugin').addClass('showrow');
            $('.sourceCatalyst').addClass('showrow');
        });

    </script>
  </body>
</html>
