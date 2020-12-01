<h1>Gerador de Certificados em PHP</h1>


### Tópicos 

:small_blue_diamond: [Descrição do projeto](#descrição-do-projeto)

:small_blue_diamond: [O que foi usado](#o-que-foi-usado)

:small_blue_diamond: [Pré-requisitos](#pré-requisitos)

:small_blue_diamond: [Como rodar a aplicação](#como-rodar-a-aplicação-arrow_forward)

## Descrição do Projeto

Este repositório contem um exemplo simples de como gerar certificados, usando como linguagem principal o PHP.
O contexto solucionado aqui, consiste em termos um banco de dados com informações das pessoas que poderão gerar seus certificados (caso no seu contexto tenha alguma coluna da tabela do banco de dados, que informa quem pode ou não receber esse certificado, deve-se adicionar esta validação no arquivo 'gerar-certificado.php').


## O que foi usado 
No exemplo foi usado duas bibliotecas, uma para gerar PDF's muito conhecida no mundo do PHP, que é o **mPDF**, e outra para fazer a máscara do CPF, para que o mesmo fique mais legível ao usuário. 

:pushpin: Repositório mPDF :bookmark_tabs: : [mPDF](https://github.com/mpdf/mpdf)

:pushpin: Repositório jQuery Mask Plugin: [Mask Plugin](https://github.com/igorescobar/jQuery-Mask-Plugin)

## Pré-requisitos

  :warning: NodeJs ([Manual de instalação do NodeJs](https://nodejs.org/en/))
  
  :warning: Composer ([Manual de instalação do Composer](https://getcomposer.org/))
  
  ...

  Obs.: Sugiro que instale as versões **LTS**, para que não haja inconsistências inesperadas.

## Como rodar a aplicação :arrow_forward:

No terminal, clone o projeto: 

```
$ git clone https://github.com/casettamariana/Gerador-de-Certificados-em-PHP.git
```

Abra um terminal na pasta onde clonou o repositório e execute os comandos

```
$ npm install
```

```
$ composer install
```

Após executar estes comandos, você estará instalando as dependências necessárias para as bibliotecas executarem.

Para que a biblioteca **MASK** funcione, você deverá ir até a pasta **node_modules** e descompactar o arquivo **jQuery-Mask-Plugin-master.zip**

Após tudo instalado com sucesso, você irá até o arquivo **gerar-certificado.php** e colocará nas variáveis indicadas no arquivo as informações do banco de dados que irá o usar, como também o nome da tabela do banco no qual irá retirar informações, e o caminho do template do seu certificado, e então execute o arquivo **index.php** em seu servidor PHP e **voilà**.


