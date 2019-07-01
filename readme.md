Authenticatie
Voor authenticatie heb ik gekozen voor een login systeem. De gebruiker moet eerst een account maken, de
gebruiker moet een naam, email en een wachtwoord opgeven, voordat hij bepaalde pagina's mag zien. De gebruiker heeft standaart de rol customer en kan daardoor niks toevoegen en mag een aantal cruds niet zien en krijgt dan een 403 pagina te zien die uitlegt dat de gebruiker geen toegang zien. 

Authorisatie
Voor authorisatie zijn er meerdere rollen aangemaakt. Een admin mag alles op de applicatie doen en aanpassen, de gebruiker krijgt standaart de rol customer deze rol mag maar een aantal pagina's zien en krijgt anders een 403 pagina waarop hij terug kan naar een vorige pagina.

Handleiding
Als je de applicatie opstart krijg je de homepagina te zien zodra er op een andere pagina geklikt wordt komt er een loginscherm waar je een account kunt aanmaken of inloggen. vervolgens kun je als op een aantal pagina's klikt er niet bij en krijg je de 403 te zien. Als je vervolgens in de database de rol verandert naar admin kun je wel alle pagina's aanpassen.



