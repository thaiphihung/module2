<?php 
class Patient {
    public $name;
    public $code;
    public function __construct($name, $code){
        $this->name = $name;
        $this->code = $code;
    }
    function __toString(){
        return "$this->name (Mã: $this->code)";
    }
}
class PriorityQueue {
    private $queue = array();

    function enqueue($name, $code) {
        $patient = new Patient($name, $code);
        $found = false;
        foreach ($this->queue as $key => $val) {
            if ($patient->code < $val->code) {
                array_splice($this->queue, $key, 0, array($patient));
                $found = true;
                break;
            }
        }

        if (!$found) {
            array_push($this->queue, $patient);
        }
    }

    function dequeue() {
        return array_shift($this->queue);
    }

    function __toString() {
        $result = "";
        foreach ($this->queue as $patient) {
            $result .= ' ' . (string)$patient;
        }
        return $result;
    }
}
$priorityQueue = new PriorityQueue();
$priorityQueue->enqueue("Smith", 5);
$priorityQueue->enqueue("Jones", 4);
$priorityQueue->enqueue("Fehrenbach", 6);
$priorityQueue->enqueue("Brown", 1);
$priorityQueue->enqueue("Ingram", 1);

echo "Danh sách bệnh nhân: " . $priorityQueue . "<br>";
$nextPatient = $priorityQueue->dequeue();
echo "Bệnh nhân được khám bệnh: " . $nextPatient->name . "<br>";
echo "Danh sách bệnh nhân còn lại: " . $priorityQueue . "\n";
