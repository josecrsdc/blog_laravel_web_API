<?php

use Illuminate\Support\Facades\Date;

function setActivo($nombreRuta) {
    return request()->routeIs($nombreRuta) ? 'active' : '';
}


function fechaActual($formato = "d/m/y")
{
    return date($formato);
}

function formatoFecha(DateTimeInterface $date)
{
    return $date->format('d F Y');
}

function formatoHora(DateTimeInterface $date)
{
    return $date->format('H:i');
}
