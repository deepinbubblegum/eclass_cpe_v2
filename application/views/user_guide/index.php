

<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>CodeIgniter User Guide &mdash; CodeIgniter 3.1.11 documentation</title>




    <link rel="shortcut icon" href="_static/ci-icon.ico"/>



  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Roboto+Slab:400,700|Inconsolata:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>









    <link rel="stylesheet" href="_static/css/citheme.css" type="text/css" />



        <link rel="index" title="Index"
              href="genindex.html"/>
        <link rel="search" title="Search" href="search.html"/>
    <link rel="top" title="CodeIgniter 3.1.11 documentation" href="#"/>
        <link rel="next" title="Welcome to CodeIgniter" href="general/welcome.html"/> 


  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

</head>

<body class="wy-body-for-nav" role="document">

  <div id="nav">
  <div id="nav_inner">
    
    
    
      <div id="pulldown-menu" class="ciNav">
        <ul>
<li class="toctree-l1"><a class="reference internal" href="general/welcome.html">Welcome to CodeIgniter</a></li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="installation/index.html">Installation Instructions</a><ul>
<li class="toctree-l2"><a class="reference internal" href="installation/downloads.html">Downloading CodeIgniter</a></li>
<li class="toctree-l2"><a class="reference internal" href="installation/index.html">Installation Instructions</a></li>
<li class="toctree-l2"><a class="reference internal" href="installation/upgrading.html">Upgrading From a Previous Version</a></li>
<li class="toctree-l2"><a class="reference internal" href="installation/troubleshooting.html">Troubleshooting</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="overview/index.html">CodeIgniter Overview</a><ul>
<li class="toctree-l2"><a class="reference internal" href="overview/getting_started.html">Getting Started</a></li>
<li class="toctree-l2"><a class="reference internal" href="overview/at_a_glance.html">CodeIgniter at a Glance</a></li>
<li class="toctree-l2"><a class="reference internal" href="overview/features.html">Supported Features</a></li>
<li class="toctree-l2"><a class="reference internal" href="overview/appflow.html">Application Flow Chart</a></li>
<li class="toctree-l2"><a class="reference internal" href="overview/mvc.html">Model-View-Controller</a></li>
<li class="toctree-l2"><a class="reference internal" href="overview/goals.html">Architectural Goals</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="tutorial/index.html">Tutorial</a><ul>
<li class="toctree-l2"><a class="reference internal" href="tutorial/static_pages.html">Static pages</a></li>
<li class="toctree-l2"><a class="reference internal" href="tutorial/news_section.html">News section</a></li>
<li class="toctree-l2"><a class="reference internal" href="tutorial/create_news_items.html">Create news items</a></li>
<li class="toctree-l2"><a class="reference internal" href="tutorial/conclusion.html">Conclusion</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="contributing/index.html">Contributing to CodeIgniter</a><ul>
<li class="toctree-l2"><a class="reference internal" href="documentation/index.html">Writing CodeIgniter Documentation</a></li>
<li class="toctree-l2"><a class="reference internal" href="DCO.html">Developer’s Certificate of Origin 1.1</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="general/index.html">General Topics</a><ul>
<li class="toctree-l2"><a class="reference internal" href="general/urls.html">CodeIgniter URLs</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/controllers.html">Controllers</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/reserved_names.html">Reserved Names</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/views.html">Views</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/models.html">Models</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/helpers.html">Helpers</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/libraries.html">Using CodeIgniter Libraries</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/creating_libraries.html">Creating Libraries</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/drivers.html">Using CodeIgniter Drivers</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/creating_drivers.html">Creating Drivers</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/core_classes.html">Creating Core System Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/ancillary_classes.html">Creating Ancillary Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/hooks.html">Hooks - Extending the Framework Core</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/autoloader.html">Auto-loading Resources</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/common_functions.html">Common Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/compatibility_functions.html">Compatibility Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/routing.html">URI Routing</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/errors.html">Error Handling</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/caching.html">Caching</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/profiling.html">Profiling Your Application</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/cli.html">Running via the CLI</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/managing_apps.html">Managing your Applications</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/environments.html">Handling Multiple Environments</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/alternative_php.html">Alternate PHP Syntax for View Files</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/security.html">Security</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/styleguide.html">PHP Style Guide</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="libraries/index.html">Libraries</a><ul>
<li class="toctree-l2"><a class="reference internal" href="libraries/benchmark.html">Benchmarking Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/caching.html">Caching Driver</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/calendar.html">Calendaring Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/cart.html">Shopping Cart Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/config.html">Config Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/email.html">Email Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/encrypt.html">Encrypt Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/encryption.html">Encryption Library</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/file_uploading.html">File Uploading Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/form_validation.html">Form Validation</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/ftp.html">FTP Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/image_lib.html">Image Manipulation Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/input.html">Input Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/javascript.html">Javascript Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/language.html">Language Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/loader.html">Loader Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/migration.html">Migrations Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/output.html">Output Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/pagination.html">Pagination Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/parser.html">Template Parser Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/security.html">Security Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/sessions.html">Session Library</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/table.html">HTML Table Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/trackback.html">Trackback Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/typography.html">Typography Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/unit_testing.html">Unit Testing Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/uri.html">URI Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/user_agent.html">User Agent Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/xmlrpc.html">XML-RPC and XML-RPC Server Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/zip.html">Zip Encoding Class</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="database/index.html">Database Reference</a><ul>
<li class="toctree-l2"><a class="reference internal" href="database/examples.html">Quick Start: Usage Examples</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/configuration.html">Database Configuration</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/connecting.html">Connecting to a Database</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/queries.html">Running Queries</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/results.html">Generating Query Results</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/helpers.html">Query Helper Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/query_builder.html">Query Builder Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/transactions.html">Transactions</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/metadata.html">Getting MetaData</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/call_function.html">Custom Function Calls</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/caching.html">Query Caching</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/forge.html">Database Manipulation with Database Forge</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/utilities.html">Database Utilities Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/db_driver_reference.html">Database Driver Reference</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="helpers/index.html">Helpers</a><ul>
<li class="toctree-l2"><a class="reference internal" href="helpers/array_helper.html">Array Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/captcha_helper.html">CAPTCHA Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/cookie_helper.html">Cookie Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/date_helper.html">Date Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/directory_helper.html">Directory Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/download_helper.html">Download Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/email_helper.html">Email Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/file_helper.html">File Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/form_helper.html">Form Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/html_helper.html">HTML Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/inflector_helper.html">Inflector Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/language_helper.html">Language Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/number_helper.html">Number Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/path_helper.html">Path Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/security_helper.html">Security Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/smiley_helper.html">Smiley Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/string_helper.html">String Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/text_helper.html">Text Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/typography_helper.html">Typography Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/url_helper.html">URL Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/xml_helper.html">XML Helper</a></li>
</ul>
</li>
</ul>

      </div>
    
      
  </div>
</div>
<div id="nav2">
  <a href="#" id="openToc">
    <img src="data:image/jpeg;base64,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" title="Toggle Table of Contents" alt="Toggle Table of Contents" />
  </a>
</div>

  <div class="wy-grid-for-nav">

    
    <nav data-toggle="wy-nav-shift" class="wy-nav-side">
      <div class="wy-side-nav-search">
        
          <a href="#" class="fa fa-home"> CodeIgniter</a>
        
        
<div role="search">
  <form id="rtd-search-form" class="wy-form" action="search.html" method="get">
    <input type="text" name="q" placeholder="Search docs" />
    <input type="hidden" name="check_keywords" value="yes" />
    <input type="hidden" name="area" value="default" />
  </form>
</div>
      </div>

      <div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main navigation">
        
          
          
              <ul>
<li class="toctree-l1"><a class="reference internal" href="general/welcome.html">Welcome to CodeIgniter</a></li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="installation/index.html">Installation Instructions</a><ul>
<li class="toctree-l2"><a class="reference internal" href="installation/downloads.html">Downloading CodeIgniter</a></li>
<li class="toctree-l2"><a class="reference internal" href="installation/index.html">Installation Instructions</a></li>
<li class="toctree-l2"><a class="reference internal" href="installation/upgrading.html">Upgrading From a Previous Version</a></li>
<li class="toctree-l2"><a class="reference internal" href="installation/troubleshooting.html">Troubleshooting</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="overview/index.html">CodeIgniter Overview</a><ul>
<li class="toctree-l2"><a class="reference internal" href="overview/getting_started.html">Getting Started</a></li>
<li class="toctree-l2"><a class="reference internal" href="overview/at_a_glance.html">CodeIgniter at a Glance</a></li>
<li class="toctree-l2"><a class="reference internal" href="overview/features.html">Supported Features</a></li>
<li class="toctree-l2"><a class="reference internal" href="overview/appflow.html">Application Flow Chart</a></li>
<li class="toctree-l2"><a class="reference internal" href="overview/mvc.html">Model-View-Controller</a></li>
<li class="toctree-l2"><a class="reference internal" href="overview/goals.html">Architectural Goals</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="tutorial/index.html">Tutorial</a><ul>
<li class="toctree-l2"><a class="reference internal" href="tutorial/static_pages.html">Static pages</a></li>
<li class="toctree-l2"><a class="reference internal" href="tutorial/news_section.html">News section</a></li>
<li class="toctree-l2"><a class="reference internal" href="tutorial/create_news_items.html">Create news items</a></li>
<li class="toctree-l2"><a class="reference internal" href="tutorial/conclusion.html">Conclusion</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="contributing/index.html">Contributing to CodeIgniter</a><ul>
<li class="toctree-l2"><a class="reference internal" href="documentation/index.html">Writing CodeIgniter Documentation</a></li>
<li class="toctree-l2"><a class="reference internal" href="DCO.html">Developer’s Certificate of Origin 1.1</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="general/index.html">General Topics</a><ul>
<li class="toctree-l2"><a class="reference internal" href="general/urls.html">CodeIgniter URLs</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/controllers.html">Controllers</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/reserved_names.html">Reserved Names</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/views.html">Views</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/models.html">Models</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/helpers.html">Helpers</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/libraries.html">Using CodeIgniter Libraries</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/creating_libraries.html">Creating Libraries</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/drivers.html">Using CodeIgniter Drivers</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/creating_drivers.html">Creating Drivers</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/core_classes.html">Creating Core System Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/ancillary_classes.html">Creating Ancillary Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/hooks.html">Hooks - Extending the Framework Core</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/autoloader.html">Auto-loading Resources</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/common_functions.html">Common Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/compatibility_functions.html">Compatibility Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/routing.html">URI Routing</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/errors.html">Error Handling</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/caching.html">Caching</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/profiling.html">Profiling Your Application</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/cli.html">Running via the CLI</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/managing_apps.html">Managing your Applications</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/environments.html">Handling Multiple Environments</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/alternative_php.html">Alternate PHP Syntax for View Files</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/security.html">Security</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/styleguide.html">PHP Style Guide</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="libraries/index.html">Libraries</a><ul>
<li class="toctree-l2"><a class="reference internal" href="libraries/benchmark.html">Benchmarking Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/caching.html">Caching Driver</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/calendar.html">Calendaring Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/cart.html">Shopping Cart Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/config.html">Config Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/email.html">Email Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/encrypt.html">Encrypt Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/encryption.html">Encryption Library</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/file_uploading.html">File Uploading Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/form_validation.html">Form Validation</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/ftp.html">FTP Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/image_lib.html">Image Manipulation Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/input.html">Input Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/javascript.html">Javascript Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/language.html">Language Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/loader.html">Loader Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/migration.html">Migrations Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/output.html">Output Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/pagination.html">Pagination Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/parser.html">Template Parser Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/security.html">Security Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/sessions.html">Session Library</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/table.html">HTML Table Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/trackback.html">Trackback Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/typography.html">Typography Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/unit_testing.html">Unit Testing Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/uri.html">URI Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/user_agent.html">User Agent Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/xmlrpc.html">XML-RPC and XML-RPC Server Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/zip.html">Zip Encoding Class</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="database/index.html">Database Reference</a><ul>
<li class="toctree-l2"><a class="reference internal" href="database/examples.html">Quick Start: Usage Examples</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/configuration.html">Database Configuration</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/connecting.html">Connecting to a Database</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/queries.html">Running Queries</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/results.html">Generating Query Results</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/helpers.html">Query Helper Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/query_builder.html">Query Builder Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/transactions.html">Transactions</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/metadata.html">Getting MetaData</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/call_function.html">Custom Function Calls</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/caching.html">Query Caching</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/forge.html">Database Manipulation with Database Forge</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/utilities.html">Database Utilities Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/db_driver_reference.html">Database Driver Reference</a></li>
</ul>
</li>
</ul>
<ul>
<li class="toctree-l1"><a class="reference internal" href="helpers/index.html">Helpers</a><ul>
<li class="toctree-l2"><a class="reference internal" href="helpers/array_helper.html">Array Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/captcha_helper.html">CAPTCHA Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/cookie_helper.html">Cookie Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/date_helper.html">Date Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/directory_helper.html">Directory Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/download_helper.html">Download Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/email_helper.html">Email Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/file_helper.html">File Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/form_helper.html">Form Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/html_helper.html">HTML Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/inflector_helper.html">Inflector Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/language_helper.html">Language Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/number_helper.html">Number Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/path_helper.html">Path Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/security_helper.html">Security Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/smiley_helper.html">Smiley Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/string_helper.html">String Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/text_helper.html">Text Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/typography_helper.html">Typography Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/url_helper.html">URL Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/xml_helper.html">XML Helper</a></li>
</ul>
</li>
</ul>

          
        
      </div>
      &nbsp;
    </nav>

    <section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">

      
      <nav class="wy-nav-top" role="navigation" aria-label="top navigation">
        <i data-toggle="wy-nav-top" class="fa fa-bars"></i>
        <a href="#">CodeIgniter</a>
      </nav>


      
      <div class="wy-nav-content">
        <div class="rst-content">
          <div role="navigation" aria-label="breadcrumbs navigation">
  <ul class="wy-breadcrumbs">
    <li><a href="#">Docs</a> &raquo;</li>
      
    <li>CodeIgniter User Guide</li>
    <li class="wy-breadcrumbs-aside">
      
    </li>
    <div style="float:right;margin-left:5px;" id="closeMe">
      <img title="Classic Layout" alt="classic layout" src="data:image/gif;base64,R0lGODlhFAAUAJEAAAAAADMzM////wAAACH5BAUUAAIALAAAAAAUABQAAAImlI+py+0PU5gRBRDM3DxbWoXis42X13USOLauUIqnlsaH/eY6UwAAOw==" />
    </div>
  </ul>
  <hr/>
</div>
          <div role="main" class="document">
            
  <div class="section" id="codeigniter-user-guide">
<h1>CodeIgniter User Guide<a class="headerlink" href="#codeigniter-user-guide" title="Permalink to this headline">¶</a></h1>
<ul class="simple">
<li><a class="reference internal" href="license.html"><span class="doc">License Agreement</span></a></li>
<li><a class="reference internal" href="changelog.html"><span class="doc">Change Log</span></a></li>
</ul>
<div class="contents local topic" id="contents">
<ul class="simple">
<li><a class="reference internal" href="#welcome" id="id1">Welcome</a></li>
<li><a class="reference internal" href="#basic-info" id="id2">Basic Info</a></li>
<li><a class="reference internal" href="#installation" id="id3">Installation</a></li>
<li><a class="reference internal" href="#introduction" id="id4">Introduction</a></li>
<li><a class="reference internal" href="#tutorial" id="id5">Tutorial</a></li>
<li><a class="reference internal" href="#contributing-to-codeigniter" id="id6">Contributing to CodeIgniter</a></li>
<li><a class="reference internal" href="#general-topics" id="id7">General Topics</a></li>
<li><a class="reference internal" href="#library-reference" id="id8">Library Reference</a></li>
<li><a class="reference internal" href="#database-reference" id="id9">Database Reference</a></li>
<li><a class="reference internal" href="#helper-reference" id="id10">Helper Reference</a></li>
</ul>
</div>
<div class="section" id="welcome">
<h2><a class="toc-backref" href="#id1">Welcome</a><a class="headerlink" href="#welcome" title="Permalink to this headline">¶</a></h2>
<div class="toctree-wrapper compound">
<ul>
<li class="toctree-l1"><a class="reference internal" href="general/welcome.html">Welcome to CodeIgniter</a></li>
</ul>
</div>
</div>
<div class="section" id="basic-info">
<h2><a class="toc-backref" href="#id2">Basic Info</a><a class="headerlink" href="#basic-info" title="Permalink to this headline">¶</a></h2>
<ul class="simple">
<li><a class="reference internal" href="general/requirements.html"><span class="doc">Server Requirements</span></a></li>
<li><a class="reference internal" href="general/credits.html"><span class="doc">Credits</span></a></li>
</ul>
</div>
<div class="section" id="installation">
<h2><a class="toc-backref" href="#id3">Installation</a><a class="headerlink" href="#installation" title="Permalink to this headline">¶</a></h2>
<div class="toctree-wrapper compound">
<ul>
<li class="toctree-l1"><a class="reference internal" href="installation/index.html">Installation Instructions</a><ul>
<li class="toctree-l2"><a class="reference internal" href="installation/downloads.html">Downloading CodeIgniter</a></li>
<li class="toctree-l2"><a class="reference internal" href="installation/index.html">Installation Instructions</a></li>
<li class="toctree-l2"><a class="reference internal" href="installation/upgrading.html">Upgrading From a Previous Version</a></li>
<li class="toctree-l2"><a class="reference internal" href="installation/troubleshooting.html">Troubleshooting</a></li>
</ul>
</li>
</ul>
</div>
</div>
<div class="section" id="introduction">
<h2><a class="toc-backref" href="#id4">Introduction</a><a class="headerlink" href="#introduction" title="Permalink to this headline">¶</a></h2>
<div class="toctree-wrapper compound">
<ul>
<li class="toctree-l1"><a class="reference internal" href="overview/index.html">CodeIgniter Overview</a><ul>
<li class="toctree-l2"><a class="reference internal" href="overview/getting_started.html">Getting Started</a></li>
<li class="toctree-l2"><a class="reference internal" href="overview/at_a_glance.html">CodeIgniter at a Glance</a></li>
<li class="toctree-l2"><a class="reference internal" href="overview/features.html">Supported Features</a></li>
<li class="toctree-l2"><a class="reference internal" href="overview/appflow.html">Application Flow Chart</a></li>
<li class="toctree-l2"><a class="reference internal" href="overview/mvc.html">Model-View-Controller</a></li>
<li class="toctree-l2"><a class="reference internal" href="overview/goals.html">Architectural Goals</a></li>
</ul>
</li>
</ul>
</div>
</div>
<div class="section" id="tutorial">
<h2><a class="toc-backref" href="#id5">Tutorial</a><a class="headerlink" href="#tutorial" title="Permalink to this headline">¶</a></h2>
<div class="toctree-wrapper compound">
<ul>
<li class="toctree-l1"><a class="reference internal" href="tutorial/index.html">Tutorial</a><ul>
<li class="toctree-l2"><a class="reference internal" href="tutorial/static_pages.html">Static pages</a></li>
<li class="toctree-l2"><a class="reference internal" href="tutorial/news_section.html">News section</a></li>
<li class="toctree-l2"><a class="reference internal" href="tutorial/create_news_items.html">Create news items</a></li>
<li class="toctree-l2"><a class="reference internal" href="tutorial/conclusion.html">Conclusion</a></li>
</ul>
</li>
</ul>
</div>
</div>
<div class="section" id="contributing-to-codeigniter">
<h2><a class="toc-backref" href="#id6">Contributing to CodeIgniter</a><a class="headerlink" href="#contributing-to-codeigniter" title="Permalink to this headline">¶</a></h2>
<div class="toctree-wrapper compound">
<ul>
<li class="toctree-l1"><a class="reference internal" href="contributing/index.html">Contributing to CodeIgniter</a><ul>
<li class="toctree-l2"><a class="reference internal" href="documentation/index.html">Writing CodeIgniter Documentation</a></li>
<li class="toctree-l2"><a class="reference internal" href="DCO.html">Developer’s Certificate of Origin 1.1</a></li>
</ul>
</li>
</ul>
</div>
</div>
<div class="section" id="general-topics">
<h2><a class="toc-backref" href="#id7">General Topics</a><a class="headerlink" href="#general-topics" title="Permalink to this headline">¶</a></h2>
<div class="toctree-wrapper compound">
<ul>
<li class="toctree-l1"><a class="reference internal" href="general/index.html">General Topics</a><ul>
<li class="toctree-l2"><a class="reference internal" href="general/urls.html">CodeIgniter URLs</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/controllers.html">Controllers</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/reserved_names.html">Reserved Names</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/views.html">Views</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/models.html">Models</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/helpers.html">Helpers</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/libraries.html">Using CodeIgniter Libraries</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/creating_libraries.html">Creating Libraries</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/drivers.html">Using CodeIgniter Drivers</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/creating_drivers.html">Creating Drivers</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/core_classes.html">Creating Core System Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/ancillary_classes.html">Creating Ancillary Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/hooks.html">Hooks - Extending the Framework Core</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/autoloader.html">Auto-loading Resources</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/common_functions.html">Common Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/compatibility_functions.html">Compatibility Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/routing.html">URI Routing</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/errors.html">Error Handling</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/caching.html">Caching</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/profiling.html">Profiling Your Application</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/cli.html">Running via the CLI</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/managing_apps.html">Managing your Applications</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/environments.html">Handling Multiple Environments</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/alternative_php.html">Alternate PHP Syntax for View Files</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/security.html">Security</a></li>
<li class="toctree-l2"><a class="reference internal" href="general/styleguide.html">PHP Style Guide</a></li>
</ul>
</li>
</ul>
</div>
</div>
<div class="section" id="library-reference">
<h2><a class="toc-backref" href="#id8">Library Reference</a><a class="headerlink" href="#library-reference" title="Permalink to this headline">¶</a></h2>
<div class="toctree-wrapper compound">
<ul>
<li class="toctree-l1"><a class="reference internal" href="libraries/index.html">Libraries</a><ul>
<li class="toctree-l2"><a class="reference internal" href="libraries/benchmark.html">Benchmarking Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/caching.html">Caching Driver</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/calendar.html">Calendaring Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/cart.html">Shopping Cart Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/config.html">Config Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/email.html">Email Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/encrypt.html">Encrypt Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/encryption.html">Encryption Library</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/file_uploading.html">File Uploading Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/form_validation.html">Form Validation</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/ftp.html">FTP Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/image_lib.html">Image Manipulation Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/input.html">Input Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/javascript.html">Javascript Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/language.html">Language Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/loader.html">Loader Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/migration.html">Migrations Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/output.html">Output Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/pagination.html">Pagination Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/parser.html">Template Parser Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/security.html">Security Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/sessions.html">Session Library</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/table.html">HTML Table Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/trackback.html">Trackback Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/typography.html">Typography Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/unit_testing.html">Unit Testing Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/uri.html">URI Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/user_agent.html">User Agent Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/xmlrpc.html">XML-RPC and XML-RPC Server Classes</a></li>
<li class="toctree-l2"><a class="reference internal" href="libraries/zip.html">Zip Encoding Class</a></li>
</ul>
</li>
</ul>
</div>
</div>
<div class="section" id="database-reference">
<h2><a class="toc-backref" href="#id9">Database Reference</a><a class="headerlink" href="#database-reference" title="Permalink to this headline">¶</a></h2>
<div class="toctree-wrapper compound">
<ul>
<li class="toctree-l1"><a class="reference internal" href="database/index.html">Database Reference</a><ul>
<li class="toctree-l2"><a class="reference internal" href="database/examples.html">Quick Start: Usage Examples</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/configuration.html">Database Configuration</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/connecting.html">Connecting to a Database</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/queries.html">Running Queries</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/results.html">Generating Query Results</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/helpers.html">Query Helper Functions</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/query_builder.html">Query Builder Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/transactions.html">Transactions</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/metadata.html">Getting MetaData</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/call_function.html">Custom Function Calls</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/caching.html">Query Caching</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/forge.html">Database Manipulation with Database Forge</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/utilities.html">Database Utilities Class</a></li>
<li class="toctree-l2"><a class="reference internal" href="database/db_driver_reference.html">Database Driver Reference</a></li>
</ul>
</li>
</ul>
</div>
</div>
<div class="section" id="helper-reference">
<h2><a class="toc-backref" href="#id10">Helper Reference</a><a class="headerlink" href="#helper-reference" title="Permalink to this headline">¶</a></h2>
<div class="toctree-wrapper compound">
<ul>
<li class="toctree-l1"><a class="reference internal" href="helpers/index.html">Helpers</a><ul>
<li class="toctree-l2"><a class="reference internal" href="helpers/array_helper.html">Array Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/captcha_helper.html">CAPTCHA Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/cookie_helper.html">Cookie Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/date_helper.html">Date Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/directory_helper.html">Directory Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/download_helper.html">Download Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/email_helper.html">Email Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/file_helper.html">File Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/form_helper.html">Form Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/html_helper.html">HTML Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/inflector_helper.html">Inflector Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/language_helper.html">Language Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/number_helper.html">Number Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/path_helper.html">Path Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/security_helper.html">Security Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/smiley_helper.html">Smiley Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/string_helper.html">String Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/text_helper.html">Text Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/typography_helper.html">Typography Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/url_helper.html">URL Helper</a></li>
<li class="toctree-l2"><a class="reference internal" href="helpers/xml_helper.html">XML Helper</a></li>
</ul>
</li>
</ul>
</div>
<div class="toctree-wrapper compound">
</div>
</div>
</div>


          </div>
          <footer>
  
    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
      
        <a href="general/welcome.html" class="btn btn-neutral float-right" title="Welcome to CodeIgniter">Next <span class="fa fa-arrow-circle-right"></span></a>
      
      
    </div>
  

  <hr/>

  <div role="contentinfo">
    <p>
        &copy; Copyright 2014 - 2019, British Columbia Institute of Technology.
      Last updated on Sep 19, 2019.
    </p>
  </div>

  Built with <a href="http://sphinx-doc.org/">Sphinx</a> using a <a href="https://github.com/snide/sphinx_rtd_theme">theme</a> provided by <a href="https://readthedocs.org">Read the Docs</a>.
  
</footer>
        </div>
      </div>

    </section>

  </div>
  


  

    <script type="text/javascript">
        var DOCUMENTATION_OPTIONS = {
            URL_ROOT:'./',
            VERSION:'3.1.11',
            COLLAPSE_INDEX:false,
            FILE_SUFFIX:'.html',
            HAS_SOURCE:  false
        };
    </script>
      <script type="text/javascript" src="_static/jquery.js"></script>
      <script type="text/javascript" src="_static/underscore.js"></script>
      <script type="text/javascript" src="_static/doctools.js"></script>

  

  
  
    <script type="text/javascript" src="_static/js/theme.js"></script>
  

  
  
  <script type="text/javascript">
      jQuery(function () {
          SphinxRtdTheme.StickyNav.enable();
      });
  </script>
   

</body>
</html>