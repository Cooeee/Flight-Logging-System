<p>
<?php

echo $this->Form->create('Airfield');

echo $this->Form->input('name');
echo $this->Form->input('active');

echo $this->Form->button('Save', array('type' => 'submit'));
echo $this->Form->button('Reset', array('type' => 'reset'));
echo $this->Form->end();

?>
</p>