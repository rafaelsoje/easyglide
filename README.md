## Descrição

Este mini framework foi desenvolvido com o propósito de fornecer uma estrutura leve e flexível para pequenos e médios projetos em PHP. Projetado com simplicidade e modularidade em mente, é uma base sólida para o desenvolvimento rápido e eficiente de aplicações web.
É uma ferramenta valiosa para desenvolvedores que buscam uma base eficiente e rápida para iniciar seus projetos em PHP.


## Características Principais

-   **Leve e Eficiente:** O foco principal é manter uma estrutura leve, garantindo desempenho otimizado para projetos de menor escala.
    
-   **Flexibilidade Modular:** Com uma arquitetura modular, é fácil adicionar, remover ou estender funcionalidades de acordo com as necessidades específicas do projeto.
    
-   **Rotas Simples:** Um sistema de roteamento simples permite a fácil definição de rotas para controladores e ações, facilitando a navegação pela aplicação.
    
-   **Configuração Amigável:** As configurações do aplicativo são organizadas de maneira clara, permitindo uma fácil personalização, incluindo opções para banco de dados, URL base e outras configurações cruciais.

## Instalação

Para começar a trabalhar com este projeto, clone este repositório para o seu ambiente local usando o seguinte comando Git:
```sh
git clone https://github.com/rafaelsoje/easyglide.git
```
Navegue até o diretório do projeto recém-clonado:
```sh
cd seu-projeto
```

Execute o Composer para instalar as dependências do projeto:
```sh
 composer install
```

## Configuração

As configurações fundamentais, incluindo aquelas relacionadas ao Banco de Dados e URL, estão disponíveis para ajuste no arquivo _src/Config.php_ e no arquivo _.env_.

```php
const BASE_DIR = '/PastaDoProjeto';
```
É imperativo configurar corretamente a constante _BASE_DIR_. Ela define o diretório base da aplicação, sendo crucial para a correta resolução de URLs e caminhos. Certifique-se de ajustá-la conforme a estrutura específica do seu projeto.

## .env

 O arquivo .env está diretamente ligado à segurança e à flexibilidade na configuração do ambiente da aplicação. Você pode separar informações sensíveis do código-fonte, como credenciais de banco de dados, chaves de API e qualquer outro dado sigiloso.
 
```shell
DB_DRIVER=mysql
DB_HOST=localhost
DB_DATABASE=database
DB_USER=root
DB_PASSWORD=password
```

Para obter as variáveis de ambiente definidas no arquivo .env você pode fazer uso das funções  e superglobais.

```php 
getenv(), $_ENV ou $_SERVER.
```

## Uso

Para interagir com a aplicação, é necessário acessar a pasta **public** do projeto. Essa pasta contém o ponto de entrada da aplicação e é essencial para garantir o correto funcionamento.

Recomendamos criar um **alias** específico no servidor que direcione diretamente para a pasta _public_. Isso simplificará o acesso à aplicação e garantirá que o ponto de entrada seja devidamente reconhecido.

```sh
<VirtualHost *:80>
    ServerName seu-domino.com
    DocumentRoot /Caminho/Para/Seu/Projeto

    <Directory /Caminho/Para/Seu/Projeto>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

```


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

## View 

view/page é onde está a representação visual de uma página em seu projeto.
view/partials são componentes reutilizáveis que podem ser incluídos em várias páginas ou múltiplas vezes em uma única página. Eles ajudam a evitar duplicação de código e facilitam a manutenção.

```php
<!-- Renderiza a view header em /view/partials -->
<?php $render('header'); ?>

<!-- conteudo da página em view/pages -->
<h1>Hello, world!</h1>

<!-- Renderiza a view footer em /view/partials -->
<?php $render('footer'); ?>
```
Você deve salvar um componente partial em /src/view/partials.

## Suporte

Se você descobrir algum problema relacionado à segurança, envie um e-mail para rafaelsoje@gmail.com em vez de usar o rastreador de problemas.

## Créditos 

- [Rafael Soje](https://github.com/rafaelsoje)

## Licença

Este repositório está licenciado sob a licença [MIT](https://github.com/rafaelsoje/easyglide/blob/master/LICENSE) . Sinta-se à vontade para usar o código aqui para seu próprio aprendizado e projetos. A atribuição é apreciada.
