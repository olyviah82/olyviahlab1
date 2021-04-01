<?php
interface Account
{
    public function register($pdo);
    public function login($pdo);
    public function changePassword($pdo);
    public function logout($pdo);
}

class User implements Account
{
    //properties

    protected $email;
    protected $fullname;
    protected $city;
    protected $password;
    protected $password1;
    protected $password2;
    protected $_SESSION;
    protected $pic;


    //class constructor


    public function setFullName($fname)
    {
        $this->fullname = $fname;
    }
    public function getFullName()
    {
        return $this->fullname;
    }

    public function setEmailAddress($emailad)
    {
        $this->email = $emailad;
    }
    public function getEmailAddress()
    {
        return $this->email;
    }
    public function setCity($city)
    {
        $this->city = $city;
    }
    public function getCityResidence()
    {
        return $this->city;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    //password getter
    public function getPassword()
    {
        return $this->password;
    }
    public function setProfilepic($dp)
    {
        $this->pic = $dp;
    }
    public function getProfilePicture()
    {
        return $this->pic;
    }


    public function setPass1($password1)
    {
        $this->password1 = $password1;
    }

    public function getPass1()
    {
        return $this->password1;
    }

    public function setPass2($password2)
    {
        $this->password2 = $password2;
    }

    public function getPass2()
    {
        return $this->password2;
    }
    /**        * Create a new user       
     *  * @param Object PDO Database connection handle      
     *   * @return String success or failure message        */
    public function register($pdo)
    {
        $passwordHash = password_hash($this->password, PASSWORD_DEFAULT);
        try {
            var_dump($pdo);
            $sql = "SELECT COUNT(email) AS num FROM user WHERE email = :email";
            $stmtvali = $pdo->prepare($sql);

            //Bind the provided username to our prepared statement.
            $stmtvali->bindValue(':email', $this->email);

            //Execute.
            $stmtvali->execute();

            //Fetch the row.
            $row = $stmtvali->fetch(PDO::FETCH_ASSOC);


            if ($row['num'] > 0) {
                die('<script>alert("email already exists")</script>');
            } else {
                $stmt = $pdo->prepare('INSERT INTO user (fullname,email,city,password) VALUES(:fullname,:email,:city,:password)');
                $stmt->bindValue(':fullname', $this->fullname);
                $stmt->bindValue(':email', $this->email);
                $stmt->bindValue(':city', $this->city);
                $stmt->bindValue(':password', $passwordHash);
                $result = $stmt->execute();
                if (!$result) {
                    $errormessage = $pdo->errorInfo();
                    echo "Error with query: " . $errormessage;
                } else {
                    echo "User Registration Successfull!!!";
                }
            }
            echo json_encode(array("statusCode" => 200));
            //$_SESSION['login_user1'] = $this->email; // Initializing Session
            //header("location: index.php");
        } catch (PDOException $e) {
            echo json_encode(array("statusCode" => 201)) . $e->getMessage();
        }
    }

    public function login($pdo)
    {
        try {

            $sql = "SELECT id, email, password FROM user WHERE email = :email";
            $stmt = $pdo->prepare($sql);

            //Bind value.
            $stmt->bindValue(':email', $this->email);

            //Execute.
            $stmt->execute();

            //Fetch row.
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            //If $row is FALSE.
            if (
                $user === false
            ) {
                //Could not find a user with that username!
                //PS: You might want to handle this error in a more user-friendly manner!
                die('Incorrect username / password combination!');
            } else {
                //User account found. Check to see if the given password matches the
                //password hash that we stored in our users table.

                //Compare the passwords.
                $validPassword = password_verify($this->password, $user['password']);

                //If $validPassword is TRUE, the login has been successful.
                if ($validPassword) {

                    //Provide the user with a login session.
                    $_SESSION['email'] = $this->email;
                    $_SESSION['logged_in'] = time();

                    //Redirect to our protected page, which we called home.php
                    echo "home.php";
                    header('Location: homepage.php', true, 301);
                    exit();
                } else {
                    //$validPassword was FALSE. Passwords do not match.
                    echo "invalid";
                    die('Incorrect username / password combination!');
                }
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


    public function changePassword($pdo)
    {
        try {
            $sql = "SELECT *FROM user WHERE email=?";
            $args = array($_SESSION['email']);
            $stmt = $pdo->prepare($sql);
            $stmt->execute($args);
            $row = $stmt->fetch();
            if ($row == NULL) {
                return false;
                echo "fail";
            } else if (password_verify($this->password, $row['password'])) {
                $updatesql = "UPDATE USER SET password = ? WHERE email=?";
                $uargs = array($this->password1, $_SESSION['email']);
                $stmtu = $pdo->prepare($updatesql);
                $stmtu->execute($uargs);
                return $stmtu->rowCount() > 0;
                echo "success";
            } else {
                echo "fail1";
                return false;
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function logout($pdo)
    {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    }
}