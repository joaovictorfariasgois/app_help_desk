# App_help_desk
  Aplicação criado para fins didáticos feito a partir da linguagem de programação PHP afim de praticar o sistema de Back-end de uma aplicação.

# Aplicativo de suporte técnico - LEIA-ME

Um aplicativo de Help Desk foi desenvolvido para fins educacionais usando PHP como linguagem de programação, Esta aplicação tem como objetivo simular um sistema básico de help desk, permitindo aos usuários criar e gerenciar tickets de suporte. O aplicativo apresenta funcionalidades de autenticação de usuário, envio de tickets e visualização de tickets.

## Autenticação de usuário:

A aplicação suporta dois tipos de usuários: administradores (ADM) e usuários regulares (USER).
Os usuários são obrigados a fazer login com seus respectivos endereços de e-mail e senhas.
Envio de ingressos:

Usuários logados (ADM e USER) podem enviar novos tickets de suporte.
Ao enviar um ticket, os usuários podem fornecer detalhes sobre o problema que estão enfrentando.
Visualização de ingressos:

Após fazer login, tanto ADM quanto USER podem visualizar a lista de tickets de suporte.
ADM pode ver todos os tickets enviados por todos os usuários.
O USUÁRIO pode ver seus próprios tickets enviados.

# Instalação

Para configurar o aplicativo Help Desk, siga estas etapas:

### Clone o repositório

Coloque o diretório clonado dentro do diretório raiz do seu servidor web (por exemplo, htdocs para XAMPP).
e também mova a pasta <b>scripts</b> para fora da pasta htdocs.

### Acesse o Aplicativo:

Abra um navegador da web e navegue até http://localhost/app_help_desk.

<b>Conecte-se:</b>

Use o e-mail e a senha fornecidos para fazer login.

## Login ADM: 
E-mail: adm@teste.com.br / Senha: 123456
## Login de USUÁRIO: 
E-mail: user@teste.com.br / Senha: abcd


# Painel:

Após o login bem-sucedido, você será direcionado para o painel.
ADM pode visualizar todos os tickets enviados.
O USUÁRIO pode visualizar seus próprios tickets enviados.
Envie um tíquete:

Clique no botão "Abrir chamado" para criar um novo ticket de suporte.
Forneça detalhes sobre o problema e envie o ticket.
Ver detalhes do ingresso:

Clique em um ticket para ver seus detalhes.
Os detalhes do ticket incluem a descrição do problema e os status. 

<b>Nota:</b> Este aplicativo foi criado para fins educacionais e não se destina ao uso em produção. É uma representação básica de um sistema de help desk para demonstrar conceitos de programação PHP e autenticação básica de usuário.
