<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'id_Servicio',
'Nombre_Servicio',
'Normatividad',
'Descripcion',
'Valor_Servicio',
'TipoServicio',
'Instrumento',
'Fabricante',
'Modelo',
'Serie',
'Cog_Interno',
'IRPC',
'Nom_Material',
'Tipo_Material',
'Report_Results',
'Cantidad',
'Tipo_Probeta',
'fk_id_Laboratorio' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id_Servicio' => array( 'import_field' ),
'Nombre_Servicio' => array( 'import_field1' ),
'Normatividad' => array( 'import_field2' ),
'Descripcion' => array( 'import_field3' ),
'Valor_Servicio' => array( 'import_field4' ),
'TipoServicio' => array( 'import_field5' ),
'Instrumento' => array( 'import_field6' ),
'Fabricante' => array( 'import_field7' ),
'Modelo' => array( 'import_field8' ),
'Serie' => array( 'import_field9' ),
'Cog_Interno' => array( 'import_field10' ),
'IRPC' => array( 'import_field11' ),
'Nom_Material' => array( 'import_field12' ),
'Tipo_Material' => array( 'import_field13' ),
'Report_Results' => array( 'import_field14' ),
'Cantidad' => array( 'import_field15' ),
'Tipo_Probeta' => array( 'import_field16' ),
'fk_id_Laboratorio' => array( 'import_field17' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field12' => 'grid',
'import_field13' => 'grid',
'import_field14' => 'grid',
'import_field15' => 'grid',
'import_field16' => 'grid',
'import_field17' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12',
'import_field13',
'import_field14',
'import_field15',
'import_field16',
'import_field17' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'id_Servicio',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'Nombre_Servicio',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'Normatividad',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'Descripcion',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'Valor_Servicio',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'TipoServicio',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'Instrumento',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'Fabricante',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'Modelo',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'Serie',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'Cog_Interno',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'IRPC',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'Nom_Material',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'Tipo_Material',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'Report_Results',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'Cantidad',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'Tipo_Probeta',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'fk_id_Laboratorio',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 13,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>