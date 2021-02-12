<?php
$datosInsert = array();
//validaciones
foreach( $datosCargados as $row ){
	//validaciones de un registro
	
	//termina validaciones de un registro
	
	if( !$has_error ){
		$datosInsert[] = array(
			'NCP_CIUDADES_ID' => $row[CIUDADES],
			'NCP_PRECIO' => $row[PRECIO],
			'NCP_TC_ID' => getId( $mapaTipoCiudad ,  $row[TIPO_CIUDAD]),
			'NCP_NC_ID' => getId( $mapaNiveles ,  $row[NIVEL]),
			'NCP_RANGO_SERVICIOS' => $row[RANGO]
		);
	}
}
//Termina validaciones 

//TODO ESTA OK
$data = array(
	0=> array(
		'NCP_TC_ID' => 'PRINCIPAL', 
		'NCP_PRECIO' => '340000.000',
		'NCP_CIUDADES_ID' => '11001,76001,05001,08001,68001',
		'NCP_NC_ID' => 'OPERATIVO',
		'NCP_RANGO_SERVICIOS' => '0-4'
	),
	1=> array(
		'NCP_TC_ID' => 'INTERMEDIA', 
		'NCP_PRECIO' => '340000.000',
		'NCP_CIUDADES_ID' => '11001,76001,05001,08001,68001',
		'NCP_NC_ID' => 'TACTICO',
		'NCP_RANGO_SERVICIOS' => '0-4'
	)
);

$query = "SELECT * FROM NIVEL_CIUDAD_PRECIO WHERE 1 = 1";
$subQueryPrimary = array();
foreach ( $data as $row ){
	$subQuery = array();
	foreach ( $row as $column  => $value ) {
		$subQuery[] = $column . " = '" . $value ."'";
	}
	
	$subQueryPrimary[] = "(" . join(" AND ",$subQuery) .")";
}

$query .= " AND (" . join(" OR ", $subQueryPrimary) . ")";

echo $query;
$mapaCiuadesPrecio = ejecuta_query( $query );

/*foreach( $datosInsert as $key =>  $record ){
	$idTipoCiudad = getId( $mapaCiuadesPrecio ,  array(
		'NCP_TC_ID' => $record['NCP_TC_ID'],
		'NCP_NC_ID' => $record['NCP_NC_ID'],
		'NCP_RANGO_SERVICIOS' => $record['NCP_RANGO_SERVICIOS']
	));
	
	if( !empty($idTipoCiudad) ){
		$datosInsert[$key]['NCP_ID'] = $idTipoCiudad;
	}
}
*/
//actualizar o crear datos
/*foreach( $datosInsert as $record ){
	if( !empty($record['NCP_ID']) ){ //Actualizacion
		$query = "UPDATE NIVEL_CIUDAD_PRECIO SET NCP_CIUDADES_ID = '" .$record['NCP_CIUDADES_ID'] ."', NCP_PRECIO = '" .$record['NCP_PRECIO'] ."'";
	}else{ //creacion
		$query = "INSERT INTO NIVEL_CIUDAD_PRECIO (" . join(",", array_keys($record) ) .") VALUES ('" . join("','", array_values($record) ) ."')";		
	}
	
	ejecutarQuery( $query);
}

echo json_encode();*/

function ejecuta_query( $query ){
	return array(
		0 => array(
			'NCP_ID' => '13',
			'NCP_CIUDADES_ID' => '11001,76001,05001,08001,68001',
			'NCP_PRECIO' => '340000.000',
			'NCP_TC_ID' => '1',
			'NCP_NC_ID' => '4',
			'NCP_RANGO_SERVICIOS' => '0-4'
		),
		1 => array(
			'NCP_ID' => '2',
			'NCP_CIUDADES_ID' => 'ALL',
			'NCP_PRECIO' => '500000.000',
			'NCP_TC_ID' => '2',
			'NCP_NC_ID' => '3',
			'NCP_RANGO_SERVICIOS' => '0-4'
		)
	);
}