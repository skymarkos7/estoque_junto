# Leia-me #
Esse sistema vem com o objetivo de fornecer um meio ágil para vendas, vindo em paralelo um gerenciamento completo das saídas e entradas dos produtos.
* Foco extremo no cliente final, suprindo as necessidades especificas deste caso de uso.

## Mais sobre ###
Para acompanhar visualmente consulte o resultado hospedado a baixo:
* [Planilha que gerou a inspiração](https://docs.google.com/spreadsheets/d/1pJ--yzG6VrxPxR_o_40j-sA7D_EZL4uiNFwE5naOMi0/edit#gid=902601484)
* [Versão Web PHP atual](https://estoque-junto.lourencoautopecas.com.br)

## Como utilizar?
1. Baixe o repositório
2. Coloque em sua pasta servidor PHP
3. Inicie o servidor PHP
4. acesse seu servidor PHP
5. [acesse o localhost](https://localhost)
6. Credências:
    - Login: eu
    - Senha: eu

## Construido com a contribuição de: ###
* [Marcos Lourenço de Souza](https://www.linkedin.com/in/marcos-louren%C3%A7o-20a041141/)
* [Guilherme Lourenço de Souza](https://www.linkedin.com/in/guilherme-louren%C3%A7o-de-souza-32060a230//)
 

## VERSÃO
22.02.22

## AUTORAL
- Autor: marcos lourenço de souza
- Formação: Analise e desenvolvimento de sistemas (2015-2019)
- Retomada: 07/05/2021
- Início: 15/08/2020


===========================================================


# PROCEDIMENTO DE CONSTRUÇÃO
 
## PDV - ponto de venda
### OQUE CONTÉM:
 - Id da venda
 - Data/hora da venda
 - Cliente da venda
 - Quantidade de produtos
 - Descrição do produto
 - Foto do produto
 - Valor da unitário do produto
- Desconto
- Editar/excluir iténs da venda
- Forma de pagamento
- Total líquido
- Valor pago
    - Troco 
- Tabela com todos os iténs da venda, contendo:
    - Id do produto
    - Descrição
    - Quantidade
    - Preço unitário
    - Desconto
    - Total Bruto
- Finalizar a venda 
    - Apaga todos os iténs provisórios
    - Atualiza a página para Caixa livre
- Cancelar a venda  
- Imprimir cupom/nota

### OQUE FAZ:
- atribuir uma série de produtos a:
    - uma data    
    - um cliente
    - um código para a venda
    - Salvar no banco essa venda em uma tabela de vendas
        - todos os iténs da venda recebem o mesmo código daquela venda
        - Sendo identificável todos os iténs de uma venda pelo código dessa venda
    - Durante o processo da venda, permitir:
        - Editar/excluir iténs da venda
        - Aplicar desconto
        - Escolher forma de pagamento
        - Cancelar a compra

### POSSÍVEIS TABELAS DO BANCO:
- VENDAS
    - Constará todas as vendas com o maior número de informações possíveis
- CLIENTES
    - Tudo sobre o cliente
- VENDA EM ABERTO
    - Produtos provisórios em tempo de compra
    
