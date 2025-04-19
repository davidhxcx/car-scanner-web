# Car Scanner Importador (PHP)

Este projeto é uma aplicação web simples em **PHP** com **SQLite**, que permite importar arquivos CSV exportados do aplicativo **Car Scanner** (Android) e visualizar os dados em uma tabela.

## Funcionalidades

- Upload de arquivo `.csv` com dados do Car Scanner
- Armazenamento dos dados em banco SQLite
- Visualização dos registros recentes em uma interface simples

## Requisitos

- Servidor com PHP 7.4+ (Apache/Nginx)
- Extensão PDO para SQLite

## Como usar

1. Coloque os arquivos em um servidor com suporte a PHP.
2. Acesse `index.php` pelo navegador.
3. Faça upload de um arquivo `.csv` gerado pelo Car Scanner.

## Estrutura esperada do CSV

```
timestamp,rpm,speed,coolant_temp
2024-04-19 14:20:00,1500,45,85
```

## Licença

MIT
