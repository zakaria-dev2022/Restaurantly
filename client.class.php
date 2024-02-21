<?php
include_once('utils.class.php');
class Client{


    public $nom;
    public $prenom;
    public $cin;
    public $tel;
    public $email;
    public $mp;


    function __construct($nom, $prenom ,$cin,$tel,$email,$mp) {
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->cin = $cin;
        $this->tel=$tel;
        $this->email = $email;
        $this->mp = $mp;
        }


        public function ajouter_client(){
            try {
                $cnx=Utils::connecter_bd();
                $req=$cnx->prepare("insert into client (nom,prenom,cin,tel,email,mot_de_passe) values (?,?,?,?,?,?) ");
                $req->execute([$this->nom,$this->prenom,$this->cin,$this->tel,$this->email,$this->mp ]);
            } catch (\Throwable $th) {
                echo "echec de l'ajoute d'un produit".$th->getMessage();
            }

        }
         // méthode qui modifie les informations de produit
         public function modifier_client($id){
            try {
                $cnx=Utils::connecter_bd();
                $req=$cnx->prepare("update client set nom=? ,prenom=?,cin=?,tel=?,email= ?,mot_de_passe=? where id = $id");
                $req->execute([$this->nom,$this->prenom,$this->cin,$this->tel,$this->email,$this->mp ]);
            } catch (\Throwable $th) {
                echo "echec de modifier se client".$th->getMessage();
            }

        }

        static function selectClient($email) {
            try {
                $cnx=Utils::connecter_bd();
                // $req=$cnx->prepare("select * from $table where type = $type");
                $req=$cnx->prepare("SELECT *from client  where email ='$email'");
                $req->execute();
             $resultas=$req->fetchAll();
             return $resultas;

            } catch (\Throwable $th) {
                echo "echec de selection les resultas".$th->getMessage();
            }

        }








}

?>