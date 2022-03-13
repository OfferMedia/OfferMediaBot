<?php

ob_start();
include "lib.php";
include "db.php";
define('API_KEY','5158652498:AAEKGXuumJAabaobb33Fa3IubDPB5Cx0ceg');
//tokenni yozing
$admin = "1087657480";
//ozizni id raqamizni yozing
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

          $replyc= json_encode([
           'resize_keyboard'=>false,
                'force_reply' => true,
                'selective' => true
            ]);

$update = json_decode(file_get_contents('php://input'));
$efede = json_decode(file_get_contents('php://input'), true);
$message = $update->message;

// ask @TheDevProguy For free help
//files
$text = $message->text;
$photo = $update->message->photo;
$gif = $update->message->animation;
$video = $update->message->video;
$music = $update->message->audio;
$voice = $update->message->voice;
$sticker = $update->message->sticker;
$document = $update->message->document;

//group
$ctitle = $update->message->chat->title;
$cuname = $update->message->chat->username;
$chat_id = $update->message->chat->id;
$cid = $update->message->chat->id;
$turi = $update->message->chat->type;

$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;

//user
$ufname = $update->message->from->first_name;
$uname = $update->message->from->last_name;
$ulogin = $update->message->from->username;
$user_id = $update->message->from->id;

//reply

$id = $message->reply_to_message->from->id;   
$repmid = $message->reply_to_message->message_id; 
$repname = $message->reply_to_message->from->first_name;
$repulogin = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$sreply = $message->reply_to_message->text;
$mes_id = $update->message->message_id;
$from_id = $message->from->id;
$mid = $message->message_id;
$forid = $update->message->forward_from->message_id;
$edname = $editm ->from->first_name;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
//bu yerni o'zgartirishingiz mumkin.
$fadmin = $message->from->id;
$from = $message->from;

$new_chat_members = $message->new_chat_member->id;
$new_fname= $message->new_chat_member->first_name;
$username = $message->from->username;
$fname= $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
function inlinekeyboard($i,$t,$k) {
bot('sendMessage',[

'chat_id'=>$i,
'text'=>"$t",
'parse_mode'=>"HTML",
'reply_to_message_id'=>$mes_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>$k,
"resize_keyboard"=>true,'one_time_keyboard' => false,
])
]);
	}

if(!is_dir("db/users/$from_id")){
    mkdir("db/users/$from_id");
    saveusersdb($from_id,"num","empty");
    saveusersdb($from_id,"txnid","empty");
    saveusersdb($from_id,"chn","empty");
    saveusersdb($from_id,"chl","empty");
    saveusersdb($from_id,"tuser","empty");
    saveusersdb($from_id,"per","empty");
    saveusersdb($from_id,"com","empty");
    saveusersdb($from_id,"amo","empty");
    saveusersdb($from_id,"balance",0);
    saveusersdb($from_id,"time","0,0");
    saveusersdb($from_id,"conv","off");
    saveusersdb($from_id,"pamo","empty");
    saveusersdb($from_id,"comma","empty");
    admdb("totalusers",1);
}
$withkey = "馃洅 Send Money Panel";
$balancekey = "馃尭 Funds";
 $referkey = "";
 $withdrawkey = "";
 $statisticskey = "馃搳 Statistics";
 $cancelkey = "馃毇 Cancel";
 $joinedkey = "馃挜 joined";
 $bonuskey = "";
 $addk="鉃� Add Fund";
 $crtlif="馃挄 Create Lifafa";
 $chk="鉁� Check Status";
 $bkk = "馃敊 Back";
 $chlk="馃敆 Set Channel Username";
 $tuserk="馃懃 Set Total Users";
 $perk="馃捀 Set Per User Amount";
 $comk="馃棬锔� Set Lifafa Comment";
 $confk="鉁� Confirm";
 $deck="馃毇 Cancel";
 $payk="馃摚 Pay To Any One";
 $bulk="馃檶馃徎 Bulk Payment";
 $setp="馃檶馃徎 Set Number";
 $setam="馃捀 Set Amount";
 $setco="馃尭 Set Comment";
 $come = file_get_contents("https://api.telegram.org/bot".API_KEY."/getMe");
 $deco = json_decode($come,true);
 $botid = $deco["result"]["id"];
 $botusername = $deco["result"]["username"];
 //CODE JUST BEGIN IF ANY ERROR CONTACT THE @TheDevProguy
	//#1 START

if($text == "/start reg"){

Message($from_id,"<b>馃グ Hello $ufname  馃グ</b>");
inlinekeyboard($from_id,"<b>馃憠 Click To Register</b>",[[["text"=>"鉁� Register On Affiliate Web","url"=>"https://OfferMedia.in/reg.php?tk=$from_id"]]]);
}
elseif($text == "/start log"){
Message($from_id,"<b>馃グ Hello $ufname  馃グ</b>");
inlinekeyboard($from_id,"<b>馃憠 Click To Login</b>",[[["text"=>"鉁� Login On Affiliate Web","url"=>"https://OfferMedia.in/log.php?tk=$from_id"]]]);
}
elseif($text == "/start admin"){
Message($from_id,"<b>馃グ Hello $ufname  馃グ</b>");
inlinekeyboard($from_id,"<b>馃憠 Click To Login As Admin</b>",[[["text"=>"鉁� Login As Admin","url"=>"https://OfferMedia.in/admn.php?tk=$from_id"]]]);
   }else{
   if($text == "/start"){
   Message($from_id,"<b>馃グ Hello $ufname\n\n馃檪 Join @OfferMediaCamp 馃檪\n\n馃ゲYou are Not Redirected from Website 馃ゲ</b>");

  inlinekeyboard($from_id,"<b>馃憠Join Our Offical Channel (For More Update )</b>",[[["text"=>"馃敟 Join Channel","url"=>"https://telegram.me/OfferMediaCamp"]]]);
   }
}
      
?>