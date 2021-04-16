<?php 

function sActive($rutaN){

    return request()->routeIs($rutaN) ? 'active' : '';

}
