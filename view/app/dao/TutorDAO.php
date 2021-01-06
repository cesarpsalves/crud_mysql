<?php
/*
    Criação da classe Usuario com o CRUD
*/
    /**
     * id_telefone  fixo    celular id_usuario
     */
    class TutorDAO
    {        
    
    public function create(Tutor $tutor) {
        try {
            $sql = "INSERT INTO a_tutor (
            responsavel,id_usuario
        ) VALUES (
        :responsavel,LAST_INSERT_ID()
        )";

            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":responsavel", $responsavel->getResponsavel());
                        
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao Inserir um Responsavel <br>" . $e . '<br>';
        }
    }

    public function read() {
        try {
            $sql = "SELECT * FROM a_tutor order by id_usuario asc";
            $result = Conexao::getConexao()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $l) {
                $f_lista[] = $this->listaTutor($l);
            }
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }
     
    public function update(Tutor $tutor) {
        try {
            $sql = "UPDATE a_tutor set
                
                  responsavel=:responsavel  
                                                                       
                  WHERE id_usuario = :id";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(':responsavel', $telefone->getFixo());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
        }
    }

    public function delete(Tutor $tutor) {
        try {
            $sql = "DELETE FROM a_tutor WHERE id_usuario = :id";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":id", $tutor->getId_usuario());
            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Excluir telefone<br> $e <br>";
        }
    }
    

    private function listaTutores($row) {
        $usuario = new Tutor();
        $usuario->setId_usuario($row['id_usuario']);
        $usuario->setResponsavel($row['responsavel']);

        return $tutor;
    }
 }

 ?>
