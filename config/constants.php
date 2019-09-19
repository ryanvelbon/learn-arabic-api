<?php

// run this command after every change: php artisan config:cache

return [

    'regex' => [
        // 'sentence_ar' => '^[\u0621-\u064A\u0660-\u0669\u0020-\u0040]+$',
        'sentence_ar' => '^[\x{0600}-\x{064A}\x{0660}-\x{0669}\x{0020}-\x{0040}]+$',
        // Is starting from 0621 as opposed to 0600 sufficient? No. Arabic comma is 060C

        'sentence_en' => '^[\x{0020}-\x{005A}\x{0061}-\x{007A}]+$',
    ]
];