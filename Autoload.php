<?php

function autoload($clase) {
    include './models/' . $clase . '.php';
}

spl_autoload_register('autoload');