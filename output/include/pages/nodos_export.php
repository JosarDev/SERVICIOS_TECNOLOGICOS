<?php
			$optionsArray = array( 'totals' => array( 'id_nodo' => array( 'totalsType' => '' ),
'nom_nodo' => array( 'totalsType' => '' ),
'id_centro' => array( 'totalsType' => '' ),
'matricula_inmobiliario' => array( 'totalsType' => '' ),
'barrio_nodo' => array( 'totalsType' => '' ),
'direc_nodo' => array( 'totalsType' => '' ),
'localidad' => array( 'totalsType' => '' ),
'img_nodo' => array( 'totalsType' => '' ),
'fecha_reg_nodo' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'id_nodo',
'nom_nodo',
'id_centro',
'matricula_inmobiliario',
'barrio_nodo',
'direc_nodo',
'localidad',
'img_nodo',
'fecha_reg_nodo' ),
'exportFields' => array( 'id_nodo',
'nom_nodo',
'id_centro',
'matricula_inmobiliario',
'barrio_nodo',
'direc_nodo',
'localidad',
'img_nodo',
'fecha_reg_nodo' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id_nodo' => array( 'export_field' ),
'nom_nodo' => array( 'export_field1' ),
'id_centro' => array( 'export_field2' ),
'matricula_inmobiliario' => array( 'export_field3' ),
'barrio_nodo' => array( 'export_field4' ),
'direc_nodo' => array( 'export_field5' ),
'localidad' => array( 'export_field6' ),
'img_nodo' => array( 'export_field7' ),
'fecha_reg_nodo' => array( 'export_field8' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8' ) ),
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
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
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
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'id_nodo',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'nom_nodo',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'id_centro',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'matricula_inmobiliario',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'barrio_nodo',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'direc_nodo',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'localidad',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'img_nodo',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'fecha_reg_nodo',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 13,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>