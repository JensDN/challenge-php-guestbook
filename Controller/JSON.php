<?php


class JSON
{
    private $file = "Data/Test.json";

// String of data to be written
    private $data = "The quick brown fox jumps over the lazy dog.";

// Open the file for writing


// Write data to the file
    public function getData()
    {
        $handle = fopen($this->file, 'wb') or die("ERROR: Cannot open the file.");
        fwrite($handle, $this->data) or die ("ERROR: Cannot write the file.");
        // Closing the file handle
        fclose($handle);
        echo "Data written to the file successfully.";
    }


}