<?php

/** @var  \Herbert\Framework\Application $container */
/** @var  \Herbert\Framework\Http $http */
/** @var  \Herbert\Framework\Router $router */
/** @var  \Herbert\Framework\Enqueue $enqueue */
/** @var  \Herbert\Framework\Panel $panel */
/** @var  \Herbert\Framework\Shortcode $shortcode */
/** @var  \Herbert\Framework\Widget $widget */

use Illuminate\Database\Capsule\Manager as Capsule;


//Capsule::schema()->dropIfExists('gods');
//Capsule::schema()->dropIfExists('items');

Capsule::schema()->create('gods', function($table)
{
    $table->integer('id')->unique();
    $table->text('Slug');
    $table->text('Name');
    $table->text('Ability_1');
    $table->text('Ability_2');
    $table->text('Ability_3');
    $table->text('Ability_4');
    $table->text('Ability_5');
    $table->text('AttackSpeed');
    $table->text('AttackSpeedPerLevel');
    $table->text('Cons');
    $table->text('HP5PerLevel');
    $table->text('Health');
    $table->text('HealthPerFive');
    $table->text('HealthPerLevel');
    $table->text('Lore');
    $table->text('MP5PerLevel');
    $table->text('MagicProtection');
    $table->text('MagicProtectionPerLevel');
    $table->text('MagicalPower');
    $table->text('MagicalPowerPerLevel');
    $table->text('Mana');
    $table->text('ManaPerFive');
    $table->text('ManaPerLevel');
    $table->text('OnFreeRotation');
    $table->text('Pantheon');
    $table->text('PhysicalPower');
    $table->text('PhysicalPowerPerLevel');
    $table->text('PhysicalProtection');
    $table->text('PhysicalProtectionPerLevel');
    $table->text('Pros');
    $table->text('Roles');
    $table->text('Speed');
    $table->text('Title');
    $table->text('Type');
    $table->text('godCard_URL');
    $table->text('godIcon_URL');
    $table->text('latestGod');
});

Capsule::schema()->create('items', function($table)
{
    $table->integer('ItemId')->unique();
    $table->text('ChildItemId');
    $table->text('DeviceName');
    $table->text('IconId');
    $table->text('ItemDescription');
    $table->text('ItemTier');
    $table->text('Price');
    $table->text('RootItemId');
    $table->text('ShortDesc');
    $table->text('StartingItem');
    $table->text('Type');
    $table->text('itemIcon_URL');
    $table->text('Slug');
});
