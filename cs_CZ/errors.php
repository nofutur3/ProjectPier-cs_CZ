<?php

  /**
  * Error messages
  *
  * @version 1.0
  * @http://www.projectpier.org/
  */

  // Return langs
  return array(
  
    // General
    'invalid email address' => 'Formát emailové adresy je neplatný',
   
    // Company validation errors
    'company name required' => 'Jméno společnosti je vyžadováno',
    'company homepage invalid' => 'Adresa webové stránky není platnou adresou',
    
    // User validation errors
    'username value required' => 'Uživatelské jméno je vyžadováno',
    'username must be unique' => 'Omlouváme se, ale zvolené uživatelské jméno je již zabráno',
    'email value is required' => 'Emailová adresa je vyžadována',
    'email address must be unique' => 'Omlouváme se, ale zvolené emailová adresa je již zabrána',
    'company value required' => 'Uživatel musí být součástí společnosti',
    'password value required' => 'Heslo je vyžadováno',
    'passwords dont match' => 'Hesla nesouhlasí',
    'old password required' => 'Pole staré heslo je vyžadováno',
    'invalid old password' => 'Staré heslo nesouhlasí',
    
    // Avatar
    'invalid upload type' => 'Špatný formát souboru. Podporované formáty: %s',
    'invalid upload dimensions' => 'Špatná velikost obrázku. Maximální velikost je %sx%s pixelů',
    'invalid upload size' => 'Špatná velikost obrázku, maximálí velikost je %s',
    'invalid upload failed to move' => 'Nepodařilo se přesunout nahrané soubory',
    
    // Registration form
    'terms of services not accepted' => 'K vytvoření účtu si musíte přečíst a odsouhlasit podmínky služby',
    
    // Init company website
    'failed to load company website' => 'Chyba při nahrávání webové stránky. Vlastníkova společnost nenalezena',
    'failed to load project' => 'Chyba při nahrávání aktivních projektů',
    
    // Login form
    'username value missing' => 'Prosím, vložte uživatelské jméno',
    'password value missing' => 'Prosím, vložte heslo',
    'invalid login data' => 'Chyba při přihlašování. Zkontrolujte přihlašovací údaje a zkuste znovu',
    
    // Add project form
    'project name required' => 'Název projektu je povinný',
    'project name unique' => 'Název projektu musí být unikátní',
    
    // Add message form
    'message title required' => 'Název zprávy je povinný',
    'message title unique' => 'Název zprávy musí být unikátní v tomto projektu',
    'message text required' => 'Text zprávy je povinný',
    
    // Add comment form
    'comment text required' => 'Text komentáře je povinný',
    
    // Add milestone form
    'milestone name required' => 'Jméno milníku je povinné',
    'milestone due date required' => 'Datum milníku je povinné',
   
    // Add time form 
    'time name required' => 'Název časového záznamu je povinný',
    'time date required' => 'Datum časového záznamu je povinné',
    'time hours required' => 'Počet hodin časového záznamu je povinný',
 
    // Add task list
    'task list name required' => 'Jméno seznamu úkolů je povinné',
    'task list name unique' => 'Jméno seznamu úkolů musí být unikátní pro projekt',
    
    // Add task
    'task text required' => 'Text úkolu je povinný',
    
    // Add project form
    'form name required' => 'Název šablony je povinný',
    'form name unique' => 'Název šablony musí být unikátní',
    'form success message required' => 'Zpráva o úspěchu je povinná',
    'form action required' => 'Akce šablony je povinná',
    'project form select message' => 'Prosím, vyberte zprávu',
    'project form select task lists' => 'Prosím, vyberte seznam úkolů',
    
    // Submit project form
    'form content required' => 'Prosím, vložte obsah do textového pole',
    
    // Validate project folder
    'folder name required' => 'Název složky je povinný',
    'folder name unique' => 'Název složky musí být unikátní',
    
    // Validate add / edit file form
    'folder id required' => 'Prosím, vyberte složku',
    'filename required' => 'Název souboru je povinný',
    
    // File revisions (internal)
    'file revision file_id required' => 'Revize musí být spojena se souborem',
    'file revision filename required' => 'Název souboru je povinný',
    'file revision type_string required' => 'Neznámý typ souboru',
    
    // Test mail settings
    'test mail recipient required' => 'Adresa příjemce je vyžadována',
    'test mail recipient invalid format' => 'Chybný formát adresy příjemce',
    'test mail message required' => 'Emailová zpráva je požadována',
    
    // Mass mailer
    'massmailer subject required' => 'Předmět emailu je povinný',
    'massmailer message required' => 'Tělo emailu je povinné',
    'massmailer select recepients' => 'Prosím, vyberte uživatele, kteří obdrží tento email',
    
  ); // array

?>