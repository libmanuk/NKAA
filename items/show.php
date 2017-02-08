<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'items show')); ?>
<div id="primary">

<?php 
$type = $item->getItemType()->name;
if ('NKAA USA Library Directors' === $type): ?>
<div style="width:100%;"><!--<img src="/nkaa/themes/berlin/tag_nkaa_dirs.png" style="width:25px;" />--><a href="/nkaa/references/nkaa-usa-library-directors" style="font-size:15px;text-decoration:none;">African American Library Directors in the USA</a></div>
<?php endif; ?>

<?php 
$type = $item->getItemType()->name;
if ('NKAA Sources' === $type): ?>
<div style="width:100%;"><!--<img src="/nkaa/themes/berlin/tag_nkaa_sources.png" style="width:25px;" />--><a href="/nkaa/references/nkaa-sources" style="font-size:15px;text-decoration:none;">NKAA Sources</a></div>
<?php endif; ?>

<?php 
$type = $item->getItemType()->name;
if ('NKAA Items' === $type): ?>
<div style="width:100%;"><!--<img src="/nkaa/themes/berlin/tag_nkaa_items.png" style="width:25px;" />--><a href="/nkaa/references/nkaa-items" style="font-size:15px;text-decoration:none;">NKAA Items</a></div>
<?php endif; ?>

    <h1><?php echo metadata('item', array('Dublin Core','Title')); ?></h1>

<?php 
$type = $item->getItemType()->name;
if ('NKAA Items' === $type): ?>
<?php 
$person = metadata('item', array('Item Type Metadata','Person')); ?>
<?php 
$born = metadata('item', array('Item Type Metadata','Birth Year')); ?>
<?php 
$death = metadata('item', array('Item Type Metadata','Death Year')); ?>
<?php 
$start = metadata('item', array('Item Type Metadata','Start Date')); ?>
<?php 
$end = metadata('item', array('Item Type Metadata','End Date')); ?>

<?php if ($person == 'no') {
$label = "<b>Start Date</b>: $start &nbsp;-&nbsp; <b>End Date</b>: $end"; } elseif ($person == 'yes') {
$label = "<b>Born</b>: $born &nbsp;-&nbsp; <b>Died</b>: $death"; }?>

<span><?php echo $label; ?></span>
<?php endif; ?>





    <!-- Items metadata -->
    <div id="item-metadata">
        <?php echo all_element_texts('item'); ?>
    </div>

    <!--<h3><?php echo __('Files'); ?></h3>-->
    <div id="item-images">
         <?php echo files_for_item(); ?>
    </div>


     <!-- The following prints a list of all tags associated with the item -->
    <?php if (metadata('item','has tags')): ?>
    <div id="item-tags" class="element">
        <h3><?php echo __('Tags'); ?></h3>
        <div class="element-text"><?php echo tag_string('item'); ?></div>
    </div>
    <?php endif;?>

    <!-- The following prints a citation for this item. -->
    <!--<div id="item-citation" class="element">
        <h3><?php echo __('Citation'); ?></h3>
        <div class="element-text"><?php echo metadata('item','citation',array('no_escape'=>true)); ?></div>
    </div>-->
       <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>


    <ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
        <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>

</div> <!-- End of Primary. -->

 <?php echo foot(); ?>
