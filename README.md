# importar-base-itaipu

Etapas para migração

## 1º Clonar repositório

Clonar este repositório para dentro do servidor aonde será importado, não necessita estar dentro do apache, apenas no mesmo servidor e setar os caminhos corretamente ( passo 2 ).

## 2º Criar coleção no tainacan

Criar coleção vazia sem metadados ou items, com qualquer nome este poderá ser alterado posteriormente.

## 3º Abrir o console do browser na página criada da coleção

Executar comando no console: $('#collection_id').val()

esse será o valor que colocará no COLLECTION_ID no passo 4.

Executar este outro comando: $('#wp_query_args').val().split(":")[6].replace('";s','').replace('"', '' );

esse será o valor que colocará no CATEGORY_ROOT_ID no passo 4.

## 4º Alterar configuração

Dentro da pasta config alterar o arquivo config.php os seguintes parâmetros

// ( Obrigatório ) o id da categoria raiz da coleção

define('CATEGORY_ROOT_ID', 112);

// ( Obrigatório ) o id da coleção que será importado os dados

define('COLLECTION_ID',33);

// ( Não alterar ) o id do usuario que sera 'dono' das entidades criadas

define('AUTHOR', 1);

// ( Obrigatório ) A url do ambiente que será importado - Atenção essencial setar este parâmetro

$_SERVER['HTTP_HOST'] = 'dev.medialab.ufg.br';

// o diretorio do ambiente a ser importado - Atenção essencial setar este parâmetro

$_SERVER['REQUEST_URI'] = '/migracao';

// caminho fisico da instalacao do wordpress que será importado NO SERVIDOR

define('DIR_TAINACAN','/home/eduardo/Projetos/wordpress_tainacan/wordpress_tainacan');

## 5º Baixar arquivos que serão importados

- criar pasta data na raiz

- entrar neste link https://docs.google.com/document/d/1XIzImDuS_HvLqMUnlpMDkLiQAUOrSf1a6_WI2dUsUs4/edit

- fazer o download do csv "Base de dados lote 1:", o nome do arquivo devera ficar como Lote_1_itaipu_v12.csv

- fazer download das imagens "Acervos de fotos do lote 1", baixar zip, criar pasta arquivos dentro da pasta data e extrair o zip

- colocar csv na pasta Data

- no fim a pasta data deverá ficar desta forma


- Data  

  -- arquivos

    --- Fotos_lote_1

        ---- Dir com img de um item...

  -- Lote_1_itaipu_v12.csv


## 6º execução

executar o arquivo main.php e aguardar seu encerramento ( leverá algumas horas )

$ php main.php
