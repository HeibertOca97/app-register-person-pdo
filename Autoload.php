<?php

function autoload($clase) {
    include './app/models/' . $clase . '.php';
}

spl_autoload_register('autoload');