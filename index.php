<?php
include('lib.php');
include('head.php');

?>
<body>
    <?php
    $page = "home";
    include('nav.php');
    ?>
    <header>
        <div class="jumbotron" style="height:175px";>
            <img src="images/moodlelogo.png" width="150px" height="100px" style="float:left;">
            <div style="float:left;margin-left:30px;">
                <h1>Moodle Tool Guide<br/>and Selector</h1>
            </div>
        </div>
    </header>

    <main role="main" class="maincontent container-fluid">
        <div class="card-deck">
            <div class="card bg-success text-center text-white" style="padding:4rem;";>
                <a href="toolguide.php?theme=<?php echo $theme;?>" title="toolguide link">
                    <h2>
                        <i class="fa fa-2x fa-reply">&nbsp;</i>
                        Go To Tool Guide
                    </h2>
                </a>
            </div>
            <div class="card bg-success text-center text-white" style="padding:4rem;";>
                <a href="toolselector.php?theme=<?php echo $theme;?>" title="toolselector link">
                    <h2>
                        <i class="fa fa-2x fa-reply">&nbsp;</i>Go To Tool Selector
                    </h2>
                </a>
            </div>
        </div>
        <div class="spacer" style="margin-bottom:5rem;">
            &nbsp;
        </div>
    </main>

    <?php
    include('mainfooter.php');
    include('endofbodyjs.php');
    ?>
</body>
</html>
