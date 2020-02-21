<?php


class Message
{
    private $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    private $title;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }
    private $message;
    private $date;

    public function __construct($name = 'unknown', $title = 'unknown', $message = 'unknown' )
    {
        $this->name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $this->title = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
        $this->message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
        $this->date = htmlspecialchars($this->getTime(), ENT_QUOTES, 'UTF-8');
    }
    public function JSONparsing(){
        return Array(
            'name' =>$this->name,
            'title'=>$this->title,
            'message'=>$this->message,
            'date'=>$this->date
        );
    }
    public function getTime() {
        $timezone = date_default_timezone_get();
        return date('d/m/Y H:i');
    }
}
