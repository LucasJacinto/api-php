<?php
    namespace App\Models;

    class User
    {
        private static $table = 'user';
        
        public static function select(int $id) 
        {
            $sql = 'SELECT * FROM '.self::$table.' WHERE id = :id';
            $stmt = PDO->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(\PDO::FETCH_ASSOC);
            } else {
                throw new \Exception("Nenhum usuário encontrado!");
            }
        }

        public static function selectAll() 
        {
            $sql = 'SELECT * FROM '.self::$table;
            $stmt = PDO->prepare($sql);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);
            } else {
                throw new \Exception("Nenhum usuário encontrado!");
            }
        }

        public static function insert($data) 
        {
            $sql = 'INSERT INTO '.self::$table.'(email, password, name) VALUES (:em, :pa, :na)';
            $stmt = PDO->prepare($sql);
            $stmt->bindValue(':em', $data['email']);
            $stmt->bindValue(':pa', $data['password']);
            $stmt->bindValue(':na', $data['name']);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return 'Dados inseridos com sucesso!';
            } else {
                throw new \Exception("Falha ao inserir dados!");
            }
        }
    }