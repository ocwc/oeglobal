<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;


$page = new FieldsBuilder('Page Settings');
$page->addSelect('Page Variant', ['key' => 'variant'])
    ->addChoices(['normal' => 'Normal'], ['sublanding' => 'Sub Landing'])
    ->setLocation('post_type', '==', 'page')
    ->setGroupConfig('position', 'side');

return $page;
