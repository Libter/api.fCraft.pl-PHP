<?php

class fCraftWrapper {
    
    private $url = 'https://api.fcraft.pl/';
    private $getOptions, $postOptions;
    private $key0;
    
    public function __construct($key0) {
        $this->key0 = $key0;
        $this->getOptions = [
            'http' => ['ignore_errors' => true],
        ];
        $this->postOptions = [
            'http' => [
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'ignore_errors' => true
            ]
        ];
    }
    
    public function get($url, $args, $data) {
        $this->prepare($url, $args, $data);
        return $this->request("{$this->url}{$url}?".http_build_query($data), $this->getOptions);
    }
    
    public function post($url, $args, $data) {
        $this->prepare($url, $args, $data);
        $options = $this->postOptions;
        $options['http']['content'] = http_build_query($data);
        return $this->request("{$this->url}{$url}", $options);
    }
    
    private function prepare(&$url, $args, &$data) {
        $data['key0'] = $this->key0;
        foreach ($args as $key => $val) {
            $url = str_replace("\{$key\}", urlencode($val), $url);
        }
    }
    
    private function request($url, $options) {
        $result = file_get_contents($url, true, stream_context_create($options));
        $json = json_decode($result);
        $code = substr($http_response_header[0], 9, 3);
        if ($json == null) {
            return (object) [
                'error' => 'UNKNOWN',
                'code' => $code
            ];
        }
        if (isset($json->error)) {
            $json->code = $code;
        }
        return $json;
    }
    
}
