<?php
    class HomeModel extends Model {
        public function Index() {
            $this->query('SELECT * FROM events ORDER BY id ASC');
            $rows = $this->resultSet();
            return $rows;
        
        }
    }

?>