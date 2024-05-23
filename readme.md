<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<!-- <a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a> -->
</p>

![Matheus Linard](https://github.com/AllysonGerald/hotsite_mlinard/blob/main/public/assets/img/logo.png)

Este é o repositório da landing page da campanha de Matheus Linard, candidato a deputado estadual em Fortaleza. O projeto foi desenvolvido utilizando o framework Laravel na versão 5.3.31.

## Requisitos do Sistema

- PHP >= 5.6.4
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Instalação

1. Clone o repositório:

   ```sh
   git clone https://github.com/AllysonGerald/hotsite_mlinard.git
   ```
2. Navegue até o diretório do projeto:
   ```sh
   cd nome-do-repositorio
   ```
3. Instale as dependências do Composer:
   ```sh
   composer install
   ```
4. Copie o arquivo `.env.example` para `.env`:
   ```sh
   cp .env.example .env
   ```
5. Configure o arquivo .env com as suas credenciais de banco de dados e outras configurações necessárias.
6. Gere a chave da aplicação:
   ```sh
   php artisan key:generate
   ```
7. Execute as migrações para criar as tabelas no banco de dados:
  ```sh
   php artisan migrate
   ```
8. Opcional: Popule o banco de dados com dados fictícios:
   ```sh
   php artisan db:seed
   ```

## Uso
Para iniciar o servidor de desenvolvimento, execute o comando:
```sh
   php artisan serve
```
E acesse a aplicação em [!http://localhost:8000](#).

## Estrutura do Projeto
- **App**: Contém os modelos, controladores e outras classes de lógica de negócios.
- **Config**: Contém os arquivos de configuração.
- **Database**: Contém as migrações, seeds e o factory do banco de dados.
- **Public**: Contém o ponto de entrada da aplicação (index.php) e ativos públicos (imagens, scripts, etc).
- **Resources**: Contém as views e recursos de linguagem.
- **Routes**: Contém as definições de rotas.
- **Storage**: Contém logs, cache e outros arquivos gerados pela aplicação.
- **Tests**: Contém os testes automatizados.

## Contribuição
Se você deseja contribuir com este projeto, siga as etapas abaixo:

1. Fork do repositório.
2. Crie uma nova branch para sua feature: `git checkout -b minha-feature`.
3. Commit suas mudanças: `git commit -m "Adiciona minha feature"`.
4. Push para a branch: `git push origin minha-feature`.
5. Abra um Pull Request.

## License
The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
