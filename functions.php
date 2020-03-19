<?php
$base_url = "http://localhost/vwa_ceh2";

function getId($conn)
{
    $base_url = "http://localhost/vwa_ceh2";
    if (isset($_COOKIE['SID'])) {
        $cookie = $_COOKIE['SID'];
        $arrayCookie = explode(";", base64_decode(base64_decode($cookie)));
        $username = $arrayCookie[1];
        $query = "SELECT idUser FROM user WHERE username = '$username' LIMIT 1";
        $result = $conn->query($query);

        if ($result->rowCount() > 0) {
            foreach ($result as $row) {
                $idUser = $row['idUser'];
            }
            return $idUser;
        } else {
            setcookie("SID", "", time() - 100000);
            header("Location: $base_url/login.php");
        }
    } else
        header("Location: $base_url/login.php");
};

function getUsername($conn)
{
    if (isset($_COOKIE['SID'])) {
        $cookie = $_COOKIE['SID'];
        $arrayCookie = explode(";", base64_decode(base64_decode($cookie)));
        $username = $arrayCookie[1];
    } else {
        $username = "";
    }
    return $username;
};

function setRoleIdCookieDB($conn)
{
    if (isset($_COOKIE['SID'])) {
        if (!isset($_COOKIE['X'])) {
            $cookie = $_COOKIE['SID'];
            $arrayCookie = explode(";", base64_decode(base64_decode($cookie)));
            $username = $arrayCookie[1];
            $query = "SELECT role_id FROM user WHERE username = '$username' LIMIT 1";
            $result = $conn->query($query);

            if ($result->rowCount() > 0) {
                foreach ($result as $row) {
                    $role = $row['role_id'];
                }
            }
            setcookie("X", md5($role), time() + 86400);
        }
    }
}

function getBalance($conn)
{
    if (isset($_COOKIE['SID'])) {
        $cookie = $_COOKIE['SID'];
        $arrayCookie = explode(";", base64_decode(base64_decode($cookie)));
        $username = $arrayCookie[1];
        $query = "SELECT user_balance FROM user WHERE username = '$username' LIMIT 1";
        $result = $conn->query($query);

        if ($result->rowCount() > 0) {
            foreach ($result as $row) {
                $balance = $row['user_balance'];
            }
        }
    } else {
        $balance = 0;
    }
    return $balance;
};

function isAdmin()
{
    if (isset($_COOKIE['SID'])) {
        $cookie = $_COOKIE['SID'];
        $arrayCookie = explode(";", base64_decode(base64_decode($cookie)));
        $priv = $arrayCookie[0];
        if ($priv == "admin") return true;
    }
    return false;
};

function isLogin()
{
    if (isset($_COOKIE['SID'])) {
        return true;
    }
    return false;
};
