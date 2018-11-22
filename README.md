# Gerenciador Financeiro
Sistema para gerenciamento financeira e acompanhamento dos ganhos e despesas do mês.

# Requisitos para execução
- PHP 7.2
- MySQL 5.7
- Configurar arquivo "config.app.php" alterando para "config.php".
- Dentro do arquivo "config.app" não se esquecer de adicionar a URL do projeto.
- Dentro do arquivo "config.php" colocar informações de conexão ao banco de dados (Usuário, Senha, Tabela, etc).

# Colocando em PRD (Produção)
- Alterar arquivo "config.php" no campo versão, passando a ser de "dsv" para "prd" (Desenvolvimento para Produção).
- No arquivo ".htaccess" descomentar as linhas 5 e 6 e comentar linhas 8 e 9. 

# Versão do Projeto
- V.1.0.0

# Observações
- Projeto todo feito em MVC (Model, View e Controller).
