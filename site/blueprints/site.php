<?php if(!defined('KIRBY')) exit ?>

title: Site
pages:
  template:
    - default
files: true
fields:

  siteMeta:
    label: Site Meta
    type: headline
  owner:
    label: Owner's username
    type:  text
  title:
    label: Site title
    type:  text
  description:
    label: Site description
    type:  text
    icon:  info-circle
  analytics:
    label: Google analytics
    type:  text
  line-a:
    type: line
  info:
    label: Site info
    type:  textarea
    icon:  file-text-o
