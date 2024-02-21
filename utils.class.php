<?php

    class Utils{


         //connection a la base donner restaurant
         static function connecter_bd(){
            try {
                $cnx=new PDO("mysql:host=localhost;dbname=restaurant_db",'root', '');
                return $cnx;
            } catch (\Throwable $th) {
                echo "echec de connecter a la base donner".$th->getMessage();
            }
        }

        //redirection vers votre page
        static function redirection($page) {
            header('Location:'.$page);
        }


        static function select_all($table) {
            try {
                $cnx=Utils::connecter_bd();
                $req=$cnx->prepare("select * from $table");
                $req->execute();
             $resultas=$req->fetchAll();
             return $resultas;

            } catch (\Throwable $th) {
                echo "echec de selection les resultas".$th->getMessage();
            }

        }

        static function location($page){
            header("location:$page");
        }
        











    }
?>