# eindproject

<<<<<<< HEAD
<b>Inhoudsopgave</b>  
<ul><li>Planning  </li>
<li>Rollen verdeling  </li>
<li>Beschrijving van het project</li>
<li>Databases </li> 
<li>Planning </li> 
</ul>
=======
<b>Inhoudsopgave </b> <br>
<ul><li>Planning</li>  
<li>Rollen verdeling </li> 
<li>Beschrijving van het project </li> 
<li>Databases</li>  
 
</ul>
<b>Planning</b><br>
<b>Interne rollen verdeling  </b><br>
>>>>>>> master

<b>Interne rollen verdeling </b> 

<<<<<<< HEAD

<b>Beschrijving van het project </b> 
=======
<b>Beschrijving van het project  </b><br>
>>>>>>> master

Een website voor een club, met een inlogsysteem voor leden.  
Daarnaast een evenementen pagina waar leden op in kunnen schrijven.   
De leden kunnen zelf een evenement toevoegen.   
Inschrijven op een evenement kan alleen als je als lid ingelogd bent op de website.   
<<<<<<< HEAD
<b>De databases:</b>  
Users  
  user_id 
  naam  
  email  
  wachtwoord  
  geaccepteerd ja/nee  
  <br>
Evenementen  
  evenement_id  
  datum  
  omschrijving  
  geannuleerd?  
=======

>>>>>>> master
  

  
 <b> Pages:  </b><br>
  <ul><li>landingspage  
    log in velden user/password -> evenementen pagina die uit de database gehaald worden  
          button nieuwe aanmelding -> nieuwe pagina met formulier naam/email/password   </li>
  <li>evenementen pagina:  
    lijst evenementen   
    knoppen inschrijven/uitschrijven/ lijst meegaande leden/wijzigen->zelfde form voor nieuw event met opgehaalde data uit de database 
    nieuwe evenement toevoegen button -> formulier new event  
    button lid -> lijst alle leden  </li></ul>
    
<b> Databases: </b><br> 
 <ul><li>Users </li>
 <li> user_id integer primary key  </li>
  <li>naam varchar  </li>
 <li> email varchar  </li>
  <li>toegelaten boolean default is false  </li>  
 <li> wachtwoord varchar  </li>
  </ul>
 Evenement  
<<<<<<< HEAD
  evenement_id integer primary key 
  datum date  
  omschrijving text    
  geannuleerd tinyInt  
  
=======
 <ul> <li>evenement_id integer primary key </li>
<li>datum date </li> 
 <li> omschrijving text </li> 
 <li> geannuleerd tinyInt </li> 
  </ul>
>>>>>>> master
 Evenement/user  
  <ul><li>evenement_id  </li>
  <li>user_id</li></ul>  
  
  
  
    
