## Instalação
Clone este repositório ou faça o download do arquivo .zip.

Após a descompactação, execute o **Composer** para instalar as dependências e gerar o autoload.

Navegue até a pasta do projeto no *prompt/terminal* e execute o seguinte comando:

> composer install

Aguarde o processo de instalação.

## Configuração
Todos os arquivos de configuração e aplicação estão localizados na pasta *src*.

As configurações de Banco de Dados e URL podem ser ajustadas no arquivo 
*src/Config.php*.

É crucial configurar corretamente a constante *BASE_DIR*:

> const BASE_DIR = '/**PastaDoProjeto**/public';

## Uso
Você deve acessar a pasta *public* do projeto.

É recomendável criar um ***alias*** específico no servidor que direcione diretamente para a pasta *public*.

## Modelo do Controller
```php
<?php
namespace src\controllers;
use \core\Controller;

class HomeController extends Controller {
    public function index() {
        $this->render('home', ['nome' => "Hello, world"]);
    }  
}
```

## Modelo de MODEL
```php
<?php
namespace src\models;
use \core\Model;

class Usuario extends Model {

}
```
