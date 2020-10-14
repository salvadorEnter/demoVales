<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$mod_strings = array (
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',

    //END DON'T CONVERT

    // Dashboard Names
    'LBL_LEADS_LIST_DASHBOARD' => 'Tablero de Lista de Clientes Potenciales',
    'LBL_LEADS_RECORD_DASHBOARD' => 'Tablero de Registro de Clientes Potenciales',

    'ERR_DELETE_RECORD' => 'Debe especificar un número de registro a eliminar.',
    'LBL_ACCOUNT_DESCRIPTION'=> 'Descripción de la Cuenta',
    'LBL_ACCOUNT_ID'=>'ID de Cuenta',
    'LBL_ACCOUNT_NAME' => 'Nombre de cuenta:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Actividades',
    'LBL_ADD_BUSINESSCARD' => 'Añadir Tarjeta de Negocio',
    'LBL_ADDRESS_INFORMATION' => 'Información postal',
    'LBL_ALT_ADDRESS_CITY' => 'Ciudad de dirección alternativa',
    'LBL_ALT_ADDRESS_COUNTRY' => 'País de dirección alternativa',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Código Postal de dirección alternativa',
    'LBL_ALT_ADDRESS_STATE' => 'Estado/Provincia de dirección alternativa',
    'LBL_ALT_ADDRESS_STREET_2' => 'Calle de dirección alternativa 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Calle de dirección alternativa 3',
    'LBL_ALT_ADDRESS_STREET' => 'Calle de dirección alternativa',
    'LBL_ALTERNATE_ADDRESS' => 'Dirección alternativa:',
    'LBL_ANY_ADDRESS' => 'Cualquier dirección:',
    'LBL_ANY_EMAIL' => 'Correo electrónico:',
    'LBL_ANY_PHONE' => 'Cualquier teléfono:',
    'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
    'LBL_ASSIGNED_TO_ID' => 'Usuario Asignado:',
    'LBL_BACKTOLEADS' => 'Volver a Clientes Potenciales',
    'LBL_BUSINESSCARD' => 'Convertir Cliente Potencial',
    'LBL_CITY' => 'Ciudad:',
    'LBL_CONTACT_ID' => 'ID de Contacto',
    'LBL_CONTACT_INFORMATION' => 'Reseña General',
    'LBL_CONTACT_NAME' => 'Nombre del cliente potencial:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Cliente Potencial-Oportunidad:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACT' => 'Cliente Potencial:',
    'LBL_CONVERT_BUTTON_LABEL' => 'Convertir',
    'LBL_SAVE_CONVERT_BUTTON_LABEL' => 'Guardar y Convertir',
    'LBL_CONVERT_PANEL_OPTIONAL' => '(opcional)',
    'LBL_CONVERT_ACCESS_DENIED' => 'Esta perdiendo acceso editado a los módulos necesarios para convertir un Prospecto:{{requiredModulesMissing}}',
    'LBL_CONVERT_FINDING_DUPLICATES' => 'Búsqueda de duplicados ...',
    'LBL_CONVERT_IGNORE_DUPLICATES' => 'Ignorar y crear nuevos',
    'LBL_CONVERT_BACK_TO_DUPLICATES' => 'Regresar a duplicados',
    'LBL_CONVERT_SWITCH_TO_CREATE' => 'Crear Nuevo',
    'LBL_CONVERT_SWITCH_TO_SEARCH' => 'Buscar',
    'LBL_CONVERT_DUPLICATES_FOUND' => '{{duplicateCount}} duplicados encontrados',
    'LBL_CONVERT_CREATE_NEW' => 'Nuevo {{moduleName}}',
    'LBL_CONVERT_SELECT_MODULE' => 'Seleccionar {{moduleName}}',
    'LBL_CONVERT_SELECTED_MODULE' => 'Seleccionar {{moduleName}}',
    'LBL_CONVERT_CREATE_MODULE' => 'Crear {{moduleName}}',
    'LBL_CONVERT_CREATED_MODULE' => 'Crear {{moduleName}}',
    'LBL_CONVERT_RESET_PANEL' => 'Restablecer',
    'LBL_CONVERT_COPY_RELATED_ACTIVITIES' => 'Copiar actividades relacionadas en',
    'LBL_CONVERT_MOVE_RELATED_ACTIVITIES' => 'Mover actividades relacionadas en',
    'LBL_CONVERT_MOVE_ACTIVITIES_TO_CONTACT' => 'Mover las actividades relacionadas al registro de contacto',
    'LBL_CONVERTED_ACCOUNT'=>'Cuenta Convertida:',
    'LBL_CONVERTED_CONTACT' => 'Contacto Convertido:',
    'LBL_CONVERTED_OPP'=>'Oportunidad Convertida:',
    'LBL_CONVERTED'=> 'Convertido',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Convertir Cliente Potencial [Alt+V]',
    'LBL_CONVERTLEAD' => 'Convertir Cliente Potencial',
    'LBL_CONVERTLEAD_WARNING' => 'Aviso: El estado del Cliente Potencial que está a punto de convertir es "Convertido". Es posible que ya se haya creado algún registros de tipo Contacto y/o Cuenta a partir de este Cliente Potencial. Si desea continuar con la conversión del Cliente Potencial, haga clic en Guardar. Para volver al Cliente Potencial sin realizar la conversión, haga clic en Cancelar.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Posible Contacto:',
    'LBL_CONVERTLEAD_ERROR' => 'No se pudo convertir el Prospecto',
    'LBL_CONVERTLEAD_FILE_WARN' => 'Ha convertido con éxito al Prospecto {{leadName}}, pero hubo un problema al subir los archivos adjuntos en uno o más registros.',
    'LBL_CONVERTLEAD_SUCCESS' => 'Ha convertido con éxito al Prospecto {{leadName}}',
    'LBL_COUNTRY' => 'País:',
    'LBL_CREATED_NEW' => 'Ha creado un nuevo',
	'LBL_CREATED_ACCOUNT' => 'Creada una nueva cuenta',
    'LBL_CREATED_CALL' => 'Creada una nueva llamada',
    'LBL_CREATED_CONTACT' => 'Creado un nuevo contacto',
    'LBL_CREATED_MEETING' => 'Creada una nueva reunión',
    'LBL_CREATED_OPPORTUNITY' => 'Creada una nueva oportunidad',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Clientes Potenciales',
    'LBL_DEPARTMENT' => 'Departamento:',
    'LBL_DESCRIPTION_INFORMATION' => 'Información adicional',
    'LBL_DESCRIPTION' => 'Descripción:',
    'LBL_DO_NOT_CALL' => 'No llamar:',
    'LBL_DUPLICATE' => 'Clientes potenciales similares',
    'LBL_EMAIL_ADDRESS' => 'Correo Electrónico:',
    'LBL_EMAIL_OPT_OUT' => 'Exclusión de Correo Electrónico:',
    'LBL_EXISTING_ACCOUNT' => 'Cuenta existente utilizada',
    'LBL_EXISTING_CONTACT' => 'Se utiliza un contacto existente',
    'LBL_EXISTING_OPPORTUNITY' => 'Se utiliza una oportunidad existente',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Nombre:',
    'LBL_FULL_NAME' => 'Nombre Completo:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'Historial',
    'LBL_HOME_PHONE' => 'Teléfono de casa:',
    'LBL_IMPORT_VCARD' => 'Importar vCard',
    'LBL_IMPORT_VCARD_SUCCESS' => 'Prospecto de vCard creado con éxito',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automaticamente crea un nuevo cliente potencial importando una vCard.',
    'LBL_INVALID_EMAIL'=>'Correo Electrónico no Váildo:',
    'LBL_INVITEE' => 'Informadores',
    'LBL_LAST_NAME' => 'Apellidos:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Descripción de la Toma de Contacto:',
    'LBL_LEAD_SOURCE' => 'Fuente Principal:',
    'LBL_LIST_ACCEPT_STATUS' => 'Aceptar Estado',
    'LBL_LIST_ACCOUNT_NAME' => 'Cuenta',
    'LBL_LIST_CONTACT_NAME' => 'Contacto',
    'LBL_LIST_CONTACT_ROLE' => 'Rol',
    'LBL_LIST_DATE_ENTERED' => 'Creado',
    'LBL_LIST_EMAIL_ADDRESS' => 'Correo electrónico',
    'LBL_LIST_FIRST_NAME' => 'Nombre',
    'LBL_VIEW_FORM_TITLE' => 'Vista de Clientes Potenciales',
    'LBL_LIST_FORM_TITLE' => 'Lista de Clientes Potenciales',
    'LBL_LIST_LAST_NAME' => 'Apellido',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Descripción de Toma de Contacto',
    'LBL_LIST_LEAD_SOURCE' => 'Fuente del Cliente Potencial',
    'LBL_LIST_MY_LEADS' => 'Mis Clientes Potenciales',
    'LBL_LIST_NAME' => 'Nombre',
    'LBL_LIST_PHONE' => 'Teléfono',
    'LBL_LIST_REFERED_BY' => 'Referido por',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_LIST_TITLE' => 'Cargo',
    'LBL_MOBILE_PHONE' => 'Móvil:',
    'LBL_MODULE_NAME' => 'Clientes potenciales',
    'LBL_MODULE_NAME_SINGULAR' => 'Cliente Potencial',
    'LBL_MODULE_TITLE' => 'Clientes Potenciales: Inicio',
    'LBL_NAME' => 'Nombre:',
    'LBL_NEW_FORM_TITLE' => 'Nuevo Cliente Potencial',
    'LBL_NEW_PORTAL_PASSWORD' => 'Nueva Contraseña del Portal:',
    'LBL_OFFICE_PHONE' => 'Teléfono de Oficina:',
    'LBL_OPP_NAME' => 'Nombre de la Oportunidad:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Cantidad de la Oportunidad:',
    'LBL_OPPORTUNITY_ID'=>'ID de Oportunidad',
    'LBL_OPPORTUNITY_NAME' => 'Nombre de la Oportunidad:',
    'LBL_CONVERTED_OPPORTUNITY_NAME' => 'Nombre de oportunidad convertida',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Otro Correo Electrónico:',
    'LBL_OTHER_PHONE' => 'Otro Teléfono:',
    'LBL_PHONE' => 'Teléfono:',
    'LBL_PORTAL_ACTIVE' => 'Portal Activo:',
    'LBL_PORTAL_APP'=> 'Aplicación del Portal',
    'LBL_PORTAL_INFORMATION' => 'Información del Portal',
    'LBL_PORTAL_NAME' => 'Nombre del Portal:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Contraseña del Portal Establecida:',
    'LBL_POSTAL_CODE' => 'Código Postal:',
    'LBL_STREET' => 'Calle',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Ciudad de dirección principal',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'País de dirección principal',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'CP de dirección principal',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Estado/Provincia de dirección principal',
    'LBL_PRIMARY_ADDRESS_STREET_2'=>'Calle de dirección principal 2',
    'LBL_PRIMARY_ADDRESS_STREET_3'=>'Calle de dirección principal 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Calle de dirección principal',
    'LBL_PRIMARY_ADDRESS' => 'Dirección principal:',
    'LBL_RECORD_SAVED_SUCCESS' => 'Ha creado con éxit {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{full_name}}</a>.',
    'LBL_REFERED_BY' => 'Referido por:',
    'LBL_REPORTS_TO_ID'=>'Informa a ID',
    'LBL_REPORTS_TO' => 'Informa a:',
    'LBL_REPORTS_FROM' => 'Informes de:',
    'LBL_SALUTATION' => 'Saludo',
    'LBL_MODIFIED'=>'Modificado por',
	'LBL_MODIFIED_ID'=>'Modificado por Id',
	'LBL_CREATED'=>'Creado por',
	'LBL_CREATED_ID'=>'Creado por Id',
    'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Clientes Potenciales',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Seleccionar Clientes Potenciales Marcados',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Seleccionar Clientes Potenciales Marcados',
    'LBL_STATE' => 'Estado/Provincia:',
    'LBL_STATUS_DESCRIPTION' => 'Descripción Estado:',
    'LBL_STATUS' => 'Estado:',
    'LBL_TITLE' => 'Cargo:',
    'LBL_UNCONVERTED'=> 'No Convertido',
    'LNK_IMPORT_VCARD' => 'Nuevo cliente potencial desde vCard',
    'LNK_LEAD_LIST' => 'Ver clientes potenciales',
    'LNK_NEW_ACCOUNT' => 'Nueva Cuenta',
    'LNK_NEW_APPOINTMENT' => 'Nueva Cita',
    'LNK_NEW_CONTACT' => 'Nuevo Contacto',
    'LNK_NEW_LEAD' => 'Nuevo cliente potencial',
    'LNK_NEW_NOTE' => 'Nueva Nota',
    'LNK_NEW_TASK' => 'Nueva Tarea',
    'LNK_NEW_CASE' => 'Nuevo Caso',
    'LNK_NEW_CALL' => 'Registrar Llamada',
    'LNK_NEW_MEETING' => 'Programar Reunión',
    'LNK_NEW_OPPORTUNITY' => 'Nueva Oportunidad',
	'LNK_SELECT_ACCOUNTS' => '<b>O</b> Seleccione una Cuenta',
    'LNK_SELECT_CONTACTS' => '<b>O</b> Seleccione un Contacto',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Copiar dirección alternativa a dirección principal',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Copiar dirección principal a dirección alternativa',
    'NTC_DELETE_CONFIRMATION' => '¿Está seguro de que desea eliminar este registro?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'La creación de una oportunidad requiere una cuenta.\n Por favor, o bien cree una nueva o seleccione una existente.',
    'NTC_REMOVE_CONFIRMATION' => '¿Está seguro de que desea quitar este cliente potencial del caso?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => '¿Está seguro de que desea eliminar este registro como un informador directo?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'Campañas',
    'LBL_TARGET_OF_CAMPAIGNS'=>'Campaña Existosa:',
    'LBL_TARGET_BUTTON_LABEL'=>'Objetivo',
    'LBL_TARGET_BUTTON_TITLE'=>'Objetivo',
    'LBL_TARGET_BUTTON_KEY'=>'T',
    'LBL_CAMPAIGN' => 'Campaña:',
  	'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuario Asignado',
    'LBL_PROSPECT_LIST' => 'Lista de Posibles Clientes',
    'LBL_PROSPECT' => 'Público Objetivo',
    'LBL_CAMPAIGN_LEAD' => 'Campañas',
	'LNK_LEAD_REPORTS' => 'Ver informes de clientes potenciales',
    'LBL_BIRTHDATE' => 'Cumpleaños:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' =>'Gracias por la información.',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' =>'Disculpe, el servidor no está disponible en estos momentos. Por favor, inténtelo de nuevo más tarde.',
    'LBL_ASSISTANT_PHONE' => 'Teléfono de Asistente',
    'LBL_ASSISTANT' => 'Asistente',
    'LBL_REGISTRATION' => 'Registro',
    'LBL_MESSAGE' => 'Por favor, introduzca sus datos a continuación. Se creará la información y/o cuenta para usted, pendiente de aprobación.',
    'LBL_SAVED' => 'Gracias por registrarse. Su cuenta será creada y se pondrán en contacto con usted en breve.',
    'LBL_CLICK_TO_RETURN' => 'Volver al Portal',
    'LBL_CREATED_USER' => 'Usuario Creado',
    'LBL_MODIFIED_USER' => 'Usuario Modificado',
    'LBL_CAMPAIGNS' => 'Campañas',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Campañas',
    'LBL_CONVERT_MODULE_NAME' => 'Módulo',
    'LBL_CONVERT_MODULE_NAME_SINGULAR' => 'Módulo',
    'LBL_CONVERT_REQUIRED' => 'Requerido',
    'LBL_CONVERT_SELECT' => 'Permitir Selección',
    'LBL_CONVERT_COPY' => 'Copiar Datos',
    'LBL_CONVERT_EDIT' => 'Editar',
    'LBL_CONVERT_DELETE' => 'Eliminar',
    'LBL_CONVERT_ADD_MODULE' => 'Agregar Módulo',
    'LBL_CONVERT_EDIT_LAYOUT' => 'Editar Diseño de Conversión',
    'LBL_CREATE' => 'Crear',
    'LBL_SELECT' => '<b>O</b> Seleccionar',
	'LBL_WEBSITE' => 'Sitio web',
	'LNK_IMPORT_LEADS' => 'Importar clientes potenciales',
	'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Aviso: La pantalla actual de Convertir Cliente Potencial contiene campos personalizados. Cuando personalice por primera vez la pantalla de Convertir Cliente Potencial en el Estudio, tendrá que añadir los campos personalizados al diseño, según sea necesario. Los campos personalizados no aparecerán automáticamente en el diseño como lo hacían antes.',
//Convert lead tooltips
	'LBL_MODULE_TIP' 	=> 'Módulo en el que crear un nuevo registro.',
	'LBL_REQUIRED_TIP' 	=> 'Debe seleccionar o crear los módulos requeridos antes de que el cliente potencial pueda ser convertido.',
	'LBL_COPY_TIP'		=> 'Si está seleccionado, los campos del cliente potencial serán copiados a campos con el mismo nombre en los registros recién creados.',
	'LBL_SELECTION_TIP' => 'Los módulos con un campo relacionado en Contactos pueden ser seleccionados en lugar de creados durante el proceso de conversión del cliente potencial.',
	'LBL_EDIT_TIP'		=> 'Modificar el diseño de conversión para este módulo.',
	'LBL_DELETE_TIP'	=> 'Quitar este módulo del diseño de conversión.',

    'LBL_ACTIVITIES_MOVE'   => 'Mover actividad a',
    'LBL_ACTIVITIES_COPY'   => 'Copiar actividad a',
    'LBL_ACTIVITIES_MOVE_HELP'   => "Seleccione los registros de actividad que quiera mover de los clientes potenciales. Tareas, llamadas, reuniones, notas y correos electrónicos que serán trasladados al registro seleccionado.",
    'LBL_ACTIVITIES_COPY_HELP'   => "Selecciona el o los resgistros para cada copia creada de las actividades de los Clientes Potenciales. Las nuevas Tareas, Llamadas, Reuniones y Notas serán creadas para cada registro seleccionado. Los Emails se relacionarán con los registros seleccionados.",
    //For export labels
    'LBL_PHONE_HOME' => 'Teléfono Particular',
    'LBL_PHONE_MOBILE' => 'Teléfono móvil',
    'LBL_PHONE_WORK' => 'Teléfono Laboral',
    'LBL_PHONE_OTHER' => 'Otro teléfono',
    'LBL_PHONE_FAX' => 'Fax',
    'LBL_CAMPAIGN_ID' => 'Id de Campaña',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Nombre de Usuario Asignado',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID de Usuario asignado',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificado por ID',
    'LBL_EXPORT_CREATED_BY' => 'Creado por ID',
    'LBL_EXPORT_PHONE_MOBILE' => 'Móvil',
    'LBL_EXPORT_EMAIL2'=>'Otra Dirección de Correo Electrónico',
	'LBL_EDITLAYOUT' => 'Editar diseño' /*for 508 compliance fix*/,
	'LBL_ENTERDATE' => 'Introducir fecha' /*for 508 compliance fix*/,
	'LBL_LOADING' => 'Cargando...' /*for 508 compliance fix*/,
	'LBL_EDIT_INLINE' => 'Editar' /*for 508 compliance fix*/,
    //D&B Principal Identification
    'LBL_DNB_PRINCIPAL_ID' => 'Principal Id D&B',
    //Dashlet
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',

    //Document title
    'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if last_name}}{{#if first_name}}{{first_name}} {{/if}}{{last_name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Notas',

    'LBL_HELP_CONVERT_TITLE' => 'Convertir a {{module_name}}',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => 'El módulo {{plural_module_name}} consiste en perspectivas individuales que puedan estar interesadas ​​en un producto o servicio que su organización proporciona. Una vez que el {{module_name}} se califica como una venta {{opportunities_singular_module}}, {{plural_module_name}} se puede convertir en {{contacts_module}}, {{opportunities_module}}, y {{accounts_module}}. Hay varias formas de crear {{plural_module_name}} en Sugar como a través del módulo {{plural_module_name}}, duplicar, importar {{plural_module_name}}, etc. Una vez que el registro {{module_name}} se crea, puede ver y editar la información relativa al {{module_name}} vía la vista de registro {{plural_module_name}}.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'El módulo {{plural_module_name}} consiste en perspectivas individuales que puedan estar interesadas ​​en un producto o servicio que su organización proporciona.

-Edite los campos de este registro, haga clic en un campo individual o en el botón Modificar. 
- Ver o modificar enlaces a otros registros en los subpaneles moviendo el panel inferior izquierdo para "Vista de datos". 
- Hacer y ver los comentarios de los usuarios y el cambio en el registro de la historia {{activitystream_singular_module}} moviendo el panel inferior izquierdo para "Últimas acciones". 
- Siga o favorito este registro utilizando los iconos a la derecha del nombre del registro. 
- Las acciones adicionales se encuentran disponibles en el menú Acciones desplegables a la derecha del botón Editar.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'El módulo {{plural_module_name}} se compone de prospectos individuales que podrían estar interesados ​​en un producto o servicio que su organización proporciona. Una vez que el {{module_name}} se califica como venta {{opportunities_singular_module}}, se puede convertir en un {{contacts_singular_module}}, {{accounts_singular_module}}, {{opportunities_singular_module}}, u otro registro.

Para crear un {{module_name}}:
1. Proporcione valores para los campos según se desee. 
  - Los campos marcados como "Obligatorio" deben ser completados antes de guardar. 
  - Haga clic en "Mostrar más" para exponer campos adicionales si es necesario. 
2. Haga clic en "Guardar" para finalizar el nuevo registro y volver a la página anterior.',

    // Convert View Help Text
    'LBL_HELP_CONVERT' => 'Sugar le permite convertir {{plural_module_name}} en {{contacts_module}}, {{accounts_module}}, y otros módulos una vez que el {{module_name}}cumple sus criterios de calificación. 

Paso a través de cada módulo mediante la modificación de los campos a continuación, confirmar los valores del nuevo registro haciendo clic en cada botón Asociar. 

Si Sugar detecta un registro existente que coincida con la información de {{module_name}},usted tiene la opción de elegir un duplicado y confirmar la selección con la tecla asociado o hacer clic en "Ignorar y crear nuevos" y proceder normalmente. 

Tras confirmar cada módulo necesario y deseado, haga clic en el botón Guardar y Convertir en la parte superior para finalizar la conversión.',

    //Marketo
    'LBL_MKTO_SYNC' => 'Sincronizar a Marketo&reg;',
    'LBL_MKTO_ID' => 'ID del Marketo Lead',
    'LBL_MKTO_LEAD_SCORE' => 'Puntuación del Prospecto',

    'LBL_FILTER_LEADS_REPORTS' => 'Reportes de prospecto',
    'LBL_DATAPRIVACY_BUSINESS_PURPOSE' => 'Ha consentido los fines comerciales',
    'LBL_DATAPRIVACY_CONSENT_LAST_UPDATED' => 'Consentimiento actualizado por última vez',

    // Leads Pipeline view
    'LBL_PIPELINE_ERR_CONVERTED' => 'No se puede cambiar el estado de {{moduleSingular}}. Este {{moduleSingular}} ya se convirtió.',
);
