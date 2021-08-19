#VendasDayana

Sistema para Controle de vendas 

#########################################
CONTEXTO REAL
A Dayana Pega os produtos de um revendedor,
Confere os produtos.
Ao realizar uma venda ela anota o nome e telefone do cliente, dados do produto e dá um prazo final para pagamento.

#########################################
CONTEXTO PARA O SISTEMA

CLIENTE - PRODUTO - VENDA

CLIENTE
    - idCliente
    - nome
    - telefone

PRODUTO
    - refProduto
    - descriçao
    - quantidade
    - preço unitário
    - data de entrada
    - data de devoluçao

VENDA
    - idVenda
    - refProduto
    - idCliente
    - data
    - preço total
    - prazo final para pagamento
    - forma de pagamento 
    - Total Pago


+------------------------------------------------------------------------+
| BANCO de Dados

create database vendasdayana

CREATE TABLE cliente (
    idCliente int AUTO_INCREMENT PRIMARY KEY,
    nome varchar(100) not null,
    telefone varchar(20)
)
CREATE TABLE produto(
    idProduto int AUTO_INCREMENT PRIMARY KEY,
    refProduto int not null,
    descricao varchar(300) not null,
    quantidade int not null,
    precoUnitario float not null,
    dataEntrada date not null,
    dataSaida date not null
)

CREATE TABLE venda(
    idVenda int AUTO_INCREMENT PRIMARY KEY,
    idProduto int not null,
    idCliente int not null,
    dataVenda date not null,
    precoTotal float not null,
    prazoPagamento date not null,
    formaPagamento varchar(30) not null,
    totalPago float not null
)