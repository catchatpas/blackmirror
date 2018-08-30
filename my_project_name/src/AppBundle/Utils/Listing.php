<?php
// src/AppBundle/Utils/Listing.php
namespace AppBundle\Utils;

class Listing
{
    public function Listing ()
    {   
        $list = $this->CallAPI("GET", "http://adneomapisubject.herokuapp.com/blackmirror", $token = "TokenADNTest2018");
        return json_decode($list, true);
    }

    private function CallAPI($method, $url, $token, $data = false)
    {
        $curl = curl_init();

        switch ($method)
        {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);

                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }

        // Authentication with the proper header:

        $headers = array();
        $headers[] = "x-auth-token: $token";
        $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }
}
