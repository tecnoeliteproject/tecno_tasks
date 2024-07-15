### LEIA-ME

---

# Plataforma de Gerenciamento de Tarefas Diárias

## Descrição

Este projeto consiste em uma plataforma web para o gerenciamento de tarefas diárias, desenvolvida utilizando Laravel e FilamentPHP. A aplicação permite que os usuários cadastrem, editem, visualizem e excluam tarefas, além de gerenciar o status das mesmas (pendente, em progresso, concluída).

## Requisitos Funcionais

1. **Cadastro e Autenticação de Usuários:**
    - Registro de novos usuários.
    - Login de usuários registrados.
    - Validação e segurança dos dados de autenticação.

2. **Gerenciamento de Tarefas:**
    - Criação de novas tarefas.
    - Edição de tarefas existentes.
    - Visualização de tarefas.
    - Exclusão de tarefas.
    - Atualização do status das tarefas (pendente, em progresso, concluída).

3. **Interface do Usuário:**
    - Interface intuitiva e responsiva utilizando FilamentPHP.

4. **Testes Automatizados:**
    - Testes automatizados para as principais funcionalidades do sistema.

## Requisitos de Sistema

- PHP >= 8.0
- Composer
- MySQL
- Node.js
- NPM
- Laravel >= 8.0
- FilamentPHP

## Como Colaborar

1. **Faça um Fork do Projeto:**
   - Clique no botão "Fork" no canto superior direito da página do repositório no GitHub.

2. **Clone o Repositório Forkado:**

   ```bash
   git clone https://github.com/seu-usuario/tecno_tasks.git
   cd tecno_tasks
   ```

3. **Crie uma Branch para sua Feature:**

   ```bash
   git checkout -b nome-da-sua-feature
   ```

4. **Faça Commits com Mensagens Claras e Descritivas:**

   ```bash
   git add .
   git commit -m "Descrição clara e descritiva da feature"
   ```

5. **Envie suas Alterações para o seu Repositório Forkado:**

   ```bash
   git push origin nome-da-sua-feature
   ```

6. **Abra um Pull Request:**
   - Acesse o repositório original no GitHub e clique no botão "New Pull Request".
   - Selecione a branch que você criou com suas alterações e submeta o Pull Request para revisão.


## Instalação

Siga os passos abaixo para configurar o ambiente de desenvolvimento local:

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/seu-usuario/tecno_tasks.git
   cd tecno_tasks
   ```

2. **Instale as dependências do PHP:**

   ```bash
   composer install
   ```

3. **Instale as dependências do Node.js:**

   ```bash
   npm install
   ```

4. **Copie o arquivo de exemplo `.env` e configure suas variáveis de ambiente:**

   ```bash
   cp .env.example .env
   ```

   Edite o arquivo `.env` e configure suas variáveis de ambiente, como conexão com banco de dados e outras configurações necessárias.

5. **Gere a chave da aplicação:**

   ```bash
   php artisan key:generate
   ```

6. **Execute as migrações e seeders para configurar o banco de dados:**

   ```bash
   php artisan migrate --seed
   ```

7. **Em um terminal separado, compile os assets do front-end:**

   ```bash
   npm run dev
   ```

8. **Inicie o servidor de desenvolvimento:**

   ```bash
   php artisan serve
   ```

Acesse a aplicação em `http://localhost:8000`.

---

**Nota:** Este README pode ser ajustado conforme necessário.
