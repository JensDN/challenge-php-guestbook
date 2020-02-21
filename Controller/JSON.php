<?php


class JSON
{
    private string $filename = "Data/Messages.json";

// String of data to be written
    private $data;

// Open the file for writing


// Write data to the file
    public function setFileData()
    {
        // read the file if present
        $handle = @fopen($this->filename, 'r+');
        // create the file if needed
        if ($handle === false) {
            $handle = fopen($this->filename, 'w+');
            fclose($handle);
        }
        @fclose($handle);
        $data = $this->data;
        $inp = file_get_contents($this->filename);
        $tempArray = json_decode($inp, true);
        $tempArray[] = $data;
        $jsonData = json_encode($tempArray);
        file_put_contents($this->filename, $jsonData);
        echo "Data written to the file successfully.";
    }
    public function getFileData()
    {
        return  file_get_contents($this->filename);
    }
    public function setData ($data)
    {
        $this->data=$data;
    }


}