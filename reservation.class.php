<?php
include_once('utils.class.php');
class Reservation{


    public $num_personne;
    public $num_table;
    public $type_reservation_id;
    public $date_reservation;
    public $message;
    public $client_id;


    function __construct($num_personne, $num_table ,$type_reservation_id,$date_reservation,$message,$client_id) {
        $this->num_personne = $num_personne ;
        $this->num_table = $num_table ;
        $this->type_reservation_id = $type_reservation_id;
        $this->date_reservation=$date_reservation;
        $this->message = $message;
        $this->client_id = $client_id;
        }


        public function ajouter_reservation(){
            try {
                $cnx=Utils::connecter_bd();
                $req=$cnx->prepare("insert into reservation (nombre_personne,nombre_table,type_reservation_id,date_reservation,message,client_id) values (?,?,?,?,?,?) ");
                $req->execute([$this->num_personne,$this->num_table,$this->type_reservation_id,$this->date_reservation,$this->message,$this->client_id ]);
            } catch (\Throwable $th) {
                echo "echec de l'ajoute d'un produit".$th->getMessage();
            }

        }
         // méthode qui modifie les informations de produit
         public function modifier_reservation($id){
            try {
                $cnx=Utils::connecter_bd();
                $req=$cnx->prepare("update reservation set nombre_personne=? ,nombre_table=?,type_reservation_id=?,date_reservation=?,message= ?,client_id=? where id = $id");
                $req->execute([$this->num_personne,$this->num_table,$this->type_reservation_id,$this->date_reservation,$this->message,$this->client_id ]);
            } catch (\Throwable $th) {
                echo "echec de modifier se reservation".$th->getMessage();
            }

        }

        static function selectTypeReservation($type) {
            try {
                $cnx=Utils::connecter_bd();
                // $req=$cnx->prepare("select * from $table where type = $type");
                $req=$cnx->prepare("SELECT * from type_reservation  where type ='$type'");
                $req->execute();
             $resultas=$req->fetchAll();
             return $resultas;

            } catch (\Throwable $th) {
                echo "echec de selection les resultas".$th->getMessage();
            }

        }








}

?>