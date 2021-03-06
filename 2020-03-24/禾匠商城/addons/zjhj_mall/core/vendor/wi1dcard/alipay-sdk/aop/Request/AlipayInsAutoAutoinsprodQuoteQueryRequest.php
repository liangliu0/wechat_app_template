<?php
/**
 * ALIPAY API: alipay.ins.auto.autoinsprod.quote.query request
 *
 * @author auto create
 *
 * @since  1.0, 2018-01-09 12:03:04
 */

namespace Alipay\Request;

class AlipayInsAutoAutoinsprodQuoteQueryRequest extends AbstractAlipayRequest
{
    /**
     * 查询报价详情接口
     **/
    private $bizContent;

    public function setBizContent($bizContent)
    {
        $this->bizContent = $bizContent;
        $this->apiParams['biz_content'] = $bizContent;
    }

    public function getBizContent()
    {
        return $this->bizContent;
    }
}
