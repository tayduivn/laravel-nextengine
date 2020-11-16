<?php

namespace ShibuyaKosuke\LaravelNextEngine\Entities\ReceiveOrder;

use Carbon\Carbon;
use DomDocument;
use ShibuyaKosuke\LaravelNextEngine\Entities\EntityCommon;
use ShibuyaKosuke\LaravelNextEngine\Exceptions\NextEngineException;

/**
 * 受注伝票
 *
 * Class ReceiveOrderBase
 * @package ShibuyaKosuke\LaravelNextEngine\Entities
 *
 * @property integer receive_order_shop_id 店舗コード
 * @property integer receive_order_id 伝票番号
 * @property string receive_order_shop_cut_form_id 受注番号
 * @property Carbon receive_order_date 受注日
 * @property Carbon receive_order_import_date 取込日
 * @property string receive_order_important_check_id 重要チェック区分
 * @property string receive_order_important_check_name 重要チェック名
 * @property string receive_order_confirm_check_id 確認チェック区分
 * @property string receive_order_confirm_check_name 確認チェック名
 * @property string receive_order_confirm_ids 受注確認内容ID
 * @property string receive_order_mail_status メール送信状態値
 * @property string receive_order_gruoping_tag 受注分類タグ
 * @property string receive_order_import_type_id 取込種類区分
 * @property string receive_order_import_type_name 取込種類名
 * @property string receive_order_cancel_type_id 受注キャンセル区分
 * @property string receive_order_cancel_type_name 受注キャンセル名
 * @property Carbon receive_order_cancel_date 受注キャンセル日
 * @property string receive_order_order_status_id 受注状態区分
 * @property string receive_order_order_status_name 受注状態名
 * @property string receive_order_delivery_id 発送方法区分
 * @property string receive_order_delivery_name 発送方法名
 * @property string receive_order_payment_method_id 支払区分
 * @property string receive_order_payment_method_name 支払名
 * @property integer receive_order_total_amount 総合計
 * @property integer receive_order_tax_amount 税金
 * @property integer receive_order_charge_amount 手数料
 * @property integer receive_order_delivery_fee_amount 発送代
 * @property integer receive_order_other_amount 他費用
 * @property integer receive_order_point_amount ポイント数
 * @property integer receive_order_goods_amount 商品計
 * @property string receive_order_deposit_amount 入金額
 * @property string receive_order_deposit_type_id 入金状況区分
 * @property string receive_order_deposit_type_name 入金状況名
 * @property Carbon receive_order_deposit_date 入金日
 * @property string receive_order_note 備考
 * @property integer receive_order_include_possible_order_id 同梱候補伝票番号
 * @property integer receive_order_include_to_order_id 同梱先伝票番号
 * @property integer receive_order_multi_delivery_parent_order_id 複数配送親伝票番号
 * @property integer receive_order_divide_from_order_id 分割元伝票番号
 * @property integer receive_order_copy_from_order_id 複写元伝票番号
 * @property string receive_order_multi_delivery_parent_flag 複数配送親フラグ
 * @property Carbon receive_order_statement_delivery_instruct_printing_date 納品書印刷指示日
 * @property Carbon receive_order_statement_delivery_printing_date 納品書発行日
 * @property string receive_order_statement_delivery_text 納品書特記事項
 * @property Carbon receive_order_send_date 出荷確定日
 * @property Carbon receive_order_send_plan_date 出荷予定日
 * @property string receive_order_send_sequence 出荷順序
 * @property string receive_order_worker_text 作業用欄
 * @property string receive_order_picking_instruct ピッキング指示内容
 * @property Carbon receive_order_label_print_date ラベル発行日
 * @property string receive_order_label_print_flag ラベル発行フラグ
 * @property Carbon receive_order_hope_delivery_date 配達希望日
 * @property string receive_order_hope_delivery_time_slot_id 配達希望時間帯区分
 * @property string receive_order_hope_delivery_time_slot_name 配達希望時間帯名
 * @property string receive_order_delivery_method_id 便種区分
 * @property string receive_order_delivery_method_name 便種名
 * @property string receive_order_seal1_id シール1区分
 * @property string receive_order_seal1_name シール1名
 * @property string receive_order_seal2_id シール2区分
 * @property string receive_order_seal2_name シール2名
 * @property string receive_order_seal3_id シール3区分
 * @property string receive_order_seal3_name シール3名
 * @property string receive_order_seal4_id シール4区分
 * @property string receive_order_seal4_name シール4名
 * @property string receive_order_business_office_stop_id 営業止め区分
 * @property string receive_order_business_office_stop_name 営業止め名
 * @property string receive_order_invoice_id 送り状区分
 * @property string receive_order_invoice_name 送り状名
 * @property string receive_order_temperature_id 温度区分
 * @property string receive_order_temperature_name 温度名
 * @property string receive_order_business_office_name 営業所名
 * @property string receive_order_gift_flag ギフトフラグ
 * @property string receive_order_delivery_cut_form_id 発送伝票番号
 * @property string receive_order_delivery_cut_form_note 発送伝票備考欄
 * @property string receive_order_credit_type_id クレジット区分
 * @property string receive_order_credit_type_name クレジット名
 * @property string receive_order_credit_approval_no クレジット承認番号
 * @property string receive_order_credit_approval_amount クレジット承認額
 * @property string receive_order_credit_approval_type_id クレジット承認区分
 * @property string receive_order_credit_approval_type_name クレジット承認名
 * @property Carbon receive_order_credit_approval_date クレジット承認日
 * @property integer receive_order_credit_approval_rate クレジット承認時レート
 * @property integer receive_order_credit_number_payments クレジット支払い回数
 * @property string receive_order_credit_authorization_center_id クレジット承認センター区分
 * @property string receive_order_credit_authorization_center_name クレジット承認センター名
 * @property Carbon receive_order_credit_approval_fax_printing_date クレジット承認FAX印刷日
 * @property string receive_order_customer_type_id 顧客区分
 * @property string receive_order_customer_type_name 顧客名
 * @property string receive_order_customer_id 顧客コード
 * @property string receive_order_purchaser_name 購入者名
 * @property string receive_order_purchaser_kana 購入者カナ
 * @property string receive_order_purchaser_zip_code 購入者郵便番号
 * @property string receive_order_purchaser_address1 購入者住所1
 * @property string receive_order_purchaser_address2 購入者住所2
 * @property string receive_order_purchaser_tel 購入者電話番号
 * @property string receive_order_purchaser_fax 購入者FAX
 * @property string receive_order_purchaser_mail_address 購入者メールアドレス
 * @property string receive_order_consignee_name 送り先名
 * @property string receive_order_consignee_kana 送り先カナ
 * @property string receive_order_consignee_zip_code 送り先郵便番号
 * @property string receive_order_consignee_address1 送り先住所1
 * @property string receive_order_consignee_address2 送り先住所2
 * @property string receive_order_consignee_tel 送り先電話番号
 * @property string receive_order_consignee_fax 送り先FAX
 * @property integer receive_order_important_check_pic_id 重要チェック担当者ID
 * @property string receive_order_important_check_pic_name 重要チェック担当者名
 * @property integer receive_order_pic_id 受注担当者ID
 * @property string receive_order_pic_name 受注担当者名
 * @property integer receive_order_send_pic_id 出荷担当者ID
 * @property string receive_order_send_pic_name 出荷担当者名
 * @property Carbon receive_order_creation_date 作成日
 * @property Carbon receive_order_last_modified_date 最終更新日
 * @property Carbon receive_order_last_modified_null_safe_date 最終更新日
 * @property integer receive_order_creator_id 作成担当者ID
 * @property string receive_order_creator_name 作成担当者名
 * @property integer receive_order_last_modified_by_id 最終更新者ID
 * @property integer receive_order_last_modified_by_null_safe_id 最終更新者ID
 * @property string receive_order_last_modified_by_name 最終更新者名
 * @property string receive_order_last_modified_by_null_safe_name 最終更新者名
 */
class ReceiveOrderBase extends EntityCommon
{
    /**
     * 更新用キー
     */
    public const KEY = 'receiveorder_base';

    /**
     * @var string 検索エンドポイント
     */
    public static $endpoint_search = '/api_v1_receiveorder_base/search';

    /**
     * @var string 件数エンドポイント
     */
    public static $endpoint_count = '/api_v1_receiveorder_base/count';

    /**
     * @var string 更新エンドポイント
     */
    public static $endpoint_update = '/api_v1_receiveorder_base/update';

    /**
     * プロパティのリスト
     *
     * @var string[]
     */
    public static $properties = [
        'receive_order_shop_id',
        'receive_order_id',
        'receive_order_shop_cut_form_id',
        'receive_order_date',
        'receive_order_import_date',
        'receive_order_important_check_id',
        'receive_order_important_check_name',
        'receive_order_confirm_check_id',
        'receive_order_confirm_check_name',
        'receive_order_confirm_ids',
        'receive_order_mail_status',
        'receive_order_gruoping_tag',
        'receive_order_import_type_id',
        'receive_order_import_type_name',
        'receive_order_cancel_type_id',
        'receive_order_cancel_type_name',
        'receive_order_cancel_date',
        'receive_order_order_status_id',
        'receive_order_order_status_name',
        'receive_order_delivery_id',
        'receive_order_delivery_name',
        'receive_order_payment_method_id',
        'receive_order_payment_method_name',
        'receive_order_total_amount',
        'receive_order_tax_amount',
        'receive_order_charge_amount',
        'receive_order_delivery_fee_amount',
        'receive_order_other_amount',
        'receive_order_point_amount',
        'receive_order_goods_amount',
        'receive_order_deposit_amount',
        'receive_order_deposit_type_id',
        'receive_order_deposit_type_name',
        'receive_order_deposit_date',
        'receive_order_note',
        'receive_order_include_possible_order_id',
        'receive_order_include_to_order_id',
        'receive_order_multi_delivery_parent_order_id',
        'receive_order_divide_from_order_id',
        'receive_order_copy_from_order_id',
        'receive_order_multi_delivery_parent_flag',
        'receive_order_statement_delivery_instruct_printing_date',
        'receive_order_statement_delivery_printing_date',
        'receive_order_statement_delivery_text',
        'receive_order_send_date',
        'receive_order_send_plan_date',
        'receive_order_send_sequence',
        'receive_order_worker_text',
        'receive_order_picking_instruct',
        'receive_order_label_print_date',
        'receive_order_label_print_flag',
        'receive_order_hope_delivery_date',
        'receive_order_hope_delivery_time_slot_id',
        'receive_order_hope_delivery_time_slot_name',
        'receive_order_delivery_method_id',
        'receive_order_delivery_method_name',
        'receive_order_seal1_id',
        'receive_order_seal1_name',
        'receive_order_seal2_id',
        'receive_order_seal2_name',
        'receive_order_seal3_id',
        'receive_order_seal3_name',
        'receive_order_seal4_id',
        'receive_order_seal4_name',
        'receive_order_business_office_stop_id',
        'receive_order_business_office_stop_name',
        'receive_order_invoice_id',
        'receive_order_invoice_name',
        'receive_order_temperature_id',
        'receive_order_temperature_name',
        'receive_order_business_office_name',
        'receive_order_gift_flag',
        'receive_order_delivery_cut_form_id',
        'receive_order_delivery_cut_form_note',
        'receive_order_credit_type_id',
        'receive_order_credit_type_name',
        'receive_order_credit_approval_no',
        'receive_order_credit_approval_amount',
        'receive_order_credit_approval_type_id',
        'receive_order_credit_approval_type_name',
        'receive_order_credit_approval_date',
        'receive_order_credit_approval_rate',
        'receive_order_credit_number_payments',
        'receive_order_credit_authorization_center_id',
        'receive_order_credit_authorization_center_name',
        'receive_order_credit_approval_fax_printing_date',
        'receive_order_customer_type_id',
        'receive_order_customer_type_name',
        'receive_order_customer_id',
        'receive_order_purchaser_name',
        'receive_order_purchaser_kana',
        'receive_order_purchaser_zip_code',
        'receive_order_purchaser_address1',
        'receive_order_purchaser_address2',
        'receive_order_purchaser_tel',
        'receive_order_purchaser_fax',
        'receive_order_purchaser_mail_address',
        'receive_order_consignee_name',
        'receive_order_consignee_kana',
        'receive_order_consignee_zip_code',
        'receive_order_consignee_address1',
        'receive_order_consignee_address2',
        'receive_order_consignee_tel',
        'receive_order_consignee_fax',
        'receive_order_important_check_pic_id',
        'receive_order_important_check_pic_name',
        'receive_order_pic_id',
        'receive_order_pic_name',
        'receive_order_send_pic_id',
        'receive_order_send_pic_name',
        'receive_order_creation_date',
        'receive_order_last_modified_date',
        'receive_order_last_modified_null_safe_date',
        'receive_order_creator_id',
        'receive_order_creator_name',
        'receive_order_last_modified_by_id',
        'receive_order_last_modified_by_null_safe_id',
        'receive_order_last_modified_by_name',
        'receive_order_last_modified_by_null_safe_name',
    ];

    /**
     * 日付型のプロパティ
     *
     * @var string[]
     */
    public static $dates = [
        'receive_order_date',
        'receive_order_import_date',
        'receive_order_cancel_date',
        'receive_order_deposit_date',
        'receive_order_statement_delivery_instruct_printing_date',
        'receive_order_statement_delivery_printing_date',
        'receive_order_send_date',
        'receive_order_send_plan_date',
        'receive_order_label_print_date',
        'receive_order_hope_delivery_date',
        'receive_order_credit_approval_date',
        'receive_order_credit_approval_fax_printing_date',
        'receive_order_creation_date',
        'receive_order_last_modified_date',
        'receive_order_last_modified_null_safe_date',
    ];

    /**
     * 変更をXMLに変換する
     *
     * @param ReceiveOrderBase $receiveOrderBase
     * @param ReceiveOrderOption|null $receiveOrderOption
     * @param array|ReceiveOrderRow[] $receiveOrderRows
     * @return string
     * @throws NextEngineException
     */
    public static function toXml(ReceiveOrderBase $receiveOrderBase, ReceiveOrderOption $receiveOrderOption = null, array $receiveOrderRows = []): string
    {
        foreach ($receiveOrderRows as $receiveOrderRow) {
            if (!$receiveOrderRow instanceof ReceiveOrderRow) {
                throw new NextEngineException('Invalid argument 3 is not type: ' . ReceiveOrderRow::class);
            }
        }
        // DOMオブジェクト作成
        $dom = new DomDocument('1.0');
        $dom->encoding = "UTF-8";

        // 出力XMLを改行
        $dom->formatOutput = true;

        $root = $dom->appendChild($dom->createElement('root'));

        // OrderBase
        $receiveorder_base = $dom->createElement('receiveorder_base');
        foreach ($receiveOrderBase->getDirties() as $key => $value) {
            $receiveorder_base->appendChild($dom->createElement($key, $value));
        }
        $root->appendChild($receiveorder_base);

        // OrderOption
        if ($receiveOrderOption && $receiveOrderOption->getDirties()) {
            $receiveorder_option = $dom->createElement('receiveorder_option');
            foreach ($receiveOrderOption->getDirties() as $key => $value) {
                $receiveorder_option->appendChild($dom->createElement($key, $value));
            }
            $root->appendChild($receiveorder_option);
        }

        // OrderRow
        $isDirty = false;
        foreach ($receiveOrderRows as $receiveOrderRow) {
            if ($receiveOrderRow->getDirties()) {
                $isDirty = true;
            }
        }
        if ($isDirty) {
            $receiveorder_row = $dom->createElement('receiveorder_row');
            foreach ($receiveOrderRows as $receiveOrderRow) {
                if (!$receiveOrderRow->getDirties()) {
                    continue;
                }
                $receive_order_row_no = $dom->createElement("receive_order_row_no");
                $receive_order_row_no->setAttribute('value', $receiveOrderRow->receive_order_row_no);

                $receiveorder_row->appendChild($receive_order_row_no);

                foreach ($receiveOrderRow->getDirties() as $key => $value) {
                    $receive_order_row_no->appendChild($dom->createElement($key, $value));
                }
            }
            $root->appendChild($receiveorder_row);
        }

        return $dom->saveXML();
    }
}