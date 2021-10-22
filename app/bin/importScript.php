<?php
// Open the file for reading
if (($file = fopen("companies.csv", "r")) !== FALSE) 
{
  // Convert each line into the local $data variable
  while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
  {		
    // Read the data from a single line
    
  }

  // Close the file
  fclose($file);
}