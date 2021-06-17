# php-rights-system
Rights System in PHP


This system is based on 4 kinds of rights :
- Read
- Write
- Delete
- Admin

/!\ the project is based on a functional project, so it cannot be imported without modification /!\

For use :

When you call the function you need to send the rights required and the domaine to do the rights research.

The 5 arguments are : < domaine >, < Read:true;false >, < Write:true;false >, < Delete:true;false >, < Admin:true;false >

  for exemple I call the function in the domaine "helpdesk", and I only need "Read" :
  
  permReq('helpdesk', 'true', 'false', 'false', 'false')
  
By default, if the argument for < Read:true;false >, < Write:true;false >, < Delete:true;false >, < Admin:true;false > are false, the verifications are not enabled.
  
  
For more details you can contact me with my email address : bastien.hugues@tb-it.fr
Or my discord server : https://discord.gg/32hXuqJrf9
