<?php

define('CATEGORY_ROOT_ID',112);
define('COLLECTION_ID',33);
define('AUTHOR',1);

define( 'WP_USE_THEMES', false);

//SE FOR MULTISITE ESTES PARAMETROS DEVEM SER ALTERADOS
// $_SERVER['HTTP_HOST'] = 'mhn.medialab.ufg.br';
// $_SERVER['REQUEST_URI'] = '/';
$_SERVER['HTTP_HOST'] = 'localhost';
$_SERVER['REQUEST_URI'] = '/wordpress_tainacan';

define('DIR_TAINACAN','/home/eduardo/Projetos/wordpress_tainacan/wordpress_tainacan');
// include('/home/l3p/apache_sites/mhn.medialab.ufg.br/web/wp-config.php');

/** DO NOT GO FURTHER THIS LINE **/
define( 'IDENTIFIER_IMPORT', 'tainacan_itaipu_import');

include( DIR_TAINACAN.'/wp-config.php');
include( DIR_TAINACAN.'/wp-content/themes/tainacan/models/object/object_save_values.php');

global $Metadata;

$Metadata = [
    array(
        'name' => 'Nº de registro',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Nº de registro (anterior)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Data da entrada no Acervo',
        'type' => 'date',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Procedência',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Modo de aquisição',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Modo de aquisição',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Doador',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Material',
        'type' => 'category'
    ),
    array(
        'name' => 'Objeto/Denominação',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Descrição',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Nº de partes',
        'type' => 'numeric',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Estado de conservação',
        'type' => 'category'
    ),
    array(
        'name' => 'Datação',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Localização Atual',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Data da compilação da ficha',
        'type' => 'date',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Largura',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Espessura',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Comprimento',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Largura – Zona proximal',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Largura – Zona mesial',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Largura – Zona distal',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Espessura',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Comprimento',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Comprimento – Feição',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Largura – Feição',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Profundidade – Feição',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Inclinação – Feição',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Largura – Bloco',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Espessura – Bloco',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Comprimento - Bloco',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Diâmetro',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Peso',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Matéria prima',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Processos Curatoriais',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Observações',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Equipe',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Data',
        'type' => 'date',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Localização',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Projeto',
        'type' => 'text',
        'cardinality' => '1'
    )
];

global $Tainacan_ItemMetadata_Model;

$Tainacan_ItemMetadata_Model = new ObjectSaveValuesModel;

include_once 'includes.php';

global $MainClass;
$MainClass = new Main();

global $MetadataClass;
$MetadataClass = new Metadata();

global $ItemClass;
$ItemClass = new Item();

global $ItemMetadata;
$ItemMetadata = new ItemMetadata();

global $ItemFilesClass;
$ItemFilesClass = new ItemFiles();

global $TagClass;
$TagClass = new Tag();

global $LogClass;
$LogClass = new LogTainacan();
