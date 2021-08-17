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