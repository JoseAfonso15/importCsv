
#### Sobre

Esta aplicação foi criada para que permita subir um CSV com a respectiva tabela de frete de cada um dos Clientes (1 ou +) 
de maneira eficiente e que suporte uma grande quantidade de registros (Essas tabelas podem chegar a ter 300mil linhas).
Esta aplicação foi criada com o framework Laravel,php 7.3 e mysql 5.8.
 
####Como podemos resolver esse problema? De que maneira conseguimos fazer o upload de 1 ou + CSV's sem que o HTTP dê timeout?
O processo de upload foi armazenado em Job e são processadas pelo sistema de Queues do Laravel, assim o processo roda no background da aplicação.

###### Requisitos

    * PHP> = 7.1.3
    * Laravel >=5.8
    * php.ini com post_max_size=1024M
    * php.ini com max_input_vars = 10000

###### Instalação

* git clone 
* Valide se as permissões das pastas dentro de *storage/** possuem a permissão 775
* Rode o composer install
* Renomear o *.env.example* para *.env* 
* crie o banco de dados e configure o arquivo *.env* na raiz do projeto com todas as informações necessárias
* 

###### Pós Instalação e configuração
    No ambiente local, o banco de dados e o arquivo .env dessa clínica não serão criados.

    * php artisan migrate - Cria as tabelas do banco de dados.
    * php artisan queue:work --timeout=6000 - Executa a fila no Laravel.
    * A aplicação está pronta para fazer a importação do csv.
    
    
    