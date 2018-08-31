<?php
// src/AppBundle/Utils/Listing.php
namespace AppBundle\Utils;

/**
 * Class that Trigger the API to get a list
 *
 * @author Nicolas Bruyere <bruyere.nicolas@gmail.com>
 */

class Listing
{
    /* *************************************************************************
     *      CONSTANT ATTRIBUTES PART
     * ********************************************************************** */
    const TOKEN = "TokenADNTest2018";
    const URL = "http://adneomapisubject.herokuapp.com/blackmirror";

	/* *************************************************************************
     *      PUBLIC METHODS PART
     * ********************************************************************** */
    public function Listing ()
    {   
        $list = $this->CallAPI("GET", self::URL, $token = self::TOKEN);
        return json_decode($list, true);
    }

	/* *************************************************************************
     *      PRIVATE METHODS PART
     * ********************************************************************** */
    /**
	 * Call to the API (GET, PUT, ...)
	 *
	 * @param string $method
	 * @param string $url
	 * @param string $token
	 * @param bool $data
     * @throws Exception
	 */
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
        $headers[] = "Content-Type: application/x-www-form-urlencoded; charset=utf-8";
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }
}
