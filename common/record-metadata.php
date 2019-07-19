<?php if(isset(get_view()->item)): //check if this looks like an item show page ?>

<?php
//dig through the elements for display that are passed into this file
//put it all into a new array of just the elements we want
//this should let you collect the elements you want in the order you want
//follow this pattern to get more or change the order

$wantedElements = array();
if(isset($elementsForDisplay['Item Type Metadata'])) {
}
//$wantedElements ['Title'] = $elementsForDisplay['Dublin Core'] ['Title'];//
//$wantedElements ['Transcription'] = $elementsForDisplay ['Dublin Core'] ['Description'];//
//$wantedElements ['Transcription (back)'] = $elementsForDisplay['Dublin Core'] ['Extent'];//
$wantedElements ['Sender'] = $elementsForDisplay ['Dublin Core'] ['Creator'];
$wantedElements ['Grade S.J.'] = $elementsForDisplay ['Dublin Core'] ['Replaces'];
$wantedElements ['Year'] = $elementsForDisplay ['Dublin Core'] ['Date'];
$wantedElements ['Month'] = $elementsForDisplay ['Dublin Core'] ['Temporal Coverage'];
//$wantedElements ['Date'] = $elementsForDisplay ['Dublin Core'] ['Date Submitted'];//
$wantedElements ['Day'] = $elementsForDisplay ['Dublin Core'] ['References'];
$wantedElements ['From (City)'] = $elementsForDisplay ['Dublin Core'] ['Coverage'];
$wantedElements ['From (Institution)'] = $elementsForDisplay ['Dublin Core'] ['Is Part Of'];
$wantedElements ['To'] = $elementsForDisplay ['Dublin Core'] ['Spatial Coverage'];
$wantedElements ['Recipient'] = $elementsForDisplay ['Dublin Core'] ['Audience'];
$wantedElements ['Anterior desire'] = $elementsForDisplay ['Dublin Core'] ['Medium'];
$wantedElements ['Destination(s)'] = $elementsForDisplay ['Dublin Core'] ['Publisher'];
$wantedElements ['Models/Saints/Missionaries'] = $elementsForDisplay ['Dublin Core'] ['Subject'];
$wantedElements ['Other names'] = $elementsForDisplay ['Dublin Core'] ['Relation'];
$wantedElements ['Left for mission lands'] = $elementsForDisplay ['Dublin Core'] ['Date Issued'];
$wantedElements ['Language of the Letter'] = $elementsForDisplay ['Dublin Core'] ['Language'];
$wantedElements ['Links'] = $elementsForDisplay ['Dublin Core'] ['Source'];
$wantedElements ['Notes'] = $elementsForDisplay ['Dublin Core'] ['Abstract'];
$wantedElements ['Archive'] = $elementsForDisplay ['Dublin Core'] ['Identifier'];
$wantedElements ['Collection'] = $elementsForDisplay ['Dublin Core'] ['Has Format'];
$wantedElements ['Sub-collection'] = $elementsForDisplay ['Dublin Core'] ['Has Part'];
$wantedElements ['Number'] = $elementsForDisplay ['Dublin Core'] ['Has Version'];
//$wantedElements ['Contributor'] = $elementsForDisplay ['Dublin Core'] ['Contributor'];//
?>

<div class="element-set">
    <?php foreach ($wantedElements as $elementName => $elementInfo): ?>
    <div id="<?php echo text_to_id(html_escape("$elementName")); ?>" class="element">
        <h3><?php echo html_escape(__($elementName)); ?></h3>
        <?php foreach ($elementInfo['texts'] as $text): ?>
            <div class="element-text"><?php echo $text; ?></div>
        <?php endforeach; ?>
    </div><!-- end element -->
    <?php endforeach; ?>
</div><!-- end element-set -->

<?php else: ?>

<?php foreach ($elementsForDisplay as $setName => $setElements): ?>
<div class="element-set">
  <h2><?php echo html_escape(__($setName)); ?></h2>
    <?php foreach ($setElements as $elementName => $elementInfo): ?>
    <div id="<?php echo text_to_id(html_escape("$setName $elementName")); ?>" class="element">
        <h3><?php echo html_escape(__($elementName)); ?></h3>
        <?php foreach ($elementInfo['texts'] as $text): ?>
            <div class="element-text"><?php echo $text; ?></div>
        <?php endforeach; ?>
    </div><!-- end element -->
    <?php endforeach; ?>
</div><!-- end element-set -->
<?php endforeach; ?>

<?php endif; ?>
