<?php

  return array(
  
    // ---------------------------------------------------
    //  Administration tools
    // ---------------------------------------------------
    
    'administration tool name test_mail_settings' => 'Test nastavení emailů',
    'administration tool desc test_mail_settings' => 'Použij tento nástroj k odeslání testovacího emailu ke zkontrolování, zda je ProjectPier správně nakonfigurován',
    'administration tool name mass_mailer' => 'Hromadný email',
    'administration tool desc mass_mailer' => 'Jednoduchý nástroj, který umožňuje odeslat zprávu jakékoliv skupině uživatelů registrované v aplikaci',
  
    // ---------------------------------------------------
    //  Time Manager
    // ---------------------------------------------------
  
    'time manager' => 'Správce času',
    'unbilled time' => 'Neúčtovaný čas',
    'billed time' => 'Účtovaný čas',
    'view by user' => 'Zobrazit k uživateli',
    'view by project' => 'Zobrazit k projektu',
    'view time by project' => 'Zobrazit čas k projektu',
    'view time by user' => 'Zobrazit čas k uživateli',
    'unbilled' => 'Neúčtované',
    'billed' => 'Účtované',
    'mark as billed' => 'Označit jako účtované',
    'mark as unbilled' => 'Označit jako neúčtované',

    // ---------------------------------------------------
    //  Configuration categories and options
    // ---------------------------------------------------
  
    'configuration' => 'Konfigurace',
    
    'mail transport mail()' => 'Výchozí nastavení - PHP',
    'mail transport smtp' => 'SMTP server',
    
    'secure smtp connection no'  => 'Ne',
    'secure smtp connection ssl' => 'Ano, použít SSL',
    'secure smtp connection tls' => 'Ano, použít TLS',
    
    'file storage file system' => 'Souborový systém',
    'file storage mysql' => 'Databáze (MySQL)',
    
    // Categories
    'config category name general' => 'Obecné',
    'config category desc general' => 'Obecné nastavení ProjectPier',
    'config category name mailing' => 'Odesílání emailů',
    'config category desc mailing' => 'Zde nastav, jak bude ProjectPier nakládat s odesíláním emailů.',
    
    // ---------------------------------------------------
    //  Options
    // ---------------------------------------------------
    
    // General
    'config option name site_name' => 'Název webu',
    'config option desc site_name' => 'Tato volba bude zobrazeno jako název webu na stránce s nástěnkou',
    'config option name file_storage_adapter' => 'Úložiště souborů',
    'config option desc file_storage_adapter' => 'Vyber, kde chceš ukládat přílohy, avatary, loga a další uploadované dokumenty.. <strong>Doporučené je ukládání do databáze</strong>.',
    'config option name default_project_folders' => 'Výchozí složky',
    'config option desc default_project_folders' => 'Složky, které budou vytvořeny společně s projektem. Každý název složky by měl být na novém řádku. Duplicitní nebo prázdné řádky budou ignorovány',
    'config option name theme' => 'Vzhled',
    'config option desc theme' => 'Použítím různých vzhledů můžete měnit vzhled ProjectPier',
    
    // ProjectPier
    'config option name upgrade_check_enabled' => 'Povol kontrolu nových verzí',
    'config option desc upgrade_check_enabled' => 'Zaškrtnutím Ano povolíte, aby systém jednou denně kontroloval, zda není dostupná nová verze ProjectPier ke stažení',
    
    // Mailing
    'config option name exchange_compatible' => 'Microsoft Exchange kompatibilní mód',
    'config option desc exchange_compatible' => 'Používáte-li Microsoft Exchange Server, nastavte tuto volbu na Ano pro vyhnutí se případným problémům s odesíláním emailů.',
    'config option name mail_transport' => 'Odesílání emailů',
    'config option desc mail_transport' => 'Můžete použít výchozí nastavení (odesílání přes PHP) nebo specifikovat SMTP server',
    'config option name smtp_server' => 'SMTP server',
    'config option name smtp_port' => 'SMTP port',
    'config option name smtp_authenticate' => 'Použij SMTP autentizaci',
    'config option name smtp_username' => 'SMTP přihlašovací jméno',
    'config option name smtp_password' => 'SMTP heslo',
    'config option name smtp_secure_connection' => 'Použij bezpečné SMTP spojení',
    
  ); // array

?>
