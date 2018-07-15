<?php 

    $config = [
        'separator' => '_'
    ];

/*     function fullName($firstName, $lastName) {
        global $config;
        return "{$firstName}{$config['separator']}{$lastName}";
    }
    echo fullName('ali', 'omer'); */


/*     function fullName($firstName, $lastName, $config) {
        return "{$firstName}{$config['separator']}{$lastName}";
    }
    echo fullName('ali', 'omer',$config); */

    $fullName = function($firstName, $lastName) use($config) {
        return "{$firstName}{$config['separator']}{$lastName}";
    };
    echo $fullName('ali', 'omer');