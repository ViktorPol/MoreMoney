<?php

namespace application\models;

use PDO;

use application\core\Model;
use LDAP\Result;

class Appforregister extends Model {

    public function checkPhone($phone) {

		$res = $this->db->row( "SELECT * FROM register WHERE phone = :phone", ['phone' =>$phone]);

		if(!empty($res)) {
            return false;
		} else {
			return true;
		}
	}

    public function createUser($name, $phone, $mail, $tarif) {

        $result = $this->db->query( "INSERT INTO register ( name, phone, mail, tarif) VALUES (:name, :phone, :mail, :tarif)",
			[				
				'name' => $name,
				'phone' => $phone,
				'mail' => $mail,
				'tarif' => $tarif				
			]
			);
        return $result;
    }

}