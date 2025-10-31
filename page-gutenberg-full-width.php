<?php
/**
 * Template Name: Gutenberg Full Width
 * Template Post Type: page
 */

use Roots\Sage\Container;

$container = Container::getInstance();
echo view('templates.gutenberg-full-width', $container->get('view'))->render();