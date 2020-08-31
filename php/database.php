<?php

class Database
{
    private $db;
    const DB_NAME = 'fetchJson';
    const DB_HOST = '127.0.0.1';
    const DB_USER = 'root';
    const DB_PASSWORD = '';
    const DB_TABLE = 'player';

    public function __construct()
    {
        $this->connectbdd(); // store the connexion in $db
    }

    // private => can be called only here from THIS script !!
    private function connectbdd()
    {
        try {
            $this->db = new PDO('mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME . ';charset=utf8', self::DB_USER, self::DB_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            echo '<div class="alert alert-danger" role="alert">
                    ' . $e->getMessage() . '
                </div>';
            //die('Erreur : ' . $e->getMessage());
        }
    }
    // public $db's getter
    public function getDB()
    {
        return $this->db;
    }

   public function insertPlayer()
    {
        $sql = 'INSERT INTO ' . self::DB_TABLE . ' (nom, pseudo, xp, img) VALUES (:nom, :pseudo, :xp, :img)';
        $req = $this->db->prepare($sql);
        try {
            $result = $req->execute([
                'nom' => $nom,
                'pseudo' => $pseudo,
                'xp' => $xp,
                'img'=> $img
            ]);
            return $result;
        } catch (PDOException $e) {
            return 'error: ' . $e->getMessage();
        }
    }
}
