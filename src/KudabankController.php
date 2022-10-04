<?php
namespace Technolix\KudaopenApiPhp;
use Technolix\KudaopenApiPhp\Helpers\KudaHelpers;

class KudabankController{

    public function Initialize(String $email, String $apikey, string $environment = "DEVELOPMENT"):KudaHelpers{
        switch ($environment) {
            
            case 'PRODUCTION':
                $base_url = 'https://kuda-openapi.kuda.com/v2';
                break;

            case 'DEVELOPMENT':
               $base_url = 'https://kuda-openapi-uat.kudabank.com/v2';
                break;

            default:
                $base_url = 'https://kuda-openapi-uat.kudabank.com/v2';
                break;
        }

        $credentials = json_encode([
            "email"=> $email,
            "apikey"=>$apikey
        ]);

        return new KudaHelpers($credentials, $base_url);

    }
}