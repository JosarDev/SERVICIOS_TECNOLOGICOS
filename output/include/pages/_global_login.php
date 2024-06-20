<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'login_message' ),
'top' => array( 'login-logo',
'login_welcome' ),
'grid' => array( 'username_label',
'username',
'password_label',
'password',
'remember_password',
'guest_login' ),
'footer' => array( 'login_button' ),
'superbottom' => array(  ) ),
'formXtTags' => array( 'footer' => array( 'signin_button' ),
'superbottom' => array(  ) ),
'itemForms' => array( 'login_message' => 'above-grid',
'login-logo' => 'top',
'login_welcome' => 'top',
'username_label' => 'grid',
'username' => 'grid',
'password_label' => 'grid',
'password' => 'grid',
'remember_password' => 'grid',
'guest_login' => 'grid',
'login_button' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'username_label' => array( 'username_label' ),
'username' => array( 'username' ),
'password_label' => array( 'password_label' ),
'password' => array( 'password' ),
'login_message' => array( 'login_message' ),
'login_button' => array( 'login_button' ),
'guest_login' => array( 'guest_login' ),
'remember_password' => array( 'remember_password' ),
'login-logo' => array( 'login-logo' ),
'login_welcome' => array( 'login_welcome' ) ),
'cellMaps' => array(  ) ),
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
			$pageArray = array( 'id' => 'login',
'type' => 'login',
'layoutId' => 'pretty1',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'login-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array(  ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'login_message' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'plogin-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3',
'colspan' => 2 ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'login-logo' ) ),
'c2' => array( 'model' => 'c2',
'items' => array(  ) ),
'c3' => array( 'model' => 'c3',
'items' => array( 'login_welcome' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'plogin-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2',
'colspan' => 2 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c6' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'username_label',
'username' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'password_label',
'password' ) ),
'c4' => array( 'model' => 'c4',
'items' => array( 'remember_password' ) ),
'c6' => array( 'model' => 'c6',
'items' => array( 'guest_login' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'plogin-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'login_button' ) ),
'c2' => array( 'model' => 'c2',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'superbottom' => array( 'modelId' => 'plogin-superbottom',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'username_label' => array( 'type' => 'username_label' ),
'username' => array( 'type' => 'username' ),
'password_label' => array( 'type' => 'password_label' ),
'password' => array( 'type' => 'password' ),
'login_message' => array( 'type' => 'login_message' ),
'login_button' => array( 'type' => 'login_button' ),
'guest_login' => array( 'type' => 'guest_login' ),
'remember_password' => array( 'type' => 'remember_password' ),
'login-logo' => array( 'type' => 'login-logo',
'font-size' => '24px' ),
'login_welcome' => array( 'type' => 'login_welcome' ) ),
'dbProps' => array(  ),
'version' => 13,
'imageItem' => array( 'type' => 'page_image',
'shadow' => true,
'fullSize' => false,
'image' => array( 'source' => 0,
'image' => 'race-cars-on-the-road-publicdomainvectors.org.png' ) ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>