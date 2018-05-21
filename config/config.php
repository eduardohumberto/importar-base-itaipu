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
        'type' => 'fixed',
        'table' => 'post',
        'attr' => 'post_title',
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
        'type' => 'fixed',
        'table' => 'post',
        'attr' => 'post_content',
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
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Largura (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Espessura (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Comprimento (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Largura – Zona proximal (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Largura – Zona mesial (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Largura – Zona distal (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Espessura (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Comprimento (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Comprimento – Feição (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Largura – Feição (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Profundidade – Feição (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Inclinação – Feição (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Largura – Bloco (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Espessura – Bloco (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Comprimento - Bloco (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Diâmetro (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Diâmetro/comprimento da boca (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Diâmetro/medida do ombro (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Altura (cm)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Peso (g)',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Matéria prima',
        'type' => 'category'
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
        'type' => 'text',
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
    ),
    array(
        'name' => 'Inventário',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Classe Thesauros',
        'type' => 'text',
        'cardinality' => '1'
    ),
    array(
        'name' => 'Situação',
        'type' => 'category'
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
