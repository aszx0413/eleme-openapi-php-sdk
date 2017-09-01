<?php

namespace ElemeOpenApi\Api;

/**
 * 订单评论服务
 */
class UgcService extends RpcService
{

    /** 获取指定订单的评论
     * @param $order_id 订单id
     * @return mixed
     */
    public function get_order_rate_by_order_id($order_id)
    {
        return $this->client->call("eleme.ugc.getOrderRateByOrderId", array("orderId" => $order_id));
    }

    /** 获取指定订单的评论
     * @param $order_ids 订单id
     * @return mixed
     */
    public function get_order_rates_by_order_ids($order_ids)
    {
        return $this->client->call("eleme.ugc.getOrderRatesByOrderIds", array("orderIds" => $order_ids));
    }

    /** 获取未回复的评论
     * @param $order_ids 订单id
     * @return mixed
     */
    public function get_unreply_order_rates_by_order_ids($order_ids)
    {
        return $this->client->call("eleme.ugc.getUnreplyOrderRatesByOrderIds", array("orderIds" => $order_ids));
    }

    /** 获取指定店铺的评论
     * @param $shop_id  餐厅id
     * @param $start_time   开始时间,只能查询最近90天的数据
     * @param $end_time   结束时间
     * @param $offset 页面偏移量
     * @param $page_size 页面大小
     * @return mixed
     */
    public function get_order_rates_by_shop_id($shop_id, $start_time, $end_time, $offset, $page_size)
    {
        return $this->client->call("eleme.ugc.getOrderRatesByShopId", array("shopId" => $shop_id, "startTime" => $start_time, "endTime" => $end_time, "offset" => $offset, "pageSize" => $page_size));
    }

    /** 获取指定店铺的评论
     * @param $shop_ids 店铺id
     * @param $start_time   开始时间,只能查询最近90天的数据
     * @param $end_time   结束时间
     * @param $offset 页面偏移量
     * @param $page_size 页面大小
     * @return mixed
     */
    public function get_order_rates_by_shop_ids($shop_ids, $start_time, $end_time, $offset, $page_size)
    {
        return $this->client->call("eleme.ugc.getOrderRatesByShopIds", array("shopIds" => $shop_ids, "startTime" => $start_time, "endTime" => $end_time, "offset" => $offset, "pageSize" => $page_size));
    }

    /** 获取未回复的评论
     * @param $shop_ids 店铺id
     * @param $start_time   开始时间,只能查询最近90天的数据
     * @param $end_time   结束时间
     * @param $offset 页面偏移量
     * @param $page_size 页面大小
     * @return mixed
     */
    public function get_unreply_order_rates_by_shop_ids($shop_ids, $start_time, $end_time, $offset, $page_size)
    {
        return $this->client->call("eleme.ugc.getUnreplyOrderRatesByShopIds", array("shopIds" => $shop_ids, "startTime" => $start_time, "endTime" => $end_time, "offset" => $offset, "pageSize" => $page_size));
    }

    /** 获取店铺的满意度评价信息
     * @param $shop_id  餐厅id
     * @param $score 满意度,取值范围为1~5，1为最不满意，5为非常满意
     * @param $start_time   开始时间,只能查询最近90天的数据
     * @param $end_time   结束时间
     * @param $offset 页面偏移量
     * @param $page_size 页面大小
     * @return mixed
     */
    public function get_order_rates_by_shop_and_rating($shop_id, $score, $start_time, $end_time, $offset, $page_size)
    {
        return $this->client->call("eleme.ugc.getOrderRatesByShopAndRating", array("shopId" => $shop_id, "score" => $score, "startTime" => $start_time, "endTime" => $end_time, "offset" => $offset, "pageSize" => $page_size));
    }

    /** 获取单个商品的评论
     * @param $item_id  商品id
     * @param $start_time   开始时间,只能查询最近90天的数据
     * @param $end_time   结束时间
     * @param $offset 页面偏移量
     * @return mixed
     */
    public function get_item_rates_by_item_id($item_id, $start_time, $end_time, $offset)
    {
        return $this->client->call("eleme.ugc.getItemRatesByItemId", array("itemId" => $item_id, "startTime" => $start_time, "endTime" => $end_time, "offset" => $offset));
    }

    /** 获取多个商品的评论
     * @param $item_ids 商品id
     * @param $start_time   开始时间,只能查询最近90天的数据
     * @param $end_time   结束时间
     * @param $offset 页面偏移量
     * @param $page_size 页面大小
     * @return mixed
     */
    public function get_item_rates_by_item_ids($item_ids, $start_time, $end_time, $offset, $page_size)
    {
        return $this->client->call("eleme.ugc.getItemRatesByItemIds", array("itemIds" => $item_ids, "startTime" => $start_time, "endTime" => $end_time, "offset" => $offset, "pageSize" => $page_size));
    }

    /** 获取多个商品未回复的评论
     * @param $item_ids 店铺id
     * @param $start_time   开始时间,只能查询最近90天的数据
     * @param $end_time   结束时间
     * @param $offset 页面偏移量
     * @param $page_size 页面大小
     * @return mixed
     */
    public function get_unreply_item_rates_by_item_ids($item_ids, $start_time, $end_time, $offset, $page_size)
    {
        return $this->client->call("eleme.ugc.getUnreplyItemRatesByItemIds", array("itemIds" => $item_ids, "startTime" => $start_time, "endTime" => $end_time, "offset" => $offset, "pageSize" => $page_size));
    }

    /** 回复指定类型的评论
     * @param $rate_id 评论编号
     * @param $reply_type 评论类型
     * @param $reply 回复的内容
     * @return mixed
     */
    public function reply_rate_by_rate_id($rate_id, $reply_type, $reply)
    {
        return $this->client->call("eleme.ugc.replyRateByRateId", array("rateId" => $rate_id, "replyType" => $reply_type, "reply" => $reply));
    }

    /** 回复指定类型的评论
     * @param $rate_ids  评论编号
     * @param $reply_type 评论类型
     * @param $reply 回复的内容
     * @return mixed
     */
    public function reply_rate_by_rate_ids($rate_ids, $reply_type, $reply)
    {
        return $this->client->call("eleme.ugc.replyRateByRateIds", array("rateIds" => $rate_ids, "replyType" => $reply_type, "reply" => $reply));
    }

    /** 回复订单未回复的评论
     * @param $order_id 订单id
     * @param $reply 回复内容
     * @return mixed
     */
    public function reply_rate_by_order_id($order_id, $reply)
    {
        return $this->client->call("eleme.ugc.replyRateByOrderId", array("orderId" => $order_id, "reply" => $reply));
    }

    /** 批量回复订单未回复的评论
     * @param $order_ids 订单id
     * @param $reply 回复信息
     * @return mixed
     */
    public function reply_comment_by_order_ids($order_ids, $reply)
    {
        return $this->client->call("eleme.ugc.replyCommentByOrderIds", array("orderIds" => $order_ids, "reply" => $reply));
    }

    /** 回复商品回复的评论
     * @param $item_id 商品id
     * @param $reply 回复内容
     * @param $start_time   开始时间,只能查询最近90天的数据
     * @param $end_time   结束时间
     * @return mixed
     */
    public function reply_rates_by_item_id($item_id, $reply, $start_time, $end_time)
    {
        return $this->client->call("eleme.ugc.replyRatesByItemId", array("itemId" => $item_id, "reply" => $reply, "startTime" => $start_time, "endTime" => $end_time));
    }

    /** 回复多个商品评论
     * @param $item_ids 商品d
     * @param $reply 回复信息
     * @param $start_time 开始时间,只能查询最近90天的数据
     * @param $end_time 结束时间
     * @return mixed
     */
    public function reply_rates_by_item_ids($item_ids, $reply, $start_time, $end_time)
    {
        return $this->client->call("eleme.ugc.replyRatesByItemIds", array("itemIds" => $item_ids, "reply" => $reply, "startTime" => $start_time, "endTime" => $end_time));
    }

}
