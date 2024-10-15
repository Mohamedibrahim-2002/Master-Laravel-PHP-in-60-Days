<?

//! PHP Data Types
/*
Variables can store data of different types, 
and different data types can do different things.

PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
*/

//! STRING
$name = "Mohamed Ibrahim";

//! INTEGER
$age = 21;

//! Float
$weight = 85.50;

//! BOOLEAN
$isStudent = true;

//! ARRAY
$hobbies[] = ["Cricket", "Football", "Efootball"];  
//* or
$cars = array("BMW", "Audi", "Lambogani");


//! object 
class Train {
    public $trainNumber;
    public $trainName;
    public $start;
    public $destination;


    public function __construct($trainNumber,$trainName,$start,$destination) {
        
        $this->trainNumber = $trainNumber;
        $this->trainName = $trainName;
        $this->start = $start;
        $this->destination = $destination;
    }
    public function message() {
        return "The Train Number is ". $this->trainNumber." ".$this->trainName." from ".$this->start." to ".$this->destination;
    }
}

$rmmexp = new Train(12622, "Sethu Express", "Chennai Egmore", "Rameshwarem");
echo $rmmexp->message();

//! NULL
$zero = null;

//! The PHP var_dump() function returns the data type and value:
//EXAMPLE: 

echo var_dump($rmmexp);

?>