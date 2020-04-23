<?php

// This file is auto-generated, don't edit it. Thanks.
namespace Alipay\EasySDK\Payment\Page\Models;

use AlibabaCloud\Tea\Model;

class AlipayTradePagePayResponse extends Model{
    protected $_name = [
        'body' => 'body',
    ];
    public function validate() {
        Model::validateRequired('body', $this->body, true);
    }
    public function toMap() {
        $res = [];
        $res['body'] = $this->body;
        return $res;
    }
    /**
     * @param array $map
     * @return AlipayTradePagePayResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['body'])){
            $model->body = $map['body'];
        }
        return $model;
    }
    /**
     * @description 订单信息，Form表单形式
     * @var string
     */
    public $body;
}
