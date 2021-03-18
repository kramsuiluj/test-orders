<?php 

class crud {

    private $db;

    function __construct ($conn) {
        $this->db = $conn;
    }

    public function save($name, $sdate, $nums) {

        try {

            $sql = "INSERT INTO test (name, sdate, nums) VALUES (:name, :sdate, :nums)";

            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':name', $name);
            $stmt->bindparam(':sdate', $sdate);
            $stmt->bindparam(':nums', $nums);

            $stmt->execute();

            return true;

        } catch (PDOException $e) {

            return false;

        }

    }

    public function defaultOrder() {

        $sql = "SELECT * FROM test";

        $result = $this->db->query($sql);

        return $result;

    }

    public function byName() {

        $sql = "SELECT * FROM test ORDER BY name";

        $result = $this->db->query($sql);

        return $result;

    }

    public function byDate() {

        $sql = "SELECT * FROM test ORDER BY sdate";

        $result = $this->db->query($sql);

        return $result;

    }

    public function byNum() {

        $sql = "SELECT * FROM test ORDER BY nums";

        $result = $this->db->query($sql);

        return $result;

    }


}


?>