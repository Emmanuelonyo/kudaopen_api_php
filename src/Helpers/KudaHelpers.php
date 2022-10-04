<?php
namespace Technolix\KudaopenApiPhp\Helpers;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\{Request, Response};
use Technolix\KudaopenApiPhp\KudabankConstants;


class KudaHelpers extends KudabankConstants{

    public function __construct($credentials, $base_url)
    {
        $this->baseurl = $base_url;
        $this->credentials = $credentials;
        $this->token = $this->getToken();
        $this->headers = [
            'Authorization' => 'Bearer '.$this->token.'',
            'Content-Type' => 'application/json'
          ];
    }

    public function fetchKuda($payload)
    {

        $payload = json_encode($payload);  

        $client = new Client();        
        $request = new Request("POST", $this->baseurl, $this->headers, $payload);
        $res = $client->sendAsync($request)->wait();
        return $res->getBody();
    }

    public function getToken()
    {
        $headers = [
            'Content-Type' => 'application/json'
          ];
        $client = new Client();
        $request = new Request("POST", $this->baseurl.'/Account/GetToken', $headers, $this->credentials);
        $res = $client->sendAsync($request)->wait();
        return $res->getBody();
    }

    public function bank_list()
    {
        $BANK_LIST = [
            "data"=>json_encode(["ServiceType" => KudabankConstants::BANK_LIST,
            "RequestRef"=>(int) rand()])
        ];
        
        $bank_list = $this->fetchkuda($BANK_LIST);
        
        return $bank_list;
    }

    public function name_enquiry($data)
    {
        $NAME_ENQUIRY  = [
            "data"=>json_encode(["ServiceType" => KudabankConstants::NAME_ENQUIRY,"RequestRef"=>rand(), "Data"=>$data])
        ];

        $result =  $this->fetchkuda($NAME_ENQUIRY);
            
        return $result;
    }

    public function retrieve_virtual_account($data)
    {

        $RETRIEVE_ACCOUNT  = [
            "data"=>json_encode([
                "ServiceType" => KudabankConstants::ADMIN_RETRIEVE_SINGLE_VIRTUAL_ACCOUNT,
                "RequestRef"=>rand(), 
                "data"=>$data
                ])
            ];
        
        $result = $this->fetchkuda($RETRIEVE_ACCOUNT);
        
        return $result;
        
    }

    public function create_virtual_account($data)
    {
        $PAYLOAD  = [
            "data"=>json_encode([
                "ServiceType" => KudabankConstants::ADMIN_CREATE_VIRTUAL_ACCOUNT,
                "RequestRef"=>rand(), 
                "data"=>$data
                ])
            ];
        
        $result = $this->fetchkuda($PAYLOAD);
        
        return $result;
    }

    public function retrieve_virtual_account_balance($data)
    {

        $RETRIEVE_ACCOUNT  = [
            "data"=>json_encode([
                "ServiceType" => KudabankConstants::RETRIEVE_VIRTUAL_ACCOUNT_BALANCE,
                "RequestRef"=>rand(), 
                "data"=>$data
                ])
            ];
        
        $result = $this->fetchkuda($RETRIEVE_ACCOUNT);
        
        return $result;
        
    }

    public function single_fund_transfer($data)
    {

        $PAYLOAD  = [
            "data"=>json_encode([
                "ServiceType" => KudabankConstants::SINGLE_FUND_TRANSFER,
                "RequestRef"=>rand(), 
                "data"=>$data
                ])
            ];
        
        $result = $this->fetchkuda($PAYLOAD);
        
        return $result;
        
    }

    public function transaction_status_query($data)
    {

        $PAYLOAD  = [
            "data"=>json_encode([
                "ServiceType" => KudabankConstants::TRANSACTION_STATUS_QUERY,
                "RequestRef"=>rand(), 
                "data"=>$data
                ])
            ];
        
        $result = $this->fetchkuda($PAYLOAD);
        
        return $result;
        
    }

    public function virtual_account_fund_transfer($data)
    {

        $PAYLOAD  = [
            "data"=>json_encode([
                "ServiceType" => KudabankConstants::VIRTUAL_ACCOUNT_FUND_TRANSFER,
                "RequestRef"=>rand(), 
                "data"=>$data
                ])
            ];
        
        $result = $this->fetchkuda($PAYLOAD);
        
        return $result;
        
    }   
    
    public function retrieve_main_balance($data)
    {

        $PAYLOAD  = [
            "data"=>json_encode([
                "ServiceType" => KudabankConstants::ADMIN_RETRIEVE_MAIN_ACCOUNT_BALANCE,
                "RequestRef"=>rand(), 
                "data"=>$data
                ])
            ];
        
        $result = $this->fetchkuda($PAYLOAD);
        
        return $result;
        
    }     

    
    
    
}