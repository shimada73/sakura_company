<?php

if ( ! class_exists( 'WP_List_Table' ) ) {
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}

class Flamingo_Outbound_Messages_List_Table extends WP_List_Table {

	private $is_trash = false;

	public static function define_columns() {
		$columns = array(
			'cb' => '<input type="checkbox" />',
			'subject' => __( 'Subject', 'flamingo' ),
			'from' => __( 'From', 'flamingo' ),
			'date' => __( 'Date', 'flamingo' ),
		);

		$columns = apply_filters(
			'manage_flamingo_outbound_posts_columns', $columns );

		return $columns;
	}

	public function __construct() {
		parent::__construct( array(
			'singular' => 'post',
			'plural' => 'posts',
			'ajax' => false,
		) );
	}

	public function prepare_items() {
		$per_page = $this->get_items_per_page(
			'flamingo_outbound_messages_per_page'
		);

		$args = array(
			'posts_per_page' => $per_page,
			'offset' => ( $this->get_pagenum() - 1 ) * $per_page,
			'orderby' => 'date',
			'order' => 'DESC',
		);

		if ( ! empty( $_REQUEST['s'] ) ) {
			$args['s'] = $_REQUEST['s'];
		}

		if ( ! empty( $_REQUEST['orderby'] ) ) {
			if ( 'subject' == $_REQUEST['orderby'] ) {
				$args['meta_key'] = '_subject';
				$args['orderby'] = 'meta_value';
			} elseif ( 'from' == $_REQUEST['orderby'] ) {
				$args['meta_key'] = '_from';
				$args['orderby'] = 'meta_value';
			}
		}

		if ( ! empty( $_REQUEST['order'] )
		and 'asc' == strtolower( $_REQUEST['order'] ) ) {
			$args['order'] = 'ASC';
		}

		if ( ! empty( $_REQUEST['m'] ) ) {
			$args['m'] = $_REQUEST['m'];
		}

		if ( ! empty( $_REQUEST['post_status'] ) ) {
			if ( 'trash' == $_REQUEST['post_status'] ) {
				$args['post_status'] = 'trash';
				$this->is_trash = true;
			}
		}

		$this->items = Flamingo_Outbound_Message::find( $args );

		$total_items = Flamingo_Outbound_Message::count();
		$total_pages = ceil( $total_items / $per_page );

		$this->set_pagination_args( array(
			'total_items' => $total_items,
			'total_pages' => $total_pages,
			'per_page' => $per_page,
		) );
	}

	protected function get_views() {
		$status_links = array();
		$post_status = empty( $_REQUEST['post_status'] )
			? '' : $_REQUEST['post_status'];

		// Inbox
		Flamingo_Outbound_Message::find( array( 'post_status' => 'any' ) );
		$posts_in_inbox = Flamingo_Outbound_Message::count();

		$inbox = sprintf(
			_nx( 'Inbox <span class="count">(%s)</span>',
				'Inbox <span class="count">(%s)</span>',
				$posts_in_inbox, 'posts', 'flamingo' ),
			number_format_i18n( $posts_in_inbox ) );

		$status_links['inbox'] = sprintf( '<a href="%1$s"%2$s>%3$s</a>',
			menu_page_url( 'flamingo_outbound', false ),
			( $this->is_trash ) ? '' : ' class="current"',
			$inbox );

		// Trash
		Flamingo_Outbound_Message::find( array( 'post_status' => 'trash' ) );
		$posts_in_trash = Flamingo_Outbound_Message::count();

		if ( empty( $posts_in_trash ) ) {
			return $status_links;
		}

		$trash = sprintf(
			_nx( 'Trash <span class="count">(%s)</span>',
				'Trash <span class="count">(%s)</span>',
				$posts_in_trash, 'posts', 'flamingo' ),
			number_format_i18n( $posts_in_trash ) );

		$status_links['trash'] = sprintf( '<a href="%1$s"%2$s>%3$s</a>',
			esc_url( add_query_arg(
				array(
					'post_status' => 'trash',
				),
				menu_page_url( 'flamingo_outbound', false )
			) ),
			'trash' == $post_status ? ' class="current"' : '',
			$trash );

		return $status_links;
	}

	public function get_columns() {
		return get_column_headers( get_current_screen() );
	}

	protected function get_sortable_columns() {
		$columns = array(
			'subject' => array( 'subject', false ),
			'from' => array( 'from', false ),
			'date' => array( 'date', true ),
		);

		return $columns;
	}

	protected function get_bulk_actions() {
		$actions = array();

		if ( $this->is_trash ) {
			$actions['untrash'] = __( 'Restore', 'flamingo' );
		}

		if ( $this->is_trash or ! EMPTY_TRASH_DAYS ) {
			$actions['delete'] = __( 'Delete permanently', 'flamingo' );
		} else {
			$actions['trash'] = __( 'Move to trash', 'flamingo' );
		}

		return $actions;
	}

	protected function extra_tablenav( $which ) {
?>
<div class="alignleft actions">
<?php
		if ( 'top' == $which ) {
			$this->months_dropdown( Flamingo_Outbound_Message::post_type );

			submit_button( __( 'Filter', 'flamingo' ),
				'secondary', false, false, array( 'id' => 'post-query-submit' ) );
		}

		if ( $this->is_trash
		and current_user_can( 'flamingo_delete_outbound_messages' ) ) {
			submit_button( __( 'Empty trash', 'flamingo' ),
				'button-secondary apply', 'delete_all', false );
		}
?>
</div>
<?php
	}

	protected function column_default( $item, $column_name ) {
		do_action( 'manage_flamingo_outbound_posts_custom_column',
			$column_name, $item->id()
		);
	}

	protected function column_cb( $item ) {
		return sprintf(
			'<input type="checkbox" name="%1$s[]" value="%2$s" />',
			$this->_args['singular'],
			$item->id()
		);
	}

	protected function column_subject( $item ) {
		if ( $this->is_trash ) {
			return '<strong>' . esc_html( $item->subject ) . '</strong>';
		}

		$actions = array();
		$post_id = absint( $item->id() );

		$edit_link = add_query_arg(
			array(
				'post' => $post_id,
				'action' => 'edit',
			),
			menu_page_url( 'flamingo_outbound', false )
		);

		if ( current_user_can( 'flamingo_edit_outbound_message', $post_id ) ) {
			$actions['edit'] = sprintf( '<a href="%1$s">%2$s</a>',
				esc_url( $edit_link ), esc_html( __( 'Edit', 'flamingo' ) ) );
		}

		if ( current_user_can( 'flamingo_edit_outbound_message', $post_id ) ) {
			return sprintf( '<strong><a class="row-title" href="%1$s" aria-label="%2$s">%3$s</a></strong> %4$s',
				esc_url( $edit_link ),
				esc_attr( sprintf( __( 'Edit &#8220;%s&#8221;', 'flamingo' ), $item->subject ) ),
				esc_html( $item->subject ),
				$this->row_actions( $actions ) );
		} else {
			return sprintf( '<strong>%1$s</strong> %2$s',
				esc_html( $item->subject ),
				$this->row_actions( $actions ) );
		}
	}

	protected function column_from( $item ) {
		return esc_html( $item->from );
	}

	protected function column_date( $item ) {
		$datetime = get_post_datetime( $item->id() );

		if ( false === $datetime ) {
			return '';
		}

		$t_time = sprintf(
			/* translators: 1: date, 2: time */
			__( '%1$s at %2$s', 'flamingo' ),
			/* translators: date format, see https://www.php.net/date */
			$datetime->format( __( 'Y/m/d', 'flamingo' ) ),
			/* translators: time format, see https://www.php.net/date */
			$datetime->format( __( 'g:i a', 'flamingo' ) )
		);

		return $t_time;
	}
}
