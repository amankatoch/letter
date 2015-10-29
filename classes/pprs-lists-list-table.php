<?php

	if( ! class_exists( 'WP_List_Table' ) ) {
	    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
	}

	class PPRS_Lists_List_Table extends WP_List_Table {

		function get_columns(){
		  $columns = array(
		  	'cb'        => '<input type="checkbox" />',
		    'name' => 'Name',
		    'description' => 'Description',
		    'subscribers' => 'Subscribers',
		    'updated' => 'Updated',
		    'added' => 'Added'
		  );
		  return $columns;
		}

		function column_default( $item, $column_name ) {
		  switch( $column_name ) { 
		    case 'name':
		    case 'description':
		    case 'subscribers':
		    case 'updated':
		    case 'added':
		      return $item->$column_name;
		    default:
		      return print_r( $item, true ) ; //Show the whole array for troubleshooting purposes
		  }
		}

		function column_cb($item) {
	        return sprintf(
	            '<input type="checkbox" name="list[]" value="%s" />', $item->ID
	        );    
	    }

		function get_sortable_columns() {
		  $sortable_columns = array(
		    'name'  => array('name',false),
		    'subscribers' => array('subscribers',false),
		    'updated'   => array('updated',false),
		    'added' => array('added',false)
		  );
		  return $sortable_columns;
		}

		function get_bulk_actions() {
		  $actions = array(
		    'delete'    => 'Delete'
		  );
		  return $actions;
		}

		function get_lists($start = null,$perpage = 10){

		  global $wpdb;
		  $sql = "SELECT * FROM {$wpdb->prefix}pprs_newsletter_lists";

		  $order_by = " ORDER BY ID";

		  if(isset($_GET['orderby']) && $_GET['orderby'] != ''){
		  	$order_by = " ORDER BY {$_GET['orderby']} {$_GET['order']}";
		  }

		  $sql .= $order_by;
		  if($start !== null){
		  	$sql .= " LIMIT {$start},{$perpage}";
		  }

		  return $wpdb->get_results($sql);
		}

		function get_total(){
			global $wpdb;
			$count = $wpdb->get_results("SELECT COUNT(*) as count FROM {$wpdb->prefix}pprs_newsletter_lists");
			return $count[0]->count;
		}

		function prepare_items() {

		  $columns = $this->get_columns();
		  $hidden = array();
		  global $wpdb;

		  $action = $this->current_action();
		  if($action == 'delete' && !empty($_POST['list'])){
		  	$ids = implode(",",$_POST['list']);
		  	$sql = "DELETE FROM {$wpdb->prefix}pprs_newsletter_lists WHERE id IN ({$ids})";
		  	$wpdb->query($sql);
		  }

		  $per_page = 10;
		  $current_page = $this->get_pagenum();

		  $start = ($current_page - 1) * $per_page;

		  // $sql = "SELECT * FROM {$wpdb->prefix}pprs_newsletter_lists ORDER BY ID LIMIT {$start},{$per_page}";
		  // $data = $wpdb->get_results($sql);

		  $data = $this->get_lists($start,$per_page);

		  $count = $wpdb->get_results("SELECT COUNT(*) as count FROM {$wpdb->prefix}pprs_newsletter_lists");

		  $this->_column_headers = array($columns, $hidden, $this->get_sortable_columns());

		  $total = $this->get_total();
		  $this->set_pagination_args( array(
		    'total_items' => $total,            
		    'per_page'    => $per_page
		  ) );

		  $this->items = $data;
		}

	}

?>