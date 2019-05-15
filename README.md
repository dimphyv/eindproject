# eindproject

Inhoudsopgave

Planning


Interne rollen verdeling


Beschrijving van het project

Een website voor een motorclub, met een inlogsysteem voor leden.
Daarnaast een evenementen pagina waar leden op in kunnen schrijven. 
De leden kunnen zelf een evenement toevoegen. 
Inschrijven op een evenement kan alleen als je als lid ingelogd bent op de website. 
De databases:
Users
  user_id
  naam
  email
  wachtwoord
  geaccepteerd ja/nee
  
Evenementen
  evenement_id
  datum
  omschrijving
  geannuleerd?
  
Evenementen/users database
  evenement_id
  user_id
  
  pages:
  landingspage 
    log in velden user/password -> evenementen pagina die uit de database gehaald worden
          
    button nieuwe aanmelding -> nieuwe pagina met formulier naam/email/password 
  evenementen pagina:
    lijst evenementen 
    knoppen inschrijven/uitschrijven/ lijst meegaande leden/wijzigen->zelfde form voor nieuw event met opgehaalde data uit de database
    nieuwe evenement toevoegen button -> formulier new event
    button lid -> lijst alle leden
    
