<?php


namespace IT;


class Render
{
    public static function generateItemList($data){
        echo "<ul>";
        foreach ($data as $item){
            if(is_null($item)){

            }else
                echo "<li>$item</li>";
        }
        echo "</ul>";
    }
}