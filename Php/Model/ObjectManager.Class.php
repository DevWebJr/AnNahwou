<?php
//Manageur SQL de la table Object
class ObjectManager
{

    //Fonction ajoutant une entrée en base de données
    static public function add(Object $object)
    {
        $db = DataBaseConnection::getDataBase(); // Instanciation d'un object PDO.
        // Préparation de la requête d'insertion.
        $q = $db->prepare('INSERT INTO Object( , ) VALUES(: , : )');
        
        // Assignation des valeurs .
        $q->bindValue(':', $object->get());
        $q->bindValue(':', $object->get());


        // Exécution de la requête.
        $q->execute();
        $q->CloseCursor();
    }

    
    //Fonction retournant un object correspondant à un ID en base de données
    public static function getById($id)
    {
        $db = DataBaseConnection::getDataBase(); // Instanciation d'un object PDO.
        // éxécute une requête de type SELECT avec une clause WHERE, et retourne un object.
        $id = (int)$id;

        $q = $db->query('SELECT idObject, , FROM Object WHERE idObject = ' . $id);
        $datas = $q->fetch(PDO::FETCH_ASSOC);
        return new Object($datas);
    }

    //Fonction supprimant l'entrée correspondant à un ID en base de données
    public static function delete(Object $object)
    {
        $db = DataBaseConnection::getDataBase(); // Instanciation d'un object PDO.
        // éxécute une requête de type DELETE.
        $db->exec('DELETE FROM Object WHERE idObject = ' . $object->getIdObject());
    }

    //Fonction retournant une liste contenant tous les enregistrements de la base de données, sous forme d'object
    public static function getList()
    {
        $db = DataBaseConnection::getDataBase(); // Instanciation d'un object PDO.
        // Retourne la liste de tous les Objects.

        $q = $db->query('SELECT idObject, , FROM Object ');

        if ($datas = $q->fetch(PDO::FETCH_ASSOC)) 
        { 
            //test si la requête renvoi des données
            do 
            {
                $objects[] = new Object($datas);
            } 
            while ($datas = $q->fetch(PDO::FETCH_ASSOC));
            return $objects;
        } 
        else 
        {
            return null;
        }
    }

    
    //Fonction mettant à jour un enregistrement base de données correspondant à l'ID fourni
    public static function update(Object $object)
    {
        $db = DataBaseConnection::getDataBase(); // Instanciation d'un object PDO.
        // Prépare une requête de type UPDATE.
        $q = $db->prepare('UPDATE Object SET =: ,  =:  WHERE idObject = :idObject');

        // Assignation des valeurs de la requête.
        $q->bindValue(':idObject', $object->getIdObject());
        $q->bindValue(':' , $object->get());
        $q->bindValue(':' , $object->get());

        $q->execute();
        $q->CloseCursor();

    }
}