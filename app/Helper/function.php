<?php
function view($template, $variables = null) {
    return App\Contract\View::show($template, $variables);
}
?>
