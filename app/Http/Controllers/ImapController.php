<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImapController extends Controller
{
    public function imap(){
        //this is an algorith to fetch and list mail from gmail
        $mbox = imap_open ("{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX", "taxplextest@gmail.com", "nniiabtvmmfpgyjr") or die("can't connect: " . imap_last_error());
        // imap_open setup the connection for imap 
        $MC = imap_check($mbox);
        //imap checks gets date,driver,mailbox,no of msgs and no of recents
        $result = imap_fetch_overview($mbox,"1:{$MC->Nmsgs}",0);
        // imap fetch overview fetches all mailbox messages details
        foreach ($result as $overview) {
            echo "#{$overview->msgno} ({$overview->date}) - From: {$overview->from}
            {$overview->subject}\n";
        }
        $value = imap_body($mbox, $MC->Nmsgs);
        $value = imap_utf8($value);
        $info = imap_fetchstructure($mbox, $MC->Nmsgs);
// dd($info);
        $mails = imap_search($mbox, 'ALL');
        foreach ($mails as $email) {
            // Get email header information
            $overview = imap_fetch_overview($mbox, $email, 0);
            // Get email body
            $message = imap_fetchbody($mbox, $email, '1');
            $message = str_replace("\r\n"," ",$message);
            $date = date("d F, Y", strtotime($overview[0]->date));
        }
        echo $message;
        dd($message);
        imap_close($mbox);
        //imap close closes the stream of imap
    }
    
}
