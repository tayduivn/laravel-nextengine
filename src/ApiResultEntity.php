<?php

namespace ShibuyaKosuke\LaravelNextEngine;

use Carbon\Carbon;
use phpDocumentor\Reflection\Types\Boolean;
use ShibuyaKosuke\LaravelNextEngine\Entities\EntityContract;

/**
 * Class ApiResultEntity
 * @package ShibuyaKosuke\LaravelNextEngine
 *
 * @property boolean result
 * @property integer count
 * @property array|EntityContract[] data
 * @property string access_token
 * @property Carbon access_token_end_date
 * @property string refresh_token
 * @property Carbon refresh_token_end_date
 */
class ApiResultEntity
{
    /**
     * 結果
     *
     * @var Boolean
     */
    private $result;

    /**
     * 件数
     *
     * @var integer
     */
    private $count;

    /**
     * データ
     *
     * @var array|EntityContract[]
     */
    private $data;

    /**
     * アクセストークン
     *
     * @var string
     */
    private $access_token;

    /**
     * アクセストークン期限
     *
     * @var Carbon
     */
    private $access_token_end_date;

    /**
     * リフレッシュトークン
     *
     * @var string
     */
    private $refresh_token;

    /**
     * リフレッシュトークン期限
     *
     * @var Carbon
     */
    private $refresh_token_end_date;

    /**
     * ApiResultEntity constructor.
     * @param array $response
     */
    public function __construct(array $response)
    {
        foreach ($response as $name => $value) {
            $this->$name = $value;
        }
    }

    /**
     * @param string $name
     * @return mixed
     */
    public function __get(string $name)
    {
        return $this->$name;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set(string $name, $value)
    {
        $this->$name = $value;
    }

    /**
     * @param string $name
     * @return bool
     */
    public function __isset(string $name): bool
    {
        return isset($this->$name);
    }
}