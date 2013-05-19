<div class="events form">
<?php echo $this->Form->create('Event', array('type' => 'file'));?>
    <fieldset>
        <legend><?php echo __('Add Event'); ?></legend>
<?php
echo $this->Form->input('date', array(
    'label' => __('Detect Date'),
    'type' => 'text',
    'class' => 'datepicker'
));
echo $this->Form->input('start_time', array(
    'type' => 'text',
    'class' => 'datepicker'
));

echo $this->Form->input('detect_place_id', array('options' => $organisations));
echo $this->Form->input('detect_method');

echo $this->Form->input('report_time', array(
    'type' => 'text',
    'class' => 'datepicker',
    'div' => 'input clear'
));

echo $this->Form->input('end_time', array(
    'type' => 'text',
    'class' => 'datepicker'
));

echo $this->Form->input('reporter_organisation_id', array('options' => $organisations, 'label' => __('Reporter')));
echo $this->Form->input('report_channel_id', array('options' => $channels));

echo $this->Form->input('report_notes', array('div' => 'input clear'));

if ('true' == Configure::read('CyDefSIG.sync')) {
    if ('true' == Configure::read('CyDefSIG.private')) {
        echo $this->Form->input('distribution', array('div' => 'input', 'label' => 'Distribution', 'selected' => 'All communities',
            'between' => $this->Html->div('forminfo', '', array('id' => 'EventDistributionDiv'))
        ));
    } else {
        echo $this->Form->input('private', array(
        'before' => $this->Html->div('forminfo', isset($eventDescriptions['private']['formdesc']) ? $eventDescriptions['private']['formdesc'] : $eventDescriptions['private']['desc']),));
    }
}
echo $this->Form->input('SharingAuthorisation', array('type' => 'text'));
echo $this->Form->input('SharingGroup', array('multiple' => 'checkbox', 'div' => 'clear'));

/*echo $this->Form->input('risk', array(
        'label' => 'Threat Level',
        'div' => 'input clear',
        'before' => $this->Html->div('forminfo', '', array('id' => 'EventRiskDiv'))));*/
echo $this->Form->input('threat_level_id');
echo $this->Form->input('ThreatType', array('type' => 'text'));
echo $this->Form->input('targeted_organisation_id', array('options' => $organisations));
echo $this->Form->input('targeted_domain_id', array('options' => $domains));

echo $this->Form->input('analysis', array(
        'options' => array($analysisLevels),
        'div' => 'input clear',
        'before' => $this->Html->div('forminfo', '', array('id' => 'EventAnalysisDiv'))
        ));
echo $this->Form->input('assessment_level_id');
echo $this->Form->input('info', array('div' => 'clear', 'class' => 'input-xxlarge'));


echo $this->Form->input('Event.submittedfile', array(
        'label' => '<b>GFI sandbox</b>',
        'between' => '<br />',
        'type' => 'file',
        'before' => $this->Html->div('forminfo', isset($eventDescriptions['submittedfile']['formdesc']) ? $eventDescriptions['submittedfile']['formdesc'] : $eventDescriptions['submittedfile']['desc'])));

echo $this->Form->input('Event.submittedioc', array(
    'label' => '<b>OpenIOC</b>',
    'type' => 'file',
    'div' => 'clear'
));

//echo $this->Form->input('AssessmentScope');

//echo $this->Form->input('SharingStatus');
//echo $this->Form->input('CIMBL', array('type' => 'text'));
//echo $this->Form->input('IOC');


// link an onchange event to the form elements
$this->Js->get('#EventDistribution')->event('change', 'showFormInfo("#EventDistribution")');
$this->Js->get('#EventRisk')->event('change', 'showFormInfo("#EventRisk")');
$this->Js->get('#EventAnalysis')->event('change', 'showFormInfo("#EventAnalysis")');
?>
    </fieldset>
<?php echo $this->Form->button(__('Submit'), array('class' => 'btn btn-primary'));
echo $this->Form->end();?>
</div>
<div class="actions">
    <ul>
        <?php echo $this->element('actions_menu'); ?>

    </ul>
</div>

<script type="text/javascript">
//
//Generate tooltip information
//
var formInfoValues = new Array();
<?php
foreach ($distributionDescriptions as $type => $def) {
    $info = isset($def['formdesc']) ? $def['formdesc'] : $def['desc'];
    echo "formInfoValues['" . addslashes($type) . "'] = \"" . addslashes($info) . "\";\n";  // as we output JS code we need to add slashes
}
foreach ($riskDescriptions as $type => $def) {
    $info = isset($def['formdesc']) ? $def['formdesc'] : $def['desc'];
    echo "formInfoValues['" . addslashes($type) . "'] = \"" . addslashes($info) . "\";\n";  // as we output JS code we need to add slashes
}
foreach ($analysisDescriptions as $type => $def) {
    $info = isset($def['formdesc']) ? $def['formdesc'] : $def['desc'];
    echo "formInfoValues['" . addslashes($type) . "'] = \"" . addslashes($info) . "\";\n";  // as we output JS code we need to add slashes
}
?>

function showFormInfo(id) {
    idDiv = id+'Div';
    // LATER use nice animations
    //$(idDiv).hide('fast');
    // change the content
    var value = $(id).val();    // get the selected value
    $(idDiv).html(formInfoValues[value]);    // search in a lookup table
    // show it again
    $(idDiv).fadeIn('slow');
}

// hide the formInfo things
$('#EventDistributionDiv').hide();
$('#EventRiskDiv').hide();
$('#EventAnalysisDiv').hide();
</script>
<?php echo $this->Js->writeBuffer();