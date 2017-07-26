<?php

// Make sure that the sortable plugin is loaded
$kirby->plugin('sortable');

if(!function_exists('sortable')) return;

$kirby->set('field', 'sortableplus', __DIR__ . DS . 'field');

$sortable = sortable();
$sortable->set('layout', 'plus', __DIR__ . DS . 'layout');
