<?php

	if( ! class_exists( 'WP_List_Table' ) ) {
	    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
	}

	class PPRS_Subscribers_List_Table extends WP_List_Table {

		var $status = array(
				0 => 'pending',
				1 => 'subscriberd',
				2 => 'unsubscribed',
				3 => 'hardbounce'
			);

		function get_columns(){
		  $columns = array(
		  	'cb'        => '<input type="checkbox" />',
		  	'avatar' => 'Avatar',
		    'fname' => 'First Name',
		    'lname' => 'Last Name',
		    'email' => 'Email',
		    'status' => 'Status',
		  );
		  return $columns;
		}

		function column_default( $item, $column_name ) {
		  switch( $column_name ) { 
		    case 'fname':
		    case 'lname':
		    case 'email':
		      return $item->$column_name;
		    case 'status':
		      return $this->status[$item->$column_name];
		    default:
		      return print_r( $item, true ) ; //Show the whole array for troubleshooting purposes
		  }
		}

		function column_cb($item) {
	        return sprintf(
	            '<input type="checkbox" name="list[]" value="%s" />', $item->ID
	        );    
	    }

	    function column_avatar($item) {
	    	$email = trim( $item->email );
			$email = strtolower( $email );
			$image =  "http://www.gravatar.com/avatar/" . md5( $email ) . "?s=25";
	        return sprintf(
	            '<img src="%s" />', $image
	        );    
	    }

		function get_sortable_columns() {
		  $sortable_columns = array(
		    'fname'  => array('fname',false),
		    'lname' => array('lname',false),
		  );
		  return $sortable_columns;
		}

		function get_bulk_actions() {
		  $actions = array(
		    'delete'    => 'Delete'
		  );
		  return $actions;
		}

		function get_subscribers($start = null,$perpage = 10){

		  global $wpdb;
		  $sql = "SELECT * FROM {$wpdb->prefix}pprs_newsletter_subscribers";

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
			$count = $wpdb->get_results("SELECT COUNT(*) as count FROM {$wpdb->prefix}pprs_newsletter_subscribers");
			return $count[0]->count;
		}

		function prepare_items() {

		  $columns = $this->get_columns();
		  $hidden = array();
		  global $wpdb;

		  $action = $this->current_action();
		  if($action == 'delete' && !empty($_POST['list'])){
		  	$ids = implode(",",$_POST['list']);
		  	$sql = "DELETE FROM {$wpdb->prefix}pprs_newsletter_subscribers WHERE id IN ({$ids})";
		  	$wpdb->query($sql);
		  }

		  $per_page = 10;
		  $current_page = $this->get_pagenum();

		  $start = ($current_page - 1) * $per_page;

		  $data = $this->get_subscribers($start,$per_page);

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