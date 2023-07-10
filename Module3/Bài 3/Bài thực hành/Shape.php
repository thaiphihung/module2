<?php
class Shape{
    public string $name;
    public function __construct(string $name) {
        $this ->name = $name;
    }
    public function show(){
        return "I am a Shape. My name is " . $this ->name;
    }
}
?>