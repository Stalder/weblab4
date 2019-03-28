<?php

function renderHeader($title)
{
    $headerHeredoc = <<<EOT
        <header class="row blue darken-3 z-depth-2 section header">
            <h1 class="grey-text text-lighten-4">$title</h1>
        </header>
EOT;
    echo $headerHeredoc;
}