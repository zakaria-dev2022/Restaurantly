<?php
include_once('utils.class.php');

class Produit{

    public $libelle;
    public $prix;
    public $description;
    public $type_produit;
    public $image;

    function __construct($libelle, $prix ,$description,$type_produit,$image) {
        $this->libelle = $libelle ;
        $this->prix = $prix ;
        $this->description = $description;
        $this->type_produit=$type_produit;
        $this->image = $image;
        }

        // méthode qui ajoute les informations de produit
        public function ajouter_produit(){
            try {
                $cnx=Utils::connecter_bd();
                $req=$cnx->prepare("insert into produit (libelle,prix,description,type_produit,image) values (?,?,?,?,?) ");
                $req->execute([$this->libelle,$this->prix,$this->description,$this->type_produit,$this->image]);
            } catch (\Throwable $th) {
                echo "echec de l'ajoute d'un produit".$th->getMessage();
            }

        }

        // méthode qui modifie les informations de produit
        public function modifier_produit($id){
            try {
                $cnx=Utils::connecter_bd();
                $req=$cnx->prepare("update produit set libelle=? ,prix=?,description=?,type_produit=?,image= ? where id = $id");
                $req->execute([$this->libelle,$this->prix,$this->description,$this->type_produit,$this->image]);
            } catch (\Throwable $th) {
                echo "echec de modifier se produit".$th->getMessage();
            }

        }
        static function selectElement($type) {
            try {
                $cnx=Utils::connecter_bd();
                // $req=$cnx->prepare("select * from $table where type = $type");
                $req=$cnx->prepare("SELECT p.*,t.type FROM produit p JOIN type_produits t on p.id_type_produit = t.id where t.type='$type'");
                $req->execute();
             $resultas=$req->fetchAll();
             return $resultas;

            } catch (\Throwable $th) {
                echo "echec de selection les resultas".$th->getMessage();
            }

        }
        


}

?>