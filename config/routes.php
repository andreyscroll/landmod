<?php

return [

    '^admin/faq/([0-9]+)/delete$'  => 'admin/deletefaq/$1',
    '^admin/benefit/save$'  => 'admin/savebenefit',
    '^admin/([a-z]+)$'      => 'admin/$1',
    '^admin$'               => 'admin/index',
    '^([a-z]+)$'            => 'page/index/$1',
    '^$'                    => 'main/index',

];