<?php


// Filter to create the sidebar
function thematic_sidebar() {

  $show = TRUE;

	// Filters should return Boolean 
	$show = apply_filters('thematic_sidebar', $show);
	
	if ($show) {
    get_sidebar();}
	
	return;
} // end thematic_sidebar


// Main Aside Hooks


	// Located in sidebar.php 
	// Just before the main asides (commonly used as sidebars)
	function thematic_abovemainasides() {
	    do_action('thematic_abovemainasides');
	} // end thematic_abovemainasides
	
	
	// Located in sidebar.php 
	// Between the main asides (commonly used as sidebars)
	function thematic_betweenmainasides() {
	    do_action('thematic_betweenmainasides');
	} // end thematic_betweenmainasides
	
	
	// Located in sidebar.php 
	// after the main asides (commonly used as sidebars)
	function thematic_belowmainasides() {
	    do_action('thematic_belowmainasides');
	} // end thematic_belowmainasides
	

// Index Aside Hooks

	
	// Located in sidebar-index-top.php
	function thematic_aboveindextop() {
		do_action('thematic_aboveindextop');
	} // end thematic_aboveindextop
	
	
	// Located in sidebar-index-top.php
	function thematic_belowindextop() {
		do_action('thematic_belowindextop');
	} // end thematic_belowindextop
	
	
	// Located in sidebar-index-insert.php
	function thematic_aboveindexinsert() {
		do_action('thematic_aboveindexinsert');
	} // end thematic_aboveindexinsert
	
	
	// Located in sidebar-index-insert.php
	function thematic_belowindexinsert() {
		do_action('thematic_belowindexinsert');
	} // end thematic_belowindexinsert	
	

	// Located in sidebar-index-bottom.php
	function thematic_aboveindexbottom() {
		do_action('thematic_aboveindexbottom');
	} // end thematic_aboveindexbottom
	
	
	// Located in sidebar-index-bottom.php
	function thematic_belowindexbottom() {
		do_action('thematic_belowindexbottom');
	} // end thematic_belowindexbottom	
	


// Page Aside Hooks


// Subsidiary Aside Hooks
