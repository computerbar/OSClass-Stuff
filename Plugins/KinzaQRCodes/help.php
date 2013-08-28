<?php/* *    
Created by Ray|computerbar@gmail.com
*/?>
<div id="settings_form" style="border: 1px solid #ccc; background: #eee; ">    
<div style="padding: 0 20px 20px;">        
<div>           
<fieldset>                
<legend><h1><?php _e('Installation / FAQ', 'kinzaqrcodes'); ?></h1></legend>                
<h2><?php _e('What is Kinza QR-CODES?', 'kinzaqrcodes'); ?>                </h2>               
 <p> <?php _e('This Plugin shows QR-Code of item url, details etc that can be scanned by user with their smart phone', 'kinzaqrcodes'); ?> </p>   
 <h2><?php _e('Ok! I have installed it but I still do not see it??', 'kinzaqrcodes'); ?></h2>                
 <p><?php _e('Use the following code anywhere you want to show a QR Code.', 'kinzaqrcodes'); ?></p>                
 To show QR-Code for item URL: <pre> &lt;?php kinzaqrcodes_show_item_url(); ?&gt; </pre>  
 <h2><?php _e('I need to change the size of QR-CODE. How to change it?', 'kinzaqrcodes'); ?></h2>               
 <p> <?php _e('Default size is 100x100. You can change the size in index.php. Look for chs=100x100 in the link below', 'kinzaqrcodes'); ?> <pre>http://chart.googleapis.com/chart?cht=qr&chs=100x100&choe=UTF-8&chld=H%7C0&chl=&lt;?php echo osc_item_url() ; ?&gt;</pre>
 </p>           <h2><?php _e('Where did you get the idea from?', 'kinzaqrcodes'); ?>                </h2>  <p> I saw Google QR-CODE API <br>You can read more about QR-Codes here.<br>http://code.google.com/apis/chart/infographics/docs/qr_codes.html</p> 
 </fieldset>        
 </div>    
 </div>
 </div>