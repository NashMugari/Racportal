<?php  
$message = '
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Smart forms - Email message template </title>    
</head>

<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
    <center>
        <table style="padding:30px 10px;background:#F4F4F4;width:100%;font-family:arial" cellpadding="0" cellspacing="0">
                
                <tbody>
                    <tr>
                        <td>
                        
                            <table style="max-width:540px;min-width:320px" align="center" cellspacing="0">
                                <tbody>
                                
                                    <tr>
                                        <td style="background:#fff;border:1px solid #D8D8D8;padding:30px 30px" align="center">
                                        
                                            <table align="center">
                                                <tbody>
                                                
                                                    <tr>
                                                        <td style="border-bottom:1px solid #D8D8D8;color:#666;text-align:center;padding-bottom:30px">
                                                            
                                                            <table style="margin:auto" align="center">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="color:#bf0d0d;font-size:22px;font-weight:bold;text-align:center;font-family:arial">
																		<img src="http://babatunde.ecowebplus.net/images/logo.png" style="display: block; border: 0px;" /> 
																		<h1 style="color:#bf0d0d;font-size:22px;font-weight:bold;text-align:center;font-family:arial">MESSAGE DETAILS	</h1> 
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                               <td style="color:#666;padding:15px; padding-bottom:0;font-size:14px;line-height:20px;font-family:arial;text-align:left">
                                    
                                                    <div style="font-style:normal;padding-bottom:15px;font-family:arial;line-height:20px;text-align:left">
                                                        
                                                        <p><span style="font-weight:bold;font-size:16px">Received from:</span> '.$sendername.'</p>
                                                        <p><span style="font-weight:bold;font-size:16px">Email:</span> '.$emailaddress.'</p>
                                                        <p><span style="font-weight:bold;font-size:16px">Phone:</span> '.$telephone.'</p>
                                                        <p><span style="font-weight:bold;font-size:16px">Organisation:</span> '.$senderorganisation.'</p>
                                                        <p><span style="font-weight:bold;font-size:16px;">Condolence Message:</span> </p>
                                                        <p style="margin-bottom:0;"> '.nl2br($sendermessage).' </p>
                                                        
                                                      </div>
                                                            
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                            
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td style="background:#f9f9f9;border:1px solid #D8D8D8;border-top:none;padding:24px 10px" align="center">
                                            
                                            <table style="width:100%;max-width:650px" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td style="font-size:12px;line-height:18px;text-align:center;max-width:650px">
                                                            <a href="'.$poweredby_url.'" style="text-decoration:none;color:#69696c" target="_blank">
                                                                <span style="color:#bf0d0d;font-weight:bold;max-width:180px">Powered by:</span> 
                                                                '.$poweredby_name.'
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            <table style="max-width:650px" align="center">
                                <tbody>
                                    <tr>
                                        <td style="color:#b4b4b4;font-size:11px;padding-top:10px;text-align:center;line-height:15px;font-family:arial">
                                            <span> &copy; BWI '.$currYear.' - All Rights Reserved </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
            </tbody>
        </table>
    </center>
</body>
</html>';
?>