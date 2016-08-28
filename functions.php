<?php
// TESTE 1 -Início
// Add new post type for Produtos

add_action('init', 'produtos_init');
function produtos_init() 
{
	$produtos_labels = array(
		'name' => _x('Produtos', 'post type general name'),
		'singular_name' => _x('Produto', 'post type singular name'),
		'all_items' => __('Todos os Produtos'),
		'add_new' => _x('Adicione um novo produto', 'produtos'),
		'add_new_item' => __('Adicione um novo produto'),
		'edit_item' => __('Edite um produto'),
		'new_item' => __('Novo produto'),
		'view_item' => __('Veja um produto'),
		'search_items' => __('Pesquise em Produtos'),
		'not_found' =>  __('Produtos não encontrados'),
		'not_found_in_trash' => __('Produtos não encontrados na lixeira'), 
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $produtos_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'menu_icon' => 'dashicons-store',
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','thumbnail'),
		'has_archive' => 'produtos'
	); 
	register_post_type('produtos',$args);
	flush_rewrite_rules(); 
}


add_action('init', 'clientes_init');
function clientes_init() 
{
	$clientes_labels = array(
		'name' => _x('Clientes', 'post type general name'),
		'singular_name' => _x('Carro', 'post type singular name'),
		'all_items' => __('Todos os clientes'),
		'add_new' => _x('Adicione um novo cliente', 'clientes'),
		'add_new_item' => __('Adicione um novo cliente'),
		'edit_item' => __('Edite um cliente'),
		'new_item' => __('Novo Cliente'),
		'view_item' => __('Veja um cliente'),
		'search_items' => __('Pesquise em Clientes'),
		'not_found' =>  __('Clientes não encontrados'),
		'not_found_in_trash' => __('Clientes não encontrados na lixeira'), 
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $clientes_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'menu_icon' => 'dashicons-groups',
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','thumbnail'),
		'has_archive' => 'clientes'
	); 
	register_post_type('clientes',$args);
	flush_rewrite_rules(); 
}

add_action('init', 'pedidos_init');
function pedidos_init() 
{
	$pedidos_labels = array(
		'name' => _x('Pedidos', 'post type general name'),
		'singular_name' => _x('Pedido', 'post type singular name'),
		'all_items' => __('Todos os pedidos'),
		'add_new' => _x('Adicione um novo pedido', 'pedidos'),
		'add_new_item' => __('Adicione um novo pedido'),
		'edit_item' => __('Edite um pedido'),
		'new_item' => __('Novo pedido'),
		'view_item' => __('Veja um pedido'),
		'search_items' => __('Pesquise em pedidos'),
		'not_found' =>  __('Pedidos não encontrados'),
		'not_found_in_trash' => __('Pedidos não encontrados na lixeira'), 
		'parent_item_colon' => ''
	);
	$args = array(
		'labels' => $pedidos_labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'rewrite' => true,
		'menu_icon' => 'dashicons-chart-bar',
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 5,
		'supports' => array('title','editor','thumbnail'),
		'has_archive' => 'pedidos'
	); 
	register_post_type('pedidos',$args);
	flush_rewrite_rules(); 
}


/* Dados de Produtos - inicio */

add_action("manage_posts_custom_column",  "produtos_custom_columns");
add_filter("manage_edit-produtos_columns", "produtos_edit_columns");
 
function produtos_edit_columns($columns){
  $columns = array(
    "cb" => "<input type='checkbox' />",
    "id" => "ID",
    "title" => "Nome do Produto",
    "description" => "Descrição",
    "preco" => "Preço",
  );
 
  return $columns;
}


function produtos_custom_columns($column){
  global $post;
 
  switch ($column) {

    case "description":
    	the_excerpt();
      	break;
	  
    case "preco":
      	$custom = get_post_custom();
      	echo $custom["preco_meta_structure"][0];
      	break;
  }
}

/* Dados de Produtos - fim */

/* Dados de Clientes - início */
add_action("manage_posts_custom_column",  "clientes_custom_columns");
add_filter("manage_edit-clientes_columns", "clientes_edit_columns");

function clientes_edit_columns($columns){
  $columns = array(
    "cb" => "<input type='checkbox' />",
    "id" => "ID",
    "title" => "Nome do Cliente",
    "telefone" => "Telefone",
    "email" => "Email",
  );

  return $columns;

}


function clientes_custom_columns($column){
  global $post;
 
  switch ($column) {
	case "id":
		echo $post->ID;
		break;
    case "telefone":
      	$custom = get_post_custom();
      	echo $custom["cliente_telefone_meta_structure"][0];
      	break;

    case "email":
      	$custom = get_post_custom();
      	echo $custom["cliente_email_meta_structure"][0];
      	break;
  }
}

/* Dados de Clientes - fim */

/* Dados de Pedidos - início */
add_filter("manage_edit-pedidos_columns", "pedidos_edit_columns");

function pedidos_edit_columns($columns){
  $columns = array(
    "cb" => "<input type='checkbox' />",
    "id" => "ID do Pedido",
    "id_cliente" => "ID do Cliente",
    "id_produto" => "ID do Produto",
  );

  return $columns;
}
/* Dados de Clientes - início */



/* Dados de Pedidos - fim */


add_action("admin_init", "admin_init");
 
function admin_init(){
  //add_meta_box("year_completed-meta", "Year Completed", "year_completed", "produtos", "side", "low");
  add_meta_box("preco_meta", "Preço", "preco_meta_structure", "produtos", "side", "high");
  add_meta_box("cliente_email_meta", "Email", "cliente_email_meta_structure", "clientes", "normal", "low");
  add_meta_box("cliente_telefone_meta", "Telefone", "cliente_telefone_meta_structure", "clientes", "normal", "low");
}

function preco_meta_structure(){
  global $post;
  $custom = get_post_custom($post->ID);
  $preco_meta_structure = $custom["preco_meta_structure"][0];
  ?>
  <label>Preço:</label>
  <input name="preco_meta_structure" value="<?php echo $preco_meta_structure; ?>" />
<?php
}

function cliente_email_meta_structure(){
  global $post;
  $custom = get_post_custom($post->ID);
  $cliente_email_meta_structure = $custom["cliente_email_meta_structure"][0];
  ?>
  <label>Email:</label>
  <input name="cliente_email_meta_structure" value="<?php echo $cliente_email_meta_structure; ?>" />
<?php
}

function cliente_telefone_meta_structure(){
  global $post;
  $custom = get_post_custom($post->ID);
  $cliente_telefone_meta_structure = $custom["cliente_telefone_meta_structure"][0];
  ?>
  <label>Telefone:</label>
  <input name="cliente_telefone_meta_structure" value="<?php echo $cliente_telefone_meta_structure; ?>" />
<?php
}

add_action('save_post', 'save_details');

function save_details(){
  global $post;
 
  update_post_meta($post->ID, "preco_meta_structure", $_POST["preco_meta_structure"]);
  update_post_meta($post->ID, "cliente_email_meta_structure", $_POST["cliente_email_meta_structure"]);
  update_post_meta($post->ID, "cliente_telefone_meta_structure", $_POST["cliente_telefone_meta_structure"]);
}


/* Tamanho das imagens - início */
add_image_size( 'columnModule', 300, 180, true );
add_image_size( 'mainFeatured', 900, 600, true );
add_image_size( 'mainFeatured', 640, 480, true );
/* Tamanho das imagens - fim */
// TESTE 1 - Fim

// TESTE 2 -Início
/* Configuração para os posts mais acessados - início */
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
/* Configuração para os posts mais acessados - fim */

/* -- Código para uma suposta página de page
	setPostViews(get_the_ID());
*/

/* Editando o excerpt - Início */
function my_excerpt_length($length) {
	return 10; 
}

function new_excerpt_more($more) {
	return '';
}
 
add_filter('excerpt_more', 'new_excerpt_more');
add_filter('excerpt_length', 'my_excerpt_length');

/* Editando o excerpt - fim */

// TESTE 2 - FIM
?>