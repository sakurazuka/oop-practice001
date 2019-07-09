<?php
class Main
{
    public function search($id) {
        $ret = array(
            'status'=> false,
            'shop_data'=> '',
            'account_data'=> ''
        );

        if ($id) {
            $shop_api = new ShopApi();
            $ret['shop_data'] = $shop_api->get_info($id);
            $account_api = new AccountApi();
            $ret['account_data'] = $account_api->get_info($id);
            $ret['status'] = true;
        }

        return $ret;
    }
}

class Api
{
    protected const BASE_URL = 'http://localhost';

    // メソッドの宣言
    public function get_info($id) {
        self::call_api(self::BASE_URL . "\n");
    }
    protected function call_api($url) {
        // ここでApiを呼び出す
        return $url;
    }
}

class ShopApi extends Api
{
    public function get_info($id) {
        return self::call_api(self::BASE_URL . '/shop/' . $id . "\n");
    }
}

class AccountApi extends Api
{
    public function get_info($id) {
        return self::call_api(self::BASE_URL . '/account/' . $id . "\n");
    }
}

$main = new Main();
var_dump( $main->search(100) );
