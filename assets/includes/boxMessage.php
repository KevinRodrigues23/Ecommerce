<?php 

class boxMessage    // class produto
{

    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function adicionarboxMessage(string $nome_boxMessage,string $email_boxMessage, string $objetivo_boxMessage,string $message_boxMessage): void
    {
        $insereboxMessage = $this->mysql->prepare('INSERT INTO boxmessages (nome_boxMessage, email_boxMessage, objetivo_boxMessage,message_boxMessage) VALUES (?,?,?,?);');
        $insereboxMessage->bind_param('ssss', $nome_boxMessage,$email_boxMessage,$objetivo_boxMessage,$message_boxMessage);
        $insereboxMessage->execute();
    }



    public function exibirTodos(): array 
    {

        $resultado = $this->mysql->query("SELECT id_boxMessage ,nome_boxMessage, email_boxMessage, objetivo_boxMessage ,message_boxMessage FROM boxmessages");
        $boxMessages = $resultado->fetch_all(MYSQLI_ASSOC);
        
        return $boxMessages;
    }


    public function encontrarPorId($id_boxMessage): array
    {
        $selecionarboxMessage = $this->mysql->prepare("SELECT id_boxMessage ,nome_boxMessage ,email_boxMessage, objetivo_boxMessage,message_boxMessage
        FROM boxmessages WHERE id_boxMessage = ?");
        $selecionarboxMessage->bind_param('s', $id_boxMessage);  
        $selecionarboxMessage->execute();
        $boxMessage = $selecionarboxMessage->get_result()->fetch_assoc();
        return $boxMessage;
    }

}
?>
