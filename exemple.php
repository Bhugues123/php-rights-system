<?php

  include('right-function.php');

  //Exemple for my system Admin
  if(!permReq('admin', 'false', 'false', 'false', 'false')){header('Location: /index.php');}

  //Exemple for my system 'Helpdesk' only for consult
  if(!permReq('helpdesk', 'true', 'false', 'false', 'false')){header('Location: /index.php');}

  //Exemple for my system 'Helpdesk' only for add reponse on my tickets clients
  if(!permReq('helpdesk', 'true', 'true', 'false', 'false')){header('Location: /index.php');}

  //Exemple for my system 'Helpdesk' only for add reponse on my tickets clients and can delete the tickets
  if(!permReq('helpdesk', 'true', 'true', 'true', 'false')){header('Location: /index.php');}

  //Exemple for my system 'Helpdesk' for configurate the configuration SMTP
  if(!permReq('helpdesk', 'true', 'true', 'true', 'true')){header('Location: /index.php');}

?>
