<?php

    require 'dbconnect.class.php';

    class Gestion_absence
    {
        private $cnx;

        public function __construct()
        {
            $db = new BasesDonnees;
            $this->cnx = $db->connectDB();
        }

        public function readAllGestion_absences()
        {
            try {
                $req = 'SELECT * FROM  gestion_absence WHERE etat_absence = 1';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function archiver()
        {
            try {
                $req = 'SELECT * FROM  gestion_absence WHERE etat_absence = 0';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function showOneGestion_absences($id)
        {
            try {
                $req = 'SELECT * FROM gestion_absence WHERE id= :clt_id';
                $result = $this->cnx->prepare($req);
                $result->bindParam(':clt_id', $id);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function addNewGestion_absences($id_emp,$date, $motif_absence, $absence_justifie, $absence_prevue, $duree,$etat_absence)
        {
            try {
                $sql = "INSERT INTO gestion_absence(id_emp,date,motif_absence,absence_justifie,absence_prevue,duree,etat_absence) 
                VALUES (:clt_id,:clt_date_absence,:clt_motif_absence,:clt_absence_justifie,:clt_absence_prevue,:clt_duree,:clt_etatab)";
            $result = $this->cnx->prepare($sql);
            $result->bindparam(":clt_id", $id_emp);
            $result->bindparam(":clt_date_absence", $date);
            $result->bindparam(":clt_motif_absence", $motif_absence);
            $result->bindparam(":clt_absence_justifie", $absence_justifie);
            $result->bindparam(":clt_absence_prevue", $absence_prevue);
            $result->bindparam(":clt_duree", $duree);
            $result->bindparam(":clt_etatab", $etat_absence);
            $result->execute();
            return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }

        public function updateEtatAbsence($id,$etat_absence)
        {
            try {
                $sql = 'UPDATE gestion_absence
                        SET  etat_absence = :clt_etat_absence
                        WHERE   id = :clt_id_absence';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_id_absence", $id);
                $result->bindparam(":clt_etat_absence", $etat_absence);
                $result->execute();
                return $result;

            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }

        public function updateGestion_absences($id_emp, $date, $motif_absence, $absence_justifie, $absence_prevue, $duree, $id)
        {
            try {
                $sql = 'UPDATE gestion_absence
                        SET     id_emp = :clt_id_emp,
                                date = :clt_date_absence,
                                motif_absence = :clt_motif_absence,
                                absence_justifie = :clt_absence_justifie,
                                absence_prevue = :clt_absence_prevue,
                                duree = :clt_duree
                        WHERE   id = :clt_id_absence';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_id_emp", $id_emp);
                $result->bindparam(":clt_date_absence", $date);
                $result->bindparam(":clt_motif_absence", $motif_absence);
                $result->bindparam(":clt_absence_justifie", $absence_justifie);
                $result->bindparam(":clt_absence_prevue", $absence_prevue);
                $result->bindparam(":clt_duree", $duree);
                $result->bindparam(":clt_id_absence", $id);
                $result->execute();
                return $result;

            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }
        public function deleteGestion_absences($id)
        {
            try {
                $sql = 'DELETE FROM gestion_absence WHERE id = :clt_id_absence';
                $result = $this->cnx->prepare($sql);
                $result->bindparam(":clt_id_absence", $id);
                $result->execute();
                return $result;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }

        public function archive($id)
    {
        try {
            $sql = "INSERT INTO archiver(id_emp,date,motif_absence,absence_justifie,absence_prevue,duree)
            VALUES (SELECT * FROM gestion_absence) WHERE id = :clt_id_absence";
        $result = $this->cnx->prepare($sql);
        $result->bindparam(":clt_id_absence", $id);
        $result->execute();
        return $result;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    }


    