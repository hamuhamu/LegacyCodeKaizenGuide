<?php
function PostReceiveError($type, $errorCode)
{
    throw new Exception('本番環境以外はエラーにする');
}

class CAasyncSslRec
{
    protected function PostReceiveError($type, $errorCode)
    {
        PostReceiveError($type, $errorCode);
    }

    public function init()
    {
        /**
         * 何かしらの処理
         */
        $type = 'タイプ';
        $errorCode = '400';
        // PostReceiveErrorはグローバル関数なので、直接呼び出すとテストしづらい
        // そのため、ラップしてフェイクできるようにする
        $this->PostReceiveError($type, $errorCode);

        return true;
    }
}

