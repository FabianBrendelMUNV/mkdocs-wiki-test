<?php
	session_start();
	if (!$_SESSION['login']) {
		$dirname = $_SERVER['REQUEST_URI'];

		if (substr($dirname, -1) != '/') {
			$dirname=dirname($dirname).'/';
		} else {
			$dirname = preg_replace('~/+~', '/', $dirname);
		}

		header("Location: ".$dirname."../../login.php?redirect=extensions/codehilite/index.php");
	}
?>

<!doctype html>
<html lang="en" class="no-js">
  <head>
    
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      
      
      
      
        <link rel="prev" href="../admonition/">
      
      
        <link rel="next" href="../footnotes/">
      
      <link rel="icon" href="../../assets/images/favicon.png">
      <meta name="generator" content="mkdocs-1.4.3, mkdocs-material-9.1.15">
    
    
      
        <title>CodeHilite - Maas Wiki NRW Demo</title>
      
    
    
      <link rel="stylesheet" href="../../assets/stylesheets/main.26e3688c.min.css">
      
        
        <link rel="stylesheet" href="../../assets/stylesheets/palette.ecc896b0.min.css">
      
      

    
    
    
      
        
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i%7CRoboto+Mono:400,400i,700,700i&display=fallback">
        <style>:root{--md-text-font:"Roboto";--md-code-font:"Roboto Mono"}</style>
      
    
    
      <link rel="stylesheet" href="../../stylesheets/extra.css">
    
    <script>__md_scope=new URL("../..",location),__md_hash=e=>[...e].reduce((e,_)=>(e<<5)-e+_.charCodeAt(0),0),__md_get=(e,_=localStorage,t=__md_scope)=>JSON.parse(_.getItem(t.pathname+"."+e)),__md_set=(e,_,t=localStorage,a=__md_scope)=>{try{t.setItem(a.pathname+"."+e,JSON.stringify(_))}catch(e){}}</script>
    
      
  


    
    
    
  <link rel="stylesheet" href="../../assets/stylesheets/custom.f7ec4df2.min.css">

  </head>
  
  
    
    
      
    
    
    
    
    <body dir="ltr" data-md-color-scheme="custom" data-md-color-primary="indigo" data-md-color-accent="indigo">
  
    
    
      <script>var palette=__md_get("__palette");if(palette&&"object"==typeof palette.color)for(var key of Object.keys(palette.color))document.body.setAttribute("data-md-color-"+key,palette.color[key])</script>
    
    <input class="md-toggle" data-md-toggle="drawer" type="checkbox" id="__drawer" autocomplete="off">
    <input class="md-toggle" data-md-toggle="search" type="checkbox" id="__search" autocomplete="off">
    <label class="md-overlay" for="__drawer"></label>
    <div data-md-component="skip">
      
        
        <a href="#installation" class="md-skip">
          Skip to content
        </a>
      
    </div>
    <div data-md-component="announce">
      
        <aside class="md-banner">
          <div class="md-banner__inner md-grid md-typeset">
            
            
  <strong>THIS IS THE PREVIEW VERSION OF THE MAAS-WIKI</strong></ br></br>
  <p><strong>IT MAY CONTAIN INACCURATE OR OUTDATED INFORMATION</strong>

          </div>
          
        </aside>
      
    </div>
    
    
      

  

<header class="md-header md-header--shadow md-header--lifted" data-md-component="header">
  <nav class="md-header__inner md-grid" aria-label="Header">
    <a href="../.." title="Maas Wiki NRW Demo" class="md-header__button md-logo" aria-label="Maas Wiki NRW Demo" data-md-component="logo">
      
  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 8a3 3 0 0 0 3-3 3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3m0 3.54C9.64 9.35 6.5 8 3 8v11c3.5 0 6.64 1.35 9 3.54 2.36-2.19 5.5-3.54 9-3.54V8c-3.5 0-6.64 1.35-9 3.54Z"/></svg>

    </a>
    <label class="md-header__button md-icon" for="__drawer">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3 6h18v2H3V6m0 5h18v2H3v-2m0 5h18v2H3v-2Z"/></svg>
    </label>
    <div class="md-header__title" data-md-component="header-title">
      <div class="md-header__ellipsis">
        <div class="md-header__topic">
          <span class="md-ellipsis">
            Maas Wiki NRW Demo
          </span>
        </div>
        <div class="md-header__topic" data-md-component="header-topic">
          <span class="md-ellipsis">
            
              CodeHilite
            
          </span>
        </div>
      </div>
    </div>
    
      
        <form class="md-header__option" data-md-component="palette">
          
            
            
            
            <input class="md-option" data-md-color-media="" data-md-color-scheme="custom" data-md-color-primary="indigo" data-md-color-accent="indigo"  aria-label="Switch to dark mode"  type="radio" name="__palette" id="__palette_1">
            
              <label class="md-header__button md-icon" title="Switch to dark mode" for="__palette_2" hidden>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2a7 7 0 0 0-7 7c0 2.38 1.19 4.47 3 5.74V17a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-2.26c1.81-1.27 3-3.36 3-5.74a7 7 0 0 0-7-7M9 21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1H9v1Z"/></svg>
              </label>
            
          
            
            
            
            <input class="md-option" data-md-color-media="" data-md-color-scheme="slate" data-md-color-primary="indigo" data-md-color-accent="indigo"  aria-label="Switch to light mode"  type="radio" name="__palette" id="__palette_2">
            
              <label class="md-header__button md-icon" title="Switch to light mode" for="__palette_1" hidden>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2a7 7 0 0 1 7 7c0 2.38-1.19 4.47-3 5.74V17a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1v-2.26C6.19 13.47 5 11.38 5 9a7 7 0 0 1 7-7M9 21v-1h6v1a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1m3-17a5 5 0 0 0-5 5c0 2.05 1.23 3.81 3 4.58V16h4v-2.42c1.77-.77 3-2.53 3-4.58a5 5 0 0 0-5-5Z"/></svg>
              </label>
            
          
        </form>
      
    
    
    
      <label class="md-header__button md-icon" for="__search">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.5 3A6.5 6.5 0 0 1 16 9.5c0 1.61-.59 3.09-1.56 4.23l.27.27h.79l5 5-1.5 1.5-5-5v-.79l-.27-.27A6.516 6.516 0 0 1 9.5 16 6.5 6.5 0 0 1 3 9.5 6.5 6.5 0 0 1 9.5 3m0 2C7 5 5 7 5 9.5S7 14 9.5 14 14 12 14 9.5 12 5 9.5 5Z"/></svg>
      </label>
      <div class="md-search" data-md-component="search" role="dialog">
  <label class="md-search__overlay" for="__search"></label>
  <div class="md-search__inner" role="search">
    <form class="md-search__form" name="search">
      <input type="text" class="md-search__input" name="query" aria-label="Search" placeholder="Search" autocapitalize="off" autocorrect="off" autocomplete="off" spellcheck="false" data-md-component="search-query" required>
      <label class="md-search__icon md-icon" for="__search">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.5 3A6.5 6.5 0 0 1 16 9.5c0 1.61-.59 3.09-1.56 4.23l.27.27h.79l5 5-1.5 1.5-5-5v-.79l-.27-.27A6.516 6.516 0 0 1 9.5 16 6.5 6.5 0 0 1 3 9.5 6.5 6.5 0 0 1 9.5 3m0 2C7 5 5 7 5 9.5S7 14 9.5 14 14 12 14 9.5 12 5 9.5 5Z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 11v2H8l5.5 5.5-1.42 1.42L4.16 12l7.92-7.92L13.5 5.5 8 11h12Z"/></svg>
      </label>
      <nav class="md-search__options" aria-label="Search">
        
        <button type="reset" class="md-search__icon md-icon" title="Clear" aria-label="Clear" tabindex="-1">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41Z"/></svg>
        </button>
      </nav>
      
    </form>
    <div class="md-search__output">
      <div class="md-search__scrollwrap" data-md-scrollfix>
        <div class="md-search-result" data-md-component="search-result">
          <div class="md-search-result__meta">
            Initializing search
          </div>
          <ol class="md-search-result__list" role="presentation"></ol>
        </div>
      </div>
    </div>
  </div>
</div>
    
    
      <div class="md-header__source">
        <a href="https://github.com/PartTimeDataScientist/mkdocs-wiki-test" title="Go to repository" class="md-source" data-md-component="source">
  <div class="md-source__icon md-icon">
    
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc.--><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
  </div>
  <div class="md-source__repository">
    MaaS Wiki on Github
  </div>
</a>
      </div>
    
  </nav>
  
    
      
<nav class="md-tabs" aria-label="Tabs" data-md-component="tabs">
  <div class="md-grid">
    <ul class="md-tabs__list">
      
        
  
  


  <li class="md-tabs__item">
    <a href="../.." class="md-tabs__link">
      Maas Wiki NRW
    </a>
  </li>

      
        
  
  


  <li class="md-tabs__item">
    <a href="../../how-to/" class="md-tabs__link">
      Bedienung
    </a>
  </li>

      
        
  
  


  
  
  
    <li class="md-tabs__item">
      <a href="../../introduction/" class="md-tabs__link">
        Überblick
      </a>
    </li>
  

      
        
  
  


  
  
  
    <li class="md-tabs__item">
      <a href="../../examples/" class="md-tabs__link">
        MaaS-Baukasten
      </a>
    </li>
  

      
        
  
  
    
  


  
  
  
    <li class="md-tabs__item">
      <a href="../admonition/" class="md-tabs__link md-tabs__link--active">
        Erweiterungen
      </a>
    </li>
  

      
        
  
  


  <li class="md-tabs__item">
    <a href="../../kontakt/" class="md-tabs__link">
      Kontakt
    </a>
  </li>

      
        
  
  


  <li class="md-tabs__item">
    <a href="../../license/" class="md-tabs__link">
      Lizenz
    </a>
  </li>

      
    </ul>
  </div>
</nav>
    
  
</header>
    
    <div class="md-container" data-md-component="container">
      
      
        
      
      <main class="md-main" data-md-component="main">
        <div class="md-main__inner md-grid">
          
            
              
              <div class="md-sidebar md-sidebar--primary" data-md-component="sidebar" data-md-type="navigation" >
                <div class="md-sidebar__scrollwrap">
                  <div class="md-sidebar__inner">
                    

  


<nav class="md-nav md-nav--primary md-nav--lifted" aria-label="Navigation" data-md-level="0">
  <label class="md-nav__title" for="__drawer">
    <a href="../.." title="Maas Wiki NRW Demo" class="md-nav__button md-logo" aria-label="Maas Wiki NRW Demo" data-md-component="logo">
      
  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 8a3 3 0 0 0 3-3 3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3m0 3.54C9.64 9.35 6.5 8 3 8v11c3.5 0 6.64 1.35 9 3.54 2.36-2.19 5.5-3.54 9-3.54V8c-3.5 0-6.64 1.35-9 3.54Z"/></svg>

    </a>
    Maas Wiki NRW Demo
  </label>
  
    <div class="md-nav__source">
      <a href="https://github.com/PartTimeDataScientist/mkdocs-wiki-test" title="Go to repository" class="md-source" data-md-component="source">
  <div class="md-source__icon md-icon">
    
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc.--><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
  </div>
  <div class="md-source__repository">
    MaaS Wiki on Github
  </div>
</a>
    </div>
  
  <ul class="md-nav__list" data-md-scrollfix>
    
      
      
      

  
  
  
    <li class="md-nav__item">
      <a href="../.." class="md-nav__link">
        Maas Wiki NRW
      </a>
    </li>
  

    
      
      
      

  
  
  
    <li class="md-nav__item">
      <a href="../../how-to/" class="md-nav__link">
        Bedienung
      </a>
    </li>
  

    
      
      
      

  
  
  
    
    <li class="md-nav__item md-nav__item--nested">
      
      
      
      
      <input class="md-nav__toggle md-toggle " type="checkbox" id="__nav_3" >
      
      
      
        <label class="md-nav__link" for="__nav_3" id="__nav_3_label" tabindex="0">
          Überblick
          <span class="md-nav__icon md-icon"></span>
        </label>
      
      <nav class="md-nav" data-md-level="1" aria-labelledby="__nav_3_label" aria-expanded="false">
        <label class="md-nav__title" for="__nav_3">
          <span class="md-nav__icon md-icon"></span>
          Überblick
        </label>
        <ul class="md-nav__list" data-md-scrollfix>
          
            
              
  
  
  
    <li class="md-nav__item">
      <a href="../../introduction/" class="md-nav__link">
        Maas Wiki NRW
      </a>
    </li>
  

            
          
        </ul>
      </nav>
    </li>
  

    
      
      
      

  
  
  
    
    <li class="md-nav__item md-nav__item--nested">
      
      
      
      
      <input class="md-nav__toggle md-toggle " type="checkbox" id="__nav_4" >
      
      
      
        <label class="md-nav__link" for="__nav_4" id="__nav_4_label" tabindex="0">
          MaaS-Baukasten
          <span class="md-nav__icon md-icon"></span>
        </label>
      
      <nav class="md-nav" data-md-level="1" aria-labelledby="__nav_4_label" aria-expanded="false">
        <label class="md-nav__title" for="__nav_4">
          <span class="md-nav__icon md-icon"></span>
          MaaS-Baukasten
        </label>
        <ul class="md-nav__list" data-md-scrollfix>
          
            
              
  
  
  
    <li class="md-nav__item">
      <a href="../../examples/" class="md-nav__link">
        MaaS-Baukasten
      </a>
    </li>
  

            
          
        </ul>
      </nav>
    </li>
  

    
      
      
      

  
  
    
  
  
    
    <li class="md-nav__item md-nav__item--active md-nav__item--nested">
      
      
      
      
      <input class="md-nav__toggle md-toggle " type="checkbox" id="__nav_5" checked>
      
      
      
        <label class="md-nav__link" for="__nav_5" id="__nav_5_label" tabindex="0">
          Erweiterungen
          <span class="md-nav__icon md-icon"></span>
        </label>
      
      <nav class="md-nav" data-md-level="1" aria-labelledby="__nav_5_label" aria-expanded="true">
        <label class="md-nav__title" for="__nav_5">
          <span class="md-nav__icon md-icon"></span>
          Erweiterungen
        </label>
        <ul class="md-nav__list" data-md-scrollfix>
          
            
              
  
  
  
    <li class="md-nav__item">
      <a href="../admonition/" class="md-nav__link">
        Admonition
      </a>
    </li>
  

            
          
            
              
  
  
    
  
  
    <li class="md-nav__item md-nav__item--active">
      
      <input class="md-nav__toggle md-toggle" type="checkbox" id="__toc">
      
      
      
        <label class="md-nav__link md-nav__link--active" for="__toc">
          CodeHilite
          <span class="md-nav__icon md-icon"></span>
        </label>
      
      <a href="./" class="md-nav__link md-nav__link--active">
        CodeHilite
      </a>
      
        

<nav class="md-nav md-nav--secondary" aria-label="Table of contents">
  
  
  
  
    <label class="md-nav__title" for="__toc">
      <span class="md-nav__icon md-icon"></span>
      Table of contents
    </label>
    <ul class="md-nav__list" data-md-component="toc" data-md-scrollfix>
      
        <li class="md-nav__item">
  <a href="#installation" class="md-nav__link">
    Installation
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#usage" class="md-nav__link">
    Usage
  </a>
  
    <nav class="md-nav" aria-label="Usage">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#specifying-the-language" class="md-nav__link">
    Specifying the language
  </a>
  
    <nav class="md-nav" aria-label="Specifying the language">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#via-markdown-syntax-recommended" class="md-nav__link">
    via Markdown syntax recommended
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#via-shebang" class="md-nav__link">
    via Shebang
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#via-three-colons" class="md-nav__link">
    via three colons
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#adding-line-numbers" class="md-nav__link">
    Adding line numbers
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#highlighting-specific-lines" class="md-nav__link">
    Highlighting specific lines
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#supported-languages-excerpt" class="md-nav__link">
    Supported languages excerpt
  </a>
  
    <nav class="md-nav" aria-label="Supported languages excerpt">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#bash" class="md-nav__link">
    Bash
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#c" class="md-nav__link">
    C
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#c_1" class="md-nav__link">
    C++
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#c_2" class="md-nav__link">
    C&#35;
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#clojure" class="md-nav__link">
    Clojure
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#diff" class="md-nav__link">
    Diff
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#docker" class="md-nav__link">
    Docker
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#elixir" class="md-nav__link">
    Elixir
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#erlang" class="md-nav__link">
    Erlang
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#f" class="md-nav__link">
    F&#35;
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#go" class="md-nav__link">
    Go
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#html" class="md-nav__link">
    HTML
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#java" class="md-nav__link">
    Java
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#javascript" class="md-nav__link">
    JavaScript
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#json" class="md-nav__link">
    JSON
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#julia" class="md-nav__link">
    Julia
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#lua" class="md-nav__link">
    Lua
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#mysql" class="md-nav__link">
    MySQL
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#php" class="md-nav__link">
    PHP
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#protocol-buffers" class="md-nav__link">
    Protocol Buffers
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#python" class="md-nav__link">
    Python
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#ruby" class="md-nav__link">
    Ruby
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#xml" class="md-nav__link">
    XML
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
    </ul>
  
</nav>
      
    </li>
  

            
          
            
              
  
  
  
    <li class="md-nav__item">
      <a href="../footnotes/" class="md-nav__link">
        Fußnoten
      </a>
    </li>
  

            
          
            
              
  
  
  
    <li class="md-nav__item">
      <a href="../metadata/" class="md-nav__link">
        Metadaten
      </a>
    </li>
  

            
          
            
              
  
  
  
    <li class="md-nav__item">
      <a href="../pymdown/" class="md-nav__link">
        PyMdown Extensions
      </a>
    </li>
  

            
          
            
              
  
  
  
    <li class="md-nav__item">
      <a href="../permalinks/" class="md-nav__link">
        Permalinks
      </a>
    </li>
  

            
          
        </ul>
      </nav>
    </li>
  

    
      
      
      

  
  
  
    <li class="md-nav__item">
      <a href="../../kontakt/" class="md-nav__link">
        Kontakt
      </a>
    </li>
  

    
      
      
      

  
  
  
    <li class="md-nav__item">
      <a href="../../license/" class="md-nav__link">
        Lizenz
      </a>
    </li>
  

    
  </ul>
</nav>
                  </div>
                </div>
              </div>
            
            
              
              <div class="md-sidebar md-sidebar--secondary" data-md-component="sidebar" data-md-type="toc" >
                <div class="md-sidebar__scrollwrap">
                  <div class="md-sidebar__inner">
                    

<nav class="md-nav md-nav--secondary" aria-label="Table of contents">
  
  
  
  
    <label class="md-nav__title" for="__toc">
      <span class="md-nav__icon md-icon"></span>
      Table of contents
    </label>
    <ul class="md-nav__list" data-md-component="toc" data-md-scrollfix>
      
        <li class="md-nav__item">
  <a href="#installation" class="md-nav__link">
    Installation
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#usage" class="md-nav__link">
    Usage
  </a>
  
    <nav class="md-nav" aria-label="Usage">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#specifying-the-language" class="md-nav__link">
    Specifying the language
  </a>
  
    <nav class="md-nav" aria-label="Specifying the language">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#via-markdown-syntax-recommended" class="md-nav__link">
    via Markdown syntax recommended
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#via-shebang" class="md-nav__link">
    via Shebang
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#via-three-colons" class="md-nav__link">
    via three colons
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
        
          <li class="md-nav__item">
  <a href="#adding-line-numbers" class="md-nav__link">
    Adding line numbers
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#highlighting-specific-lines" class="md-nav__link">
    Highlighting specific lines
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
        <li class="md-nav__item">
  <a href="#supported-languages-excerpt" class="md-nav__link">
    Supported languages excerpt
  </a>
  
    <nav class="md-nav" aria-label="Supported languages excerpt">
      <ul class="md-nav__list">
        
          <li class="md-nav__item">
  <a href="#bash" class="md-nav__link">
    Bash
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#c" class="md-nav__link">
    C
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#c_1" class="md-nav__link">
    C++
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#c_2" class="md-nav__link">
    C&#35;
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#clojure" class="md-nav__link">
    Clojure
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#diff" class="md-nav__link">
    Diff
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#docker" class="md-nav__link">
    Docker
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#elixir" class="md-nav__link">
    Elixir
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#erlang" class="md-nav__link">
    Erlang
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#f" class="md-nav__link">
    F&#35;
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#go" class="md-nav__link">
    Go
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#html" class="md-nav__link">
    HTML
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#java" class="md-nav__link">
    Java
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#javascript" class="md-nav__link">
    JavaScript
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#json" class="md-nav__link">
    JSON
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#julia" class="md-nav__link">
    Julia
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#lua" class="md-nav__link">
    Lua
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#mysql" class="md-nav__link">
    MySQL
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#php" class="md-nav__link">
    PHP
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#protocol-buffers" class="md-nav__link">
    Protocol Buffers
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#python" class="md-nav__link">
    Python
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#ruby" class="md-nav__link">
    Ruby
  </a>
  
</li>
        
          <li class="md-nav__item">
  <a href="#xml" class="md-nav__link">
    XML
  </a>
  
</li>
        
      </ul>
    </nav>
  
</li>
      
    </ul>
  
</nav>
                  </div>
                </div>
              </div>
            
          
          
            <div class="md-content" data-md-component="content">
              <article class="md-content__inner md-typeset">
                
                  

  
    <a href="https://github.com/PartTimeDataScientist/mkdocs-wiki-test/edit/master/docs/extensions/codehilite.md" title="Edit this page" class="md-content__button md-icon">
      
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.71 7.04c.39-.39.39-1.04 0-1.41l-2.34-2.34c-.37-.39-1.02-.39-1.41 0l-1.84 1.83 3.75 3.75M3 17.25V21h3.75L17.81 9.93l-3.75-3.75L3 17.25Z"/></svg>
    </a>
  
  


  <h1>CodeHilite</h1>

<p><a href="https://pythonhosted.org/Markdown/extensions/code_hilite.php">CodeHilite</a> is an extension that adds syntax highlighting to code blocks
and is included in the standard Markdown library. The highlighting process is
executed during compilation of the Markdown file.</p>
<div class="admonition failure">
<p class="admonition-title">Syntax highlighting not working?</p>
<p>Please ensure that <a href="http://pygments.org">Pygments</a> is installed. See the next section for
further directions on how to set up Pygments or use the official
<a href="https://hub.docker.com/r/squidfunk/mkdocs-material/">Docker image</a> with all dependencies pre-installed.</p>
</div>
<h2 id="installation">Installation<a class="headerlink" href="#installation" title="Permanent link">#</a></h2>
<p>CodeHilite parses code blocks and wraps them in <code>pre</code> tags. If <a href="http://pygments.org">Pygments</a>
is installed, which is a generic syntax highlighter with support for over
<a href="http://pygments.org/languages">300 languages</a>, CodeHilite will also highlight the code block. Pygments can
be installed with the following command:</p>
<div class="highlight"><pre><span></span><code>pip<span class="w"> </span>install<span class="w"> </span>pygments
</code></pre></div>
<p>To enable CodeHilite, add the following lines to your <code>mkdocs.yml</code>:</p>
<div class="highlight"><pre><span></span><code><span class="nt">markdown_extensions</span><span class="p">:</span>
<span class="w">  </span><span class="p p-Indicator">-</span><span class="w"> </span><span class="l l-Scalar l-Scalar-Plain">codehilite</span>
</code></pre></div>
<div class="admonition warning">
<p class="admonition-title">Migrating from Material 0.2.x</p>
<p>In 0.2.x the CodeHilite extension was included with
<code>codehilite(css_class=code)</code> which switched the CSS class from
<code>.codehilite</code> to <code>.code</code>. The current version of the theme doesn&rsquo;t require
that and defines styles for the default <code>.codehilite</code> class, so the part
<code>css_class=code</code> needs to be removed.</p>
</div>
<h2 id="usage">Usage<a class="headerlink" href="#usage" title="Permanent link">#</a></h2>
<h3 id="specifying-the-language">Specifying the language<a class="headerlink" href="#specifying-the-language" title="Permanent link">#</a></h3>
<p>The CodeHilite extension uses the same syntax as regular Markdown code blocks,
but needs to know the language of the code block. This can be done in three
different ways.</p>
<h4 id="via-markdown-syntax-recommended">via Markdown syntax <small>recommended</small><a class="headerlink" href="#via-markdown-syntax-recommended" title="Permanent link">#</a></h4>
<p>In Markdown, code blocks can be opened and closed by writing three backticks on
separate lines. To add code highlighting to those blocks, the easiest way is
to specify the language directly after the opening block.</p>
<p>Example:</p>
<div class="highlight"><pre><span></span><code>``` python
import tensorflow as tf
```
</code></pre></div>
<p>Result:</p>
<div class="highlight"><pre><span></span><code><span class="kn">import</span> <span class="nn">tensorflow</span> <span class="k">as</span> <span class="nn">tf</span>
</code></pre></div>
<h4 id="via-shebang">via Shebang<a class="headerlink" href="#via-shebang" title="Permanent link">#</a></h4>
<p>Alternatively, if the first line of a code block contains a shebang, the
language is derived from the path referenced in the shebang. This will only
work for code blocks that are indented using four spaces, not for those
encapsulated in three backticks.</p>
<p>Example:</p>
<div class="highlight"><pre><span></span><code>    #!/usr/bin/python
    import tensorflow as tf
</code></pre></div>
<p>Result:</p>
<div class="highlight"><pre><span></span><code><span class="ch">#!/usr/bin/python</span>
<span class="kn">import</span> <span class="nn">tensorflow</span> <span class="k">as</span> <span class="nn">tf</span>
</code></pre></div>
<h4 id="via-three-colons">via three colons<a class="headerlink" href="#via-three-colons" title="Permanent link">#</a></h4>
<p>If the first line starts with three colons followed by a language identifier,
the first line is stripped. This will only work for code blocks that are
indented using four spaces, not for those encapsulated in three backticks.</p>
<p>Example:</p>
<div class="highlight"><pre><span></span><code>    :::python
    import tensorflow as tf
</code></pre></div>
<p>Result:</p>
<div class="codehilite"><pre><span></span><code><span class="kn">import</span> <span class="nn">tensorflow</span> <span class="k">as</span> <span class="nn">tf</span>
</code></pre></div>

<h3 id="adding-line-numbers">Adding line numbers<a class="headerlink" href="#adding-line-numbers" title="Permanent link">#</a></h3>
<p>Line numbers can be added by enabling the <code>linenums</code> flag in your <code>mkdocs.yml</code>:</p>
<div class="highlight"><pre><span></span><code><span class="nt">markdown_extensions</span><span class="p">:</span>
<span class="w">  </span><span class="p p-Indicator">-</span><span class="w"> </span><span class="l l-Scalar l-Scalar-Plain">codehilite(linenums=true)</span>
</code></pre></div>
<p>Example:</p>
<div class="highlight"><pre><span></span><code>``` python
&quot;&quot;&quot; Bubble sort &quot;&quot;&quot;
def bubble_sort(items):
    for i in range(len(items)):
        for j in range(len(items) - 1 - i):
            if items[j] &gt; items[j + 1]:
                items[j], items[j + 1] = items[j + 1], items[j]
```
</code></pre></div>
<p>Result:</p>
<div class="codehilite"><table class="codehilitetable"><tr><td class="linenos"><div class="linenodiv"><pre><span class="normal">1</span>
<span class="normal">2</span>
<span class="normal">3</span>
<span class="normal">4</span>
<span class="normal">5</span>
<span class="normal">6</span></pre></div></td><td class="code"><div><pre><span></span><code><span class="sd">&quot;&quot;&quot; Bubble sort &quot;&quot;&quot;</span>
<span class="k">def</span> <span class="nf">bubble_sort</span><span class="p">(</span><span class="n">items</span><span class="p">):</span>
    <span class="k">for</span> <span class="n">i</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="nb">len</span><span class="p">(</span><span class="n">items</span><span class="p">)):</span>
        <span class="k">for</span> <span class="n">j</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="nb">len</span><span class="p">(</span><span class="n">items</span><span class="p">)</span> <span class="o">-</span> <span class="mi">1</span> <span class="o">-</span> <span class="n">i</span><span class="p">):</span>
            <span class="k">if</span> <span class="n">items</span><span class="p">[</span><span class="n">j</span><span class="p">]</span> <span class="o">&gt;</span> <span class="n">items</span><span class="p">[</span><span class="n">j</span> <span class="o">+</span> <span class="mi">1</span><span class="p">]:</span>
                <span class="n">items</span><span class="p">[</span><span class="n">j</span><span class="p">],</span> <span class="n">items</span><span class="p">[</span><span class="n">j</span> <span class="o">+</span> <span class="mi">1</span><span class="p">]</span> <span class="o">=</span> <span class="n">items</span><span class="p">[</span><span class="n">j</span> <span class="o">+</span> <span class="mi">1</span><span class="p">],</span> <span class="n">items</span><span class="p">[</span><span class="n">j</span><span class="p">]</span>
</code></pre></div></td></tr></table></div>

<h3 id="highlighting-specific-lines">Highlighting specific lines<a class="headerlink" href="#highlighting-specific-lines" title="Permanent link">#</a></h3>
<p>Specific lines can be highlighted by passing the line numbers to the <code>hl_lines</code>
argument placed right after the language identifier. Line counts start at 1.</p>
<p>Example:</p>
<div class="highlight"><pre><span></span><code>``` python hl_lines=&quot;3 4&quot;
&quot;&quot;&quot; Bubble sort &quot;&quot;&quot;
def bubble_sort(items):
    for i in range(len(items)):
        for j in range(len(items) - 1 - i):
            if items[j] &gt; items[j + 1]:
                items[j], items[j + 1] = items[j + 1], items[j]
```
</code></pre></div>
<p>Result:</p>
<div class="codehilite"><table class="codehilitetable"><tr><td class="linenos"><div class="linenodiv"><pre><span class="normal">1</span>
<span class="normal">2</span>
<span class="normal">3</span>
<span class="normal">4</span>
<span class="normal">5</span>
<span class="normal">6</span></pre></div></td><td class="code"><div><pre><span></span><code><span class="sd">&quot;&quot;&quot; Bubble sort &quot;&quot;&quot;</span>
<span class="k">def</span> <span class="nf">bubble_sort</span><span class="p">(</span><span class="n">items</span><span class="p">):</span>
<span class="hll">    <span class="k">for</span> <span class="n">i</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="nb">len</span><span class="p">(</span><span class="n">items</span><span class="p">)):</span>
</span><span class="hll">        <span class="k">for</span> <span class="n">j</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="nb">len</span><span class="p">(</span><span class="n">items</span><span class="p">)</span> <span class="o">-</span> <span class="mi">1</span> <span class="o">-</span> <span class="n">i</span><span class="p">):</span>
</span>            <span class="k">if</span> <span class="n">items</span><span class="p">[</span><span class="n">j</span><span class="p">]</span> <span class="o">&gt;</span> <span class="n">items</span><span class="p">[</span><span class="n">j</span> <span class="o">+</span> <span class="mi">1</span><span class="p">]:</span>
                <span class="n">items</span><span class="p">[</span><span class="n">j</span><span class="p">],</span> <span class="n">items</span><span class="p">[</span><span class="n">j</span> <span class="o">+</span> <span class="mi">1</span><span class="p">]</span> <span class="o">=</span> <span class="n">items</span><span class="p">[</span><span class="n">j</span> <span class="o">+</span> <span class="mi">1</span><span class="p">],</span> <span class="n">items</span><span class="p">[</span><span class="n">j</span><span class="p">]</span>
</code></pre></div></td></tr></table></div>

<h2 id="supported-languages-excerpt">Supported languages <small>excerpt</small><a class="headerlink" href="#supported-languages-excerpt" title="Permanent link">#</a></h2>
<p>CodeHilite uses <a href="http://pygments.org">Pygments</a>, a generic syntax highlighter with support for
over <a href="https://hub.docker.com/r/squidfunk/mkdocs-material/">300 languages</a>, so the following list of examples is just an excerpt.</p>
<h3 id="bash">Bash<a class="headerlink" href="#bash" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="ch">#!/bin/bash</span>

<span class="k">for</span><span class="w"> </span>OPT<span class="w"> </span><span class="k">in</span><span class="w"> </span><span class="s2">&quot;</span><span class="nv">$@</span><span class="s2">&quot;</span>
<span class="k">do</span>
<span class="w">  </span><span class="k">case</span><span class="w"> </span><span class="s2">&quot;</span><span class="nv">$OPT</span><span class="s2">&quot;</span><span class="w"> </span><span class="k">in</span>
<span class="w">    </span><span class="s1">&#39;-f&#39;</span><span class="w"> </span><span class="o">)</span><span class="w">  </span><span class="nv">canonicalize</span><span class="o">=</span><span class="m">1</span><span class="w"> </span><span class="p">;;</span>
<span class="w">    </span><span class="s1">&#39;-n&#39;</span><span class="w"> </span><span class="o">)</span><span class="w">  </span><span class="nv">switchlf</span><span class="o">=</span><span class="s2">&quot;-n&quot;</span><span class="w"> </span><span class="p">;;</span>
<span class="w">  </span><span class="k">esac</span>
<span class="k">done</span>

<span class="c1"># readlink -f</span>
<span class="k">function</span><span class="w"> </span>__readlink_f<span class="w"> </span><span class="o">{</span>
<span class="w">  </span><span class="nv">target</span><span class="o">=</span><span class="s2">&quot;</span><span class="nv">$1</span><span class="s2">&quot;</span>
<span class="w">  </span><span class="k">while</span><span class="w"> </span><span class="nb">test</span><span class="w"> </span>-n<span class="w"> </span><span class="s2">&quot;</span><span class="nv">$target</span><span class="s2">&quot;</span><span class="p">;</span><span class="w"> </span><span class="k">do</span>
<span class="w">    </span><span class="nv">filepath</span><span class="o">=</span><span class="s2">&quot;</span><span class="nv">$target</span><span class="s2">&quot;</span>
<span class="w">    </span><span class="nb">cd</span><span class="w"> </span><span class="sb">`</span>dirname<span class="w"> </span><span class="s2">&quot;</span><span class="nv">$filepath</span><span class="s2">&quot;</span><span class="sb">`</span>
<span class="w">    </span><span class="nv">target</span><span class="o">=</span><span class="sb">`</span>readlink<span class="w"> </span><span class="s2">&quot;</span><span class="nv">$filepath</span><span class="s2">&quot;</span><span class="sb">`</span>
<span class="w">  </span><span class="k">done</span>
<span class="w">  </span>/bin/echo<span class="w"> </span><span class="nv">$switchlf</span><span class="w"> </span><span class="sb">`</span><span class="nb">pwd</span><span class="w"> </span>-P<span class="sb">`</span>/<span class="sb">`</span>basename<span class="w"> </span><span class="s2">&quot;</span><span class="nv">$filepath</span><span class="s2">&quot;</span><span class="sb">`</span>
<span class="o">}</span>

<span class="k">if</span><span class="w"> </span><span class="o">[</span><span class="w"> </span>!<span class="w"> </span><span class="s2">&quot;</span><span class="nv">$canonicalize</span><span class="s2">&quot;</span><span class="w"> </span><span class="o">]</span><span class="p">;</span><span class="w"> </span><span class="k">then</span>
<span class="w">  </span>readlink<span class="w"> </span><span class="nv">$switchlf</span><span class="w"> </span><span class="s2">&quot;</span><span class="nv">$@</span><span class="s2">&quot;</span>
<span class="k">else</span>
<span class="w">  </span><span class="k">for</span><span class="w"> </span>file<span class="w"> </span><span class="k">in</span><span class="w"> </span><span class="s2">&quot;</span><span class="nv">$@</span><span class="s2">&quot;</span>
<span class="w">  </span><span class="k">do</span>
<span class="w">    </span><span class="k">case</span><span class="w"> </span><span class="s2">&quot;</span><span class="nv">$file</span><span class="s2">&quot;</span><span class="w"> </span><span class="k">in</span>
<span class="w">      </span>-*<span class="w"> </span><span class="o">)</span><span class="w">  </span><span class="p">;;</span>
<span class="w">      </span>*<span class="w">  </span><span class="o">)</span><span class="w">  </span>__readlink_f<span class="w"> </span><span class="s2">&quot;</span><span class="nv">$file</span><span class="s2">&quot;</span><span class="w"> </span><span class="p">;;</span>
<span class="w">    </span><span class="k">esac</span>
<span class="w">    </span><span class="k">done</span>
<span class="k">fi</span>

<span class="nb">exit</span><span class="w"> </span><span class="nv">$?</span>
</code></pre></div>
<h3 id="c">C<a class="headerlink" href="#c" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="k">extern</span><span class="w"> </span><span class="kt">size_t</span>
<span class="nf">pb_varint_scan</span><span class="p">(</span><span class="k">const</span><span class="w"> </span><span class="kt">uint8_t</span><span class="w"> </span><span class="n">data</span><span class="p">[],</span><span class="w"> </span><span class="kt">size_t</span><span class="w"> </span><span class="n">left</span><span class="p">)</span><span class="w"> </span><span class="p">{</span>
<span class="w">  </span><span class="n">assert</span><span class="p">(</span><span class="n">data</span><span class="w"> </span><span class="o">&amp;&amp;</span><span class="w"> </span><span class="n">left</span><span class="p">);</span>
<span class="w">  </span><span class="n">left</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">left</span><span class="w"> </span><span class="o">&gt;</span><span class="w"> </span><span class="mi">10</span><span class="w"> </span><span class="o">?</span><span class="w"> </span><span class="mi">10</span><span class="w"> </span><span class="o">:</span><span class="w"> </span><span class="n">left</span><span class="p">;</span>

<span class="cp">#ifdef __SSE2__</span>

<span class="w">  </span><span class="cm">/* Mapping: remaining bytes ==&gt; bitmask */</span>
<span class="w">  </span><span class="k">static</span><span class="w"> </span><span class="k">const</span><span class="w"> </span><span class="kt">int</span><span class="w"> </span><span class="n">mask_map</span><span class="p">[]</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="p">{</span>
<span class="w">    </span><span class="mh">0x0000</span><span class="p">,</span><span class="w"> </span><span class="mh">0x0001</span><span class="p">,</span><span class="w"> </span><span class="mh">0x0003</span><span class="p">,</span><span class="w"> </span><span class="mh">0x0007</span><span class="p">,</span>
<span class="w">    </span><span class="mh">0x000F</span><span class="p">,</span><span class="w"> </span><span class="mh">0x001F</span><span class="p">,</span><span class="w"> </span><span class="mh">0x003F</span><span class="p">,</span><span class="w"> </span><span class="mh">0x007F</span><span class="p">,</span>
<span class="w">    </span><span class="mh">0x00FF</span><span class="p">,</span><span class="w"> </span><span class="mh">0x01FF</span><span class="p">,</span><span class="w"> </span><span class="mh">0x03FF</span>
<span class="w">  </span><span class="p">};</span>

<span class="w">  </span><span class="cm">/* Load buffer into 128-bit integer and create high-bit mask */</span>
<span class="w">  </span><span class="kr">__m128i</span><span class="w"> </span><span class="n">temp</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">_mm_loadu_si128</span><span class="p">((</span><span class="k">const</span><span class="w"> </span><span class="kr">__m128i</span><span class="w"> </span><span class="o">*</span><span class="p">)</span><span class="n">data</span><span class="p">);</span>
<span class="w">  </span><span class="kr">__m128i</span><span class="w"> </span><span class="n">high</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">_mm_set1_epi8</span><span class="p">(</span><span class="mh">0x80</span><span class="p">);</span>

<span class="w">  </span><span class="cm">/* Intersect and extract mask with high-bits set */</span>
<span class="w">  </span><span class="kt">int</span><span class="w"> </span><span class="n">mask</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">_mm_movemask_epi8</span><span class="p">(</span><span class="n">_mm_and_si128</span><span class="p">(</span><span class="n">temp</span><span class="p">,</span><span class="w"> </span><span class="n">high</span><span class="p">));</span>
<span class="w">  </span><span class="n">mask</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="p">(</span><span class="n">mask</span><span class="w"> </span><span class="o">&amp;</span><span class="w"> </span><span class="n">mask_map</span><span class="p">[</span><span class="n">left</span><span class="p">])</span><span class="w"> </span><span class="o">^</span><span class="w"> </span><span class="n">mask_map</span><span class="p">[</span><span class="n">left</span><span class="p">];</span>

<span class="w">  </span><span class="cm">/* Count trailing zeroes */</span>
<span class="w">  </span><span class="k">return</span><span class="w"> </span><span class="n">mask</span><span class="w"> </span><span class="o">?</span><span class="w"> </span><span class="n">__builtin_ctz</span><span class="p">(</span><span class="n">mask</span><span class="p">)</span><span class="w"> </span><span class="o">+</span><span class="w"> </span><span class="mi">1</span><span class="w"> </span><span class="o">:</span><span class="w"> </span><span class="mi">0</span><span class="p">;</span>

<span class="cp">#else</span>

<span class="w">  </span><span class="cm">/* Linear scan */</span>
<span class="w">  </span><span class="kt">size_t</span><span class="w"> </span><span class="n">size</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mi">0</span><span class="p">;</span>
<span class="w">  </span><span class="k">while</span><span class="w"> </span><span class="p">(</span><span class="n">data</span><span class="p">[</span><span class="n">size</span><span class="o">++</span><span class="p">]</span><span class="w"> </span><span class="o">&amp;</span><span class="w"> </span><span class="mh">0x80</span><span class="p">)</span>
<span class="w">    </span><span class="k">if</span><span class="w"> </span><span class="p">(</span><span class="o">!--</span><span class="n">left</span><span class="p">)</span>
<span class="w">      </span><span class="k">return</span><span class="w"> </span><span class="mi">0</span><span class="p">;</span>
<span class="w">  </span><span class="k">return</span><span class="w"> </span><span class="n">size</span><span class="p">;</span>

<span class="cp">#endif </span><span class="cm">/* __SSE2__ */</span>

<span class="p">}</span>
</code></pre></div>
<h3 id="c_1">C++<a class="headerlink" href="#c_1" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="n">Extension</span><span class="o">::</span>
<span class="nf">Extension</span><span class="p">(</span><span class="k">const</span><span class="w"> </span><span class="n">Descriptor</span><span class="w"> </span><span class="o">*</span><span class="n">descriptor</span><span class="p">,</span><span class="w"> </span><span class="k">const</span><span class="w"> </span><span class="n">Descriptor</span><span class="w"> </span><span class="o">*</span><span class="n">scope</span><span class="p">)</span><span class="w"> </span><span class="o">:</span>
<span class="w">    </span><span class="n">descriptor_</span><span class="p">(</span><span class="n">descriptor</span><span class="p">),</span>
<span class="w">    </span><span class="n">scope_</span><span class="p">(</span><span class="n">scope</span><span class="p">)</span><span class="w"> </span><span class="p">{</span>

<span class="w">  </span><span class="cm">/* Extract full name for signature */</span>
<span class="w">  </span><span class="n">variables_</span><span class="p">[</span><span class="s">&quot;signature&quot;</span><span class="p">]</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">descriptor_</span><span class="o">-&gt;</span><span class="n">full_name</span><span class="p">();</span>

<span class="w">  </span><span class="cm">/* Prepare message symbol */</span>
<span class="w">  </span><span class="n">variables_</span><span class="p">[</span><span class="s">&quot;message&quot;</span><span class="p">]</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">StringReplace</span><span class="p">(</span>
<span class="w">    </span><span class="n">variables_</span><span class="p">[</span><span class="s">&quot;signature&quot;</span><span class="p">],</span><span class="w"> </span><span class="s">&quot;.&quot;</span><span class="p">,</span><span class="w"> </span><span class="s">&quot;_&quot;</span><span class="p">,</span><span class="w"> </span><span class="nb">true</span><span class="p">);</span>
<span class="w">  </span><span class="n">LowerString</span><span class="p">(</span><span class="o">&amp;</span><span class="p">(</span><span class="n">variables_</span><span class="p">[</span><span class="s">&quot;message&quot;</span><span class="p">]));</span>

<span class="w">  </span><span class="cm">/* Suffix scope to identifiers, if given */</span>
<span class="w">  </span><span class="n">string</span><span class="w"> </span><span class="n">suffix</span><span class="w"> </span><span class="p">(</span><span class="s">&quot;&quot;</span><span class="p">);</span>
<span class="w">  </span><span class="k">if</span><span class="w"> </span><span class="p">(</span><span class="n">scope_</span><span class="p">)</span><span class="w"> </span><span class="p">{</span>
<span class="w">    </span><span class="n">suffix</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">scope_</span><span class="o">-&gt;</span><span class="n">full_name</span><span class="p">();</span>

<span class="w">    </span><span class="cm">/* Check if the base and extension types are in the same package */</span>
<span class="w">    </span><span class="k">if</span><span class="w"> </span><span class="p">(</span><span class="o">!</span><span class="n">scope_</span><span class="o">-&gt;</span><span class="n">file</span><span class="p">()</span><span class="o">-&gt;</span><span class="n">package</span><span class="p">().</span><span class="n">compare</span><span class="p">(</span><span class="n">descriptor_</span><span class="o">-&gt;</span><span class="n">file</span><span class="p">()</span><span class="o">-&gt;</span><span class="n">package</span><span class="p">()))</span>
<span class="w">      </span><span class="n">suffix</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">StripPrefixString</span><span class="p">(</span><span class="n">suffix</span><span class="p">,</span>
<span class="w">        </span><span class="n">scope_</span><span class="o">-&gt;</span><span class="n">file</span><span class="p">()</span><span class="o">-&gt;</span><span class="n">package</span><span class="p">()</span><span class="w"> </span><span class="o">+</span><span class="w"> </span><span class="s">&quot;.&quot;</span><span class="p">);</span>

<span class="w">    </span><span class="cm">/* Append to signature */</span>
<span class="w">    </span><span class="n">variables_</span><span class="p">[</span><span class="s">&quot;signature&quot;</span><span class="p">]</span><span class="w"> </span><span class="o">+=</span><span class="w"> </span><span class="s">&quot;.[&quot;</span><span class="w"> </span><span class="o">+</span><span class="w"> </span><span class="n">suffix</span><span class="w"> </span><span class="o">+</span><span class="s">&quot;]&quot;</span><span class="p">;</span>
<span class="w">    </span><span class="n">suffix</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="s">&quot;_&quot;</span><span class="w"> </span><span class="o">+</span><span class="w"> </span><span class="n">suffix</span><span class="p">;</span>
<span class="w">  </span><span class="p">}</span>

<span class="w">  </span><span class="cm">/* Prepare extension symbol */</span>
<span class="w">  </span><span class="n">variables_</span><span class="p">[</span><span class="s">&quot;extension&quot;</span><span class="p">]</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">StringReplace</span><span class="p">(</span>
<span class="w">    </span><span class="n">suffix</span><span class="p">,</span><span class="w"> </span><span class="s">&quot;.&quot;</span><span class="p">,</span><span class="w"> </span><span class="s">&quot;_&quot;</span><span class="p">,</span><span class="w"> </span><span class="nb">true</span><span class="p">);</span>
<span class="w">  </span><span class="n">LowerString</span><span class="p">(</span><span class="o">&amp;</span><span class="p">(</span><span class="n">variables_</span><span class="p">[</span><span class="s">&quot;extension&quot;</span><span class="p">]));</span>
<span class="p">}</span>
</code></pre></div>
<h3 id="c_2">C&#35;<a class="headerlink" href="#c_2" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="k">public</span><span class="w"> </span><span class="k">static</span><span class="w"> </span><span class="k">void</span><span class="w"> </span><span class="nf">Send</span><span class="p">(</span>
<span class="w">    </span><span class="n">Socket</span><span class="w"> </span><span class="n">socket</span><span class="p">,</span><span class="w"> </span><span class="kt">byte</span><span class="p">[]</span><span class="w"> </span><span class="n">buffer</span><span class="p">,</span><span class="w"> </span><span class="kt">int</span><span class="w"> </span><span class="n">offset</span><span class="p">,</span><span class="w"> </span><span class="kt">int</span><span class="w"> </span><span class="n">size</span><span class="p">,</span><span class="w"> </span><span class="kt">int</span><span class="w"> </span><span class="n">timeout</span><span class="p">)</span><span class="w"> </span><span class="p">{</span>
<span class="w">  </span><span class="kt">int</span><span class="w"> </span><span class="n">startTickCount</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">Environment</span><span class="p">.</span><span class="n">TickCount</span><span class="p">;</span>
<span class="w">  </span><span class="kt">int</span><span class="w"> </span><span class="n">sent</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="m">0</span><span class="p">;</span>
<span class="w">  </span><span class="k">do</span><span class="w"> </span><span class="p">{</span>
<span class="w">    </span><span class="k">if</span><span class="w"> </span><span class="p">(</span><span class="n">Environment</span><span class="p">.</span><span class="n">TickCount</span><span class="w"> </span><span class="o">&gt;</span><span class="w"> </span><span class="n">startTickCount</span><span class="w"> </span><span class="o">+</span><span class="w"> </span><span class="n">timeout</span><span class="p">)</span>
<span class="w">      </span><span class="k">throw</span><span class="w"> </span><span class="k">new</span><span class="w"> </span><span class="nf">Exception</span><span class="p">(</span><span class="s">&quot;Timeout.&quot;</span><span class="p">);</span>
<span class="w">    </span><span class="k">try</span><span class="w"> </span><span class="p">{</span>
<span class="w">      </span><span class="n">sent</span><span class="w"> </span><span class="o">+=</span><span class="w"> </span><span class="n">socket</span><span class="p">.</span><span class="n">Send</span><span class="p">(</span><span class="n">buffer</span><span class="p">,</span><span class="w"> </span><span class="n">offset</span><span class="w"> </span><span class="o">+</span><span class="w"> </span><span class="n">sent</span><span class="p">,</span>
<span class="w">        </span><span class="n">size</span><span class="w"> </span><span class="o">-</span><span class="w"> </span><span class="n">sent</span><span class="p">,</span><span class="w"> </span><span class="n">SocketFlags</span><span class="p">.</span><span class="n">None</span><span class="p">);</span>
<span class="w">    </span><span class="p">}</span><span class="w"> </span><span class="k">catch</span><span class="w"> </span><span class="p">(</span><span class="n">SocketException</span><span class="w"> </span><span class="n">ex</span><span class="p">)</span><span class="w"> </span><span class="p">{</span>
<span class="w">      </span><span class="k">if</span><span class="w"> </span><span class="p">(</span><span class="n">ex</span><span class="p">.</span><span class="n">SocketErrorCode</span><span class="w"> </span><span class="o">==</span><span class="w"> </span><span class="n">SocketError</span><span class="p">.</span><span class="n">WouldBlock</span><span class="w"> </span><span class="o">||</span>
<span class="w">          </span><span class="n">ex</span><span class="p">.</span><span class="n">SocketErrorCode</span><span class="w"> </span><span class="o">==</span><span class="w"> </span><span class="n">SocketError</span><span class="p">.</span><span class="n">IOPending</span><span class="w"> </span><span class="o">||</span>
<span class="w">          </span><span class="n">ex</span><span class="p">.</span><span class="n">SocketErrorCode</span><span class="w"> </span><span class="o">==</span><span class="w"> </span><span class="n">SocketError</span><span class="p">.</span><span class="n">NoBufferSpaceAvailable</span><span class="p">)</span><span class="w"> </span><span class="p">{</span>
<span class="w">        </span><span class="cm">/* Socket buffer is probably full, wait and try again */</span>
<span class="w">        </span><span class="n">Thread</span><span class="p">.</span><span class="n">Sleep</span><span class="p">(</span><span class="m">30</span><span class="p">);</span>
<span class="w">      </span><span class="p">}</span><span class="w"> </span><span class="k">else</span><span class="w"> </span><span class="p">{</span>
<span class="w">        </span><span class="k">throw</span><span class="w"> </span><span class="n">ex</span><span class="p">;</span>
<span class="w">      </span><span class="p">}</span>
<span class="w">    </span><span class="p">}</span>
<span class="w">  </span><span class="p">}</span><span class="w"> </span><span class="k">while</span><span class="w"> </span><span class="p">(</span><span class="n">sent</span><span class="w"> </span><span class="o">&lt;</span><span class="w"> </span><span class="n">size</span><span class="p">);</span>
<span class="p">}</span>
</code></pre></div>
<h3 id="clojure">Clojure<a class="headerlink" href="#clojure" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="p">(</span><span class="nf">clojure-version</span><span class="p">)</span>

<span class="p">(</span><span class="kd">defn </span><span class="nv">partition-when</span>
<span class="w">  </span><span class="p">[</span><span class="nv">f</span><span class="p">]</span>
<span class="w">  </span><span class="p">(</span><span class="k">fn </span><span class="p">[</span><span class="nv">rf</span><span class="p">]</span>
<span class="w">    </span><span class="p">(</span><span class="k">let </span><span class="p">[</span><span class="nv">a</span><span class="w"> </span><span class="p">(</span><span class="nf">java.util.ArrayList.</span><span class="p">)</span>
<span class="w">          </span><span class="nv">fval</span><span class="w"> </span><span class="p">(</span><span class="nf">volatile!</span><span class="w"> </span><span class="nv">false</span><span class="p">)]</span>
<span class="w">      </span><span class="p">(</span><span class="nf">fn</span>
<span class="w">        </span><span class="p">([]</span><span class="w"> </span><span class="p">(</span><span class="nf">rf</span><span class="p">))</span>
<span class="w">        </span><span class="p">([</span><span class="nv">result</span><span class="p">]</span>
<span class="w">           </span><span class="p">(</span><span class="k">let </span><span class="p">[</span><span class="nv">result</span><span class="w"> </span><span class="p">(</span><span class="k">if </span><span class="p">(</span><span class="nf">.isEmpty</span><span class="w"> </span><span class="nv">a</span><span class="p">)</span>
<span class="w">                          </span><span class="nv">result</span>
<span class="w">                          </span><span class="p">(</span><span class="k">let </span><span class="p">[</span><span class="nv">v</span><span class="w"> </span><span class="p">(</span><span class="nf">vec</span><span class="w"> </span><span class="p">(</span><span class="nf">.toArray</span><span class="w"> </span><span class="nv">a</span><span class="p">))]</span>
<span class="w">                            </span><span class="c1">;; Clear first</span>
<span class="w">                            </span><span class="p">(</span><span class="nf">.clear</span><span class="w"> </span><span class="nv">a</span><span class="p">)</span>
<span class="w">                            </span><span class="p">(</span><span class="nf">unreduced</span><span class="w"> </span><span class="p">(</span><span class="nf">rf</span><span class="w"> </span><span class="nv">result</span><span class="w"> </span><span class="nv">v</span><span class="p">))))]</span>
<span class="w">             </span><span class="p">(</span><span class="nf">rf</span><span class="w"> </span><span class="nv">result</span><span class="p">)))</span>
<span class="w">        </span><span class="p">([</span><span class="nv">result</span><span class="w"> </span><span class="nv">input</span><span class="p">]</span>
<span class="w">            </span><span class="p">(</span><span class="nb">if-not </span><span class="p">(</span><span class="nb">and </span><span class="p">(</span><span class="nf">f</span><span class="w"> </span><span class="nv">input</span><span class="p">)</span><span class="w">  </span><span class="o">@</span><span class="nv">fval</span><span class="p">)</span>
<span class="w">               </span><span class="p">(</span><span class="nf">do</span>
<span class="w">                 </span><span class="p">(</span><span class="nf">vreset!</span><span class="w"> </span><span class="nv">fval</span><span class="w"> </span><span class="nv">true</span><span class="p">)</span>
<span class="w">                 </span><span class="p">(</span><span class="nf">.add</span><span class="w"> </span><span class="nv">a</span><span class="w"> </span><span class="nv">input</span><span class="p">)</span>
<span class="w">                 </span><span class="nv">result</span><span class="p">)</span>
<span class="w">               </span><span class="p">(</span><span class="k">let </span><span class="p">[</span><span class="nv">v</span><span class="w"> </span><span class="p">(</span><span class="nf">vec</span><span class="w"> </span><span class="p">(</span><span class="nf">.toArray</span><span class="w"> </span><span class="nv">a</span><span class="p">))]</span>
<span class="w">                 </span><span class="p">(</span><span class="nf">.clear</span><span class="w"> </span><span class="nv">a</span><span class="p">)</span>
<span class="w">                 </span><span class="p">(</span><span class="k">let </span><span class="p">[</span><span class="nv">ret</span><span class="w"> </span><span class="p">(</span><span class="nf">rf</span><span class="w"> </span><span class="nv">result</span><span class="w"> </span><span class="nv">v</span><span class="p">)]</span>
<span class="w">                   </span><span class="p">(</span><span class="nb">when-not </span><span class="p">(</span><span class="nf">reduced?</span><span class="w"> </span><span class="nv">ret</span><span class="p">)</span>
<span class="w">                     </span><span class="p">(</span><span class="nf">.add</span><span class="w"> </span><span class="nv">a</span><span class="w"> </span><span class="nv">input</span><span class="p">))</span>
<span class="w">                   </span><span class="nv">ret</span><span class="p">))))))))</span>


<span class="p">(</span><span class="nb">into </span><span class="p">[]</span><span class="w"> </span><span class="p">(</span><span class="nf">partition-when</span>
<span class="w">          </span><span class="o">#</span><span class="p">(</span><span class="nf">.startsWith</span><span class="w"> </span><span class="nv">%</span><span class="w"> </span><span class="s">&quot;&gt;&gt;&quot;</span><span class="p">))</span>
<span class="w">          </span><span class="p">[</span><span class="s">&quot;1d&quot;</span><span class="w"> </span><span class="s">&quot;33&quot;</span><span class="w"> </span><span class="s">&quot;&gt;&gt; 1&quot;</span><span class="w"> </span><span class="s">&quot;&gt;&gt; 2&quot;</span><span class="w"> </span><span class="s">&quot;22&quot;</span><span class="w"> </span><span class="s">&quot;&gt;&gt; 3&quot;</span><span class="p">])</span>
</code></pre></div>
<h3 id="diff">Diff<a class="headerlink" href="#diff" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="gh">Index: grunt.js</span>
<span class="gh">===================================================================</span>
<span class="gd">--- grunt.js    (revision 31200)</span>
<span class="gi">+++ grunt.js    (working copy)</span>
<span class="gu">@@ -12,6 +12,7 @@</span>

<span class="w"> </span>module.exports = function (grunt) {

<span class="gi">+  console.log(&#39;hello world&#39;);</span>
<span class="w"> </span>  // Project configuration.
<span class="w"> </span>  grunt.initConfig({
<span class="w"> </span>    lint: {
<span class="gu">@@ -19,10 +20,6 @@</span>
<span class="w"> </span>        &#39;packages/services.web/{!(test)/**/,}*.js&#39;,
<span class="w"> </span>        &#39;packages/error/**/*.js&#39;
<span class="w"> </span>      ],
<span class="gd">-      scripts: [</span>
<span class="gd">-        &#39;grunt.js&#39;,</span>
<span class="gd">-        &#39;db/**/*.js&#39;</span>
<span class="gd">-      ],</span>
<span class="w"> </span>      browser: [
<span class="w"> </span>        &#39;packages/web/server.js&#39;,
<span class="w"> </span>        &#39;packages/web/server/**/*.js&#39;,
</code></pre></div>
<h3 id="docker">Docker<a class="headerlink" href="#docker" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="k">FROM</span><span class="w"> </span><span class="s">ubuntu</span>

<span class="c"># Install vnc, xvfb in order to create a &#39;fake&#39; display and firefox</span>
<span class="k">RUN</span><span class="w"> </span>apt-get<span class="w"> </span>update<span class="w"> </span><span class="o">&amp;&amp;</span><span class="w"> </span>apt-get<span class="w"> </span>install<span class="w"> </span>-y<span class="w"> </span>x11vnc<span class="w"> </span>xvfb<span class="w"> </span>firefox
<span class="k">RUN</span><span class="w"> </span>mkdir<span class="w"> </span>~/.vnc

<span class="c"># Setup a password</span>
<span class="k">RUN</span><span class="w"> </span>x11vnc<span class="w"> </span>-storepasswd<span class="w"> </span><span class="m">1234</span><span class="w"> </span>~/.vnc/passwd

<span class="c"># Autostart firefox (might not be the best way, but it does the trick)</span>
<span class="k">RUN</span><span class="w"> </span>bash<span class="w"> </span>-c<span class="w"> </span><span class="s1">&#39;echo &quot;firefox&quot; &gt;&gt; /.bashrc&#39;</span>

<span class="k">EXPOSE</span><span class="w"> </span><span class="s">5900</span>
<span class="k">CMD</span><span class="w"> </span><span class="p">[</span><span class="s2">&quot;x11vnc&quot;</span><span class="p">,</span><span class="w"> </span><span class="s2">&quot;-forever&quot;</span><span class="p">,</span><span class="w"> </span><span class="s2">&quot;-usepw&quot;</span><span class="p">,</span><span class="w"> </span><span class="s2">&quot;-create&quot;</span><span class="p">]</span>
</code></pre></div>
<h3 id="elixir">Elixir<a class="headerlink" href="#elixir" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="kn">require</span><span class="w"> </span><span class="nc">Logger</span>

<span class="kd">def</span><span class="w"> </span><span class="n">accept</span><span class="p">(</span><span class="n">port</span><span class="p">)</span><span class="w"> </span><span class="k">do</span>
<span class="w">  </span><span class="p">{</span><span class="ss">:ok</span><span class="p">,</span><span class="w"> </span><span class="n">socket</span><span class="p">}</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="ss">:gen_tcp</span><span class="o">.</span><span class="n">listen</span><span class="p">(</span><span class="n">port</span><span class="p">,</span>
<span class="w">                    </span><span class="p">[</span><span class="ss">:binary</span><span class="p">,</span><span class="w"> </span><span class="ss">packet</span><span class="p">:</span><span class="w"> </span><span class="ss">:line</span><span class="p">,</span><span class="w"> </span><span class="ss">active</span><span class="p">:</span><span class="w"> </span><span class="no">false</span><span class="p">,</span><span class="w"> </span><span class="ss">reuseaddr</span><span class="p">:</span><span class="w"> </span><span class="no">true</span><span class="p">])</span>
<span class="w">  </span><span class="nc">Logger</span><span class="o">.</span><span class="n">info</span><span class="w"> </span><span class="s2">&quot;Accepting connections on port </span><span class="si">#{</span><span class="n">port</span><span class="si">}</span><span class="s2">&quot;</span>
<span class="w">  </span><span class="n">loop_acceptor</span><span class="p">(</span><span class="n">socket</span><span class="p">)</span>
<span class="k">end</span>

<span class="kd">defp</span><span class="w"> </span><span class="n">loop_acceptor</span><span class="p">(</span><span class="n">socket</span><span class="p">)</span><span class="w"> </span><span class="k">do</span>
<span class="w">  </span><span class="p">{</span><span class="ss">:ok</span><span class="p">,</span><span class="w"> </span><span class="n">client</span><span class="p">}</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="ss">:gen_tcp</span><span class="o">.</span><span class="n">accept</span><span class="p">(</span><span class="n">socket</span><span class="p">)</span>
<span class="w">  </span><span class="n">serve</span><span class="p">(</span><span class="n">client</span><span class="p">)</span>
<span class="w">  </span><span class="n">loop_acceptor</span><span class="p">(</span><span class="n">socket</span><span class="p">)</span>
<span class="k">end</span>

<span class="kd">defp</span><span class="w"> </span><span class="n">serve</span><span class="p">(</span><span class="n">socket</span><span class="p">)</span><span class="w"> </span><span class="k">do</span>
<span class="w">  </span><span class="n">socket</span>
<span class="w">  </span><span class="o">|&gt;</span><span class="w"> </span><span class="n">read_line</span><span class="p">()</span>
<span class="w">  </span><span class="o">|&gt;</span><span class="w"> </span><span class="n">write_line</span><span class="p">(</span><span class="n">socket</span><span class="p">)</span>

<span class="w">  </span><span class="n">serve</span><span class="p">(</span><span class="n">socket</span><span class="p">)</span>
<span class="k">end</span>

<span class="kd">defp</span><span class="w"> </span><span class="n">read_line</span><span class="p">(</span><span class="n">socket</span><span class="p">)</span><span class="w"> </span><span class="k">do</span>
<span class="w">  </span><span class="p">{</span><span class="ss">:ok</span><span class="p">,</span><span class="w"> </span><span class="n">data</span><span class="p">}</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="ss">:gen_tcp</span><span class="o">.</span><span class="n">recv</span><span class="p">(</span><span class="n">socket</span><span class="p">,</span><span class="w"> </span><span class="mi">0</span><span class="p">)</span>
<span class="w">  </span><span class="n">data</span>
<span class="k">end</span>

<span class="kd">defp</span><span class="w"> </span><span class="n">write_line</span><span class="p">(</span><span class="n">line</span><span class="p">,</span><span class="w"> </span><span class="n">socket</span><span class="p">)</span><span class="w"> </span><span class="k">do</span>
<span class="w">  </span><span class="ss">:gen_tcp</span><span class="o">.</span><span class="n">send</span><span class="p">(</span><span class="n">socket</span><span class="p">,</span><span class="w"> </span><span class="n">line</span><span class="p">)</span>
<span class="k">end</span>
</code></pre></div>
<h3 id="erlang">Erlang<a class="headerlink" href="#erlang" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="nf">circular</span><span class="p">(</span><span class="nv">Defs</span><span class="p">)</span><span class="w"> </span><span class="o">-&gt;</span>
<span class="w">  </span><span class="p">[</span><span class="w"> </span><span class="p">{</span><span class="w"> </span><span class="p">{</span><span class="w"> </span><span class="nv">Type</span><span class="p">,</span><span class="w"> </span><span class="nv">Base</span><span class="w"> </span><span class="p">},</span><span class="w"> </span><span class="nv">Fields</span><span class="w"> </span><span class="p">}</span><span class="w"> </span><span class="p">||</span>
<span class="w">    </span><span class="p">{</span><span class="w"> </span><span class="p">{</span><span class="w"> </span><span class="nv">Type</span><span class="p">,</span><span class="w"> </span><span class="nv">Base</span><span class="w"> </span><span class="p">},</span><span class="w"> </span><span class="nv">Fields</span><span class="w"> </span><span class="p">}</span><span class="w"> </span><span class="o">&lt;-</span><span class="w"> </span><span class="nv">Defs</span><span class="p">,</span><span class="w"> </span><span class="nv">Type</span><span class="w"> </span><span class="o">==</span><span class="w"> </span><span class="n">msg</span><span class="p">,</span><span class="w"> </span><span class="n">circular</span><span class="p">(</span><span class="nv">Base</span><span class="p">,</span><span class="w"> </span><span class="nv">Defs</span><span class="p">)</span><span class="w"> </span><span class="p">].</span>

<span class="nf">circular</span><span class="p">(</span><span class="nv">Base</span><span class="p">,</span><span class="w"> </span><span class="nv">Defs</span><span class="p">)</span><span class="w"> </span><span class="o">-&gt;</span>
<span class="w">  </span><span class="nv">Fields</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="nn">proplists</span><span class="p">:</span><span class="nf">get_value</span><span class="p">({</span><span class="w"> </span><span class="n">msg</span><span class="p">,</span><span class="w"> </span><span class="nv">Base</span><span class="w"> </span><span class="p">},</span><span class="w"> </span><span class="nv">Defs</span><span class="p">),</span>
<span class="w">  </span><span class="n">circular</span><span class="p">(</span><span class="nv">Defs</span><span class="p">,</span><span class="w"> </span><span class="nv">Fields</span><span class="p">,</span><span class="w"> </span><span class="p">[</span><span class="nv">Base</span><span class="p">]).</span>

<span class="nf">circular</span><span class="p">(_</span><span class="nv">Defs</span><span class="p">,</span><span class="w"> </span><span class="p">[],</span><span class="w"> </span><span class="p">_</span><span class="nv">Path</span><span class="p">)</span><span class="w"> </span><span class="o">-&gt;</span>
<span class="w">  </span><span class="n">false</span><span class="p">;</span>
<span class="nf">circular</span><span class="p">(</span><span class="nv">Defs</span><span class="p">,</span><span class="w"> </span><span class="p">[</span><span class="nv">Field</span><span class="w"> </span><span class="p">|</span><span class="w"> </span><span class="nv">Fields</span><span class="p">],</span><span class="w"> </span><span class="nv">Path</span><span class="p">)</span><span class="w"> </span><span class="o">-&gt;</span>
<span class="w">  </span><span class="k">case</span><span class="w"> </span><span class="nv">Field</span><span class="nl">#field.type</span><span class="w"> </span><span class="k">of</span>
<span class="w">    </span><span class="p">{</span><span class="w"> </span><span class="n">msg</span><span class="p">,</span><span class="w"> </span><span class="nv">Type</span><span class="w"> </span><span class="p">}</span><span class="w"> </span><span class="o">-&gt;</span>
<span class="w">      </span><span class="k">case</span><span class="w"> </span><span class="nn">lists</span><span class="p">:</span><span class="nf">member</span><span class="p">(</span><span class="nv">Type</span><span class="p">,</span><span class="w"> </span><span class="nv">Path</span><span class="p">)</span><span class="w"> </span><span class="k">of</span>
<span class="w">        </span><span class="n">false</span><span class="w"> </span><span class="o">-&gt;</span>
<span class="w">          </span><span class="nv">Children</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="nn">proplists</span><span class="p">:</span><span class="nf">get_value</span><span class="p">({</span><span class="w"> </span><span class="n">msg</span><span class="p">,</span><span class="w"> </span><span class="nv">Type</span><span class="w"> </span><span class="p">},</span><span class="w"> </span><span class="nv">Defs</span><span class="p">),</span>
<span class="w">          </span><span class="k">case</span><span class="w"> </span><span class="n">circular</span><span class="p">(</span><span class="nv">Defs</span><span class="p">,</span><span class="w"> </span><span class="nv">Children</span><span class="p">,</span><span class="w"> </span><span class="p">[</span><span class="nv">Type</span><span class="w"> </span><span class="p">|</span><span class="w"> </span><span class="nv">Path</span><span class="p">])</span><span class="w"> </span><span class="k">of</span>
<span class="w">            </span><span class="n">false</span><span class="w"> </span><span class="o">-&gt;</span><span class="w"> </span><span class="n">circular</span><span class="p">(</span><span class="nv">Defs</span><span class="p">,</span><span class="w"> </span><span class="nv">Fields</span><span class="p">,</span><span class="w"> </span><span class="nv">Path</span><span class="p">);</span>
<span class="w">            </span><span class="n">true</span><span class="w">  </span><span class="o">-&gt;</span><span class="w"> </span><span class="n">true</span>
<span class="w">          </span><span class="k">end</span><span class="p">;</span>
<span class="w">        </span><span class="n">true</span><span class="w"> </span><span class="o">-&gt;</span>
<span class="w">          </span><span class="nv">Type</span><span class="w"> </span><span class="o">==</span><span class="w"> </span><span class="nn">lists</span><span class="p">:</span><span class="nf">last</span><span class="p">(</span><span class="nv">Path</span><span class="p">)</span><span class="w"> </span><span class="ow">andalso</span>
<span class="w">            </span><span class="p">(</span><span class="nb">length</span><span class="p">(</span><span class="nv">Path</span><span class="p">)</span><span class="w"> </span><span class="o">==</span><span class="w"> </span><span class="mi">1</span><span class="w"> </span><span class="ow">orelse</span><span class="w"> </span><span class="ow">not</span><span class="w"> </span><span class="n">is_tree</span><span class="p">(</span><span class="nv">Path</span><span class="p">))</span>
<span class="w">      </span><span class="k">end</span><span class="p">;</span>
<span class="w">    </span><span class="p">_</span><span class="w"> </span><span class="o">-&gt;</span>
<span class="w">      </span><span class="n">circular</span><span class="p">(</span><span class="nv">Defs</span><span class="p">,</span><span class="w"> </span><span class="nv">Fields</span><span class="p">,</span><span class="w"> </span><span class="nv">Path</span><span class="p">)</span>
<span class="w">  </span><span class="k">end</span><span class="p">.</span>
</code></pre></div>
<h3 id="f">F&#35;<a class="headerlink" href="#f" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="sd">/// Asynchronously download retangles from the server</span>
<span class="sd">/// and decode the JSON format to F# Rectangle record</span>
<span class="k">let</span><span class="w"> </span><span class="o">[&lt;</span><span class="n">Js</span><span class="o">&gt;]</span><span class="w"> </span><span class="n">getRectangles</span><span class="w"> </span><span class="bp">()</span><span class="w"> </span><span class="o">:</span><span class="w"> </span><span class="n">Async</span><span class="o">&lt;</span><span class="n">Rectangle</span><span class="bp">[]</span><span class="o">&gt;</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">async</span><span class="w"> </span><span class="o">{</span>
<span class="w">  </span><span class="k">let</span><span class="w"> </span><span class="nv">req</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">XMLHttpRequest</span><span class="bp">()</span>
<span class="w">  </span><span class="n">req</span><span class="o">.</span><span class="n">Open</span><span class="o">(</span><span class="s">&quot;POST&quot;</span><span class="o">,</span><span class="w"> </span><span class="s">&quot;/get&quot;</span><span class="o">,</span><span class="w"> </span><span class="k">true</span><span class="o">)</span>
<span class="w">  </span><span class="k">let!</span><span class="w"> </span><span class="nv">resp</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">req</span><span class="o">.</span><span class="n">AsyncSend</span><span class="bp">()</span>
<span class="w">  </span><span class="k">return</span><span class="w"> </span><span class="nn">JSON</span><span class="p">.</span><span class="n">parse</span><span class="o">(</span><span class="n">resp</span><span class="o">)</span><span class="w"> </span><span class="o">}</span>

<span class="sd">/// Repeatedly update rectangles after 0.5 sec</span>
<span class="k">let</span><span class="w"> </span><span class="o">[&lt;</span><span class="n">Js</span><span class="o">&gt;]</span><span class="w"> </span><span class="n">updateLoop</span><span class="w"> </span><span class="bp">()</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">async</span><span class="w"> </span><span class="o">{</span>
<span class="w">  </span><span class="k">while</span><span class="w"> </span><span class="k">true</span><span class="w"> </span><span class="k">do</span>
<span class="w">    </span><span class="k">do</span><span class="o">!</span><span class="w"> </span><span class="nn">Async</span><span class="p">.</span><span class="n">Sleep</span><span class="o">(</span><span class="mi">500</span><span class="o">)</span>
<span class="w">    </span><span class="k">let!</span><span class="w"> </span><span class="nv">rects</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">getRectangles</span><span class="bp">()</span>
<span class="w">    </span><span class="n">cleanRectangles</span><span class="bp">()</span>
<span class="w">    </span><span class="n">rects</span><span class="w"> </span><span class="o">|&gt;</span><span class="w"> </span><span class="nn">Array</span><span class="p">.</span><span class="n">iter</span><span class="w"> </span><span class="n">createRectangle</span><span class="w"> </span><span class="o">}</span>
</code></pre></div>
<h3 id="go">Go<a class="headerlink" href="#go" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="kn">package</span><span class="w"> </span><span class="nx">main</span>

<span class="kn">import</span><span class="w"> </span><span class="s">&quot;fmt&quot;</span>

<span class="kd">func</span><span class="w"> </span><span class="nx">counter</span><span class="p">(</span><span class="nx">id</span><span class="w"> </span><span class="kt">int</span><span class="p">,</span><span class="w"> </span><span class="nx">channel</span><span class="w"> </span><span class="kd">chan</span><span class="w"> </span><span class="kt">int</span><span class="p">,</span><span class="w"> </span><span class="nx">closer</span><span class="w"> </span><span class="kt">bool</span><span class="p">)</span><span class="w"> </span><span class="p">{</span>
<span class="w">  </span><span class="k">for</span><span class="w"> </span><span class="nx">i</span><span class="w"> </span><span class="o">:=</span><span class="w"> </span><span class="mi">0</span><span class="p">;</span><span class="w"> </span><span class="nx">i</span><span class="w"> </span><span class="p">&lt;</span><span class="w"> </span><span class="mi">10000000</span><span class="p">;</span><span class="w"> </span><span class="nx">i</span><span class="o">++</span><span class="w"> </span><span class="p">{</span>
<span class="w">    </span><span class="nx">fmt</span><span class="p">.</span><span class="nx">Println</span><span class="p">(</span><span class="s">&quot;process&quot;</span><span class="p">,</span><span class="w"> </span><span class="nx">id</span><span class="p">,</span><span class="s">&quot; send&quot;</span><span class="p">,</span><span class="w"> </span><span class="nx">i</span><span class="p">)</span>
<span class="w">    </span><span class="nx">channel</span><span class="w"> </span><span class="o">&lt;-</span><span class="w"> </span><span class="mi">1</span>
<span class="w">  </span><span class="p">}</span>
<span class="w">  </span><span class="k">if</span><span class="w"> </span><span class="nx">closer</span><span class="w"> </span><span class="p">{</span><span class="w"> </span><span class="nb">close</span><span class="p">(</span><span class="nx">channel</span><span class="w"> </span><span class="p">)</span><span class="w"> </span><span class="p">}</span>
<span class="p">}</span>

<span class="kd">func</span><span class="w"> </span><span class="nx">main</span><span class="p">()</span><span class="w"> </span><span class="p">{</span>
<span class="w">  </span><span class="nx">channel</span><span class="w"> </span><span class="o">:=</span><span class="w"> </span><span class="nb">make</span><span class="p">(</span><span class="kd">chan</span><span class="w"> </span><span class="kt">int</span><span class="p">)</span>
<span class="w">  </span><span class="k">go</span><span class="w"> </span><span class="nx">counter</span><span class="p">(</span><span class="mi">1</span><span class="p">,</span><span class="w"> </span><span class="nx">channel</span><span class="p">,</span><span class="w"> </span><span class="kc">false</span><span class="p">)</span>
<span class="w">  </span><span class="k">go</span><span class="w"> </span><span class="nx">counter</span><span class="p">(</span><span class="mi">2</span><span class="p">,</span><span class="w"> </span><span class="nx">channel</span><span class="p">,</span><span class="w"> </span><span class="kc">true</span><span class="p">)</span>

<span class="w">  </span><span class="nx">x</span><span class="w"> </span><span class="o">:=</span><span class="w"> </span><span class="mi">0</span>

<span class="w">  </span><span class="c1">// receiving data from channel</span>
<span class="w">  </span><span class="k">for</span><span class="w"> </span><span class="nx">i</span><span class="w"> </span><span class="o">:=</span><span class="w"> </span><span class="k">range</span><span class="w"> </span><span class="nx">channel</span><span class="w"> </span><span class="p">{</span>
<span class="w">    </span><span class="nx">fmt</span><span class="p">.</span><span class="nx">Println</span><span class="p">(</span><span class="s">&quot;receiving&quot;</span><span class="p">)</span>
<span class="w">    </span><span class="nx">x</span><span class="w"> </span><span class="o">+=</span><span class="w"> </span><span class="nx">i</span>
<span class="w">  </span><span class="p">}</span>

<span class="w">  </span><span class="nx">fmt</span><span class="p">.</span><span class="nx">Println</span><span class="p">(</span><span class="nx">x</span><span class="p">)</span>
<span class="p">}</span>
</code></pre></div>
<h3 id="html">HTML<a class="headerlink" href="#html" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="cp">&lt;!doctype html&gt;</span>
<span class="p">&lt;</span><span class="nt">html</span> <span class="na">class</span><span class="o">=</span><span class="s">&quot;no-js&quot;</span> <span class="na">lang</span><span class="o">=</span><span class="s">&quot;&quot;</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">head</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">meta</span> <span class="na">charset</span><span class="o">=</span><span class="s">&quot;utf-8&quot;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">meta</span> <span class="na">http-equiv</span><span class="o">=</span><span class="s">&quot;x-ua-compatible&quot;</span> <span class="na">content</span><span class="o">=</span><span class="s">&quot;ie=edge&quot;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">title</span><span class="p">&gt;</span>HTML5 Boilerplate<span class="p">&lt;/</span><span class="nt">title</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">meta</span> <span class="na">name</span><span class="o">=</span><span class="s">&quot;description&quot;</span> <span class="na">content</span><span class="o">=</span><span class="s">&quot;&quot;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">meta</span> <span class="na">name</span><span class="o">=</span><span class="s">&quot;viewport&quot;</span> <span class="na">content</span><span class="o">=</span><span class="s">&quot;width=device-width, initial-scale=1&quot;</span><span class="p">&gt;</span>

    <span class="p">&lt;</span><span class="nt">link</span> <span class="na">rel</span><span class="o">=</span><span class="s">&quot;apple-touch-icon&quot;</span> <span class="na">href</span><span class="o">=</span><span class="s">&quot;apple-touch-icon.png&quot;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">link</span> <span class="na">rel</span><span class="o">=</span><span class="s">&quot;stylesheet&quot;</span> <span class="na">href</span><span class="o">=</span><span class="s">&quot;css/normalize.css&quot;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">link</span> <span class="na">rel</span><span class="o">=</span><span class="s">&quot;stylesheet&quot;</span> <span class="na">href</span><span class="o">=</span><span class="s">&quot;css/main.css&quot;</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">script</span> <span class="na">src</span><span class="o">=</span><span class="s">&quot;js/vendor/modernizr-2.8.3.min.js&quot;</span><span class="p">&gt;&lt;/</span><span class="nt">script</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">head</span><span class="p">&gt;</span>
  <span class="p">&lt;</span><span class="nt">body</span><span class="p">&gt;</span>
    <span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;</span>Hello world! This is HTML5 Boilerplate.<span class="p">&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
  <span class="p">&lt;/</span><span class="nt">body</span><span class="p">&gt;</span>
<span class="p">&lt;/</span><span class="nt">html</span><span class="p">&gt;</span>
</code></pre></div>
<h3 id="java">Java<a class="headerlink" href="#java" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="kn">import</span><span class="w"> </span><span class="nn">java.util.LinkedList</span><span class="p">;</span>
<span class="kn">import</span><span class="w"> </span><span class="nn">java.lang.reflect.Array</span><span class="p">;</span>

<span class="kd">public</span><span class="w"> </span><span class="kd">class</span> <span class="nc">UnsortedHashSet</span><span class="o">&lt;</span><span class="n">E</span><span class="o">&gt;</span><span class="w"> </span><span class="p">{</span>

<span class="w">  </span><span class="kd">private</span><span class="w"> </span><span class="kd">static</span><span class="w"> </span><span class="kd">final</span><span class="w"> </span><span class="kt">double</span><span class="w"> </span><span class="n">LOAD_FACTOR_LIMIT</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mf">0.7</span><span class="p">;</span>

<span class="w">  </span><span class="kd">private</span><span class="w"> </span><span class="kt">int</span><span class="w"> </span><span class="n">size</span><span class="p">;</span>
<span class="w">  </span><span class="kd">private</span><span class="w"> </span><span class="n">LinkedList</span><span class="o">&lt;</span><span class="n">E</span><span class="o">&gt;[]</span><span class="w"> </span><span class="n">con</span><span class="p">;</span>

<span class="w">  </span><span class="kd">public</span><span class="w"> </span><span class="nf">UnsortedHashSet</span><span class="p">()</span><span class="w"> </span><span class="p">{</span>
<span class="w">    </span><span class="n">con</span><span class="w">  </span><span class="o">=</span><span class="w"> </span><span class="p">(</span><span class="n">LinkedList</span><span class="o">&lt;</span><span class="n">E</span><span class="o">&gt;[]</span><span class="p">)(</span><span class="k">new</span><span class="w"> </span><span class="n">LinkedList</span><span class="o">[</span><span class="mi">10</span><span class="o">]</span><span class="p">);</span>
<span class="w">  </span><span class="p">}</span>

<span class="w">  </span><span class="kd">public</span><span class="w"> </span><span class="kt">boolean</span><span class="w"> </span><span class="nf">add</span><span class="p">(</span><span class="n">E</span><span class="w"> </span><span class="n">obj</span><span class="p">)</span><span class="w"> </span><span class="p">{</span>
<span class="w">    </span><span class="kt">int</span><span class="w"> </span><span class="n">oldSize</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">size</span><span class="p">;</span>
<span class="w">    </span><span class="kt">int</span><span class="w"> </span><span class="n">index</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">Math</span><span class="p">.</span><span class="na">abs</span><span class="p">(</span><span class="n">obj</span><span class="p">.</span><span class="na">hashCode</span><span class="p">())</span><span class="w"> </span><span class="o">%</span><span class="w"> </span><span class="n">con</span><span class="p">.</span><span class="na">length</span><span class="p">;</span>
<span class="w">    </span><span class="k">if</span><span class="w"> </span><span class="p">(</span><span class="n">con</span><span class="o">[</span><span class="n">index</span><span class="o">]</span><span class="w"> </span><span class="o">==</span><span class="w"> </span><span class="kc">null</span><span class="p">)</span>
<span class="w">      </span><span class="n">con</span><span class="o">[</span><span class="n">index</span><span class="o">]</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="k">new</span><span class="w"> </span><span class="n">LinkedList</span><span class="o">&lt;</span><span class="n">E</span><span class="o">&gt;</span><span class="p">();</span>
<span class="w">    </span><span class="k">if</span><span class="w"> </span><span class="p">(</span><span class="o">!</span><span class="n">con</span><span class="o">[</span><span class="n">index</span><span class="o">]</span><span class="p">.</span><span class="na">contains</span><span class="p">(</span><span class="n">obj</span><span class="p">))</span><span class="w"> </span><span class="p">{</span>
<span class="w">      </span><span class="n">con</span><span class="o">[</span><span class="n">index</span><span class="o">]</span><span class="p">.</span><span class="na">add</span><span class="p">(</span><span class="n">obj</span><span class="p">);</span>
<span class="w">      </span><span class="n">size</span><span class="o">++</span><span class="p">;</span>
<span class="w">    </span><span class="p">}</span>
<span class="w">    </span><span class="k">if</span><span class="w"> </span><span class="p">(</span><span class="mf">1.0</span><span class="w"> </span><span class="o">*</span><span class="w"> </span><span class="n">size</span><span class="w"> </span><span class="o">/</span><span class="w"> </span><span class="n">con</span><span class="p">.</span><span class="na">length</span><span class="w"> </span><span class="o">&gt;</span><span class="w"> </span><span class="n">LOAD_FACTOR_LIMIT</span><span class="p">)</span>
<span class="w">      </span><span class="n">resize</span><span class="p">();</span>
<span class="w">    </span><span class="k">return</span><span class="w"> </span><span class="n">oldSize</span><span class="w"> </span><span class="o">!=</span><span class="w"> </span><span class="n">size</span><span class="p">;</span>
<span class="w">  </span><span class="p">}</span>

<span class="w">  </span><span class="kd">private</span><span class="w"> </span><span class="kt">void</span><span class="w"> </span><span class="nf">resize</span><span class="p">()</span><span class="w"> </span><span class="p">{</span>
<span class="w">    </span><span class="n">UnsortedHashSet</span><span class="o">&lt;</span><span class="n">E</span><span class="o">&gt;</span><span class="w"> </span><span class="n">temp</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="k">new</span><span class="w"> </span><span class="n">UnsortedHashSet</span><span class="o">&lt;</span><span class="n">E</span><span class="o">&gt;</span><span class="p">();</span>
<span class="w">    </span><span class="n">temp</span><span class="p">.</span><span class="na">con</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="p">(</span><span class="n">LinkedList</span><span class="o">&lt;</span><span class="n">E</span><span class="o">&gt;[]</span><span class="p">)(</span><span class="k">new</span><span class="w"> </span><span class="n">LinkedList</span><span class="o">[</span><span class="n">con</span><span class="p">.</span><span class="na">length</span><span class="w"> </span><span class="o">*</span><span class="w"> </span><span class="mi">2</span><span class="w"> </span><span class="o">+</span><span class="w"> </span><span class="mi">1</span><span class="o">]</span><span class="p">);</span>
<span class="w">    </span><span class="k">for</span><span class="w"> </span><span class="p">(</span><span class="kt">int</span><span class="w"> </span><span class="n">i</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mi">0</span><span class="p">;</span><span class="w"> </span><span class="n">i</span><span class="w"> </span><span class="o">&lt;</span><span class="w"> </span><span class="n">con</span><span class="p">.</span><span class="na">length</span><span class="p">;</span><span class="w"> </span><span class="n">i</span><span class="o">++</span><span class="p">)</span><span class="w"> </span><span class="p">{</span>
<span class="w">      </span><span class="k">if</span><span class="w"> </span><span class="p">(</span><span class="n">con</span><span class="o">[</span><span class="n">i</span><span class="o">]</span><span class="w"> </span><span class="o">!=</span><span class="w"> </span><span class="kc">null</span><span class="p">)</span>
<span class="w">        </span><span class="k">for</span><span class="w"> </span><span class="p">(</span><span class="n">E</span><span class="w"> </span><span class="n">e</span><span class="w"> </span><span class="p">:</span><span class="w"> </span><span class="n">con</span><span class="o">[</span><span class="n">i</span><span class="o">]</span><span class="p">)</span>
<span class="w">          </span><span class="n">temp</span><span class="p">.</span><span class="na">add</span><span class="p">(</span><span class="n">e</span><span class="p">);</span>
<span class="w">    </span><span class="p">}</span>
<span class="w">    </span><span class="n">con</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">temp</span><span class="p">.</span><span class="na">con</span><span class="p">;</span>
<span class="w">  </span><span class="p">}</span>

<span class="w">  </span><span class="kd">public</span><span class="w"> </span><span class="kt">int</span><span class="w"> </span><span class="nf">size</span><span class="p">()</span><span class="w"> </span><span class="p">{</span>
<span class="w">    </span><span class="k">return</span><span class="w"> </span><span class="n">size</span><span class="p">;</span>
<span class="w">  </span><span class="p">}</span>
<span class="p">}</span>
</code></pre></div>
<h3 id="javascript">JavaScript<a class="headerlink" href="#javascript" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="kd">var</span><span class="w"> </span><span class="nb">Math</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="nx">require</span><span class="p">(</span><span class="s1">&#39;lib/math&#39;</span><span class="p">);</span>

<span class="kd">var</span><span class="w"> </span><span class="nx">_extends</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="kd">function</span><span class="w"> </span><span class="p">(</span><span class="nx">target</span><span class="p">)</span><span class="w"> </span><span class="p">{</span>
<span class="w">  </span><span class="k">for</span><span class="w"> </span><span class="p">(</span><span class="kd">var</span><span class="w"> </span><span class="nx">i</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mf">1</span><span class="p">;</span><span class="w"> </span><span class="nx">i</span><span class="w"> </span><span class="o">&lt;</span><span class="w"> </span><span class="nx">arguments</span><span class="p">.</span><span class="nx">length</span><span class="p">;</span><span class="w"> </span><span class="nx">i</span><span class="o">++</span><span class="p">)</span><span class="w"> </span><span class="p">{</span>
<span class="w">    </span><span class="kd">var</span><span class="w"> </span><span class="nx">source</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="nx">arguments</span><span class="p">[</span><span class="nx">i</span><span class="p">];</span>
<span class="w">    </span><span class="k">for</span><span class="w"> </span><span class="p">(</span><span class="kd">var</span><span class="w"> </span><span class="nx">key</span><span class="w"> </span><span class="ow">in</span><span class="w"> </span><span class="nx">source</span><span class="p">)</span><span class="w"> </span><span class="p">{</span>
<span class="w">      </span><span class="nx">target</span><span class="p">[</span><span class="nx">key</span><span class="p">]</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="nx">source</span><span class="p">[</span><span class="nx">key</span><span class="p">];</span>
<span class="w">    </span><span class="p">}</span>
<span class="w">  </span><span class="p">}</span>

<span class="w">  </span><span class="k">return</span><span class="w"> </span><span class="nx">target</span><span class="p">;</span>
<span class="p">};</span>

<span class="kd">var</span><span class="w"> </span><span class="nx">e</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="nx">exports</span><span class="p">.</span><span class="nx">e</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mf">2.71828182846</span><span class="p">;</span>
<span class="nx">exports</span><span class="p">[</span><span class="s1">&#39;default&#39;</span><span class="p">]</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="kd">function</span><span class="w"> </span><span class="p">(</span><span class="nx">x</span><span class="p">)</span><span class="w"> </span><span class="p">{</span>
<span class="w">  </span><span class="k">return</span><span class="w"> </span><span class="nb">Math</span><span class="p">.</span><span class="nx">exp</span><span class="p">(</span><span class="nx">x</span><span class="p">);</span>
<span class="p">};</span>

<span class="nx">module</span><span class="p">.</span><span class="nx">exports</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="nx">_extends</span><span class="p">(</span><span class="nx">exports</span><span class="p">[</span><span class="s1">&#39;default&#39;</span><span class="p">],</span><span class="w"> </span><span class="nx">exports</span><span class="p">);</span>
</code></pre></div>
<h3 id="json">JSON<a class="headerlink" href="#json" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="p">{</span>
<span class="w">  </span><span class="nt">&quot;name&quot;</span><span class="p">:</span><span class="w"> </span><span class="s2">&quot;mkdocs-material&quot;</span><span class="p">,</span>
<span class="w">  </span><span class="nt">&quot;version&quot;</span><span class="p">:</span><span class="w"> </span><span class="s2">&quot;0.2.4&quot;</span><span class="p">,</span>
<span class="w">  </span><span class="nt">&quot;description&quot;</span><span class="p">:</span><span class="w"> </span><span class="s2">&quot;A Material Design theme for MkDocs&quot;</span><span class="p">,</span>
<span class="w">  </span><span class="nt">&quot;homepage&quot;</span><span class="p">:</span><span class="w"> </span><span class="s2">&quot;http://squidfunk.github.io/mkdocs-material/&quot;</span><span class="p">,</span>
<span class="w">  </span><span class="nt">&quot;authors&quot;</span><span class="p">:</span><span class="w"> </span><span class="p">[</span>
<span class="w">    </span><span class="s2">&quot;squidfunk &lt;martin.donath@squidfunk.com&gt;&quot;</span>
<span class="w">  </span><span class="p">],</span>
<span class="w">  </span><span class="nt">&quot;license&quot;</span><span class="p">:</span><span class="w"> </span><span class="s2">&quot;MIT&quot;</span><span class="p">,</span>
<span class="w">  </span><span class="nt">&quot;main&quot;</span><span class="p">:</span><span class="w"> </span><span class="s2">&quot;Gulpfile.js&quot;</span><span class="p">,</span>
<span class="w">  </span><span class="nt">&quot;scripts&quot;</span><span class="p">:</span><span class="w"> </span><span class="p">{</span>
<span class="w">    </span><span class="nt">&quot;start&quot;</span><span class="p">:</span><span class="w"> </span><span class="s2">&quot;./node_modules/.bin/gulp watch --mkdocs&quot;</span><span class="p">,</span>
<span class="w">    </span><span class="nt">&quot;build&quot;</span><span class="p">:</span><span class="w"> </span><span class="s2">&quot;./node_modules/.bin/gulp build --production&quot;</span>
<span class="w">  </span><span class="p">}</span>
<span class="w">  </span><span class="err">...</span>
<span class="p">}</span>
</code></pre></div>
<h3 id="julia">Julia<a class="headerlink" href="#julia" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="k">using</span><span class="w"> </span><span class="n">MXNet</span>

<span class="n">mlp</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="nd">@mx</span><span class="o">.</span><span class="n">chain</span><span class="w"> </span><span class="n">mx</span><span class="o">.</span><span class="n">Variable</span><span class="p">(</span><span class="ss">:data</span><span class="p">)</span><span class="w">             </span><span class="o">=&gt;</span>
<span class="w">  </span><span class="n">mx</span><span class="o">.</span><span class="n">FullyConnected</span><span class="p">(</span><span class="n">name</span><span class="o">=</span><span class="ss">:fc1</span><span class="p">,</span><span class="w"> </span><span class="n">num_hidden</span><span class="o">=</span><span class="mi">128</span><span class="p">)</span><span class="w"> </span><span class="o">=&gt;</span>
<span class="w">  </span><span class="n">mx</span><span class="o">.</span><span class="n">Activation</span><span class="p">(</span><span class="n">name</span><span class="o">=</span><span class="ss">:relu1</span><span class="p">,</span><span class="w"> </span><span class="n">act_type</span><span class="o">=</span><span class="ss">:relu</span><span class="p">)</span><span class="w">   </span><span class="o">=&gt;</span>
<span class="w">  </span><span class="n">mx</span><span class="o">.</span><span class="n">FullyConnected</span><span class="p">(</span><span class="n">name</span><span class="o">=</span><span class="ss">:fc2</span><span class="p">,</span><span class="w"> </span><span class="n">num_hidden</span><span class="o">=</span><span class="mi">64</span><span class="p">)</span><span class="w">  </span><span class="o">=&gt;</span>
<span class="w">  </span><span class="n">mx</span><span class="o">.</span><span class="n">Activation</span><span class="p">(</span><span class="n">name</span><span class="o">=</span><span class="ss">:relu2</span><span class="p">,</span><span class="w"> </span><span class="n">act_type</span><span class="o">=</span><span class="ss">:relu</span><span class="p">)</span><span class="w">   </span><span class="o">=&gt;</span>
<span class="w">  </span><span class="n">mx</span><span class="o">.</span><span class="n">FullyConnected</span><span class="p">(</span><span class="n">name</span><span class="o">=</span><span class="ss">:fc3</span><span class="p">,</span><span class="w"> </span><span class="n">num_hidden</span><span class="o">=</span><span class="mi">10</span><span class="p">)</span><span class="w">  </span><span class="o">=&gt;</span>
<span class="w">  </span><span class="n">mx</span><span class="o">.</span><span class="n">SoftmaxOutput</span><span class="p">(</span><span class="n">name</span><span class="o">=</span><span class="ss">:softmax</span><span class="p">)</span>

<span class="c"># data provider</span>
<span class="n">batch_size</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mi">100</span>
<span class="n">include</span><span class="p">(</span><span class="n">Pkg</span><span class="o">.</span><span class="n">dir</span><span class="p">(</span><span class="s">&quot;MXNet&quot;</span><span class="p">,</span><span class="w"> </span><span class="s">&quot;examples&quot;</span><span class="p">,</span><span class="w"> </span><span class="s">&quot;mnist&quot;</span><span class="p">,</span><span class="w"> </span><span class="s">&quot;mnist-data.jl&quot;</span><span class="p">))</span>
<span class="n">train_provider</span><span class="p">,</span><span class="w"> </span><span class="n">eval_provider</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">get_mnist_providers</span><span class="p">(</span><span class="n">batch_size</span><span class="p">)</span>

<span class="c"># setup model</span>
<span class="n">model</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">mx</span><span class="o">.</span><span class="n">FeedForward</span><span class="p">(</span><span class="n">mlp</span><span class="p">,</span><span class="w"> </span><span class="n">context</span><span class="o">=</span><span class="n">mx</span><span class="o">.</span><span class="n">cpu</span><span class="p">())</span>

<span class="c"># optimization algorithm</span>
<span class="n">optimizer</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">mx</span><span class="o">.</span><span class="n">SGD</span><span class="p">(</span><span class="n">lr</span><span class="o">=</span><span class="mf">0.1</span><span class="p">,</span><span class="w"> </span><span class="n">momentum</span><span class="o">=</span><span class="mf">0.9</span><span class="p">)</span>

<span class="c"># fit parameters</span>
<span class="n">mx</span><span class="o">.</span><span class="n">fit</span><span class="p">(</span><span class="n">model</span><span class="p">,</span><span class="w"> </span><span class="n">optimizer</span><span class="p">,</span><span class="w"> </span><span class="n">train_provider</span><span class="p">,</span><span class="w"> </span><span class="n">n_epoch</span><span class="o">=</span><span class="mi">20</span><span class="p">,</span><span class="w"> </span><span class="n">eval_data</span><span class="o">=</span><span class="n">eval_provider</span><span class="p">)</span>
</code></pre></div>
<h3 id="lua">Lua<a class="headerlink" href="#lua" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="kd">local</span> <span class="n">ffi</span> <span class="o">=</span> <span class="nb">require</span><span class="p">(</span><span class="s2">&quot;ffi&quot;</span><span class="p">)</span>

<span class="n">ffi</span><span class="p">.</span><span class="n">cdef</span><span class="s">[[</span>
<span class="s">  void Sleep(int ms);</span>
<span class="s">  int poll(struct pollfd *fds, unsigned long nfds, int timeout);</span>
<span class="s">]]</span>

<span class="kd">local</span> <span class="n">sleep</span>
<span class="kr">if</span> <span class="n">ffi</span><span class="p">.</span><span class="n">os</span> <span class="o">==</span> <span class="s2">&quot;Windows&quot;</span> <span class="kr">then</span>
  <span class="kr">function</span> <span class="nf">sleep</span><span class="p">(</span><span class="n">s</span><span class="p">)</span>
    <span class="n">ffi</span><span class="p">.</span><span class="n">C</span><span class="p">.</span><span class="n">Sleep</span><span class="p">(</span><span class="n">s</span><span class="o">*</span><span class="mi">1000</span><span class="p">)</span>
  <span class="kr">end</span>
<span class="kr">else</span>
  <span class="kr">function</span> <span class="nf">sleep</span><span class="p">(</span><span class="n">s</span><span class="p">)</span>
    <span class="n">ffi</span><span class="p">.</span><span class="n">C</span><span class="p">.</span><span class="n">poll</span><span class="p">(</span><span class="kc">nil</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="n">s</span> <span class="o">*</span> <span class="mi">1000</span><span class="p">)</span>
  <span class="kr">end</span>
<span class="kr">end</span>

<span class="kr">for</span> <span class="n">i</span> <span class="o">=</span> <span class="mi">1</span><span class="p">,</span><span class="mi">160</span> <span class="kr">do</span>
  <span class="nb">io.write</span><span class="p">(</span><span class="s2">&quot;.&quot;</span><span class="p">);</span> <span class="nb">io.flush</span><span class="p">()</span>
  <span class="n">sleep</span><span class="p">(</span><span class="mf">0.01</span><span class="p">)</span>
<span class="kr">end</span>
<span class="nb">io.write</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">)</span>
</code></pre></div>
<h3 id="mysql">MySQL<a class="headerlink" href="#mysql" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="k">SELECT</span>
<span class="w">  </span><span class="n">Employees</span><span class="p">.</span><span class="n">EmployeeID</span><span class="p">,</span>
<span class="w">  </span><span class="n">Employees</span><span class="p">.</span><span class="k">Name</span><span class="p">,</span>
<span class="w">  </span><span class="n">Employees</span><span class="p">.</span><span class="n">Salary</span><span class="p">,</span>
<span class="w">  </span><span class="n">Manager</span><span class="p">.</span><span class="k">Name</span><span class="w"> </span><span class="k">AS</span><span class="w"> </span><span class="n">Manager</span>
<span class="k">FROM</span>
<span class="w">  </span><span class="n">Employees</span>
<span class="k">LEFT</span><span class="w"> </span><span class="k">JOIN</span>
<span class="w">  </span><span class="n">Employees</span><span class="w"> </span><span class="k">AS</span><span class="w"> </span><span class="n">Manager</span>
<span class="k">ON</span>
<span class="w">  </span><span class="n">Employees</span><span class="p">.</span><span class="n">ManagerID</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="n">Manager</span><span class="p">.</span><span class="n">EmployeeID</span>
<span class="k">WHERE</span>
<span class="w">  </span><span class="n">Employees</span><span class="p">.</span><span class="n">EmployeeID</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="s1">&#39;087652&#39;</span><span class="p">;</span>
</code></pre></div>
<h3 id="php">PHP<a class="headerlink" href="#php" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="cp">&lt;?php</span>

<span class="c1">// src/AppBundle/Controller/LuckyController.php</span>
<span class="k">namespace</span> <span class="nx">AppBundle\Controller</span><span class="p">;</span>

<span class="k">use</span> <span class="nx">Sensio\Bundle\FrameworkExtraBundle\Configuration\Route</span><span class="p">;</span>
<span class="k">use</span> <span class="nx">Symfony\Component\HttpFoundation\Response</span><span class="p">;</span>

<span class="k">class</span> <span class="nc">LuckyController</span> <span class="p">{</span>

  <span class="sd">/**</span>
<span class="sd">   * @Route(&quot;/lucky/number&quot;)</span>
<span class="sd">   */</span>
  <span class="k">public</span> <span class="k">function</span> <span class="nf">numberAction</span><span class="p">()</span> <span class="p">{</span>
    <span class="nv">$number</span> <span class="o">=</span> <span class="nb">mt_rand</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="mi">100</span><span class="p">);</span>

    <span class="k">return</span> <span class="k">new</span> <span class="nx">Response</span><span class="p">(</span>
      <span class="s1">&#39;&lt;html&gt;&lt;body&gt;Lucky number: &#39;</span><span class="o">.</span><span class="nv">$number</span><span class="o">.</span><span class="s1">&#39;&lt;/body&gt;&lt;/html&gt;&#39;</span>
    <span class="p">);</span>
  <span class="p">}</span>
<span class="p">}</span>
</code></pre></div>
<h3 id="protocol-buffers">Protocol Buffers<a class="headerlink" href="#protocol-buffers" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="k">syntax</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="s">&quot;proto2&quot;</span><span class="p">;</span>

<span class="kn">package</span><span class="w"> </span><span class="nn">caffe</span><span class="p">;</span>

<span class="c1">// Specifies the shape (dimensions) of a Blob.</span>
<span class="kd">message</span><span class="w"> </span><span class="nc">BlobShape</span><span class="w"> </span><span class="p">{</span>
<span class="w">  </span><span class="k">repeated</span><span class="w"> </span><span class="kt">int64</span><span class="w"> </span><span class="na">dim</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mi">1</span><span class="w"> </span><span class="p">[</span><span class="k">packed</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="kc">true</span><span class="p">];</span>
<span class="p">}</span>

<span class="kd">message</span><span class="w"> </span><span class="nc">BlobProto</span><span class="w"> </span><span class="p">{</span>
<span class="w">  </span><span class="k">optional</span><span class="w"> </span><span class="n">BlobShape</span><span class="w"> </span><span class="na">shape</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mi">7</span><span class="p">;</span>
<span class="w">  </span><span class="k">repeated</span><span class="w"> </span><span class="kt">float</span><span class="w"> </span><span class="na">data</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mi">5</span><span class="w"> </span><span class="p">[</span><span class="k">packed</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="kc">true</span><span class="p">];</span>
<span class="w">  </span><span class="k">repeated</span><span class="w"> </span><span class="kt">float</span><span class="w"> </span><span class="na">diff</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mi">6</span><span class="w"> </span><span class="p">[</span><span class="k">packed</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="kc">true</span><span class="p">];</span>

<span class="w">  </span><span class="c1">// 4D dimensions -- deprecated.  Use &quot;shape&quot; instead.</span>
<span class="w">  </span><span class="k">optional</span><span class="w"> </span><span class="kt">int32</span><span class="w"> </span><span class="na">num</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mi">1</span><span class="w"> </span><span class="p">[</span><span class="k">default</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mi">0</span><span class="p">];</span>
<span class="w">  </span><span class="k">optional</span><span class="w"> </span><span class="kt">int32</span><span class="w"> </span><span class="na">channels</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mi">2</span><span class="w"> </span><span class="p">[</span><span class="k">default</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mi">0</span><span class="p">];</span>
<span class="w">  </span><span class="k">optional</span><span class="w"> </span><span class="kt">int32</span><span class="w"> </span><span class="na">height</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mi">3</span><span class="w"> </span><span class="p">[</span><span class="k">default</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mi">0</span><span class="p">];</span>
<span class="w">  </span><span class="k">optional</span><span class="w"> </span><span class="kt">int32</span><span class="w"> </span><span class="na">width</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mi">4</span><span class="w"> </span><span class="p">[</span><span class="k">default</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mi">0</span><span class="p">];</span>
<span class="p">}</span>
</code></pre></div>
<h3 id="python">Python<a class="headerlink" href="#python" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="sd">&quot;&quot;&quot;</span>
<span class="sd">  A very simple MNIST classifier.</span>
<span class="sd">  See extensive documentation at</span>
<span class="sd">  http://tensorflow.org/tutorials/mnist/beginners/index.md</span>
<span class="sd">&quot;&quot;&quot;</span>
<span class="kn">from</span> <span class="nn">__future__</span> <span class="kn">import</span> <span class="n">absolute_import</span>
<span class="kn">from</span> <span class="nn">__future__</span> <span class="kn">import</span> <span class="n">division</span>
<span class="kn">from</span> <span class="nn">__future__</span> <span class="kn">import</span> <span class="n">print_function</span>

<span class="c1"># Import data</span>
<span class="kn">from</span> <span class="nn">tensorflow.examples.tutorials.mnist</span> <span class="kn">import</span> <span class="n">input_data</span>

<span class="kn">import</span> <span class="nn">tensorflow</span> <span class="k">as</span> <span class="nn">tf</span>

<span class="n">flags</span> <span class="o">=</span> <span class="n">tf</span><span class="o">.</span><span class="n">app</span><span class="o">.</span><span class="n">flags</span>
<span class="n">FLAGS</span> <span class="o">=</span> <span class="n">flags</span><span class="o">.</span><span class="n">FLAGS</span>
<span class="n">flags</span><span class="o">.</span><span class="n">DEFINE_string</span><span class="p">(</span><span class="s1">&#39;data_dir&#39;</span><span class="p">,</span> <span class="s1">&#39;/tmp/data/&#39;</span><span class="p">,</span> <span class="s1">&#39;Directory for storing data&#39;</span><span class="p">)</span>

<span class="n">mnist</span> <span class="o">=</span> <span class="n">input_data</span><span class="o">.</span><span class="n">read_data_sets</span><span class="p">(</span><span class="n">FLAGS</span><span class="o">.</span><span class="n">data_dir</span><span class="p">,</span> <span class="n">one_hot</span><span class="o">=</span><span class="kc">True</span><span class="p">)</span>

<span class="n">sess</span> <span class="o">=</span> <span class="n">tf</span><span class="o">.</span><span class="n">InteractiveSession</span><span class="p">()</span>

<span class="c1"># Create the model</span>
<span class="n">x</span> <span class="o">=</span> <span class="n">tf</span><span class="o">.</span><span class="n">placeholder</span><span class="p">(</span><span class="n">tf</span><span class="o">.</span><span class="n">float32</span><span class="p">,</span> <span class="p">[</span><span class="kc">None</span><span class="p">,</span> <span class="mi">784</span><span class="p">])</span>
<span class="n">W</span> <span class="o">=</span> <span class="n">tf</span><span class="o">.</span><span class="n">Variable</span><span class="p">(</span><span class="n">tf</span><span class="o">.</span><span class="n">zeros</span><span class="p">([</span><span class="mi">784</span><span class="p">,</span> <span class="mi">10</span><span class="p">]))</span>
<span class="n">b</span> <span class="o">=</span> <span class="n">tf</span><span class="o">.</span><span class="n">Variable</span><span class="p">(</span><span class="n">tf</span><span class="o">.</span><span class="n">zeros</span><span class="p">([</span><span class="mi">10</span><span class="p">]))</span>
<span class="n">y</span> <span class="o">=</span> <span class="n">tf</span><span class="o">.</span><span class="n">nn</span><span class="o">.</span><span class="n">softmax</span><span class="p">(</span><span class="n">tf</span><span class="o">.</span><span class="n">matmul</span><span class="p">(</span><span class="n">x</span><span class="p">,</span> <span class="n">W</span><span class="p">)</span> <span class="o">+</span> <span class="n">b</span><span class="p">)</span>
</code></pre></div>
<h3 id="ruby">Ruby<a class="headerlink" href="#ruby" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="nb">require</span><span class="w"> </span><span class="s1">&#39;finity/event&#39;</span>
<span class="nb">require</span><span class="w"> </span><span class="s1">&#39;finity/machine&#39;</span>
<span class="nb">require</span><span class="w"> </span><span class="s1">&#39;finity/state&#39;</span>
<span class="nb">require</span><span class="w"> </span><span class="s1">&#39;finity/transition&#39;</span>
<span class="nb">require</span><span class="w"> </span><span class="s1">&#39;finity/version&#39;</span>

<span class="k">module</span><span class="w"> </span><span class="nn">Finity</span>
<span class="w">  </span><span class="k">class</span><span class="w"> </span><span class="nc">InvalidCallback</span><span class="w"> </span><span class="o">&lt;</span><span class="w"> </span><span class="no">StandardError</span><span class="p">;</span><span class="w"> </span><span class="k">end</span>
<span class="w">  </span><span class="k">class</span><span class="w"> </span><span class="nc">MissingCallback</span><span class="w"> </span><span class="o">&lt;</span><span class="w"> </span><span class="no">StandardError</span><span class="p">;</span><span class="w"> </span><span class="k">end</span>
<span class="w">  </span><span class="k">class</span><span class="w"> </span><span class="nc">InvalidState</span><span class="w">    </span><span class="o">&lt;</span><span class="w"> </span><span class="no">StandardError</span><span class="p">;</span><span class="w"> </span><span class="k">end</span>

<span class="w">  </span><span class="c1"># Class methods to be injected into the including class upon inclusion.</span>
<span class="w">  </span><span class="k">module</span><span class="w"> </span><span class="nn">ClassMethods</span>

<span class="w">    </span><span class="c1"># Instantiate a new state machine for the including class by accepting a</span>
<span class="w">    </span><span class="c1"># block with state and event (and subsequent transition) definitions.</span>
<span class="w">    </span><span class="k">def</span><span class="w"> </span><span class="nf">finity</span><span class="w"> </span><span class="n">options</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="p">{},</span><span class="w"> </span><span class="o">&amp;</span><span class="n">block</span>
<span class="w">      </span><span class="vi">@finity</span><span class="w"> </span><span class="o">||=</span><span class="w"> </span><span class="no">Machine</span><span class="o">.</span><span class="n">new</span><span class="w"> </span><span class="nb">self</span><span class="p">,</span><span class="w"> </span><span class="n">options</span><span class="p">,</span><span class="w"> </span><span class="o">&amp;</span><span class="n">block</span>
<span class="w">    </span><span class="k">end</span>

<span class="w">    </span><span class="c1"># Return the names of all registered states.</span>
<span class="w">    </span><span class="k">def</span><span class="w"> </span><span class="nf">states</span>
<span class="w">      </span><span class="vi">@finity</span><span class="o">.</span><span class="n">states</span><span class="o">.</span><span class="n">map</span><span class="w"> </span><span class="p">{</span><span class="w"> </span><span class="o">|</span><span class="nb">name</span><span class="p">,</span><span class="w"> </span><span class="n">_</span><span class="o">|</span><span class="w"> </span><span class="nb">name</span><span class="w"> </span><span class="p">}</span>
<span class="w">    </span><span class="k">end</span>

<span class="w">    </span><span class="c1"># Return the names of all registered events.</span>
<span class="w">    </span><span class="k">def</span><span class="w"> </span><span class="nf">events</span>
<span class="w">      </span><span class="vi">@finity</span><span class="o">.</span><span class="n">events</span><span class="o">.</span><span class="n">map</span><span class="w"> </span><span class="p">{</span><span class="w"> </span><span class="o">|</span><span class="nb">name</span><span class="p">,</span><span class="w"> </span><span class="n">_</span><span class="o">|</span><span class="w"> </span><span class="nb">name</span><span class="w"> </span><span class="p">}</span>
<span class="w">    </span><span class="k">end</span>
<span class="w">  </span><span class="k">end</span>

<span class="w">  </span><span class="c1"># Inject methods into the including class upon inclusion.</span>
<span class="w">  </span><span class="k">def</span><span class="w"> </span><span class="nc">self</span><span class="o">.</span><span class="nf">included</span><span class="w"> </span><span class="n">base</span>
<span class="w">    </span><span class="n">base</span><span class="o">.</span><span class="n">extend</span><span class="w"> </span><span class="no">ClassMethods</span>
<span class="w">  </span><span class="k">end</span>
<span class="k">end</span>
</code></pre></div>
<h3 id="xml">XML<a class="headerlink" href="#xml" title="Permanent link">#</a></h3>
<div class="highlight"><pre><span></span><code><span class="cp">&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;</span>
<span class="cp">&lt;!DOCTYPE mainTag SYSTEM &quot;some.dtd&quot; [ENTITY % entity]&gt;</span>
<span class="cp">&lt;?oxygen RNGSchema=&quot;some.rng&quot; type=&quot;xml&quot;?&gt;</span>
<span class="nt">&lt;xs:main-Tag</span><span class="w"> </span><span class="na">xmlns:xs=</span><span class="s">&quot;http://www.w3.org/2001/XMLSchema&quot;</span><span class="nt">&gt;</span>
<span class="w">  </span><span class="cm">&lt;!-- This is a sample comment --&gt;</span>
<span class="w">  </span><span class="nt">&lt;childTag</span><span class="w"> </span><span class="na">attribute=</span><span class="s">&quot;Quoted Value&quot;</span><span class="w"> </span><span class="na">another-attribute=</span><span class="s">&#39;Single quoted value&#39;</span>
<span class="w">      </span><span class="na">a-third-attribute=</span><span class="s">&#39;123&#39;</span><span class="nt">&gt;</span>
<span class="w">    </span><span class="nt">&lt;withTextContent&gt;</span>Some<span class="w"> </span>text<span class="w"> </span>content<span class="nt">&lt;/withTextContent&gt;</span>
<span class="w">    </span><span class="nt">&lt;withEntityContent&gt;</span>Some<span class="w"> </span>text<span class="w"> </span>content<span class="w"> </span>with<span class="w"> </span><span class="ni">&amp;lt;</span>entities<span class="ni">&amp;gt;</span><span class="w"> </span>and
<span class="w">      </span>mentioning<span class="w"> </span>uint8_t<span class="w"> </span>and<span class="w"> </span>int32_t<span class="nt">&lt;/withEntityContent&gt;</span>
<span class="w">    </span><span class="nt">&lt;otherTag</span><span class="w"> </span><span class="na">attribute=</span><span class="s">&#39;Single quoted Value&#39;</span><span class="nt">/&gt;</span>
<span class="w">  </span><span class="nt">&lt;/childTag&gt;</span>
<span class="w">  </span><span class="cp">&lt;![CDATA[ some CData ]]&gt;</span>
<span class="nt">&lt;/main-Tag&gt;</span>
</code></pre></div>

  <hr>
<div class="md-source-file">
  <small>
    
      Last update:
      <span class="git-revision-date-localized-plugin git-revision-date-localized-plugin-date">June 10, 2023</span>
      
        <br>
        Created:
        <span class="git-revision-date-localized-plugin git-revision-date-localized-plugin-date">June 10, 2023</span>
      
    
  </small>
</div>


  



  <form class="md-feedback" name="feedback" hidden>
    <fieldset>
      <legend class="md-feedback__title">
        War die Seite hilfreich?
      </legend>
      <div class="md-feedback__inner">
        <div class="md-feedback__list">
          
            <button class="md-feedback__icon md-icon" type="submit" title="Diese Seite ist super!" data-md-value="1">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 12a8 8 0 0 0-8-8 8 8 0 0 0-8 8 8 8 0 0 0 8 8 8 8 0 0 0 8-8m2 0a10 10 0 0 1-10 10A10 10 0 0 1 2 12 10 10 0 0 1 12 2a10 10 0 0 1 10 10M10 9.5c0 .8-.7 1.5-1.5 1.5S7 10.3 7 9.5 7.7 8 8.5 8s1.5.7 1.5 1.5m7 0c0 .8-.7 1.5-1.5 1.5S14 10.3 14 9.5 14.7 8 15.5 8s1.5.7 1.5 1.5m-5 7.73c-1.75 0-3.29-.73-4.19-1.81L9.23 14c.45.72 1.52 1.23 2.77 1.23s2.32-.51 2.77-1.23l1.42 1.42c-.9 1.08-2.44 1.81-4.19 1.81Z"/></svg>
            </button>
          
            <button class="md-feedback__icon md-icon" type="submit" title="Hier gibt es was zu verbessern!" data-md-value="0">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 12a8 8 0 0 0-8-8 8 8 0 0 0-8 8 8 8 0 0 0 8 8 8 8 0 0 0 8-8m2 0a10 10 0 0 1-10 10A10 10 0 0 1 2 12 10 10 0 0 1 12 2a10 10 0 0 1 10 10m-6.5-4c.8 0 1.5.7 1.5 1.5s-.7 1.5-1.5 1.5-1.5-.7-1.5-1.5.7-1.5 1.5-1.5M10 9.5c0 .8-.7 1.5-1.5 1.5S7 10.3 7 9.5 7.7 8 8.5 8s1.5.7 1.5 1.5m2 4.5c1.75 0 3.29.72 4.19 1.81l-1.42 1.42C14.32 16.5 13.25 16 12 16s-2.32.5-2.77 1.23l-1.42-1.42C8.71 14.72 10.25 14 12 14Z"/></svg>
            </button>
          
        </div>
        <div class="md-feedback__note">
          
            <div data-md-value="1" hidden>
              
              
                
              
              Thanks for your feedback!
            </div>
          
            <div data-md-value="0" hidden>
              
              
                
              
              Danke für das Feedback! <a href="https://github.com/PartTimeDataScientist/mkdocs-wiki-test/issues/new/?title=[Feedback]+-+CodeHilite+-+/extensions/codehilite/" target="_blank">Sag uns gerne, was wir verbessern können!</a>
            </div>
          
        </div>
      </div>
    </fieldset>
  </form>


                
              </article>
            </div>
          
          
        </div>
        
          <button type="button" class="md-top md-icon" data-md-component="top" hidden>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13 20h-2V8l-5.5 5.5-1.42-1.42L12 4.16l7.92 7.92-1.42 1.42L13 8v12Z"/></svg>
            Back to top
          </button>
        
      </main>
      
        <footer class="md-footer">
  
  <div class="md-footer-meta md-typeset">
    <div class="md-footer-meta__inner md-grid">
      <div class="md-copyright">
  
  
    Made with
    <a href="https://squidfunk.github.io/mkdocs-material/" target="_blank" rel="noopener">
      Material for MkDocs
    </a>
  
</div>
      
        <div class="md-social">
  
    
    
    
    
      
      
    
    <a href="https://github.com/PartTimeDataScientist/mkdocs-wiki-test" target="_blank" rel="noopener" title="github.com" class="md-social__link">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc.--><path d="M186.1 328.7c0 20.9-10.9 55.1-36.7 55.1s-36.7-34.2-36.7-55.1 10.9-55.1 36.7-55.1 36.7 34.2 36.7 55.1zM480 278.2c0 31.9-3.2 65.7-17.5 95-37.9 76.6-142.1 74.8-216.7 74.8-75.8 0-186.2 2.7-225.6-74.8-14.6-29-20.2-63.1-20.2-95 0-41.9 13.9-81.5 41.5-113.6-5.2-15.8-7.7-32.4-7.7-48.8 0-21.5 4.9-32.3 14.6-51.8 45.3 0 74.3 9 108.8 36 29-6.9 58.8-10 88.7-10 27 0 54.2 2.9 80.4 9.2 34-26.7 63-35.2 107.8-35.2 9.8 19.5 14.6 30.3 14.6 51.8 0 16.4-2.6 32.7-7.7 48.2 27.5 32.4 39 72.3 39 114.2zm-64.3 50.5c0-43.9-26.7-82.6-73.5-82.6-18.9 0-37 3.4-56 6-14.9 2.3-29.8 3.2-45.1 3.2-15.2 0-30.1-.9-45.1-3.2-18.7-2.6-37-6-56-6-46.8 0-73.5 38.7-73.5 82.6 0 87.8 80.4 101.3 150.4 101.3h48.2c70.3 0 150.6-13.4 150.6-101.3zm-82.6-55.1c-25.8 0-36.7 34.2-36.7 55.1s10.9 55.1 36.7 55.1 36.7-34.2 36.7-55.1-10.9-55.1-36.7-55.1z"/></svg>
    </a>
  
</div>
      
    </div>
  </div>
</footer>
      
    </div>
    <div class="md-dialog" data-md-component="dialog">
      <div class="md-dialog__inner md-typeset"></div>
    </div>
    
    <script id="__config" type="application/json">{"base": "../..", "features": ["content.action.edit", "navigation.tabs", "navigation.tabs.sticky", "navigation.sections", "navigation.top"], "search": "../../assets/javascripts/workers/search.208ed371.min.js", "translations": {"clipboard.copied": "Copied to clipboard", "clipboard.copy": "Copy to clipboard", "search.result.more.one": "1 more on this page", "search.result.more.other": "# more on this page", "search.result.none": "No matching documents", "search.result.one": "1 matching document", "search.result.other": "# matching documents", "search.result.placeholder": "Type to start searching", "search.result.term.missing": "Missing", "select.version": "Select version"}}</script>
    
    
  
      <script src="../../assets/javascripts/bundle.b4d07000.min.js"></script>
      
        <script src="../../javascripts/feedback.js"></script>
      
    
  <script src="../../assets/javascripts/custom.13133f3f.min.js"></script>

  </body>
</html>