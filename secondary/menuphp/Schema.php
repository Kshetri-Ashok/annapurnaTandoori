<?php
require_once('./conn.php');
class SchemaDAO
{
    public function alergenos()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Alergenos` ";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<span>" . $value[1] . "</span>";
        }
        return $res;
    }

    public function entrante()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Entrantes` ";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " -------- " .  $value[2] . "€</strong>" . "<br>";
            $res .= "<em>" . $value[3] . "</em><br>";
        }
        return $res;
    }
    public function RecomendacionChefSizzler()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `RecomendacionSizzler`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " -------- " .  $value[2] . "€</strong>" . "<br>";
            $res .= "<em>" . $value[3] . "</em><br>";
        }
        return $res;
    }
    public function RecomendacionCurry()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `RecomendacionCurry`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " -------- " .  $value[2] . "€</strong>" . "<br>";
            $res .= "<em>" . $value[3] . "</em><br>";
        }
        return $res;
    }
    public function PlatoCurry()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Curry_Dishes`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " ------- " .  $value[2] . "€</strong>" . "<br>";
        }
        return $res;
    }
    public function HornoTandoori()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Horno_Tandoori`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " ------ " .  $value[2] . "€</strong>" . "<br>";
            $res .= "<em>" . $value[3] . "</em><br>";
        }
        return $res;
    }
    public function PlatosTikkaMasala()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Tikka_Masala`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " --------- " .  $value[2] . "€</strong>" . "<br>";
        }
        return $res;
    }
    public function PlatosKorma()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Platos_Korma`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " -------- " .  $value[2] . "€</strong>" . "<br>";
        }
        return $res;
    }
    public function PlatosPasanda()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = 'SELECT * FROM `Platos_Pasanda`';
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " -------- " .  $value[2] . "€</strong>" . "<br>";
        }
        return $res;
    }



    public function platos_karahi()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Platos_Karahi`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " ------- " .  $value[2] . "€</strong>" . "<br>";
        }
        return $res;
    }
    public function platos_bhuna()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Platos_Bhuna`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " ------- " .  $value[2] . "€</strong>" . "<br>";
        }
        return $res;
    }
    public function platos_espinaca()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Platos_Espinaca`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " ------- " .  $value[2] . "€</strong>" . "<br>";
        }
        return $res;
    }
    public function platos_jalfrezi()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Platos_Jalfrezi`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " ------ " .  $value[2] . "€</strong>" . "<br>";
        }
        return $res;
    }
    public function postres()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Postres`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " ------ " .  $value[2] . "€</strong>" . "<br>";
            $res .= "<em>" . $value[3] . "</em><br>";
        }
        return $res;
    }
    public function menu_degustacion()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Menú_Degustación`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] .  "</strong><br>";
            $res .= "<em>" . $value[2] . "</em><br>";
        }
        return $res;
    }
    public function menu_degustacion_precio()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Menú_Degustación_Precio`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            if (is_numeric($value[1])) {
                $res .= "<strong>" . $value[1] . "€</strong> <br>";
            }
            $res .= "<em>" . $value[2] . "</em>";
        }
        return $res;
    }
    public function platos_balti()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Platos_Balti`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " ------ " .  $value[2] . "€</strong>" . "<br>";
        }
        return $res;
    }
    public function platos_dansak()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Platos_Dansak`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " -----" .  $value[2] . "€</strong>" . "<br>";
        }
        return $res;
    }
    public function platos_madras()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Platos_Madras`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " ------- " .  $value[2] . "€</strong>" . "<br>";
        }
        return $res;
    }
    public function platos_vindaloo()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Platos_Vindaloo`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " ----- " .  $value[2] . "€</strong>" . "<br>";
        }
        return $res;
    }
    public function platos_basmati()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Platos_Basmati`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " ------ " .  $value[2] . "€</strong>" . "<br>";
            $res .= "<em>" . $value[3] . "</em><br>";
        }
        return $res;
    }
    public function pan()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Pan`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " ------ " .  $value[2] . "€</strong>" . "<br>";
            $res .= "<em>" . $value[3] . "</em><br>";
        }
        return $res;
    }
    public function platos_verduras()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Platos_Verduras`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " ------ " .  $value[2] . "€</strong>" . "<br>";
            $res .= "<em>" . $value[3] . "</em><br>";
        }
        return $res;
    }
    public function platos_biryani()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Platos_Biryani`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        foreach ($fetch as $key => $value) {
            $res .= "<strong>" . $value[1] . " ------- " .  $value[2] . "€</strong>" . "<br>";
        }
        return $res;
    }
    public function menu_para_niños()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Menu_para_Niños`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        $res .= "<div class=\"Comida\">";
        foreach ($fetch as $key => $value) {
            $res .=   $value[1]  . "------<br>";
        }
        $res .= "</div>";

        return $res;
    }
    public function menu_para_niños_precio()
    {
        $res = "";
        $dbh = new conn();
        $connection = $dbh->getConn();
        $SQL = "SELECT * FROM `Menu_para_Niños_Precio`";
        $query = $connection->prepare($SQL);
        $query->execute();
        $fetch = $query->fetchAll();
        $res .= "<div class=\"price\">";
        foreach ($fetch as $key => $value) {
            if (is_numeric($value[1])) {
                $res .= "<span>" . $value[1] . "€</span> ";
            }
        }
        $res .= "</div>";
        return $res;
    }
}
