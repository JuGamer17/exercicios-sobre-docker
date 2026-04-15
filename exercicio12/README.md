1- Objetivo do ambiente. 
    Um site simples para mostrar um texto
    e imagem.
2- Tecnologias usadas. 
    Foi utilizado uma imagem do nginx 
    instalado no alpine, html, css para
    o site.
    Para o php foi utilozado a imagem php:8.2-fpm-alpine
    para interpretar os aqrquivos em php com
    o docker-php-ext-install pdo pdo_mysql para
    o php se conectar ao banco de dados.
    E uma imagem do mysql:8.0 para o banco
    de dados

3- Instruções para executar.
    Apenas entre na pasta onde esta o 
    docker-compose pelo cmd e execute
    "docker compose up".

4- Instruções para parar.
    Para parar os container execute
    "docker-compose stop" e para apagalos junto
    execure "docker-compose down", você não ira
    perder os volumes.

5- Explicação do papel de cada serviço.
    O bd e onde fica o banco de dados com as senhas
    e usuaros, o php verifica se o usuario e a senha
    estão corretos, e o web com o nginx faz o proxy para 
    o php alem de hospedar o html de loguin que coleta o 
    input do usuario.

6- Explicação de onde foram usados ports, volumes e variáveis de ambiente.
    as portas usadas foram, externamente, apenas a 8080 para o ngimx,
    ja internamente a porta 9000 para o php. Os volumes do bd para iniciar
    um script sql com um usuario e um para manter os dados, no nginx para os
    arquivos html e php para redirecionar e um para o arquivo conf, e no php
    para os arquivos php. E variaveis de ambiente para o nome e senha do banco.

7- Pelo menos 3 aprendizados obtidos durante a atividade.
    eu aprendi a como configurar um banco de dados, a como
    linkar o php com ele, e como usar as linhas de comando
    do docker.

<!-- !ester egg!, isso me levou 2 hrs para fazer... mas cinceramente gostei -->