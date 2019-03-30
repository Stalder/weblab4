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

function renderArticle($title, $text)
{
    $headerHeredoc = <<<HTML
        <div class="card">
            <div class="card-content">
                <h3>$title</h3>
                <p>$text</p>
            </div>
        </div>
HTML;
    echo $headerHeredoc;
}

function renderArticleForAdmin($id, $title)
{
    $headerHeredoc = <<<HTML
        <div class="my-row">
            <h4 style="flex: 1">$title</h4>
            <form action="remove_article.php" method="post" >
                <input type="hidden" value="$id" name="id">
                <button class="btn waves-effect waves-light red" type="submit" name="action">
                    <i class="material-icons">delete</i>
                </button>
            </form>
            <!--<a class="waves-effect waves-light btn red" href="remove_article.php"><i class="material-icons">delete</i></a>-->
        </div>
        <div class="divider"></div>
HTML;
    echo $headerHeredoc;
}