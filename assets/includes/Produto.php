<?php 

/* refatorando o código */


class produto    // class produto
{

    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function adicionar(string $titulo_produto ,string $preco_produto, string $tamanho_produto,string $marcar_produto,string $cor_produto,string $quantidade_produto,string $descricao_produto,string $especificacao_produto, string $imagem_produto): void
    {
        $insereProduto = $this->mysql->prepare('INSERT INTO produtos (titulo_produto, preco_produto , tamanho_produto, marcar_produto, cor_produto, quantidade_produto, descricao_produto, especificacao_produto, imagem_produto) VALUES (?,?,?,?,?,?,?,?,?);');
        $insereProduto->bind_param('sssssssss' , $titulo_produto ,$preco_produto, $tamanho_produto, $marcar_produto, $cor_produto, $quantidade_produto, $descricao_produto, $especificacao_produto, $imagem_produto);
        $insereProduto->execute();


    }

   
    public function exibirTodos(): array 
    {

        $resultado = $this->mysql->query("SELECT id_produto , titulo_produto, tamanho_produto ,preco_produto ,quantidade_produto, imagem_produto FROM produtos");
        $produtos = $resultado->fetch_all(MYSQLI_ASSOC);
        
        return $produtos;
    }

    public function deletar($id_produto): void
    
    {
        $deletarProduto = $this->mysql->prepare('DELETE FROM produtos WHERE id_produto = ?');
        $deletarProduto->bind_param('s', $id_produto);
        $deletarProduto->execute();
    }


    public function encontrarPorId(string $id_produto): array
    {
        $selecionarProduto = $this->mysql->prepare("SELECT id_produto,titulo_produto,preco_produto,tamanho_produto,marcar_produto,descricao_produto,
        cor_produto,quantidade_produto,especificacao_produto, imagem_produto FROM produtos WHERE id_produto = ?");
        $selecionarProduto->bind_param('s', $id_produto);  
        $selecionarProduto->execute();
        $produto = $selecionarProduto->get_result()->fetch_assoc();
        return $produto;
    }

    public function editar($id_produto ,$titulo_produto, $preco_produto, $tamanho_produto,$marcar_produto,$descricao_produto,
    $cor_produto, $quantidade_produto, $especificacao_produto): void
    {
        $editaProduto = $this->mysql->prepare('UPDATE produtos SET titulo_produto = ?,preco_produto = ?,tamanho_produto = ?,marcar_produto = ?,descricao_produto = ?,
        cor_produto = ?,quantidade_produto = ?, especificacao_produto = ? WHERE id = ?');
        $editaProduto->bind_param('ssssssss',$titulo_produto, $preco_produto, $tamanho_produto,$marcar_produto,$descricao_produto,
        $cor_produto, $quantidade_produto, $especificacao_produto);
        $editaProduto->execute();
    }

    





}


?>