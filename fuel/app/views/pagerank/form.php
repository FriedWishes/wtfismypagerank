<?php echo \Form::open(); ?>
<p>Enter your url to figure out wtf your page rank is!</p>
<?php echo \Form::input('domain', 'google.com', array('id' => 'domain-input')); ?>
<button id="domain-submit" type="submit">WTF IS IT?!</button>
<?php echo \Form::close(); ?>

<div id="pagerank-response">
</div>