<?php
/*
    Criação da classe Usuario com o CRUD
*/
    /**
     * id_telefone  fixo    celular id_usuario
     */
    class TelefoneDAO
    {        
    
    public function create(Telefone $telefone) {
        try {
            $sql = "INSERT INTO a_telefone (
            fixo,celular,id_usuario
        ) VALUES (
        :fixo,:celular,LAST_INSERT_ID()
        )";

            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":fixo", $telefone->getFixo());
            $p_sql->bindValue(":celular", $telefone->getCelular());
                        
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao Inserir Telefone <br>" . $e . '<br>';
        }
    }

    public function read() {
        try {
            $sql = "SELECT * FROM a_telefone order by id_usuario asc";
            $result = Conexao::getConexao()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $l) {
                $f_lista[] = $this->listaTelefone($l);
            }
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }
     
    public function update(Telefone $telefone) {
        try {
            $sql = "UPDATE a_telefone set
                
                  fixo=:fixo,
                  celular=:celular          
                                                                       
                  WHERE id_usuario = :id";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(':fixo', $telefone->getFixo());
            $p_sql->bindValue(':celular', $telefone->getCelular());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
        }
    }

    public function delete(Telefone $telefone) {
        try {
            $sql = "DELETE FROM a_telefone WHERE id_usuario = :id";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":id", $telefone->getId_usuario());
            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Excluir telefone<br> $e <br>";
        }
    }
    

    private function listaTelefones($row) {
        $usuario = new Telefone();
        $usuario->setId_usuario($row['id_usuario']);
        $usuario->setFixo($row['fixo']);
        $usuario->setCelular($row['celular']);
        $usuario->setId_telefone($row['id_telefone']);

        return $telefone;
    }
 }

 ?>
