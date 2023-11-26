<?php

echo 'Enter your message: ';
$input = fgets(STDIN);

var_dump(str_replace($input, '_', ''));