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
            $header = imap_headerinfo($mbox,$email);
  
            // Get email header information
            $overview = imap_fetch_overview($mbox, $email, 0);
            // Get email body
            $message = imap_fetchbody($mbox, $email, '1');
            $message = str_replace("\r\n"," ",$message);
            $date = date("d F, Y", strtotime($overview[0]->date));
            $data[$email]=[
                "overview"=>$overview,
                "message"=>$message,
                "date"=>$date
            ];
        }
        // now check fetch structure 
        foreach($mails as $email) {
    //         $structure = imap_fetchstructure($mbox,$email);
    //         global $htmlmsg,$plainmsg,$charset,$attachments;
    //         $partno = 0;
    //         $data = ($partno)?
    //         imap_fetchbody($mbox,$email,$partno):  // multipart
    //         imap_body($mbox,$email);
        
    //         if ($structure->encoding==4)
    //     $data = quoted_printable_decode($data);
    // elseif ($structure->encoding==3)
    //     $data = base64_decode($data);
           
    //     $params = array();
    //     if ($structure->parameters)
    //         foreach ($structure->parameters as $x)
    //             $params[strtolower($x->attribute)] = $x->value;
    //     if ($structure->ifdparameters)
    //         foreach ($structure->ifdparameters as $x)
    //             $params[strtolower($x->attribute)] = $x->value;
    
    }
    foreach ($mails as $emailId) {
        $emailStructure = imap_fetchstructure($mbox, $emailId);
    $saveFolderPath = '../public/';
        if (isset($emailStructure->parts) && count($emailStructure->parts) > 0) {
            for ($i = 0; $i < count($emailStructure->parts); $i++) {
                $part = $emailStructure->parts[$i];
    dd($part);
                if (isset($part->disposition) && strtoupper($part->disposition) === 'ATTACHMENT') {
                    $filename = $part->dparameters[0]->value;
                    $attachmentData = imap_fetchbody($mbox, $emailId, $i + 1);
  
                    // Save the attachment to the public folder
                    $savePath = $saveFolderPath . $filename;
                    file_put_contents($savePath, $attachmentData);
    
                    echo "Attachment saved: $filename\n";
                }
            }
        }
    }
    
 
        echo $message;
        dd($data);
        imap_close($mbox);
        //imap close closes the stream of imap
    }
    
}
