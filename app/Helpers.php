<?php
function setAction($url){
    return request()->routeIs($url)?'link__select':'';
}
