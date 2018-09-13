<?php
include "connection.php";
include "class/class_database.php";
$db 		= new Database(DB_TYPE,DB_HOST,DB_NAME,DB_USER,DB_PASS);

if (isset($_POST["product_name"])){
	$table 		= 'produtos';
	$product 	= array(
		"nome" 		=> $_POST['product_name'],
		"descricao" => $_POST['product_description'],
		"preco" 	=> $_POST['product_price']
	);

	if ($_POST["update_product_id"] == "") {	
			$db->insert($table, $product);
			//echo json_encode($html);
		} else {
			$condition = "id = " . $_POST["update_product_id"];
			$db->update($table, $product, $condition);
			echo json_encode($_POST);
		}
}

if (isset($_POST["delete_product"])){
	$table = "produtos";
	$where = "id = " . $_POST["delete_product"];
	$db->delete($table,$where);
	//echo json_encode($html);
}

if (isset($_POST["preupdate_product"])){
	$response = $db->select("select * from produtos where id = " . $_POST["preupdate_product"] . " limit 1");
	echo json_encode($response);
}

if (isset($_POST["refresh_table"])){
	$response = $db->select("select * from produtos order by nome asc");
	$html 	  = "";
	for ($i=0; $i < count($response); $i++) { 
		$html .= "
			<tr>
				<td>" . $response[$i]["nome"] . "</td>
				<td>" . $response[$i]["descricao"] . "</td>
				<td>" . $response[$i]["preco"] . "</td>
				<td><button id='btn_update' value='" . $response[$i]["id"] . "' type='button' class='btn btn-warning' data-toggle='modal' data-target='#exampleModal' onclick='preUpdateProduct(this.value);'>ALTERAR</button></td>
				<td><button id='btn_delete' value='" . $response[$i]["id"] . "' type='button' onclick='deleteProduct(this.value); resetForm();' class='btn btn-danger'>EXCLUIR</button></td>
			</tr>";
	}
	echo json_encode($html);
}

