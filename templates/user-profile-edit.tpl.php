<?php

global $user;

// Check to see if $user has the administrator user role.
// if they don't, hide the admin functionality on the user edit page
if (!in_array('administrator', array_values($user->roles))) {
  hide($form[group_admingroup][group_admintab][account]);
}

// print everything else to the screen
print drupal_render_children($form);


