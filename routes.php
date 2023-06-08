<?php
return [
    '~^funeral$~' => [\controllers\funeralcontroller::class, 'showAll'],
    '~^funeral\/(\d+)\/edit$~' => [\controllers\funeralcontroller::class, 'edit'],
    '~^funeral\/(\d+)\/delete$~' => [\controllers\funeralcontroller::class, 'delete'],
    '~^funeral\/add$~' => [\controllers\funeralcontroller::class, 'add'],

    '~^plot$~' => [\controllers\plotcontroller::class, 'showAll'],
    '~^plot\/add$~' => [\controllers\plotcontroller::class, 'add'],
    '~^plot\/(\d+)\/edit$~' => [\controllers\plotcontroller::class, 'edit'],
    '~^plot\/(\d+)\/delete$~' => [\controllers\plotcontroller::class, 'delete'],

    '~^necropolis$~' => [\controllers\necropoliscontroller::class, 'showAll'],
    '~^necropolis\/add$~' => [\controllers\necropoliscontroller::class, 'add'],
    '~^necropolis\/(\d+)\/edit$~' => [\controllers\necropoliscontroller::class, 'edit'],
    '~^necropolis\/(\d+)\/delete$~' => [\controllers\necropoliscontroller::class, 'delete'],

    '~^brigade$~' => [\controllers\brigadecontroller::class, 'showAll'],
    '~^brigade\/add$~' => [\controllers\brigadecontroller::class, 'add'],
    '~^brigade\/(\d+)\/edit$~' => [\controllers\brigadecontroller::class, 'edit'],
    '~^brigade\/(\d+)\/delete$~' => [\controllers\brigadecontroller::class, 'delete'],

    '~^monument$~' => [\controllers\monumentcontroller::class, 'showAll'],
    '~^monument\/add$~' => [\controllers\monumentcontroller::class, 'add'],
    '~^monument\/(\d+)\/edit$~' => [\controllers\monumentcontroller::class, 'edit'],
    '~^monument\/(\d+)\/delete$~' => [\controllers\monumentcontroller::class, 'delete'],

    '~^hall$~' => [\controllers\hallcontroller::class, 'showAll'],
    '~^hall\/add$~' => [\controllers\hallcontroller::class, 'add'],
    '~^hall\/(\d+)\/edit$~' => [\controllers\hallcontroller::class, 'edit'],
    '~^hall\/(\d+)\/delete$~' => [\controllers\hallcontroller::class, 'delete'],

    '~^$~' => [\controllers\funeralcontroller::class,'showAll'],
]
?>