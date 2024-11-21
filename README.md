## Teste para Desenvolvedor PHP/Laravel

### Backend (API Laravel):

#### CRUD de Fornecedores:
- **Criar Fornecedor:**
  - Permita o cadastro de fornecedores usando CNPJ ou CPF, incluindo informações como nome/nome da empresa, contato, endereço, etc.
  - Valide a integridade e o formato dos dados, como o formato correto de CNPJ/CPF e a obrigatoriedade de campos.
  //////Aqui utilizei, além das validações habituais, um método desenvolvido para validações brasileiras.

- **Editar Fornecedor:**
  - Facilite a atualização das informações de fornecedores, mantendo a validação dos dados.

- **Excluir Fornecedor:**
  - Possibilite a remoção segura de fornecedores.

- **Listar Fornecedores:**
  - Apresente uma lista paginada de fornecedores, com filtragem e ordenação.

#### Migrations:
///////Nome do banco de dados: 'fornecedor'
Usuário:'root'
Senha: vazia

## Tecnologias utilizadas
- Framework Laravel (PHP) 9.x ou superior
- MySQL ou Postgres

## Rota principal

http://localhost/laravel/fornecedor/public/




