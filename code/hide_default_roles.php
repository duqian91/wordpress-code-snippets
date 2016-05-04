<?php

function exclude_role($roles) {

//Hide Default Roles
  if (isset($roles['author'])) {
    unset($roles['author']);
  }

  if (isset($roles['editor'])) {
    unset($roles['editor']);
  }

  if (isset($roles['subscriber'])) {
    unset($roles['subscriber']);
  }

  if (isset($roles['contributor'])) {
    unset($roles['contributor']);
  }

  return $roles;
}

add_filter('editable_roles', 'exclude_role' );
?>
