<?php

class Main{

    public $dir_files;
    public $csv_file;
    public $contents;

    /**
     * Main constructor.
     *
     * set paths to use in main script
     */
    public function __construct(){
        $this->dir_files = dirname( __FILE__ ). '/../data/';
        $this->csv_file = $this->dir_files.'Lote_1_itaipu_v12.csv';
        $this->contents = $this->dir_files.'arquivos/Fotos_lote_1';
    }

    /**
     * method responsible for init the whole process
     */
    public function init(){
        global $Metadata, $LogClass, $ItemClass;
        $fields = $Metadata;
        $columns = $this->insertMetadata( $fields );
        $is_header = true;
        $LogClass->set_total_items( 852 ); // the csv qtd

        $resource = fopen( $this->csv_file, "r" );
        while (  ( $line = fgetcsv( $resource, 0, ";") ) !== FALSE ) {
            if( $is_header ){
                $is_header = false;
                continue;
            }
            $item_id = $ItemClass->create_empty_item();
            foreach ($line as $index => $metadata) {
                $this->processItem( $item_id, $metadata, $columns[$index] );
            }
            $LogClass->total_items_inserted();
        }
    }

    /**
     *  read the csv file
     * @return array csv lines
     */
    public function readFile(){
        $csvFile = file( $this->csv_file );
        return ( $csvFile && is_array( $csvFile ) ) ? $csvFile : [];
    }

    /**
     * @param array $metadata
     *
     * @return array with metadata id if is necessary
     */
    public function insertMetadata( Array $metadata ){
        global $MetadataClass;
        $result = [];

        foreach( $metadata as $meta ){
            if( !in_array( $meta['type'], [ 'fixed', 'attachment']  ) ){

                if( $meta['type'] === 'category'){
                    $meta['id'] = $MetadataClass->create_metadata_category( $meta );
                } else {
                    $meta['id'] = $MetadataClass->create_metadata_text( $meta );
                }
            }
            $result[] = $meta;
        }

        return $result;
    }

    /**
     * @param $item_id the id do item
     * @param $rawValue the value from csv
     * @param $columnData the data about the metadata
     *
     * @return int
     */
    public function processItem( $item_id, $rawValue, $columnData ){
        global $ItemMetadata, $ItemClass, $ItemFilesClass, $TagClass, $LogClass;

        if( $columnData['type'] === 'category' ){

            $ItemMetadata->insert_category_metadata( $item_id, $columnData['id'], $rawValue);

        } else if( in_array( $columnData['type'], ['text', 'numeric', 'date', 'textarea'])){

            $values = explode(',', $rawValue );
            foreach ( $values as $index => $value ):
                $ItemMetadata->insert_text_metadata( $item_id, $columnData['id'], trim( $value ), $index);
            endforeach;

        } else if( $columnData['name'] === 'Nº de registro' ){
            $title = $rawValue;
            $ItemClass->update_item_title( $item_id, $title);
            $this->insertImages( $item_id, $this->contents . '/' . strtoupper($title) );
            $this->insertImages( $item_id, $this->contents . '/' . strtoupper($title) . '-DUPLICADO' );
        } else if( $columnData['name'] === 'Descrição' ){
            $ItemClass->update_item_description( $item_id, $rawValue );

        }
        return $item_id;
    }

    /**
    * insert content and attachments
    **/
    public function insertImages( $item_id, $path ){
      global $ItemMetadata, $ItemClass, $ItemFilesClass, $TagClass, $LogClass;
      $isFirst = true;

      if( !is_dir($path) ){
          return false;
      }

      $dir = new DirectoryIterator($path);
      foreach ($dir as $fileinfo) {
          if (!$fileinfo->isDot()) {
              $LogClass->printText( 'INSERINDO ARQUIVO: '. $fileinfo->getFilename() );
              $attachment_id = $ItemFilesClass->insert_attachment_by_path( $item_id, $fileinfo->getPathname() );

              if($isFirst){
                $ItemMetadata->insert_fixed_metadata( $item_id, 'socialdb_object_content', $attachment_id);
                $ItemMetadata->insert_fixed_metadata( $item_id, 'socialdb_object_from', 'internal' );
                $ItemMetadata->insert_fixed_metadata( $item_id, 'socialdb_object_dc_type', 'image');
                $isFirst = false;
              }
          }
      }
    }
}
