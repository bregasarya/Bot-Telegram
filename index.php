<?php
    include_once("koneksi.php");
    $content = file_get_contents("php://input");
    
    if($content){

        //token api telegram
        $token ="5574075820:AAE_vPnoipMEKruL3L2hYL2QeyC9EZY0jAk";
        //API telegram
        $api = "https://api.telegram.org/bot$token/";
        //https://api.telegram.org/bot5574075820:AAE_vPnoipMEKruL3L2hYL2QeyC9EZY0jAk
        //test api :https://api.telegram.org/bot5574075820:AAE_vPnoipMEKruL3L2hYL2QeyC9EZY0jAk/setwebhook?url=https://cb5a-2001-448a-50e0-e761-1102-818b-6cc9-c503.ap.ngrok.io/bot_tele/
        //web interface : http://127.0.0.1:4040 

        $update = json_decode($content, true);
        $chat_id = $update['message']['chat']['id'];
        $text = $update['message']['text'];
        $chatName = $update['message']['chat']['first_name'];
            
        if($text == "/maxrupiah"){
            $harga = mysqli_query($mysqli, "SELECT MAX(hargaidr) as total from btc");
            while ($row = mysqli_fetch_assoc($harga)){
            $balasan = $row['total'];
            file_get_contents($api."sendmessage?chat_id=$chat_id&text=Hallo $chatName,Harga Tertinggi Rp.$balasan");
            }
        }else if($text == "/start"){
            file_get_contents($api."sendmessage?chat_id=$chat_id&text=Hallo $chatName, Silahkan Masukan Kata Kunci : /maxrupiah, /maxdollar, /jumlahdata, /lastsell, /level");
        }else if($text == "/level"){
            file_get_contents($api."sendmessage?chat_id=$chat_id&text=Hallo $chatName, Silahkan Masukan Kata Kunci : /crash1, /crash2, /diamondcrash, /goldencrash1, /goldencrash2, /megacrash1, /megacrash2, /megamoon1, /megamoon2, /moon1, /moon2, /recover1, /recover2, /sama, /supercrash1, /supercrash2, /supermoon1, /supermoon2, /ultracrash1, /ultracrash2, /ultramoon1, /ultramoon2, /wajar1, /wajar2");            
        }else if($text == "/maxdollar"){
            $harga = mysqli_query($mysqli, "SELECT MAX(hargausdt) as total from btc");
            while ($row = mysqli_fetch_assoc($harga)){
            $balasan = $row['total'];
            file_get_contents($api."sendmessage?chat_id=$chat_id&text=Hallo $chatName,Harga Tertinggi $$balasan");
            }
        }else if($text == "/jumlahdata"){
            $harga = mysqli_query($mysqli, "SELECT COUNT(*) as total from btc");
            while ($row = mysqli_fetch_assoc($harga)){
            $balasan = $row['total'];
            file_get_contents($api."sendmessage?chat_id=$chat_id&text=Hallo $chatName, Jumlah Data $balasan");
            }
        }else if($text == "/lastsell"){
            $harga = mysqli_query($mysqli, "SELECT MAX(lastsell) as total from btc");
            while ($row = mysqli_fetch_assoc($harga)){
            $balasan = $row['total'];
            file_get_contents($api."sendmessage?chat_id=$chat_id&text=Hallo $chatName, Penjualan Terakhir Rp.$balasan");
            }
        }else if($text == "/crash1"){
            $balasan = "https://postimg.cc/f3zNXwZ2";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");

        }else if($text == "/crash2"){
            $balasan = "https://postimg.cc/QH8w0fvC";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/diamondcrash"){
            $balasan = "https://postimg.cc/ykxDz53p";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");

        }else if($text == "/goldencrash1"){
            $balasan = "https://postimg.cc/2qQ6wNgy";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/goldencrash2"){
            $balasan = "https://postimg.cc/t7MXFg7D";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/megacrash1"){
            $balasan = "https://postimg.cc/p9rv9bx3";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/megacrash2"){
            $balasan = "https://postimg.cc/VdHWyp4D";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/megamoon1"){
            $balasan = "https://postimg.cc/8JHLZ0jd";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/megamoon2"){
            $balasan = "https://postimg.cc/bsd1RL8b";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/moon1"){
            $balasan = "https://postimg.cc/t1d6gMt0";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/moon2"){
            $balasan = "https://postimg.cc/crK83HMB";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/recover1"){
            $balasan = "https://postimg.cc/7GGyVpBd";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/recover2"){
            $balasan = "https://postimg.cc/JspVW1vS";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
            
        }else if($text == "/supercrash1"){
            $balasan = "https://postimg.cc/d7hXPG8T";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/supercrash2"){
            $balasan = "https://postimg.cc/VJ6ZnXZH";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/supermoon1"){
            $balasan = "https://postimg.cc/5Ywsbgjj";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/supermoon2"){
            $balasan = "https://postimg.cc/DSSknVhZ";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/ultracrash1"){
            $balasan = "https://postimg.cc/ZBTwY3Nc";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/ultracrash2"){
            $balasan = "https://postimg.cc/XX1s3rYf";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/ultramoon1"){
            $balasan = "https://postimg.cc/CZ44212f";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/ultramoon2"){
            $balasan = "https://postimg.cc/Cd54vwsz";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/wajar1"){
            $balasan = "https://postimg.cc/v4FLHfFV";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
        
        }else if($text == "/wajar2"){
            $balasan = "https://postimg.cc/LqvzTWqt";
            file_get_contents($api."sendPhoto?chat_id=$chat_id&photo=$balasan");
            
        }else{
            //Kirim Balasan
            file_get_contents($api."sendmessage?chat_id=$chat_id&text=Haii $chatName, yang kamu ketikan ".$text);
        }
        
    }else{
        echo "BtcNotificationBot (@BtcKel4_bot)";
    }
?>