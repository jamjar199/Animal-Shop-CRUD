<?php

/**
 * 
 */

class QueryBuilder 
{

	protected $pdo;

	public function __construct(PDO $pdo){

		$this->pdo = $pdo;

	}

    public function select($tableName, $fieldsArray = ['*'], $where = 1, $limit = false){

        //converts array into comma separated string
        $fields = implode (", ", $fieldsArray);

        //assemble query
        $query = "SELECT {$fields} FROM {$tableName} WHERE {$where}";

        //if query has a limit it is set
        $query = $this->setLimits($query, $limit);

        return $this->executeQuery($query, true);

    }

	public function insert($tableName, $fieldsArray, $valuesArray){

		/**
		*inserts value(s) into database
         *param 1 ($tableName) is the table name
         *param 2 ($fieldsArray) is an array of the fields, position must match values in param 1
         *param 3 ($valuesArray) is an array of the values
         * return boolean
		*/

		//check data is set 
		if ((!is_array($valuesArray)) || (!is_array($fieldsArray)) || (!isset($tableName))) {
			return false;
		}

		//check each value has a field
		if( count($valuesArray) != count($fieldsArray) ){
			return false;
		}

		//converts array into comma separated string
		$fields = implode(", ", $fieldsArray);

		//creates a string of comma separated field names that the values get bound to (for PDO bindparam)
		$valuesPlaceholder = implode(", :", $fieldsArray);
		$valuesPlaceholder = ":" . $valuesPlaceholder;

		//creates the values array with fields as their keys
		$valuesArray = array_combine($fieldsArray, $valuesArray);

        return $this->executeQuery("INSERT INTO {$tableName} ({$fields}) VALUES ({$valuesPlaceholder})", false, $valuesArray);

    }

	public function update($tableName, $fieldsArray, $valuesArray, $where = 1, $limit = false){

	    //declare values string
        $values = "";

        //loop through each field and add the field and value to the values string
	    foreach ($fieldsArray as $key => $field){
	        if ($key != 0){
	            $values .= ', ';
            }
	        $values .= $field . ' = :' . $field;
        }

        //creates the values array with fields as their keys
        $valuesArray = array_combine($fieldsArray, $valuesArray);

	    //assemble query string
        $query = "UPDATE {$tableName} SET {$values} WHERE {$where}";

	    //if query has a limit it is set
        $query = $this->setLimits($query, $limit);

        return $this->executeQuery($query, false, $valuesArray);
    }

    public function delete($tableName, $where = 1, $limit = false){

	    //assemble query
	    $query = "DELETE FROM {$tableName} WHERE {$where}";

	    //if query has a limit it is set
	    $query = $this->setLimits($query, $limit);

	    return $this->executeQuery($query);
    }

    public function execute($query, $fetchResults = false){

        return $this->executeQuery($query, $fetchResults);

    }

    private function setLimits($query, $limit){

        if ($limit != false){
            return $query ." LIMIT {$limit}";
        }
        return $query;
    }

    private function executeQuery($query, $fetchAll = false, $paramArray = []){

        //prepares the query into a PDO statement and executes it
        $stmt = $this->pdo->prepare($query);

	    if ($fetchAll == false) {
	        return $stmt->execute($paramArray);
        }

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }
}