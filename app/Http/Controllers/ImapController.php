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
        $h = imap_header($mbox);
        dd($h);
        //imap checks gets date,driver,mailbox,no of msgs and no of recents
        $result = imap_fetch_overview($mbox,"1:{$MC->Nmsgs}",0);
        // imap fetch overview fetches all mailbox messages details
        foreach ($result as $overview) {
            echo "#{$overview->msgno} ({$overview->date}) - From: {$overview->from}
            {$overview->subject}\n";
        }
        $value = imap_body($mbox, $MC->Nmsgs);
        // dd($value);
        // $value = imap_base64($value);
        // dd($value);
        $value = imap_utf8($value);
        $info = imap_fetchstructure($mbox, $MC->Nmsgs);
    
// dd($info);
        // $mails = imap_search($mbox, 'ALL');
        // 'SINCE "2023-7-21"' , 'ALL', 'BEFORE "2023-7-21"' , 'ON "2023-7-21"', 'FROM "anushil.karki34@gmail.com"',UNSEEN
        // 'TO "anushil.karki34@gmail.com"'
        $mails = imap_search($mbox,'ALL');
   // set uid to total count if count incresed then fetch remaining email else donot fetch
   // uid = 0 
   $uid = imap_uid($mbox,2);
   dd($uid);
        foreach ($mails as $email) {
            //uid = uid + 1 
            $header = imap_headerinfo($mbox,$email);
            $uid = imap_uid($mbox,$email);
       
            // dd($header);
            // $head = imap_fetchheader($mbox,$email);
        
        //    dd($head);

        
            // Get email header information
           
            $emailStructure = imap_fetchstructure($mbox, $email);
            // dd($emailStructure);
            $encoding = $emailStructure->encoding;

    // Fetch the email body based on the encoding type
    switch ($encoding) {
        case 0: // 7bit
            foreach ($emailStructure->parts as $partNum => $partData) {
                if($partData->encoding==3){
                    $body = imap_fetchbody($mbox, $email, 1.1);
                }
                elseif($partData->encoding==4){
                    $body = imap_fetchbody($mbox, $email, 1);
                }
                else {
                    $body = imap_fetchbody($mbox, $email, 1);
                }
            }
            break;
        //     $body = imap_fetchbody($mbox, $email, 1);
        //    $body = quoted_printable_decode($body);
        // case 1: // 8bit
        // case 2: // Binary
        //     $body = imap_fetchbody($mbox, $email, 1);
        //     break;
        // case 3: // Base64
        //     $body = imap_fetchbody($mbox, $email, 1.1);
        //     // $body = base64_decode($email_body);
        //     break;
        // case 4: // Quoted-Printable
        //     $body = imap_fetchbody($mbox, $email, 1);
        //     // $body = quoted_printable_decode($email_body);
        //     break;
        // case 5: // Other
        //     $body = imap_fetchbody($mbox, $email, 1);
        //     break;
        default:
            $body = imap_body($mbox, $email);
            $body = quoted_printable_decode($body);
            break;
    }

// dd($emailStructure);

// if($emailStructure->type!=0){
//     if ($emailStructure->encoding==3){
//         $body = imap_fetchbody($mbox, $email,1.1);
//         $body=base64_decode($body);
//     }
//         //decode if quoted printable
//       elseif ($emailStructure->encoding==4){
//             $body = imap_fetchbody($mbox, $email,1);
//             $body=quoted_printable_decode($body);
//         }
//         else {
//             $body = imap_fetchbody($mbox, $email,1.1);
         
//         }
// }
// if($emailStructure->type==0){
//     dd(1);
//     //decode text
//     //if QUOTED-PRINTABLE
//     if ($emailStructure->encoding==3){
//         $body = imap_fetchbody($mbox, $email,1.1);
//         $body=base64_decode($body);
//         dd($body);
//     }
//         //decode if quoted printable
//       elseif ($emailStructure->encoding==4){
//             $body = imap_fetchbody($mbox, $email,1);
//             $body=quoted_printable_decode($body);
//             dd($body);
//         }
//         else {
//             $body = imap_fetchbody($mbox, $email,1);
//             dd($body);
         
//         }
// }
// dd($body);
            // dd($emailStructure->type); type 0 = plaIN TYPE=1 = MULTIPART
            //quoted printable = 4 
            // if ($emailStructure->encoding === 4) {
            //     // Decode Quoted Printable
            //     $body = imap_fetchbody($mbox, $email,1);
            //     // $message = quoted_printable_decode($body);
            // } 
            // elseif ($emailStructure->encoding === 0) {
            //     // 7bit = 0
            //     $body = imap_fetchbody($mbox, $email,1.1);
            //     $message = $body;
            //     // $message = quoted_printable_decode($body);
            // }
            // elseif ($emailStructure->encoding === 1) {
            //     // 8bit = 1
            //     $body = imap_fetchbody($mbox, $email,1);
            //     // $message = imap_8bit($body);
            // }
            // elseif ($emailStructure->encoding === 3) {
            //     // Decode Base64 = 3
            //     $body = imap_fetchbody($mbox, $email,1.1);
            //     $message = $body;
            //     // $message = base64_decode($body);
            // } else {
            //     // Assume plain text if no special encoding
            //     $body = imap_fetchbody($mbox, $email,1);
            //     $message = $body;
            // }
        //     if($emailStructure->type==0){
        //          $message = imap_fetchbody($mbox, $email, '1');
        //     }
        //     if($emailStructure->type==1){
        //         $message = imap_fetchbody($mbox, $email, '1.1');
        //    }
            // else
            // {
            //     $message = imap_fetchbody($mbox, $email, '1.1');
            // }
            // Get email body
            // $message = imap_fetchbody($mbox, $email, '1');
            //fetch body with set 1 works for plain text and 1.1 for attachment messages
            // $message = imap_fetchbody($mbox, $email, '1.1');
            $body = str_replace("\r\n"," ",$body);
            $body = strip_tags($body);
          
            $date = date("d F, Y", strtotime($result[0]->date));
            $data[$email]=[
                "overview"=>$result,
                "message"=>$body,
                "date"=>$date,
                "type"=>$emailStructure->type,
                "encoding"=>$emailStructure->encoding
            ];
        }
        dd($data);
        // now check fetch structure 
        // foreach($mails as $email) {
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
    
    // }

    // foreach ($mails as $emailId) {
    //     $emailStructure = imap_fetchstructure($mbox, $emailId);
    //     dd($emailStructure);
    // $saveFolderPath = '../public/';
    //     if (isset($emailStructure->parts) && count($emailStructure->parts) > 0) {
    //         for ($i = 0; $i < count($emailStructure->parts); $i++) {
    //             $part = $emailStructure->parts[$i];
    //             if (isset($part->disposition) && strtoupper($part->disposition) === 'ATTACHMENT') {
    //                 $filename = $part->dparameters[0]->value;
    //                 $attachmentData = imap_fetchbody($mbox, $emailId, $i + 1);
  
    //                 // Save the attachment to the public folder
    //                 $savePath = $saveFolderPath . $filename;
    //                 file_put_contents($savePath, $attachmentData);
    
    //                 echo "Attachment saved: $filename\n";
    //             }
    //         }
    //     }
    // }

    // foreach ($mails as $emailId) {
    //     // Fetch the email structure
    //     $emailStructure = imap_fetchstructure($mbox, $emailId);
    //     $saveFolderPath = '../public/';
    //     // Loop through the email parts to find attachments
    //     foreach ($emailStructure->parts as $partNum => $partData) {
    //         // Check if it's an attachment
    //         if (isset($partData->disposition) && $partData->disposition === 'attachment') {
    //             // Generate a unique filename for each attachment
    //             $filename = 'attachment_' . uniqid() . '_' . $partData->dparameters[0]->value;
    //             $filePath = $saveFolderPath . $filename;
    
    //             // Fetch and save the attachment
    //             $attachment = imap_fetchbody($mbox, $emailId, $partNum + 1);
    //             $fileSaved = file_put_contents($filePath, $attachment);
    
    //             if ($fileSaved === false) {
    //                 echo 'Failed to save the attachment: ' . $filename . PHP_EOL;
    //                 dd($filesaved);
    //             } else {
    //                 echo 'Attachment saved successfully: ' . $filename . PHP_EOL;
    //                 dd($filesaved);
    //             }
    //         }
    //     }
    // }

    //  $attachments = array();
    foreach ($mails as $emailId) {
        // Fetch the email structure
        $emailStructure = imap_fetchstructure($mbox, $emailId);

        // Loop through the email parts to find attachments
        foreach ($emailStructure->parts as $partNum => $partData) {
            //   $attachments[$partNum] = array(
            //     'is_attachment' => false,
            //     'filename' => '',
            //     'name' => '',
            //     'attachment' => ''
            // );
           
            // if($emailStructure->parts[$partNum]->ifdparameters) {
            //     foreach($emailStructure->parts[$partNum]->dparameters as $object) {
            //         if(strtolower($object->attribute) == 'filename') {
            //             $attachments[$partNum]['is_attachment'] = true;
            //             $attachments[$partNum]['filename'] = $object->value;
            //         }
            //     }
            // }
           
            // if($emailStructure->parts[$partNum]->ifparameters) {
            //     foreach($emailStructure->parts[$partNum]->parameters as $object) {
            //         if(strtolower($object->attribute) == 'name') {
            //             $attachments[$partNum]['is_attachment'] = true;
            //             $attachments[$partNum]['name'] = $object->value;
            //         }
            //     }
            // }
           
            // if($attachments[$partNum]['is_attachment']) {
            //     $attachments[$partNum]['attachment'] = imap_fetchbody($mbox, $emailId, $partNum+1);
            //     if($emailStructure->parts[$partNum]->encoding == 3) { // 3 = BASE64
            //         $attachments[$partNum]['attachment'] = base64_decode($attachments[$partNum]['attachment']);
            //     }
            //     elseif($emailStructure->parts[$partNum]->encoding == 4) { // 4 = QUOTED-PRINTABLE
            //         $attachments[$partNum]['attachment'] = quoted_printable_decode($attachments[$partNum]['attachment']);
            //     }
            // }
            // Check if it's an attachment
            if (isset($partData->disposition) && $partData->disposition === 'ATTACHMENT') {
                // Generate a unique filename for each attachment
                $filename = 'attachment_' . uniqid() . '_' . $partData->dparameters[0]->value;
                $filePath = '../public/' . $filename;
                $file = imap_fetchbody($mbox, $emailId, $partNum+1);
                // check partdata encoding and decode accordingly so file saved
                // can be viewed after downloaded
                    if($partData->encoding==3){
                        $file = base64_decode($file);
                    }
                    elseif($partData->encoding==4){
                        $file = quoted_printable_decode($file);
                    }
              
                $fileSaved = file_put_contents($filePath, $file);
           
                // Save the attachment to the file
                // $attachmentSaved = imap_savebody($mbox, $filePath, $emailId, $partNum + 1);
                // if ($attachmentSaved) {
                //     echo 'Attachment saved successfully: ' . $filename . PHP_EOL;
                // } else {
                //     echo 'Failed to save the attachment: ' . $filename . PHP_EOL;
                // }
            }
        }
    }
    
        // echo $message;
        // dd($data);
        imap_close($mbox);
        //imap close closes the stream of imap
    }
    
}
