<?php
/*
    Criação da classe Usuario com o CRUD
*/
class UsuarioDAO{
    
    public function create(Usuario $usuario) {
        try {
            $sql = "INSERT INTO a_usuario (
            email,senha,nome,sobrenome,sexo,data_nascimento,identidade,tipoidentidade,cpf
        ) VALUES (
        :email,:senha,:nome,:sobrenome,:sexo,:data_nascimento,:identidade,:tipoidentidade,:cpf
        )";

            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":email", $usuario->getEmail());
            $p_sql->bindValue(":senha", $usuario->getSenha());
            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":sobrenome", $usuario->getSobrenome());
            $p_sql->bindValue(":sexo", $usuario->getSexo());
            $p_sql->bindValue(":data_nascimento", $usuario->getData_nascimento());
            $p_sql->bindValue(":identidade", $usuario->getIdentidade());
            $p_sql->bindValue(":tipoidentidade", $usuario->getTipoidentidade());
            $p_sql->bindValue(":cpf", $usuario->getCpf());
            
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao Inserir usuario <br>" . $e . '<br>';
        }
    }

    public function read() {
        try {
            $sql = "SELECT * FROM a_usuario order by nome asc";
            $result = Conexao::getConexao()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $l) {
                $f_lista[] = $this->listaUsuarios($l);
            }
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }
     
    public function update(Usuario $usuario) {
        try {
            $sql = "UPDATE a_usuario set
                
                  email=:email,
                  senha=:senha,
                  nome=:nome,
                  sobrenome=:sobrenome,
                  sexo=:sexo,
                  data_nascimento=:data_nascimento,
                  identidade=:identidade,
                  cpf=:cpf                  
                                                                       
                  WHERE id_usuario = :id";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(':email', $usuario->getEmail());
            $p_sql->bindValue(':senha', $usuario->getSenha());
            $p_sql->bindValue(':nome', $usuario->getNome());
            $p_sql->bindValue(':sobrenome', $usuario->getSobrenome());
            $p_sql->bindValue(':sexo', $usuario->getSexo());
            $p_sql->bindValue(':data_nascimento', $usuario->getData_nascimento());
            $p_sql->bindValue(':identidade', $usuario->getIdentidade());
            $p_sql->bindValue(':tipoidentidade', $usuario->getTipoidentidade());
            $p_sql->bindValue(':cpf', $usuario->getCpf());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
        }
    }

    public function delete(Usuario $usuario) {
        try {
            $sql = "DELETE FROM a_usuario WHERE id_usuario = :id";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":id", $usuario->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Excluir usuario<br> $e <br>";
        }
    }
    

    private function listaUsuarios($row) {
        $usuario = new Usuario();
        $usuario->setId($row['id_usuario']);
        $usuario->setEmail($row['email']);
        $usuario->setSenha($row['senha']);
        $usuario->setNome($row['nome']);
        $usuario->setSobrenome($row['sobrenome']);
        $usuario->setSexo($row['sexo']);
        $usuario->setData_nascimento($row['data_nascimento']);
        $usuario->setIdentidade($row['identidade']);
        $usuario->setTipoidentidade($row['tipoidentidade']);
        $usuario->setCpf($row['cpf']);

        return $usuario;
    }
 }

