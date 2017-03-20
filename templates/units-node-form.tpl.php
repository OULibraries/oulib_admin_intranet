<div class="instructions">
<H1>Instructions</h1>
<p>Adding internal information about your unit is an excellent way to 
communicate important information to the organization such as workflows, trainings, and documentation. </p>
</div>

<h3>General</h3>
<div class="content-border"> 
    <?php print drupal_render($form['title']); ?>
    <?php print drupal_render($form['field_image']); ?> 
    <?php print drupal_render($form['field_description']); ?> 	
</div>

<h3>Contact Info</h3>
<div class="content-border">
	<?php print drupal_render($form['field_physical_locations']); ?>
	<?php print drupal_render($form['field_unit_phone']); ?>
    <?php print drupal_render($form['field_unit_fax']); ?>
	<?php print drupal_render($form['field_unit_email']); ?>	
	<?php print drupal_render($form['field_facebook']); ?> 
	<?php print drupal_render($form['field_twitter']); ?> 
	<?php print drupal_render($form['field_instagram']); ?>
    <?php print drupal_render($form['field_blog']); ?>  	
</div>

<h3>Useful Links </h3>
<div class="content-border">
<p>Help employees know how best to work with your unit by providing resources. Tip: Post files to the Docs & Forms site to get a sharable link.</p>
<?php print drupal_render($form['field_section_header']); ?> 
<?php print drupal_render($form['group_generalinfo']); ?> 
</div>

<h3>Highlights</h3>
<div class="content-border">
<p style="margin-bottom:-10px;">Highlight a project, initative, featured space, or special collection. TIP: use the photo collection to search for images to pair with your text.</p>
<?php print drupal_render($form['field_projects']); ?>
</div>
<?php print drupal_render_children($form);?>





