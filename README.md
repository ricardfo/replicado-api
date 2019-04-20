# replicado api

API que expõe dados do replicado a partir de requisições http.

Download e instalação:

    git clone git@github.com:uspdev/replicado-api.git
    cd replicado-api
    composer install

Copiar env de exemplo e editar colocando informações sobre replicado:

    cp .env.example .env

Subir um server local:

    php -S 127.0.0.1:8000 -t public


Exemplo de requisição:

    curl -X GET http://127.0.0.1:8000/pessoa/docentes/total/ativos 

Endpoins disponíveis até o momento:

 - /pessoa/vinculo/total/ativos/{tipvinext}: retorna total de vínculos ativos na unidade
 - /pessoa/pos/total/ativos/{nivpgm}: retorna total de alunos matrículados no programa de pós da unidade de acordo com nível do programa.

