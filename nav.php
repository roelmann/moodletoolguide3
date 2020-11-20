<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Moodle ToolGuide 3</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link showall" href="#">All<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link showcore" href="#">Moodle Core</a>
            </li>
            <li class="nav-item">
                <a class="nav-link showcatalyst" href="#">Catalyst OOTB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link showplugin" href="#">3rd Party</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto mr-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Themes</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <!-- Fetch css swatch files as list -->
                    <?php
                    foreach (new DirectoryIterator('css') as $file) {                            if($file->isDot()) continue;
                        $swatch = explode('.', $file->getFilename());
                        echo '<a class="dropdown-item" href="index.php?theme='.$swatch[0].'">';
                        echo $swatch[0];
                        echo '</a>';
                    }
                    ?>
                </div>
            </li>
        </ul>

    </div>
</nav>
