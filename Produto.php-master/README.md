# Classe
Toda vez que temos que fazer persistencia de dados (salvar um dado no banco), o metodo mais prático é criando uma classe.

Essa classe tem que acessar o banco de dados, entao o ideal é que criemos um metodo construtor que conecte com o banco de dados.
Para conectar com o banco, usamos a classe PDO

Essa classe precisa de tres parametros para conseguir conectar ao banco:

param1 = "mysql:dbname=usuario;host=localhost" — //tipo de banco de dados, nome e local onde esta armazenado o banco

param2 = "root" 1/ usuario

param3 = "" // senha

Quando instanciamos a classe PDO, normalmente usamos uma variavel chamada $pdo. Essa variavel vai ter todos os metodos necessarios
para manipular o banco de dados.

Para todos os metodos que usam parametros, usamos um apelido na query por seguranca, e ao usar esse parametro temos que acessar os
metodos param passando a query.

E tambem usar o bindValue, um para cada apelido usado.

Entao os passos sao esses:

1- Criar uma variavel com os dados da query usando apelido quando temos parametros

2 - Acessar o metodo param, passando essa query

3 - Acessar o metodo bindValue um para cada apelido

4 - Acessar o metodo execute() do pdo
