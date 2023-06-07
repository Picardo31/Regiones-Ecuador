<?php
/*
Plugin Name: Regiones_Ecuador
Plugin URI: https://coarnem.com
Author: Ricardo Yepez
Descripcion: Plugin para identificación de regiones-provincias en Ecuador
Version: 0.0.2
*/

defined( 'ABSPATH' ) or die;

add_filter( 'woocommerce_states', 'Regiones_Plugin' );

function Regiones_Plugin( $states ) {

    $map = array();

    $cities = array(

        'EC00001' => array(
            'provincia'  => ' Sin seleccionar',
            'ciudad/canton'  => ' ',
            'parroquia/sector'  => '',
        ),

        // 1° Provincia: Azuay

        'EC00000' => array(
            'provincia'  => ' Azuay',
            'ciudad/canton'  => ' Camilo Ponce Enríquez,',
            'parroquia/sector'  => '',
        ),
        'EC00002' => array(
            'provincia'  => ' Azuay',
            'ciudad/canton'  => ' Chordeleg,',
            'parroquia/sector'  => '',
        ),
        'EC00003' => array(
            'provincia'  => ' Azuay',
            'ciudad/canton'  => ' Chordeleg,',
            'parroquia/sector'  => 'La Unión,',
        ),
        'EC00004' => array(
            'provincia'  => ' Azuay',
            'ciudad/canton'  => ' Cuenca,',
            'parroquia/sector'  => '',
        ),
        'EC00005' => array(
            'provincia'  => ' Azuay',
            'ciudad/canton'  => ' Cuenca,',
            'parroquia/sector'  => 'Tarqui,',
        ),
        'EC00006' => array(
            'provincia'  => ' Azuay',
            'ciudad/canton'  => ' El Pan,',
            'parroquia/sector'  => '',
        ),
        'EC00007' => array(
            'provincia'  => ' Azuay',
            'ciudad/canton'  => ' Girón,',
            'parroquia/sector'  => '',
        ),
        'EC00008' => array(
            'provincia'  => ' Azuay',
            'ciudad/canton'  => ' Guachapala,',
            'parroquia/sector'  => '',
        ),
        'EC00009' => array(
            'provincia'  => ' Azuay',
            'ciudad/canton'  => ' Gualaceo,',
            'parroquia/sector'  => '',
        ),
        'EC00010' => array(
            'provincia'  => ' Azuay',
            'ciudad/canton'  => ' Nabón,',
            'parroquia/sector'  => '',
        ),
        'EC00011' => array(
            'provincia'  => ' Azuay',
            'ciudad/canton'  => ' Oña,',
            'parroquia/sector'  => '',
        ),
        'EC000012' => array(
            'provincia'  => ' Azuay',
            'ciudad/canton'  => ' Paute,',
            'parroquia/sector'  => '',
        ),
        'EC00013' => array(
            'provincia'  => ' Azuay',
            'ciudad/canton'  => ' Pucará,',
            'parroquia/sector'  => '',
        ),
        'EC00014' => array(
            'provincia'  => ' Azuay',
            'ciudad/canton'  => ' San Fernando,',
            'parroquia/sector'  => '',
        ),
        'EC00015' => array(
            'provincia'  => ' Azuay',
            'ciudad/canton'  => ' Santa Isabel,',
            'parroquia/sector'  => '',
        ),
        'EC00016' => array(
            'provincia'  => ' Azuay',
            'ciudad/canton'  => ' Sevilla de Oro,',
            'parroquia/sector'  => '',
        ),
        'EC00017' => array(
            'provincia'  => ' Azuay',
            'ciudad/canton'  => ' Sígsig,',
            'parroquia/sector'  => '',
        ),

        // 2° Provincia: Bolívar

        'EC00018' => array(
            'provincia'  => ' Bolívar',
            'ciudad/canton'  => ' Caluma,',
            'parroquia/sector'  => '',
        ),
        'EC00019' => array(
            'provincia'  => ' Bolívar',
            'ciudad/canton'  => ' Chillanes,',
            'parroquia/sector'  => '',
        ),
        'EC00020' => array(
            'provincia'  => ' Bolívar',
            'ciudad/canton'  => ' Chimbo,',
            'parroquia/sector'  => 'San José de Chimbo,',
        ),
        'EC00021' => array(
            'provincia'  => ' Bolívar',
            'ciudad/canton'  => ' Echeandía,',
            'parroquia/sector'  => '',
        ),
        'EC00022' => array(
            'provincia'  => ' Bolívar',
            'ciudad/canton'  => ' Guaranda,',
            'parroquia/sector'  => '',
        ),
        'EC00023' => array(
            'provincia'  => ' Bolívar',
            'ciudad/canton'  => ' Guaranda,',
            'parroquia/sector'  => 'San Pedro de Guanujo,',
        ),
        'EC00024' => array(
            'provincia'  => ' Bolívar',
            'ciudad/canton'  => ' Las Naves,',
            'parroquia/sector'  => '',
        ),
        'EC00025' => array(
            'provincia'  => ' Bolívar',
            'ciudad/canton'  => ' San Miguel,',
            'parroquia/sector'  => 'Balzapamba,',
        ),
        'EC00026' => array(
            'provincia'  => ' Bolívar',
            'ciudad/canton'  => ' San Miguel,',
            'parroquia/sector'  => 'San Miguel de Bolívar,',
        ),

        // 3° Provincia: Cañar

        'EC00027' => array(
            'provincia'  => ' Cañar',
            'ciudad/canton'  => ' Azogues,',
            'parroquia/sector'  => '',
        ),
        'EC00028' => array(
            'provincia'  => ' Cañar',
            'ciudad/canton'  => ' Azogues,',
            'parroquia/sector'  => 'Guapán,',
        ),
        'EC00029' => array(
            'provincia'  => ' Cañar',
            'ciudad/canton'  => ' Biblían,',
            'parroquia/sector'  => '',
        ),
        'EC00030' => array(
            'provincia'  => ' Cañar',
            'ciudad/canton'  => ' Cañar,',
            'parroquia/sector'  => '',
        ),
        'EC00031' => array(
            'provincia'  => ' Cañar',
            'ciudad/canton'  => ' Cañar,',
            'parroquia/sector'  => 'Ducur,',
        ),
        'EC00032' => array(
            'provincia'  => ' Cañar',
            'ciudad/canton'  => ' Cañar,',
            'parroquia/sector'  => 'Ingapirca,',
        ),
        'EC00033' => array(
            'provincia'  => ' Cañar',
            'ciudad/canton'  => ' Deleg,',
            'parroquia/sector'  => '',
        ),
        'EC00034' => array(
            'provincia'  => ' Cañar',
            'ciudad/canton'  => ' El Tambo,',
            'parroquia/sector'  => 'Tambo,',
        ),
        'EC00035' => array(
            'provincia'  => ' Cañar',
            'ciudad/canton'  => ' La Troncal,',
            'parroquia/sector'  => 'Cochancay,',
        ),
        'EC00036' => array(
            'provincia'  => ' Cañar',
            'ciudad/canton'  => ' La Troncal,',
            'parroquia/sector'  => '',
        ),
        'EC00037' => array(
            'provincia'  => ' Cañar',
            'ciudad/canton'  => ' La Troncal,',
            'parroquia/sector'  => 'Manuel J. Calle,',
        ),
        'EC00038' => array(
            'provincia'  => ' Cañar',
            'ciudad/canton'  => ' Suscal,',
            'parroquia/sector'  => '',
        ),

        // 4° Provincia: Carchi

        'EC00039' => array(
            'provincia'  => ' Carchi',
            'ciudad/canton'  => ' Bolívar,',
            'parroquia/sector'  => '',
        ),
        'EC00040' => array(
            'provincia'  => ' Carchi',
            'ciudad/canton'  => ' Espejo,',
            'parroquia/sector'  => 'El Ángel,',
        ),
        'EC00041' => array(
            'provincia'  => ' Carchi',
            'ciudad/canton'  => ' Mira,',
            'parroquia/sector'  => '',
        ),
        'EC00042' => array(
            'provincia'  => ' Carchi',
            'ciudad/canton'  => ' Montúfar,',
            'parroquia/sector'  => 'Cristóbal Colon,',
        ),
        'EC00043' => array(
            'provincia'  => ' Carchi',
            'ciudad/canton'  => ' Montúfar,',
            'parroquia/sector'  => 'La Paz,',
        ),
        'EC00044' => array(
            'provincia'  => ' Carchi',
            'ciudad/canton'  => ' Montúfar,',
            'parroquia/sector'  => 'San Gabriel,',
        ),
        'EC00045' => array(
            'provincia'  => ' Carchi',
            'ciudad/canton'  => ' San Pedro de Huaca,',
            'parroquia/sector'  => '',
        ),
        'EC00046' => array(
            'provincia'  => ' Carchi',
            'ciudad/canton'  => ' Tulcan,',
            'parroquia/sector'  => 'Julio Andrade,',
        ),
        'EC00047' => array(
            'provincia'  => ' Carchi',
            'ciudad/canton'  => ' Tulcan,',
            'parroquia/sector'  => 'Tulcan,',
        ),

        // 5° Provincia: Chimborazo

        'EC00048' => array(
            'provincia'  => ' Chimborazo',
            'ciudad/canton'  => ' Alausí,',
            'parroquia/sector'  => '',
        ),
        'EC00049' => array(
            'provincia'  => ' Chimborazo',
            'ciudad/canton'  => ' Chambo,',
            'parroquia/sector'  => '',
        ),
        'EC00050' => array(
            'provincia'  => ' Chimborazo',
            'ciudad/canton'  => ' Chunchi,',
            'parroquia/sector'  => '',
        ),
        'EC00051' => array(
            'provincia'  => ' Chimborazo',
            'ciudad/canton'  => ' Colta,',
            'parroquia/sector'  => '',
        ),
        'EC00052' => array(
            'provincia'  => ' Chimborazo',
            'ciudad/canton'  => ' Cumanda,',
            'parroquia/sector'  => '',
        ),
        'EC00053' => array(
            'provincia'  => ' Chimborazo',
            'ciudad/canton'  => ' Guamote,',
            'parroquia/sector'  => '',
        ),
        'EC00054' => array(
            'provincia'  => ' Chimborazo',
            'ciudad/canton'  => ' Guano,',
            'parroquia/sector'  => '',
        ),
        'EC00055' => array(
            'provincia'  => ' Chimborazo',
            'ciudad/canton'  => ' Pallatanga,',
            'parroquia/sector'  => '',
        ),
        'EC00056' => array(
            'provincia'  => ' Chimborazo',
            'ciudad/canton'  => ' Penipe,',
            'parroquia/sector'  => '',
        ),
        'EC00057' => array(
            'provincia'  => ' Chimborazo',
            'ciudad/canton'  => ' Riobamba,',
            'parroquia/sector'  => 'Licán,',
        ),
        'EC00058' => array(
            'provincia'  => ' Chimborazo',
            'ciudad/canton'  => ' Riobamba,',
            'parroquia/sector'  => '',
        ),
        'EC00059' => array(
            'provincia'  => ' Chimborazo',
            'ciudad/canton'  => ' Riobamba,',
            'parroquia/sector'  => 'San Luis,',
        ),
        'EC00060' => array(
            'provincia'  => ' Chimborazo',
            'ciudad/canton'  => ' Riobamba,',
            'parroquia/sector'  => 'Yaruquíes,',
        ),

        // 6° Provincia: Cotopaxi

        'EC00061' => array(
            'provincia'  => ' Cotopaxi',
            'ciudad/canton'  => ' La Maná,',
            'parroquia/sector'  => '',
        ),
        'EC00062' => array(
            'provincia'  => ' Cotopaxi',
            'ciudad/canton'  => ' Latacunga,',
            'parroquia/sector'  => 'Guaytacama,',
        ),
        'EC00063' => array(
            'provincia'  => ' Cotopaxi',
            'ciudad/canton'  => ' Latacunga,',
            'parroquia/sector'  => '',
        ),
        'EC00064' => array(
            'provincia'  => ' Cotopaxi',
            'ciudad/canton'  => ' Latacunga,',
            'parroquia/sector'  => 'Tanicuchí,',
        ),
        'EC00065' => array(
            'provincia'  => ' Cotopaxi',
            'ciudad/canton'  => ' Pangua,',
            'parroquia/sector'  => '',
        ),
        'EC00066' => array(
            'provincia'  => ' Cotopaxi',
            'ciudad/canton'  => ' Pujilí,',
            'parroquia/sector'  => '',
        ),
        'EC00067' => array(
            'provincia'  => ' Cotopaxi',
            'ciudad/canton'  => ' Salcedo,',
            'parroquia/sector'  => 'Cusubamba,',
        ),
        'EC00068' => array(
            'provincia'  => ' Cotopaxi',
            'ciudad/canton'  => ' Salcedo,',
            'parroquia/sector'  => '',
        ),

        // 7° Provincia: El Oro

        'EC00069' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Saquisilí,',
            'parroquia/sector'  => '',
        ),
        'EC00070' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Sigchos,',
            'parroquia/sector'  => '',
        ),
        'EC00071' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Arenillas,',
            'parroquia/sector'  => '',
        ),
        'EC00072' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Arenillas,',
            'parroquia/sector'  => 'La Cuca,',
        ),
        'EC00073' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Atahualpa,',
            'parroquia/sector'  => '',
        ),
        'EC00074' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Balsas,',
            'parroquia/sector'  => '',
        ),
        'EC00075' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Chilla,',
            'parroquia/sector'  => '',
        ),
        'EC00076' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' El Guabo,',
            'parroquia/sector'  => '',
        ),
        'EC00077' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' El Guabo,',
            'parroquia/sector'  => 'La Iberia,',
        ),
        'EC00078' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Huaquillas,',
            'parroquia/sector'  => '',
        ),
        'EC00079' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Huaquillas,',
            'parroquia/sector'  => 'Puerto Hualtaco,',
        ),
        'EC00080' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Las Lajas,',
            'parroquia/sector'  => '',
        ),
        'EC00081' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Machala,',
            'parroquia/sector'  => 'El Cambio,',
        ),
        'EC00082' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Machala,',
            'parroquia/sector'  => '',
        ),
        'EC00083' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Machala,',
            'parroquia/sector'  => 'Puerto Bolívar,',
        ),
        'EC00084' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Marcabelí,',
            'parroquia/sector'  => '',
        ),
        'EC00085' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Pasaje,',
            'parroquia/sector'  => 'Buenavista,',
        ),
        'EC00086' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Pasaje,',
            'parroquia/sector'  => 'Loma de Franco,',
        ),
        'EC00087' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Pasaje,',
            'parroquia/sector'  => '',
        ),
        'EC00088' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Pasaje,',
            'parroquia/sector'  => 'Progreso,',
        ),
        'EC00089' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Piñas,',
            'parroquia/sector'  => '',
        ),
        'EC00090' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Portovelo,',
            'parroquia/sector'  => '',
        ),
        'EC00091' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Santa Rosa,',
            'parroquia/sector'  => 'La Avanzada,',
        ),
        'EC00092' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Santa Rosa,',
            'parroquia/sector'  => '',
        ),
        'EC00093' => array(
            'provincia'  => ' El Oro',
            'ciudad/canton'  => ' Zaruma,',
            'parroquia/sector'  => '',
        ),

        // 8° Provincia: Esmeraldas

        'EC00094' => array(
            'provincia'  => ' Esmeraldas',
            'ciudad/canton'  => ' Atacames,',
            'parroquia/sector'  => '',
        ),
        'EC00095' => array(
            'provincia'  => ' Esmeraldas',
            'ciudad/canton'  => ' Atacames,',
            'parroquia/sector'  => 'Súa,',
        ),
        'EC00096' => array(
            'provincia'  => ' Esmeraldas',
            'ciudad/canton'  => ' Atacames,',
            'parroquia/sector'  => 'Tonsupa,',
        ),
        'EC00097' => array(
            'provincia'  => ' Esmeraldas',
            'ciudad/canton'  => ' Eloy Alfaro,',
            'parroquia/sector'  => '',
        ),
        'EC00098' => array(
            'provincia'  => ' Esmeraldas',
            'ciudad/canton'  => ' Esmeraldas,',
            'parroquia/sector'  => '',
        ),
        'EC00099' => array(
            'provincia'  => ' Esmeraldas',
            'ciudad/canton'  => ' Esmeraldas,',
            'parroquia/sector'  => 'Tachina,',
        ),
        'EC00100' => array(
            'provincia'  => ' Esmeraldas',
            'ciudad/canton'  => ' Muisne,',
            'parroquia/sector'  => '',
        ),
        'EC00101' => array(
            'provincia'  => ' Esmeraldas',
            'ciudad/canton'  => ' Quinindé,',
            'parroquia/sector'  => 'La Independencia,',
        ),
        'EC00102' => array(
            'provincia'  => ' Esmeraldas',
            'ciudad/canton'  => ' Quinindé,',
            'parroquia/sector'  => '',
        ),
        'EC00103' => array(
            'provincia'  => ' Esmeraldas',
            'ciudad/canton'  => ' Río Verde,',
            'parroquia/sector'  => '',
        ),
        'EC00104' => array(
            'provincia'  => ' Esmeraldas',
            'ciudad/canton'  => ' San Lorenzo,',
            'parroquia/sector'  => 'San Mateo,',
        ),
        'EC00105' => array(
            'provincia'  => ' Esmeraldas',
            'ciudad/canton'  => ' San Lorenzo,',
            'parroquia/sector'  => '',
        ),

        // 9° Provincia: Galápagos
        
        'EC00106' => array(
            'provincia'  => ' Galápagos',
            'ciudad/canton'  => ' San Cristóbal,',
            'parroquia/sector'  => 'Isla San Cristóbal,',
        ),
        'EC00107' => array(
            'provincia'  => ' Galápagos',
            'ciudad/canton'  => ' Santa Cruz,',
            'parroquia/sector'  => '',
        ),

        // 10° Provincia: Guayas

        'EC00108' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Alfredo Baquerizo Moreno,',
            'parroquia/sector'  => 'Rey Park,',
        ),
        'EC00109' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Alfredo Baquerizo Moreno,',
            'parroquia/sector'  => 'Tres Postes,',
        ),
        'EC00110' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Balao,',
            'parroquia/sector'  => 'Cien Familias,',
        ),
        'EC00111' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Balzar,',
            'parroquia/sector'  => '',
        ),
        'EC00112' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Colimes,',
            'parroquia/sector'  => '',
        ),
        'EC00113' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Daule,',
            'parroquia/sector'  => '',
        ),
        'EC00114' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Daule,',
            'parroquia/sector'  => 'Las Animas,',
        ),
        'EC00115' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Daule,',
            'parroquia/sector'  => 'Laurel,',
        ),
        'EC00116' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' El Empalme,',
            'parroquia/sector'  => '',
        ),
        'EC00117' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' El Triunfo,',
            'parroquia/sector'  => '',
        ),
        'EC00118' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' El Triunfo,',
            'parroquia/sector'  => 'Zulema,',
        ),
        'EC00119' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' General Antonio Elizalde,',
            'parroquia/sector'  => 'Bucay,',
        ),
        'EC00120' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Guayaquil,',
            'parroquia/sector'  => 'Balao,',
        ),
        'EC00121' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Guayaquil,',
            'parroquia/sector'  => 'Balao Chico,',
        ),
        'EC00122' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Guayaquil,',
            'parroquia/sector'  => 'Chongon,',
        ),
        'EC00123' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Guayaquil,',
            'parroquia/sector'  => 'El Morro,',
        ),
        'EC00124' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Guayaquil,',
            'parroquia/sector'  => '',
        ),
        'EC00125' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Guayaquil,',
            'parroquia/sector'  => 'Posorja,',
        ),
        'EC00126' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Guayaquil,',
            'parroquia/sector'  => 'San Isidro,',
        ),
        'EC00127' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Guayaquil,',
            'parroquia/sector'  => 'Tenguel,',
        ),
        'EC00128' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Isidro Ayora,',
            'parroquia/sector'  => '',
        ),
        'EC00129' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Juján,',
            'parroquia/sector'  => '',
        ),
        'EC00130' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Lomas de Sargentilo,',
            'parroquia/sector'  => '',
        ),
        'EC00131' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Marcelino Maridueña,',
            'parroquia/sector'  => '',
        ),
        'EC00132' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Milagro,',
            'parroquia/sector'  => 'Mariscal Sucre,',
        ),
        'EC00133' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Milagro,',
            'parroquia/sector'  => '',
        ),
        'EC00134' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Milagro,',
            'parroquia/sector'  => 'Roberto Astudillo,',
        ),
        'EC00135' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Naranjal,',
            'parroquia/sector'  => '',
        ),
        'EC00136' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Naranjal,',
            'parroquia/sector'  => 'Puerto Inca,',
        ),
        'EC00137' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Naranjito,',
            'parroquia/sector'  => '',
        ),
        'EC00138' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Nobol,',
            'parroquia/sector'  => '',
        ),
        'EC00139' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Palestina,',
            'parroquia/sector'  => 'Colorodal,',
        ),
        'EC00140' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Palestina,',
            'parroquia/sector'  => '',
        ),
        'EC00141' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Pedro Carbo,',
            'parroquia/sector'  => '',
        ),
        'EC00142' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Pedro Carbo,',
            'parroquia/sector'  => 'Sabanilla,',
        ),
        'EC00143' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Playas,',
            'parroquia/sector'  => 'Engabao,',
        ),
        'EC00144' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Playas,',
            'parroquia/sector'  => '',
        ),
        'EC00145' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Salitre,',
            'parroquia/sector'  => 'General Vernaza (Dos Esteros),',
        ),
        'EC00146' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Salitre,',
            'parroquia/sector'  => 'Los Tintos,',
        ),
        'EC00147' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Salitre,',
            'parroquia/sector'  => '',
        ),
        'EC00148' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Samborondón,',
            'parroquia/sector'  => 'Boca de Caña,',
        ),
        'EC00149' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Samborondón,',
            'parroquia/sector'  => 'La Puntilla,',
        ),
        'EC00150' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Samborondón,',
            'parroquia/sector'  => '',
        ),
        'EC00151' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Samborondón,',
            'parroquia/sector'  => 'Tarifa,',
        ),
        'EC00152' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Santa Lucía,',
            'parroquia/sector'  => '',
        ),
        'EC00153' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Simón Bolívar,',
            'parroquia/sector'  => '',
        ),
        'EC00154' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Yaguachi,',
            'parroquia/sector'  => 'Virgen de Fátima (Km 26 vía Durán),',
        ),
        'EC00155' => array(
            'provincia'  => ' Guayas',
            'ciudad/canton'  => ' Yaguachi,',
            'parroquia/sector'  => '',
        ),

        // 11° Provincia: Imbabura

        'EC00156' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Antonio Ante,',
            'parroquia/sector'  => 'Atuntaqui,',
        ),
        'EC00157' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Antonio Ante,',
            'parroquia/sector'  => 'San Francisco de Natabuela,',
        ),
        'EC00158' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Antonio Ante,',
            'parroquia/sector'  => 'San Roque,',
        ),
        'EC00159' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Atuntaqui,',
            'parroquia/sector'  => 'Andrade Marín,',
        ),
        'EC00160' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Atuntaqui,',
            'parroquia/sector'  => 'San José de Chaltura,',
        ),
        'EC00161' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Cotacachi,',
            'parroquia/sector'  => '',
        ),
        'EC00162' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Cotacachi,',
            'parroquia/sector'  => 'Quiroga,',
        ),
        'EC00163' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Ibarra,',
            'parroquia/sector'  => 'Alpachaca,',
        ),
        'EC00164' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Ibarra,',
            'parroquia/sector'  => 'Caranqui,',
        ),
        'EC00165' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Ibarra,',
            'parroquia/sector'  => '',
        ),
        'EC00166' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Ibarra,',
            'parroquia/sector'  => 'Miravalle,',
        ),
        'EC00167' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Ibarra,',
            'parroquia/sector'  => 'San Antonio de Ibarra,',
        ),
        'EC00168' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Ibarra,',
            'parroquia/sector'  => 'Yahuarcocha,',
        ),
        'EC00169' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Otavalo,',
            'parroquia/sector'  => 'Araque,',
        ),
        'EC00170' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Otavalo,',
            'parroquia/sector'  => '',
        ),
        'EC00171' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Otavalo,',
            'parroquia/sector'  => 'Pinsaqui,',
        ),
        'EC00172' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Otavalo,',
            'parroquia/sector'  => 'Puerto Lago,',
        ),
        'EC00173' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Otavalo,',
            'parroquia/sector'  => 'San Pablo del Lago,',
        ),
        'EC00174' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' Pimampiro,',
            'parroquia/sector'  => '',
        ),
        'EC00175' => array(
            'provincia'  => ' Imbabura',
            'ciudad/canton'  => ' San Miguel de Ucurquí,',
            'parroquia/sector'  => '',
        ),

        // 12° Provincia: Loja

        'EC00176' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Calvas,',
            'parroquia/sector'  => 'Cariamanga,',
        ),
        'EC00177' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Calvas,',
            'parroquia/sector'  => '',
        ),
        'EC00178' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Catamayo,',
            'parroquia/sector'  => '',
        ),
        'EC00179' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Celica,',
            'parroquia/sector'  => '',
        ),
        'EC00180' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Celica,',
            'parroquia/sector'  => 'Sabanilla,',
        ),
        'EC00181' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Chaguarpamba,',
            'parroquia/sector'  => '',
        ),
        'EC00182' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Espíndola,',
            'parroquia/sector'  => 'Bellavista,',
        ),
        'EC00183' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Gonzanamá,',
            'parroquia/sector'  => '',
        ),
        'EC00184' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Loja,',
            'parroquia/sector'  => '',
        ),
        'EC00185' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Loja,',
            'parroquia/sector'  => 'Pueblo Nuevo,',
        ),
        'EC00186' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Loja,',
            'parroquia/sector'  => 'Vilcabamba,',
        ),
        'EC00187' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Macará,',
            'parroquia/sector'  => '',
        ),
        'EC00188' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Olmedo,',
            'parroquia/sector'  => '',
        ),
        'EC00189' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Paltas,',
            'parroquia/sector'  => 'Catacocha,',
        ),
        'EC00190' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Paltas,',
            'parroquia/sector'  => '',
        ),
        'EC00191' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Pindal,',
            'parroquia/sector'  => '',
        ),
        'EC00192' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Puyango,',
            'parroquia/sector'  => 'Alamor,',
        ),
        'EC00193' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Puyango,',
            'parroquia/sector'  => '',
        ),
        'EC00194' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Quilanga,',
            'parroquia/sector'  => '',
        ),
        'EC00195' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Saraguro,',
            'parroquia/sector'  => '',
        ),
        'EC00196' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Sozoranga,',
            'parroquia/sector'  => '',
        ),
        'EC00197' => array(
            'provincia'  => ' Loja',
            'ciudad/canton'  => ' Zapotillo,',
            'parroquia/sector'  => '',
        ),

        // 13° Provincia: Los Ríos

        'EC00198' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Baba,',
            'parroquia/sector'  => '',
        ),
        'EC00199' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Baba,',
            'parroquia/sector'  => 'Isla de Bejucal,',
        ),
        'EC00200' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Babahoyo,',
            'parroquia/sector'  => '',
        ),
        'EC00201' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Babahoyo,',
            'parroquia/sector'  => 'La Unión,',
        ),
        'EC00202' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Babahoyo,',
            'parroquia/sector'  => 'Mata de Cacao,',
        ),
        'EC00203' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Buena Fe,',
            'parroquia/sector'  => 'Fumisa,',
        ),
        'EC00204' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Buena Fe,',
            'parroquia/sector'  => 'Patricia Pilar,',
        ),
        'EC00205' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Mocache,',
            'parroquia/sector'  => '',
        ),
        'EC00206' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Montalvo,',
            'parroquia/sector'  => '',
        ),
        'EC00207' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Montalvo,',
            'parroquia/sector'  => 'Pisagua Alto,',
        ),
        'EC00208' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Montalvo,',
            'parroquia/sector'  => 'Pisagua Bajo,',
        ),
        'EC00209' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Palenque,',
            'parroquia/sector'  => '',
        ),
        'EC00210' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Puebloviejo,',
            'parroquia/sector'  => 'San Juan,',
        ),
        'EC00211' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Quevedo,',
            'parroquia/sector'  => 'San Camilo,',
        ),
        'EC00212' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Quevedo,',
            'parroquia/sector'  => 'San Carlos,',
        ),
        'EC00213' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Quevedo,',
            'parroquia/sector'  => '',
        ),
        'EC00214' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Quinsaloma,',
            'parroquia/sector'  => '',
        ),
        'EC00215' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' San Jacinto Buena Fe,',
            'parroquia/sector'  => 'Buena Fe,',
        ),
        'EC00216' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Urdaneta,',
            'parroquia/sector'  => 'Catarama,',
        ),
        'EC00217' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Urdaneta,',
            'parroquia/sector'  => 'Ricaurte,',
        ),
        'EC00218' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Valencia,',
            'parroquia/sector'  => 'Nueva Unión,',
        ),
        'EC00219' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Valencia,',
            'parroquia/sector'  => '',
        ),
        'EC00220' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Ventanas,',
            'parroquia/sector'  => '',
        ),
        'EC00221' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Ventanas,',
            'parroquia/sector'  => 'Zapotal,',
        ),
        'EC00222' => array(
            'provincia'  => ' Los Ríos',
            'ciudad/canton'  => ' Vinces,',
            'parroquia/sector'  => '',
        ),

        // 14° Provincia: Manabí

        'EC00223' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' 24 de Mayo,',
            'parroquia/sector'  => '',
        ),
        'EC00224' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Bolívar,',
            'parroquia/sector'  => '',
        ),
        'EC00225' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Bolívar,',
            'parroquia/sector'  => 'Quiroga,',
        ),
        'EC00226' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Calceta,',
            'parroquia/sector'  => '',
        ),
        'EC00227' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Chone,',
            'parroquia/sector'  => 'Canuto,',
        ),
        'EC00228' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Chone,',
            'parroquia/sector'  => '',
        ),
        'EC00229' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Chone,',
            'parroquia/sector'  => 'Ricaurte,',
        ),
        'EC00230' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Chone,',
            'parroquia/sector'  => 'San Antonio,',
        ),
        'EC00231' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' El Carmen,',
            'parroquia/sector'  => '',
        ),
        'EC00232' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Flavio Alfaro,',
            'parroquia/sector'  => '',
        ),
        'EC00233' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Jama,',
            'parroquia/sector'  => '',
        ),
        'EC00234' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Jaramijó,',
            'parroquia/sector'  => '',
        ),
        'EC00235' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Jipijapa,',
            'parroquia/sector'  => 'Sancán,',
        ),
        'EC00236' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Jipijapa,',
            'parroquia/sector'  => '',
        ),
        'EC00237' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Junín,',
            'parroquia/sector'  => '',
        ),
        'EC00238' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Manta,',
            'parroquia/sector'  => 'Barbasquillo,',
        ),
        'EC00239' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Manta,',
            'parroquia/sector'  => '',
        ),
        'EC00240' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Montecristi,',
            'parroquia/sector'  => '',
        ),
        'EC00241' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Olmedo,',
            'parroquia/sector'  => '',
        ),
        'EC00242' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Paján,',
            'parroquia/sector'  => 'Cascol,',
        ),
        'EC00243' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Paján,',
            'parroquia/sector'  => '',
        ),
        'EC00244' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Pedernales,',
            'parroquia/sector'  => '',
        ),
        'EC00245' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Pichincha,',
            'parroquia/sector'  => '',
        ),
        'EC00246' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Portoviejo,',
            'parroquia/sector'  => 'Alhajuela,',
        ),
        'EC00247' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Portoviejo,',
            'parroquia/sector'  => 'Arenales,',
        ),
        'EC00248' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Portoviejo,',
            'parroquia/sector'  => 'Calderon,',
        ),
        'EC00249' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Portoviejo,',
            'parroquia/sector'  => 'Crucita,',
        ),
        'EC00250' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Portoviejo,',
            'parroquia/sector'  => 'El Rodeo,',
        ),
        'EC00251' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Portoviejo,',
            'parroquia/sector'  => '',
        ),
        'EC00252' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Portoviejo,',
            'parroquia/sector'  => 'Riochico,',
        ),
        'EC00253' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Puerto López,',
            'parroquia/sector'  => 'Playa Prieta,',
        ),
        'EC00254' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Puerto López,',
            'parroquia/sector'  => '',
        ),
        'EC00255' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Rocafuerte,',
            'parroquia/sector'  => '',
        ),
        'EC00256' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Rocafuerte,',
            'parroquia/sector'  => 'Sosote,',
        ),
        'EC00257' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' San Vicente,',
            'parroquia/sector'  => 'Canoa,',
        ),
        'EC00258' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' San Vicente,',
            'parroquia/sector'  => '',
        ),
        'EC00259' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Santa Ana,',
            'parroquia/sector'  => '',
        ),
        'EC00260' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Sucre,',
            'parroquia/sector'  => 'Bahía de Caráquez,',
        ),
        'EC00261' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Sucre,',
            'parroquia/sector'  => 'Charapotó,',
        ),
        'EC00262' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Sucre,',
            'parroquia/sector'  => 'Leonidas Plaza,',
        ),
        'EC00263' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Sucre,',
            'parroquia/sector'  => 'San Isidro,',
        ),
        'EC00264' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Tosagua,',
            'parroquia/sector'  => 'Bachillero,',
        ),
        'EC00265' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Tosagua,',
            'parroquia/sector'  => 'La Estancilla,',
        ),
        'EC00266' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Tosagua,',
            'parroquia/sector'  => 'San Clemente,',
        ),
        'EC00267' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Tosagua,',
            'parroquia/sector'  => 'San Jacinto,',
        ),
        'EC00268' => array(
            'provincia'  => ' Manabí',
            'ciudad/canton'  => ' Tosagua,',
            'parroquia/sector'  => '',
        ),

        // 15° Provincia: Morona Santiago

        'EC00269' => array(
            'provincia'  => ' Morona Santiago',
            'ciudad/canton'  => ' Gualaquiza,',
            'parroquia/sector'  => '',
        ),
        'EC00270' => array(
            'provincia'  => ' Morona Santiago',
            'ciudad/canton'  => ' Morona,',
            'parroquia/sector'  => 'Macas,',
        ),
        'EC00271' => array(
            'provincia'  => ' Morona Santiago',
            'ciudad/canton'  => ' Sucúa,',
            'parroquia/sector'  => '',
        ),

        // 16° Provincia: Napo

        'EC00272' => array(
            'provincia'  => ' Napo',
            'ciudad/canton'  => ' Archidona,',
            'parroquia/sector'  => '',
        ),
        'EC00273' => array(
            'provincia'  => ' Napo',
            'ciudad/canton'  => ' Carlos Julio Arosemena Tola,',
            'parroquia/sector'  => 'Arosemena Tola,',
        ),
        'EC00274' => array(
            'provincia'  => ' Napo',
            'ciudad/canton'  => ' El Chaco,',
            'parroquia/sector'  => '',
        ),
        'EC00275' => array(
            'provincia'  => ' Napo',
            'ciudad/canton'  => ' Quijos,',
            'parroquia/sector'  => 'Baeza,',
        ),
        'EC00276' => array(
            'provincia'  => ' Napo',
            'ciudad/canton'  => ' Tena,',
            'parroquia/sector'  => 'Puerto Napo,',
        ),
        'EC00277' => array(
            'provincia'  => ' Napo',
            'ciudad/canton'  => ' Tena,',
            'parroquia/sector'  => 'Tazayacu (Muyuna),',
        ),
        'EC00278' => array(
            'provincia'  => ' Napo',
            'ciudad/canton'  => ' Tena,',
            'parroquia/sector'  => '',
        ),

        // 17° Provincia: Orellana

        'EC00279' => array(
            'provincia'  => ' Orellana',
            'ciudad/canton'  => ' Francisco de Orellana,',
            'parroquia/sector'  => 'El Coca,',
        ),
        'EC00280' => array(
            'provincia'  => ' Orellana',
            'ciudad/canton'  => ' Francisco de Orellana,',
            'parroquia/sector'  => 'Taracoa (Nueva Esperanza),',
        ),
        'EC00281' => array(
            'provincia'  => ' Orellana',
            'ciudad/canton'  => ' Joya de los Sachas,',
            'parroquia/sector'  => '',
        ),
        'EC00282' => array(
            'provincia'  => ' Orellana',
            'ciudad/canton'  => ' Loreto,',
            'parroquia/sector'  => '',
        ),

        // 18° Provincia: Pastaza

        'EC00283' => array(
            'provincia'  => ' Pastaza',
            'ciudad/canton'  => ' Mera,',
            'parroquia/sector'  => 'Madre Tierra,',
        ),
        'EC00284' => array(
            'provincia'  => ' Pastaza',
            'ciudad/canton'  => ' Mera,',
            'parroquia/sector'  => '',
        ),
        'EC00285' => array(
            'provincia'  => ' Pastaza',
            'ciudad/canton'  => ' Pastaza,',
            'parroquia/sector'  => 'Puyo,',
        ),
        'EC00286' => array(
            'provincia'  => ' Pastaza',
            'ciudad/canton'  => ' Pastaza,',
            'parroquia/sector'  => 'Shell (Puyo),',
        ),
        'EC00287' => array(
            'provincia'  => ' Pastaza',
            'ciudad/canton'  => ' Santa Clara,',
            'parroquia/sector'  => '',
        ),

        // 19° Provincia: Pichincha

        'EC00288' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Cayambe,',
            'parroquia/sector'  => '',
        ),
        'EC00289' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Mejía,',
            'parroquia/sector'  => 'Aloasí,',
        ),
        'EC00290' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Mejía,',
            'parroquia/sector'  => 'Aloag,',
        ),
        'EC00291' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Mejía,',
            'parroquia/sector'  => 'Machachi,',
        ),
        'EC00292' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Mejía,',
            'parroquia/sector'  => '',
        ),
        'EC00293' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Mejía,',
            'parroquia/sector'  => 'Tambillo,',
        ),
        'EC00294' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Mejía,',
            'parroquia/sector'  => 'Uyumbicho,',
        ),
        'EC00295' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Pedro Moncayo,',
            'parroquia/sector'  => '',
        ),
        'EC00296' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Pedro Moncayo,',
            'parroquia/sector'  => 'Tabacundo,',
        ),
        'EC00297' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Pedro Vicente Maldonado,',
            'parroquia/sector'  => '',
        ),
        'EC00298' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Puerto Quito,',
            'parroquia/sector'  => '',
        ),
        'EC00299' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Alangasí,',
        ),
        'EC00300' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Amaguaña,',
        ),
        'EC00301' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Atahualpa,',
        ),
        'EC00302' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Belisario Quevedo,',
        ),
        'EC00303' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Calacalí,',
        ),
        'EC00304' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Calderon,',
        ),
        'EC00305' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Carapungo,',
        ),
        'EC00306' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Carcelen,',
        ),
        'EC00307' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Centro Histórico,',
        ),
        'EC00308' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Chavezpamba,',
        ),
        'EC00309' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Checa,',
        ),
        'EC00310' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Chilibulo,',
        ),
        'EC00311' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Chillogallo,',
        ),
        'EC00312' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Chimbacalle,',
        ),
        'EC00313' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Cochapamba,',
        ),
        'EC00314' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Comité del Pueblo,',
        ),
        'EC00315' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Concepción,',
        ),
        'EC00316' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Conocoto,',
        ),
        'EC00317' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Cotocollao,',
        ),
        'EC00318' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Cumbaya,',
        ),
        'EC00319' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'El Condado,',
        ),
        'EC00320' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'El Inca,',
        ),
        'EC00321' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'El Quinche,',
        ),
        'EC00322' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Gualea,',
        ),
        'EC00323' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Guamaní,',
        ),
        'EC00324' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Guangopolo,',
        ),
        'EC00325' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Guayabamba,',
        ),
        'EC00326' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Iñaquito,',
        ),
        'EC00327' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Itchimbía,',
        ),
        'EC00328' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Jipijapa,',
        ),
        'EC00329' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Kennedy,',
        ),
        'EC00330' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'La Argelia,',
        ),
        'EC00331' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'La Ecuatoriana,',
        ),
        'EC00332' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'La Ferroviaria,',
        ),
        'EC00333' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'La Libertad,',
        ),
        'EC00334' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'La Mena,',
        ),
        'EC00335' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'La Merced,',
        ),
        'EC00336' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Llano Chico,',
        ),
        'EC00337' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Llano Grande,',
        ),
        'EC00338' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Lloa,',
        ),
        'EC00339' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Magdalena,',
        ),
        'EC00340' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Mariscal Sucre,',
        ),
        'EC00341' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Minas,',
        ),
        'EC00342' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Nanegal,',
        ),
        'EC00343' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Nanegalito,',
        ),
        'EC00344' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Nayon,',
        ),
        'EC00345' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Nono,',
        ),
        'EC00346' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Pacto,',
        ),
        'EC00347' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Perucho,',
        ),
        'EC00348' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Pifo,',
        ),
        'EC00349' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Pintag,',
        ),
        'EC00350' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Pomasqui,',
        ),
        'EC00351' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Ponceano,',
        ),
        'EC00352' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Puéllaro,',
        ),
        'EC00353' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Puembo,',
        ),
        'EC00354' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Puengasí,',
        ),
        'EC00355' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Pusuqui,',
        ),
        'EC00356' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Quitumbe,',
        ),
        'EC00357' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Rumipamba,',
        ),
        'EC00358' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'San Antonio,',
        ),
        'EC00359' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'San Antonio (Mitad del Mundo),',
        ),
        'EC00360' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'San Bartolo,',
        ),
        'EC00361' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'San José de Moran,',
        ),
        'EC00362' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'San Juan,',
        ),
        'EC00363' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Solanda,',
        ),
        'EC00364' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Tababela,',
        ),
        'EC00365' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Tumbaco,',
        ),
        'EC00366' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Turubamba,',
        ),
        'EC00367' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Yaruqui,',
        ),
        'EC00368' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito,',
            'parroquia/sector'  => 'Zámbiza,',
        ),
        'EC00369' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito/Rumiñahui,',
            'parroquia/sector'  => 'Cotogchoa,',
        ),
        'EC00370' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito/Rumiñahui,',
            'parroquia/sector'  => 'Fajardo,',
        ),
        'EC00371' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito/Rumiñahui,',
            'parroquia/sector'  => 'La Armenia,',
        ),
        'EC00372' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito/Rumiñahui,',
            'parroquia/sector'  => 'San Pedro de Taboada,',
        ),
        'EC00373' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito/Rumiñahui,',
            'parroquia/sector'  => 'San Rafael,',
        ),
        'EC00374' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito/Rumiñahui,',
            'parroquia/sector'  => 'Sangolqui,',
        ),
        'EC00375' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' Quito/Rumiñahui,',
            'parroquia/sector'  => 'Valle de los Chillos,',
        ),
        'EC00376' => array(
            'provincia'  => ' Pichincha',
            'ciudad/canton'  => ' San Miguel de los Bancos,',
            'parroquia/sector'  => 'Los Bancos,',
        ),

        // 20° Provincia: Santa Elena

        'EC00377' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' La Libertad,',
            'parroquia/sector'  => '',
        ),
        'EC00378' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Salinas,',
            'parroquia/sector'  => 'Anconcito,',
        ),
        'EC00379' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Salinas,',
            'parroquia/sector'  => 'José Luis Tamayo (Muey),',
        ),
        'EC00380' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Salinas,',
            'parroquia/sector'  => '',
        ),
        'EC00381' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Salinas,',
            'parroquia/sector'  => 'Santa Rosa,',
        ),
        'EC00382' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Santa Elena,',
            'parroquia/sector'  => 'Ballenita,',
        ),
        'EC00383' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Santa Elena,',
            'parroquia/sector'  => 'Cadeate,',
        ),
        'EC00384' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Santa Elena,',
            'parroquia/sector'  => 'Capaes,',
        ),
        'EC00385' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Santa Elena,',
            'parroquia/sector'  => 'Manglaralto,',
        ),
        'EC00386' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Santa Elena,',
            'parroquia/sector'  => 'Manglaralto (Valdivia),',
        ),
        'EC00387' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Santa Elena,',
            'parroquia/sector'  => 'Manglaralto (Libertador Bolívar),',
        ),
        'EC00388' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Santa Elena,',
            'parroquia/sector'  => 'Montañita,',
        ),
        'EC00389' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Santa Elena,',
            'parroquia/sector'  => 'Monteverde,',
        ),
        'EC00390' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Santa Elena,',
            'parroquia/sector'  => 'Olon,',
        ),
        'EC00391' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Santa Elena,',
            'parroquia/sector'  => 'Palmar,',
        ),
        'EC00392' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Santa Elena,',
            'parroquia/sector'  => 'Prosperidad,',
        ),
        'EC00393' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Santa Elena,',
            'parroquia/sector'  => 'Punta Blanca,',
        ),
        'EC00394' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Santa Elena,',
            'parroquia/sector'  => 'Punta Carnero,',
        ),
        'EC00395' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Santa Elena,',
            'parroquia/sector'  => 'San José de Ancon,',
        ),
        'EC00396' => array(
            'provincia'  => ' Santa Elena',
            'ciudad/canton'  => ' Santa Elena,',
            'parroquia/sector'  => 'San Pablo,',
        ),

        // 21° Provincia: Santo Domingo de los Tsáchilas

        'EC00397' => array(
            'provincia'  => ' Santo Domingo de los Tsáchilas',
            'ciudad/canton'  => ' La Concordia,',
            'parroquia/sector'  => '',
        ),
        'EC00398' => array(
            'provincia'  => ' Santo Domingo de los Tsáchilas',
            'ciudad/canton'  => ' Santo Domingo,',
            'parroquia/sector'  => 'Luz de América,',
        ),
        'EC00399' => array(
            'provincia'  => ' Santo Domingo de los Tsáchilas',
            'ciudad/canton'  => ' Santo Domingo,',
            'parroquia/sector'  => 'Nuevo Israel,',
        ),
        'EC00400' => array(
            'provincia'  => ' Santo Domingo de los Tsáchilas',
            'ciudad/canton'  => ' Santo Domingo,',
            'parroquia/sector'  => '',
        ),
        'EC00401' => array(
            'provincia'  => ' Santo Domingo de los Tsáchilas',
            'ciudad/canton'  => ' Santo Domingo,',
            'parroquia/sector'  => 'Valle Hermoso,',
        ),

        // 22° Provincia: Sucumbíos

        'EC00402' => array(
            'provincia'  => ' Sucumbíos',
            'ciudad/canton'  => ' Cascales,',
            'parroquia/sector'  => '',
        ),
        'EC00403' => array(
            'provincia'  => ' Sucumbíos',
            'ciudad/canton'  => ' Gonzalo Pizarro,',
            'parroquia/sector'  => '',
        ),
        'EC00404' => array(
            'provincia'  => ' Sucumbíos',
            'ciudad/canton'  => ' Cascales,',
            'parroquia/sector'  => 'Lumbaqui,',
        ),
        'EC00405' => array(
            'provincia'  => ' Sucumbíos',
            'ciudad/canton'  => ' Lago Agrio,',
            'parroquia/sector'  => '',
        ),
        'EC00406' => array(
            'provincia'  => ' Sucumbíos',
            'ciudad/canton'  => ' Lago Agrio,',
            'parroquia/sector'  => 'Simón Bolívar,',
        ),
        'EC00407' => array(
            'provincia'  => ' Sucumbíos',
            'ciudad/canton'  => ' Shushufindi,',
            'parroquia/sector'  => '',
        ),

        // 23° Provincia: Tungurahua

        'EC00408' => array(
            'provincia'  => ' Tungurahua',
            'ciudad/canton'  => ' Ambato,',
            'parroquia/sector'  => '',
        ),
        'EC00409' => array(
            'provincia'  => ' Tungurahua',
            'ciudad/canton'  => ' Baños,',
            'parroquia/sector'  => '',
        ),
        'EC00410' => array(
            'provincia'  => ' Tungurahua',
            'ciudad/canton'  => ' Cevallos,',
            'parroquia/sector'  => '',
        ),
        'EC00411' => array(
            'provincia'  => ' Tungurahua',
            'ciudad/canton'  => ' Mocha,',
            'parroquia/sector'  => '',
        ),
        'EC00412' => array(
            'provincia'  => ' Tungurahua',
            'ciudad/canton'  => ' Patate,',
            'parroquia/sector'  => '',
        ),
        'EC00413' => array(
            'provincia'  => ' Tungurahua',
            'ciudad/canton'  => ' Pelileo,',
            'parroquia/sector'  => '',
        ),
        'EC00414' => array(
            'provincia'  => ' Tungurahua',
            'ciudad/canton'  => ' Quero,',
            'parroquia/sector'  => '',
        ),
        'EC00415' => array(
            'provincia'  => ' Tungurahua',
            'ciudad/canton'  => ' Santiago de Píllaro,',
            'parroquia/sector'  => '',
        ),
        'EC00416' => array(
            'provincia'  => ' Tungurahua',
            'ciudad/canton'  => ' Tisaleo,',
            'parroquia/sector'  => '',
        ),

        // 24° Provincia: Zamora Chinchipe

        'EC00417' => array(
            'provincia'  => ' Zamora Chinchipe',
            'ciudad/canton'  => ' Yantzaza,',
            'parroquia/sector'  => '',
        ),
        'EC00418' => array(
            'provincia'  => ' Zamora Chinchipe',
            'ciudad/canton'  => ' Zamora,',
            'parroquia/sector'  => '',
        ),
    );

    foreach ( $cities as $city => $cityValue ) {
        $map[$city] = $cityValue['parroquia/sector'] . $cityValue['ciudad/canton'] . $cityValue['provincia'];
    }

    $states['EC'] = $map;
    return $states;

}