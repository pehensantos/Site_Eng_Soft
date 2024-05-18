<?php
class Sistema {
	private $usuarios = [];
	private $areas = [];
	private $idChamados = [];

	public function __construct() {
        // Construtor
    }

    public function adicionarUsuario($usuario) {
        $this->usuarios[] = $usuario;
    }

    public function adicionarArea($area) {
        $this->areas[] = $area;
    }

    public function adicionarChamado($chamado) {
        $this->idChamados[] = $chamado;
    }

    public function listaUsuarios() {
        return $this->usuarios;
    }

    public function listaAreas() {
        return $this->areas;
    }

    public function listaChamados() {
        return $this->idChamados;
    }
}
$Sistema = new Sistema();
$Sistema->adicionarUsuario(123);
$Sistema->adicionarUsuario(1234);
$Sistema->adicionarUsuario(12345);


class Area {
    private $idArea;
    private $nomeArea;
    private $responsavelArea;

    public function __construct($idArea, $nomeArea, $responsavelArea) {
        $this->idArea = $idArea;
        $this->nomeArea = $nomeArea;
        $this->responsavelArea = $responsavelArea;
    }

    public function criaArea($idArea, $nomeArea, $responsavelArea) {
        $this->idArea = $idArea;
        $this->nomeArea = $nomeArea;
        $this->responsavelArea = $responsavelArea;
        // Lógica para criar área...
        return true; // Ou false, dependendo da lógica implementada
    }

    // Função para editar uma área existente
    public function editaArea($nomeArea, $responsavelArea) {
        $this->nomeArea = $nomeArea;
        $this->responsavelArea = $responsavelArea;
        // Lógica para editar área...
        return true; // Ou false, dependendo da lógica implementada
    }
}

class Usuario {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $dataCadastro;

    public function __construct($id, $nome, $email, $senha, $dataCadastro) {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->dataCadastro = $dataCadastro;
    }

    // Função para salvar um novo usuário
    public function salvaUsuario($nome, $email, $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->dataCadastro = date("Y-m-d"); // Data atual
        // Lógica para salvar usuário...
        return true; // Ou false, dependendo da lógica implementada
    }

    // Função para atualizar informações de um usuário
    public function atualizaUsuario($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
        // Lógica para atualizar usuário...
        return true; // Ou false, dependendo da lógica implementada
    }

    // Função para atualizar a senha de um usuário
    public function atualizaSenha($senha) {
        $this->senha = $senha;
        // Lógica para atualizar senha...
        return true; // Ou false, dependendo da lógica implementada
    }

    // Função para excluir um usuário
    public function excluiUsuario() {
        // Lógica para excluir usuário...
        return true; // Ou false, dependendo da lógica implementada
    }
}

class Administrador extends Usuario {
    private $cargo;

    public function __construct($id, $nome, $email, $senha, $dataCadastro, $cargo) {
        parent::__construct($id, $nome, $email, $senha, $dataCadastro);
        $this->cargo = $cargo;
    }

    // Função para salvar um novo administrador
    public function salvaAdm($nome, $email, $senha, $cargo) {
        $this->salvaUsuario($nome, $email, $senha); // Chamando método da classe pai
        $this->cargo = $cargo;
        // Lógica para salvar administrador...
        return true; // Ou false, dependendo da lógica implementada
    }

    // Função para atualizar informações de um administrador
    public function atualizaAdm($nome, $email, $cargo) {
        $this->atualizaUsuario($nome, $email); // Chamando método da classe pai
        $this->cargo = $cargo;
        // Lógica para atualizar administrador...
        return true; // Ou false, dependendo da lógica implementada
    }

    // Função para excluir um administrador
    public function excluiAdm() {
        // Lógica para excluir administrador...
        return true; // Ou false, dependendo da lógica implementada
    }

    // Função para verificar o login de um administrador
    public function verifLogin($email, $senha) {
        // Lógica para verificar login...
        return true; // Ou false, dependendo da lógica implementada
    }

    // Função para modificar o status de um administrador
    public function modificaStatus() {
        // Lógica para modificar status...
        return true; // Ou false, dependendo da lógica implementada
    }
}

class Chamado {
    private $tema;
    private $assunto;
    private $data;
    private $area;
    private $status;

    public function __construct($tema, $assunto, $data, $area, $status) {
        $this->tema = $tema;
        $this->assunto = $assunto;
        $this->data = $data;
        $this->area = $area;
        $this->status = $status;
    }

    public function registraChamado() {
        // Implementa lógica para registrar chamado
        // Por exemplo:
        // $this->status = "Registrado";
        return true;
    }

    public function encaminhaChamado($novaArea) {
        // Implementa lógica para encaminhar chamado
        // Por exemplo:
        // $this->area = $novaArea;
        return true;
    }

    public function acompanhaChamado() {
        // Implementa lógica para acompanhar chamado
        // Por exemplo:
        // echo "Status do chamado: " . $this->status;
        return true;
    }

    public function arquivaChamado() {
        // Implementa lógica para arquivar chamado
        // Por exemplo:
        // $this->status = "Arquivado";
        return true;
    }

    public function geraRelatorio() {
        // Implementa lógica para gerar relatório
        // Por exemplo:
        // return "Relatório do chamado";
        return true;
    }
}









?>