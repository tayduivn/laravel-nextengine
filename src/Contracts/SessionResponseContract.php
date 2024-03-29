<?php

namespace ShibuyaKosuke\LaravelNextEngine\Contracts;

/**
 * Interface SessionResponseContract
 */
interface SessionResponseContract
{
    /**
     * データをセッションに保存する
     */
    public function setSessionData(): void;

    /**
     * セッション保存用のキーを取得
     *
     * @return string
     */
    public function getSessionKey(): string;

    /**
     * セッションに保存したデータを取得する
     *
     * @param string $key セッションキー
     * @return mixed
     */
    public static function getSessionData(string $key);
}
