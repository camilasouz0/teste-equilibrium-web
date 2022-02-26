
# Equilibrium Web Teste para desenvolvedor PHP

#### Instalação

- PHP ^7.4
- Composer ^2.0
- NPM (latest)

#### Rode os seguintes comandos em seu terminal para instalar todas as depedências necessárias:
```http
  composer install
```
```http
  npm install
```

#### Configurações do .env

```http
  copy /y .env.example .env
```

``` http
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nomedobanco
DB_USERNAME=senha
DB_PASSWORD=
```
```http
php artisan key:generate
```

### Rodando o projeto
```http
  php artisan serve
```
```http
  npm run watch
```

### Este projeto trabalha com componentes
```http
    @component('components.projeto.index', [
    'image' => '/caminho-imagem/imagem.png',
    ])
```
```http
    @foreach (range(1, 2) as $i)
        {{-- Componente repetido 2 vezes --}}
        @component('components.projeto.index')
        @endcomponent  
    @endforeach
```
```http
    @for ($i = 0; $i < 2; $i++)    
        <div>
            Div repetida
        </div>
    @endfor
```
### Enviando parametros:
```http
    {{-- header-title.blade.php (componente) --}}
    <h1>{{ $title }}</h1>


    {{-- contact-page.blade.php --}}
    @component('components.projeto.header-title', ['title' => 'titulo'])
    @endcomponent
```