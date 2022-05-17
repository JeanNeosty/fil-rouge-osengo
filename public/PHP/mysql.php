<?php

class MySQL {
    private $pdo = null;

    /*
     * Connexion au serveur MySQL
     * Entrée :
     *   -
     * Sortie :
     *   true si connecté, false sinon
     */
    function connect() {
        $dsn = "mysql:host=localhost;dbname=endless;charset=UTF8";
        $this->pdo = new PDO($dsn, 'root', '');
        return (!is_null($this->pdo));
    }

    /*
     * Exécution d'un SELECT retournant 1 ligne
     * Entrée :
     *   $sql : requête paramétrée au format PDO
     *   $parametres : tableau associatif contenant les paramètres
     * Sortie :
     *   ligne trouvée, false sinon
     */
    function select1($sql, $parametres) {
        if (is_null($this->pdo)) {return false;}

        $req = $this->pdo->prepare($sql);
        $req->execute($parametres); 
        return $req->fetch();
    }

    /*
     * Exécution d'un SELECT retournant plusieurs lignes
     * Entrée :
     *   $sql : requête paramétrée au format PDO
     *   $parametres : tableau associatif contenant les paramètres
     * Sortie :
     *   tableau avec toutes les lignes trouvées, false sinon
     */    
    function selectN($sql, $parametres) {
        if (is_null($this->pdo)) {return false;}

        $req = $this->pdo->prepare($sql);
        $req->execute($parametres); 
        return $req->fetchAll();
    }

    /*
     * Exécution d'un INSERT
     * Entrée :
     *   $table : table devant recevoir la nouvelle ligne
     *   $parametres : tableau associatif contenant les paramètres de la ligne
     * Sortie :
     *   true si insertion OK, false sinon
     */    
    function insert($table, $parametres) {
        if (is_null($this->pdo)) {return false;}

        $sql = "INSERT INTO " . $table . "(";
        $sql .= implode(',', array_keys($parametres));
        $sql .= ") VALUES(";
        $listePrepare = array();
        foreach($parametres as $key => $parametre) {
            $listePrepare[] = ":" . $key;
        }
        $sql .= implode(',', $listePrepare);
        $sql .= ")";
        $req = $this->pdo->prepare($sql);
        return $req->execute($parametres); 
    }
}

?>