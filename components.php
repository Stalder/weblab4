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
        <div class="card">
            <div class="card-content">
                <h3>$title</h3>
                <p>$text</p>
            </div>
            <div class="card-action">
                <a href="#" style="color: #1565c0">Читать дальше</a>
            </div>
        </div>
HTML;
    echo $headerHeredoc;
}

function renderArticleForAdmin($title, $date)
{
    $headerHeredoc = <<<HTML
        <div class="my-row">
            <h4 style="flex: 1">$title</h4>
            <a class="waves-effect waves-light btn red"><i class="material-icons">delete</i></a>
        </div>
        <div class="divider"></div>
HTML;
    echo $headerHeredoc;
}