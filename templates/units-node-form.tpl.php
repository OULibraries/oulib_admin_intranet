<div class="instructions">
<H1>Instructions</h1>
<p>Adding internal information about your unit is an excellent way to 
communicate important information to the organization such as workflows, trainings, and documentation. </p>
</div>

<h3>General Information</h3>
<div class="content-border"> 
    <?php print drupal_render($form['title']); ?>
    <?php print drupal_render($form['field_unit_email']); ?> 
	<?php print drupal_render($form['field_unit_phone']); ?> 
    <?php print drupal_render($form['field_image']); ?> 
    <?php print drupal_render($form['field_description']); ?> 	
</div>
<h3>Documents & Links </h3>

<p>TIP: To add documents, first upload them to Docs & Forms to get a shareable URL.</p>
<?php print drupal_render($form['group_generalinfo']); ?> 
</div>

<h3>Projects & Initiatives</h3>
<div class="content-border">
<p style="margin-bottom:-10px;">Tell the organization a little more about the important work you do. TIP: use the photo collection to search for images to pair with your text.</p>
<?php print drupal_render($form['field_projects']); ?>
</div>
<?php print drupal_render_children($form);?>





