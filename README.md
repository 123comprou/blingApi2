PHP BLING API2 SDK 
===================

SDK em PHP para integração com a API 2 do Bling ERP


REQUERIMENTOS
=============
PHP 5.5.3 ou superior e Curl 7.32

INSTALAÇÃO
==========

- Baixe o repositório em seu projeto ```git clone git@github.com:davicrystal/blingApi2.git```
- Inclua/Importe o script BlingSD.php em sua classe PHP para utilização dos métodos

INSTALAÇÃO COMPOSER
===================

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/123comprou/blingApi2"
    }
],
"require": {
    "123comprou/blingsdk": "dev-master"
}
```



UTILIZAÇÃO
==========

```php

use Bling\BlingSDK;

//Instâncie a classe BlingSDK
$apiBling = new BlingSDK( " API KEY AQUI " );

```


MÉTODOS DISPONÍVEIS
===================

Todos os parâmetros a serem enviados para o bling para cadastro ou atualização de produtos, pedidos e notas fiscais devem ser definidos como arrays para que o método utilizado transforme essa array em XML antes de envio de dados à API 2 Bling.

Manual de integração API 2 Bling: https://www.bling.com.br/manuais-api

- postProduct($arrayPreData, $strProductCode): Método para inclusão ou atualização de produtos. 

	- $arrayPreData: parâmetros do produto a serem enviados ao Bling em forma de array obedecendo o layout do bling.

	- $strProductCode é o código do produto e deve ser informado apenas no caso de atualizações.

- postOrder($arrayPreData, $boolGerarNfe): Método para inclusão de Pedidos.

	- $arrayPreData: parâmetros do pedido a serem enviados ao Bling em forma de array obedecendo o layout do bling.

	- $boolGerarNfe: informe "true" (em formato de string) para que a nota fiscal seja gerada junto ao pedido.

- postNf($arrayPreData): Método para inclusão de Nota Fiscal.

	- $arrayPreData: parâmetros da nta fiscal a serem enviados ao Bling em forma de array obedecendo o layout do bling.

- getProduct($strProductCode, $responseFormat): Método para consulta de Produtos.

	- $strProductCode: código do produto a ser consultado.

	- $responseFormat: informe como deseja a resposta "xml" ou "json".

- getProducts($intPage, $strProductCode, $responseFormat): Método para consulta de Produtos.

    - $intPage: número da página a ser consultada

	- $strProductCode: código do produto a ser consultado.

	- $responseFormat: informe como deseja a resposta "xml" ou "json".

- getOrder($strOrderCode, $responseFormat): Método para consulta de Pedidos.

	- $strProductCode: código do pedido a ser consultado.

	- $responseFormat: informe como deseja a resposta "xml" ou "json".

- getNf($strNfNumber, $responseFormat): Método para consulta de Nota Fiscal.

	- $strProductCode: código da Nota Fiscal a ser consultada.

	- $responseFormat: informe como deseja a resposta "xml" ou "json".

- deleteProduct($strProductCode, $responseFormat): Método para exclusão de um produto.

	- $strProductCode: código do produto a ser excluído

	- $responseFormat: informe como deseja a resposta "xml" ou "json"


COLABORADORES
=============
Davi Crystal | Digital UP | davicrystal@gmail.com | http://twitter.com/davicrystal

Gerbes Matos | 123Comprou | gerbes.matos@gmail.com