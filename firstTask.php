<?php
class SocksMachine
{
    public function countUnpaired(array $socks)
    {
        sort($socks);
        $i = count($socks) - 2;
        while ($i>=0){
            if ($i != count($socks)-1 && $socks[$i] == $socks[$i+1]){
                unset($socks[$i + 1]);
                unset($socks[$i]);
                $i--;
            }
            $i--;
        }
        return count($socks);
    }
}
?>