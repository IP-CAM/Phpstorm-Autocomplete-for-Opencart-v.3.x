<?php

interface InterfaceLibrary {
    public Loader $load;
  
    public Cache $cache;
    public Config $config;
    public Db $db;
    public Document $document;
    public Encryption $encryption;
    public Image $image;
    public Language $language;
    public Log $log;
    public Mail $mail;
    public Pagination $pagination;
    public Request $request;
    public Response $response;
    public Session $session;
    public Squareup $squareup;
    public Template $template;
    public Url $url;
    
    public \Cart\Cart $cart;
    public \Cart\Currency $currency;
    public \Cart\Customer $customer;
    public \Cart\Length $length;
    public \Cart\Tax $tax;
    public \Cart\User $user;
    public \Cart\Weight $weight;
}
