class Bus{
    public $occupiedSeats;
    public $capacity
    public $waiting

    function__construct($occupiedSeats, $capacity, $waiting){
        $this->occupiedSeats = $occupiedSeats;
        $this->capacity = $capacity;
        $this->waiting = $waiting;
        $this->freeSeats = $capacity - $occupiedSeats;
    }

    function getInfo(){
        if ($this->waiting <= $this->freeSeats){
            $this->freeSeats = $this->freeSeats - $this->waiting;
            return "Number of empty seats is: ".$this->freeSeats;
        }
        elseif ($this->freeSeats < $this->waiting){
            $this->freeSeats = 0;
            $this->waiting = $this->waiting - $this->freeSeats;
            return "Number of empty seats is: ".$this->freeSeats. "; Number of waiting passengers is: " $this->waiting;
        }
    }
}