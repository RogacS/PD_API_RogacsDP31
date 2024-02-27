    • Kas ir API?
      
      API ir iepriekš definētu klašu, procedūru, funkciju, struktūru un konstanšu kopums, kas tiek pasniegts kā pielikums (bibliotēkas, servisi), kuru iespējams izmantot ārējiem programmatūras produktiem. Izmanto programmētāji, lai rakstītu dažādus programmu pielikumus.
      
    • Kā deklarēt mainīgo PHP valodā?
    • 
      PHP valodā mainīgo deklarēšana notiek, izmantojot dolāra zīmi. Variablēm jāsākas ar dolāra zīmi, un tām var būt dažādi nosaukumi.
      Piemēram: 
      $Mainigais = "Sveiki, pasaule!"; 
       
    • Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
      
      Laravel izmanto Model-View-Controller (MVC) arhitektūru. Šī arhitektūras modelis sadala lietotnes loģiku trim galvenajās komponentēs:
    1. Model (Modelis):
          Modeļi ir atbildīgi par datu glabāšanu un piekļuvi tiem. Tie pārstāv lietotnes dati un tiek izmantoti, lai sazinātos ar datu bāzi vai citiem datu avotiem. Modeli parasti tiek izveidoti datu bāzes tabulu atspoguļošanai, un tie piedāvā metodes datu iegūšanai, saglabāšanai, atjaunināšanai vai dzēšanai.
    2. View (Skats):
          Skati ir atbildīgi par lietotāja saskarnes attēlošanu. Tie nodrošina veidu, kā informāciju attēlot lietotājam un var būt HTML faili, kuros iestrādātas dinamiskās datus, ko iegūst no Modeļa vai Kontroliera.
    3. Controller (Kontrolieris):
          Kontrolieri ir starpnieki starp Modeļiem un Skatiem. Tie apstrādā lietotāja pieprasījumus, iegūst nepieciešamos dati no Modeļiem un pārsūta šos datus uz Skatiem, lai tos attēlotu. Kontrolieri arī nodrošina maršrutēšanas loģiku, saņemot HTTP pieprasījumus un nosakot, kā jāapstrādā šie pieprasījumi.
      
    • Kas ir ORM, kāpēc to izmanto tīra SQL vietā?

	ORM tiek izmantots tīra SQL vietā, jo tas vienkāršo datu bāzes operācijas un samazina nepieciešamību rakstīt sarežģītus SQL vaicājumus. Tas atvieglo attiecību starp datu bāzes ierakstiem un programmēšanas valodas objektiem, padarot kodu lasāmāku un uzturamāku. ORM ļauj izstrādātājiem darboties ar datiem, izmantojot pazīstamus objektu paradigmas principus, tādus kā mantotība un metodes, neuztraucoties par tiešu SQL vaicājumu rakstīšanu.


      
    • Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:
    $lietotaji = User::where('rating', '>', 4)->get();