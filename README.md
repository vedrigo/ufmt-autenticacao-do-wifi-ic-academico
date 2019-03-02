# IC ACADEMICO
Projeto de conclusão do curso de Ciência da Computação da Universidade Federal de Mato Grosso de Rodrigo Venâncio Veríssimo. Este projeto contém uma Web application para a página de autenticação do WIFI do Instituto de Computação. Melhorando a página que atualmente não é responsiva, adicionando as novidades de Notícias do IC e um Mural Público.
## Passos Iniciais
### Pré-requisitos
Servidor Web com Apache, PHP, e MySQL Instalado.

Para instalar no Ubuntu execute os comandos
```
sudo apt update
sudo apt install lamp-server^
```
### Instalação
Copie os arquivo do projeto para pasta do servidor
```
cd /var/www/html/
sudo git clone https://github.com/rodrigovenancioverissimo/IC_ACADEMICO.git
sudo mv IC_ACADEMICO/* .
sudo rm -R IC_ACADEMICO
```
Abra o MySQL
```
sudo mysql
```
Execute o comando no MySQL
```
source /var/www/html/ic_academico.sql
```
Isto criará o banco de dados com as tabelas e um usuario admin para o painel da aplicação.

Crie um usuario do banco de dados para aplicação
```
CREATE USER IF NOT EXISTS 'nomedousuario'@'localhost' IDENTIFIED BY 'senhadousuario';
GRANT ALL ON * TO 'nomedousuario'@'localhost' IDENTIFIED BY 'senhadousuario';
```
Abra o arquivo de conexão em class/conexão.php e altere as informações. Você pode usar o editor nano para isto. 
```
sudo nano /var/www/html/class/conexao.php
```

Crie a pasta uploads e mude o proprietário para o servidor web
```
sudo mkdir uploads
sudo chown www-data:www-data uploads
```
Feito isto o projeto já deve estar funcionando
## Usando
Para acessar o painel administrador o usuario e senha padrão é admin
## Mais Informações
Acesse o arquivo em [PDF](Relatório%20Final.pdf) disponivel neste repositório.
## Capturas de tela

<img src="prints/1.png"  width="300px"><img src="prints/2.png"  width="300px"><img src="prints/3.png" width="300px"><img src="prints/4.png" width="300px"><img src="prints/5.png" width="300px">
