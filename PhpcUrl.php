<?php
class PhpcUrl{
  public  function __construct(){
      
  }
  public function Paginacion($page){
    if($page <= 0){
      $page = 1;
    } 
    return $page;
  }

  public function ApiStagingeb($page){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.stagingeb.com/v1/properties?page='.$page.'&limit=20',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'X-Authorization: l7u502p8v46ba3ppgvj5y2aad50lb9',
        'Cookie: rp=api.stagingeb.com; source=api.stagingeb.com'
      ),
    ));
    
    $data = curl_exec($curl);
    
    curl_close($curl);
    return $data;
  }

  public function DataApi($data){
    if($data == null) throw new InvalidArgumentException('¡Los registros estan vacios!');
    $json_data = json_decode($data, true);
    $contents = $json_data["content"];
    return $contents;
  }
  
}

?>