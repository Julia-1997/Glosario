<!-- Introducción -->
<h1 align="center">  :blue_book: Glosario</h1>


<p align="center"> Proyecto personal en el que se presenta un glosario de términos relacionados con el grado superior de desarrollo web.</p>


<!-- índice del README -->
<details>
  <summary>Tabla de contenidos</summary>
  <ol>
    <li>
      <a href="##objetivo">Objetivo del proyecto</a>
    </li>
    <li>
      <a href="##tecnologías-empleadas">Tecnologías empleadas</a>
    </li>
    <li><a href="##estructura">Estructura del proyecto</a></li>
    <li><a href="##funcionalidades">Funcionalidades del proyecto</a></li>
    <li><a href="##requisitos-previos">Pre-requisitos</a></li>
    <li><a href="##despliegue">Despliegue</a></li>
  </ol>
</details>




<!-- Objetivo-->
## Objetivo 
Plasmar todos los conocimientos adquiridos durante el curso de Desarrollo de Aplicaciones Web (DAW), creando un glosario interativo y dinámico empleando el framework Laravel aprendido en la asignatura Desarrollo de aplicaciones web en entorno servidor.


<!-- Tecnologías-->
## Tecnologías empleadas
- **Backend:** Laravel 10
- **Frontend:** Blade y Bootstrap 5
- **Base de Datos:** MySQL 


<!-- Estructura del proyecto-->
## Estructura 


```
glosario
├─ .editorconfig
├─ .gitattributes
├─ .gitignore
├─ app
│  ├─ Console
│  │  └─ Kernel.php
│  ├─ Exceptions
│  │  └─ Handler.php
│  ├─ Http
│  │  ├─ Controllers
│  │  │  ├─ ArticleController.php
│  │  │  ├─ CategoryController.php
│  │  │  └─ Controller.php
│  │  ├─ Kernel.php
│  │  └─ Middleware
│  │     ├─ Authenticate.php
│  │     ├─ EncryptCookies.php
│  │     ├─ PreventRequestsDuringMaintenance.php
│  │     ├─ RedirectIfAuthenticated.php
│  │     ├─ TrimStrings.php
│  │     ├─ TrustHosts.php
│  │     ├─ TrustProxies.php
│  │     ├─ ValidateSignature.php
│  │     └─ VerifyCsrfToken.php
│  ├─ Models
│  │  ├─ Article.php
│  │  ├─ Category.php
│  │  ├─ Image.php
│  │  ├─ Reference.php
│  │  └─ User.php
│  └─ Providers
│     ├─ AppServiceProvider.php
│     ├─ AuthServiceProvider.php
│     ├─ BroadcastServiceProvider.php
│     ├─ EventServiceProvider.php
│     └─ RouteServiceProvider.php
├─ artisan
├─ bootstrap
│  ├─ app.php
│  └─ cache
│     ├─ .gitignore
│     ├─ packages.php
│     └─ services.php
├─ composer.json
├─ composer.lock
├─ config
│  ├─ app.php
│  ├─ auth.php
│  ├─ broadcasting.php
│  ├─ cache.php
│  ├─ cors.php
│  ├─ database.php
│  ├─ filesystems.php
│  ├─ hashing.php
│  ├─ logging.php
│  ├─ mail.php
│  ├─ queue.php
│  ├─ sanctum.php
│  ├─ services.php
│  ├─ session.php
│  └─ view.php
├─ database
│  ├─ .gitignore
│  ├─ factories
│  │  └─ UserFactory.php
│  ├─ migrations
│  │  ├─ 2014_10_12_000000_create_users_table.php
│  │  ├─ 2014_10_12_100000_create_password_reset_tokens_table.php
│  │  ├─ 2019_08_19_000000_create_failed_jobs_table.php
│  │  ├─ 2019_12_14_000001_create_personal_access_tokens_table.php
│  │  ├─ 2024_05_24_154717_create_references_table.php
│  │  ├─ 2024_05_24_154733_create_images_table.php
│  │  ├─ 2024_05_24_162100_create_categories_table.php
│  │  ├─ 2024_05_24_162614_create_articles_table.php
│  │  └─ 2024_05_24_162825_create_article_category_table.php
│  └─ seeders
│     ├─ ArticleCategorySeeder.php
│     ├─ ArticlesSeeder.php
│     ├─ CategoriesSeeder.php
│     ├─ DatabaseSeeder.php
│     ├─ ImagesSeeder.php
│     └─ ReferencesSeeder.php
├─ package-lock.json
├─ package.json
├─ phpunit.xml
├─ public
│  ├─ .htaccess
│  ├─ css
│  │  └─ app.css
│  ├─ favicon.ico
│  ├─ images
│  │  ├─ defecto.jpg
│  │  └─ perfil.jpg
│  ├─ index.php
│  └─ robots.txt
├─ README.md
├─ resources
│  ├─ js
│  │  ├─ app.js
│  │  └─ bootstrap.js
│  ├─ sass
│  │  ├─ app.scss
│  │  └─ _variables.scss
│  └─ views
│     ├─ articles
│     │  ├─ create.blade.php
│     │  ├─ edit.blade.php
│     │  ├─ index.blade.php
│     │  └─ show.blade.php
│     ├─ categories
│     │  └─ index.blade.php
│     ├─ components
│     │  └─ layouts
│     │     ├─ app.blade.php
│     │     ├─ footer.blade.php
│     │     └─ navigation.blade.php
│     └─ home.blade.php
├─ routes
│  ├─ api.php
│  ├─ channels.php
│  ├─ console.php
│  └─ web.php
├─ storage
│  ├─ app
│  │  ├─ .gitignore
│  │  └─ public
│  │     └─ .gitignore
│  ├─ framework
│  │  ├─ .gitignore
│  │  ├─ cache
│  │  │  ├─ .gitignore
│  │  │  └─ data
│  │  │     └─ .gitignore
│  │  ├─ sessions
│  │  │  ├─ .gitignore
│  │  │  └─ bLWt0dB3elHcIGmh4lBfaCJEEGglIUTOf3up7VFb
│  │  ├─ testing
│  │  │  └─ .gitignore
│  │  └─ views
│  │     ├─ .gitignore
│  │     ├─ 13d7fceb8769821972f0690d9c43f503.php
│  │     ├─ 1e80872a7f7007d300e12a3aeb19b518.php
│  │     ├─ 248baa0981f8fc788d56fbc5becab36a.php
│  │     ├─ 3629a7b8169b39384404361252862022.php
│  │     ├─ 47d48a1305e3265548cd94c997018f9c.php
│  │     ├─ 55f7da9dc5a1f53fe5b1a52fb4bf3fd7.php
│  │     ├─ 727800552d5d573b45109cdf2e17355f.php
│  │     ├─ 9589605a3794941be0a6eb2ca80c8659.php
│  │     ├─ 9b719da863c40d8f9395cf0caa1b3110.php
│  │     ├─ b81a10a3472a2e680a10dc2ebf93f7e1.php
│  │     ├─ bd32ed5f23fa584213d4afaa2e6ed6e2.php
│  │     ├─ bd71c08d04ff051ca04a729551c0b9d9.php
│  │     ├─ dd5d5d279d884e9279eed75c02be11ac.php
│  │     └─ f1e3ef4ef37f794809546e6ed89e624c.php
│  └─ logs
│     ├─ .gitignore
│     └─ laravel.log
├─ tests
│  ├─ CreatesApplication.php
│  ├─ Feature
│  │  └─ ExampleTest.php
│  ├─ TestCase.php
│  └─ Unit
│     └─ ExampleTest.php
└─ vite.config.js


```


<!-- Funcionalidades del proyecto-->
## Funcionalidades 


- `Términos` : Vista que muestra todos los términos y definiciones almacenados en la base de datos. Los usuarios pueden filtrar los resultados por letra del abecedario y acceder a los detalles completos de cada término
- `Ver detalles` : Esta vista ofrece información detallada sobre un término específico. Incluye opciones para editar el término existente o eliminarlo completamente de la base de datos.
- `Modificar un término` : Vista que proporciona un formulario con los datos de un término y su referencia para poder modificar un artículo.
- `Eliminar un término` : Permite borrar un término de la base de datos.
- `Añadir un término` : Proporciona un formulario fácil de usar para agregar nuevos términos a la base de datos.
- `Categorías` : Vista que muestra todos las categorías almacenadas en la base de datos. Los usuarios pueden añadir y eliminar categorías
- `Añadir una categoría` : Permite borrar una categoría de la base de datos.
- `Añadir un término` : Permite añadir una categoría de la base de datos.


<!-- Pre-requisitos-->
## Requisitos previos
Antes de desplegar el proyecto en tu máquina local:
1. Instalar XAMMP
2. Instalar composer


<!-- Despliegue-->
## Despliegue
Para desplegar el proyecto en local:
1. Clonar el repositorio de GitHub en tu máquina local
2. Configurar el archivo .env e indicar los datos de la BD
3. Ejecutar el siguiente comando para instalar las dependencias del proyecto:
  ```sh
 composer install
  ```
4. Crear la base de datos en MySQL.
5. Ejecutar las migraciones para crear las tablas en la base de datos:
  ```sh
 php artisan migrate
  ```
6. Ejecutar los seeders para generar los datos:
  ```sh
 php artisan db:seed
  ```
7. Iniciar el servidor de desarrollo:
  ```sh
 php artisan serve
  ```
---
:large_orange_diamond: Autora: [Julia-1997](https://github.com/Julia-1997)
