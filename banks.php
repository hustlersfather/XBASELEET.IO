<!DOCTYPE html><html lang="en" style="height: auto;"><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<title>Boxes Components | AdminLTE v3.2 Documentation</title>
<meta name="generator" content="Jekyll v4.2.1">
<meta property="og:title" content="Boxes Components">
<meta property="og:locale" content="en_US">
<meta name="description" content="AdminLTE v3.2 Documentation">
<meta property="og:description" content="AdminLTE v3.2 Documentation">
<link rel="canonical" href="boxes.html">
<meta property="og:url" content="https://adminlte.io/docs/3.2/components/boxes.html">
<meta property="og:site_name" content="AdminLTE v3.2 Documentation">
<meta name="twitter:card" content="summary">
<meta property="twitter:title" content="Boxes Components">
<script defer="" referrerpolicy="origin" src="../../../cdn-cgi/zaraz/s%EF%B9%96z=JTdCJTIyZXhlY3V0ZWQlMjIlM0ElNUIlNUQlMkMlMjJ0JTIyJTNBJTIyQm94ZXMlMjBDb21wb25lbnRzJTIwJTdDJTIwQWRtaW5MVEUlMjB2My4yJTIwRG9jdW1lbnRhdGlvbiUyMiUyQyUyMnglMjIlM0EwLjUwNzcwMjM5MDUwMDI5MTIlMkMlMjJ3JTIyJTNBMzkwJTJDJTIyaCUyMiUzQTg0NCUyQyUyMmo_20db7318fc823243.js"></script><script type="application/ld+json">
{"headline":"Boxes Components","url":"https://adminlte.io/docs/3.2/components/boxes.html","@type":"WebPage","description":"AdminLTE v3.2 Documentation","@context":"https://schema.org"}</script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
<link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<link rel="stylesheet" href="../assets/css/docs.css">
<link rel="stylesheet" href="../assets/css/highlighter.css">
<link rel="stylesheet" href="../assets/css/adminlte.min.css">
<script nonce="19dc2c31-50dd-4dae-91fb-a808ca6db344">(function(w,d){!function(dp,dq,dr,ds){dp[dr]=dp[dr]||{};dp[dr].executed=[];dp.zaraz={deferred:[],listeners:[]};dp.zaraz.q=[];dp.zaraz._f=function(dt){return async function(){var du=Array.prototype.slice.call(arguments);dp.zaraz.q.push({m:dt,a:du})}};for(const dv of["track","set","debug"])dp.zaraz[dv]=dp.zaraz._f(dv);dp.zaraz.init=()=>{var dw=dq.getElementsByTagName(ds)[0],dx=dq.createElement(ds),dy=dq.getElementsByTagName("title")[0];dy&&(dp[dr].t=dq.getElementsByTagName("title")[0].text);dp[dr].x=Math.random();dp[dr].w=dp.screen.width;dp[dr].h=dp.screen.height;dp[dr].j=dp.innerHeight;dp[dr].e=dp.innerWidth;dp[dr].l=dp.location.href;dp[dr].r=dq.referrer;dp[dr].k=dp.screen.colorDepth;dp[dr].n=dq.characterSet;dp[dr].o=(new Date).getTimezoneOffset();if(dp.dataLayer)for(const dC of Object.entries(Object.entries(dataLayer).reduce(((dD,dE)=>({...dD[1],...dE[1]})),{})))zaraz.set(dC[0],dC[1],{scope:"page"});dp[dr].q=[];for(;dp.zaraz.q.length;){const dF=dp.zaraz.q.shift();dp[dr].q.push(dF)}dx.defer=!0;for(const dG of[localStorage,sessionStorage])Object.keys(dG||{}).filter((dI=>dI.startsWith("_zaraz_"))).forEach((dH=>{try{dp[dr]["z_"+dH.slice(7)]=JSON.parse(dG.getItem(dH))}catch{dp[dr]["z_"+dH.slice(7)]=dG.getItem(dH)}}));dx.referrerPolicy="origin";dx.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(dp[dr])));dw.parentNode.insertBefore(dx,dw)};["complete","interactive"].includes(dq.readyState)?zaraz.init():dp.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="sidebar-mini layout-fixed layout-navbar-fixed sidebar-closed sidebar-collapse dark-mode" style="height: auto;">
<div class="wrapper"><div class="preloader flex-column justify-content-center align-items-center" style="height: 0px;">
<img class="animation__shake" src="../assets/img/AdminLTELogo.webp" alt="AdminLTELogo" height="60" width="60" style="display: none;">
</div>
<nav class="main-header navbar navbar-expand navbar-dark">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
</li>
<li class="nav-item dropdown">
<a class="nav-link bg-info rounded dropdown-toggle" href="#" id="navbarVersionDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
v3.2
</a>
<div class="dropdown-menu py-0" aria-labelledby="navbarVersionDropdown">
<a class="dropdown-item bg-info disabled" href="#">v3.2</a>
<a class="dropdown-item" href="../../3.1/index.html">v3.1</a>
<a class="dropdown-item" href="../../3.0/index.html">v3.0</a>
</div>
</li>
</ul>
<ul class="navbar-nav ml-auto">

<li class="nav-item">
<div class="theme-switch-wrapper nav-link">
<label class="theme-switch" for="checkbox">
<input type="checkbox" id="checkbox">
<span class="slider round"></span>
</label>
</div>
</li>

</ul>


</nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<a href="../index.html" class="brand-link logo-switch">
<img src="../assets/img/logo-xs.webp" alt="AdminLTE Docs Logo Small" class="brand-image-xl logo-xs">
<img src="../assets/img/logo-xl.webp" alt="AdminLTE Docs Logo Large" class="brand-image-xs logo-xl" style="left: 12px">
</a>
<div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 506px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible os-viewport-native-scrollbars-overlaid" style="overflow-y: scroll;"><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
<div class="form-inline mt-2">
<div class="input-group" data-widget="sidebar-search">
<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-search fa-fw"></i>
</button>
</div>
</div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
</div>
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu">
<li class="nav-item">
<a href="../index.html" class="nav-link">
<i class="nav-icon fas fa-microchip"></i>
<p>
Installation
</p>
</a>
</li>
<li class="nav-item">
<a href="../dependencies.html" class="nav-link">
<i class="nav-icon fas fa-handshake"></i>
<p>
Dependencies &amp; Plugins
</p>
</a>
</li>
<li class="nav-item">
<a href="../layout.html" class="nav-link">
<i class="nav-icon fas fa-copy"></i>
<p>
Layout
</p>
</a>
</li>
<li class="nav-item menu-open">
<a href="https://adminlte.io/docs/3.2/components" class="nav-link active">
<i class="nav-icon fas fa-th"></i>
<p>
Components
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="main-header.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Main Header</p>
</a>
</li><li class="nav-item">
<a href="main-sidebar.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Main Sidebar</p>
</a>
</li><li class="nav-item">
<a href="control-sidebar.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Control Sidebar</p>
</a>
</li><li class="nav-item">
<a href="cards.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Card</p>
</a>
</li><li class="nav-item">
<a href="boxes.html" class="nav-link active">
<i class="far fa-circle nav-icon"></i>
<p>Small-/ Info-Box</p>
</a>
</li><li class="nav-item">
<a href="direct-chat.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Direct Chat</p>
</a>
</li><li class="nav-item">
<a href="timeline.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Timeline</p>
</a>
</li><li class="nav-item">
<a href="ribbons.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Ribbons</p>
</a>
</li><li class="nav-item">
<a href="miscellaneous.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Miscellaneous</p>
</a>
</li><li class="nav-item">
<a href="plugins.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Plugins</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="https://adminlte.io/docs/3.2/javascript" class="nav-link">
<i class="nav-icon fas fa-code"></i>
<p>
JavaScript
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="../javascript/layout.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Layout</p>
</a>
</li><li class="nav-item">
<a href="../javascript/push-menu.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Push Menu</p>
</a>
</li><li class="nav-item">
<a href="../javascript/treeview.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Treeview</p>
</a>
</li><li class="nav-item">
<a href="../javascript/card-widget.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Card Widget</p>
</a>
</li><li class="nav-item">
<a href="../javascript/card-refresh.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>CardRefresh</p>
</a>
</li><li class="nav-item">
<a href="../javascript/control-sidebar.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Control Sidebar</p>
</a>
</li><li class="nav-item">
<a href="../javascript/direct-chat.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Direct Chat</p>
</a>
</li><li class="nav-item">
<a href="../javascript/todo-list.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Todo List</p>
</a>
</li><li class="nav-item">
<a href="../javascript/toasts.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Toasts</p>
</a>
</li><li class="nav-item">
<a href="../javascript/sidebar-search.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Sidebar Search</p>
</a>
</li><li class="nav-item">
<a href="../javascript/expandable-tables.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Expandable Tables</p>
</a>
</li><li class="nav-item">
<a href="../javascript/iframe.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>IFrame</p>
</a>
</li><li class="nav-item">
<a href="../javascript/navbar-search.html" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Navbar Search</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="../browser-support.html" class="nav-link">
<i class="nav-icon fab fa-chrome"></i>
<p>
Browser Support
</p>
</a>
</li>
<li class="nav-item">
<a href="../implementations.html" class="nav-link">
<i class="nav-icon fas fa-bookmark"></i>
<p>
Implementations
</p>
</a>
</li>
<li class="nav-item">
<a href="../additional-styles.html" class="nav-link">
<i class="nav-icon fas fa-mortar-pestle"></i>
<p>
Additional Styles
</p>
</a>
</li>
<li class="nav-item">
<a href="../upgrade-guide.html" class="nav-link">
<i class="nav-icon fas fa-hand-point-up"></i>
<p>
Upgrade Guide
</p>
</a>
</li>
<li class="nav-item">
<a href="../how-to-contribute.html" class="nav-link">
<i class="nav-icon fas fa-hands-helping"></i>
<p>
Contributing Guide
</p>
</a>
</li>
<li class="nav-item">
<a href="../faq.html" class="nav-link">
<i class="nav-icon fas fa-question-circle"></i>
<p>
FAQ
</p>
</a>
</li>
<li class="nav-item">
<a href="../license.html" class="nav-link">
<i class="nav-icon fas fa-file-contract"></i>
<p>
License
</p>
</a>
</li>
</ul>
</nav>
</div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 31.229235%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
</aside>
<div class="content-wrapper px-4 py-2" style="min-height: 483px;">
<div class="content-header">
<h1>Boxes Components</h1>
</div>
<div class="content px-2">
<p>There are two types of boxes, info boxes &amp; small boxes. Both boxes are used to display statistical snippets.</p>
<h5 class="text-bold text-dark mt-4" id="info-box">Info Box</h5>
<div class="row">
<div class="col-md-4 col-sm-6 col-12">
<div class="info-box">
<span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
<div class="info-box-content">
<span class="info-box-text">Messages</span>
<span class="info-box-number">1,410</span>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="info-box bg-success">
<span class="info-box-icon"><i class="far fa-flag"></i></span>
<div class="info-box-content">
<span class="info-box-text">Bookmarks</span>
<span class="info-box-number">410</span>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="info-box bg-gradient-warning">
<span class="info-box-icon"><i class="far fa-copy"></i></span>
<div class="info-box-content">
<span class="info-box-text">Uploads</span>
<span class="info-box-number">13,648</span>
</div>
</div>
</div>
</div>
<div class="row">
<div class="language-html col-md-4 col-sm-6 col-12 highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"info-box"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"info-box-icon bg-info"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"far fa-envelope"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"info-box-content"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"info-box-text"</span><span class="nt">&gt;</span>Messages<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"info-box-number"</span><span class="nt">&gt;</span>1,410<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div> </div>
<div class="language-html col-md-4 col-sm-6 col-12 highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"info-box bg-success"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"info-box-icon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"far fa-flag"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"info-box-content"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"info-box-text"</span><span class="nt">&gt;</span>Bookmarks<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"info-box-number"</span><span class="nt">&gt;</span>410<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div> </div>
<div class="language-html col-md-4 col-sm-6 col-12 highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"info-box bg-gradient-warning"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"info-box-icon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"far fa-copy"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"info-box-content"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"info-box-text"</span><span class="nt">&gt;</span>Uploads<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"info-box-number"</span><span class="nt">&gt;</span>13,648<span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div> </div>
</div>
<blockquote class="quote-danger">
<h5 id="note">Note!</h5>
<p>To wrap the text in to a new line add to the info-box-text the class text-wrap.
To truncate the text with … add to the info-box-content the class text-truncate. (Here you should add a tooltip to display the whole pharse)</p>
</blockquote>
<h5 class="text-bold text-dark mt-4" id="info-box-with-progress-bar">Info Box with Progress Bar</h5>
<div class="row">
<div class="col-md-4 col-sm-6 col-12">
<div class="info-box">
<span class="info-box-icon bg-info"><i class="far fa-bookmark"></i></span>
<div class="info-box-content">
<span class="info-box-text">Bookmarks</span>
<span class="info-box-number">41,410</span>
<div class="progress">
<div class="progress-bar bg-info" style="width: 70%"></div>
</div>
<span class="progress-description">
70% Increase in 30 Days
</span>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="info-box bg-success">
<span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
<div class="info-box-content">
<span class="info-box-text">Likes</span>
<span class="info-box-number">41,410</span>
<div class="progress">
<div class="progress-bar" style="width: 70%"></div>
</div>
<span class="progress-description">
70% Increase in 30 Days
</span>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="info-box bg-gradient-warning">
<span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
<div class="info-box-content">
<span class="info-box-text">Events</span>
<span class="info-box-number">41,410</span>
<div class="progress">
<div class="progress-bar" style="width: 70%"></div>
</div>
<span class="progress-description">
70% Increase in 30 Days
</span>
</div>
</div>
</div>
</div>
<div class="row">
<div class="language-html col-md-4 col-sm-6 col-12 max-height-300 highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"info-box"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"info-box-icon bg-info"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"far fa-bookmark"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"info-box-content"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"info-box-text"</span><span class="nt">&gt;</span>Bookmarks<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"info-box-number"</span><span class="nt">&gt;</span>41,410<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar bg-info"</span> <span class="na">style=</span><span class="s">"width: 70%"</span><span class="nt">&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-description"</span><span class="nt">&gt;</span>
      70% Increase in 30 Days
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div> </div>
<div class="language-html col-md-4 col-sm-6 col-12 max-height-300 highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"info-box bg-success"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"info-box-icon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"far fa-thumbs-up"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"info-box-content"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"info-box-text"</span><span class="nt">&gt;</span>Likes<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"info-box-number"</span><span class="nt">&gt;</span>41,410<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">style=</span><span class="s">"width: 70%"</span><span class="nt">&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-description"</span><span class="nt">&gt;</span>
      70% Increase in 30 Days
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div> </div>
<div class="language-html col-md-4 col-sm-6 col-12 max-height-300 highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"info-box bg-gradient-warning"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"info-box-icon"</span><span class="nt">&gt;&lt;i</span> <span class="na">class=</span><span class="s">"far fa-calendar-alt"</span><span class="nt">&gt;&lt;/i&gt;&lt;/span&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"info-box-content"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"info-box-text"</span><span class="nt">&gt;</span>Events<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"info-box-number"</span><span class="nt">&gt;</span>41,410<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">style=</span><span class="s">"width: 70%"</span><span class="nt">&gt;&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-description"</span><span class="nt">&gt;</span>
      70% Increase in 30 Days
    <span class="nt">&lt;/span&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div> </div>
</div>
<h5 class="text-bold text-dark mt-4" id="small-box">Small Box</h5>
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6 col-12">
<div class="small-box bg-info">
<div class="inner">
<h3>150</h3>
<p>New Orders</p>
</div>
<div class="icon">
<i class="fas fa-shopping-cart"></i>
</div>
<a href="#" class="small-box-footer">
More info <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 col-12">
<div class="small-box bg-gradient-success">
<div class="inner">
<h3>44</h3>
<p>User Registrations</p>
</div>
<div class="icon">
<i class="fas fa-user-plus"></i>
</div>
<a href="#" class="small-box-footer">
More info <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>
</div>
<div class="row">
<div class="language-html col-md-4 col-sm-6 col-12 max-height-300 highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"small-box bg-info"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"inner"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h3&gt;</span>150<span class="nt">&lt;/h3&gt;</span>
    <span class="nt">&lt;p&gt;</span>New Orders<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fas fa-shopping-cart"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"small-box-footer"</span><span class="nt">&gt;</span>
    More info <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fas fa-arrow-circle-right"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div> </div>
<div class="language-html col-md-4 col-sm-6 col-12 max-height-300 highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"small-box bg-gradient-success"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"inner"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h3&gt;</span>44<span class="nt">&lt;/h3&gt;</span>
    <span class="nt">&lt;p&gt;</span>User Registrations<span class="nt">&lt;/p&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"icon"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fas fa-user-plus"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"small-box-footer"</span><span class="nt">&gt;</span>
    More info <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fas fa-arrow-circle-right"</span><span class="nt">&gt;&lt;/i&gt;</span>
  <span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div> </div>
</div>
<h5 class="text-bold text-dark mt-5" id="loading-style">Loading Style</h5>
<p>To simulate a loading state, simply place this code before the <code class="language-plaintext highlighter-rouge">.info-box</code> / <code class="language-plaintext highlighter-rouge">.small-box</code> closing tag.</p>
<blockquote class="quote-info">
<h5 id="tip">Tip!</h5>
<p>We recommend <code class="language-plaintext highlighter-rouge">.fa-2x</code> for Info Boxes and <code class="language-plaintext highlighter-rouge">.fa-3x</code> for Small Boxes to get a nicely sized loading icon, <br> like in this documentation.</p>
</blockquote>
<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"overlay"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fas fa-2x fa-sync-alt fa-spin"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div></div>
<div class="row">
<div class="col-md-4 col-sm-6 col-12">
<div class="info-box clearfix">
<span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
<div class="info-box-content">
<span class="info-box-text">Messages</span>
<span class="info-box-number">1,410</span>
</div>
<div class="overlay">
<i class="fas fa-2x fa-sync-alt fa-spin"></i>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="info-box">
<span class="info-box-icon bg-info"><i class="far fa-bookmark"></i></span>
<div class="info-box-content">
<span class="info-box-text">Bookmarks</span>
<span class="info-box-number">41,410</span>
<div class="progress">
<div class="progress-bar bg-info" style="width: 70%"></div>
</div>
<span class="progress-description">
70% Increase in 30 Days
</span>
</div>
<div class="overlay">
<i class="fas fa-2x fa-sync-alt fa-spin"></i>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 col-12">
<div class="small-box bg-info">
<div class="inner">
<h3>150</h3>
<p>New Orders</p>
</div>
<div class="icon">
<i class="fas fa-shopping-cart"></i>
</div>
<a href="#" class="small-box-footer">
More info <i class="fas fa-arrow-circle-right"></i>
</a>
<div class="overlay">
<i class="fas fa-3x fa-sync-alt fa-spin"></i>
</div>
</div>
</div>
</div>
<p>You can also use a dark loading style with adding <code class="language-plaintext highlighter-rouge">.dark</code> to <code class="language-plaintext highlighter-rouge">.overlay</code> like this code.</p>
<div class="language-html highlighter-rouge"><div class="highlight"><pre class="highlight"><code><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"overlay dark"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"fas fa-2x fa-sync-alt fa-spin"</span><span class="nt">&gt;&lt;/i&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div></div>
<div class="row">
<div class="col-md-4 col-sm-6 col-12">
<div class="info-box clearfix">
<span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
<div class="info-box-content">
<span class="info-box-text">Messages</span>
<span class="info-box-number">1,410</span>
</div>
<div class="overlay dark">
<i class="fas fa-2x fa-sync-alt fa-spin"></i>
</div>
</div>
</div>
<div class="col-md-4 col-sm-6 col-12">
<div class="info-box">
<span class="info-box-icon bg-info"><i class="far fa-bookmark"></i></span>
<div class="info-box-content">
<span class="info-box-text">Bookmarks</span>
<span class="info-box-number">41,410</span>
<div class="progress">
<div class="progress-bar bg-info" style="width: 70%"></div>
</div>
<span class="progress-description">
70% Increase in 30 Days
</span>
</div>
<div class="overlay dark">
<i class="fas fa-2x fa-sync-alt fa-spin"></i>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6 col-12">
<div class="small-box bg-info">
<div class="inner">
<h3>150</h3>
<p>New Orders</p>
</div>
<div class="icon">
<i class="fas fa-shopping-cart"></i>
</div>
<a href="#" class="small-box-footer">
More info <i class="fas fa-arrow-circle-right"></i>
</a>
<div class="overlay dark">
<i class="fas fa-3x fa-sync-alt fa-spin"></i>
</div>
</div>
</div>
</div>
</div>
</div>
<footer class="main-footer">
<div class="float-right d-none d-sm-inline">
v3.2
</div>
<strong>Copyright © 2014-2022 <a href="../../../index.html">AdminLTE.io</a>.</strong> All rights reserved.
</footer>
<div id="sidebar-overlay"></div></div>
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="../assets/js/adminlte.min.js"></script>
<script>
  var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
  var currentTheme = localStorage.getItem('theme');
  var mainHeader = document.querySelector('.main-header');

  if (currentTheme) {
    if (currentTheme === 'dark') {
      if (!document.body.classList.contains('dark-mode')) {
        document.body.classList.add("dark-mode");
      }
      if (mainHeader.classList.contains('navbar-light')) {
        mainHeader.classList.add('navbar-dark');
        mainHeader.classList.remove('navbar-light');
      }
      toggleSwitch.checked = true;
    }
  }

  function switchTheme(e) {
    if (e.target.checked) {
      if (!document.body.classList.contains('dark-mode')) {
        document.body.classList.add("dark-mode");
      }
      if (mainHeader.classList.contains('navbar-light')) {
        mainHeader.classList.add('navbar-dark');
        mainHeader.classList.remove('navbar-light');
      }
      localStorage.setItem('theme', 'dark');
    } else {
      if (document.body.classList.contains('dark-mode')) {
        document.body.classList.remove("dark-mode");
      }
      if (mainHeader.classList.contains('navbar-dark')) {
        mainHeader.classList.add('navbar-light');
        mainHeader.classList.remove('navbar-dark');
      }
      localStorage.setItem('theme', 'light');
    }
  }

  toggleSwitch.addEventListener('change', switchTheme, false);
</script>


</body></html>