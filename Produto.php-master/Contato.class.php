<?php 
class Usuario {	
	private $id; 
	private $nome;
	private $senha;
	private $email;
	private $pdo;

	

	function __construct(){

		$dns = "mysql:dbname=contato;host=localhost";
		$user = "root";
		$senha = "";

		try {
			$this->pdo = new PDO($dns, $user, $senha);
		} catch (Exception $e) {
			echo "Tente mais tarde!!";
			
		}
		
	}

	function addContact($nome, $senha, $email){
		$cmd = "INSERT INTO contatos SET nome = :n, senha = :s, email = :e";
		$cmd = $this->pdo->prepare($cmd);

		$cmd->bindValue(':n', $nome);
		$cmd->bindValue(':s', $senha);
		$cmd->bindValue(':e', $email);

		$flag = $cmd->execute();

		if ($flag) {
			echo "Registro incluido com sucesso!";
		} else {
			echo "Não consegui registrá-lo! Tente novamente mais tarde!";
		}
	}

	/**
	 * Get the value of id
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the value of nome
	 */
	public function getNome()
	{
		return $this->nome;
	}

	/**
	 * Set the value of nome
	 */
	public function setNome($nome): self
	{
		$this->nome = $nome;

		return $this;
	}

	/**
	 * Get the value of senha
	 */
	public function getSenha()
	{
		return $this->senha;
	}

	/**
	 * Set the value of senha
	 */
	public function setSenha($senha): self
	{
		$this->senha = $senha;

		return $this;
	}

	/**
	 * Get the value of email
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Set the value of email
	 */
	public function setEmail($email): self
	{
		$this->email = $email;

		return $this;
	}


}








