<?php
// $Id: views-view-unformatted.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
//id="node-<?php print $view->result[$view->filter_count]->nid; " 
?>
<div class="species-group <?php print cascadegroup_id_safe($title); ?>">
<?php if (!empty($title)): ?>
  <h2><?php print $title; ?> Lumber Grades</h2>
<?php endif; ?>
<ul>
<?php foreach ($rows as $id => $row): ?>
  <li class="<?php print $classes[$id]; ?>">
    <?php 
			print $row; 
		?>
  </li>
<?php endforeach; ?>
</ul>
</div>