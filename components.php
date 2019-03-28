<?php

function renderHeader($title)
{
    $headerHeredoc = <<<HTML
        <header class="row blue darken-3 z-depth-2 section header">
            <h1 class="grey-text text-lighten-4">$title</h1>
        </header>
HTML;
    echo $headerHeredoc;
}

function renderArticlePreview($title, $text, $date)
{
    $headerHeredoc = <<<HTML
        <div>
            <h3>$title</h3>
            <p>$text</p>
        </div>
HTML;
    echo $headerHeredoc;
}

function renderArticleForAdmin($title, $date)
{
    $headerHeredoc = <<<HTML
        <div>
            <h3>$title</h3>
            <p>$date</p>
        </div>
HTML;
    echo $headerHeredoc;
}