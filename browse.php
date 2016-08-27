



<!DOCTYPE html>
<html lang="en" class=" is-copy-enabled is-u2f-enabled">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    

    <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/frameworks-130b94ff796a9660d814b59665547ebaf99cc439323c908f41c6ff46e4255c8e.css" integrity="sha256-EwuU/3lqlmDYFLWWZVR+uvmcxDkyPJCPQcb/RuQlXI4=" media="all" rel="stylesheet" />
    <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github-907704789dc9e0c1cd78c2f3adfc91e42ed23a0a97b2790c4171d9d8959f7cdc.css" integrity="sha256-kHcEeJ3J4MHNeMLzrfyR5C7SOgqXsnkMQXHZ2JWffNw=" media="all" rel="stylesheet" />
    
    
    <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/site-becbb68a5e0ae3f94214b9e9edea2c49974f6d60b9eae715b70e5d017ff1b935.css" integrity="sha256-vsu2il4K4/lCFLnp7eosSZdPbWC56ucVtw5dAX/xuTU=" media="all" rel="stylesheet" />
    

    <link as="script" href="https://assets-cdn.github.com/assets/frameworks-74e2880351ce368d8f0a52f12a7452b422bef6397d5477d8120207ea79f0dfd9.js" rel="preload" />
    
    <link as="script" href="https://assets-cdn.github.com/assets/github-2a591b51a4438c7a3e39b82d3119de5d8894bf09aeb9148fc057632c7a2aca9f.js" rel="preload" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport" content="width=device-width">
    
    <title>PHPPowerBrowse/browse.php at master · arzynik/PHPPowerBrowse · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <meta property="fb:app_id" content="1401488693436528">

      <meta content="https://avatars1.githubusercontent.com/u/27974?v=3&amp;s=400" name="twitter:image:src" /><meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="arzynik/PHPPowerBrowse" name="twitter:title" /><meta content="PHPPowerBrowse - PHP onefile file browser" name="twitter:description" />
      <meta content="https://avatars1.githubusercontent.com/u/27974?v=3&amp;s=400" property="og:image" /><meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="arzynik/PHPPowerBrowse" property="og:title" /><meta content="https://github.com/arzynik/PHPPowerBrowse" property="og:url" /><meta content="PHPPowerBrowse - PHP onefile file browser" property="og:description" />
      <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">
    <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">
    <link rel="assets" href="https://assets-cdn.github.com/">
    
    <meta name="pjax-timeout" content="1000">
    
    <meta name="request-id" content="DE85108A:24C5:BC41448:57C0EC61" data-pjax-transient>

    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="selected-link" value="repo_source" data-pjax-transient>

    <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
<meta name="google-site-verification" content="ZzhVyEFwb7w3e0-uOTltm8Jsck2F5StVihD0exw2fsA">
    <meta name="google-analytics" content="UA-3769691-2">

<meta content="collector.githubapp.com" name="octolytics-host" /><meta content="github" name="octolytics-app-id" /><meta content="DE85108A:24C5:BC41448:57C0EC61" name="octolytics-dimension-request_id" />
<meta content="/&lt;user-name&gt;/&lt;repo-name&gt;/blob/show" data-pjax-transient="true" name="analytics-location" />



  <meta class="js-ga-set" name="dimension1" content="Logged Out">



        <meta name="hostname" content="github.com">
    <meta name="user-login" content="">

        <meta name="expected-hostname" content="github.com">
      <meta name="js-proxy-site-detection-payload" content="OGI0ZWFkOWE5ZTBiOTA4MGZmN2M0YjFiYjAzOGEyOTkzZGNlODdlMjY5M2YzMmU3MzQ5MzU5NmIyMDliOTI1YXx7InJlbW90ZV9hZGRyZXNzIjoiMjIyLjEzMy4xNi4xMzgiLCJyZXF1ZXN0X2lkIjoiREU4NTEwOEE6MjRDNTpCQzQxNDQ4OjU3QzBFQzYxIiwidGltZXN0YW1wIjoxNDcyMjYxMjIwfQ==">


      <link rel="mask-icon" href="https://assets-cdn.github.com/pinned-octocat.svg" color="#4078c0">
      <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">

    <meta name="html-safe-nonce" content="ed221b22cc852285620cff6de415f4ee36364630">
    <meta content="1683370bbda250e5d2530dfa535d3add20c4f703" name="form-nonce" />

    <meta http-equiv="x-pjax-version" content="8c57ae2406b1076c4bddfbcd9b742e31">
    

      
  <meta name="description" content="PHPPowerBrowse - PHP onefile file browser">
  <meta name="go-import" content="github.com/arzynik/PHPPowerBrowse git https://github.com/arzynik/PHPPowerBrowse.git">

  <meta content="27974" name="octolytics-dimension-user_id" /><meta content="arzynik" name="octolytics-dimension-user_login" /><meta content="934916" name="octolytics-dimension-repository_id" /><meta content="arzynik/PHPPowerBrowse" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="934916" name="octolytics-dimension-repository_network_root_id" /><meta content="arzynik/PHPPowerBrowse" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/arzynik/PHPPowerBrowse/commits/master.atom" rel="alternate" title="Recent Commits to PHPPowerBrowse:master" type="application/atom+xml">


      <link rel="canonical" href="https://github.com/arzynik/PHPPowerBrowse/blob/master/browse.php" data-pjax-transient>
  </head>


  <body class="logged-out  env-production windows vis-public page-blob">
    <div id="js-pjax-loader-bar" class="pjax-loader-bar"><div class="progress"></div></div>
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>

    
    
    



          <header class="site-header js-details-container" role="banner">
  <div class="container-responsive">
    <a class="header-logo-invertocat" href="https://github.com/" aria-label="Homepage" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
      <svg aria-hidden="true" class="octicon octicon-mark-github" height="32" version="1.1" viewBox="0 0 16 16" width="32"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg>
    </a>

    <button class="btn-link float-right site-header-toggle js-details-target" type="button" aria-label="Toggle navigation">
      <svg aria-hidden="true" class="octicon octicon-three-bars" height="24" version="1.1" viewBox="0 0 12 16" width="18"><path d="M11.41 9H.59C0 9 0 8.59 0 8c0-.59 0-1 .59-1H11.4c.59 0 .59.41.59 1 0 .59 0 1-.59 1h.01zm0-4H.59C0 5 0 4.59 0 4c0-.59 0-1 .59-1H11.4c.59 0 .59.41.59 1 0 .59 0 1-.59 1h.01zM.59 11H11.4c.59 0 .59.41.59 1 0 .59 0 1-.59 1H.59C0 13 0 12.59 0 12c0-.59 0-1 .59-1z"></path></svg>
    </button>

    <div class="site-header-menu">
      <nav class="site-header-nav site-header-nav-main">
        <a href="/personal" class="js-selected-navigation-item nav-item nav-item-personal" data-ga-click="Header, click, Nav menu - item:personal" data-selected-links="/personal /personal">
          Personal
</a>        <a href="/open-source" class="js-selected-navigation-item nav-item nav-item-opensource" data-ga-click="Header, click, Nav menu - item:opensource" data-selected-links="/open-source /open-source">
          Open source
</a>        <a href="/business" class="js-selected-navigation-item nav-item nav-item-business" data-ga-click="Header, click, Nav menu - item:business" data-selected-links="/business /business/partners /business/features /business/customers /business">
          Business
</a>        <a href="/explore" class="js-selected-navigation-item nav-item nav-item-explore" data-ga-click="Header, click, Nav menu - item:explore" data-selected-links="/explore /trending /trending/developers /integrations /integrations/feature/code /integrations/feature/collaborate /integrations/feature/ship /explore">
          Explore
</a>      </nav>

      <div class="site-header-actions">
            <a class="btn btn-primary site-header-actions-btn" href="/join?source=header-repo" data-ga-click="(Logged out) Header, clicked Sign up, text:sign-up">Sign up</a>
          <a class="btn site-header-actions-btn mr-2" href="/login?return_to=%2Farzynik%2FPHPPowerBrowse%2Fblob%2Fmaster%2Fbrowse.php" data-ga-click="(Logged out) Header, clicked Sign in, text:sign-in">Sign in</a>
      </div>

        <nav class="site-header-nav site-header-nav-secondary">
          <a class="nav-item" href="/pricing">Pricing</a>
          <a class="nav-item" href="/blog">Blog</a>
          <a class="nav-item" href="https://help.github.com">Support</a>
          <a class="nav-item header-search-link" href="https://github.com/search">Search GitHub</a>
              <div class="header-search scoped-search site-scoped-search js-site-search" role="search">
  <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="/arzynik/PHPPowerBrowse/search" class="js-site-search-form" data-scoped-search-url="/arzynik/PHPPowerBrowse/search" data-unscoped-search-url="/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
    <label class="form-control header-search-wrapper js-chromeless-input-container">
      <div class="header-search-scope">This repository</div>
      <input type="text"
        class="form-control header-search-input js-site-search-focus js-site-search-field is-clearable"
        data-hotkey="s"
        name="q"
        placeholder="Search"
        aria-label="Search this repository"
        data-unscoped-placeholder="Search GitHub"
        data-scoped-placeholder="Search"
        autocapitalize="off">
    </label>
</form></div>

        </nav>
    </div>
  </div>
</header>



    <div id="start-of-content" class="accessibility-aid"></div>

      <div id="js-flash-container">
</div>


    <div role="main">
        <div itemscope itemtype="http://schema.org/SoftwareSourceCode">
    <div id="js-repo-pjax-container" data-pjax-container>
      
<div class="pagehead repohead instapaper_ignore readability-menu experiment-repo-nav">
  <div class="container repohead-details-container">

    

<ul class="pagehead-actions">

  <li>
      <a href="/login?return_to=%2Farzynik%2FPHPPowerBrowse"
    class="btn btn-sm btn-with-count tooltipped tooltipped-n"
    aria-label="You must be signed in to watch a repository" rel="nofollow">
    <svg aria-hidden="true" class="octicon octicon-eye" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"></path></svg>
    Watch
  </a>
  <a class="social-count" href="/arzynik/PHPPowerBrowse/watchers"
     aria-label="2 users are watching this repository">
    2
  </a>

  </li>

  <li>
      <a href="/login?return_to=%2Farzynik%2FPHPPowerBrowse"
    class="btn btn-sm btn-with-count tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <svg aria-hidden="true" class="octicon octicon-star" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74z"></path></svg>
    Star
  </a>

    <a class="social-count js-social-count" href="/arzynik/PHPPowerBrowse/stargazers"
      aria-label="4 users starred this repository">
      4
    </a>

  </li>

  <li>
      <a href="/login?return_to=%2Farzynik%2FPHPPowerBrowse"
        class="btn btn-sm btn-with-count tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <svg aria-hidden="true" class="octicon octicon-repo-forked" height="16" version="1.1" viewBox="0 0 10 16" width="10"><path d="M8 1a1.993 1.993 0 0 0-1 3.72V6L5 8 3 6V4.72A1.993 1.993 0 0 0 2 1a1.993 1.993 0 0 0-1 3.72V6.5l3 3v1.78A1.993 1.993 0 0 0 5 15a1.993 1.993 0 0 0 1-3.72V9.5l3-3V4.72A1.993 1.993 0 0 0 8 1zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3 10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3-10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"></path></svg>
        Fork
      </a>

    <a href="/arzynik/PHPPowerBrowse/network" class="social-count"
       aria-label="2 users are forked this repository">
      2
    </a>
  </li>
</ul>

    <h1 class="public ">
  <svg aria-hidden="true" class="octicon octicon-repo" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"></path></svg>
  <span class="author" itemprop="author"><a href="/arzynik" class="url fn" rel="author">arzynik</a></span><!--
--><span class="path-divider">/</span><!--
--><strong itemprop="name"><a href="/arzynik/PHPPowerBrowse" data-pjax="#js-repo-pjax-container">PHPPowerBrowse</a></strong>

</h1>

  </div>
  <div class="container">
    
<nav class="reponav js-repo-nav js-sidenav-container-pjax"
     itemscope
     itemtype="http://schema.org/BreadcrumbList"
     role="navigation"
     data-pjax="#js-repo-pjax-container">

  <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a href="/arzynik/PHPPowerBrowse" aria-selected="true" class="js-selected-navigation-item selected reponav-item" data-hotkey="g c" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /arzynik/PHPPowerBrowse" itemprop="url">
      <svg aria-hidden="true" class="octicon octicon-code" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"></path></svg>
      <span itemprop="name">Code</span>
      <meta itemprop="position" content="1">
</a>  </span>

    <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
      <a href="/arzynik/PHPPowerBrowse/issues" class="js-selected-navigation-item reponav-item" data-hotkey="g i" data-selected-links="repo_issues repo_labels repo_milestones /arzynik/PHPPowerBrowse/issues" itemprop="url">
        <svg aria-hidden="true" class="octicon octicon-issue-opened" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7zm1 3H6v5h2V4zm0 6H6v2h2v-2z"></path></svg>
        <span itemprop="name">Issues</span>
        <span class="counter">0</span>
        <meta itemprop="position" content="2">
</a>    </span>

  <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a href="/arzynik/PHPPowerBrowse/pulls" class="js-selected-navigation-item reponav-item" data-hotkey="g p" data-selected-links="repo_pulls /arzynik/PHPPowerBrowse/pulls" itemprop="url">
      <svg aria-hidden="true" class="octicon octicon-git-pull-request" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M11 11.28V5c-.03-.78-.34-1.47-.94-2.06C9.46 2.35 8.78 2.03 8 2H7V0L4 3l3 3V4h1c.27.02.48.11.69.31.21.2.3.42.31.69v6.28A1.993 1.993 0 0 0 10 15a1.993 1.993 0 0 0 1-3.72zm-1 2.92c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zM4 3c0-1.11-.89-2-2-2a1.993 1.993 0 0 0-1 3.72v6.56A1.993 1.993 0 0 0 2 15a1.993 1.993 0 0 0 1-3.72V4.72c.59-.34 1-.98 1-1.72zm-.8 10c0 .66-.55 1.2-1.2 1.2-.65 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"></path></svg>
      <span itemprop="name">Pull requests</span>
      <span class="counter">0</span>
      <meta itemprop="position" content="3">
</a>  </span>




  <a href="/arzynik/PHPPowerBrowse/pulse" class="js-selected-navigation-item reponav-item" data-selected-links="pulse /arzynik/PHPPowerBrowse/pulse">
    <svg aria-hidden="true" class="octicon octicon-pulse" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M11.5 8L8.8 5.4 6.6 8.5 5.5 1.6 2.38 8H0v2h3.6l.9-1.8.9 5.4L9 8.5l1.6 1.5H14V8z"></path></svg>
    Pulse
</a>
  <a href="/arzynik/PHPPowerBrowse/graphs" class="js-selected-navigation-item reponav-item" data-selected-links="repo_graphs repo_contributors /arzynik/PHPPowerBrowse/graphs">
    <svg aria-hidden="true" class="octicon octicon-graph" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M16 14v1H0V0h1v14h15zM5 13H3V8h2v5zm4 0H7V3h2v10zm4 0h-2V6h2v7z"></path></svg>
    Graphs
</a>

</nav>

  </div>
</div>

<div class="container new-discussion-timeline experiment-repo-nav">
  <div class="repository-content">

    

<a href="/arzynik/PHPPowerBrowse/blob/60c12cbfa809d195a527cedc6630d581d6d81dd2/browse.php" class="d-none js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:1da1d4a0090cec310d62a3b05ffcb751 -->

<div class="file-navigation js-zeroclipboard-container">
  
<div class="select-menu branch-select-menu js-menu-container js-select-menu float-left">
  <button class="btn btn-sm select-menu-button js-menu-target css-truncate" data-hotkey="w"
    
    type="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <i>Branch:</i>
    <span class="js-select-button css-truncate-target">master</span>
  </button>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <svg aria-label="Close" class="octicon octicon-x js-menu-close" height="16" role="img" version="1.1" viewBox="0 0 12 16" width="12"><path d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
        <span class="select-menu-title">Switch branches/tags</span>
      </div>

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="form-control js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" data-filter-placeholder="Filter branches/tags" class="js-select-menu-tab" role="tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" data-filter-placeholder="Find a tag…" class="js-select-menu-tab" role="tab">Tags</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches" role="menu">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <a class="select-menu-item js-navigation-item js-navigation-open selected"
               href="/arzynik/PHPPowerBrowse/blob/master/browse.php"
               data-name="master"
               data-skip-pjax="true"
               rel="nofollow">
              <svg aria-hidden="true" class="octicon octicon-check select-menu-item-icon" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M12 5l-8 8-4-4 1.5-1.5L4 10l6.5-6.5z"></path></svg>
              <span class="select-menu-item-text css-truncate-target js-select-menu-filter-text">
                master
              </span>
            </a>
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div>

    </div>
  </div>
</div>

  <div class="btn-group float-right">
    <a href="/arzynik/PHPPowerBrowse/find/master"
          class="js-pjax-capture-input btn btn-sm"
          data-pjax
          data-hotkey="t">
      Find file
    </a>
    <button aria-label="Copy file path to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button">Copy path</button>
  </div>
  <div class="breadcrumb js-zeroclipboard-target">
    <span class="repo-root js-repo-root"><span class="js-path-segment"><a href="/arzynik/PHPPowerBrowse"><span>PHPPowerBrowse</span></a></span></span><span class="separator">/</span><strong class="final-path">browse.php</strong>
  </div>
</div>


  <div class="commit-tease">
      <span class="float-right">
        <a class="commit-tease-sha" href="/arzynik/PHPPowerBrowse/commit/60c12cbfa809d195a527cedc6630d581d6d81dd2" data-pjax>
          60c12cb
        </a>
        <relative-time datetime="2012-04-03T16:59:13Z">Apr 3, 2012</relative-time>
      </span>
      <div>
        <img alt="@arzynik" class="avatar" height="20" src="https://avatars3.githubusercontent.com/u/27974?v=3&amp;s=40" width="20" />
        <a href="/arzynik" class="user-mention" rel="author">arzynik</a>
          <a href="/arzynik/PHPPowerBrowse/commit/60c12cbfa809d195a527cedc6630d581d6d81dd2" class="message" data-pjax="true" title="merged in protected branch">merged in protected branch</a>
      </div>

    <div class="commit-tease-contributors">
      <button type="button" class="btn-link muted-link contributors-toggle" data-facebox="#blob_contributors_box">
        <strong>1</strong>
         contributor
      </button>
      
    </div>

    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header" data-facebox-id="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list" data-facebox-id="facebox-description">
          <li class="facebox-user-list-item">
            <img alt="@arzynik" height="24" src="https://avatars1.githubusercontent.com/u/27974?v=3&amp;s=48" width="24" />
            <a href="/arzynik">arzynik</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file">
  <div class="file-header">
  <div class="file-actions">

    <div class="btn-group">
      <a href="/arzynik/PHPPowerBrowse/raw/master/browse.php" class="btn btn-sm " id="raw-url">Raw</a>
        <a href="/arzynik/PHPPowerBrowse/blame/master/browse.php" class="btn btn-sm js-update-url-with-hash">Blame</a>
      <a href="/arzynik/PHPPowerBrowse/commits/master/browse.php" class="btn btn-sm " rel="nofollow">History</a>
    </div>

        <a class="btn-octicon tooltipped tooltipped-nw"
           href="https://windows.github.com"
           aria-label="Open this file in GitHub Desktop"
           data-ga-click="Repository, open with desktop, type:windows">
            <svg aria-hidden="true" class="octicon octicon-device-desktop" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M15 2H1c-.55 0-1 .45-1 1v9c0 .55.45 1 1 1h5.34c-.25.61-.86 1.39-2.34 2h8c-1.48-.61-2.09-1.39-2.34-2H15c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm0 9H1V3h14v8z"></path></svg>
        </a>

        <button type="button" class="btn-octicon disabled tooltipped tooltipped-nw"
          aria-label="You must be signed in to make or propose changes">
          <svg aria-hidden="true" class="octicon octicon-pencil" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path></svg>
        </button>
        <button type="button" class="btn-octicon btn-octicon-danger disabled tooltipped tooltipped-nw"
          aria-label="You must be signed in to make or propose changes">
          <svg aria-hidden="true" class="octicon octicon-trashcan" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M11 2H9c0-.55-.45-1-1-1H5c-.55 0-1 .45-1 1H2c-.55 0-1 .45-1 1v1c0 .55.45 1 1 1v9c0 .55.45 1 1 1h7c.55 0 1-.45 1-1V5c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm-1 12H3V5h1v8h1V5h1v8h1V5h1v8h1V5h1v9zm1-10H2V3h9v1z"></path></svg>
        </button>
  </div>

  <div class="file-info">
      <span class="file-mode" title="File mode">executable file</span>
      <span class="file-info-divider"></span>
      611 lines (529 sloc)
      <span class="file-info-divider"></span>
    55.5 KB
  </div>
</div>

  

  <div itemprop="text" class="blob-wrapper data type-php">
      <table class="highlight tab-size js-file-line-container" data-tab-size="8">
      <tr>
        <td id="L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="LC1" class="blob-code blob-code-inner js-file-line"><span class="pl-pse">&lt;?php</span><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="LC2" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/*************************************************/</span></span></td>
      </tr>
      <tr>
        <td id="L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="LC3" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/*                                               */</span></span></td>
      </tr>
      <tr>
        <td id="L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="LC4" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* PHP Power Browse                              */</span></span></td>
      </tr>
      <tr>
        <td id="L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="LC5" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* Devin Smith (php@arzynik.com)                 */</span></span></td>
      </tr>
      <tr>
        <td id="L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="LC6" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* 2004-01-31 http://devin.la                    */</span></span></td>
      </tr>
      <tr>
        <td id="L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="LC7" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/*                                               */</span></span></td>
      </tr>
      <tr>
        <td id="L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="LC8" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* Icons are by Mark James (famfamfam.com)       */</span></span></td>
      </tr>
      <tr>
        <td id="L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="LC9" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/*                                               */</span></span></td>
      </tr>
      <tr>
        <td id="L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="LC10" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/*************************************************/</span></span></td>
      </tr>
      <tr>
        <td id="L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="LC11" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="LC12" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* Config */</span></span></td>
      </tr>
      <tr>
        <td id="L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="LC13" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>PAGE_TITLE<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>PHP Power Browse<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="LC14" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>THUMB_HEIGHT<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">16</span>;</span></td>
      </tr>
      <tr>
        <td id="L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="LC15" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>THUMB_WIDTH<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">16</span>;</span></td>
      </tr>
      <tr>
        <td id="L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="LC16" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>DISPLAY_HIDDEN<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">FALSE</span>;</span></td>
      </tr>
      <tr>
        <td id="L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="LC17" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>PROCESS_INDEX<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">FALSE</span>;</span></td>
      </tr>
      <tr>
        <td id="L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="LC18" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>BG_IMAGE<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="LC19" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="LC20" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>ENABLE_LINE_COUNT<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="LC21" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>ENABLE_SOURCE_VIEW<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="LC22" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>ENABLE_IMAGE_ICONS<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">false</span>;</span></td>
      </tr>
      <tr>
        <td id="L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="LC23" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>ENABLE_RECURSIVE_SUMMARY<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L24" class="blob-num js-line-number" data-line-number="24"></td>
        <td id="LC24" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L25" class="blob-num js-line-number" data-line-number="25"></td>
        <td id="LC25" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>PROTECTED_USER<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>user<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L26" class="blob-num js-line-number" data-line-number="26"></td>
        <td id="LC26" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>PROTECTED_PASSWORD<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>pass<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L27" class="blob-num js-line-number" data-line-number="27"></td>
        <td id="LC27" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L28" class="blob-num js-line-number" data-line-number="28"></td>
        <td id="LC28" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>BG_COLOR_1<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>#8888aa<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L29" class="blob-num js-line-number" data-line-number="29"></td>
        <td id="LC29" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>BG_COLOR_2<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>#f0f0f0<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L30" class="blob-num js-line-number" data-line-number="30"></td>
        <td id="LC30" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>BG_COLOR_3<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>#f0f0f0<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L31" class="blob-num js-line-number" data-line-number="31"></td>
        <td id="LC31" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TXT_COLOR_1<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>#000000<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L32" class="blob-num js-line-number" data-line-number="32"></td>
        <td id="LC32" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TXT_COLOR_2<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>#003399<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L33" class="blob-num js-line-number" data-line-number="33"></td>
        <td id="LC33" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TB_COLOR_1<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>#dddddd<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L34" class="blob-num js-line-number" data-line-number="34"></td>
        <td id="LC34" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TB_COLOR_2<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>#C1C1DF<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L35" class="blob-num js-line-number" data-line-number="35"></td>
        <td id="LC35" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TB_COLOR_3<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>#BDBDD6<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L36" class="blob-num js-line-number" data-line-number="36"></td>
        <td id="LC36" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TB_COLOR_4<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>#FFFFFF<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L37" class="blob-num js-line-number" data-line-number="37"></td>
        <td id="LC37" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L38" class="blob-num js-line-number" data-line-number="38"></td>
        <td id="LC38" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>IGNORE_DIRS<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">array</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>./logs<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L39" class="blob-num js-line-number" data-line-number="39"></td>
        <td id="LC39" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>HIDE_FILES<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">array</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>./index.php<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L40" class="blob-num js-line-number" data-line-number="40"></td>
        <td id="LC40" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>DENY_SOURCE<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">array</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>index.php<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L41" class="blob-num js-line-number" data-line-number="41"></td>
        <td id="LC41" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>PROTECTED_DIRS<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">array</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>./protected<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L42" class="blob-num js-line-number" data-line-number="42"></td>
        <td id="LC42" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>CODE_FILES<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">array</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>php<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>php4<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>php3<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>phtml<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>html<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>htm<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>js<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>asp<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>xml<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>css<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>bml<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>cgi<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>cfm<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>apm<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>jhtml<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>xhtml<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>aspx<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>tpl<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>inc<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>c<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>h<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>vb<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>py<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>sh<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>pl<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>cpp<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>cs<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L43" class="blob-num js-line-number" data-line-number="43"></td>
        <td id="LC43" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>IMG_FILES<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">array</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>jpg<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>jpeg<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>gif<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L44" class="blob-num js-line-number" data-line-number="44"></td>
        <td id="LC44" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>INDEX_FILES<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">array</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>index.php<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>index.html<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>index.htm<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>index.asp<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>default.asp<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>default.htm<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L45" class="blob-num js-line-number" data-line-number="45"></td>
        <td id="LC45" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L46" class="blob-num js-line-number" data-line-number="46"></td>
        <td id="LC46" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>STRINGS<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>401_TITLE<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Error 401 Unauthorized<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L47" class="blob-num js-line-number" data-line-number="47"></td>
        <td id="LC47" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>STRINGS<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>401_CONTENT<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>You do not have permission to access this directory. Please contact the webmaster for permission.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L48" class="blob-num js-line-number" data-line-number="48"></td>
        <td id="LC48" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>STRINGS<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>SUMMARY_CODE<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>%1$s lines of code in %2$s files within %3$s directories.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L49" class="blob-num js-line-number" data-line-number="49"></td>
        <td id="LC49" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>STRINGS<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>SUMMARY_NOCODE<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>%2$s files within %3$s directories.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L50" class="blob-num js-line-number" data-line-number="50"></td>
        <td id="LC50" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>STRINGS<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>CURRENT_DIRECTORY<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Current Directory<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L51" class="blob-num js-line-number" data-line-number="51"></td>
        <td id="LC51" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>STRINGS<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>FILE_NAME<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>File Name<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L52" class="blob-num js-line-number" data-line-number="52"></td>
        <td id="LC52" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>STRINGS<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>FILE_MODIFIED<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Last Modified<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L53" class="blob-num js-line-number" data-line-number="53"></td>
        <td id="LC53" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>STRINGS<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>FILE_SIZE<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>Size<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L54" class="blob-num js-line-number" data-line-number="54"></td>
        <td id="LC54" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>STRINGS<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>SOURCE_SUMMARY<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>%1$s has %2$s lines, size is %3$s bytes, last modified on %4$s<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L55" class="blob-num js-line-number" data-line-number="55"></td>
        <td id="LC55" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L56" class="blob-num js-line-number" data-line-number="56"></td>
        <td id="LC56" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L57" class="blob-num js-line-number" data-line-number="57"></td>
        <td id="LC57" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L58" class="blob-num js-line-number" data-line-number="58"></td>
        <td id="LC58" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* BAD Security */</span></span></td>
      </tr>
      <tr>
        <td id="L59" class="blob-num js-line-number" data-line-number="59"></td>
        <td id="LC59" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$dir</span> <span class="pl-k">=</span> <span class="pl-smi">$_GET</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>dir<span class="pl-pds">&#39;</span></span>];</span></td>
      </tr>
      <tr>
        <td id="L60" class="blob-num js-line-number" data-line-number="60"></td>
        <td id="LC60" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$basedir</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L61" class="blob-num js-line-number" data-line-number="61"></td>
        <td id="LC61" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> (<span class="pl-c1">ereg</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>[.][.]<span class="pl-pds">&#39;</span></span>,<span class="pl-smi">$dir</span>)) <span class="pl-smi">$dir</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L62" class="blob-num js-line-number" data-line-number="62"></td>
        <td id="LC62" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> (<span class="pl-c1">ereg</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>[.][.]<span class="pl-pds">&#39;</span></span>,<span class="pl-smi">$file</span>)) <span class="pl-smi">$file</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L63" class="blob-num js-line-number" data-line-number="63"></td>
        <td id="LC63" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">elseif</span> (<span class="pl-c1">ereg</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>[.]/<span class="pl-pds">&#39;</span></span>,<span class="pl-smi">$dir</span>)) <span class="pl-smi">$dir</span> <span class="pl-k">=</span> <span class="pl-c1">ereg_replace</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>[.]/<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>,<span class="pl-smi">$dir</span>);</span></td>
      </tr>
      <tr>
        <td id="L64" class="blob-num js-line-number" data-line-number="64"></td>
        <td id="LC64" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">elseif</span> (<span class="pl-k">!</span><span class="pl-c1">eregi</span>(<span class="pl-smi">$basedir</span>,<span class="pl-smi">$dir</span>)) <span class="pl-smi">$dir</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L65" class="blob-num js-line-number" data-line-number="65"></td>
        <td id="LC65" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">elseif</span> (<span class="pl-k">!</span><span class="pl-smi">$dir</span>) <span class="pl-smi">$dir</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L66" class="blob-num js-line-number" data-line-number="66"></td>
        <td id="LC66" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">elseif</span> (<span class="pl-smi">$dir</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>.<span class="pl-pds">&#39;</span></span>) <span class="pl-smi">$dir</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L67" class="blob-num js-line-number" data-line-number="67"></td>
        <td id="LC67" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">while</span> (<span class="pl-c1">ereg</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>//<span class="pl-pds">&#39;</span></span>,<span class="pl-smi">$dir</span>)) <span class="pl-smi">$dir</span> <span class="pl-k">=</span> <span class="pl-c1">ereg_replace</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>//<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span>,<span class="pl-smi">$dir</span>);</span></td>
      </tr>
      <tr>
        <td id="L68" class="blob-num js-line-number" data-line-number="68"></td>
        <td id="LC68" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">while</span> (<span class="pl-c1">ereg</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>//<span class="pl-pds">&#39;</span></span>,<span class="pl-smi">$file</span>)) <span class="pl-smi">$file</span> <span class="pl-k">=</span> <span class="pl-c1">ereg_replace</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>//<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span>,<span class="pl-smi">$file</span>);</span></td>
      </tr>
      <tr>
        <td id="L69" class="blob-num js-line-number" data-line-number="69"></td>
        <td id="LC69" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> (<span class="pl-smi">$dir</span>{<span class="pl-c1">strlen</span>(<span class="pl-smi">$dir</span>)<span class="pl-k">-</span><span class="pl-c1">1</span>} <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span>) <span class="pl-smi">$dir</span>{<span class="pl-c1">strlen</span>(<span class="pl-smi">$dir</span>)<span class="pl-k">-</span><span class="pl-c1">1</span>} <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L70" class="blob-num js-line-number" data-line-number="70"></td>
        <td id="LC70" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> (<span class="pl-smi">$dir</span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">$dir</span>{<span class="pl-c1">0</span>} <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span>) <span class="pl-smi">$dir</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$dir</span>;</span></td>
      </tr>
      <tr>
        <td id="L71" class="blob-num js-line-number" data-line-number="71"></td>
        <td id="LC71" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> (<span class="pl-smi">$dir</span>{<span class="pl-c1">0</span>} <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span>) <span class="pl-smi">$dirlink</span> <span class="pl-k">=</span> <span class="pl-c1">substr</span>(<span class="pl-smi">$dir</span>,<span class="pl-c1">1</span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L72" class="blob-num js-line-number" data-line-number="72"></td>
        <td id="LC72" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">elseif</span> (<span class="pl-k">!</span><span class="pl-smi">$dir</span>) <span class="pl-smi">$dirlink</span> <span class="pl-k">=</span> <span class="pl-c1">substr</span>(<span class="pl-smi">$dir</span>,<span class="pl-c1">1</span>);</span></td>
      </tr>
      <tr>
        <td id="L73" class="blob-num js-line-number" data-line-number="73"></td>
        <td id="LC73" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-c1">is_dir</span>(<span class="pl-smi">$basedir</span><span class="pl-k">.</span><span class="pl-smi">$dir</span>)) <span class="pl-c1">header</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>Location: <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>SCRIPT_NAME<span class="pl-pds">&#39;</span></span>]);</span></td>
      </tr>
      <tr>
        <td id="L74" class="blob-num js-line-number" data-line-number="74"></td>
        <td id="LC74" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-smi">$file</span> <span class="pl-k">=</span> <span class="pl-c1">ereg_replace</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>[.]/<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>,<span class="pl-smi">$file</span>);</span></td>
      </tr>
      <tr>
        <td id="L75" class="blob-num js-line-number" data-line-number="75"></td>
        <td id="LC75" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L76" class="blob-num js-line-number" data-line-number="76"></td>
        <td id="LC76" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>BG_IMAGE<span class="pl-pds">&#39;</span></span>]) <span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>BG_IMAGE<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>SCRIPT_NAME<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>?p=logo<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L77" class="blob-num js-line-number" data-line-number="77"></td>
        <td id="LC77" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L78" class="blob-num js-line-number" data-line-number="78"></td>
        <td id="LC78" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">if</span> (isprotecteddir(<span class="pl-smi">$dir</span>) <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">$_GET</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>p<span class="pl-pds">&#39;</span></span>] <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>logo<span class="pl-pds">&#39;</span></span>) {</span></td>
      </tr>
      <tr>
        <td id="L79" class="blob-num js-line-number" data-line-number="79"></td>
        <td id="LC79" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">    <span class="pl-k">if</span> (<span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>PHP_AUTH_USER<span class="pl-pds">&#39;</span></span>] <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>PROTECTED_USER<span class="pl-pds">&#39;</span></span>] <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>PHP_AUTH_PW<span class="pl-pds">&#39;</span></span>] <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>PROTECTED_PASSWORD<span class="pl-pds">&#39;</span></span>]) {</span></td>
      </tr>
      <tr>
        <td id="L80" class="blob-num js-line-number" data-line-number="80"></td>
        <td id="LC80" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">  	<span class="pl-c1">header</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>WWW-Authenticate: Basic realm=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>PAGE_TITLE<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L81" class="blob-num js-line-number" data-line-number="81"></td>
        <td id="LC81" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">header</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>HTTP/1.0 401 Unauthorized<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L82" class="blob-num js-line-number" data-line-number="82"></td>
        <td id="LC82" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		showmessage(<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>STRINGS<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>401_TITLE<span class="pl-pds">&#39;</span></span>],<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>STRINGS<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>401_CONTENT<span class="pl-pds">&#39;</span></span>]);</span></td>
      </tr>
      <tr>
        <td id="L83" class="blob-num js-line-number" data-line-number="83"></td>
        <td id="LC83" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L84" class="blob-num js-line-number" data-line-number="84"></td>
        <td id="LC84" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L85" class="blob-num js-line-number" data-line-number="85"></td>
        <td id="LC85" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L86" class="blob-num js-line-number" data-line-number="86"></td>
        <td id="LC86" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c1">set_time_limit</span>(<span class="pl-c1">0</span>);</span></td>
      </tr>
      <tr>
        <td id="L87" class="blob-num js-line-number" data-line-number="87"></td>
        <td id="LC87" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L88" class="blob-num js-line-number" data-line-number="88"></td>
        <td id="LC88" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* Output */</span></span></td>
      </tr>
      <tr>
        <td id="L89" class="blob-num js-line-number" data-line-number="89"></td>
        <td id="LC89" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L90" class="blob-num js-line-number" data-line-number="90"></td>
        <td id="LC90" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L91" class="blob-num js-line-number" data-line-number="91"></td>
        <td id="LC91" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">function</span> <span class="pl-en">listdir</span>(<span class="pl-smi">$directory</span>) {</span></td>
      </tr>
      <tr>
        <td id="L92" class="blob-num js-line-number" data-line-number="92"></td>
        <td id="LC92" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">global</span> <span class="pl-smi">$dirlink</span>, <span class="pl-smi">$basedir</span>;</span></td>
      </tr>
      <tr>
        <td id="L93" class="blob-num js-line-number" data-line-number="93"></td>
        <td id="LC93" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$handle</span><span class="pl-k">=</span><span class="pl-c1">opendir</span>(<span class="pl-smi">$basedir</span><span class="pl-k">.</span><span class="pl-smi">$directory</span>);</span></td>
      </tr>
      <tr>
        <td id="L94" class="blob-num js-line-number" data-line-number="94"></td>
        <td id="LC94" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">while</span> (<span class="pl-smi">$file</span> <span class="pl-k">=</span> <span class="pl-c1">readdir</span>(<span class="pl-smi">$handle</span>)) <span class="pl-smi">$filelist</span>[] <span class="pl-k">=</span> <span class="pl-smi">$file</span>;</span></td>
      </tr>
      <tr>
        <td id="L95" class="blob-num js-line-number" data-line-number="95"></td>
        <td id="LC95" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$count</span> <span class="pl-k">=</span> <span class="pl-c1">1</span>;</span></td>
      </tr>
      <tr>
        <td id="L96" class="blob-num js-line-number" data-line-number="96"></td>
        <td id="LC96" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c1">natcasesort</span>(<span class="pl-smi">$filelist</span>);</span></td>
      </tr>
      <tr>
        <td id="L97" class="blob-num js-line-number" data-line-number="97"></td>
        <td id="LC97" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">while</span> (<span class="pl-c1">list</span> (<span class="pl-smi">$key</span>, <span class="pl-smi">$file</span>) <span class="pl-k">=</span> <span class="pl-c1">each</span> (<span class="pl-smi">$filelist</span>)) {</span></td>
      </tr>
      <tr>
        <td id="L98" class="blob-num js-line-number" data-line-number="98"></td>
        <td id="LC98" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> (<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>PROCESS_INDEX<span class="pl-pds">&#39;</span></span>] <span class="pl-k">&amp;&amp;</span> <span class="pl-c1">in_array</span>(<span class="pl-smi">$file</span>,<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>INDEX_FILES<span class="pl-pds">&#39;</span></span>])) <span class="pl-c1">header</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>Location: <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-c1">substr</span>(<span class="pl-smi">$directory</span>,<span class="pl-c1">1</span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$file</span>);</span></td>
      </tr>
      <tr>
        <td id="L99" class="blob-num js-line-number" data-line-number="99"></td>
        <td id="LC99" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> ((<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>DISPLAY_HIDDEN<span class="pl-pds">&#39;</span></span>] <span class="pl-k">||</span> (<span class="pl-k">!</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>DISPLAY_HIDDEN<span class="pl-pds">&#39;</span></span>] <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">$file</span>{<span class="pl-c1">0</span>} <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&quot;</span>.<span class="pl-pds">&quot;</span></span>)) </span></td>
      </tr>
      <tr>
        <td id="L100" class="blob-num js-line-number" data-line-number="100"></td>
        <td id="LC100" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 	 	<span class="pl-k">&amp;&amp;</span> <span class="pl-smi">$file</span> <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>.<span class="pl-pds">&#39;</span></span> </span></td>
      </tr>
      <tr>
        <td id="L101" class="blob-num js-line-number" data-line-number="101"></td>
        <td id="LC101" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 	 	<span class="pl-k">&amp;&amp;</span> <span class="pl-smi">$file</span> <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>..<span class="pl-pds">&#39;</span></span> </span></td>
      </tr>
      <tr>
        <td id="L102" class="blob-num js-line-number" data-line-number="102"></td>
        <td id="LC102" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 	 	<span class="pl-k">&amp;&amp;</span> (<span class="pl-k">!</span><span class="pl-c1">is_array</span>(<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>HIDE_FILES<span class="pl-pds">&#39;</span></span>]) <span class="pl-k">||</span> (<span class="pl-c1">is_array</span>(<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>HIDE_FILES<span class="pl-pds">&#39;</span></span>]) <span class="pl-k">&amp;&amp;</span> <span class="pl-k">!</span><span class="pl-c1">in_array</span>(<span class="pl-smi">$basedir</span><span class="pl-k">.</span><span class="pl-smi">$directory</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$file</span>,<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>HIDE_FILES<span class="pl-pds">&#39;</span></span>])))) {</span></td>
      </tr>
      <tr>
        <td id="L103" class="blob-num js-line-number" data-line-number="103"></td>
        <td id="LC103" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 	<span class="pl-smi">$stats</span> <span class="pl-k">=</span> <span class="pl-c1">stat</span>(<span class="pl-smi">$basedir</span><span class="pl-k">.</span><span class="pl-smi">$directory</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$file</span>);</span></td>
      </tr>
      <tr>
        <td id="L104" class="blob-num js-line-number" data-line-number="104"></td>
        <td id="LC104" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 	<span class="pl-k">if</span> (<span class="pl-smi">$basedir</span><span class="pl-k">.</span><span class="pl-smi">$directory</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>./<span class="pl-pds">&#39;</span></span>) <span class="pl-smi">$dirlink</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L105" class="blob-num js-line-number" data-line-number="105"></td>
        <td id="LC105" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 	<span class="pl-k">else</span> <span class="pl-smi">$dirlink</span> <span class="pl-k">=</span> <span class="pl-smi">$basedir</span><span class="pl-k">.</span><span class="pl-smi">$directory</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L106" class="blob-num js-line-number" data-line-number="106"></td>
        <td id="LC106" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	</span></td>
      </tr>
      <tr>
        <td id="L107" class="blob-num js-line-number" data-line-number="107"></td>
        <td id="LC107" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 	<span class="pl-k">if</span> (<span class="pl-c1">is_dir</span>(<span class="pl-smi">$basedir</span><span class="pl-k">.</span><span class="pl-smi">$directory</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$file</span>)) {</span></td>
      </tr>
      <tr>
        <td id="L108" class="blob-num js-line-number" data-line-number="108"></td>
        <td id="LC108" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 		<span class="pl-smi">$dirc</span>[] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td width=&quot;100%&quot;&gt;&lt;table cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot;&gt;&lt;tr&gt;&lt;td width=&quot;18&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L109" class="blob-num js-line-number" data-line-number="109"></td>
        <td id="LC109" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 		 	 	 	 <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;img src=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>SCRIPT_NAME<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>?p=mime&amp;amp;type=<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span>getmime(<span class="pl-smi">$directory</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$file</span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot; border=&quot;0&quot; alt=&quot;&quot;&gt;&lt;td align=&quot;left&quot;&gt;&lt;a href=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>SCRIPT_NAME<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>?dir=<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$dirlink</span><span class="pl-k">.</span><span class="pl-smi">$file</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$file</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/a&gt;&lt;/table&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L110" class="blob-num js-line-number" data-line-number="110"></td>
        <td id="LC110" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 		 	 	 	 <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td nowrap&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-c1">date</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>F jS Y<span class="pl-pds">&#39;</span></span>,<span class="pl-smi">$stats</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>9<span class="pl-pds">&#39;</span></span>])<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td nowrap&gt; - <span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L111" class="blob-num js-line-number" data-line-number="111"></td>
        <td id="LC111" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 	} <span class="pl-k">elseif</span>(iscodetype(<span class="pl-smi">$file</span>) <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>ENABLE_SOURCE_VIEW<span class="pl-pds">&#39;</span></span>]) {</span></td>
      </tr>
      <tr>
        <td id="L112" class="blob-num js-line-number" data-line-number="112"></td>
        <td id="LC112" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 		<span class="pl-smi">$filec</span>[] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td width=&quot;100%&quot;&gt;&lt;table cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot;&gt;&lt;tr&gt;&lt;td width=&quot;18&quot;&gt;&lt;a href=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$dirlink</span><span class="pl-k">.</span>url_encode(<span class="pl-smi">$file</span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;&lt;img src=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>SCRIPT_NAME<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>?p=mime&amp;amp;type=<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span>getmime(<span class="pl-smi">$directory</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$file</span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot; border=&quot;0&quot; alt=&quot;&quot;&gt;&lt;/a&gt;&lt;/td&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L113" class="blob-num js-line-number" data-line-number="113"></td>
        <td id="LC113" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 		 	 	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td align=&quot;left&quot;&gt;&lt;a href=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>SCRIPT_NAME<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>?p=source&amp;amp;file=<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span>url_encode(<span class="pl-smi">$dirlink</span><span class="pl-k">.</span><span class="pl-smi">$file</span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$file</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/a&gt;&lt;/table&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L114" class="blob-num js-line-number" data-line-number="114"></td>
        <td id="LC114" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 		 	 	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td nowrap&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-c1">date</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>F jS Y<span class="pl-pds">&#39;</span></span>,<span class="pl-smi">$stats</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>9<span class="pl-pds">&#39;</span></span>])<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td nowrap&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span>getsize(<span class="pl-smi">$stats</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>7<span class="pl-pds">&#39;</span></span>]); </span></td>
      </tr>
      <tr>
        <td id="L115" class="blob-num js-line-number" data-line-number="115"></td>
        <td id="LC115" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 	} <span class="pl-k">elseif</span>(isimgtype(<span class="pl-smi">$file</span>) <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>ENABLE_IMAGE_ICONS<span class="pl-pds">&#39;</span></span>]) {</span></td>
      </tr>
      <tr>
        <td id="L116" class="blob-num js-line-number" data-line-number="116"></td>
        <td id="LC116" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 		<span class="pl-smi">$filec</span>[] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td width=&quot;100%&quot;&gt;&lt;table cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot;&gt;&lt;tr&gt;&lt;td width=&quot;18&quot;&gt;&lt;a href=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$dirlink</span><span class="pl-k">.</span>url_encode(<span class="pl-smi">$file</span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;&lt;img src=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>SCRIPT_NAME<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>?p=thumb&amp;amp;file=<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-c1">base64_encode</span>(<span class="pl-smi">$directory</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$file</span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot; border=&quot;0&quot; alt=&quot;&quot;&gt;&lt;/a&gt;&lt;/td&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L117" class="blob-num js-line-number" data-line-number="117"></td>
        <td id="LC117" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 		 	 	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td align=&quot;left&quot;&gt;&lt;a href=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$dirlink</span><span class="pl-k">.</span>url_encode(<span class="pl-smi">$file</span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$file</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/a&gt;&lt;/table&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L118" class="blob-num js-line-number" data-line-number="118"></td>
        <td id="LC118" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 		 	 	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td nowrap&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-c1">date</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>F jS Y<span class="pl-pds">&#39;</span></span>,<span class="pl-smi">$stats</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>9<span class="pl-pds">&#39;</span></span>])<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td nowrap&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span>getsize(<span class="pl-smi">$stats</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>7<span class="pl-pds">&#39;</span></span>]); </span></td>
      </tr>
      <tr>
        <td id="L119" class="blob-num js-line-number" data-line-number="119"></td>
        <td id="LC119" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 	} <span class="pl-k">else</span> {</span></td>
      </tr>
      <tr>
        <td id="L120" class="blob-num js-line-number" data-line-number="120"></td>
        <td id="LC120" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 		<span class="pl-smi">$filec</span>[] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td width=&quot;100%&quot;&gt;&lt;table cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot;&gt;&lt;tr&gt;&lt;td width=&quot;18&quot;&gt;&lt;a href=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$dirlink</span><span class="pl-k">.</span>url_encode(<span class="pl-smi">$file</span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;&lt;img src=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>SCRIPT_NAME<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>?p=mime&amp;amp;type=<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span>getmime(<span class="pl-smi">$directory</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$file</span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot; border=&quot;0&quot; alt=&quot;&quot;&gt;&lt;/a&gt;&lt;/td&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L121" class="blob-num js-line-number" data-line-number="121"></td>
        <td id="LC121" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 		 	 	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td align=&quot;left&quot;&gt;&lt;a href=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$dirlink</span><span class="pl-k">.</span>url_encode(<span class="pl-smi">$file</span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$file</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/a&gt;&lt;/table&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L122" class="blob-num js-line-number" data-line-number="122"></td>
        <td id="LC122" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 		 	 	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td nowrap&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-c1">date</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>F jS Y<span class="pl-pds">&#39;</span></span>,<span class="pl-smi">$stats</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>9<span class="pl-pds">&#39;</span></span>])<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td nowrap&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span>getsize(<span class="pl-smi">$stats</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>7<span class="pl-pds">&#39;</span></span>]); </span></td>
      </tr>
      <tr>
        <td id="L123" class="blob-num js-line-number" data-line-number="123"></td>
        <td id="LC123" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 	}</span></td>
      </tr>
      <tr>
        <td id="L124" class="blob-num js-line-number" data-line-number="124"></td>
        <td id="LC124" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L125" class="blob-num js-line-number" data-line-number="125"></td>
        <td id="LC125" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L126" class="blob-num js-line-number" data-line-number="126"></td>
        <td id="LC126" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L127" class="blob-num js-line-number" data-line-number="127"></td>
        <td id="LC127" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	pagehead(<span class="pl-smi">$directory</span>);</span></td>
      </tr>
      <tr>
        <td id="L128" class="blob-num js-line-number" data-line-number="128"></td>
        <td id="LC128" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L129" class="blob-num js-line-number" data-line-number="129"></td>
        <td id="LC129" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$dirdis</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>.<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$directory</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L130" class="blob-num js-line-number" data-line-number="130"></td>
        <td id="LC130" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c1">echo</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;tr&gt;&lt;td colspan=&quot;3&quot; nowrap&gt;&lt;b&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>STRINGS<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>CURRENT_DIRECTORY<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>: <span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L131" class="blob-num js-line-number" data-line-number="131"></td>
        <td id="LC131" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">while</span>(<span class="pl-smi">$basepos</span> <span class="pl-k">=</span> <span class="pl-c1">strpos</span>(<span class="pl-smi">$dirdis</span>,<span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span>)) {</span></td>
      </tr>
      <tr>
        <td id="L132" class="blob-num js-line-number" data-line-number="132"></td>
        <td id="LC132" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> (<span class="pl-smi">$dirlist</span>[<span class="pl-smi">$t</span><span class="pl-k">-</span><span class="pl-c1">1</span>] <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>) <span class="pl-smi">$dirlist</span>[<span class="pl-smi">$t</span>] <span class="pl-k">=</span> <span class="pl-c1">substr</span>(<span class="pl-smi">$dirdis</span>,<span class="pl-c1">0</span>,<span class="pl-smi">$basepos</span>); </span></td>
      </tr>
      <tr>
        <td id="L133" class="blob-num js-line-number" data-line-number="133"></td>
        <td id="LC133" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">else</span> <span class="pl-smi">$dirlist</span>[<span class="pl-smi">$t</span>] <span class="pl-k">=</span> <span class="pl-smi">$dirlist</span>[<span class="pl-smi">$t</span><span class="pl-k">-</span><span class="pl-c1">1</span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-c1">substr</span>(<span class="pl-smi">$dirdis</span>,<span class="pl-c1">0</span>,<span class="pl-smi">$basepos</span>); </span></td>
      </tr>
      <tr>
        <td id="L134" class="blob-num js-line-number" data-line-number="134"></td>
        <td id="LC134" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">echo</span> <span class="pl-s"><span class="pl-pds">&#39;</span>/&lt;a href=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>SCRIPT_NAME<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>?dir=<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$dirlist</span>[<span class="pl-smi">$t</span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-c1">substr</span>(<span class="pl-smi">$dirdis</span>,<span class="pl-c1">0</span>,<span class="pl-smi">$basepos</span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/a&gt;<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L135" class="blob-num js-line-number" data-line-number="135"></td>
        <td id="LC135" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$dirdis</span> <span class="pl-k">=</span> <span class="pl-c1">substr</span>(<span class="pl-smi">$dirdis</span>,<span class="pl-smi">$basepos</span><span class="pl-k">+</span><span class="pl-c1">1</span>,<span class="pl-c1">strlen</span>(<span class="pl-smi">$dirdis</span>));</span></td>
      </tr>
      <tr>
        <td id="L136" class="blob-num js-line-number" data-line-number="136"></td>
        <td id="LC136" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$t</span><span class="pl-k">++</span>;</span></td>
      </tr>
      <tr>
        <td id="L137" class="blob-num js-line-number" data-line-number="137"></td>
        <td id="LC137" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L138" class="blob-num js-line-number" data-line-number="138"></td>
        <td id="LC138" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L139" class="blob-num js-line-number" data-line-number="139"></td>
        <td id="LC139" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c1">echo</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/b&gt;&lt;tr class=&quot;head&quot;&gt;&lt;td width=&quot;100%&quot; bgcolor=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TB_COLOR_4<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>STRINGS<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>FILE_NAME<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td nowrap bgcolor=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TB_COLOR_4<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>STRINGS<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>FILE_MODIFIED<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td nowrap bgcolor=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TB_COLOR_4<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>STRINGS<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>FILE_SIZE<span class="pl-pds">&#39;</span></span>];</span></td>
      </tr>
      <tr>
        <td id="L140" class="blob-num js-line-number" data-line-number="140"></td>
        <td id="LC140" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-smi">$dirc</span>) {</span></td>
      </tr>
      <tr>
        <td id="L141" class="blob-num js-line-number" data-line-number="141"></td>
        <td id="LC141" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">asort</span>(<span class="pl-smi">$dirc</span>);</span></td>
      </tr>
      <tr>
        <td id="L142" class="blob-num js-line-number" data-line-number="142"></td>
        <td id="LC142" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">foreach</span> (<span class="pl-smi">$dirc</span> <span class="pl-k">as</span> <span class="pl-smi">$dir</span>) {</span></td>
      </tr>
      <tr>
        <td id="L143" class="blob-num js-line-number" data-line-number="143"></td>
        <td id="LC143" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$tcoloring</span>	<span class="pl-k">=</span> (<span class="pl-smi">$a</span> <span class="pl-k">%</span> <span class="pl-c1">2</span>) ? <span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TB_COLOR_2<span class="pl-pds">&#39;</span></span>] : <span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TB_COLOR_3<span class="pl-pds">&#39;</span></span>]; </span></td>
      </tr>
      <tr>
        <td id="L144" class="blob-num js-line-number" data-line-number="144"></td>
        <td id="LC144" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-c1">echo</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;tr bgcolor=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$tcoloring</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$dir</span>;</span></td>
      </tr>
      <tr>
        <td id="L145" class="blob-num js-line-number" data-line-number="145"></td>
        <td id="LC145" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$a</span><span class="pl-k">++</span>;</span></td>
      </tr>
      <tr>
        <td id="L146" class="blob-num js-line-number" data-line-number="146"></td>
        <td id="LC146" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L147" class="blob-num js-line-number" data-line-number="147"></td>
        <td id="LC147" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L148" class="blob-num js-line-number" data-line-number="148"></td>
        <td id="LC148" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-smi">$filec</span>) {</span></td>
      </tr>
      <tr>
        <td id="L149" class="blob-num js-line-number" data-line-number="149"></td>
        <td id="LC149" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">asort</span>(<span class="pl-smi">$filec</span>);</span></td>
      </tr>
      <tr>
        <td id="L150" class="blob-num js-line-number" data-line-number="150"></td>
        <td id="LC150" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">foreach</span> (<span class="pl-smi">$filec</span> <span class="pl-k">as</span> <span class="pl-smi">$file</span>) {</span></td>
      </tr>
      <tr>
        <td id="L151" class="blob-num js-line-number" data-line-number="151"></td>
        <td id="LC151" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$tcoloring</span>	<span class="pl-k">=</span> (<span class="pl-smi">$a</span> <span class="pl-k">%</span> <span class="pl-c1">2</span>) ? <span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TB_COLOR_2<span class="pl-pds">&#39;</span></span>] : <span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TB_COLOR_3<span class="pl-pds">&#39;</span></span>]; </span></td>
      </tr>
      <tr>
        <td id="L152" class="blob-num js-line-number" data-line-number="152"></td>
        <td id="LC152" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-c1">echo</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;tr bgcolor=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$tcoloring</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$file</span>;</span></td>
      </tr>
      <tr>
        <td id="L153" class="blob-num js-line-number" data-line-number="153"></td>
        <td id="LC153" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$a</span><span class="pl-k">++</span>;</span></td>
      </tr>
      <tr>
        <td id="L154" class="blob-num js-line-number" data-line-number="154"></td>
        <td id="LC154" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L155" class="blob-num js-line-number" data-line-number="155"></td>
        <td id="LC155" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L156" class="blob-num js-line-number" data-line-number="156"></td>
        <td id="LC156" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L157" class="blob-num js-line-number" data-line-number="157"></td>
        <td id="LC157" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$dir</span> <span class="pl-k">=</span> <span class="pl-smi">$directory</span>;</span></td>
      </tr>
      <tr>
        <td id="L158" class="blob-num js-line-number" data-line-number="158"></td>
        <td id="LC158" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-smi">$dir</span>) <span class="pl-smi">$dir</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>./<span class="pl-pds">&#39;</span></span>; <span class="pl-k">else</span> <span class="pl-smi">$dir</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>.<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$directory</span>;</span></td>
      </tr>
      <tr>
        <td id="L159" class="blob-num js-line-number" data-line-number="159"></td>
        <td id="LC159" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$count</span> <span class="pl-k">=</span> countdir(<span class="pl-smi">$dir</span>);</span></td>
      </tr>
      <tr>
        <td id="L160" class="blob-num js-line-number" data-line-number="160"></td>
        <td id="LC160" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L161" class="blob-num js-line-number" data-line-number="161"></td>
        <td id="LC161" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c1">echo</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;tr bgcolor=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TB_COLOR_4<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;&lt;td&gt;<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L162" class="blob-num js-line-number" data-line-number="162"></td>
        <td id="LC162" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L163" class="blob-num js-line-number" data-line-number="163"></td>
        <td id="LC163" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>ENABLE_LINE_COUNT<span class="pl-pds">&#39;</span></span>]) </span></td>
      </tr>
      <tr>
        <td id="L164" class="blob-num js-line-number" data-line-number="164"></td>
        <td id="LC164" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">printf</span>(<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>STRINGS<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>SUMMARY_CODE<span class="pl-pds">&#39;</span></span>], <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;b&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-c1">number_format</span>(<span class="pl-smi">$count</span>[<span class="pl-c1">1</span>])<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/b&gt;<span class="pl-pds">&#39;</span></span>, <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;b&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-c1">number_format</span>(<span class="pl-smi">$count</span>[<span class="pl-c1">2</span>])<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/b&gt;<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;b&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-c1">number_format</span>(<span class="pl-smi">$count</span>[<span class="pl-c1">3</span>])<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/b&gt;<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L165" class="blob-num js-line-number" data-line-number="165"></td>
        <td id="LC165" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">else</span></span></td>
      </tr>
      <tr>
        <td id="L166" class="blob-num js-line-number" data-line-number="166"></td>
        <td id="LC166" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">printf</span>(<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>STRINGS<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>SUMMARY_NOCODE<span class="pl-pds">&#39;</span></span>], <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;b&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-c1">number_format</span>(<span class="pl-smi">$count</span>[<span class="pl-c1">1</span>])<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/b&gt;<span class="pl-pds">&#39;</span></span>, <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;b&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-c1">number_format</span>(<span class="pl-smi">$count</span>[<span class="pl-c1">2</span>])<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/b&gt;<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;b&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-c1">number_format</span>(<span class="pl-smi">$count</span>[<span class="pl-c1">3</span>])<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/b&gt;<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L167" class="blob-num js-line-number" data-line-number="167"></td>
        <td id="LC167" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L168" class="blob-num js-line-number" data-line-number="168"></td>
        <td id="LC168" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c1">echo</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td&gt; &lt;td nowrap&gt;&lt;b&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span>getsize(<span class="pl-smi">$count</span>[<span class="pl-c1">0</span>])<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/b&gt;<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L169" class="blob-num js-line-number" data-line-number="169"></td>
        <td id="LC169" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	pagefoot();</span></td>
      </tr>
      <tr>
        <td id="L170" class="blob-num js-line-number" data-line-number="170"></td>
        <td id="LC170" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L171" class="blob-num js-line-number" data-line-number="171"></td>
        <td id="LC171" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L172" class="blob-num js-line-number" data-line-number="172"></td>
        <td id="LC172" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L173" class="blob-num js-line-number" data-line-number="173"></td>
        <td id="LC173" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L174" class="blob-num js-line-number" data-line-number="174"></td>
        <td id="LC174" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">function</span> <span class="pl-en">getsize</span>(<span class="pl-smi">$size</span>) {</span></td>
      </tr>
      <tr>
        <td id="L175" class="blob-num js-line-number" data-line-number="175"></td>
        <td id="LC175" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-smi">$size</span> <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-c1">0</span>) { </span></td>
      </tr>
      <tr>
        <td id="L176" class="blob-num js-line-number" data-line-number="176"></td>
        <td id="LC176" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> (<span class="pl-smi">$size</span><span class="pl-k">&gt;=</span><span class="pl-c1">1099511627776</span>) <span class="pl-smi">$size</span> <span class="pl-k">=</span> <span class="pl-c1">round</span>(<span class="pl-smi">$size</span> <span class="pl-k">/</span> <span class="pl-c1">1024</span> <span class="pl-k">/</span> <span class="pl-c1">1024</span> <span class="pl-k">/</span> <span class="pl-c1">1024</span> <span class="pl-k">/</span> <span class="pl-c1">1024</span>, <span class="pl-c1">2</span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span> TB<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L177" class="blob-num js-line-number" data-line-number="177"></td>
        <td id="LC177" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">elseif</span> (<span class="pl-smi">$size</span><span class="pl-k">&gt;=</span><span class="pl-c1">1073741824</span>) <span class="pl-smi">$size</span> <span class="pl-k">=</span> <span class="pl-c1">round</span>(<span class="pl-smi">$size</span> <span class="pl-k">/</span> <span class="pl-c1">1024</span> <span class="pl-k">/</span> <span class="pl-c1">1024</span> <span class="pl-k">/</span> <span class="pl-c1">1024</span>, <span class="pl-c1">2</span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span> GB<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L178" class="blob-num js-line-number" data-line-number="178"></td>
        <td id="LC178" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">elseif</span> (<span class="pl-smi">$size</span><span class="pl-k">&gt;=</span><span class="pl-c1">1048576</span>) <span class="pl-smi">$size</span> <span class="pl-k">=</span> <span class="pl-c1">round</span>(<span class="pl-smi">$size</span> <span class="pl-k">/</span> <span class="pl-c1">1024</span> <span class="pl-k">/</span> <span class="pl-c1">1024</span>, <span class="pl-c1">2</span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span> MB<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L179" class="blob-num js-line-number" data-line-number="179"></td>
        <td id="LC179" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">elseif</span> (<span class="pl-smi">$size</span><span class="pl-k">&gt;=</span><span class="pl-c1">1024</span>) <span class="pl-smi">$size</span> <span class="pl-k">=</span> <span class="pl-c1">round</span>(<span class="pl-smi">$size</span> <span class="pl-k">/</span> <span class="pl-c1">1024</span>, <span class="pl-c1">2</span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span> KB<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L180" class="blob-num js-line-number" data-line-number="180"></td>
        <td id="LC180" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">elseif</span> (<span class="pl-smi">$size</span><span class="pl-k">&lt;</span><span class="pl-c1">1024</span>) <span class="pl-smi">$size</span> <span class="pl-k">=</span> <span class="pl-c1">round</span>(<span class="pl-smi">$size</span> <span class="pl-k">/</span> <span class="pl-c1">1024</span>, <span class="pl-c1">2</span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span> Bytes<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L181" class="blob-num js-line-number" data-line-number="181"></td>
        <td id="LC181" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L182" class="blob-num js-line-number" data-line-number="182"></td>
        <td id="LC182" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">return</span> <span class="pl-smi">$size</span>;</span></td>
      </tr>
      <tr>
        <td id="L183" class="blob-num js-line-number" data-line-number="183"></td>
        <td id="LC183" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L184" class="blob-num js-line-number" data-line-number="184"></td>
        <td id="LC184" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L185" class="blob-num js-line-number" data-line-number="185"></td>
        <td id="LC185" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L186" class="blob-num js-line-number" data-line-number="186"></td>
        <td id="LC186" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">function</span> <span class="pl-en">countdir</span>(<span class="pl-smi">$dir</span>, <span class="pl-smi">$level_count</span> <span class="pl-k">=</span> <span class="pl-c1">0</span>) {</span></td>
      </tr>
      <tr>
        <td id="L187" class="blob-num js-line-number" data-line-number="187"></td>
        <td id="LC187" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">global</span> <span class="pl-smi">$totallines</span>, <span class="pl-smi">$totalfiles</span>, <span class="pl-smi">$totaldirs</span>, <span class="pl-smi">$totalbytes</span>;</span></td>
      </tr>
      <tr>
        <td id="L188" class="blob-num js-line-number" data-line-number="188"></td>
        <td id="LC188" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-k">@</span>(<span class="pl-smi">$thisdir</span> <span class="pl-k">=</span> <span class="pl-c1">opendir</span>(<span class="pl-smi">$dir</span>))) <span class="pl-k">return</span>;</span></td>
      </tr>
      <tr>
        <td id="L189" class="blob-num js-line-number" data-line-number="189"></td>
        <td id="LC189" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">while</span> (<span class="pl-smi">$item</span> <span class="pl-k">=</span> <span class="pl-c1">readdir</span>(<span class="pl-smi">$thisdir</span>)) <span class="pl-k">if</span> (<span class="pl-c1">is_dir</span>(<span class="pl-smi">$dir</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$item</span>) <span class="pl-k">&amp;&amp;</span> (<span class="pl-c1">substr</span>(<span class="pl-smi">$item</span>, <span class="pl-c1">0</span>, <span class="pl-c1">1</span>) <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>.<span class="pl-pds">&#39;</span></span>) <span class="pl-k">&amp;&amp;</span> <span class="pl-k">!</span><span class="pl-c1">in_array</span>(<span class="pl-smi">$dir</span><span class="pl-k">.</span><span class="pl-smi">$item</span>,<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>IGNORE_DIRS<span class="pl-pds">&#39;</span></span>])) countdir(<span class="pl-smi">$dir</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$item</span>, <span class="pl-smi">$level_count</span> <span class="pl-k">+</span> <span class="pl-c1">1</span>);</span></td>
      </tr>
      <tr>
        <td id="L190" class="blob-num js-line-number" data-line-number="190"></td>
        <td id="LC190" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-smi">$level_count</span> <span class="pl-k">&gt;=</span> <span class="pl-c1">0</span>) {</span></td>
      </tr>
      <tr>
        <td id="L191" class="blob-num js-line-number" data-line-number="191"></td>
        <td id="LC191" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$dir</span> <span class="pl-k">=</span> <span class="pl-c1">ereg_replace</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>[/][/]<span class="pl-pds">&#39;</span></span>, <span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span>, <span class="pl-smi">$dir</span>);</span></td>
      </tr>
      <tr>
        <td id="L192" class="blob-num js-line-number" data-line-number="192"></td>
        <td id="LC192" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$handle</span><span class="pl-k">=</span><span class="pl-c1">opendir</span>(<span class="pl-smi">$dir</span>);</span></td>
      </tr>
      <tr>
        <td id="L193" class="blob-num js-line-number" data-line-number="193"></td>
        <td id="LC193" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">while</span> (<span class="pl-smi">$file</span> <span class="pl-k">=</span> <span class="pl-c1">readdir</span>(<span class="pl-smi">$handle</span>)) {</span></td>
      </tr>
      <tr>
        <td id="L194" class="blob-num js-line-number" data-line-number="194"></td>
        <td id="LC194" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 	<span class="pl-k">if</span> (<span class="pl-smi">$file</span> <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>.<span class="pl-pds">&#39;</span></span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">$file</span> <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>..<span class="pl-pds">&#39;</span></span> <span class="pl-k">&amp;&amp;</span> <span class="pl-k">!</span><span class="pl-c1">is_dir</span>(<span class="pl-smi">$file</span>)) { </span></td>
      </tr>
      <tr>
        <td id="L195" class="blob-num js-line-number" data-line-number="195"></td>
        <td id="LC195" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 	 	<span class="pl-smi">$totalfiles</span><span class="pl-k">++</span>;</span></td>
      </tr>
      <tr>
        <td id="L196" class="blob-num js-line-number" data-line-number="196"></td>
        <td id="LC196" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 	 	<span class="pl-k">if</span> (<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>ENABLE_LINE_COUNT<span class="pl-pds">&#39;</span></span>]) {</span></td>
      </tr>
      <tr>
        <td id="L197" class="blob-num js-line-number" data-line-number="197"></td>
        <td id="LC197" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			 	 	<span class="pl-k">if</span>(iscodetype(<span class="pl-smi">$file</span>)) {</span></td>
      </tr>
      <tr>
        <td id="L198" class="blob-num js-line-number" data-line-number="198"></td>
        <td id="LC198" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			 	 		<span class="pl-smi">$lines</span> <span class="pl-k">=</span> <span class="pl-c1">file</span>(<span class="pl-smi">$dir</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$file</span>);</span></td>
      </tr>
      <tr>
        <td id="L199" class="blob-num js-line-number" data-line-number="199"></td>
        <td id="LC199" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			 	 		<span class="pl-smi">$linecount</span> <span class="pl-k">=</span> <span class="pl-c1">0</span>;</span></td>
      </tr>
      <tr>
        <td id="L200" class="blob-num js-line-number" data-line-number="200"></td>
        <td id="LC200" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			 	 		<span class="pl-k">foreach</span> (<span class="pl-smi">$lines</span> <span class="pl-k">as</span> <span class="pl-smi">$line</span>) <span class="pl-k">if</span> (<span class="pl-c1">substr</span>(<span class="pl-c1">eregi_replace</span>(<span class="pl-s"><span class="pl-pds">&#39;</span> <span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>,<span class="pl-smi">$line</span>),<span class="pl-c1">0</span>,<span class="pl-c1">2</span>) <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>//<span class="pl-pds">&#39;</span></span><span class="pl-k">|</span><span class="pl-s"><span class="pl-pds">&#39;</span>/*<span class="pl-pds">&#39;</span></span>) <span class="pl-smi">$linecount</span><span class="pl-k">++</span>; </span></td>
      </tr>
      <tr>
        <td id="L201" class="blob-num js-line-number" data-line-number="201"></td>
        <td id="LC201" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			 	 		<span class="pl-smi">$totallines</span> <span class="pl-k">=</span> <span class="pl-smi">$totallines</span> <span class="pl-k">+</span> <span class="pl-smi">$linecount</span>;</span></td>
      </tr>
      <tr>
        <td id="L202" class="blob-num js-line-number" data-line-number="202"></td>
        <td id="LC202" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			 	 		<span class="pl-smi">$totalbytes</span> <span class="pl-k">=</span> <span class="pl-smi">$totalbytes</span> <span class="pl-k">+</span> <span class="pl-c1">filesize</span>(<span class="pl-smi">$dir</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$file</span>);</span></td>
      </tr>
      <tr>
        <td id="L203" class="blob-num js-line-number" data-line-number="203"></td>
        <td id="LC203" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			 	 	}</span></td>
      </tr>
      <tr>
        <td id="L204" class="blob-num js-line-number" data-line-number="204"></td>
        <td id="LC204" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 	 	}</span></td>
      </tr>
      <tr>
        <td id="L205" class="blob-num js-line-number" data-line-number="205"></td>
        <td id="LC205" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		 	}</span></td>
      </tr>
      <tr>
        <td id="L206" class="blob-num js-line-number" data-line-number="206"></td>
        <td id="LC206" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L207" class="blob-num js-line-number" data-line-number="207"></td>
        <td id="LC207" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$totaldirs</span><span class="pl-k">++</span>;</span></td>
      </tr>
      <tr>
        <td id="L208" class="blob-num js-line-number" data-line-number="208"></td>
        <td id="LC208" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L209" class="blob-num js-line-number" data-line-number="209"></td>
        <td id="LC209" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">return</span> <span class="pl-k">array</span> (<span class="pl-c1">intval</span>(<span class="pl-smi">$totalbytes</span>), <span class="pl-c1">intval</span>(<span class="pl-smi">$totallines</span>), <span class="pl-c1">intval</span>(<span class="pl-smi">$totalfiles</span>), <span class="pl-c1">intval</span>(<span class="pl-smi">$totaldirs</span>));</span></td>
      </tr>
      <tr>
        <td id="L210" class="blob-num js-line-number" data-line-number="210"></td>
        <td id="LC210" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L211" class="blob-num js-line-number" data-line-number="211"></td>
        <td id="LC211" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L212" class="blob-num js-line-number" data-line-number="212"></td>
        <td id="LC212" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L213" class="blob-num js-line-number" data-line-number="213"></td>
        <td id="LC213" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">function</span> <span class="pl-en">pagehead</span>(<span class="pl-smi">$stitle</span>) {</span></td>
      </tr>
      <tr>
        <td id="L214" class="blob-num js-line-number" data-line-number="214"></td>
        <td id="LC214" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-smi">$stitle</span>) <span class="pl-smi">$dtitle</span> <span class="pl-k">=</span> <span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>PAGE_TITLE<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&quot;</span> : <span class="pl-pds">&quot;</span></span><span class="pl-k">.</span><span class="pl-smi">$stitle</span>;</span></td>
      </tr>
      <tr>
        <td id="L215" class="blob-num js-line-number" data-line-number="215"></td>
        <td id="LC215" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">else</span> <span class="pl-smi">$dtitle</span> <span class="pl-k">=</span> <span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>PAGE_TITLE<span class="pl-pds">&#39;</span></span>];</span></td>
      </tr>
      <tr>
        <td id="L216" class="blob-num js-line-number" data-line-number="216"></td>
        <td id="LC216" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c1">echo</span> 	<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;!DOCTYPE HTML PUBLIC &quot;-//W3C//DTD HTML 4.01 Transitional//EN&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L217" class="blob-num js-line-number" data-line-number="217"></td>
        <td id="LC217" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;html lang=&quot;en&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L218" class="blob-num js-line-number" data-line-number="218"></td>
        <td id="LC218" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;head&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L219" class="blob-num js-line-number" data-line-number="219"></td>
        <td id="LC219" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;title&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$dtitle</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/title&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L220" class="blob-num js-line-number" data-line-number="220"></td>
        <td id="LC220" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html;charset=utf-8&quot; &gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L221" class="blob-num js-line-number" data-line-number="221"></td>
        <td id="LC221" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;link rel=&quot;shortcut icon&quot; href=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>SCRIPT_NAME<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>?p=favicon&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L222" class="blob-num js-line-number" data-line-number="222"></td>
        <td id="LC222" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;style type=&quot;text/css&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L223" class="blob-num js-line-number" data-line-number="223"></td>
        <td id="LC223" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>td { font-size : 80%;font-family : tahoma;color: <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TXT_COLOR_1<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>;}<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L224" class="blob-num js-line-number" data-line-number="224"></td>
        <td id="LC224" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>A:visited {color: <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TXT_COLOR_2<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>;font-weight: bold;text-decoration: underline;}<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L225" class="blob-num js-line-number" data-line-number="225"></td>
        <td id="LC225" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>A:hover {color: <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TXT_COLOR_1<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>;font-weight: bold;text-decoration: underline;}<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L226" class="blob-num js-line-number" data-line-number="226"></td>
        <td id="LC226" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>A:link {color: <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TXT_COLOR_2<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>;font-weight: bold;text-decoration: underline;}<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L227" class="blob-num js-line-number" data-line-number="227"></td>
        <td id="LC227" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>A:active {color: #a6a6a6;font-weight: bold;text-decoration: underline;}<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L228" class="blob-num js-line-number" data-line-number="228"></td>
        <td id="LC228" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>textarea {border: 1px solid <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TXT_COLOR_2<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span> ;color: black;background-color: white;}<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L229" class="blob-num js-line-number" data-line-number="229"></td>
        <td id="LC229" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>input.button{border: 1px solid <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TXT_COLOR_2<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>;color: black;background-color: white;}<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L230" class="blob-num js-line-number" data-line-number="230"></td>
        <td id="LC230" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>input.text{border: 1px solid <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TXT_COLOR_2<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>;color: black;background-color: white;}<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L231" class="blob-num js-line-number" data-line-number="231"></td>
        <td id="LC231" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>BODY {color: <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TXT_COLOR_1<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>; FONT-SIZE: 10pt; FONT-FAMILY: arial,verdana,helvetica; scrollbar-base-color: <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>BG_COLOR_2<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>; MARGIN: 0px 0px 10px; BACKGROUND-COLOR: <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>BG_COLOR_1<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>}<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L232" class="blob-num js-line-number" data-line-number="232"></td>
        <td id="LC232" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>.title {COLOR: <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TXT_COLOR_1<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>; font: 13.5pt arial; FONT-WEIGHT: bold;}<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L233" class="blob-num js-line-number" data-line-number="233"></td>
        <td id="LC233" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>.code {font-size: 10pt;}<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L234" class="blob-num js-line-number" data-line-number="234"></td>
        <td id="LC234" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>.head {COLOR: <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TXT_COLOR_1<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>; font-size: 11pt; FONT-WEIGHT: bold;}<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L235" class="blob-num js-line-number" data-line-number="235"></td>
        <td id="LC235" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>.copyright {FONT-SIZE: 8pt; FONT-FAMILY: arial,verdana,helvetica; COLOR: #FFFFFF}<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L236" class="blob-num js-line-number" data-line-number="236"></td>
        <td id="LC236" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>.content {text-decoration: none; color: black; font: 10pt arial;}<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L237" class="blob-num js-line-number" data-line-number="237"></td>
        <td id="LC237" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/style&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L238" class="blob-num js-line-number" data-line-number="238"></td>
        <td id="LC238" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/head&gt;&lt;body&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L239" class="blob-num js-line-number" data-line-number="239"></td>
        <td id="LC239" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;table cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; align=&quot;center&quot;&gt;&lt;tr&gt;&lt;td&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L240" class="blob-num js-line-number" data-line-number="240"></td>
        <td id="LC240" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;table cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; bgcolor=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>BG_COLOR_2<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;&lt;tr&gt;&lt;td&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L241" class="blob-num js-line-number" data-line-number="241"></td>
        <td id="LC241" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;table width=&quot;100%&quot; border=&quot;0&quot; cellpadding=&quot;2&quot; cellspacing=&quot;0&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L242" class="blob-num js-line-number" data-line-number="242"></td>
        <td id="LC242" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;tr&gt;&lt;td align=&quot;left&quot; width=&quot;700&quot; bgcolor=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TB_COLOR_4<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;&lt;img src=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>BG_IMAGE<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot; alt=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$pagetitle</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt; <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$pagetitle</span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L243" class="blob-num js-line-number" data-line-number="243"></td>
        <td id="LC243" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L244" class="blob-num js-line-number" data-line-number="244"></td>
        <td id="LC244" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;tr&gt;&lt;td&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L245" class="blob-num js-line-number" data-line-number="245"></td>
        <td id="LC245" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;table cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; width=&quot;100%&quot;&gt;&lt;tr&gt;&lt;td width=&quot;100%&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L246" class="blob-num js-line-number" data-line-number="246"></td>
        <td id="LC246" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;table width=&quot;100%&quot;&gt;<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L247" class="blob-num js-line-number" data-line-number="247"></td>
        <td id="LC247" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L248" class="blob-num js-line-number" data-line-number="248"></td>
        <td id="LC248" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L249" class="blob-num js-line-number" data-line-number="249"></td>
        <td id="LC249" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L250" class="blob-num js-line-number" data-line-number="250"></td>
        <td id="LC250" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* All I ask is that if you use my script you keep my footer on here */</span></span></td>
      </tr>
      <tr>
        <td id="L251" class="blob-num js-line-number" data-line-number="251"></td>
        <td id="LC251" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">function</span> <span class="pl-en">pagefoot</span>() {</span></td>
      </tr>
      <tr>
        <td id="L252" class="blob-num js-line-number" data-line-number="252"></td>
        <td id="LC252" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c1">echo</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/table&gt;&lt;/table&gt;&lt;/table&gt;&lt;/table&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span> </span></td>
      </tr>
      <tr>
        <td id="L253" class="blob-num js-line-number" data-line-number="253"></td>
        <td id="LC253" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;table width=&quot;100%&quot;&gt;&lt;tr&gt;&lt;td align=&quot;right&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span> </span></td>
      </tr>
      <tr>
        <td id="L254" class="blob-num js-line-number" data-line-number="254"></td>
        <td id="LC254" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;font class=&quot;copyright&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L255" class="blob-num js-line-number" data-line-number="255"></td>
        <td id="LC255" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>PHP Power Browse &amp;copy; 2004-<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-c1">date</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>Y<span class="pl-pds">&#39;</span></span>)<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span> &lt;a href=&quot;http://devin.la&quot;&gt;devin.la&lt;/a&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span></span></td>
      </tr>
      <tr>
        <td id="L256" class="blob-num js-line-number" data-line-number="256"></td>
        <td id="LC256" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	 		<span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/font&gt;&lt;/table&gt;&lt;/table&gt;<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L257" class="blob-num js-line-number" data-line-number="257"></td>
        <td id="LC257" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">exit</span>;</span></td>
      </tr>
      <tr>
        <td id="L258" class="blob-num js-line-number" data-line-number="258"></td>
        <td id="LC258" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L259" class="blob-num js-line-number" data-line-number="259"></td>
        <td id="LC259" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L260" class="blob-num js-line-number" data-line-number="260"></td>
        <td id="LC260" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L261" class="blob-num js-line-number" data-line-number="261"></td>
        <td id="LC261" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* display source of file */</span></span></td>
      </tr>
      <tr>
        <td id="L262" class="blob-num js-line-number" data-line-number="262"></td>
        <td id="LC262" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">function</span> <span class="pl-en">showsource</span>(<span class="pl-smi">$file</span>) {</span></td>
      </tr>
      <tr>
        <td id="L263" class="blob-num js-line-number" data-line-number="263"></td>
        <td id="LC263" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-c1">file_exists</span>(<span class="pl-smi">$file</span>) <span class="pl-k">&amp;&amp;</span> <span class="pl-k">!</span><span class="pl-c1">is_dir</span>(<span class="pl-smi">$file</span>) <span class="pl-k">&amp;&amp;</span> <span class="pl-k">!</span>(<span class="pl-c1">is_array</span>(<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>DENY_SOURCE<span class="pl-pds">&#39;</span></span>]) <span class="pl-k">&amp;&amp;</span> <span class="pl-c1">in_array</span>(<span class="pl-smi">$file</span>,<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>DENY_SOURCE<span class="pl-pds">&#39;</span></span>]))) {</span></td>
      </tr>
      <tr>
        <td id="L264" class="blob-num js-line-number" data-line-number="264"></td>
        <td id="LC264" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		pagehead(<span class="pl-smi">$file</span>);</span></td>
      </tr>
      <tr>
        <td id="L265" class="blob-num js-line-number" data-line-number="265"></td>
        <td id="LC265" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$content</span> <span class="pl-k">=</span> <span class="pl-c1">highlight_file</span>(<span class="pl-smi">$file</span>, <span class="pl-c1">1</span>);</span></td>
      </tr>
      <tr>
        <td id="L266" class="blob-num js-line-number" data-line-number="266"></td>
        <td id="LC266" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$linecount</span> <span class="pl-k">=</span> <span class="pl-c1">substr_count</span>(<span class="pl-smi">$content</span>, <span class="pl-s"><span class="pl-pds">&quot;</span>&lt;br /&gt;<span class="pl-pds">&quot;</span></span>) <span class="pl-k">+</span> <span class="pl-c1">1</span>;</span></td>
      </tr>
      <tr>
        <td id="L267" class="blob-num js-line-number" data-line-number="267"></td>
        <td id="LC267" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$size</span> <span class="pl-k">=</span> <span class="pl-c1">number_format</span>(<span class="pl-c1">filesize</span>(<span class="pl-smi">$file</span>), <span class="pl-c1">0</span>, <span class="pl-s"><span class="pl-pds">&#39;</span> <span class="pl-pds">&#39;</span></span>, <span class="pl-s"><span class="pl-pds">&#39;</span> <span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L268" class="blob-num js-line-number" data-line-number="268"></td>
        <td id="LC268" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$date</span> <span class="pl-k">=</span> <span class="pl-c1">date</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>F d Y H:i:s.<span class="pl-pds">&#39;</span></span>, <span class="pl-c1">filemtime</span>(<span class="pl-smi">$file</span>));</span></td>
      </tr>
      <tr>
        <td id="L269" class="blob-num js-line-number" data-line-number="269"></td>
        <td id="LC269" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L270" class="blob-num js-line-number" data-line-number="270"></td>
        <td id="LC270" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">echo</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;tr&gt;&lt;td bgcolor=<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>BG_COLOR_3<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&gt;&lt;b&gt;<span class="pl-pds">&#39;</span></span></span></td>
      </tr>
      <tr>
        <td id="L271" class="blob-num js-line-number" data-line-number="271"></td>
        <td id="LC271" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">.</span><span class="pl-c1">sprintf</span>(<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>STRINGS<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>SOURCE_SUMMARY<span class="pl-pds">&#39;</span></span>],<span class="pl-c1">basename</span>(<span class="pl-smi">$file</span>),<span class="pl-smi">$linecount</span>, <span class="pl-smi">$size</span>, <span class="pl-smi">$date</span>)</span></td>
      </tr>
      <tr>
        <td id="L272" class="blob-num js-line-number" data-line-number="272"></td>
        <td id="LC272" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/b&gt;&lt;/font&gt;&lt;table cellspacing=&quot;0&quot; width=&quot;100%&quot; border=&quot;0&quot; cellpadding=&quot;2&quot; class=&quot;code&quot;&gt;&lt;tr valign=&quot;top&quot;&gt;&lt;td bgcolor=&quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>TB_COLOR_3<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot; width=&quot;0&quot; align=&quot;right&quot;&gt;&lt;code&gt;<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L273" class="blob-num js-line-number" data-line-number="273"></td>
        <td id="LC273" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">for</span>(<span class="pl-smi">$i</span><span class="pl-k">=</span><span class="pl-c1">1</span>; <span class="pl-smi">$i</span><span class="pl-k">&lt;=</span><span class="pl-smi">$linecount</span>; <span class="pl-smi">$i</span><span class="pl-k">++</span>) <span class="pl-c1">echo</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;a name=<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$i</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&gt;&lt;/a&gt;&lt;a href=&quot;#<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$i</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$i</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/a&gt;&lt;br&gt;<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L274" class="blob-num js-line-number" data-line-number="274"></td>
        <td id="LC274" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">echo</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;td nowrap width=&quot;100%&quot;&gt;<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L275" class="blob-num js-line-number" data-line-number="275"></td>
        <td id="LC275" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">print_r</span> (<span class="pl-smi">$content</span>);</span></td>
      </tr>
      <tr>
        <td id="L276" class="blob-num js-line-number" data-line-number="276"></td>
        <td id="LC276" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">echo</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/table&gt;<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L277" class="blob-num js-line-number" data-line-number="277"></td>
        <td id="LC277" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		pagefoot();</span></td>
      </tr>
      <tr>
        <td id="L278" class="blob-num js-line-number" data-line-number="278"></td>
        <td id="LC278" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	} <span class="pl-k">else</span> {</span></td>
      </tr>
      <tr>
        <td id="L279" class="blob-num js-line-number" data-line-number="279"></td>
        <td id="LC279" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-c1">file_exists</span>(<span class="pl-smi">$file</span>) <span class="pl-k">||</span> <span class="pl-c1">is_dir</span>(<span class="pl-smi">$file</span>)) <span class="pl-smi">$error</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>No such file named &quot;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$file</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&quot;.<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L280" class="blob-num js-line-number" data-line-number="280"></td>
        <td id="LC280" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		pagehead(<span class="pl-s"><span class="pl-pds">&quot;</span>Error<span class="pl-pds">&quot;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L281" class="blob-num js-line-number" data-line-number="281"></td>
        <td id="LC281" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">echo</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;font class=&quot;error&quot;&gt;&lt;b&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$error</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/b&gt;&lt;/font&gt;<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L282" class="blob-num js-line-number" data-line-number="282"></td>
        <td id="LC282" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		pagefoot();</span></td>
      </tr>
      <tr>
        <td id="L283" class="blob-num js-line-number" data-line-number="283"></td>
        <td id="LC283" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L284" class="blob-num js-line-number" data-line-number="284"></td>
        <td id="LC284" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L285" class="blob-num js-line-number" data-line-number="285"></td>
        <td id="LC285" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L286" class="blob-num js-line-number" data-line-number="286"></td>
        <td id="LC286" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L287" class="blob-num js-line-number" data-line-number="287"></td>
        <td id="LC287" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* displays a basic message */</span></span></td>
      </tr>
      <tr>
        <td id="L288" class="blob-num js-line-number" data-line-number="288"></td>
        <td id="LC288" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">function</span> <span class="pl-en">showmessage</span>(<span class="pl-smi">$title</span>,<span class="pl-smi">$message</span>) {</span></td>
      </tr>
      <tr>
        <td id="L289" class="blob-num js-line-number" data-line-number="289"></td>
        <td id="LC289" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	pagehead(<span class="pl-smi">$title</span>);</span></td>
      </tr>
      <tr>
        <td id="L290" class="blob-num js-line-number" data-line-number="290"></td>
        <td id="LC290" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c1">echo</span> <span class="pl-s"><span class="pl-pds">&#39;</span>&lt;tr&gt;&lt;td&gt;&lt;table cellpadding=&quot;3&quot; cellspacing=&quot;2&quot; align=&quot;center&quot; border=&quot;0&quot;&gt;&lt;tr&gt;&lt;td&gt;&lt;b&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$title</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;/b&gt;&lt;br /&gt;&lt;br /&gt;<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$message</span><span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>&lt;br /&gt;&lt;br /&gt;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/td&gt;&lt;/tr&gt;<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L291" class="blob-num js-line-number" data-line-number="291"></td>
        <td id="LC291" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	pagefoot();</span></td>
      </tr>
      <tr>
        <td id="L292" class="blob-num js-line-number" data-line-number="292"></td>
        <td id="LC292" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L293" class="blob-num js-line-number" data-line-number="293"></td>
        <td id="LC293" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L294" class="blob-num js-line-number" data-line-number="294"></td>
        <td id="LC294" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L295" class="blob-num js-line-number" data-line-number="295"></td>
        <td id="LC295" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L296" class="blob-num js-line-number" data-line-number="296"></td>
        <td id="LC296" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* determines if file is web type which is viewable in the source viewer */</span></span></td>
      </tr>
      <tr>
        <td id="L297" class="blob-num js-line-number" data-line-number="297"></td>
        <td id="LC297" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">function</span> <span class="pl-en">iscodetype</span>(<span class="pl-smi">$file</span>) {</span></td>
      </tr>
      <tr>
        <td id="L298" class="blob-num js-line-number" data-line-number="298"></td>
        <td id="LC298" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$ext</span> <span class="pl-k">=</span> <span class="pl-c1">pathinfo</span>(<span class="pl-smi">$file</span>);</span></td>
      </tr>
      <tr>
        <td id="L299" class="blob-num js-line-number" data-line-number="299"></td>
        <td id="LC299" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$ext</span> <span class="pl-k">=</span> <span class="pl-c1">strtolower</span>(<span class="pl-smi">$ext</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>extension<span class="pl-pds">&#39;</span></span>]);</span></td>
      </tr>
      <tr>
        <td id="L300" class="blob-num js-line-number" data-line-number="300"></td>
        <td id="LC300" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-c1">in_array</span>(<span class="pl-smi">$ext</span>,<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>CODE_FILES<span class="pl-pds">&#39;</span></span>])) <span class="pl-k">return</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L301" class="blob-num js-line-number" data-line-number="301"></td>
        <td id="LC301" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">else</span> <span class="pl-k">return</span> <span class="pl-c1">FALSE</span>;</span></td>
      </tr>
      <tr>
        <td id="L302" class="blob-num js-line-number" data-line-number="302"></td>
        <td id="LC302" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L303" class="blob-num js-line-number" data-line-number="303"></td>
        <td id="LC303" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L304" class="blob-num js-line-number" data-line-number="304"></td>
        <td id="LC304" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L305" class="blob-num js-line-number" data-line-number="305"></td>
        <td id="LC305" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* determines if tile is an img type which can display a thumbnail */</span></span></td>
      </tr>
      <tr>
        <td id="L306" class="blob-num js-line-number" data-line-number="306"></td>
        <td id="LC306" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">function</span> <span class="pl-en">isimgtype</span>(<span class="pl-smi">$file</span>) {</span></td>
      </tr>
      <tr>
        <td id="L307" class="blob-num js-line-number" data-line-number="307"></td>
        <td id="LC307" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$ext</span> <span class="pl-k">=</span> <span class="pl-c1">pathinfo</span>(<span class="pl-smi">$file</span>);</span></td>
      </tr>
      <tr>
        <td id="L308" class="blob-num js-line-number" data-line-number="308"></td>
        <td id="LC308" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$ext</span> <span class="pl-k">=</span> <span class="pl-c1">strtolower</span>(<span class="pl-smi">$ext</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>extension<span class="pl-pds">&#39;</span></span>]);</span></td>
      </tr>
      <tr>
        <td id="L309" class="blob-num js-line-number" data-line-number="309"></td>
        <td id="LC309" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-c1">in_array</span>(<span class="pl-smi">$ext</span>,<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>IMG_FILES<span class="pl-pds">&#39;</span></span>])) <span class="pl-k">return</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L310" class="blob-num js-line-number" data-line-number="310"></td>
        <td id="LC310" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">else</span> <span class="pl-k">return</span> <span class="pl-c1">FALSE</span>;</span></td>
      </tr>
      <tr>
        <td id="L311" class="blob-num js-line-number" data-line-number="311"></td>
        <td id="LC311" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L312" class="blob-num js-line-number" data-line-number="312"></td>
        <td id="LC312" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L313" class="blob-num js-line-number" data-line-number="313"></td>
        <td id="LC313" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L314" class="blob-num js-line-number" data-line-number="314"></td>
        <td id="LC314" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* determines if tile is an img type which can display a thumbnail */</span></span></td>
      </tr>
      <tr>
        <td id="L315" class="blob-num js-line-number" data-line-number="315"></td>
        <td id="LC315" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">function</span> <span class="pl-en">isprotecteddir</span>(<span class="pl-smi">$dir</span>) {</span></td>
      </tr>
      <tr>
        <td id="L316" class="blob-num js-line-number" data-line-number="316"></td>
        <td id="LC316" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-smi">$dir</span> <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span> <span class="pl-k">&amp;&amp;</span> <span class="pl-smi">$dir</span> <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span>) <span class="pl-smi">$dir</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>.<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$dir</span>;</span></td>
      </tr>
      <tr>
        <td id="L317" class="blob-num js-line-number" data-line-number="317"></td>
        <td id="LC317" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$dir</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>) <span class="pl-smi">$dir</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>./<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L318" class="blob-num js-line-number" data-line-number="318"></td>
        <td id="LC318" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-c1">in_array</span>(<span class="pl-smi">$dir</span>,<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>PROTECTED_DIRS<span class="pl-pds">&#39;</span></span>])) <span class="pl-k">return</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L319" class="blob-num js-line-number" data-line-number="319"></td>
        <td id="LC319" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">else</span> <span class="pl-k">return</span> <span class="pl-c1">FALSE</span>;</span></td>
      </tr>
      <tr>
        <td id="L320" class="blob-num js-line-number" data-line-number="320"></td>
        <td id="LC320" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L321" class="blob-num js-line-number" data-line-number="321"></td>
        <td id="LC321" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L322" class="blob-num js-line-number" data-line-number="322"></td>
        <td id="LC322" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L323" class="blob-num js-line-number" data-line-number="323"></td>
        <td id="LC323" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* make thumbnails from images */</span></span></td>
      </tr>
      <tr>
        <td id="L324" class="blob-num js-line-number" data-line-number="324"></td>
        <td id="LC324" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">function</span> <span class="pl-en">makethumb</span>(<span class="pl-smi">$image</span>,<span class="pl-smi">$h</span>,<span class="pl-smi">$w</span>) {</span></td>
      </tr>
      <tr>
        <td id="L325" class="blob-num js-line-number" data-line-number="325"></td>
        <td id="LC325" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L326" class="blob-num js-line-number" data-line-number="326"></td>
        <td id="LC326" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$image</span> <span class="pl-k">=</span> <span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>basedir<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$image</span>;</span></td>
      </tr>
      <tr>
        <td id="L327" class="blob-num js-line-number" data-line-number="327"></td>
        <td id="LC327" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L328" class="blob-num js-line-number" data-line-number="328"></td>
        <td id="LC328" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-c1">substr</span>(<span class="pl-smi">$image</span>,<span class="pl-c1">0</span>,<span class="pl-c1">1</span>) <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span>) <span class="pl-smi">$image</span> <span class="pl-k">=</span> <span class="pl-c1">substr</span>(<span class="pl-smi">$image</span>,<span class="pl-c1">1</span>);</span></td>
      </tr>
      <tr>
        <td id="L329" class="blob-num js-line-number" data-line-number="329"></td>
        <td id="LC329" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$imgname</span> <span class="pl-k">=</span> <span class="pl-smi">$image</span>;</span></td>
      </tr>
      <tr>
        <td id="L330" class="blob-num js-line-number" data-line-number="330"></td>
        <td id="LC330" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$img</span> <span class="pl-k">=</span> <span class="pl-smi">$image</span>;</span></td>
      </tr>
      <tr>
        <td id="L331" class="blob-num js-line-number" data-line-number="331"></td>
        <td id="LC331" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	</span></td>
      </tr>
      <tr>
        <td id="L332" class="blob-num js-line-number" data-line-number="332"></td>
        <td id="LC332" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$image</span> <span class="pl-k">=</span> <span class="pl-k">@</span><span class="pl-c1">imagecreatefromjpeg</span>(<span class="pl-smi">$img</span>);</span></td>
      </tr>
      <tr>
        <td id="L333" class="blob-num js-line-number" data-line-number="333"></td>
        <td id="LC333" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-smi">$image</span>) <span class="pl-smi">$image</span> <span class="pl-k">=</span> <span class="pl-k">@</span><span class="pl-c1">imagecreatefrompng</span>(<span class="pl-smi">$img</span>);</span></td>
      </tr>
      <tr>
        <td id="L334" class="blob-num js-line-number" data-line-number="334"></td>
        <td id="LC334" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-smi">$image</span>) <span class="pl-smi">$image</span> <span class="pl-k">=</span> <span class="pl-k">@</span><span class="pl-c1">imagecreatefromgif</span>(<span class="pl-smi">$img</span>);</span></td>
      </tr>
      <tr>
        <td id="L335" class="blob-num js-line-number" data-line-number="335"></td>
        <td id="LC335" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-smi">$image</span>) <span class="pl-smi">$error</span> <span class="pl-k">=</span> <span class="pl-c1">TRUE</span>;</span></td>
      </tr>
      <tr>
        <td id="L336" class="blob-num js-line-number" data-line-number="336"></td>
        <td id="LC336" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L337" class="blob-num js-line-number" data-line-number="337"></td>
        <td id="LC337" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-smi">$error</span>) {</span></td>
      </tr>
      <tr>
        <td id="L338" class="blob-num js-line-number" data-line-number="338"></td>
        <td id="LC338" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$imagedata</span> <span class="pl-k">=</span> <span class="pl-c1">getimagesize</span>(<span class="pl-smi">$img</span>); </span></td>
      </tr>
      <tr>
        <td id="L339" class="blob-num js-line-number" data-line-number="339"></td>
        <td id="LC339" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L340" class="blob-num js-line-number" data-line-number="340"></td>
        <td id="LC340" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> (<span class="pl-smi">$imagedata</span>[<span class="pl-c1">0</span>] <span class="pl-k">&gt;</span> <span class="pl-smi">$imagedata</span>[<span class="pl-c1">1</span>]) {</span></td>
      </tr>
      <tr>
        <td id="L341" class="blob-num js-line-number" data-line-number="341"></td>
        <td id="LC341" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$whold</span> <span class="pl-k">=</span> <span class="pl-smi">$w</span><span class="pl-k">/</span><span class="pl-smi">$imagedata</span>[<span class="pl-c1">0</span>];</span></td>
      </tr>
      <tr>
        <td id="L342" class="blob-num js-line-number" data-line-number="342"></td>
        <td id="LC342" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$wa</span> <span class="pl-k">=</span> <span class="pl-smi">$w</span>;</span></td>
      </tr>
      <tr>
        <td id="L343" class="blob-num js-line-number" data-line-number="343"></td>
        <td id="LC343" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$ha</span> <span class="pl-k">=</span> <span class="pl-smi">$imagedata</span>[<span class="pl-c1">1</span>]<span class="pl-k">*</span><span class="pl-smi">$whold</span>;</span></td>
      </tr>
      <tr>
        <td id="L344" class="blob-num js-line-number" data-line-number="344"></td>
        <td id="LC344" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		} <span class="pl-k">else</span> {</span></td>
      </tr>
      <tr>
        <td id="L345" class="blob-num js-line-number" data-line-number="345"></td>
        <td id="LC345" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$hhold</span> <span class="pl-k">=</span> <span class="pl-smi">$h</span><span class="pl-k">/</span><span class="pl-smi">$imagedata</span>[<span class="pl-c1">1</span>];</span></td>
      </tr>
      <tr>
        <td id="L346" class="blob-num js-line-number" data-line-number="346"></td>
        <td id="LC346" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$ha</span> <span class="pl-k">=</span> <span class="pl-smi">$h</span>;</span></td>
      </tr>
      <tr>
        <td id="L347" class="blob-num js-line-number" data-line-number="347"></td>
        <td id="LC347" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$wa</span> <span class="pl-k">=</span> <span class="pl-smi">$imagedata</span>[<span class="pl-c1">0</span>]<span class="pl-k">*</span><span class="pl-smi">$hhold</span>;</span></td>
      </tr>
      <tr>
        <td id="L348" class="blob-num js-line-number" data-line-number="348"></td>
        <td id="LC348" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		}</span></td>
      </tr>
      <tr>
        <td id="L349" class="blob-num js-line-number" data-line-number="349"></td>
        <td id="LC349" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L350" class="blob-num js-line-number" data-line-number="350"></td>
        <td id="LC350" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$thumb</span> <span class="pl-k">=</span> <span class="pl-k">@</span><span class="pl-c1">imagecreatetruecolor</span> (<span class="pl-smi">$wa</span>, <span class="pl-smi">$ha</span>);</span></td>
      </tr>
      <tr>
        <td id="L351" class="blob-num js-line-number" data-line-number="351"></td>
        <td id="LC351" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-smi">$thumb</span>) <span class="pl-smi">$thumb</span> <span class="pl-k">=</span> <span class="pl-k">@</span><span class="pl-c1">imagecreate</span> (<span class="pl-smi">$wa</span>, <span class="pl-smi">$ha</span>);</span></td>
      </tr>
      <tr>
        <td id="L352" class="blob-num js-line-number" data-line-number="352"></td>
        <td id="LC352" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">imagecopyresized</span> (<span class="pl-smi">$thumb</span>, <span class="pl-smi">$image</span>, <span class="pl-c1">0</span>, <span class="pl-c1">0</span>, <span class="pl-c1">0</span>, <span class="pl-c1">0</span>, <span class="pl-smi">$wa</span>, <span class="pl-smi">$ha</span>, <span class="pl-smi">$imagedata</span>[<span class="pl-c1">0</span>], <span class="pl-smi">$imagedata</span>[<span class="pl-c1">1</span>]);</span></td>
      </tr>
      <tr>
        <td id="L353" class="blob-num js-line-number" data-line-number="353"></td>
        <td id="LC353" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	} <span class="pl-k">else</span> {</span></td>
      </tr>
      <tr>
        <td id="L354" class="blob-num js-line-number" data-line-number="354"></td>
        <td id="LC354" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$thumb</span>	<span class="pl-k">=</span> <span class="pl-c1">imagecreate</span>(<span class="pl-smi">$w</span>, <span class="pl-smi">$h</span><span class="pl-k">/</span><span class="pl-c1">2</span>);</span></td>
      </tr>
      <tr>
        <td id="L355" class="blob-num js-line-number" data-line-number="355"></td>
        <td id="LC355" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$bgc</span> <span class="pl-k">=</span> <span class="pl-c1">imagecolorallocate</span>(<span class="pl-smi">$thumb</span>, <span class="pl-c1">255</span>, <span class="pl-c1">255</span>, <span class="pl-c1">255</span>);</span></td>
      </tr>
      <tr>
        <td id="L356" class="blob-num js-line-number" data-line-number="356"></td>
        <td id="LC356" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-smi">$tc</span>	<span class="pl-k">=</span> <span class="pl-c1">imagecolorallocate</span>(<span class="pl-smi">$thumb</span>, <span class="pl-c1">0</span>, <span class="pl-c1">0</span>, <span class="pl-c1">0</span>);</span></td>
      </tr>
      <tr>
        <td id="L357" class="blob-num js-line-number" data-line-number="357"></td>
        <td id="LC357" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">imagestring</span>(<span class="pl-smi">$thumb</span>, <span class="pl-c1">1</span>, <span class="pl-c1">5</span>, <span class="pl-c1">5</span>, <span class="pl-s"><span class="pl-pds">&quot;</span>Error loading<span class="pl-pds">&quot;</span></span>, <span class="pl-smi">$tc</span>);</span></td>
      </tr>
      <tr>
        <td id="L358" class="blob-num js-line-number" data-line-number="358"></td>
        <td id="LC358" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">imagestring</span>(<span class="pl-smi">$thumb</span>, <span class="pl-c1">1</span>, <span class="pl-c1">5</span>, <span class="pl-c1">20</span>, <span class="pl-s"><span class="pl-pds">&quot;</span>&#39;<span class="pl-smi">$imgname</span>&#39;<span class="pl-pds">&quot;</span></span>, <span class="pl-smi">$tc</span>);</span></td>
      </tr>
      <tr>
        <td id="L359" class="blob-num js-line-number" data-line-number="359"></td>
        <td id="LC359" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L360" class="blob-num js-line-number" data-line-number="360"></td>
        <td id="LC360" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-smi">$thumb</span>) {</span></td>
      </tr>
      <tr>
        <td id="L361" class="blob-num js-line-number" data-line-number="361"></td>
        <td id="LC361" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-c1">header</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>Location: <span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$_SERVER</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>SCRIPT_NAME<span class="pl-pds">&#39;</span></span>]<span class="pl-k">.</span><span class="pl-s"><span class="pl-pds">&#39;</span>?p=mime&amp;type=image<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L362" class="blob-num js-line-number" data-line-number="362"></td>
        <td id="LC362" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">die</span>();</span></td>
      </tr>
      <tr>
        <td id="L363" class="blob-num js-line-number" data-line-number="363"></td>
        <td id="LC363" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L364" class="blob-num js-line-number" data-line-number="364"></td>
        <td id="LC364" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c1">header</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>Content-type: image/jpeg<span class="pl-pds">&#39;</span></span>); </span></td>
      </tr>
      <tr>
        <td id="L365" class="blob-num js-line-number" data-line-number="365"></td>
        <td id="LC365" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c1">imagejpeg</span>(<span class="pl-smi">$thumb</span>); </span></td>
      </tr>
      <tr>
        <td id="L366" class="blob-num js-line-number" data-line-number="366"></td>
        <td id="LC366" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c1">imagedestroy</span>(<span class="pl-smi">$thumb</span>);</span></td>
      </tr>
      <tr>
        <td id="L367" class="blob-num js-line-number" data-line-number="367"></td>
        <td id="LC367" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L368" class="blob-num js-line-number" data-line-number="368"></td>
        <td id="LC368" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L369" class="blob-num js-line-number" data-line-number="369"></td>
        <td id="LC369" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L370" class="blob-num js-line-number" data-line-number="370"></td>
        <td id="LC370" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* return mime type */</span></span></td>
      </tr>
      <tr>
        <td id="L371" class="blob-num js-line-number" data-line-number="371"></td>
        <td id="LC371" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">function</span> <span class="pl-en">getmime</span>(<span class="pl-smi">$file</span>) {</span></td>
      </tr>
      <tr>
        <td id="L372" class="blob-num js-line-number" data-line-number="372"></td>
        <td id="LC372" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-c1">substr</span>(<span class="pl-smi">$file</span>,<span class="pl-c1">0</span>,<span class="pl-c1">1</span>) <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>/<span class="pl-pds">&#39;</span></span>) <span class="pl-smi">$file</span> <span class="pl-k">=</span> <span class="pl-c1">substr</span>(<span class="pl-smi">$file</span>,<span class="pl-c1">1</span>);</span></td>
      </tr>
      <tr>
        <td id="L373" class="blob-num js-line-number" data-line-number="373"></td>
        <td id="LC373" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L374" class="blob-num js-line-number" data-line-number="374"></td>
        <td id="LC374" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$ext</span> <span class="pl-k">=</span> <span class="pl-c1">pathinfo</span>(<span class="pl-smi">$file</span>);</span></td>
      </tr>
      <tr>
        <td id="L375" class="blob-num js-line-number" data-line-number="375"></td>
        <td id="LC375" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$ext</span> <span class="pl-k">=</span> <span class="pl-c1">strtolower</span>(<span class="pl-smi">$ext</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>extension<span class="pl-pds">&#39;</span></span>]);</span></td>
      </tr>
      <tr>
        <td id="L376" class="blob-num js-line-number" data-line-number="376"></td>
        <td id="LC376" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$mime</span> <span class="pl-k">=</span> <span class="pl-c1">escapeshellarg</span>(<span class="pl-smi">$file</span>);</span></td>
      </tr>
      <tr>
        <td id="L377" class="blob-num js-line-number" data-line-number="377"></td>
        <td id="LC377" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-smi">$mime</span> <span class="pl-k">=</span> <span class="pl-c1">trim</span>(<span class="pl-s"><span class="pl-pds">`</span>file -bi <span class="pl-smi">$mime</span><span class="pl-pds">`</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L378" class="blob-num js-line-number" data-line-number="378"></td>
        <td id="LC378" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-c1">strstr</span>(<span class="pl-smi">$mime</span>,<span class="pl-s"><span class="pl-pds">&#39;</span>,<span class="pl-pds">&#39;</span></span>))	<span class="pl-smi">$mime</span> <span class="pl-k">=</span> <span class="pl-c1">substr</span>(<span class="pl-smi">$mime</span>,<span class="pl-c1">0</span>,<span class="pl-c1">strpos</span>(<span class="pl-smi">$mime</span>,<span class="pl-s"><span class="pl-pds">&#39;</span>,<span class="pl-pds">&#39;</span></span>));</span></td>
      </tr>
      <tr>
        <td id="L379" class="blob-num js-line-number" data-line-number="379"></td>
        <td id="LC379" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L380" class="blob-num js-line-number" data-line-number="380"></td>
        <td id="LC380" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">if</span> (<span class="pl-c1">is_dir</span>(<span class="pl-smi">$file</span>)) 													<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>folder<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L381" class="blob-num js-line-number" data-line-number="381"></td>
        <td id="LC381" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-c1">preg_match</span>(<span class="pl-sr"><span class="pl-pds">&#39;/</span><span class="pl-k">^</span>application(.<span class="pl-k">*</span>?)compress|zip(.<span class="pl-k">*</span>?)<span class="pl-k">$</span><span class="pl-pds">/&#39;</span></span>,<span class="pl-smi">$mime</span>) <span class="pl-k">||</span> <span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>tar<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>rar<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>ace<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>z<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>gz<span class="pl-pds">&#39;</span></span>) <span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>archive<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L382" class="blob-num js-line-number" data-line-number="382"></td>
        <td id="LC382" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L383" class="blob-num js-line-number" data-line-number="383"></td>
        <td id="LC383" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>cs<span class="pl-pds">&#39;</span></span>) 												<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>cs<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L384" class="blob-num js-line-number" data-line-number="384"></td>
        <td id="LC384" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>cpp<span class="pl-pds">&#39;</span></span>) 												<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>cpp<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L385" class="blob-num js-line-number" data-line-number="385"></td>
        <td id="LC385" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$mime</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>text/x-c<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>c<span class="pl-pds">&#39;</span></span>) 						<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>c<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L386" class="blob-num js-line-number" data-line-number="386"></td>
        <td id="LC386" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L387" class="blob-num js-line-number" data-line-number="387"></td>
        <td id="LC387" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> ((<span class="pl-smi">$mime</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>application/octet-stream<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>rpm<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>exe<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>bin<span class="pl-pds">&#39;</span></span>) <span class="pl-k">&amp;&amp;</span> (<span class="pl-c1">preg_match</span>(<span class="pl-sr"><span class="pl-pds">&#39;/</span><span class="pl-k">^</span>(.<span class="pl-k">*</span>?)setup(.<span class="pl-k">*</span>?)<span class="pl-k">$</span><span class="pl-pds">/&#39;</span></span>,<span class="pl-smi">$file</span>) <span class="pl-k">||</span> <span class="pl-c1">preg_match</span>(<span class="pl-sr"><span class="pl-pds">&#39;/</span><span class="pl-k">^</span>(.<span class="pl-k">*</span>?)install(.<span class="pl-k">*</span>?)<span class="pl-k">$</span><span class="pl-pds">/&#39;</span></span>,<span class="pl-smi">$file</span>))) <span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>setup<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L388" class="blob-num js-line-number" data-line-number="388"></td>
        <td id="LC388" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$mime</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>application/inf<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>inf<span class="pl-pds">&#39;</span></span>) 				<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>inf<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L389" class="blob-num js-line-number" data-line-number="389"></td>
        <td id="LC389" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>php<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>phtml<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>php3<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>php4<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>php5<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-c1">preg_match</span>(<span class="pl-sr"><span class="pl-pds">&#39;/</span><span class="pl-k">^</span>application(.<span class="pl-k">*</span>?)php(.<span class="pl-k">*</span>?)<span class="pl-k">$</span><span class="pl-pds">/&#39;</span></span>,<span class="pl-smi">$mime</span>)) <span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>php<span class="pl-pds">&#39;</span></span>;	<span class="pl-k">elseif</span> (<span class="pl-smi">$mime</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>text/html<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>html<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>htm<span class="pl-pds">&#39;</span></span>) <span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>html<span class="pl-pds">&#39;</span></span>; </span></td>
      </tr>
      <tr>
        <td id="L390" class="blob-num js-line-number" data-line-number="390"></td>
        <td id="LC390" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-c1">preg_match</span>(<span class="pl-sr"><span class="pl-pds">&#39;/</span><span class="pl-k">^</span>application(.<span class="pl-k">*</span>?)shockwave|flash(.<span class="pl-k">*</span>?)<span class="pl-k">$</span><span class="pl-pds">/&#39;</span></span>,<span class="pl-smi">$mime</span>) <span class="pl-k">||</span> <span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>swf<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>fla<span class="pl-pds">&#39;</span></span>) <span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>swf<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L391" class="blob-num js-line-number" data-line-number="391"></td>
        <td id="LC391" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L392" class="blob-num js-line-number" data-line-number="392"></td>
        <td id="LC392" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>csv<span class="pl-pds">&#39;</span></span>) 												<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>csv<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L393" class="blob-num js-line-number" data-line-number="393"></td>
        <td id="LC393" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>rpm<span class="pl-pds">&#39;</span></span>) 												<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>rpm<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L394" class="blob-num js-line-number" data-line-number="394"></td>
        <td id="LC394" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>deb<span class="pl-pds">&#39;</span></span>) 												<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>deb<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L395" class="blob-num js-line-number" data-line-number="395"></td>
        <td id="LC395" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>mk<span class="pl-pds">&#39;</span></span>) 												<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>makefile<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L396" class="blob-num js-line-number" data-line-number="396"></td>
        <td id="LC396" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>sln<span class="pl-pds">&#39;</span></span>) 												<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>sln<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L397" class="blob-num js-line-number" data-line-number="397"></td>
        <td id="LC397" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>suo<span class="pl-pds">&#39;</span></span>) 												<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>suo<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L398" class="blob-num js-line-number" data-line-number="398"></td>
        <td id="LC398" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>res<span class="pl-pds">&#39;</span></span>) 												<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>res<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L399" class="blob-num js-line-number" data-line-number="399"></td>
        <td id="LC399" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>resx<span class="pl-pds">&#39;</span></span>) 											<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>resx<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L400" class="blob-num js-line-number" data-line-number="400"></td>
        <td id="LC400" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>csproj<span class="pl-pds">&#39;</span></span>) 											<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>csproj<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L401" class="blob-num js-line-number" data-line-number="401"></td>
        <td id="LC401" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>ai<span class="pl-pds">&#39;</span></span>) 												<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>ai<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L402" class="blob-num js-line-number" data-line-number="402"></td>
        <td id="LC402" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>mysql<span class="pl-pds">&#39;</span></span>) 											<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>mysql<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L403" class="blob-num js-line-number" data-line-number="403"></td>
        <td id="LC403" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$ext</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>ico<span class="pl-pds">&#39;</span></span>) 												<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>ico<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L404" class="blob-num js-line-number" data-line-number="404"></td>
        <td id="LC404" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L405" class="blob-num js-line-number" data-line-number="405"></td>
        <td id="LC405" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$mime</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>text/x-h<span class="pl-pds">&#39;</span></span>) 										<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>h<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L406" class="blob-num js-line-number" data-line-number="406"></td>
        <td id="LC406" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$mime</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>application/msword<span class="pl-pds">&#39;</span></span>) 								<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>msword<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L407" class="blob-num js-line-number" data-line-number="407"></td>
        <td id="LC407" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$mime</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>application/x-javascript<span class="pl-pds">&#39;</span></span>) 						<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>javascript<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L408" class="blob-num js-line-number" data-line-number="408"></td>
        <td id="LC408" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$mime</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>application/xml<span class="pl-pds">&#39;</span></span> <span class="pl-k">||</span> <span class="pl-smi">$mime</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>text/xml<span class="pl-pds">&#39;</span></span>) 			<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>xml<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L409" class="blob-num js-line-number" data-line-number="409"></td>
        <td id="LC409" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$mime</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>application/postscript<span class="pl-pds">&#39;</span></span>) 							<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>postscript<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L410" class="blob-num js-line-number" data-line-number="410"></td>
        <td id="LC410" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$mime</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>application/pdf<span class="pl-pds">&#39;</span></span>) 								<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>pdf<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L411" class="blob-num js-line-number" data-line-number="411"></td>
        <td id="LC411" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$mime</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>application/octet-stream<span class="pl-pds">&#39;</span></span>)						<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>exe<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L412" class="blob-num js-line-number" data-line-number="412"></td>
        <td id="LC412" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-smi">$mime</span> <span class="pl-k">==</span> <span class="pl-s"><span class="pl-pds">&#39;</span>text/asp<span class="pl-pds">&#39;</span></span>) 										<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>asp<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L413" class="blob-num js-line-number" data-line-number="413"></td>
        <td id="LC413" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L414" class="blob-num js-line-number" data-line-number="414"></td>
        <td id="LC414" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-c1">preg_match</span>(<span class="pl-sr"><span class="pl-pds">&#39;/</span><span class="pl-k">^</span>application(.<span class="pl-k">*</span>?)powerpoint(.<span class="pl-k">*</span>?)<span class="pl-k">$</span><span class="pl-pds">/&#39;</span></span>,<span class="pl-smi">$mime</span>))	<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>powerpoint<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L415" class="blob-num js-line-number" data-line-number="415"></td>
        <td id="LC415" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-c1">preg_match</span>(<span class="pl-sr"><span class="pl-pds">&#39;/</span><span class="pl-k">^</span>application(.<span class="pl-k">*</span>?)cert(.<span class="pl-k">*</span>?)<span class="pl-k">$</span><span class="pl-pds">/&#39;</span></span>,<span class="pl-smi">$mime</span>)) 			<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>crt<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L416" class="blob-num js-line-number" data-line-number="416"></td>
        <td id="LC416" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-c1">preg_match</span>(<span class="pl-sr"><span class="pl-pds">&#39;/</span><span class="pl-k">^</span>(.<span class="pl-k">*</span>?)readme(.<span class="pl-k">*</span>?)<span class="pl-k">$</span><span class="pl-pds">/&#39;</span></span>,<span class="pl-smi">$file</span>)) 					<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>readme<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L417" class="blob-num js-line-number" data-line-number="417"></td>
        <td id="LC417" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-c1">preg_match</span>(<span class="pl-sr"><span class="pl-pds">&#39;/</span><span class="pl-k">^</span>application(.<span class="pl-k">*</span>?)java(.<span class="pl-k">*</span>?)<span class="pl-k">$</span><span class="pl-pds">/&#39;</span></span>,<span class="pl-smi">$mime</span>)) 			<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>java<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L418" class="blob-num js-line-number" data-line-number="418"></td>
        <td id="LC418" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-c1">preg_match</span>(<span class="pl-sr"><span class="pl-pds">&#39;/</span><span class="pl-k">^</span>application(.<span class="pl-k">*</span>?)excel<span class="pl-k">$</span><span class="pl-pds">/&#39;</span></span>,<span class="pl-smi">$mime</span>)) 				<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>excel<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L419" class="blob-num js-line-number" data-line-number="419"></td>
        <td id="LC419" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-c1">preg_match</span>(<span class="pl-sr"><span class="pl-pds">&#39;/</span><span class="pl-k">^</span>application(.<span class="pl-k">*</span>?)binary<span class="pl-k">$</span><span class="pl-pds">/&#39;</span></span>,<span class="pl-smi">$mime</span>)) 			<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>binary<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L420" class="blob-num js-line-number" data-line-number="420"></td>
        <td id="LC420" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-c1">strstr</span>(<span class="pl-smi">$mime</span>,<span class="pl-s"><span class="pl-pds">&#39;</span>text/<span class="pl-pds">&#39;</span></span>)) 										<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>text<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L421" class="blob-num js-line-number" data-line-number="421"></td>
        <td id="LC421" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-c1">strstr</span>(<span class="pl-smi">$mime</span>,<span class="pl-s"><span class="pl-pds">&#39;</span>image/<span class="pl-pds">&#39;</span></span>)) 									<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>image<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L422" class="blob-num js-line-number" data-line-number="422"></td>
        <td id="LC422" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-c1">strstr</span>(<span class="pl-smi">$mime</span>,<span class="pl-s"><span class="pl-pds">&#39;</span>video/<span class="pl-pds">&#39;</span></span>)) 									<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>video<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L423" class="blob-num js-line-number" data-line-number="423"></td>
        <td id="LC423" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">elseif</span> (<span class="pl-c1">strstr</span>(<span class="pl-smi">$mime</span>,<span class="pl-s"><span class="pl-pds">&#39;</span>audio/<span class="pl-pds">&#39;</span></span>)) 									<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>audio<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L424" class="blob-num js-line-number" data-line-number="424"></td>
        <td id="LC424" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">else</span> 																<span class="pl-smi">$type</span> <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>unknown<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L425" class="blob-num js-line-number" data-line-number="425"></td>
        <td id="LC425" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">return</span> <span class="pl-smi">$type</span>;</span></td>
      </tr>
      <tr>
        <td id="L426" class="blob-num js-line-number" data-line-number="426"></td>
        <td id="LC426" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L427" class="blob-num js-line-number" data-line-number="427"></td>
        <td id="LC427" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L428" class="blob-num js-line-number" data-line-number="428"></td>
        <td id="LC428" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L429" class="blob-num js-line-number" data-line-number="429"></td>
        <td id="LC429" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* display stored image */</span></span></td>
      </tr>
      <tr>
        <td id="L430" class="blob-num js-line-number" data-line-number="430"></td>
        <td id="LC430" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">function</span> <span class="pl-en">getmimefile</span>(<span class="pl-smi">$file</span>) {</span></td>
      </tr>
      <tr>
        <td id="L431" class="blob-num js-line-number" data-line-number="431"></td>
        <td id="LC431" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">switch</span> (<span class="pl-smi">$file</span>) {</span></td>
      </tr>
      <tr>
        <td id="L432" class="blob-num js-line-number" data-line-number="432"></td>
        <td id="LC432" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>logo<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L433" class="blob-num js-line-number" data-line-number="433"></td>
        <td id="LC433" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			$img[&#39;data&#39;] = &#39;/9j/4AAQSkZJRgABAgAAZABkAAD/7AARRHVja3kAAQAEAAAAUAAA/+4ADkFkb2JlAGTAAAAAAf/bAIQAAgICAgICAgICAgMCAgIDBAMCAgMEBQQEBAQEBQYFBQUFBQUGBgcHCAcHBgkJCgoJCQwMDAwMDAwMDAwMDAwMDAEDAwMFBAUJBgYJDQsJCw0PDg4ODg8PDAwMDAwPDwwMDAwMDA8MDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwM/8AAEQgALgFNAwERAAIRAQMRAf/EAI8AAQACAgMBAQAAAAAAAAAAAAAHCAYJAgQFAwEBAQADAQEAAAAAAAAAAAAAAAABAgMEBRAAAQQCAgIBAwMEAwEBAAAAAgEDBAUGBwAREggTITEUIiMJQVFSFWEyFjM0EQEAAgEBBgQDBwUAAAAAAAAAAQIRAyExQWESBIGRIhNRcQWhscHRQlIU8DJicjP/2gAMAwEAAhEDEQA/AN/nAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcD5vPMx2XZEh0GGGAJx99wkEAAU7IiJekRERO1VeIjIj6BtPELh2yKkkybupposmXaZRCjOO1LSRUVXGwndI085+lf0sqfXX6uvpzot2t646tkzw4+X5o6oRomwNqZBrkdsYYxi79O9BctoWEzI8tya9CZ8yIFs25YNBIUA/+f4xCJ/p8y/7c6fY0aavtX6s5xnZjPyxu8VczjKWdb5zXbKwfHM4qmDiw8gjK7+I4SETLrZky+0pJ0heDoEPfSd9d9J9ucncaE6OpNJ4LROYyzfmKVcNt57sTEs81dUVZVULEsvySurJMkUJ+xeEpDIyGzF1tGmgIXFFFBSP+vYLz1ux7bR1dHUtbM2rWZ5bpxzlle0xMfBY/nktTgOA4Gs23317aVPuNj3qm9kOpkh5Th7mZVWwEw29NwYzf5TasO1y5WCefyxDHySR149F132CBlFz7XbO0Rv8A1vpP2TocZssb3XJKFq7cWFsza2KU5H2oyQ7KosJM82S+SQyhuNyzEPkBfqimrYbCuA4DgOA4DgOBHW002aOH2ErUtxjNRl1eLstlMrqplrXy22mHVSL4wrKtcYJx34/3vNxAFCT4iUkUQoj6eb89rvbTT07arGU6mwN+NezqOPjx4Ve2QuFDZYdF05SZdFUENX/FURoukTvte+kCR9Pe2GXzfYXIPVHfeGVWI7YrqtLrEslxuU6/RZJAFpHDcjMyU/IjH4CZo2Zn0gOCpdgiuBezgOA4DgOA4DgOA4EMbb3DF1u/iWL0tMWabR2PMdga8wJmQMVZhxw+WXMlySBxI0OG1+4+94Gop0IA44QAQYbnG4M10j/5rIdwVlNP1faJCrsv2FjoSY44xay3UZB2fElOPq5WuOmDf5IOCTRKnyM+BKYBZcDBwBcbJDbNEIDFe0VF+qKip90XgR3snP2cCrqEhaYft8tvIeOY61KcJmMkycpeDkhwRNRbAQIl6TtekFOlLtOjt9D3Zn4REzPyhEzhHOXbKz7VOQ4YmdjQ5HhOZ2rNF/vKaHKrJVbOkIZNfMxImThebJBX6iQKnRL19kXo0u209etujMWrGcTMTmPKMKzMxvSY5s3FIWQuYxeSX8YtSfVmtW4YOHGsPoqosKWafA930v6RPz/uKc5v415r1V2xy24+cb1spA5gk4DgOBiebzMxgYzZSsCp4F9lLQitbWWUhY0dxfJPLs0T6qifVBUgRf8AJOa6MUm8RqTMV5InPBBVBHwvNLeNWbYyK0usyIhca15lcdKavRwFFU/EqQcOLMQV66JXpXX+fO7UnU0650oiK/urtnxtvjyqrGJ3rLnBhHBKsKK0tcbCxigoCI18Kj4fH4InXj4/Tr+3PN6pzniuhnK6NjBtcx9YaqpWoVhkYyqfF68nHXGIQzFcdmTpDjhOH8bAuG4qr32ag2n/AGROdmlf3dX3dWdkbZ543R4qzGIxCFNr0OWaP1Vr6gwLNHKzH6yZEpZsJqOjMuXKlHIlPyinC4pNiZov7YAip2vZr9uen9Ptp93r3nUpm2JnfsiIxGMfj9jLUzWIxLINw0myteUy7ZpNm3NpZUkhh3I8YkkKUrsd54G1CNCBERsRU0RfJTPx7LzQk7WnYamh3FvYtpxETun9Wec/1HIvFqx1ZfDels7fy/Wi8qRbYeusnrZ1YEns2wKSUR1pHPDxVRRSTvrpf7cn6bT247ituFZifDJqTnpdvLxy3We19Uzw2Hf5LB2BbHVZDRWboLBEnPibQ4sZoQbZEVd7FERSTx+pl2vddD2+57fUjorWaRmJjf4zxTbNbRt3uGUWGzx9hcfwpnYKsUt/UzbGDGjQxjtwWCSS2gk38jiSXmwa7Fx1fHzXy+NETxWdGuh/DtqdG2JiN+/d5RyjhxRM268Zfkh7MtM7dwapkZtdZvguzH3K9Y1/I/KkxJvYCJA6gigp5OAqIIiKipJ49ohcRGl3nbXtFIrem307ImDbS0bcxK3fPCbtRG78gvMa/le0paUGDW2w5gaQebdxyjkVkacrRz79CdaK3m18UvBevISfBeu1HtU8VDMdo6F3b7eexeksv2NrstKaN0FYO3UCqubSrsshv7A34slRJmllz4sdk1iMtqhSFIRRxU7UxQQkWJsa39jPbHbejI+VXeK6n9fqWt/9PExmxk0tlf5Da/uIjtrBNicxFiNoYfHHdbU3P1GZAiDwMJYzvN/XL3Iw310yDOMgzzRfsVRzZGAPZJZSrG8xu6jI8T8Ru5ecWc9HcQREFdeNwFcb8THwIjDydG1d7rD3j3noTO9m7FzPG8zwaJk+jkyTMMgnBEqnXVZtorPzTSFZAPL4tSO1fbbZVRcEjPsMX9XMpn4P75730vkez9hZ5i9rTOztEyMsyi5tq8Wq2Yse9gsMTpb7b70aW09HR5wVcFIjyeSeZeQS45nI6I0n7Me2bd1lWVRHrK4TWuIZLlF3c08eHCnpTV5R4s6U+LLdhPbWUqh+oWXRbbVsE8ECNNhY97M5Rq+syfU+IewdX7CtswLarzaxzXEWsUsJJkDklmXjjeXu1gxDbcNGhCv8x6b81Louwxb3P2H7g4bgfqxmTmdsayss4ybFcY2HqGoZbYcXIXhckyjdyGHKlGUR02FbVlhERAX9RO8C9OttJbE1tle2cyyz2FynbVPntawcXDb5kG4dNPZBxZTtaLTqtMMOqfQMNsh4CifIbxp58DXn/FDb7ug+rs1nX2vcHyehXN7YisshzGyopiSFjQvNtIkTGLdtQREFUP5+17X9CddqHp6qddgfySWt37czY2NewNtjgQdAY7jzZv4g/TOsPMK9FtHyGU5JNAlN/G/HZHy+TpSI22wDIMjsvZ6x/kKTQ9p7DzWMJyvXVlkNcuOV7dMNFWzJTzSBGiGcxuVOaSN8bcqSR+HyK6IIoI0oZtlN9tPQ0n1n9NI29b/Ps/3Vk1u7kG7LdkTvYGKQyKW9HjlMcnIspxtVYakOEfh4kQgP7aAHP22mZx6W02F+w2rM9zLIsLqMggU249XZfkVplEOzq5xGP5cJ27ky3oUoHOhT4HW21Ug7DxEhMPM9nVs9a+xPqfvev2lsIdF7Ty6NQ7Ew1jLr6PQjOso/nRTBhtSxbaYI+3H2EQWTRrxJshccRQxf23vZWk/cP1uzENpbIZ1Zll/FY3Pg0bLr5uhrpFo88xRzXWEnfG1HfejyDKMAIyYRHB8OiUSC7ErGEzX2oOzi5Tl9dTanxWBJyGirsouYlHZ3VzIeWCzKqGpQw3PwosM3TT40Rz8lr5fkQUQQpVrbeuObQzLcmBbO3plWi/bemyu9p8Gpp93NqcfhxmnjCiGBSvGVJPAmlbVxJTD0h/yIwJRJohCw+8tw7D1bi/q3qCJCvbPaG6Ho9Jk0mkkVjl8DFNVtyboq+TbyWK/8t1xRbR597xFDNwPJxA4EV29J7XYxuXVWXaG1nuCvwSRZBC3phG0s6x/IauTVOPN9zKz8nLLqTFktAbpKjHgK+LaICihAQd714yCRtz+Qr2/zSyL8mJo+kpNb4Yw52SQmJTzz874078UJ6XAdJS68ul8e+u+wvxtzD6/YOrNj4NaMNyIGXYza1MhtxEVOpcRxpCTv7KKkhIqfVFRFT6pwKh/xkbSttqen+vJV9JObc4Q9MxCXNcVSJ1qrNEheSqqqqjEcZBVVfqo9/wBeBdfK8KxfOIcCvyunauIlXYMWle04RgrUuMqq06JNkBdp2qKnfSoqoqKiqnNdLWvpTM1nGYx4ImMoi2FisrbmeYrjTjfw4NrO2j5BlU5foUy2BpShV7H9URtp75Hy/wAXAEf1d+PV2+rHb6drfqtGI5Rxn8vkiYzKdrOrrLqDJq7mui21ZMHwl101kH2HR/xNpxCEk/4VOcVbTWcxOJWVclzGsalyaz18yG0yWwhuqEjAWQW7xqO5+lVacnyHmhrvv2oNSv09qqRy6656cR1xnuIiI/d/bby/V5eKm7ctDUOWb1VWvXUViDcOxmjtIcZ1XmWpCgiug26QgpiJdoiqKd88y8REz07l3o8qHAcDxMgxvH8rrHqbJqaHe1cj6uQZzIPN+SfYhQ0XxIfuhJ0qL9UVF5fT1Lac5rOJRMZY1jODScSsV/1WXXErF1ZIG8TtXf8AYBHPtPBY0x/uUAin08DcMeuvHx65pqa8akbax1fGNnnG4iMPNs8oto+28ZxdrXdlPqZdJMee2S2ZJBgK4XmcRwEBQUnCitfc0L6j4io+S8tXSrOjNuuM5j08Z5/bKM7UUe3hOBrjHTaa+Z0Mtr1aZ8kHzJGJXQ+S/RO1+nfPR+hf97f6z+DPX3eLI9k2Nvs3EJGv8bxm8rrfJzYjXU62rpEOJVRgebckG5JeEWZC+IqIpHNzyX699ffLtKV7bU929qzFd2JiZtPDZvjxwm89UYhgu64UqHf6Mp8exXJLuu1zdV822l19RNlNMwopRkFEeaZUHD8G1XxBV666XpedH0+0TTWte1Ym8TEZmI2znmrqb4xwffeNhOt830tOpMTyi5h4nds3F9KiUVkQMRnSiuj9Vjp5GgIqkA9kKookgl9OR9OrFNLVi1qxNoxHqjft5mpOZjY6udXqwfZvWN3GqbC1juYe867DjRzSaDDqze3PxXEB1SBF7Jvx+T7ogqSePLdtp9XY6lZmI9fhw47vHcWn1x8kg29XN2lsbArViosqvDtdPP2j9law3652dYOC2kdmPGlg0/4tKPkZk2iL9hX+vOXTvHbaN6zMTe+zETE4jjmY2bfmtMdUx8IWC55bVpuzHO7ud/JLrjd8PS+3peo8X1y7hdrmzeucrQAmOlZyvlGIVYks2hOWDSqLPffaiignkobi4z4So7EpoXBaktg62LzZsuIJohIhtOiJgXS/USRFT7KiLwNZFlr3YXrD7pZ37BUeEX2xtF+wVXFhbDaxWE9bXON3Ub4QZlrVxUcly4xkBESsNkoI6aqP7YI4EiPa7tvYT2y1RveTjF1jGqtBUFm3ir+S18imsb3IblFaMm6me0zNYjRGfE/kkNtETvSABCJFwPO919Z7Sfzz1p3tojHzvNoa7y08anMNtuG2tFkzJRJD8340VEjxT6IiL9IIZGX0ReBg3uD65Z/S0HrFsH1zjS5+19EX0bHIs9ph1+RIqMiBIFhOloz5GSA8aPPEv0EHH3DXry7C1O5vXOs2J6rZH610E5KiE5iMLHsVnyOyFl6nFg64n+kVVH5YrfyKid9d9fXga7dG+x/8hGs6il9d8s9NLnYmWYq03j2O7UkSpNZSJGjJ8MZ+wsRhyYUoWgQe3G5LRGA/XtxVJQzD3/rdiycI9X8ArsKz3cOeYLndBnOxchxfFbu1rvjhtSQmOBKYjOMIrj7pK1GF1TbbQUJBFQUg2L5rtyjptXu55HxjOL6LcR5Eelxusw7IpF69J+F9W2nqhK/82Ihqyoo5KZabRVDyNPMPINbX8aGVTtA+vVjgG3tW7Zw7KP8A11jaswi1pmc8HYkqPEBtwXa6nlAn6miRUJUX/jgd++1ltH2+91NJ7sLVuSag0poRpiZGyHM4SVN5ezocxyYDLVU6SSWmieEBT5RHptDP7uAHA7eQZJdNfybVG1V1Vs9zWFBrh/ArHOmMCyeTBK1CVKfVWVYrjcdYUnBbR8AJsv8AuJK1+5wJh92NG7Lv850D7L6WpEzDP/X26ORa4Aj7cZ67o5RtlKZiuvKgC8AgYiK/UkcJU8iAQIOj7GMW/uzrLGdKYPgWdYjU5ff09jtLI81xuxxYaCmr3UlyGgS3js/mTDMAbbCJ8zfaqRuCAqqhOHuHpFvcXq7sfWeP1yldQKUbHX0SN5I63aUnjKgNR1HskJxWfhTr+hqnAgi89fc49hfSXOq7bNQVfvTb+Pwsmk1r7ZNvV11UQ2P9LBUT/Wz/APlFHwVPITffRU8lXsJ69NKDP67RmO5PtuNLibZ2R8WR7BjT2XY8pqUkSNWxGn2X0R1txuBBjC4Bp2jiF39eBUbdmO497D6Wvsc9gvWLN3d/QK+yh62ySlxWVLkTnxVz/UzGLysaciQW3hVk5EexdjgB+Yq3+lOB5m+PVn2Sn+sPqvf4bendezvqw3Ftgj/kA+5OImWfyorb7y+Eh1n8dkOjLxeETH9SmKKGcaV9kPcr2DtKPA8n9VLXQFdHkxndlbauX7GuaKDHdFyVHpa6ZDjvo/LEfhAxkPI0hK4qr4pwOPr1j8vUf8iPt3hlkJRoO76Gn2Rhz59iE1mK+bM1A/opMyp7w+P38R8vsvA2AbYzCv19q/YudWpg3XYhjVpcS1NekIIcRx7w/wCVLx8URPqqr0n14FP/AOMbVttqz0+15Gv4rkC5zd6bl8uC4niTTNo4n4XaL9UU4jTJqi/ZS6/pwNgHAizV2T22StZcVpruy18tffy2I4WJma2Q99rNb822+hP+w+Qf4mSc6u504p04vFsxw4clazl97fWzeVWMx7M8jssgoHXCWHhYEkKrFpUVECS3H8XJf3+qPOE2v0/bTkU7j249ERE/HfPh8PDzTjKQK+ur6mFHraqDHrK6IPhEgRGgZZaHvvxBsEQRT6/ZE5z2tNpzM5lLucgOA4DgOA4DgV93zr7P9m1lTj+MDj8KtrbGPbHZWkyUL5vsA6CNIwzEcFA/c7UvkVV+3SfdfU+md1o9tabX6pmYxiIj78/gy1KzbZCcKhy3drop30SHBt1QvzY0CQ5KjCqEqCrbzrMcyRR6Ve206Vevr15L52pFYt6ZmY57J++fvaRzelyiTgVrvcC2tYbkpNoQ4eJpBx2veqYlM9aThdkR3Pn/AHDeGtIWzX5u+kEkTrrsv+3PX0+57evbTozNszOc4jl/lyZTW3VnYspzyGpwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwIU3BpiHs5zE8mqLt3CNpa3mO2OuNhRWRkOQXZDfxSosqORAkqHLb/AG5DCmPmPSiYGImIYpm+os13YGNY3t2xpYOsqtYVjmWD46cp9Mos4p/KEedIkgwrNaDog6sYRM3iQRcdRsSB0LKAANgLbYoDYIggAp0iIn0RERPsicDlwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcBwHAcD/9k=&#39;;</span></td>
      </tr>
      <tr>
        <td id="L434" class="blob-num js-line-number" data-line-number="434"></td>
        <td id="LC434" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>gif<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L435" class="blob-num js-line-number" data-line-number="435"></td>
        <td id="LC435" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L436" class="blob-num js-line-number" data-line-number="436"></td>
        <td id="LC436" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L437" class="blob-num js-line-number" data-line-number="437"></td>
        <td id="LC437" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>folder<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L438" class="blob-num js-line-number" data-line-number="438"></td>
        <td id="LC438" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAGrSURBVDjLxZO7ihRBFIa/6u0ZW7GHBUV0UQQTZzd3QdhMQxOfwMRXEANBMNQX0MzAzFAwEzHwARbNFDdwEd31Mj3X7a6uOr9BtzNjYjKBJ6nicP7v3KqcJFaxhBVtZUAK8OHlld2st7Xl3DJPVONP+zEUV4HqL5UDYHr5xvuQAjgl/Qs7TzvOOVAjxjlC+ePSwe6DfbVegLVuT4r14eTr6zvA8xSAoBLzx6pvj4l+DZIezuVkG9fY2H7YRQIMZIBwycmzH1/s3F8AapfIPNF3kQk7+kw9PWBy+IZOdg5Ug3mkAATy/t0usovzGeCUWTjCz0B+Sj0ekfdvkZ3abBv+U4GaCtJ1iEm6ANQJ6fEzrG/engcKw/wXQvEKxSEKQxRGKE7Izt+DSiwBJMUSm71rguMYhQKrBygOIRStf4TiFFRBvbRGKiQLWP29yRSHKBTtfdBmHs0BUpgvtgF4yRFR+NUKi0XZcYjCeCG2smkzLAHkbRBmP0/Uk26O5YnUActBp1GsAI+S5nRJJJal5K1aAMrq0d6Tm9uI6zjyf75dAe6tx/SsWeD//o2/Ab6IH3/h25pOAAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L439" class="blob-num js-line-number" data-line-number="439"></td>
        <td id="LC439" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L440" class="blob-num js-line-number" data-line-number="440"></td>
        <td id="LC440" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L441" class="blob-num js-line-number" data-line-number="441"></td>
        <td id="LC441" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>archive<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L442" class="blob-num js-line-number" data-line-number="442"></td>
        <td id="LC442" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAEUSURBVCjPXdFNSsMAEIbh0Su4teAdIgEvJB5C14K4UexCEFQEKfivtKIIIlYQdKPiDUTRKtb0x6ZJ+volraEJ3+zmycwkMczGzTE3lwkbxeLE5XTqQfTIjhIm6bCy9E/icoOoyR4v7PLDN+8ibxQHxGzE3JBfHrgUalDnQ6BNk1WRFPjs66kDNTxqg0Uh5qYg4IkrjrS9pTWfmvKaBaGaNU4EY+Lpkq88eKZKmTAhbd3i5UFZg0+TzV1d1FZy4FCpJCAQ8DUnA86ZpciiXjbQhK7aObDOGnNsUkra/WRAiQXdvSwWpBkGvQpnbHHMRvqRlCgBqkm/dd2745YbtofafsOcPiiMTc1fzNzHma4O/XLHCtgfTLBbxm6KrMIAAAAASUVORK5CYII=<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L443" class="blob-num js-line-number" data-line-number="443"></td>
        <td id="LC443" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L444" class="blob-num js-line-number" data-line-number="444"></td>
        <td id="LC444" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L445" class="blob-num js-line-number" data-line-number="445"></td>
        <td id="LC445" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>cs<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L446" class="blob-num js-line-number" data-line-number="446"></td>
        <td id="LC446" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJOSURBVDjLjZPbaxNBFMarf4cFwb9AIgXBR18Enyw+i1gs4g01kphSlPjQeAtNzNqGNLVpNCGhEvBS21Rr0ZIK6ovFiKbNbXNpdpNsstncUz9nNiauErEDHwMz8/1mzjlz+gD0UZGxh0hFNPAf7SXa3fUpAKparVZoNpvbrVYLvUT2YbFYTEqIEjBAzZIkoVwud1UsFiEIAjKZjAxJp9NgGKYL6Zh3UQA9UK1WUa/X5ZmqVCqhUCiA4zgZUKlUQC+xWq1tCAUM3v6+74hu2cH4eUz6OcwFcvgYEmUANYiiiFF3Aq5XHIJRCeqHLOJbFcg5OW6Mqm495fL2NznYl7OwveYxsZSF6QUHEpIc9+eQgOvuFL6EMjC6wrg4GZZfIwOGbazX8TaPY/qAr5Ms72oOBt8WknwVem8KWmcCY0/S0E1HcXYyhjNMBAYH2waYF8izl3I4eGLqmjLjz9by+PRNxCMS0k0C0c+yMDjj0MwmMOGJ4+Vqtg0Yn+dwf5HH/sG75/4uWzAiwbfCQ+dMYSGQxdhMHMPmMFY+8MgX623AiDu9+YAADg35LErzHU8SGkcSI4+T0DoSuGRnoZ5mcdIUwdC9zd85OHpjQzP+nMOVmZj4NSZBKNVh9LbN6xslnGai8CxmMP+Ol81criwntgugZTysDmovTEXEUVcKV8lt520s5kjJvP4MTpkjyApVXCZmvTWKRqMh6w9A5yO9Xy9ijUgZCi1lL/UEkMUf/+qDHtruAn5BDpAvXKYbOzGTsyW5exWAfgrZQTt3RFu//yfHVsX/fi5tjwAAAABJRU5ErkJggg==<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L447" class="blob-num js-line-number" data-line-number="447"></td>
        <td id="LC447" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L448" class="blob-num js-line-number" data-line-number="448"></td>
        <td id="LC448" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L449" class="blob-num js-line-number" data-line-number="449"></td>
        <td id="LC449" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>cpp<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L450" class="blob-num js-line-number" data-line-number="450"></td>
        <td id="LC450" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAH/SURBVDjLjZPNaxNRFMWrf4cFwV13JVKXLuta61apIChIV0rblUqhjYpRcUaNboxIqxFTQgVti4hQQTe1C7FFSUmnmvmM85XJzCSpx3efzmTSRtqBw7yZ9+5v7rl3bg+AHhK7DjClmAZ20UGm/XFcApAKgsBqNptbrVYL3cT2IQjCnSQkCRig4FqtBs/zYtm2DdM0oaoqh8iyDFEUY0gUvI8AdMD3fYRhyO8k13VhWRY0TeOAer0O+kg2m/0LIcDx9LdDgxff5jJzKjJzCmbe6fi0anEABTiOA13Xd1jiNTlxfT01UVB/CfMG7r/WILxScaOo4FpeBrPEfUdWDMPgmVQqlTbgtCjls4sGjl16PxuRny5oGH3yA7oZoPjR4BDbqeHlksLrUa1W24DJWRU3Wer9Qw/Gk+kVmA2lGuDKtMQzsVwfl6c3eE3IUgyYeCFjsqCgb3DqQhJwq/gTY7lyV61Jdhtw7qFUSjNA/8m8kASkc5tYXnN4BvTs1kO23uAdIksx4OjI19Grzys4c7fkfCm5MO0QU483cf5eGcurNq8BWfD8kK11HtwBoDYeGV4ZO5X57ow8knBWLGP49jqevVF5IKnRaOxQByD6kT6smFj6bHb0OoJsV1cAe/n7f3PQRVsx4B/kMCuQRxt7CWZnXT69CUAvQfYwzpFo9Hv/AD332dKni9XnAAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L451" class="blob-num js-line-number" data-line-number="451"></td>
        <td id="LC451" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L452" class="blob-num js-line-number" data-line-number="452"></td>
        <td id="LC452" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L453" class="blob-num js-line-number" data-line-number="453"></td>
        <td id="LC453" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>c<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L454" class="blob-num js-line-number" data-line-number="454"></td>
        <td id="LC454" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHdSURBVDjLjZNLS+NgFIad+R0KwuzcSQddunTWXraKA4KCuFKcWYqgVbE4TKJWNyqC2oHKoDBeEBF04UpFUVQqUoemSVOTJr2lrb5+5xsTUy+jgYdc3yfnnOQrAVBCsK2U4WFUvUE546OTcwk82WxWz+fzt4VCAS/B7kMQhB9uiVtQReFkMolUKuWQSCSgaRpkWeYSSZIgiqIjscMfSEAPZDIZWJbF94RpmtB1HYqicEE6nQa9xO/3/5OQoM57/qm2a3PGtyzDtxzF/FYMe6c6F1DAMAzEYrFnLfGZ1A9devqC8o2wpmL8jwJhRcbw7ygGAxJYS7xvuxVVVXklkUjkUdAshgP+DRVfureXbPPcuoKe2b/QDKtIQpXQPOLx+KOgf0nGCCu9smHiu7u8IGuDBHRsS6gdmgmJHEHfLwn9wSgqagc6Xvt8RC6X48MlCeEI2ibDIS8TVDYGBHfAO3ONowvTOacqSEBQNY6gpvOkp3cxgq8/Q8ZxyISWsDAwfY32sSscnhk8SFAFBIWLBPQZq1sOvjX5LozOqTBaxSu0jF5iYVV+FnZTJLB/pN0DDTv7WlHvtuQpLwrYxbv/DfIJt47gQfKZDShFN94TZs+afPW6BGUkecdytqGlX3YPTr7momspN0YAAAAASUVORK5CYII=<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L455" class="blob-num js-line-number" data-line-number="455"></td>
        <td id="LC455" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L456" class="blob-num js-line-number" data-line-number="456"></td>
        <td id="LC456" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L457" class="blob-num js-line-number" data-line-number="457"></td>
        <td id="LC457" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L458" class="blob-num js-line-number" data-line-number="458"></td>
        <td id="LC458" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>sln<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L459" class="blob-num js-line-number" data-line-number="459"></td>
        <td id="LC459" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>suo<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L460" class="blob-num js-line-number" data-line-number="460"></td>
        <td id="LC460" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>res<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L461" class="blob-num js-line-number" data-line-number="461"></td>
        <td id="LC461" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>resx<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L462" class="blob-num js-line-number" data-line-number="462"></td>
        <td id="LC462" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>csproj<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L463" class="blob-num js-line-number" data-line-number="463"></td>
        <td id="LC463" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJQSURBVDjLjZNvSBNxGMeX9O+FOAkaLbehozdGRGiMQqTIlEqJMIig3oxl0YxcgYt6FUZRryLYwpFWCr2wXgjBIMJMYhFjgZSiEXOg5c5N593udne7u+2+3V3tT22SBx/uxe/5fu7uuefRAdCpKJdJoVHB9h9qFSryuSJBYzqdpiRJymYyGZRDOYfH43lULCkW2NRwKpUCy7J5kskkSJJELBbTJARBwOv15iW58AZVoBbwPA9BELS7CsMwoCgK8XhcE3AcB/UhPp/vtyQnGBi03pYXjyAbPQuRD2sSbmUFVN9NLJ5ux9DryZJP0nqiChzjl48Oh9oYRPTAXBVksgnS0hRWu7uxXG/EfL0ZZ9yjGHgb1t4kGo0WBO6AvcUVsFP9oTZZjlQCP7ZA/r4JpHM3lup2Im6pRsRai2PX/GjoDWEk8BWJRKIg6P147mfP+CW63d16RUyOQP5SA6rLAsKyA0TNNizvM4D9/A4Tk2Ec7nuPE0+vgqbpgqBnzLl6vv8N3+x4eEsS0mAvHAJhMoAw6kHUVUF4rkeWHAKXZtA15kDL6C6tkXmBffiZs/P+NE7dC4pBhwsJY6USVjBtBO/bCswrbfq2GS+Ce9DwyooHoRvaPPzVxI67IVfHnQA+2JqQMFQgur0anP8J5IVmYEopmdbh5YQO1wMu0BxdKlB/44GLg48/HT8J8uBesH6/ViDxC5DnWiHPWjAz0wleYCGKokaJIDdI/6JMZ1nWEshr7UEZsnnBH8l+ZfpY9WA9YaWW0ba3SGBWJetY5xzq6pt/AY6/mKmzshF5AAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L464" class="blob-num js-line-number" data-line-number="464"></td>
        <td id="LC464" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L465" class="blob-num js-line-number" data-line-number="465"></td>
        <td id="LC465" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L466" class="blob-num js-line-number" data-line-number="466"></td>
        <td id="LC466" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L467" class="blob-num js-line-number" data-line-number="467"></td>
        <td id="LC467" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>inf<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L468" class="blob-num js-line-number" data-line-number="468"></td>
        <td id="LC468" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAEkSURBVCjPbdE9S0IBGIbhxxobWxP8D8r5I60RLg0NNTS21VBRQwg1aA4VOAWBpBVCFhKUtkVJtPQx9GFFWh49x3P0bvAjjsWzXrzvcAtpREEZfQtoACEkpKBVdpouv7NYi3SJkAynWcXExKTCJ6+4PLPeIZJPhksdmzp1vilTwqVGlWhEgR6wsbGpU+OLt94rGfJ1gIOLi4OFSYV3Sjx5QXdtkiHFx//gjiwlTshyT5LV3T8gwy3HFLnhkCuWmB3qA0Uu2WGOZVIUmN/ru5CiwAsLNLCI8cg+i3hAggMeiNOgwQbXRJnwghoX5DkiTow0OcLJ8HAbtLpkkzwJCuTY4pQppgeFFLJNtxMrzSRFtlnhvDXO6Fk7ll8hb+wZxpChoPzoB6aiXIYcSLDWAAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L469" class="blob-num js-line-number" data-line-number="469"></td>
        <td id="LC469" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L470" class="blob-num js-line-number" data-line-number="470"></td>
        <td id="LC470" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L471" class="blob-num js-line-number" data-line-number="471"></td>
        <td id="LC471" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>php<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L472" class="blob-num js-line-number" data-line-number="472"></td>
        <td id="LC472" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAGsSURBVDjLjZNLSwJRFICtFv2AgggS2vQLDFvVpn0Pi4iItm1KItvWJqW1pYsRemyyNILARbZpm0WtrJ0kbmbUlHmr4+t0z60Z7oSSAx935txzvrlPBwA4EPKMEVwE9z+ME/qtOkbgqtVqUqPRaDWbTegE6YdQKBRkJazAjcWapoGu6xayLIMoilAoFKhEEAQIh8OWxCzuQwEmVKtVMAyDtoiqqiBJEhSLRSqoVCqAP+E47keCAvfU5sDQ8MRs/OYNtr1x2PXdwuJShLLljcFlNAW5HA9khLYp0TUhSYMLHm7PLEDS7zyw3ybRqyfg+TyBtwl2sDP1nKWFiUSazFex3tk45sXjL1Aul20CGTs+syVY37igBbwg03eMsfH9gwSsrZ+Doig2QZsdNiZmMkVrKmwc18azHKELyQrOMEHTDJp8HXu1hostG8dY8PiRngdWMEq467ZwbDxwlIR8XrQLcBvn5k9Gpmd8fn/gHlZWT20C/D4k8eTDB3yVFKjX6xSbgD1If8G970Q3QbvbPehAyxL8SibJEdaxo5dikqvS28sInCjp4Tqb4NV3fgPirZ4pD4KS4wAAAABJRU5ErkJggg==<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L473" class="blob-num js-line-number" data-line-number="473"></td>
        <td id="LC473" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L474" class="blob-num js-line-number" data-line-number="474"></td>
        <td id="LC474" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L475" class="blob-num js-line-number" data-line-number="475"></td>
        <td id="LC475" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>html<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L476" class="blob-num js-line-number" data-line-number="476"></td>
        <td id="LC476" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHtSURBVDjLjZM9T9tQFIYpQ5eOMBKlW6eWIQipa8RfQKQghEAKqZgKFQgmFn5AWyVDCipVQZC2EqBWlEqdO2RCpAssQBRsx1+1ndix8wFvfW6wcUhQsfTI0j33PD7n+N4uAF2E+/S5RFwG/8Njl24/LyCIOI6j1+v1y0ajgU64cSSTybdBSVAwSMmmacKyLB/DMKBpGkRRZBJBEJBKpXyJl/yABLTBtm1Uq1X2JsrlMnRdhyRJTFCpVEAfSafTTUlQoFs1luxBAkoolUqQZbmtJTYTT/AoHInOfpcwtVtkwcSBgrkDGYph+60oisIq4Xm+VfB0+U/P0Lvj3NwPGfHPTcHMvoyFXwpe7UmQtAqTUCU0D1VVbwTPVk5jY19Fe3ZfQny7CE51WJDXqpjeEUHr45ki9rIqa4dmQiJfMLItGEs/FcQ2ucbRmdnSYy5vYWyLx/w3EaMfLmBaDpMQvuDJ65PY8Dpnz3wpYmLtApzcrIAqmfrEgdZH1grY/a36w6Xz0DKD8ES25/niYS6+wWE8mWfByY8cXmYEJFYLkHUHtVqNQcltAvoLD3v7o/FUHsNvzlnwxfsCEukC/ho3yUHaBN5Buo17Ojtyl+DqrnvQgUtfcC0ZcAdkUeA+ye7eMru9AUGIJPe4zh509UP/AAfNypi8oj/mAAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L477" class="blob-num js-line-number" data-line-number="477"></td>
        <td id="LC477" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L478" class="blob-num js-line-number" data-line-number="478"></td>
        <td id="LC478" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L479" class="blob-num js-line-number" data-line-number="479"></td>
        <td id="LC479" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L480" class="blob-num js-line-number" data-line-number="480"></td>
        <td id="LC480" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>h<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L481" class="blob-num js-line-number" data-line-number="481"></td>
        <td id="LC481" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHtSURBVDjLjZNLS9xQFMe138C9A/0OynyBUjeFQjduROi2MMtCEalS0ToLEdQMdEShoKDWRymKigWxII7PhaB9aBFUJjHJpHlnnvbfe27NJcVIDfwIyT3nd885cOoA1BHsaWQ0MZL/4SHjgciLCJpKpZJVrVava7Ua4mDnkCRpKCqJCpKU7HkefN8X2LYN0zShqiqXKIqCTCYjJGFyPQkooFgsolwu8zfhui4sy4KmaVwQBAHokmw2+1cSClpSUmr12MP7LQunii8klOA4DnRdv9USn0koePRiJDW+aTGBjcOLgAewlnjfYSuFQoFXIsvybQF9jG2avIKFPQtzOyZmcyZMtywkVAnNwzCMeMG7jV+YyFmQ1g30L2kYWitAWtZFJdQOzYREsYLhzwZGGF+OHez/9PD2k4aeeYUHVyoVPheSELGCwRUdA+zG/VMPeycu3iyo6J5WxDxIQFA1QtCauUwPrOpIPh/vSC+qSC/qPHn3u4uu2Su8nsrzZKqAoOR/BO2j+Q+DTPC0/2CdSu79qOLVlIyXk3l0zsjomJYxv6ELQYgQPOk7a2jpOnmcaG57tvuD3fzNxc5XB9sEm0XuyMb5VcCriBI7A/bz9117EMO1ENxImtmAfDq4TzKLdfn2RgQJktxjnUNo9RN/AFmTwlP7TY1uAAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L482" class="blob-num js-line-number" data-line-number="482"></td>
        <td id="LC482" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L483" class="blob-num js-line-number" data-line-number="483"></td>
        <td id="LC483" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L484" class="blob-num js-line-number" data-line-number="484"></td>
        <td id="LC484" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>msword<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L485" class="blob-num js-line-number" data-line-number="485"></td>
        <td id="LC485" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIdSURBVDjLjZO7a5RREMV/9/F9yaLBzQY3CC7EpBGxU2O0EBG0sxHBUitTWYitYCsiiJL0NvlfgoWSRpGA4IMsm43ZXchmv8e9MxZZN1GD5MCBW8yce4aZY1QVAGPMaWAacPwfm8A3VRUAVJWhyIUsy7plWcYQgh7GLMt0aWnpNTADWFX9Q2C+LMu4s7Oj/X5/xF6vp51OR1utloYQtNls6vLy8kjE3Huz9qPIQjcUg/GZenVOokIEiSBBCKUSQ+TFwwa1Wo2iKBARVlZW3iwuLr7izssPnwZ50DLIoWz9zPT+s/fabrf/GQmY97GIIXGWp28/08si5+oV1jcGTCSO6nHH2pddYqmkaUq320VECCFQr9cBsBIVBbJcSdXQmK7Q6Qsnq54sj2gBplS896RpSpIkjI2NjVZitdh7jAOSK6trXcpC2GjlfP1esHD+GDYozjm893jvSZJkXyAWe+ssc6W5G9naLqkaw/pGxBrl1tVpJCrWWpxzI6GRgOQKCv2BYHPl5uUatROeSsVy7eIkU9UUiYoxBgDnHNbagw4U6yAWwpmphNvXT6HAhAZuLNRx1iDDWzHG/L6ZEbyJVLa2c54/PgsKgyzw5MHcqKC9nROK/aaDvwN4KYS7j959DHk2PtuYnBUBFUEVVBQRgzX7I/wNM7RmgEshhFXAcDSI9/6KHQZKAYkxDgA5SnOMcReI5kCcG8M42yM6iMDmL261eaOOnqrOAAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L486" class="blob-num js-line-number" data-line-number="486"></td>
        <td id="LC486" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L487" class="blob-num js-line-number" data-line-number="487"></td>
        <td id="LC487" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L488" class="blob-num js-line-number" data-line-number="488"></td>
        <td id="LC488" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>javascript<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L489" class="blob-num js-line-number" data-line-number="489"></td>
        <td id="LC489" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIvSURBVDjLjZPLaxNRFIeriP+AO7Gg7nRXqo1ogoKCK0Fbig8QuxKhPop04SYLNYqlKpEmQlDBRRcFFWlBqqJYLVpbq6ktaRo0aWmamUxmJpN5ZvKoP++9mmlqWuzAt7jc+X2Hcy6nDkAdhXxbCI2Epv+wlbDeyVUJGm3bzpVKpcVyuYyVIPcIBAL3qiXVgiYaNgwDpmk6qKoKRVEgCAKT8DyPYDDoSCrhdYHrO9qzkdOQvp+E+O04hC+tED63gBs+QiDnhQgTWJYFWiQUCv2RUEH/g4YNXwdcT/VEJ6xkF8zEDRixq1CnriD94SikH08gikJNS2wmVLDwybONH3GbNt8DY+YMrDk/tGkvhOFmKPE+pxVJkpDJZMBx3JJAHN+/MTPq8amxdtj8fWjhwzB+diH5ag9y8V6QubDhUYmmaWwesiwvCYRRtyv9ca9oc37kk3egTbbBiPowP+iGOHGT0A1h7BrS43ehiXHous5EjoCEx3IzF6FMnYMcPgs95iOCW1DDXqTfnEBqsBnRR9shTvYibyhsiBRHwL13dabe7r797uHOx3Kkm1T2IDfhhTRyAfMDh5Aauox8Ns5aKRQKDNrSsiHSZ6SHoq1i9nkDuNfHkHi2D9loHwtSisUig4ZXFaSG2pB8cZBUPY+ila0JV1Mj8F/a3DHbfwDq3Mtlb12R/EuNoKN10ylLmv612h6swKIj+CvZRQZk0ou1hMm/OtveKkE9laxhnSvQ1a//DV9axd5NSHlCAAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L490" class="blob-num js-line-number" data-line-number="490"></td>
        <td id="LC490" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L491" class="blob-num js-line-number" data-line-number="491"></td>
        <td id="LC491" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L492" class="blob-num js-line-number" data-line-number="492"></td>
        <td id="LC492" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>xml<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L493" class="blob-num js-line-number" data-line-number="493"></td>
        <td id="LC493" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHdSURBVDjLjZNPaxNBGIdrLwURLznWgkcvIrQhRw9FGgy01IY0TVsQ0q6GFkT0kwjJId9AP4AHP4Q9FO2hJ7El2+yf7OzMbja7Sf0578QdNybFLjwszLu/Z2femZkDMEfI54FkRVL4Dw8l8zqXEawMBgM2HA6vR6MRZiHraDabH7KSrKBA4SAIEIahxvd9eJ6HbrerJKZpotVqaUkavkMC+iCKIsRxrN6EEAKMMViWpQT9fh/0k3a7PZZkBUPmqXAKCSjAOYdt21NLUj1JBYW7C6vi6BC8vKWKQXUXQcNA5Nh6KY7jqJl0Op1JwY/Hi7mLp/lT/uoA/OX2WLC3C9FoQBwfILKulIRmQv1wXfevwHmyuMPXS5Fv1MHrFSTmhSomnUvw/Spo3C+vg3/+pJZDPSGRFvilNV+8PUZvoziKvn+d3LZvJ/BelMDevIZXK2EQCiUhtMDM53bY5rOIGXtwjU3EVz/HM5Az8eplqPFKEfzLR91cOg8TPTgr3MudFx+d9owK7KMNVfQOtyQ1OO9qiHsWkiRRUHhKQLuwfH9+1XpfhVVfU0V3//k4zFwdzjIlSA/Sv8jTOZObBL9uugczuNaCP5K8bFBIhduE5bdC3d6MYIkkt7jOKXT1l34DkIu9e0agZjoAAAAASUVORK5CYII=<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L494" class="blob-num js-line-number" data-line-number="494"></td>
        <td id="LC494" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L495" class="blob-num js-line-number" data-line-number="495"></td>
        <td id="LC495" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L496" class="blob-num js-line-number" data-line-number="496"></td>
        <td id="LC496" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>postscript<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L497" class="blob-num js-line-number" data-line-number="497"></td>
        <td id="LC497" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>ai<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L498" class="blob-num js-line-number" data-line-number="498"></td>
        <td id="LC498" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIWSURBVDjLhZNPbxJRFMWhRrYu3NrExIUbdzWte6M7d34Eo2Hjxm8gwZUxIYEARUKAWgwbV0BpxAW11bpQFrCoCVEMDplhQMow782/enx3WsiU0jrJ2bz7zu+9e95cHwAfSXzXhFaEVv+j60JLM58HsGIYxsi27SPHcbBIoo5oNBrxQryAVTJPJhPouu6q0+mgVquh0WhAlmUX0uv1EIvFZpCp2U8A2sA5h2maYIyhUChA0zTU63UoiuICaJ0OSSaTx5B5AJnpqqVSCbmNTWxVt9FsNtHv98+05GYyD7AsC5VKBZvFd/j2k6Etc6gjHfLgELKiujeRJGkxQGSAYDCIx8+eI/ORIb3Lkf0sWvmio9aaoC2NoQ7+QFUHCwFr5XIZ8bfvhZFhq2XgU9tEb2Tj99DCgcTx9YeOg64GZTCGPQdYEnpaLBbxZl9HfIejo1rg5nGvti3CMyxouonhIYM8ZG7NBWSz2YepVKobiUR+UXjrwry+wzBm9qnAqD03YHohbsASUP+ly2u+XC7XzmQyt9LpdJc2xuscr0ULU9NUFC6JDiFRCy4gn88/EWqFw+EEmfL7HK8+8FOAqdmrWYjC7E8kElcCgcAdWmx2LbzY5mCmc+YWXp33H/w1LQehKhPPZuK8mTjR0QxwArktQtKpsLHHEarwC81ir+ZOrwewTBCiXr157/7d0PfqjQcvH10w1jT6y/8A/nHJHcAgm2AAAAAASUVORK5CYII=<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L499" class="blob-num js-line-number" data-line-number="499"></td>
        <td id="LC499" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L500" class="blob-num js-line-number" data-line-number="500"></td>
        <td id="LC500" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>pdf<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L501" class="blob-num js-line-number" data-line-number="501"></td>
        <td id="LC501" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHhSURBVDjLjZPLSxtRFIfVZRdWi0oFBf+BrhRx5dKVYKG4tLhRqlgXPmIVJQiC60JCCZYqFHQh7rrQlUK7aVUUfCBRG5RkJpNkkswrM5NEf73n6gxpHujAB/fOvefjnHM5VQCqCPa1MNoZnU/Qxqhx4woE7ZZlpXO53F0+n0c52Dl8Pt/nQkmhoJOCdUWBsvQJ2u4ODMOAwvapVAqSJHGJKIrw+/2uxAmuJgFdMDUVincSxvEBTNOEpmlIp9OIxWJckMlkoOs6AoHAg6RYYNs2kp4RqOvfuIACVFVFPB4vKYn3pFjAykDSOwVta52vqW6nlEQiwTMRBKGygIh9GEDCMwZH6EgoE+qHLMuVBdbfKwjv3yE6Ogjz/PQ/CZVDPSFRRYE4/RHy1y8wry8RGWGSqyC/nM1meX9IQpQV2JKIUH8vrEgYmeAFwuPDCHa9QehtD26HBhCZnYC8ucGzKSsIL8wgsjiH1PYPxL+vQvm5B/3sBMLyIm7GhhCe90BaWykV/Gp+VR9oqPVe9vfBTsruM1HtBKVPmFIUNusBrV3B4ev6bsbyXlPdkbr/u+StHUkxruBPY+0KY8f38oWX/byvNAdluHNLeOxDB+uyQQfPCWZ3NT69BYJWkjxjnB1o9Fv/ASQ5s+ABz8i2AAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L502" class="blob-num js-line-number" data-line-number="502"></td>
        <td id="LC502" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L503" class="blob-num js-line-number" data-line-number="503"></td>
        <td id="LC503" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L504" class="blob-num js-line-number" data-line-number="504"></td>
        <td id="LC504" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>exe<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L505" class="blob-num js-line-number" data-line-number="505"></td>
        <td id="LC505" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAFiSURBVBgZpcEhbpRRGIXh99x7IU0asGBJWEIdCLaAqcFiCArFCkjA0KRJF0EF26kkFbVVdEj6/985zJ0wBjfp8ygJD6G3n358fP3m5NvtJscJYBObchEHx6QKJ6SKsnn6eLm7urr5/PP76cU4eXVy/ujouD074hDHd5s6By7GZknb3P7mUH+WNLZGKnx595JDvf96zTQSM92vRYA4lMEEO5RNraHWUDH3FV48f0K5mAYJk5pQQpqIgixaE1JDKtRDd2OsYfJaTKNcTA2IBIIesMAOPdDUGYJSqGYml5lGHHYkSGhAJBBIkAoWREAT3Z3JLqZhF3uS2EloQCQ8xLBxoAEWO7aZxros7EgISIIkwlZCY6s1OlAJTWFal5VppMzUgbAlQcIkiT0DXSI2U2ymYZs9AWJL4n+df3pncsI0bn5dX344W05dhctUFbapZcE2ToiLVHBMbGymS7aUhIdoPNBf7Jjw/gQ77u4AAAAASUVORK5CYII=<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L506" class="blob-num js-line-number" data-line-number="506"></td>
        <td id="LC506" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L507" class="blob-num js-line-number" data-line-number="507"></td>
        <td id="LC507" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L508" class="blob-num js-line-number" data-line-number="508"></td>
        <td id="LC508" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>asp<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L509" class="blob-num js-line-number" data-line-number="509"></td>
        <td id="LC509" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJQSURBVDjLjZNvSBNxGMeX9O+FOAkaLbehozdGRGiMQqTIlEqJMIig3oxl0YxcgYt6FUZRryLYwpFWCr2wXgjBIMJMYhFjgZSiEXOg5c5N593udne7u+2+3V3tT22SBx/uxe/5fu7uuefRAdCpKJdJoVHB9h9qFSryuSJBYzqdpiRJymYyGZRDOYfH43lULCkW2NRwKpUCy7J5kskkSJJELBbTJARBwOv15iW58AZVoBbwPA9BELS7CsMwoCgK8XhcE3AcB/UhPp/vtyQnGBi03pYXjyAbPQuRD2sSbmUFVN9NLJ5ux9DryZJP0nqiChzjl48Oh9oYRPTAXBVksgnS0hRWu7uxXG/EfL0ZZ9yjGHgb1t4kGo0WBO6AvcUVsFP9oTZZjlQCP7ZA/r4JpHM3lup2Im6pRsRai2PX/GjoDWEk8BWJRKIg6P147mfP+CW63d16RUyOQP5SA6rLAsKyA0TNNizvM4D9/A4Tk2Ec7nuPE0+vgqbpgqBnzLl6vv8N3+x4eEsS0mAvHAJhMoAw6kHUVUF4rkeWHAKXZtA15kDL6C6tkXmBffiZs/P+NE7dC4pBhwsJY6USVjBtBO/bCswrbfq2GS+Ce9DwyooHoRvaPPzVxI67IVfHnQA+2JqQMFQgur0anP8J5IVmYEopmdbh5YQO1wMu0BxdKlB/44GLg48/HT8J8uBesH6/ViDxC5DnWiHPWjAz0wleYCGKokaJIDdI/6JMZ1nWEshr7UEZsnnBH8l+ZfpY9WA9YaWW0ba3SGBWJetY5xzq6pt/AY6/mKmzshF5AAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L510" class="blob-num js-line-number" data-line-number="510"></td>
        <td id="LC510" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L511" class="blob-num js-line-number" data-line-number="511"></td>
        <td id="LC511" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L512" class="blob-num js-line-number" data-line-number="512"></td>
        <td id="LC512" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>swf<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L513" class="blob-num js-line-number" data-line-number="513"></td>
        <td id="LC513" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHYSURBVDjLjZPLSxtRFMa1f0UXCl0VN66igg80kQZtsLiUWhe14MKFIFHbIEF8BNFFKYVkkT9GKFJooXTToq2gLkQT82oyjzuvO8nXe65mmIkRHfg2c+/3O+d8l9MBoIMkvi6hkNDAA3om9MTz+QAhy7JqnPO667poJ3GOdDr92Q/xAwbIrOs6GGOeFEVBtVpFoVCQkHw+j0wm40Ga5k4C0AXTNGHbNsxv32Hu7YNtp1Cr1VAsFiXAMAxQkWw2ewNpBZDZPjiA+XYebioJ9nIKqqqiVCrdGUlm0gpwzs5hzrwGX1uGMTMLtvrBG6VcLstOcrncPQDOYW3tgCffw0isg4uqnP6J8AhCnVAelUqlPYD/PYE59wZ67BXsL4fg/6ryYhNC82uaJkFtAdbHT+CJFbgbCagjYbDNlDev4zgyH4KQ7gA2n/fMUWWeiAtzBMrgWABAXciAhaibAKAYnXyaGx3/5cSXoIajsH/8hHP8B87llTSSqAMSmQMAfSL2VYtET5WRCLcW3oHt7Aaq+s1+eQAt/EJXh8MNe2kRSmwa/LoQeOsmpFUeQB0ag9I/jIve0G/n6Lhx3x60Ud3L4DbIPhEQo4PHmMVdTW6vD9BNkEesc1O0+t3/AXamvvzW7S+UAAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L514" class="blob-num js-line-number" data-line-number="514"></td>
        <td id="LC514" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L515" class="blob-num js-line-number" data-line-number="515"></td>
        <td id="LC515" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L516" class="blob-num js-line-number" data-line-number="516"></td>
        <td id="LC516" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L517" class="blob-num js-line-number" data-line-number="517"></td>
        <td id="LC517" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>csv<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L518" class="blob-num js-line-number" data-line-number="518"></td>
        <td id="LC518" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>mysql<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L519" class="blob-num js-line-number" data-line-number="519"></td>
        <td id="LC519" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHVSURBVDjLjZPLaiJBFIZNHmJWCeQdMuT1Mi/gYlARBRUkao+abHUhmhgU0QHtARVxJ0bxhvfGa07Of5Iu21yYFPyLrqrz1f+f6rIRkQ3icca6ZF39RxesU1VnAVyuVqvJdrvd73Y7+ky8Tk6n87cVYgVcoXixWNByuVSaTqc0Ho+p1+sJpNvtksvlUhCb3W7/cf/w+BSLxfapVIqSySRlMhnSdZ2GwyHN53OaTCbU7/cFYBgG4RCPx/MKub27+1ur1Xqj0YjW6zWxCyloNBqUSCSkYDab0WAw+BBJeqLFtQpvGoFqAlAEaZomuc0ocAQnnU7nALiJ3uh8whgnttttarVaVCgUpCAUCgnQhMAJ+gG3CsDZa7xh1mw2ZbFSqYgwgsGgbDQhcIWeAHSIoP1pcGeNarUqgFKpJMLw+/0q72azkYhmPAWIRmM6AGbXc7kc5fN5AXi9XgWACwAguLEAojrfsVGv1yV/sVikcrksAIfDIYUQHEAoPgLwT3GdzWYNdBfXh3xwApDP5zsqtkoBwuHwaSAQ+OV2u//F43GKRCLEc5ROpwVoOngvBXj7jU/wwZPPX72DT7RXgDfIT27QEgvfKea9c3m9FsA5IN94zqbw9M9fAEuW+zzj8uLvAAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L520" class="blob-num js-line-number" data-line-number="520"></td>
        <td id="LC520" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L521" class="blob-num js-line-number" data-line-number="521"></td>
        <td id="LC521" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L522" class="blob-num js-line-number" data-line-number="522"></td>
        <td id="LC522" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>rpm<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L523" class="blob-num js-line-number" data-line-number="523"></td>
        <td id="LC523" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>deb<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L524" class="blob-num js-line-number" data-line-number="524"></td>
        <td id="LC524" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>setup<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L525" class="blob-num js-line-number" data-line-number="525"></td>
        <td id="LC525" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			$img[&#39;data&#39;] = &#39;iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAALnSURBVDjLfZNLaFx1HIW/e2fuzJ00w0ymkpQpiUKfMT7SblzU4kayELEptRChUEFEqKALUaRUV2YhlCLYjYq4FBeuiqZgC6FIQzBpEGpDkzHNs5PMTJtmHnfu6//7uSh2IYNnffg23zmWqtIpd395YwiRL1Q0qyIfD56cmOvUs/4LWJg40auiH6jI+7v3ncybdo2Hy9ebKvqNGrn03Nj1+x0Bi1dHHVV9W0U+ye4d2d83+Ca2GJrlGZx0gkppkkfrsysqclFFvh8++3v7CWDh6ugIohfSPcPH+w6fwu05ABoSby9yb3Kc/mePYXc9TdCqslWapVGdn1Zjxo++O33Fujtx4gdEzj61f8xyC8/jN2rsVOcxYZOoVSZtBewZOAT+NonuAWw3S728wFZpFm975cekGjlz8NXLVtSo0SxPImGdtFfFq5epr21wdOxrnMwuaC2jrRJWfYHdxRfIFeDWr0unkyrSUqxcyk2TLQzQrt6hqydPvidDBg/8VTAp8DegvYa3OU1z+SbuM6dQI62kioAAVgondwAnncWvzCDNCk4CLO9vsJVw8xqN+iPiTB5SaTSKURGSaoTHHgxoAMlduL1HiFMZXP8BsvkbO1GD2O3GpLOIF0KsSBijxmCrMY+FqgGJQDzQgGT3XrJ7DuI5EKZd4iDG+CHG84m8AIki1Ai2imRsx4FEBtQHCUB8MG1wi8QKGhjEC4mbAVHTx8kNYSuoiGurkRtLN76ivb0K6SIkusCEoBEgaCQYPyT2QhKpAXKHTiMmQ2lmChWZTrw32v9TsLOyVlu8Nhi2G4Vs32HsTC9IA2KPRuU2Erp097+O5RRYvz3H1r3JldivfY7IR0+mfOu7l3pV5EM1cq744mi+OPwaRD71tSk0Vsp3/uLB6s2minyrIpeOf7a00fFMf1w+MqRGzqvIW/teecdqV5a5P/8ncXv9ZxUdf/lCae5/3/hvpi4OjajIp4ikVOTLY+cXr3Tq/QPcssKNXib9yAAAAABJRU5ErkJggg==&#39;;</span></td>
      </tr>
      <tr>
        <td id="L526" class="blob-num js-line-number" data-line-number="526"></td>
        <td id="LC526" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L527" class="blob-num js-line-number" data-line-number="527"></td>
        <td id="LC527" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L528" class="blob-num js-line-number" data-line-number="528"></td>
        <td id="LC528" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>makefile<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L529" class="blob-num js-line-number" data-line-number="529"></td>
        <td id="LC529" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAH3SURBVDjLjZNPaxpRFMXTfo4E+h1S8hmy7bJ0G+i60ECg2QXaIqVaqwttplXCSEMNDlZTqdEaEkyslIo4s9BG4yIOYzIo/v+Xnrz7UofR2DYDh1m8d37v3vPenQMwR2LfPNMi09J/dI/pruEzARZ7vV59OBxejkYjzBJbh8PheGOGmAFLZG61Wmi328jlchBFEYIgIB6PQ9M0DlFVFU6n04CMzXcIQBu63S5qtRp8Ph/K5TKy2SxCoRCq1SoHdDod0CEul+saMg3o9/vI5/MIh8OoVCpwu92QJAmBQACxWGyiJZ7JNIC1gUKhgGAwCEVR4PF4YLfbkUgkYLFYeCUE/ifA7/cjnU7z8lOpFP8nk0lYrVbenq7rswFJpQ7bThFbgUPIsoxoNMqzoCpsNhuHNZtNNBqNm4Anr3btL7dPIR2dY917Aqe4xyvJZDL8RuhkyodCJE0Ann8srW2Ipd+fj3VEfujYimtYea1MBEatEYBE78EAMOPqM2+pLx1dIPxdx6cDqqCID19VbhprMBhwkXkCsCqcdHcOzxE8vsD2fhVr74vwRlXjVLPZLAPw+G2hthmpQPym4em7XxAiZzdKnyUD8PCF/OjBhlxfXv/ZcX85Y/Qh/jYLU7o0QvxzE/dZQG1auI2Z7W3y6TUBFghyi3Eei0Z/4QrVT8W6WBitpQAAAABJRU5ErkJggg==<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L530" class="blob-num js-line-number" data-line-number="530"></td>
        <td id="LC530" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L531" class="blob-num js-line-number" data-line-number="531"></td>
        <td id="LC531" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L532" class="blob-num js-line-number" data-line-number="532"></td>
        <td id="LC532" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L533" class="blob-num js-line-number" data-line-number="533"></td>
        <td id="LC533" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>powerpoint<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L534" class="blob-num js-line-number" data-line-number="534"></td>
        <td id="LC534" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHeSURBVDjLjZO/i1NBEMc/u+/lBYxiLkgU7vRstLEUDyxtxV68ykIMWlocaGHrD1DxSAqxNf4t115jo6DYhCRCEsk733s7u2PxkuiRoBkYdmGZz3xndsaoKgDGmC3gLBDxbxsA31U1AKCqzCBXsywbO+e8iOgqz7JM2+32W+AiYFX1GGDHOeen06mmabrwyWSio9FI+/2+ioj2ej3tdDoLiJm+bimAhgBeUe9RmbkrT5wgT97RaDQoioIQAt1ud7/Var1h+uq+/s9+PLilw+FwqSRgJ1YpexHSKenHF4DFf/uC3b7CydsPsafraO5IkoTxeEwIARGh2WwCYNUJAOmHZ5y4eY/a7h4hPcIdHvDz/fMSnjviOCZJEiqVCtVqdfEl8RygHkz9DLZWQzOHisd9OizfckcURRhjMMbMm14CQlEC/NfPjPd2CSJQCEEEDWYBsNZijFkaCqu5Ky+blwl5geaOUDg0c8TnNssSClkER1GEtXYZcOruI6ILl1AJqATirW02Hr8sFThBVZfklyXMFdQbbDzdXzm78z4Bx7KXTcwdgzs3yizuzxAhHvVh4avqBzAzaQa4JiIHgGE9C3EcX7ezhVIgeO9/AWGdYO/9EeDNX+t8frbOdk0FHhj8BvUsfP0TH5dOAAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L535" class="blob-num js-line-number" data-line-number="535"></td>
        <td id="LC535" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L536" class="blob-num js-line-number" data-line-number="536"></td>
        <td id="LC536" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L537" class="blob-num js-line-number" data-line-number="537"></td>
        <td id="LC537" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>crt<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L538" class="blob-num js-line-number" data-line-number="538"></td>
        <td id="LC538" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAJUSURBVDjLhZPPS1RRHMU/997nzDihTx0zFxrRxkqyQKNaBBGCWzetXUhYCUKLfrhtEdFGCqEWQf9AuK5FQouiokWrFoYuBioZ480o47x57/5q0cw4ReUXzvKce8/3fI/w3gMghBgCDgGK/08JKHrvHQDeexoi4/V6vaK1tsYY/zfU63W/vLz8EDgCSO894sKtF2Z4IKcS5XHG4qzHGEdeKDaKEasPpnDOkaYphUKBra0tVlZWHs3Pzy8BxSCXzzJ+cpC1qEaaGoy2OOMYKXSytl5CSon3HiEEAGEYMjMzsxAEAXNzc0vSGmsq2zFHuzpIYk1SN4z0dVKuxOAsSimklC2BTCZDLpdjdnZ2ARiQ1pibqx++plE55nghz4n+PFF5l1dvNrhx+TRSSpRSZDIZKpUKURRRKpVaGxX23VD4fnPs+bGe4uQBVcVZTznO8M1PcerSXVBdWGt/g3OOMAwJguBs4CyLZ0bHJkXfHZxLkGabXr1N1+ZL4s/3yY/dQynVjBohRDM1AKTTtWuifxqrK9i4iN1dx8YbyL4Jdj4+aRGbVpRSBEHQEgis0d3Sg7dVsDW8reF1BYQiKe/seW28rJT64wfG4X2Kt/Evsqvh7S7YOjrZO7RmlO1kAGl0uuP1DjjdEInBW7yponV361pbBCmRUrYJVPXj+MszhOxAZg8ic4MI1cOPT2/Jj179bXntaFn7/pQwiVisRVx3KV06BeN6Cc9d4fD0bYJ8+K9SuSAIzou2Nk4kSfJaKZUD5D6NdNbaWjabvdguMNyo837k5lig9BMTlFjmy9KhMwAAAABJRU5ErkJggg==<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L539" class="blob-num js-line-number" data-line-number="539"></td>
        <td id="LC539" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L540" class="blob-num js-line-number" data-line-number="540"></td>
        <td id="LC540" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L541" class="blob-num js-line-number" data-line-number="541"></td>
        <td id="LC541" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>java<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L542" class="blob-num js-line-number" data-line-number="542"></td>
        <td id="LC542" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIRSURBVDjLjZPJa1NRFIera/8ECy7dV7txkb2UOoDgzo0R3YuLrFwWIVglWQRtN0GCLkIixJDJQJKGQOYBA4akmec5eSFT/XnPsXlNsWIffOTdd3O+e+6PezcAbBDiuS7YEmz/hxuCq3LdmmBrOp32F4vFyXK5xEWIeWg0mnfrknXBNhWPx2NIkiQzGAzQ6/XQaDRYUqvVoNVqZQkXGwyGm2q1+k00GkUkEkE4HEYwGGQCgQDS6TSKxSILJpMJaBGdTvdHYjKZHvp8vuNsNot6vc7QavRLq1UqFcTjcbhcLrmLFZyJ2+0u9Pt9hC1f8OHpDt4/uoO3928zmscKHD5/gKPPB8jn8yxpNpuoVqtnAqPRiOFwiPGgB/fhPr7uvcJH5S4Ont3Dp5dP8G3/NX4cfedCi8XCeXQ6nTOBzWaT5vM5J0yTFFy325WhtmkbhN1ux2g04gVlgcfj+UmDUqkEh8OBcrnM7xRaLpdDIpHgcSqVYihEYr0DL61O6fv9fhQKBd4vhUrpk6DdbsNsNrN8Nptxt7JApVK9EMW9TCbDEgqI2qUOSELvJPF6vbw9Kj4nEM81pVJ5V6/XH8diMQ6IaLVaLAmFQnA6nfyNslohC05P4RWFQrFLHVitVoYSF2cEyWSSgxOn9Bx/CWggPv761z24gBNZcCq5JQKSaOIyxeK/I769a4JNklziOq+gq7/5Gx172kZga+XWAAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L543" class="blob-num js-line-number" data-line-number="543"></td>
        <td id="LC543" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L544" class="blob-num js-line-number" data-line-number="544"></td>
        <td id="LC544" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L545" class="blob-num js-line-number" data-line-number="545"></td>
        <td id="LC545" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>excel<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L546" class="blob-num js-line-number" data-line-number="546"></td>
        <td id="LC546" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIpSURBVDjLjZNPSFRRFMZ/9707o0SOOshM0x/JFtUmisKBooVEEUThsgi3KS0CN0G2lagWEYkSUdsRWgSFG9sVFAW1EIwQqRZiiDOZY804b967954249hUpB98y/PjO5zzKREBQCm1E0gDPv9XHpgTEQeAiFCDHAmCoBhFkTXGyL8cBIGMjo7eA3YDnog0ALJRFNlSqSTlcrnulZUVWV5elsXFRTHGyMLCgoyNjdUhanCyV9ayOSeIdTgnOCtY43DWYY3j9ulxkskkYRjinCOXy40MDAzcZXCyVzZS38MeKRQKf60EZPXSXInL9y+wLZMkCMs0RR28mJ2grSWJEo+lH9/IpNPE43GKxSLOOYwxpFIpAPTWjiaOtZ+gLdFKlJlD8u00xWP8lO/M5+e5efEB18b70VqjlMJai++vH8qLqoa+nn4+fJmiNNPCvMzQnIjzZuo1V88Ns3/HAcKKwfd9tNZorYnFYuuAMLDMfJ3m+fQznr7L0Vk9zGpLmezB4zx++YggqhAFEZ7n4ft+HVQHVMoB5++cJNWaRrQwMjHM9qCLTFcnJJq59WSIMLAopQDwfR/P8+oAbaqWK2eGSGxpxVrDnvQ+3s++4tPnj4SewYscUdUgIiilcM41/uXZG9kNz9h9aa+EYdjg+hnDwHDq+iGsaXwcZ6XhsdZW+FOqFk0B3caYt4Bic3Ja66NerVACOGttBXCbGbbWrgJW/VbnXbU6e5tMYIH8L54Xq0cq018+AAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L547" class="blob-num js-line-number" data-line-number="547"></td>
        <td id="LC547" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L548" class="blob-num js-line-number" data-line-number="548"></td>
        <td id="LC548" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L549" class="blob-num js-line-number" data-line-number="549"></td>
        <td id="LC549" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>binary<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L550" class="blob-num js-line-number" data-line-number="550"></td>
        <td id="LC550" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAGNSURBVDjLpVM9SwNBEJ297J1FQBtzjQj2dgppYiP4A1KZRoiFrYWt9rHyH6QUPBDTCimtLNSAnSB26YKg4EdMdsd5611cjwsIWRhmZ3f2zZuPVcxMsyx9fPF0NRfS2vM7lx2WtcQiJHvDRvZMluXMGNHstJH7+Wj09jHkOy1+tc3VxeC+P6TXT1sYZX2hT7cvS6lepv3zHUp2T8vXNw81dXT2yGwEGeERSbSVCC5qysYa+3vm9sJGmLFojceXJ9uklCqUIAic5G3IytahAAhqqVSiwWDwx6nogW9XKhWphaGAvC50Oh1qtVr/7oAdCwBQwjB00mg0qFqtUr1ed3YURZM7X7TWTqM2Gm3CASRJEur1etTtdp1DnrafFtJGMbVNGSBas9l0DrAzR6x8DdwASUB0RqNNGS2/gH7EInvCwMhkZTnlnX0GsP09tJER0BgMoAEAa1rETDIQvBkjBZeHMIjjuNB5Ggg0/oZWPGrHGwd7Fp9F2CAlgHKqf0aYXb6Y2mzE8d/IfrXVrN/5G81p6oa2mIEUAAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L551" class="blob-num js-line-number" data-line-number="551"></td>
        <td id="LC551" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L552" class="blob-num js-line-number" data-line-number="552"></td>
        <td id="LC552" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L553" class="blob-num js-line-number" data-line-number="553"></td>
        <td id="LC553" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L554" class="blob-num js-line-number" data-line-number="554"></td>
        <td id="LC554" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>text<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L555" class="blob-num js-line-number" data-line-number="555"></td>
        <td id="LC555" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>readme<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L556" class="blob-num js-line-number" data-line-number="556"></td>
        <td id="LC556" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAADoSURBVBgZBcExblNBGAbA2ceegTRBuIKOgiihSZNTcC5LUHAihNJR0kGKCDcYJY6D3/77MdOinTvzAgCw8ysThIvn/VojIyMjIyPP+bS1sUQIV2s95pBDDvmbP/mdkft83tpYguZq5Jh/OeaYh+yzy8hTHvNlaxNNczm+la9OTlar1UdA/+C2A4trRCnD3jS8BB1obq2Gk6GU6QbQAS4BUaYSQAf4bhhKKTFdAzrAOwAxEUAH+KEM01SY3gM6wBsEAQB0gJ+maZoC3gI6iPYaAIBJsiRmHU0AALOeFC3aK2cWAACUXe7+AwO0lc9eTHYTAAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L557" class="blob-num js-line-number" data-line-number="557"></td>
        <td id="LC557" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L558" class="blob-num js-line-number" data-line-number="558"></td>
        <td id="LC558" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L559" class="blob-num js-line-number" data-line-number="559"></td>
        <td id="LC559" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>image<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L560" class="blob-num js-line-number" data-line-number="560"></td>
        <td id="LC560" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>video<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L561" class="blob-num js-line-number" data-line-number="561"></td>
        <td id="LC561" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>ico<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L562" class="blob-num js-line-number" data-line-number="562"></td>
        <td id="LC562" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIcSURBVDjLjZO/T1NhFIafc+/trdRaYk1KUEEWjXHRaCSik+E/cDHGzYXB2YHRhMRFY1SYmRgYHZ3VxIRFDYMraMC2hrbQXm7v9+M4UGobiOEk7/adN+9zvnNEVQEQkYvAGBDy/6oBm6rqAVBVeia30jRtGmOctVaPU5qmuri4+AaYAgJVHTKYNsa4drutnU6nr1arpY1GQ6vVqlprdXt7W5eWlvomMv/uw6tSofB4p+NOF0biYtc48tEAhXiuTZzh/s1xyuUyWZbhvWdlZeXt3Nzca14sf6zW6nXf7uzrcfq9s6sLy5+1Xq8fQQKmo1ZCvlAoyo+tXT5tPGO09IckM2zWznH3/AJ3rl5ACInjmGazifceay2VSgWASISSBaz3FIs1RnJlPF18vEG1keDVk1lLFEWICM45wvAfYqTKriqje0lGI01x2qFtuuwkKQ26oEKcCwnDEBFBRA6HfmBw8JWwl3o2ti7j8+u0TUKzcYkrY/n+wyAIEJEjSxEglLyH5r7j+tg8T1oVZr8GzE69JIoiFMiM7zeHYUgQBAMJVBGU77+eYoxhLcvIxnNk6w8xxvDo3hqH+yIieO+HEkQB/qe6bPL5g/cckCkDiBhjOJULhlCGDJIkXX2z+m3GeW4UCnExyxxxHIIOLNLk2WP5AaQXTYDb1tovgHCy8lEUzQS9g1LAO+f2AX+SZudcAjgZOOeJ3jkHJ0zggNpfYEZnU63wHeoAAAAASUVORK5CYII=<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L563" class="blob-num js-line-number" data-line-number="563"></td>
        <td id="LC563" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L564" class="blob-num js-line-number" data-line-number="564"></td>
        <td id="LC564" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L565" class="blob-num js-line-number" data-line-number="565"></td>
        <td id="LC565" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>audio<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L566" class="blob-num js-line-number" data-line-number="566"></td>
        <td id="LC566" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAIsSURBVDjLjZNfa9NQGIdnP4cDv8Nkn8PL6UfwSgQZOoSBYkUvZLN1lMFArQyHrsIuWkE3ug2t1K3O0LXrZotdlzZp0qZp/qc9P8852qyyigs8F8nJ7znveZN3DMAYg14XKROUyf9wiRIKckOCCcdxNN/3+71eD6Og64hEInPDkmHBJAsbhgHTNAM6nQ7a7TYkSeKSer2OaDQaSAbhC7efJGY28gZWPrUQTyt4l2lCKLfR7XahaRpkWeYCy7LANonFYr8lqzt26PUXIxzf7pCfioeS5EI2fVQkG+GVH0hlRVqFjmazeeZIvCc0PBXf1ohu96GZBEnBQMMmcAjgeH3cWRKQyTf4URRF4ZWIongqoOFURXZpUEOt1YNm+BzDI6AeFKo6IqsF3g9d13k/VFU9FSytK9V8zUJiR0WbBh+/2cVich+trodvNQeFEwvTsa/8C7Dzs54wUSBYeN+ofq+ageDZmoBX64dQdRcbByaEqoGbTzPwPA+u63IJIxDMrR2nDkUTR6oPxSJ8ZxYuNlxsHtnYLal48DIH+om5gMGqCQSP3lam7i+XSMfp40AFsjWCrbKHdMlGpeng2uxHpHM1XgGDhf8S3Fsuhe4+3w9PL+6RvbKGguhAODaRLSq4OvsBL5JFvutAMCAQDH6kK9fnZyKJAm4tZHFj/jMexnPYzJ3w0kdxRsBu6EPyrzkYQT8Q/JFcpqWabOE8Yfpul0/vkGCcSc4xzgPY6I//AmC87eKq4rrzAAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L567" class="blob-num js-line-number" data-line-number="567"></td>
        <td id="LC567" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L568" class="blob-num js-line-number" data-line-number="568"></td>
        <td id="LC568" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L569" class="blob-num js-line-number" data-line-number="569"></td>
        <td id="LC569" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L570" class="blob-num js-line-number" data-line-number="570"></td>
        <td id="LC570" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>favicon<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L571" class="blob-num js-line-number" data-line-number="571"></td>
        <td id="LC571" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			$img[&#39;data&#39;] = &#39;AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAL59VY+9fFS1vHtT77p5U/+2d1H/tHZR/7F0UP+tck//qnFP/6hvTv+nbk3/pm5N/6RuTfGmbk3FAAAAAAAAAADAgFXf////////////////////////////////////////////////////////////////pm5N7QAAAAAAAAAAwoJY//////+vZyz/rWQr/61kK///////8OXe//Dl3v/w5d7/8OXe//Dl3v/w5d7//////6dvTv8AAAAAAAAAAMSGWv//////r2cs/82fdP+tZCv///////Dl3v/27+v/9u/r//bv6//27+v/8OXe//////+ocU//AAAAAAAAAADFhlv//////69nLP/NoHX/rWQr///////w5d7/9u/r//Xs5v/17Ob/9u/r//Dl3v//////rHJQ/wAAAAAAAAAAx4ha//////+0bjP/0KV+/7JsLv//////8OXe//bv6//17Ob/9ezm//bv6//w5d7//////7J2Uf8AAAAAAAAAAMiKW///////t3ZA/9Gmg/+2czj///////Dl3v/27+v/9u/r//bv6//27+v/8OXe//////+2eFP/AAAAAAAAAADKjFz//////7x/VP+6fUz/unxK///////w5d7/8OXe//Dl3v/w5d7/8OXe//Dl3v//////uXxU/wAAAAAAAAAAy45d/////////////////////////////////////////////////////////////////7x+Vf8AAAAAAAAAAMyQXvv/////7cSb/+3Em//txJv/7cSb/+3Em//txJv/7cSb/+3Em//txJv/7cSb//////++gVf/AAAAAAAAAADNkV/x/////+3EnP/02sH/9NrB//Tbwv/028L/9NvC//Tbwv/028L/9NvC/+3Em///////wYRY/wAAAAAAAAAAzpNf2f/////txJz/7cSc/+3EnP/txJv/7cSb/+3Em//txJv/7cSb/+3Em//txJv//////8aMYfkAAAAAAAAAAM6TX5v////////////////////////////////////////////////////////////////Wqon/AAAAAAAAAADOk19wzpNfkc6TX83Ok1//zZNf/82SX//MkF//zZJh/82TY//LkWH/y45f78qSZMvYrov/16yL/wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//8AAIABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAACAAQAAgAEAAIABAADAAQAA//8AAA==&#39;;</span></td>
      </tr>
      <tr>
        <td id="L572" class="blob-num js-line-number" data-line-number="572"></td>
        <td id="LC572" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>ico<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L573" class="blob-num js-line-number" data-line-number="573"></td>
        <td id="LC573" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L574" class="blob-num js-line-number" data-line-number="574"></td>
        <td id="LC574" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L575" class="blob-num js-line-number" data-line-number="575"></td>
        <td id="LC575" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">		<span class="pl-k">default</span>:</span></td>
      </tr>
      <tr>
        <td id="L576" class="blob-num js-line-number" data-line-number="576"></td>
        <td id="LC576" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAC4SURBVCjPdZFbDsIgEEWnrsMm7oGGfZrohxvU+Iq1TyjU60Bf1pac4Yc5YS4ZAtGWBMk/drQBOVwJlZrWYkLhsB8UV9K0BUrPGy9cWbng2CtEEUmLGppPjRwpbixUKHBiZRS0p+ZGhvs4irNEvWD8heHpbsyDXznPhYFOyTjJc13olIqzZCHBouE0FRMUjA+s1gTjaRgVFpqRwC8mfoXPPEVPS7LbRaJL2y7bOifRCTEli3U7BMWgLzKlW/CuebZPAAAAAElFTkSuQmCC<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L577" class="blob-num js-line-number" data-line-number="577"></td>
        <td id="LC577" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s"><span class="pl-pds">&#39;</span>png<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L578" class="blob-num js-line-number" data-line-number="578"></td>
        <td id="LC578" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">			<span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L579" class="blob-num js-line-number" data-line-number="579"></td>
        <td id="LC579" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	}</span></td>
      </tr>
      <tr>
        <td id="L580" class="blob-num js-line-number" data-line-number="580"></td>
        <td id="LC580" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L581" class="blob-num js-line-number" data-line-number="581"></td>
        <td id="LC581" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c1">header</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>Content-type: image/<span class="pl-pds">&#39;</span></span><span class="pl-k">.</span><span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>]);</span></td>
      </tr>
      <tr>
        <td id="L582" class="blob-num js-line-number" data-line-number="582"></td>
        <td id="LC582" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c1">print</span> <span class="pl-c1">base64_decode</span>(<span class="pl-smi">$img</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>data<span class="pl-pds">&#39;</span></span>]);</span></td>
      </tr>
      <tr>
        <td id="L583" class="blob-num js-line-number" data-line-number="583"></td>
        <td id="LC583" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">exit</span>;</span></td>
      </tr>
      <tr>
        <td id="L584" class="blob-num js-line-number" data-line-number="584"></td>
        <td id="LC584" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L585" class="blob-num js-line-number" data-line-number="585"></td>
        <td id="LC585" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L586" class="blob-num js-line-number" data-line-number="586"></td>
        <td id="LC586" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L587" class="blob-num js-line-number" data-line-number="587"></td>
        <td id="LC587" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L588" class="blob-num js-line-number" data-line-number="588"></td>
        <td id="LC588" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* encode urls for transport */</span></span></td>
      </tr>
      <tr>
        <td id="L589" class="blob-num js-line-number" data-line-number="589"></td>
        <td id="LC589" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">function</span> <span class="pl-en">url_encode</span>(<span class="pl-smi">$url</span>) {</span></td>
      </tr>
      <tr>
        <td id="L590" class="blob-num js-line-number" data-line-number="590"></td>
        <td id="LC590" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">return</span> <span class="pl-c1">eregi_replace</span>(<span class="pl-s"><span class="pl-pds">&#39;</span>[+]<span class="pl-pds">&#39;</span></span>,<span class="pl-s"><span class="pl-pds">&#39;</span>%20<span class="pl-pds">&#39;</span></span>,<span class="pl-c1">urlencode</span>(<span class="pl-smi">$url</span>));</span></td>
      </tr>
      <tr>
        <td id="L591" class="blob-num js-line-number" data-line-number="591"></td>
        <td id="LC591" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L592" class="blob-num js-line-number" data-line-number="592"></td>
        <td id="LC592" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L593" class="blob-num js-line-number" data-line-number="593"></td>
        <td id="LC593" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L594" class="blob-num js-line-number" data-line-number="594"></td>
        <td id="LC594" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* read image for storage */</span></span></td>
      </tr>
      <tr>
        <td id="L595" class="blob-num js-line-number" data-line-number="595"></td>
        <td id="LC595" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">function</span> <span class="pl-en">readimg</span>(<span class="pl-smi">$img</span>) {</span></td>
      </tr>
      <tr>
        <td id="L596" class="blob-num js-line-number" data-line-number="596"></td>
        <td id="LC596" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-c1">echo</span> <span class="pl-c1">base64_encode</span>(<span class="pl-c1">file_get_contents</span>(<span class="pl-smi">$img</span>));</span></td>
      </tr>
      <tr>
        <td id="L597" class="blob-num js-line-number" data-line-number="597"></td>
        <td id="LC597" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L598" class="blob-num js-line-number" data-line-number="598"></td>
        <td id="LC598" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L599" class="blob-num js-line-number" data-line-number="599"></td>
        <td id="LC599" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L600" class="blob-num js-line-number" data-line-number="600"></td>
        <td id="LC600" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-c">/* for security reasons, keep the read case commented out when you are not using it */</span></span></td>
      </tr>
      <tr>
        <td id="L601" class="blob-num js-line-number" data-line-number="601"></td>
        <td id="LC601" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"><span class="pl-k">switch</span>(<span class="pl-smi">$_GET</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>p<span class="pl-pds">&#39;</span></span>]) {</span></td>
      </tr>
      <tr>
        <td id="L602" class="blob-num js-line-number" data-line-number="602"></td>
        <td id="LC602" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>source<span class="pl-pds">&#39;</span></span>: showsource(<span class="pl-smi">$_GET</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>file<span class="pl-pds">&#39;</span></span>]); <span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L603" class="blob-num js-line-number" data-line-number="603"></td>
        <td id="LC603" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>thumb<span class="pl-pds">&#39;</span></span>: makethumb(<span class="pl-c1">base64_decode</span>(<span class="pl-smi">$_GET</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>file<span class="pl-pds">&#39;</span></span>]),<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>THUMB_HEIGHT<span class="pl-pds">&#39;</span></span>],<span class="pl-smi">$GLOBALS</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>CONFIG<span class="pl-pds">&#39;</span></span>][<span class="pl-s"><span class="pl-pds">&#39;</span>THUMB_WIDTH<span class="pl-pds">&#39;</span></span>]); <span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L604" class="blob-num js-line-number" data-line-number="604"></td>
        <td id="LC604" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>mime<span class="pl-pds">&#39;</span></span>: getmimefile(<span class="pl-smi">$_GET</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>type<span class="pl-pds">&#39;</span></span>]); <span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L605" class="blob-num js-line-number" data-line-number="605"></td>
        <td id="LC605" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>logo<span class="pl-pds">&#39;</span></span>: getmimefile(<span class="pl-s"><span class="pl-pds">&#39;</span>logo<span class="pl-pds">&#39;</span></span>); <span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L606" class="blob-num js-line-number" data-line-number="606"></td>
        <td id="LC606" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>favicon<span class="pl-pds">&#39;</span></span>: getmimefile(<span class="pl-s"><span class="pl-pds">&#39;</span>favicon<span class="pl-pds">&#39;</span></span>); <span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L607" class="blob-num js-line-number" data-line-number="607"></td>
        <td id="LC607" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">case</span> <span class="pl-s"><span class="pl-pds">&#39;</span>read<span class="pl-pds">&#39;</span></span>: readimg(<span class="pl-smi">$_GET</span>[<span class="pl-s"><span class="pl-pds">&#39;</span>img<span class="pl-pds">&#39;</span></span>]); <span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L608" class="blob-num js-line-number" data-line-number="608"></td>
        <td id="LC608" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">	<span class="pl-k">default</span>: listdir(<span class="pl-smi">$dir</span>); <span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L609" class="blob-num js-line-number" data-line-number="609"></td>
        <td id="LC609" class="blob-code blob-code-inner js-file-line"><span class="pl-s1">}</span></td>
      </tr>
      <tr>
        <td id="L610" class="blob-num js-line-number" data-line-number="610"></td>
        <td id="LC610" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span></td>
      </tr>
      <tr>
        <td id="L611" class="blob-num js-line-number" data-line-number="611"></td>
        <td id="LC611" class="blob-code blob-code-inner js-file-line"><span class="pl-s1"></span><span class="pl-pse"><span class="pl-s1">?</span>&gt;</span></td>
      </tr>
</table>

  </div>

</div>

<button type="button" data-facebox="#jump-to-line" data-facebox-class="linejump" data-hotkey="l" class="d-none">Jump to Line</button>
<div id="jump-to-line" style="display:none">
  <!-- </textarea> --><!-- '"` --><form accept-charset="UTF-8" action="" class="js-jump-to-line-form" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
    <input class="form-control linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" aria-label="Jump to line" autofocus>
    <button type="submit" class="btn">Go</button>
</form></div>

  </div>
  <div class="modal-backdrop js-touch-events"></div>
</div>


    </div>
  </div>

    </div>

        <div class="container site-footer-container">
  <div class="site-footer" role="contentinfo">
    <ul class="site-footer-links float-right">
        <li><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact GitHub</a></li>
      <li><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li><a href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
      <li><a href="https://shop.github.com" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
        <li><a href="https://github.com/blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a href="https://github.com/about" data-ga-click="Footer, go to about, text:about">About</a></li>

    </ul>

    <a href="https://github.com" aria-label="Homepage" class="site-footer-mark" title="GitHub">
      <svg aria-hidden="true" class="octicon octicon-mark-github" height="24" version="1.1" viewBox="0 0 16 16" width="24"><path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg>
</a>
    <ul class="site-footer-links">
      <li>&copy; 2016 <span title="0.10754s from github-fe118-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
        <li><a href="https://help.github.com" data-ga-click="Footer, go to help, text:help">Help</a></li>
    </ul>
  </div>
</div>



    

    <div id="ajax-error-message" class="ajax-error-message flash flash-error">
      <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"></path></svg>
      <button type="button" class="flash-close js-flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
        <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
      </button>
      You can't perform that action at this time.
    </div>


      
      <script crossorigin="anonymous" integrity="sha256-dOKIA1HONo2PClLxKnRStCK+9jl9VHfYEgIH6nnw39k=" src="https://assets-cdn.github.com/assets/frameworks-74e2880351ce368d8f0a52f12a7452b422bef6397d5477d8120207ea79f0dfd9.js"></script>
      <script async="async" crossorigin="anonymous" integrity="sha256-KlkbUaRDjHo+ObgtMRneXYiUvwmuuRSPwFdjLHoqyp8=" src="https://assets-cdn.github.com/assets/github-2a591b51a4438c7a3e39b82d3119de5d8894bf09aeb9148fc057632c7a2aca9f.js"></script>
      
      
      
      
      
      
    <div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner d-none">
      <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"></path></svg>
      <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
      <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
    </div>
    <div class="facebox" id="facebox" style="display:none;">
  <div class="facebox-popup">
    <div class="facebox-content" role="dialog" aria-labelledby="facebox-header" aria-describedby="facebox-description">
    </div>
    <button type="button" class="facebox-close js-facebox-close" aria-label="Close modal">
      <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"></path></svg>
    </button>
  </div>
</div>

  </body>
</html>

