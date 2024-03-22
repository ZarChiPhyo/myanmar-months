<?php 

function data(){
    $json_data = file_get_contents("MyanmarMonths.json");
    $data_array = json_decode($json_data,true);
    // print_r($data_array);
    return $data_array['Tbl_Months'];
}
// data();

?>